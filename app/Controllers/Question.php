<?php

namespace App\Controllers;

class Question extends BaseController
{
    private $questionModel;
    private $groupModel;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->questionModel = new \App\Models\QuestionModel();
        $this->groupModel = new \App\Models\QuestionGroupModel();
    }
    
    public function index()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $this->renderDefaultLayout('groups', [
            'groups' => $this->groupModel->getGroups(),
            'tableOnly' => $this->request->isAJAX()
        ]);
    }

    public function view(int $groupid)
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }

        $group = $this->groupModel->getById($groupid);
        if (!$group) {
            return $this->pageNotFound();
        }
        
        $this->renderDefaultLayout('questions', [
            'group' => $group,
            'questions' => $this->questionModel->getQuestionsForGroup($group),
            'tableOnly' => $this->request->isAJAX()
        ]);
    }

    public function addGroup()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $question = $this->request->getPost('question');
        
        $this->groupModel->createGroup($question);
        
        return redirect()->to('/question');
    }
    
    public function add()
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $question = $this->request->getPost('question');
        $tokens = abs($this->request->getPost('tokens', FILTER_SANITIZE_NUMBER_INT));
        $groupid = $this->request->getPost('groupid');
        
        $this->questionModel->createQuestion($question, $tokens, $groupid);
        
        return redirect()->to('/question/view/' . $groupid);
    }

    public function deleteGroup(int $groupid)
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $postgroupid = $this->request->getPost('groupid', FILTER_SANITIZE_NUMBER_INT);
        if ($postgroupid > 0) {
            $groupid = $postgroupid;
        }
        
        $groupToDelete = $this->groupModel->getById($groupid);
        if ($groupToDelete === null) {
            return $this->pageNotFound();
        }
        
        if ($postgroupid == 0) {
            $this->renderDefaultLayout('group-delete', [
                'groupToDelete' => $groupToDelete
            ]);
        } else {
            $this->groupModel->delete($groupToDelete->groupid);
            return redirect()->to('/question');
        }
    }
    
    public function delete(int $questionid)
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $postquestionid = $this->request->getPost('questionid', FILTER_SANITIZE_NUMBER_INT);
        if ($postquestionid > 0) {
            $questionid = $postquestionid;
        }
        
        $questionToDelete = $this->questionModel->getById($questionid);
        if ($questionToDelete === null) {
            return $this->pageNotFound();
        }
        
        if ($postquestionid == 0) {
            $this->renderDefaultLayout('question-delete', [
                'questionToDelete' => $questionToDelete
            ]);
        } else {
            $this->questionModel->delete($questionToDelete->questionid);
            return redirect()->to('/question');
        }
    }
}
