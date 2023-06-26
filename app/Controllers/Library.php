<?php

namespace App\Controllers;

class Library extends BaseController
{
    private const MAX_SHARE_SIZE = 102400;
    private const MAX_IMAGE_SIZE = 1048576;
    private const ITEMS_PER_PAGE = 10;
    
    private $shareModel;
    private $downloadModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->shareModel = new \App\Models\ShareModel();
        $this->downloadModel = new \App\Models\DownloadModel();
    }
    
    public function index()
    {
        $filter = $this->request->getGet('s');
        if (!empty($filter)) {
            $items = $this->shareModel->getFilteredAndPaged($filter, self::ITEMS_PER_PAGE);
        } else {
            $items = $this->shareModel->getPaged(self::ITEMS_PER_PAGE);
        }
        
        if (!$this->request->isAJAX()) {
            $this->renderDefaultLayout('library', [
                'items' => $items,
                'pager' => $this->shareModel->pager,
                'tableOnly' => false,
            ]);
        } else {
            echo view('library', [
                'items' => $items,
                'pager' => $this->shareModel->pager,
                'tableOnly' => true,
            ]);
        }
    }
    
    public function view(int $id)
    {
        $share = $this->shareModel->getExtended($id);
        if (!$share) {
            return $this->pageNotFound();
        }
        
        $this->renderDefaultLayout('library-item', [
            'item' => $share
        ]);
    }
    
    public function image(int $id)
    {
        $share = $this->shareModel->getById($id);
        if (!$share) {
            return $this->pageNotFound();
        }
        
        $path = WRITEPATH . 'uploads/' . $share->image;
        $file = new \CodeIgniter\Files\File($path);
        
        header("Content-Type: " . $file->getMimeType());
        header("Content-Length: " . filesize($path));

        readfile($path);
        exit;
    }
    
    public function download(int $id)
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        $share = $this->shareModel->getById($id);
        if (!$share) {
            return $this->pageNotFound();
        }
        
        if ($share->tokens > 0) {
            if (!$this->user->canBypassExpiration()
                && !$this->userModel->reduceTokens($this->user, $share->tokens)) {
                return $this->renderDefaultLayout('insuficient-funds');
            }
        }
        
        $name = $this->sanitizeName($share->name);
        $file = WRITEPATH . 'uploads/' . $share->shareid;

        if ($download = $this->downloadModel->registerDownload($this->user, $name, null, 0, $share->shareid)) {
            file_put_contents(WRITEPATH . 'history/' . $download->downloadid, file_get_contents($file));
            
            if ($this->userModel->isPremium($this->user) && $this->user->userid != $share->userid) {
                $developer = $this->userModel->getById($share->userid);
                $this->userModel->creditShare($developer, $download, $share);
            }
        }
        
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=$name");
        header("Content-Length: " . filesize($file));

        readfile($file);
        exit;
    }
    
    public function share()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getfile('file');
            if (!$file || !$file->isValid() || $file->getSize() > self::MAX_SHARE_SIZE) {
                return $this->shareForm('El archivo no es válido o supera el límite de tamaño');
            }
            
            $image = $this->request->getfile('image');
            if (!$image || !$image->isValid() || $image->getSize() > self::MAX_IMAGE_SIZE) {
                return $this->shareForm('La imagen no es válida o supera el límite de tamaño');
            }
            
            $brand = $this->request->getPost('brand');
            $model = $this->request->getPost('model');
            $year = $this->request->getPost('year');
            $memory = $this->request->getPost('memory');
            $kilometers = $this->request->getPost('kilometers');
            
            if (empty($brand) || empty($model) || empty($year) || empty($memory) || empty($kilometers)) {
                return $this->shareForm('Debe rellenar todos los campos');
            }
            
            $watermarked = $image->getTempName() . '_w';
            if (!$this->watermark($image->getTempName(), $watermarked)) {
                return $this->shareForm('La imagen no es válida');
            }
            
            $share = new \App\Entities\Share();
            $share->userid = $this->user->userid;
            $share->brand = $brand;
            $share->model = $model;
            $share->year = $year;
            $share->memory = $memory;
            $share->kilometers = $kilometers;
            $share->name = $file->getName();
            $share->tokens = intval($this->request->getPost('tokens'));
            if (!$this->shareModel->create($share)) {
                return $this->shareForm(true);
            }
            
            $file->move(WRITEPATH . 'uploads', $share->shareid);
            
            $image_name = $share->shareid . '.' . $image->guessExtension();
            rename($watermarked, WRITEPATH . 'uploads/' . $image_name);
            $share->image = $image_name;
            $this->shareModel->save($share);
            
            return $this->renderDefaultLayout('share-saved');
        }
        
        $this->shareForm();
    }
    
    private function watermark(string $sourcePath, string $targetPath): bool
    {
        return \App\Libraries\Watermark::watermark($sourcePath, $targetPath);
    }
    
    private function sanitizeName(string $name) : string
    {
        $clean = preg_replace('/[^a-zA-Z0-9\\._ -]+/', '', $name);
        $extension = strtolower(substr($clean, -4));
        
        if ($extension != '.bin' && $extension != '.hex') {
            return $clean . '.bin';
        } else {
            return $clean;
        }
    }
    
    private function shareForm(string $error = '')
    {
        $this->renderDefaultLayout('share', [
            'error' => $error
        ]);
    }
}
