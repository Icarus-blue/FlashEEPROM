<?php

namespace App\Controllers;

class Admin extends BaseController
{
    private const ITEMS_PER_PAGE = 10;
    
    private $downloadModel;
    private $luaModel;
    private $configModel;
    private $fileModel;
    private $questionModel;
    private $paymentModel;
    private $withdrawModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->downloadModel = new \App\Models\DownloadModel();
        $this->luaModel = new \App\Models\LuaScriptModel();
        $this->fileModel = new \App\Models\DeveloperFileModel();
        $this->configModel = new \App\Models\ConfigModel();
        $this->questionModel = new \App\Models\QuestionModel();
        $this->paymentModel = new \App\Models\PaymentModel();
        $this->withdrawModel = new \App\Models\WithdrawModel();
    }
    
    public function dashboard()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $filter = $this->request->getGet('s');
        if (!empty($filter)) {
            $items = $this->userModel->getFilteredAndPaged($filter, self::ITEMS_PER_PAGE);
        } else {
            $items = $this->userModel->getPaged(self::ITEMS_PER_PAGE);
        }
        
        if (!$this->request->isAJAX()) {
            $this->renderDefaultLayout('dashboard', [
                'downloads' => $this->downloadModel->getTotalDownloads(),
                'users' => $items,
                'pager' => $this->userModel->pager,
                'tableOnly' => false,
                'config' => $this->configModel->getMultipleByName(['initial_days', 'initial_tokens'])
            ]);
        } else {
            echo view('dashboard', [
                'user' => $this->user,
                'users' => $items,
                'pager' => $this->userModel->pager,
                'tableOnly' => true,
            ]);
        }
    }

    public function sellers()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }

        $filter = $this->request->getGet('s');
        if (!empty($filter)) {
            $items = $this->userModel->getSellersFilteredAndPaged($filter, self::ITEMS_PER_PAGE);
        } else {
            $items = $this->userModel->getSellersPaged(self::ITEMS_PER_PAGE);
        }

        if (!$this->request->isAJAX()) {
            $this->renderDefaultLayout('sellers', [
                'users' => $items,
                'pager' => $this->userModel->pager,
                'tableOnly' => false,
            ]);
        } else {
            echo view('sellers', [
                'user' => $this->user,
                'users' => $items,
                'pager' => $this->userModel->pager,
                'tableOnly' => true,
            ]);
        }
    }

    public function tokens()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }

        $stats = $this->getFormattedTokensStatistics();

        $payable = $this->userModel->getTokensToPay();
        $sold = $this->paymentModel->getSoldTokens();
        $this->renderDefaultLayout('admin-tokens', [
            'current' => [
                'available' => $sold - $payable,
                'payable' => $payable,
                'sold' => $sold
            ],
            'soldStats' => $stats
        ]);
    }

    private function getFormattedTokensStatistics()
    {
        $dateStart = date('Y-01-01');
        $dateEnd = date('Y-12-31');

        $tokenStats = $this->paymentModel->getStatisticsByRange($dateStart, $dateEnd);
        $paidStats = $this->withdrawModel->getStatisticsByRange($dateStart, $dateEnd);

        $result = [];
        $initial = strtotime($dateStart);
        for ($i = 1; $i <= 12; $i++) {
            $key = date('Y-' . str_pad(strval($i), 2, '0', STR_PAD_LEFT)  . '-t', mktime(12, 0, 0, $i, 1, date('Y')));
            $result[$key] = [
                'sold' => 0,
                'paid' => 0
            ];
        }

        foreach ($tokenStats as $stat) {
            $result[$stat['month']]['sold'] = $stat['total'] * \App\Models\PaymentModel::TOKENS_PER_PAYMENT;
        }

        foreach ($paidStats as $stat) {
            $result[$stat['month']]['paid'] = $stat['total'];
        }

        return $result;
    }

    public function users()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $paymentStats = $this->paymentModel->getStatistics();
        $stats = $this->getFormattedStatistics();

        $this->renderDefaultLayout('user-stats', [
            'users' => $this->userModel->countByRange(),
            'usersWhoPaid' => $paymentStats['total'],
            'returning' => $paymentStats['returning'],
            'stats' => $stats
        ]);
    }

    private function getFormattedStatistics()
    {
        $dateStart = date('Y-01-01');
        $dateEnd = date('Y-12-31');

        $userStats = $this->userModel->getStatisticsByRange($dateStart, $dateEnd);
        $payStats = $this->paymentModel->getStatisticsByRange($dateStart, $dateEnd);

        $result = [];
        $initial = strtotime($dateStart);
        for ($i = 1; $i <= 12; $i++) {
            $key = date('Y-' . str_pad(strval($i), 2, '0', STR_PAD_LEFT)  . '-t', mktime(12, 0, 0, $i, 1, date('Y')));
            $result[$key] = [
                'payTotal' => 0,
                'payReturning' => 0,
                'registered' => 0
            ];
        }

        foreach ($userStats as $stat) {
            $result[$stat['month']]['registered'] = $stat['total'];
        }

        foreach ($payStats as $stat) {
            $result[$stat['month']]['payTotal'] = $stat['total'];
            $result[$stat['month']]['payReturning'] = $stat['returning'];
        }

        return $result;
    }
    
    public function approval()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageTemplates()) {
            return $this->forbidden();
        }
        
        $this->renderDefaultLayout('developer-approval', [
            'class' => 'home',
            'questions' => $this->questionModel->getQuestions()
        ] + $this->getFileList([]));
    }
    
    private function getFileList(array $opened)
    {
        $files = \App\Scripts\ScriptList::getFiles($this->user, true);
        
        return [
            'filetree' => view('elements/file-tree', [
                'scripts' => \App\Scripts\ScriptList::convertToTree($files),
                'opened' => $opened
            ]),
            'filetable' => view('elements/file-table', [
                'files' => $files,
                'canEditTemplates' => true
            ])
        ];
    }
    
    public function modifyApproval(int $id)
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $script = $this->luaModel->getExtended($id);
        if (empty($script->published_at)) {
            return $this->pageNotFound();
        }
        
        $script->tokens = intval($this->request->getPost('tokens'));
        die(json_encode([
            'success' => (bool)$this->luaModel->save($script)
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }
    
    public function approve(int $id)
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $script = $this->luaModel->getExtended($id);
        if (!empty($script->published_at)) {
            return $this->pageNotFound();
        }
        
        $fileid = $script->developerfileid;
        $file = $this->fileModel->getById($fileid);
        
        $approve = intval($this->request->getPost('approve'));
        if (!$approve) {
            $this->luaModel->delete($id);
            $this->fileModel->markAsRejected($file);
            
            $user = $this->userModel->getById($script->userid);
            $email = \Config\Services::email();

            $email->setTo($user->email);

            $email->setSubject('Tu script no fue aprobado');
            $email->setMessage(view('email/script-rejected', [
                'script' => $script,
                'notes' => $this->request->getPost('notes')
            ]));
            
            $email->send();
        } else {
            $title = 'Tu script está aprobado';
            $template = 'email/script-approved';
            
            $oldTokens = $script->tokens;
            $newTokens = intval($this->request->getPost('tokens'));
            if ($newTokens != $script->tokens) {
                $script->tokens = $newTokens;
                
                $title = 'Tu script está aprobado con ajustes';
                $template = 'email/script-approved-adjusted';
            }
            $script->published_at = date('Y-m-d H:i:s');
            $this->luaModel->save($script);
            
            $this->fileModel->markAsApproved($file);
            
            $user = $this->userModel->getById($script->userid);
            $email = \Config\Services::email();

            $email->setTo($user->email);

            $email->setSubject($title);
            $email->setMessage(view($template, [
                'script' => $script,
                'notes' => $this->request->getPost('notes'),
                'oldTokens' => $oldTokens
            ]));
            
            $email->send();
        }
        die(json_encode([
            'success' => true
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }
    
    public function subscription()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $days = abs($this->request->getPost('days', FILTER_SANITIZE_NUMBER_INT));
        $tokens = abs($this->request->getPost('tokens', FILTER_SANITIZE_NUMBER_INT));
        
        $this->configModel->setByName('initial_days', $days);
        $this->configModel->setByName('initial_tokens', $tokens);
        
        return redirect()->to('/admin/dashboard');
    }

    public function promo()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }

        $saved = false;
        if ($this->request->getMethod() == 'post') {
            $this->configModel->setByName('ad_image', $this->request->getPost('image-url'));
            $this->configModel->setByName('ad_url', $this->request->getPost('button-url'));
            $this->configModel->setByName('ad_button', $this->request->getPost('button-text'));
            $this->configModel->setByName('ad_active', $this->request->getPost('active') ? '1' : '0');
            $this->configModel->setByName('ad_html', $this->request->getPost('content'));

            $saved = true;
        }

        $ad = $this->configModel->getMultipleByName([
            'ad_active', 'ad_html', 'ad_button', 'ad_image', 'ad_url'
        ]);
        
        $this->renderDefaultLayout('promo', [
            'class' => 'promo-page',
            'ad' => $ad,
            'saved' => $saved
        ]);
    }
}
