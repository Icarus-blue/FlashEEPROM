<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
    private $ipModel = null;
    private $userip = null;
    private $useragent = null;
    private $facebook = null;
    private $fb_helper = null;
    private $registerkey;
    private const LOGIN_ATTEMPTS_ALLOWED = 10;
    private const LOGIN_BLOCK_FOR_MINUTES = 10;
    private const SECONDS_TO_WAIT_FOR_NEW_EMAIL = 120;

    //private $userModel = null;
    private $googleClient = null;

    function __construct(){
        require_once APPPATH."Libraries/vendor/google/autoload.php";
        require_once APPPATH."Libraries/vendor/facebook/autoload.php";
        $this->userModel = new UserModel;
        $this->googleClient = new \Google_Client();
        $this->googleClient->setClientId("999461329982-vv5ai0b207qctf5cn47thgb33j336bur.apps.googleusercontent.com");
        $this->googleClient->setClientSecret("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");
        //$this->googleClient->setRedirectUri("https://flasheeprom.com/loginWithGoogle");
        $this->googleClient->addScope("email");
        $this->googleClient->addScope("profile");
        //$this->googleClient->addScope("picture");
        //---------------------- FaceBook --------------------

        $this->facebook =  new \Facebook\Facebook([
            'app_id'  => '6486070141424188',
            'app_secret'  => '23b8936712fa01192cc2a80f2b7c8746',
            'default_graph_version' => 'v2.3'
        ]);
        $this->fb_helper = $this->facebook->getRedirectLoginHelper();

    }

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->recoveryModel = new \App\Models\PasswordRecoveryModel();
        $this->registerkey = new \App\Models\RegisterKeyModel();
    }


    public function recovery()
    {
        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getPost('email');
            $user = $this->userModel->getUserByEmail($email);

            $captcha = service('captcha');
            if (!$captcha->validateCaptcha($this->request)) {
                return $this->recoveryForm(false, true);
            }

            if (!$user) {
                return $this->recoveryForm(true);
            }

            $recovery = $this->recoveryModel->generateRequest($user);
            if (!$recovery) {
                return $this->recoveryForm(true);
            }

            $this->sendRecoveryEmail($user, $recovery);
            return $this->recoveryForm(true);
        }

        $this->recoveryForm();
    }

    private function recoveryForm($done = false, $error = false)
    {
        $captcha = service('captcha');

        $this->renderDefaultLayout('recovery-request', [
            'done' => $done,
            'error' => $error,
            'headercontent' => $captcha->getHeaderContent(),
            'captcha' => $captcha->getCaptchaElement()
        ]);
    }

    public function reset(int $requestid, string $token)
    {
        $request = $this->recoveryModel->getById($requestid);
        if (!$request || $request->token != $token || !$request->isStillValid()) {
            return $this->pageNotFound();
        }

        if ($this->request->getMethod() == 'post') {
            $user = $this->userModel->getUserById($request->userid);

            $newpassword = $this->request->getPost('newone');
            $newpasswordrepeated = $this->request->getPost('newagain');

            if (empty($newpassword) || $newpassword != $newpasswordrepeated) {
                return $this->renderDefaultLayout('recovery', ['error' => true, 'recovery' => $request]);
            }

            $user->password = $newpassword;
            if ($this->userModel->save($user)) {
                $request->used_at = date('Y-m-d H:i:s');
                $this->recoveryModel->save($request);
                return $this->renderDefaultLayout('recovery-succeeded');
            } else {
                return $this->renderDefaultLayout('recovery', ['error' => true, 'recovery' => $request]);
            }
        }

        return $this->renderDefaultLayout('recovery', ['error' => false, 'recovery' => $request]);
    }

    public function requestConfirm(int $userid)
    {
        $userToConfirm = $this->userModel->getUserById($userid);
        if (!$userToConfirm || $userToConfirm->activated_at != null) {
            return $this->pageNotFound();
        }

        $sent = $this->sendConfirmationEmail($userToConfirm);
        $this->displayConfirmationMessage($userToConfirm, $sent, !$sent);
    }

    public function confirm(int $userid, string $confirmation)
    {
        $userToConfirm = $this->userModel->getUserById($userid);
        if (!$userToConfirm || $userToConfirm->confirmation != $confirmation) {
            return $this->pageNotFound();
        }

        $userToConfirm->confirmation = null;
        $userToConfirm->activated_at = date('Y-m-d H:i:s');

        $this->userModel->save($userToConfirm);
        $this->renderDefaultLayout('welcome-message');
    }

    private function sendRecoveryEmail(\App\Entities\User $user, \App\Entities\PasswordRecovery $recovery)
    {
        if ($recovery->sent_at) {
            $time = strtotime($recovery->sent_at);
            if (time() < $time + self::SECONDS_TO_WAIT_FOR_NEW_EMAIL) {
                return false;
            }
        }

        $email = \Config\Services::email();

        $email->setTo($user->email);

        $email->setSubject('Recuperación de contraseña');
        $email->setMessage(view('email/recovery', [
            'user' => $user,
            'url' => base_url() . '/user/reset/' . $recovery->requestid . '/' . $recovery->token
        ]));

        if ($email->send()) {
            $recovery->sent_at = date('Y-m-d H:i:s');
            $this->recoveryModel->save($recovery);
        }

        return true;
    }

    private function sendConfirmationEmail(\App\Entities\User $user) : bool
    {
        if ($user->confirmation_sent) {
            $time = strtotime($user->confirmation_sent);
            if (time() < $time + self::SECONDS_TO_WAIT_FOR_NEW_EMAIL) {
                return false;
            }
        }

        $email = \Config\Services::email();

        $email->setTo($user->email);

        $email->setSubject('Confirmación de correo electrónico');
        $email->setMessage(view('email/confirmation', [
            'url' => base_url() . '/user/confirm/' . $user->userid . '/' . $user->confirmation
        ]));

        if ($email->send()) {
            $user->confirmation_sent = date('Y-m-d H:i:s');
            $this->userModel->save($user);
        }

        return true;
    }

    public function login()
    {
        if ($this->isUserLoggedIn()) {
            return redirect()->to('/');
        }

        if ($this->getIpModel()->isIpBlocked($this->getIp(), self::LOGIN_BLOCK_FOR_MINUTES)) {
            throw \CodeIgniter\Security\Exceptions\SecurityException::forDisallowedAction();
        }

        if ($this->request->getMethod() == 'post') {
            return $this->authenticate();
        }
        $this->googleClient->setRedirectUri(base_url("loginWithGoogle"));
        $this->loginForm(false);
    }

    public function loginWithGoogle()
    {
        $this->googleClient->setRedirectUri(base_url("loginWithGoogle"));
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if ($this->isUserLoggedIn()) {
            return redirect()->to('/');
        }
        if(!isset($token['error'])){
            $this->googleClient->setAccessToken($token['access_token']);
            session()->set("AccessToken", $token['access_token']);

            $googleService = new \Google_Service_Oauth2($this->googleClient);
            $data = $googleService->userinfo->get();
            $currentDateTime = date("Y-m-d H:i:s");
            return $this->authenticate($data);
            $userdata=array();
            if($this->userModel->isAlreadyRegister($data['id'])){
                //User ALready Login and want to Login Again
                $userdata = [
                    'name'=>$data['givenName']. " ".$data['familyName'],
                    'email'=>$data['email'] ,
                    'profile_img'=>$data['picture'],
                    'updated_at'=>$currentDateTime
                ];
                $this->userModel->updateUserData($userdata, $data['id']);
            }else{
                //new User want to Login
                $userdata = [
                    'oauth_id'=>$data['id'],
                    'name'=>$data['givenName']. " ".$data['familyName'],
                    'email'=>$data['email'] ,
                    'profile_img'=>$data['picture'],
                    'created_at'=>$currentDateTime
                ];
                $this->userModel->insertUserData($userdata);
            }
            session()->set("LoggedUserData", $userdata);

        }else{
            session()->setFlashData("Error", "Something went Wrong");
            return redirect()->to(base_url());
        }
        //Successfull Login
        return redirect()->to(base_url()."/feeds");
    }
    public function loginWithFacebook()
    {
        if($this->request->getVar('state')){
            $this->fb_helper->getPersistentDataHandler()->set('state', $this->request->getVar('state'));
        }

        if($this->request->getVar('code')){
            if(session()->get("access_token")){
                $access_token = session()->get('access_token');
            }else{
                $access_token = $this->fb_helper->getAccessToken();
                session()->set("access_token", $access_token);
                $this->facebook->setDefaultAccessToken(session()->get('access_token'));
            }
            $graph_response = $this->facebook->get('/me',$access_token,'id,name,email,address,first_name,last_name');

            //$graph_response = $this->facebook->get('/me?field=name,email', $access_token);
            $fb_user_info = $graph_response->getGraphUser();
            print_r($fb_user_info); die(' <-- Login');
            //print_r($fb_user_info); die;
            if(!empty($fb_user_info)){
                $fbdata = array(
                    'authid'=>$fb_user_info['id'],
                    'profile_pic' => 'http://graph.facebook.com/'.$fb_user_info['id'].'/picture',
                    'user_name' => $fb_user_info['name']
                );

                //here you can insert user data in database

                session()->set('LoggedUser', $fbdata);
            }
        }else{
            session()->setFlashData('error', 'Something Wrong');
            return redirect()->to(base_url());
        }
        return redirect()->to(base_url().'/profile');
    }
    private function loginForm(bool $error)
    {
        $this->googleClient->setRedirectUri(base_url("loginWithGoogle"));
        $viewport = '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $googleButton = '<div class="google-div social-div pull-left">
            <a href="'.$this->googleClient->createAuthUrl().'" class="btn btn-social btn-google">
              <span class="fab fa-google"></span>Google
            </a>
          </div>';
        ;
        $fb_permission = ['email'];
        $fb_btn = $this->fb_helper->getLoginUrl(base_url("loginWithFacebook").'?', $fb_permission);
        $metaButton ='<div class="facebook-div social-div">
                        <a href ='.$fb_btn.' " class="btn btn-social btn-facebook">
                        <span class="fab fa-facebook-f"></span>Facebook
                        </a>
                        </div>';
        $this->renderDefaultLayout('login', [
            'error' => $error,
            'class' => 'home feeds-home',
            'menu_movil' => view('elements/menu_movil', [
                 'viewport' => $viewport,
                 'googleButton' => $googleButton,
                 'metaButton' => $metaButton
            ]),
        ]);
    }

    private function passwordForm(\App\Entities\User $userToChange, bool $error, bool $changed)
    {
        $this->renderDefaultLayout('password', [
            'userToChange' => $userToChange,
            'error' => $error,
            'changed' => $changed
        ]);
    }

    private function authenticate($rrss = false)
    {
        if ($this->getIpModel()->isIpBlocked($this->getIp(), self::LOGIN_BLOCK_FOR_MINUTES)) {
            throw \CodeIgniter\Security\Exceptions\SecurityException::forDisallowedAction();
        }
        $username = $this->request->getPost('login');
        $password = $this->request->getPost('password');
        if ($rrss ) {
            $_password  = $rrss->id;
            $_confirm   = $rrss->id;
            $_email     = $rrss->email;
            $__login    = explode('@', $rrss->email);
            $_login     = $__login[0];
            $username = $_login;
            $password = $rrss->id;
        }

        if (empty($username) || empty($password)) {
            return $this->loginFailed();
        }

        $user = $this->userModel->getUserByLoginOrEmail($username);
        if ($user === null || !$user->checkPassword($password)) {
            $this->getIpModel()->registerLoginAttempt($this->getIp(), $this->getAgent(), $username);

            $attempts = $this->getIpModel()->countLoginAttempts($this->getIp(), self::LOGIN_BLOCK_FOR_MINUTES);
            if ($attempts >= self::LOGIN_ATTEMPTS_ALLOWED) {
                $this->getIpModel()->blockIp($this->getIp());
            }

            return $this->loginFailed();
        }

        $this->getIpModel()->registerSuccessfulLogin($this->getIp(), $this->getAgent(), $user);

        if ($user->activated_at == null) {
            return $this->displayConfirmationMessage($user);
        }

        $this->session->regenerate();
        $this->session->set('userid', $user->userid);
        return redirect()->to('/');
    }

    private function displayConfirmationMessage(\App\Entities\User $user, bool $sent_again = false, bool $not_sent = false)
    {
        $this->renderDefaultLayout('email-confirmation', [
            'userToConfirm' => $user,
            'sent_again' => $sent_again,
            'not_sent' => $not_sent
        ]);
    }

    private function getAgent()
    {
        if ($this->useragent === null) {
            $agentModel = new \App\Models\UserAgentModel();
            $this->useragent = $agentModel->registerAgent($_SERVER['HTTP_USER_AGENT'] ?? '');
        }
        return $this->useragent;
    }

    private function getIp()
    {
        $this->userip = $this->userip ?? $this->getIpModel()->registerIp($_SERVER['REMOTE_ADDR']);
        return $this->userip;
    }

    private function getIpModel()
    {
        $this->ipModel = $this->ipModel ?? new \App\Models\IpModel();
        return $this->ipModel;
    }

    public function subscription(int $userid)
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }

        if (!$this->user->canManageUsers() && !$this->user->isModerator() ) {
            return $this->forbidden();
        }

        $postuserid = $this->request->getPost('userid', FILTER_SANITIZE_NUMBER_INT);
        if ($postuserid > 0) {
            $userid = $postuserid;
        }

        $userToChange = $this->userModel->getUserById($userid);
        if ($userToChange === null || (!$this->user->canManageUser($userToChange) && !$this->user->isModerator())  ) {
            return $this->forbidden();
        }
        if ($postuserid == 0) {
            $this->renderDefaultLayout('subscription', [
                'error' => false,
                'changed' => false,
                'userToChange' => $userToChange
            ]);
        } else {
            $days = $this->request->getPost('days', FILTER_SANITIZE_NUMBER_INT);
            $tokens = $this->request->getPost('tokens', FILTER_SANITIZE_NUMBER_INT);
            $userToChange->is_developer = $this->request->getPost('developer') ? 1 : 0;
            $userToChange->is_moderator = $this->request->getPost('moderator') ? 1 : 0;

            $result = $this->userModel->updateSubscription($userToChange, $days, $tokens);

            $this->renderDefaultLayout('subscription', [
                'error' => !$result,
                'changed' => $result,
                'userToChange' => $userToChange
            ]);
        }
    }

    public function password(int $userid)
    {
        $userToChange = $this->getUserToChange($userid);
        if ($userToChange === null) {
            return;
        }

        if ($this->request->getMethod() == 'post') {
            return $this->doChangePassword($userid);
        }

        $this->passwordForm($userToChange, false, false);
    }

    public function addCount()
    {
        $keylist = $this->registerkey->getFieldByUserID($this->user->userid);
        $count =  $keylist['count'];
        $data = [
            "count" => $count + 1,
        ];
        $this->registerkey->updateDate($keylist['id'], $data);
    }


    public function smtgenerator()
    {
        if ($this->isUserLoggedIn()) {
            $this->smtgeneratorForm(false);
        }
    }

    private function smtgeneratorForm(bool $error)
    {
        $this->renderDefaultLayout('smtregister', [
            'error' => $error
        ]);
    }
    private function doChangePassword(int $userid)
    {
        $userToChange = $this->getUserToChange($userid);
        if ($userToChange === null) {
            return;
        }

        $current = $this->request->getPost('password');
        if (empty($current) || !$userToChange->checkPassword($current)) {
            return $this->passwordForm($userToChange, true, false);
        }

        $newpassword = $this->request->getPost('newone');
        $newpasswordrepeated = $this->request->getPost('newagain');

        if (empty($newpassword) || $newpassword != $newpasswordrepeated) {
            return $this->passwordForm($userToChange, true, false);
        }

        $userToChange->password = $newpassword;
        $this->userModel->save($userToChange);

        return $this->passwordForm($userToChange, false, true);
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        $this->googleClient->setRedirectUri(base_url("registerWithGoogle"));
        if ($this->request->getMethod() == 'post') {
            return $this->doRegister();
        }
        $this->registerForm(false);
    }

    public function registerWithGoogle()
    {
        $this->googleClient->setRedirectUri(base_url("registerWithGoogle"));
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if(!isset($token['error'])){
            $this->googleClient->setAccessToken($token['access_token']);
            session()->set("AccessToken", $token['access_token']);
            $googleService = new \Google_Service_Oauth2($this->googleClient);
            $data = $googleService->userinfo->get();
            $currentDateTime = date("Y-m-d H:i:s");
            return $this->doRegister($data);
        }else{
            session()->setFlashData("Error", "Something went Wrong");
            print_r($token);die('<<--Error');
            return redirect()->to(base_url());
        }
        $this->registerForm(false);
    }
    public function registerWithFacebook()
    {
        if($this->request->getVar('state')){
            $this->fb_helper->getPersistentDataHandler()->set('state', $this->request->getVar('state'));
        }

        if($this->request->getVar('code')){
            if(session()->get("access_token")){
                $access_token = session()->get('access_token');
            }else{
                $access_token = $this->fb_helper->getAccessToken();
                session()->set("AccessToken", $access_token);
                $this->facebook->setDefaultAccessToken(session()->get('access_token'));
            }
            $graph_response = $this->facebook->get('/me?field=name,email', $access_token);
            $fb_user_info = $graph_response->getGraphUser();
            print_r($fb_user_info); die(' <<-- Register');
            //print_r($fb_user_info); die;
            if(!empty($fb_user_info)){
              //session()->set("AccessToken", $token['access_token']);
              $currentDateTime = date("Y-m-d H:i:s");
              return $this->doRegister($fb_user_info);
            }else{
                $this->registerForm(true);
            }
        }else{
            session()->setFlashData('error', 'Something Wrong');
            return redirect()->to(base_url());
        }
        $this->registerForm(false);
    }

    private function registerForm(bool $error, bool $user_exists = false, bool $email_exists = false)
    {
        $captcha = service('captcha');
        $googleButton = '<a href="'.$this->googleClient->createAuthUrl().'" ><img src="'. base_url('estilos/google.png') . '" alt="Login With Google" width="100%"></a>';
        $fb_permission = ['email'];
        $fb_btn = $this->fb_helper->getLoginUrl(base_url("registerWithFacebook").'?', $fb_permission);
        $metaButton ='<div class="facebook-div social-div">
                        <a href ='.$fb_btn.' " class="btn btn-social btn-facebook">
                        <span class="fab fa-facebook-f"></span>Facebook
                        </a>
                        </div>'
        ;
        $this->renderDefaultLayout('register', [
            'user_exists' => $user_exists,
            'email_exists' => $email_exists,
            'error' => $error,
            'headercontent' => $captcha->getHeaderContent(),
            'captcha' => $captcha->getCaptchaElement(),
            'googleButton' => $googleButton,
            'metaButton' => $metaButton
        ]);
    }

    private function doRegister($rrss = false)
    {
        $captcha = service('captcha');

        if (!$rrss) {
        if (!$captcha->validateCaptcha($this->request)) {
            return $this->registerForm(true);
        }}
        $newUser = new \App\Entities\User();
        if (!$rrss) {
            $_password = $this->request->getPost('password');
            $_confirm = $this->request->getPost('confirm');
            if (empty($_password) || $_password != $_confirm) {
                return $this->registerForm(true);
            }
            $_email = $this->request->getPost('email');
            $_login = $this->request->getPost('login');
        }else{
            $_password  = $rrss->id;
            $_confirm   = $rrss->id;
            $_email     = $rrss->email;
            $__login    = explode('@', $rrss->email);
            $_login     = $__login[0];
        }

        $newUser->email     = $_email;
        $newUser->login     = $_login;
        $newUser->password  = $_password;

        $newUser->confirmation = \App\Models\UserModel::generateToken();
        $newUser->created_at = date('Y-m-d H:i:s');

        $userExists = $this->userModel->loginExists($newUser->login);
        $emailExists = $this->userModel->emailExists($newUser->email);
        if ($userExists || $emailExists) {
            return $this->registerForm(false, $userExists, $emailExists);
        }

        $role = \App\Entities\User::ROLE_NORMAL;
        if ($this->isUserLoggedIn() && $this->user->canManageAllUsers()) {
            $selectedRole = $this->request->getPost('admin', FILTER_SANITIZE_NUMBER_INT);
            if ($selectedRole > 0) {
                $role = $selectedRole;
            }

            if ($role >= $this->user->role) {
                return $this->forbidden();
            }
        }

        $newUser->role = $role;

        if (!($created = $this->userModel->create($newUser))) {
            return $this->registerForm(true);
        }

        $this->sendConfirmationEmail($created);
        return $this->displayConfirmationMessage($created);
    }

   public function delete(int $userid)
    {

        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }

        if (!$this->user->canManageUsers() && !$this->user->isModerator()) {
            return $this->forbidden();
        }

        $postuserid = $this->request->getPost('userid', FILTER_SANITIZE_NUMBER_INT);
        if ($postuserid > 0) {
            $userid = $postuserid;
        }

        $userToDelete = $this->userModel->getUserById($userid);
        if ($userToDelete === null || (!$this->user->canManageUser($userToDelete) && !$this->user->isModerator())) {
            return $this->forbidden();
        }

        if ($postuserid == 0) {
            $this->renderDefaultLayout('user-delete', [
                'userToDelete' => $userToDelete
            ]);
        } else {
            $this->userModel->delete($userToDelete->userid);
            return redirect()->to('/admin/dashboard');
        }
    }


    private function getUserToChange($userid)
    {
        if (!$this->isUserLoggedIn()) {
            $this->pageNotFound();
            return null;
        }

        if ($userid > 0 && $userid != $this->user->userid) {
            if (!$this->user->canManageUsers()) {
                $this->forbidden();
                return null;
            }

            $userToChange = $this->userModel->getUserById($userid);
            if ($userToChange === null) {
                $this->pageNotFound();
                return null;
            }

            if (!$this->user->canManageUser($userToChange)) {
                $this->forbidden();
                return null;
            }

            return $userToChange;
        }

        return $this->user;
    }

    private function loginFailed()
    {
        $this->loginForm(true);
    }


    public function register_equID()
    {
        $secret_key = $this->request->getPost("secret_key");
        $equip_ID = $this->request->getPost("equip_ID");
        $keylist = $this->registerkey->isExitSecretKey($secret_key);
        if ($keylist !== null) {
            $id = $keylist['id'];
            $data = [
                "userid" => $this->user->userid,
                "user_name" => $this->user->login
            ];
            $this->registerkey->updateDate($id, $data);
            echo json_encode(["res" => 1]);
        } else {
            echo json_encode(["res" => 0]);
        }
    }
   

}