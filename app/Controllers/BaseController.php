<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['tree', 'gravatar', 'script', 'number', 'general'];

    protected $userModel = null;
    protected $session = null;
    protected $user = null;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        // E.g.: $this->session = \Config\Services::session();

        $this->session = \Config\Services::session();
        $this->userModel = new \App\Models\UserModel();

        $userid = $this->session->get('userid');
        if ($userid != null) {
            $this->user = $this->userModel->getUserById($userid);
        }
    }

    protected function isUserLoggedIn()
    {
        return (isset($this->user) && $this->user->userid > 0);
    }

    protected function isAdmin()
    {
        return (isset($this->user) && $this->user->role === "2");
    }
    protected function pageNotFound()
    {
        $this->response->setStatusCode(404);
        $this->renderDefaultLayout('not-found', [
            'title' => 'Error - Flasheeprom'
        ]);
    }

    protected function forbidden()
    {
        $this->response->setStatusCode(403);
        $this->renderDefaultLayout('forbidden', [
            'title' => 'Error - Flasheeprom'
        ]);
    }

    protected function renderDefaultLayout($view, array $data = [])
    {
        $viewData = [
            'user' => $this->user,
            'isLoggedIn' => $this->isUserLoggedIn(),
            'isAdmin'=> $this->isAdmin(),
        ];
        $viewData += $data;

        if (!isset($viewData['headercontent'])) {
            if (file_exists(APPPATH . 'Views/header/' . $view . '.php')) {
                $viewData['headercontent'] = view('header/' . $view);
            } else {
                $viewData['headercontent'] = '';
            }
        }

        echo view('header', $viewData);
        echo view($view, $viewData);
        echo view('footer', $viewData);
    }

    protected function renderDefaultLayout_new($view, array $data = [])
    {
        $viewData = [
            'user' => $this->user,
            'isLoggedIn' => $this->isUserLoggedIn(),
            'isAdmin' => $this->isAdmin(),
        ];
        $viewData += $data;
        if (!isset($viewData['headercontent'])) {
            if (file_exists(APPPATH . 'Views/header/' . $view . '.php')) {
                $viewData['headercontent'] = view('header/' . $view);
            } else {

                $viewData['headercontent'] = '';
            }
        }

        echo view('header', $viewData);
        echo view($view, $viewData);
        echo view('footer', $viewData);
    }
}