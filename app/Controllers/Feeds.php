<?php

namespace App\Controllers;

class Feeds extends BaseController
{
    private $activityModel;
    private $feedsModel;
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
        $this->feedsModel = new \App\Models\FeedsSystemModel();
    }
    
    public function index ($opt=false, $feedsid_feeds_userid = false){
         $initial_script = null;
         $path = $this->request->getGet('s'); $users = [];
         $users = $this->userModel->getAll() ;
         $msg_users = $this->feedsModel->getMsgUsers(@$this->user->userid);
         if (!empty($path)) {
             $info = \App\Scripts\ScriptList::getPathInformation($path);
             $script = \App\Scripts\ScriptList::getScriptByPathInformation($info, '', $this->user);
             if (!$script) {
                 return $this->pageNotFound();
             }
             
             $initial_script = $path;
         }

         $ad = $this->configModel->getMultipleByName([
             'ad_active', 'ad_html', 'ad_button', 'ad_image', 'ad_url'
         ]);
         $stars = [false, 0];
         if (isset($this->user->userid)) {
             $cta = $this->feedsModel->getStarsQuantity($this->user->userid);
             $stars = [true, $cta ];
         }
         $viewport = '<meta name="viewport" content="width=device-width, initial-scale=1">';

         $is_moderator = ($moderator = get_any_table('user','is_moderator',['userid'=>@$this->user->userid]))? $moderator[0]->is_moderator:false;

         if ($opt=='publica') {
             //PUBLICACIONES
             $this->renderDefaultLayout('feeds', [
                 'class' => 'home feeds-home',
                 'page_title' => 'Feeds',
                 'scripts' => $this->getScripts(),
                 'token_values' => $this->scriptModel->getScriptTokens(),
                 'activity' => view('elements/feeds_activity', [
                     'feeds' =>  $this->feedsModel->getTopCommented(20),'userid' => @$this->user->userid, 'photo' => @$this->user->photo,'stars' => $stars
                 ]),
                 'feeds_det' => view('elements/feeds_det', [
                     'url_rtn' => base_url(),
                     'is_moderator' => $is_moderator,
                     'feeds' => $this->feedsModel->getRecentFeeds(@$this->user->userid,true,'publica'),'userid' => @$this->user->userid, 'photo' => @$this->user->photo,'users' => $users, 'login' => @$this->user->login, 'viewport' => $viewport,'images' => $this->feedsModel->getf_Images($this->feedsModel->getRecentFeeds(20), $this->user)
                 ])
                 ,'menu_movil' => view('elements/menu_movil', [
                      'viewport' => $viewport, 
                        'login' => @$this->user->login
                 ]),
                 'feed_header' => view('elements/feed_header', [
                        'user' => @$this->user
                 ]),
                 'initial_script' => $initial_script,
                 'ad' => $ad
                 ,'messages_users' =>  view('elements/messages_users', [
                             'users' => $msg_users, 'userid' => @$this->user->userid
                                                     ])
             ]);
        }elseif ($opt=='notify' && $feedsid_feeds_userid)  {
             $this->renderDefaultLayout('feeds', [
                 'class' => 'home feeds-home',
                 'page_title' => 'Feeds',
                 'scripts' => $this->getScripts(),
                 'token_values' => $this->scriptModel->getScriptTokens(),
                 'activity' => view('elements/feeds_activity', [
                     'feeds' => $this->feedsModel->getTopCommented(20),'userid' => @$this->user->userid, 'photo' => @$this->user->photo,
                     'stars' => $stars
                 ]
                 
                 ),
                 'feeds_det' => view('elements/feeds_det', [
                     'url_rtn' => base_url(),
                     'is_moderator' => $is_moderator,
                     'feeds' => $this->feedsModel->getRecentFeeds($feedsid_feeds_userid,true,$opt),'userid' => @$this->user->userid, 'photo' => @$this->user->photo, 'login' => @$this->user->login, 'viewport' => $viewport,'images' => $this->feedsModel->getf_Images($this->feedsModel->getRecentFeeds(60), $this->user)
                 ]),
                 'menu_movil' => view('elements/menu_movil', [
                      'viewport' => $viewport, 
                        'login' => @$this->user->login
                 ]),
                 'feed_header' => view('elements/feed_header', [
                        'user' => @$this->user
                 ]),
                 'initial_script' => $initial_script,
                 'ad' => $ad
                 ,'messages_users' =>  view('elements/messages_users', [
                             'users' => $msg_users, 'userid' => @$this->user->userid
                                                     ])
             ]);  
         }else{
             // POR DEFECTO
             $this->renderDefaultLayout('feeds', [
                 'class' => 'home feeds-home',
                 'page_title' => 'Feeds',
                 'scripts' => $this->getScripts(),
                 'token_values' => $this->scriptModel->getScriptTokens(),
                 'activity' => view('elements/feeds_activity', [
                     'feeds' => $this->feedsModel->getTopCommented(20),'userid' => @$this->user->userid, 'photo' => @$this->user->photo,
                     'stars' => $stars
                 ]
                 
                 ),
                 'feeds_det' => view('elements/feeds_det', [
                     'url_rtn' => base_url(),
                     'is_moderator' => $is_moderator,
                     'feeds' => $this->feedsModel->getRecentFeeds(20),'userid' => @$this->user->userid, 'photo' => @$this->user->photo,'users' => $users, 'login' => @$this->user->login,'images' => $this->feedsModel->getf_Images($this->feedsModel->getRecentFeeds(20), $this->user)
                 ]),
                 'menu_movil' => view('elements/menu_movil', [
                      'viewport' => $viewport, 
                        'login' => @$this->user->login
                 ]),
                 'feed_header' => view('elements/feed_header', [
                        'user' => @$this->user
                 ]),
                 'initial_script' => $initial_script,
                 'ad' => $ad
                 ,'messages_users' =>  view('elements/messages_users', [
                             'users' => $msg_users, 'userid' => @$this->user->userid
                                                     ])
             ]);
         }  
    }


    public function detail($feedsid)
    {
        $initial_script = null;
        $path = $this->request->getGet('s'); $users = [];
        $users = $this->userModel->getAll() ;
        $msg_users = $this->feedsModel->getMsgUsers(@$this->user->userid);
        if (!empty($path)) {
            $info = \App\Scripts\ScriptList::getPathInformation($path);
            $script = \App\Scripts\ScriptList::getScriptByPathInformation($info, '', $this->user);
            if (!$script) {
                return $this->pageNotFound();
            }
            
            $initial_script = $path;
        }
        $ad = $this->configModel->getMultipleByName([
            'ad_active', 'ad_html', 'ad_button', 'ad_image', 'ad_url'
        ]);
        $stars = [false, 0];
        if (isset($this->user->userid)) {
            $cta = $this->feedsModel->getStarsQuantity($this->user->userid);
            $stars = [true, $cta ];
        }
        $viewport = '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $getFeed = $this->feedsModel->getFeed($feedsid);
        $og_Feed = $getFeed[0];
        $this->renderDefaultLayout('feeds_detail', [
            'class' => 'home feeds-home feed-detail',
            'page_title' => 'Feeds detalle',
            'scripts' => false,
            'token_values' => $this->scriptModel->getScriptTokens(),
            'feed_detail' => view('elements/feed_detail', [
                'feedsid'=>$feedsid,
                'url_rtn'=>base_url('feeds/detail/'.$feedsid),
                'feed' => $getFeed,
                'userid' => @$this->user->userid,
                'photo' => @$this->user->photo,
                'users' => $users, 
                'login' => @$this->user->login, 
                'feeds' => $getFeed,
                'userid' => @$this->user->userid, 
                'photo' => @$this->user->photo,
                'images' => $this->feedsModel->getFilesImagesArray($feedsid,  
                $getFeed[0]->userid),
                'stars' => $stars,
                'og_url' => base_url('feeds/detail').'/'.$feedsid,
                'og_title' => $og_Feed->title_feed,
                'og_description' => $og_Feed->comment,
                'og_image' => postMainImage($feedsid),
            'menu_movil' => view('elements/menu_movil', [
                 'viewport' => $viewport, 
                   'login' => @$this->user->login
            ]),
            'feed_header' => view('elements/feed_header', [
                   'user' => @$this->user,'stars' => $stars
            ]),
            'activity' => \App\Libraries\Edx_library::c_comments($getFeed[0]->answer,$feedsid,$this->user)
            ]),
            'initial_script' => $initial_script,
            'ad' => $ad
            ,'messages_users' =>  view('elements/messages_users', [
                        'users' => $msg_users, 'userid' => @$this->user->userid
                                                ])
        ]);


    }
    
public function politica_de_privacidad()
{
    $this->renderDefaultLayout('politica_de_privacidad',[
        'politica'=>'politica']);
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

}
