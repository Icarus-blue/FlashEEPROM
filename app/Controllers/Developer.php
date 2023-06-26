<?php

namespace App\Controllers;

class Developer extends BaseController
{
    private const MAX_TOTAL_SIZE = 20971520;
    private const MAX_IMAGE_SIZE = 102400;

    private $fileModel;
    private $fileModel_new;
    private $luaModel;
    private $histortyModel;
    private $withdrawModel;
    private $questionModel;
    private $groupModel;
    private $registerkey;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->fileModel = new \App\Models\DeveloperFileModel();
        $this->fileModel_new = new \App\Models\DeveloperFileModelnew();
        $this->luaModel = new \App\Models\LuaScriptModel();
        $this->historyModel = new \App\Models\DeveloperHistoryModel();
        $this->withdrawModel = new \App\Models\WithdrawModel();
        $this->questionModel = new \App\Models\QuestionModel();
        $this->groupModel = new \App\Models\QuestionGroupModel();
        $this->registerkey = new \App\Models\RegisterKeyModel();
    }

    public function index()
    {
        if (!$this->isUserLoggedIn() || !$this->user->isDeveloper()) {
            return $this->forbidden();
        }

        $this->renderDefaultLayout('developer', [
            'class' => 'home',
            'groups' => $this->groupModel->getQuestions(),
            'folders' => view('elements/file-table-folder', [
                'folders' => $this->getScriptFolders()
            ])
        ] + $this->getFileList([]));
    }

    public function smtgenerator_general()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }

        $this->renderDefaultLayout('developer1', [
            'class' => 'home',
            'groups' => $this->groupModel->getQuestions(),
            'folders' => view('elements/file-table-folder', [
                'folders' => $this->getScriptFolders_new()
            ])
        ] + $this->getFileList_new([]));
    }

    private function getScriptFolders_new()
    {

        $lua = $this->luaModel->getPublished($this->user->userid);
        $scripts = \App\Scripts\ScriptList::getFileTree($lua);
        $initialId = 0;
        return $this->getFoldersFromArray_new($initialId, null, '', $scripts);
    }

    private function getFoldersFromArray_new(int &$lastId, ?int $parentId, string $path, array $folders)
    {
        $result = [];
        foreach ($folders as $name => $items) {
            if (!is_array($items)) {
                continue;
            }
            $lastId++;
            $folder = [
                'id' => $lastId,
                'parentid' => $parentId,
                'name' => $name,
                'full_path' => !empty($path) ? $path . '/' . $name : $name
            ];
            $result[] = $folder;

            $result[] = [
                'id' => $parentId ?? 'initial',
                'parentid' => $lastId,
                'name' => '..',
                'full_path' => $folder['full_path']
            ];

            $result = array_merge($result, $this->getFoldersFromArray(
                $lastId,
                $folder['id'],
                $folder['full_path'],
                $items
            ));
        }

        return $result;
    }


    private function getFileList_new(array $opened)
    {
        $for_template = false;
        if ($this->user && $this->user->canManageTemplates() && $this->request->getPost('for_template')) {
            $for_template = true;
        }
        $files = \App\Scripts\ScriptList::getFiles_new($this->user, $for_template);

        return [
            'filetree' => view('elements/file-tree', [
                'scripts' => \App\Scripts\ScriptList::convertToTree($files),
                'opened' => $opened
            ]),
            'filetable' => view('elements/file-table_new', [
                'files' => $files,
                'canEditTemplates' => $for_template
            ])
        ];
    }

    public function newFile_new()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }

        $folder = $this->fileModel_new->getById($this->request->getPost('folderid'));
        if (!$folder || (!$folder->isScriptDirectory() && (!$this->user->canManageTemplates() || !$folder->isTemplateDirectory()))) {
            return $this->pageNotFound();
        }

        if ($folder->userid != $this->user->userid && (!$this->user->canManageTemplates() || !$folder->isTemplateDirectory())) {
            return $this->forbidden();
        }
        $type = intval($this->request->getPost('script_type'));
        if (!\App\Entities\DeveloperFile::isValidType($type)) {
            $type = \App\Entities\DeveloperFile::TYPE_REGULAR;
        }

        if ($type == \App\Entities\DeveloperFile::TYPE_REGULAR) {
            $template_get = WRITEPATH . 'developer/template.get.lua';
            $template_calc = WRITEPATH . 'developer/template.calc.lua';
        } else {
            $template_get = WRITEPATH . 'developer/readonly.get.lua';
            $template_calc = WRITEPATH . 'developer/readonly.calc.lua';
        }
        $file = $this->fileModel_new->createFile(
            $this->request->getPost('name') . '.smt',
            $folder,
            $this->user,
            filesize($template_get) + filesize($template_calc),
            $type
        );

        if ($file) {
            copy($template_get, WRITEPATH . 'developer/' . $file->developerfileid . '.smt');
            copy($template_calc, WRITEPATH . 'developer/' . $file->developerfileid . '.smt');
        }

        die(json_encode([
            'success' => true
        ] + $this->getFileList_new(explode(',', $this->request->getPost('opened')))));
    }


    public function newFolder_new()
    {
        if (!$this->isUserLoggedIn() ) {
            return $this->forbidden();
        }
        $folderid = ($this->request->getPost('folderid') === '') ? 1 : $this->request->getPost('folderid');
        $folder = $this->fileModel_new->getById($folderid);

        $directory_type = ($folder) ?  $folder->directory_type : 1;
        if (!$folder || !$folder->isDirectory()) {
            return $this->pageNotFound();
        }

        if ($folder->userid != $this->user->userid && (!$this->user->canManageTemplates() || !$folder->isTemplateDirectory())) {
            return $this->forbidden();
        }

        $this->fileModel_new->createFolder(
            $this->request->getPost('name'),
            $folder,
            $this->user,
            $directory_type
        );

        die(json_encode([
            'success' => true
        ] + $this->getFileList_new(explode(',', $this->request->getPost('opened')))));
    }

    public function inser_arr_str()
    {
        $id = $this->request->getGet('id');
        $str = $this->request->getGet('str');
        $data = [
            "str" => $str
        ];
        $this->fileModel_new->updatefield($id, $data);
    }

    public function smtgenerator(int $id)
    {
        if (!$this->isUserLoggedIn() ) {
            return $this->forbidden();
        }
        $register = $this->registerkey->getFieldByUserID($this->user->userid);
        $filemodel = $this->fileModel_new->getById($id);

        $this->renderDefaultLayout_new('smtgenerator', [
            'class' => 'home',
            'groups' => $this->groupModel->getQuestions(),
            'registerkey' => $register ? 1 : 0,
            'id' => $id,
            'register_data' => $register,
            'str' => $filemodel->str,
            'folders' => view('elements/file-table-folder', [
                'folders' => $this->getScriptFolders()
            ])
        ] + $this->getFileList_new([]));
    }

    private function getScriptFolders()
    {
        $lua = $this->luaModel->getPublished();
        $scripts = \App\Scripts\ScriptList::getFileTree($lua);

        $initialId = 0;
        return $this->getFoldersFromArray($initialId, null, '', $scripts);
    }

    private function getFoldersFromArray(int &$lastId, ?int $parentId, string $path, array $folders)
    {
        $result = [];
        foreach ($folders as $name => $items) {
            if (!is_array($items)) {
                continue;
            }

            $lastId++;
            $folder = [
                'id' => $lastId,
                'parentid' => $parentId,
                'name' => $name,
                'full_path' => !empty($path) ? $path . '/' . $name : $name
            ];
            $result[] = $folder;

            $result[] = [
                'id' => $parentId ?? 'initial',
                'parentid' => $lastId,
                'name' => '..',
                'full_path' => $folder['full_path']
            ];

            $result = array_merge($result, $this->getFoldersFromArray(
                $lastId,
                $folder['id'],
                $folder['full_path'],
                $items
            ));
        }

        return $result;
    }

    private function getFileList(array $opened)
    {
        $for_template = false;
        if ($this->user && $this->user->canManageTemplates() && $this->request->getPost('for_template')) {
            $for_template = true;
        }

        $files = \App\Scripts\ScriptList::getFiles($this->user, $for_template);
        if (!$for_template) {
            $files = array_merge($files, $this->fileModel->getTemplateFiles());
        }

        return [
            'filetree' => view('elements/file-tree', [
                'scripts' => \App\Scripts\ScriptList::convertToTree($files),
                'opened' => $opened
            ]),
            'filetable' => view('elements/file-table', [
                'files' => $files,
                'canEditTemplates' => $for_template
            ])
        ];
    }

    public function load(int $fileid)
    {
        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($fileid);
        if (!$file || !$file->isScript()) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid && !$this->user->canManageTemplates() && !$file->is_template) {
            return $this->forbidden();
        }

        die(json_encode([
            'readcode' => esc($this->readIfExists(WRITEPATH . "developer/$fileid.get.lua")),
            'writecode' => esc($this->readIfExists(WRITEPATH . "developer/$fileid.calc.lua")),
            'images' => $this->fileModel->getImages($file),
            'success' => true
        ]));
    }

    private function readIfExists(string $file)
    {
        if (file_exists($file)) {
            return file_get_contents($file);
        } else {
            return '';
        }
    }

    public function save(int $fileid)
    {
        if (!$this->isUserLoggedIn() || !$this->user->isDeveloper()) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($fileid);
        if (!$file || !$file->isScript() || !$file->canBeEdited()) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid) {
            return $this->forbidden();
        }

        $imageid = $this->request->getPost('imageid');
        if (empty($imageid)) {
            $file->imageid = null;
        } else {
            $image = $this->fileModel->getById($imageid);
            if (!$image || !$image->isImage() || $image->userid != $this->user->userid) {
                return $this->pageNotFound();
            }

            $file->imageid = $image->developerfileid;
        }

        $images = [];
        $additionalImages = $this->request->getPost('images');
        if (!empty($additionalImages)) {
            $additionalImages = explode(',', $additionalImages);
            foreach ($additionalImages as $imageid) {
                $image = $this->fileModel->getById($imageid);
                if (!$image || !$image->isImage() || $image->userid != $this->user->userid) {
                    return $this->pageNotFound();
                }
                $images[] = $image;
            }
        }

        $readfile = WRITEPATH . "developer/$fileid.get.lua";
        $readscript = $this->request->getPost('readcode');
        file_put_contents(WRITEPATH . "developer/$fileid.get.lua", $readscript);

        $writefile = WRITEPATH . "developer/$fileid.calc.lua";
        $writescript = $this->request->getPost('writecode');
        file_put_contents(WRITEPATH . "developer/$fileid.calc.lua", $writescript);

        $file->size = filesize($readfile) + filesize($writefile);
        $this->fileModel->save($file);

        $this->fileModel->setImages($file, $images);

        die(json_encode([
            'success' => true
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }

    public function image(int $fileid)
    {
        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($fileid);
        if (!$file || !$file->isImage()) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid && !$this->user->canManageTemplates()) {
            return $this->forbidden();
        }

        $extension = pathinfo($file->name, PATHINFO_EXTENSION);
        $path = WRITEPATH . 'developer/' . $file->developerfileid . '.' . $extension;
        $file = new \CodeIgniter\Files\File($path);

        header("Content-Type: " . $file->getMimeType());
        header("Content-Length: " . filesize($path));

        readfile($path);
        exit;
    }

    public function withdraw()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }

        if ($this->request->getMethod() == 'post') {
            $withdraw = new \App\Entities\Withdraw();
            $withdraw->userid = $this->user->userid;
            $withdraw->phone = $this->request->getPost('phone');
            $withdraw->paypal = $this->request->getPost('paypal');
            $withdraw->document = $this->request->getPost('document');

            $amount = floatval($this->request->getPost('amount'));
            if ($amount < 5 || $amount > $this->user->balance) {
                $this->renderDefaultLayout('withdraw', ['error' => true]);
                return;
            }
            $withdraw->amount = $amount;
            $withdraw->registered_at = date('Y-m-d H:i:s');
            $success = $this->withdrawModel->withdraw($withdraw);

            if ($success) {
                $user = $this->userModel->getUserToNotify();
                $email = \Config\Services::email();

                $email->setTo($user->email);

                $email->setSubject('Solicitud de pago');
                $email->setMessage(view('email/withdraw', [
                    'user' => $this->user,
                    'withdraw' => $withdraw
                ]));

                $email->send();

                return redirect()->to('/developer/stats');
            } else {
                $this->renderDefaultLayout('withdraw', ['error' => true]);
                return;
            }
        }

        $this->renderDefaultLayout('withdraw', ['error' => false]);
    }

    public function stats(?int $userid = null)
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }

        $user = $this->user;
        if (!empty($userid) && $this->user->canManageAllUsers()) {
            $user = $this->userModel->getById($userid);
            if (!$user) {
                return $this->pageNotFound();
            }
        }

        $today = $this->historyModel->getStatsByRange($user,
            date('Y-m-d 00:00:00'), date('Y-m-d 00:00:00', strtotime('+1 day'))
        );

        $yesterday = $this->historyModel->getStatsByRange($user,
            date('Y-m-d 00:00:00', strtotime('-1 day')), date('Y-m-d 00:00:00')
        );

        $week_ago = $this->historyModel->getStatsByRange($user,
            date('Y-m-d 00:00:00', strtotime('-8 days')),
            date('Y-m-d 00:00:00', strtotime('-7 days'))
        );

        $current_week = $this->historyModel->getStatsByRange($user,
            date('Y-m-d 00:00:00', strtotime('-7 days')),
            date('Y-m-d 00:00:00', strtotime('-1 days'))
        );

        $week_before = $this->historyModel->getStatsByRange($user,
            date('Y-m-d 00:00:00', strtotime('-14 days')),
            date('Y-m-d 00:00:00', strtotime('-7 days'))
        );

        $month_data = $this->historyModel->getStatsByRange($user,
            date('Y-m-d 00:00:00', strtotime('-30 days')),
            date('Y-m-d 00:00:00', strtotime('-1 days'))
        );

        $month_last_year = $this->historyModel->getStatsByRange($user,
            date('Y-m-d 00:00:00', strtotime('-1 year 30 days')),
            date('Y-m-d 00:00:00', strtotime('-1 year'))
        );

        $all_time = $this->historyModel->getStatsByRange($user);

        $month = $this->request->getGet('month');
        $year = $this->request->getGet('year');
        if (empty($month) || empty($year)) {
            $month = date('n');
            $year = date('Y');
        }

        $date_start = date('Y-m-d 00:00:00', mktime(0, 0, 0, $month, 1, $year));
        $date_end = date('Y-m-d 00:00:00', mktime(0, 0, 0, $month + 1, 1, $year));
        $items = $this->historyModel->getItemsByRange($user, $date_start, $date_end);

        $last_withdraw = 0;
        $withdraw = $this->withdrawModel->getLastWithdraw($user);
        if ($withdraw) {
            $last_withdraw = $withdraw->amount;
        }

        $this->renderDefaultLayout('developer-stats', [
            'today' => $today,
            'yesterday' => $yesterday,
            'week_ago' => $week_ago,
            'current_week' => $current_week,
            'week_before' => $week_before,
            'month' => $month_data,
            'month_last_year' => $month_last_year,
            'all_time' => $all_time,
            'items' => $items,
            'last_withdraw' => $last_withdraw,
            'current_user' => $user
        ]);
    }

    public function newImage()
    {
        if (!$this->isUserLoggedIn() || !$this->user->isDeveloper()) {
            return $this->forbidden();
        }

        $folder = $this->fileModel->getById($this->request->getPost('folderid'));
        if (!$folder || !$folder->isImageDirectory()) {
            return $this->pageNotFound();
        }

        if ($folder->userid != $this->user->userid) {
            return $this->forbidden();
        }

        $image = $this->request->getfile('image');

        $totalSize = $this->fileModel->getTotalSize($this->user);
        if ($totalSize + $image->getSize() > self::MAX_TOTAL_SIZE) {
            return die(json_encode([
                'success' => false,
                'message' => 'El total de archivos supera el límite de tamaño'
            ]));
        }

        if (!$image || !$image->isValid() || $image->getSize() > self::MAX_IMAGE_SIZE) {
            return die(json_encode([
                'success' => false,
                'message' => 'La imagen no es válida o supera el límite de tamaño'
            ]));
        }

        if (!$this->isValidImage($image->getTempName())) {
            return die(json_encode([
                'success' => false,
                'message' => 'La imagen no es válida'
            ]));
        }

        $name = pathinfo($image->getName(), PATHINFO_FILENAME);
        $extension = $image->guessExtension();
        $file = $this->fileModel->createFile(
            $name . '.' . $image->guessExtension(),
            $folder,
            $this->user,
            $image->getSize()
        );
        if (!$file) {
            return die(json_encode([
                'success' => false,
                'message' => 'No se pudo crear el archivo'
            ]));
        }

        $image->move(WRITEPATH . 'developer', $file->developerfileid . '.' . $extension);

        die(json_encode([
            'success' => true
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }

    private function isValidImage(string $path)
    {
        try {
            $image = \Config\Services::image()
                ->withFile($path);

            $width = $image->getWidth();
            $height = $image->getHeight();

            return true;
        } catch (\CodeIgniter\Images\Exceptions\ImageException $e) {
            return false;
        }
    }

    public function newFile()
    {
        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $folder = $this->fileModel->getById($this->request->getPost('folderid'));
        if (!$folder || (!$folder->isScriptDirectory() && (!$this->user->canManageTemplates() || !$folder->isTemplateDirectory()))) {
            return $this->pageNotFound();
        }

        if ($folder->userid != $this->user->userid && (!$this->user->canManageTemplates() || !$folder->isTemplateDirectory())) {
            return $this->forbidden();
        }

        $type = intval($this->request->getPost('script_type'));
        if (!\App\Entities\DeveloperFile::isValidType($type)) {
            $type = \App\Entities\DeveloperFile::TYPE_REGULAR;
        }

        if ($type == \App\Entities\DeveloperFile::TYPE_REGULAR) {
            $template_get = WRITEPATH . 'developer/template.get.lua';
            $template_calc = WRITEPATH . 'developer/template.calc.lua';
        } else {
            $template_get = WRITEPATH . 'developer/readonly.get.lua';
            $template_calc = WRITEPATH . 'developer/readonly.calc.lua';
        }

        $file = $this->fileModel->createFile(
            $this->request->getPost('name') . '.lua',
            $folder,
            $this->user,
            filesize($template_get) + filesize($template_calc),
            $type
        );

        if ($file) {
            copy($template_get, WRITEPATH . 'developer/' . $file->developerfileid . '.get.lua');
            copy($template_calc, WRITEPATH . 'developer/' . $file->developerfileid . '.calc.lua');
        }

        die(json_encode([
            'success' => true
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }

    public function newFolder()
    {
        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $folder = $this->fileModel->getById($this->request->getPost('folderid'));
        if (!$folder || !$folder->isDirectory()) {
            return $this->pageNotFound();
        }

        if ($folder->userid != $this->user->userid && (!$this->user->canManageTemplates() || !$folder->isTemplateDirectory())) {
            return $this->forbidden();
        }

        $this->fileModel->createFolder(
            $this->request->getPost('name'),
            $folder,
            $this->user,
            $folder->directory_type
        );

        die(json_encode([
            'success' => true
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }

    public function deleteFile()
    {
        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($this->request->getPost('fileid'));
        if (!$file || !$file->canBeRenamedOrDeleted($this->user->canManageTemplates())) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid && (!$this->user->canManageTemplates() || !$file->is_template)) {
            return $this->forbidden();
        }

        die(json_encode([
            'success' => $this->fileModel->delete($file->developerfileid)
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }

    public function renameFile()
    {
        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($this->request->getPost('fileid'));
        if (!$file || !$file->canBeRenamedOrDeleted($this->user->canManageTemplates())) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid && (!$this->user->canManageTemplates() || !$file->is_template)) {
            return $this->forbidden();
        }

        $name = $this->request->getPost('name');
        if (!$file->isDirectory()) {
            $extension = pathinfo($file->name, PATHINFO_EXTENSION);
            $name .= '.' . $extension;
        }

        die(json_encode([
            'success' => $this->fileModel->renameFile($file, $name)
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }

    public function publish()
    {
        $fileid = intval($this->request->getPost('fileid'));

        if (!$this->isUserLoggedIn() || !$this->user->isDeveloper()) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($fileid);
        if (!$file || !$file->isScript() || !$file->canBeEdited()) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid) {
            return $this->forbidden();
        }

        $prefix = $this->request->getPost('prefix');
        $path = $this->request->getPost('path');
        if (substr($path, -1) != '/') {
            $path .= '/';
        }
        $path .= $file->name;

        $questionids = $this->request->getPost('question');
        if (!$questionids) {
            $questions = [];
        } else {
            $questions = $this->questionModel->getManyById($questionids);
        }

        if ($lua = $this->luaModel->requestPublish($file, $prefix, $path, $questions)) {
            copy(WRITEPATH . "developer/$fileid.get.lua",
                WRITEPATH . 'scripts/' . $lua->luascriptid . '.get.lua');
            copy(WRITEPATH . "developer/$fileid.calc.lua",
                WRITEPATH . 'scripts/' . $lua->luascriptid . '.calc.lua');

            $this->fileModel->markAsPending($file);

            $email = \Config\Services::email();

            $email->setTo($this->user->email);

            $email->setSubject('Proceso de aprobación de script');
            $email->setMessage(view('email/script-process'));

            $email->send();
        }

        die(json_encode([
            'success' => true
        ] + $this->getFileList(explode(',', $this->request->getPost('opened')))));
    }

    public function calculateResult()
    {
        $fileid = intval($this->request->getPost('scriptid'));

        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($fileid);
        if (!$file || !$file->isScript()) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid && !$this->user->canManageTemplates() && !$file->is_template) {
            return $this->forbidden();
        }

        $script = new \App\Scripts\LuaScript($this->request->getPost('hex'));
        $script->setResultCode(file_get_contents(WRITEPATH . 'developer/' . $fileid . '.get.lua'));
        $script->setCalculateCode(file_get_contents(WRITEPATH . 'developer/' . $fileid . '.calc.lua'));
        if ($file->imageid) {
            $script->setImage('developer/image/' . $file->imageid);
        }
        $script->setImages($this->fileModel->getImages($file), 'developer/image/');
        $script->setScriptType($file->script_type);

        $result = $script->calculateRead();
        $result['success'] = true;
        die(json_encode($result));
    }

    public function run()
    {
        $fileid = intval($this->request->getPost('scriptid'));

        if (!$this->isUserLoggedIn() || (!$this->user->isDeveloper() && !$this->user->canManageTemplates())) {
            return $this->forbidden();
        }

        $file = $this->fileModel->getById($fileid);
        if (!$file || !$file->isScript()) {
            return $this->pageNotFound();
        }

        if ($file->userid != $this->user->userid && !$this->user->canManageTemplates() && !$file->is_template) {
            return $this->forbidden();
        }

        $script = new \App\Scripts\LuaScript($this->request->getPost('hex'));
        $script->setResultCode(file_get_contents(WRITEPATH . 'developer/' . $fileid . '.get.lua'));
        $script->setCalculateCode(file_get_contents(WRITEPATH . 'developer/' . $fileid . '.calc.lua'));
        if ($file->imageid) {
            $script->setImage('developer/image/' . $file->imageid);
        }
        $script->setImages($this->fileModel->getImages($file), 'developer/image/');
        $script->setScriptType($file->script_type);

        if ($this->request->getPost('mode')) {
            if ($this->user->hasExpired()) {
                die(json_encode(['expired' => true]));
            }

            die(json_encode($script->calculate(intval($this->request->getPost('value')))));
        } else {
            $data = $script->getResult();
            $data['expired'] = (!$this->user || $this->user->hasExpired());
            $data['scriptType'] = $script->getScriptType();
            die(json_encode($data));
        }
    }
}