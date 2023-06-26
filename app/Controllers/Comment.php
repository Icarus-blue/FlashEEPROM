<?php

namespace App\Controllers;

class Comment extends BaseController
{
    private $scriptModel;
    private $commentModel;
    
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->scriptModel = new \App\Models\ScriptModel();
        $this->commentModel = new \App\Models\CommentModel();
    }
    
    public function post(int $scriptid)
    {
        if (!$this->isUserLoggedIn()) {
            return $this->forbidden();
        }
        
        $script = $this->scriptModel->getById($scriptid);
        if (!$script) {
            return $this->pageNotFound();
        }
        
        $rating = intval($this->request->getPost('rating'));
        if ($rating < 1 || $rating > 5) {
            $rating = null;
        }
        
        $comment = $this->request->getPost('comment');
        $this->commentModel->createComment($this->user, $script, $rating, $comment);
        
        $this->renderDefaultLayout('comment-posted');
    }
    
    public function delete(int $commentid)
    {
        if (!$this->isUserLoggedIn() || !$this->user->canManageAllUsers()) {
            return $this->forbidden();
        }
        
        $postid = $this->request->getPost('commentid', FILTER_SANITIZE_NUMBER_INT);
        if ($postid > 0) {
            $commentid = $postid;
        }
        
        $comment = $this->commentModel->getById($commentid);
        if ($comment === null) {
            return $this->pageNotFound();
        }
        
        if ($postid == 0) {
            $this->renderDefaultLayout('comment-delete-form', [
                'comment' => $comment
            ]);
        } else {
            $this->commentModel->delete($comment->commentid);
            $this->renderDefaultLayout('comment-deleted');
        }
    }
}
