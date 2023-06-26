<?php

namespace App\Controllers;

class Script extends BaseController
{
    private $scriptModel;
    private $commentModel;
    private $luaModel;
    private $fileModel;
    private $imageModel;
    
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->scriptModel = new \App\Models\ScriptModel();
        $this->commentModel = new \App\Models\CommentModel();
        $this->downloadModel = new \App\Models\DownloadModel();
        $this->luaModel = new \App\Models\LuaScriptModel();
        $this->fileModel = new \App\Models\DeveloperFileModel();
        $this->imageModel = new \App\Models\ScriptImageModel();
    }
    
    public function editTokens()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }

        $scriptid = intval($this->request->getPost('scriptid'));
        $tokens = intval($this->request->getPost('tokens'));

        $script = $this->scriptModel->getById($scriptid);
        if (!$script) {
            return $this->pageNotFound();
        }

        if ($image = $this->processImageIfValid($scriptid, 'image')) {
            $this->imageModel->createForScript($script, $image, false);
        }

        if ($expired = $this->processImageIfValid($scriptid, 'image_expired', true)) {
            $this->imageModel->createForScript($script, $expired, true);
        }

        $script->tokens = $tokens;
        $this->scriptModel->save($script);

        $this->session->setFlashdata('edit_script', true);
        return redirect()->to('/?s=' . urlencode(substr($script->path, 0, -4)));
    }

    private function processImageIfValid(int $scriptid, string $field, bool $expired = false)
    {
        $image = $this->request->getfile($field);
        if (!$image || !$image->isValid()) {
            return null;
        }

        if (!$this->isValidImage($image->getTempName())) {
            return null;
        }

        $name = ($expired ? 'se-' : 's-') . $scriptid . '.' . $image->guessExtension();

        $image->move(WRITEPATH . 'uploads', $name);
        if ($image->hasMoved()) {
            return $image->getName();
        }
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

    public function additionalimage(int $scriptid, int $imageid)
    {
        $entity = $this->scriptModel->getById($scriptid);
        if (!$entity) {
            return $this->pageNotFound();
        }

        $path_information = $this->getPathInformation($entity->path);
        $tokens = $entity->tokens;
        if ($path_information['type'] == 'lua') {
            $lua = $this->luaModel->getById($path_information['id']);
            if ($lua) {
                $tokens = $lua->tokens;
            }
        }
        
        $expired = (!$this->user || $this->user->hasExpired() || $this->user->tokens < $tokens);

        $image = $this->imageModel->getById($imageid);
        if ($image->scriptid != $scriptid) {
            return $this->pageNotFound();
        }

        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            if (($expired && !$image->is_for_expired) || (!$expired && $image->is_for_expired)) {
                return $this->forbidden();
            }
        }
        
        $path = WRITEPATH . 'uploads/' . $image->path;
        $file = new \CodeIgniter\Files\File($path);
        
        header("Content-Type: " . $file->getMimeType());
        header("Content-Length: " . filesize($path));

        readfile($path);
        exit;
    }

    public function compile()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        $name = $this->sanitizeName($this->request->getPost('name'));
        
        $type = ($this->request->getPost('is_intel_hex') ? 'hex' : 'bin');
        $compiler = \App\Scripts\Compiler::getCompiler($type);
        $result = $compiler->compile($this->request->getPost('hex'));
        $filename = $name . '.' . $type;
        
        $scriptid = intval($this->request->getPost('scriptid'));
        $script = $this->scriptModel->getById($scriptid);
        if (!$script || $script->path == 'scripts/Inicio/Bienvenida.php') {
            return $this->pageNotFound();
        }
        
        $tokens = $script->tokens;
        $path_information = $this->getPathInformation($script->path);
        if ($path_information['type'] == 'lua') {
            $lua = $this->luaModel->getById($path_information['id']);
            if ($lua) {
                $tokens = $lua->tokens;
            }
        }
        
        if (!$this->user->canBypassExpiration() && !$this->userModel->reduceTokens($this->user, $tokens)) {
            die(json_encode([
                'expired' => true
            ]));
        }
        
        if ($download = $this->downloadModel->registerDownload($this->user, $filename, ($scriptid > 0) ? $scriptid : null)) {
            file_put_contents(WRITEPATH . 'history/' . $download->downloadid, $result);
            
            if (isset($lua) && $this->userModel->isPremium($this->user)) {
                $developer = $this->userModel->getById($lua->userid);
                if ($this->user->userid != $developer->userid) {
                    $this->userModel->creditDownload($developer, $download, $lua);
                }
            }
        }
        
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Length: " . strlen($result));
        
        die($result);
    }
    
    public function calculateResult()
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        $scriptid = intval($this->request->getPost('scriptid'));
        $script = $this->scriptModel->getById($scriptid);
        if (!$script) {
            return $this->pageNotFound();
        }
        
        $tokens = $script->tokens;
        $path_information = $this->getPathInformation(substr($script->path, 0, -4));
        if ($path_information['type'] == 'lua') {
            $lua = $this->luaModel->getById($path_information['id']);
            if ($lua) {
                $tokens = $lua->tokens;
            }
        }
        
        if (!$this->user->canBypassExpiration() && !$this->userModel->reduceTokens($this->user, $tokens)) {
            die(json_encode([
                'expired' => true
            ]));
        }
        
        $name = $this->sanitizeName($this->request->getPost('name'));
        $type = ($this->request->getPost('is_intel_hex') ? 'hex' : 'bin');
        $filename = $name . '.' . $type;
        
        if ($download = $this->downloadModel->registerDownload($this->user, $filename, $scriptid)) {
            file_put_contents(WRITEPATH . 'history/' . $download->downloadid, $this->request->getPost('hex'));
            
            if (isset($lua) && $this->userModel->isPremium($this->user)) {
                $developer = $this->userModel->getById($lua->userid);
                if ($this->user->userid != $developer->userid) {
                    $this->userModel->creditDownload($developer, $download, $lua);
                }
            }
        }
        
        $script = $this->getScript($path_information, $this->request->getPost('hex'));
        if (!$script) {
            return $this->pageNotFound();
        }
        
        $result = $script->calculateRead();
        $result['success'] = true;
        die(json_encode($result));
    }
    
    public function run()
    {
        $path_information = $this->getPathInformation($this->request->getPost('script'));
        $path = $path_information['full_path'];
        
        $script = $this->getScript($path_information, $this->request->getPost('hex'));
        if (!$script) {
            return $this->pageNotFound();
        }
        
        $entity = $this->scriptModel->getScript($path);
        
        $tokens = $entity->tokens;
        if ($path_information['type'] == 'lua') {
            $lua = $this->luaModel->getById($path_information['id']);
            if ($lua) {
                $tokens = $lua->tokens;
            }
        }
        
        if ($this->request->getPost('mode')) {
            if ($this->user->hasExpired() || $this->user->tokens < $tokens) {
                die(json_encode(['expired' => true]));
            }
            
            die(json_encode($script->calculate(intval($this->request->getPost('value')))));
        } else {
            $expired = (!$this->user || $this->user->hasExpired() || $this->user->tokens < $tokens);

            $data = $script->getResult();
            $data['expired'] = $expired;
            $data['comments'] = view('elements/comment', [
                'script' => $entity,
                'isLoggedIn' => $this->isUserLoggedIn(),
                'comments' => $this->commentModel->getComments($entity),
                'user' => $this->user
            ]);
            $data['tokens'] = $tokens;
            $data['availableTokens'] = ($this->user ? $this->user->tokens : 0);
            $data['scriptid'] = $entity->scriptid;
            $data['scriptType'] = $script->getScriptType();

            $images = $this->imageModel->getForScript($entity);
            $data['images_extra'] = $images['regular'];
            $data['images_expired'] = $images['expired'];

            die(json_encode($data));
        }
    }
    
    private function getPathInformation(string $path) : array
    {
        return \App\Scripts\ScriptList::getPathInformation($path);
    }
    
    private function getScript(array $path_information, string $hex) : ?\App\Scripts\Script
    {
        return \App\Scripts\ScriptList::getScriptByPathInformation($path_information, $hex, $this->user);
    }
    
    public function image(int $luascriptid)
    {
        $lua = $this->luaModel->getExtended($luascriptid);
        if (!$lua || !$lua->published_at || !$lua->imageid) {
            return $this->pageNotFound();
        }
        
        $file = $this->fileModel->getById($lua->imageid);
        if (!$file) {
            return $this->pageNotFound();
        }
        
        $this->sendFile($file);
    }
    
    public function helpimage(int $luascriptid, int $imageid)
    {
        $lua = $this->luaModel->getById($luascriptid);
        if (!$lua || !$lua->published_at) {
            return $this->pageNotFound();
        }
        
        $file = $this->fileModel->getImage($lua->developerfileid, $imageid);
        if (!$file) {
            return $this->pageNotFound();
        }
        
        $this->sendFile($file, true);
    }
    
    private function sendFile(\App\Entities\DeveloperFile $file, bool $watermarked = false)
    {
        $extension = pathinfo($file->name, PATHINFO_EXTENSION);
        if ($watermarked) {
            $source = WRITEPATH . 'developer/' . $file->developerfileid . '.' . $extension;
            $path = WRITEPATH . 'developer/w_' . $file->developerfileid . '.' . $extension;
            if (!file_exists($path)) {
                if (!\App\Libraries\Watermark::watermark($source, $path)) {
                    return $this->pageNotFound();
                }
            }
        } else {
            $path = WRITEPATH . 'developer/' . $file->developerfileid . '.' . $extension;
        }
        $file = new \CodeIgniter\Files\File($path);
        
        header("Content-Type: " . $file->getMimeType());
        header("Content-Length: " . filesize($path));

        readfile($path);
        exit;
    }
    
    public function comments(int $scriptid)
    {
        $entity = $this->scriptModel->getById($scriptid);
        
        die(json_encode([
            'comments' => view('elements/comment', [
                'script' => $entity,
                'isLoggedIn' => $this->isUserLoggedIn(),
                'comments' => $this->commentModel->getComments($entity),
                'user' => $this->user
            ])
        ]));
    }
    
    private function sanitizeName(?string $name) : string
    {
        return preg_replace('/[^a-z0-9áéíóú]+/i', '', $name);
    }

    public function deleteImage(int $imageid)
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $postimageid = $this->request->getPost('scriptimageid', FILTER_SANITIZE_NUMBER_INT);
        if ($postimageid > 0) {
            $imageid = $postimageid;
        }
        
        $image = $this->imageModel->getById($imageid);
        if ($image === null) {
            return $this->pageNotFound();
        }
        
        if ($postimageid == 0) {
            $this->renderDefaultLayout('image-delete', [
                'image' => $image
            ]);
        } else {
            $this->imageModel->delete($image->scriptimageid);
            
            $path = WRITEPATH . 'uploads/' . $image->path;
            if (file_exists($path)) {
                unlink($path);
            }

            $script = $this->scriptModel->getById($image->scriptid);
            $this->session->setFlashdata('edit_script', true);
            return redirect()->to('/?s=' . urlencode(substr($script->path, 0, -4)));
        }
    }
}
