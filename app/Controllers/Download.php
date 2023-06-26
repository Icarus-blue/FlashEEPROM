<?php

namespace App\Controllers;

class Download extends BaseController
{
    private const ITEMS_PER_PAGE = 10;
    
    private $downloadModel;
    
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->downloadModel = new \App\Models\DownloadModel();
    }
    
    public function index()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        $this->renderDefaultLayout('download', [
            'items' => $this->downloadModel->getByUser($this->user, self::ITEMS_PER_PAGE),
            'pager' => $this->downloadModel->pager
        ]);
    }

    public function file(int $downloadid)
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        $download = $this->downloadModel->getById($downloadid);
        if (!$download || $download->userid != $this->user->userid) {
            return $this->pageNotFound();
        }
        
        $path = WRITEPATH . 'history/' . $download->downloadid;
        
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename={$download->filename}");
        header("Content-Length: " . filesize($path));

        readfile($path);
        exit;
    }
}
