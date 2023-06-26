<?php

namespace App\Controllers;

class User extends BaseController
{
    private $ipModel = null;
    private $userip = null;
    private $useragent = null;
    
    private const LOGIN_ATTEMPTS_ALLOWED = 10;
    private const LOGIN_BLOCK_FOR_MINUTES = 10;
    private const SECONDS_TO_WAIT_FOR_NEW_EMAIL = 120;
    
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->recoveryModel = new \App\Models\PasswordRecoveryModel();
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
        
        $this->loginForm(false);
    }
    
    private function loginForm(bool $error)
    {
        $this->renderDefaultLayout('login', [
            'error' => $error
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
    
    private function authenticate()
    {
        if ($this->getIpModel()->isIpBlocked($this->getIp(), self::LOGIN_BLOCK_FOR_MINUTES)) {
            throw \CodeIgniter\Security\Exceptions\SecurityException::forDisallowedAction();
        }
        
        $username = $this->request->getPost('login');
        $password = $this->request->getPost('password');
        
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
        
        if (!$this->user->canManageUsers()) {
            return $this->forbidden();
        }
        
        $postuserid = $this->request->getPost('userid', FILTER_SANITIZE_NUMBER_INT);
        if ($postuserid > 0) {
            $userid = $postuserid;
        }
        
        $userToChange = $this->userModel->getUserById($userid);
        if ($userToChange === null || !$this->user->canManageUser($userToChange)) {
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
        if ($this->request->getMethod() == 'post') {
            return $this->doRegister();
        }
        
        $this->registerForm(false);
    }
    
    private function registerForm(bool $error, bool $user_exists = false, bool $email_exists = false)
    {
        $captcha = service('captcha');
        
        $this->renderDefaultLayout('register', [
            'user_exists' => $user_exists,
            'email_exists' => $email_exists,
            'error' => $error,
            'headercontent' => $captcha->getHeaderContent(),
            'captcha' => $captcha->getCaptchaElement()
        ]);
    }
    
    private function doRegister()
    {
        $captcha = service('captcha');
        if (!$captcha->validateCaptcha($this->request)) {
            return $this->registerForm(true);
        }
        
        $password = $this->request->getPost('password');
        $confirm = $this->request->getPost('confirm');
        
        if (empty($password) || $password != $confirm) {
            return $this->registerForm(true);
        }
        
        $newUser = new \App\Entities\User();
        $newUser->email = $this->request->getPost('email');
        $newUser->login = $this->request->getPost('login');
        $newUser->password = $password;
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
        
        if (!$this->user->canManageUsers()) {
            return $this->forbidden();
        }
        
        $postuserid = $this->request->getPost('userid', FILTER_SANITIZE_NUMBER_INT);
        if ($postuserid > 0) {
            $userid = $postuserid;
        }
        
        $userToDelete = $this->userModel->getUserById($userid);
        if ($userToDelete === null || !$this->user->canManageUser($userToDelete)) {
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
}
