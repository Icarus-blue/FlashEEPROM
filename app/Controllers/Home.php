<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $activityModel;
    private $luaModel;
    private $scriptModel;
    private $configModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->activityModel = new \App\Models\ActivityModel();
        $this->luaModel = new \App\Models\LuaScriptModel();
        $this->scriptModel = new \App\Models\ScriptModel();
        $this->configModel = new \App\Models\ConfigModel();
    }
    
    public function index()
    {
        $launch_editor = false;
        $initial_script = null;
        $path = $this->request->getGet('s');
        if (!empty($path)) {
            $info = \App\Scripts\ScriptList::getPathInformation($path);
            $script = \App\Scripts\ScriptList::getScriptByPathInformation($info, '', $this->user);
            
            if (!$script) {
                return $this->pageNotFound();
            }
            
            $initial_script = $path;
            if (!empty($_SESSION['edit_script'])) {
                $launch_editor = true;
            }
        }

        $ad = $this->configModel->getMultipleByName([
            'ad_active', 'ad_html', 'ad_button', 'ad_image', 'ad_url'
        ]);
        
        $this->renderDefaultLayout('editor', [
            'class' => 'home',
            'scripts' => $this->getScripts(),
            'token_values' => $this->scriptModel->getScriptTokens(),
            'activity' => view('elements/activity', [
                'activitylist' => $this->activityModel->getRecentActivity(20)
            ]),
            'commentlist' => view('elements/activity', [
                'activitylist' => $this->activityModel->getRecentActivity(20, \App\Entities\Activity::COMMENT_TYPE)
            ]),
            'initial_script' => $initial_script,
            'ad' => $ad,
            'launch_editor' => $launch_editor
        ]);
    }
    
    private function getScripts()
    {
        if ($this->isUserLoggedIn() && $this->user->canManageAllUsers()) {
            $lua = $this->luaModel->findAll();
        } else {
            $lua = $this->luaModel->getPublished();
        }
        
        return \App\Scripts\ScriptList::getFileTree($lua);
    }
    
    public function terms()
    {
        $this->renderDefaultLayout('terms');
    }
}
