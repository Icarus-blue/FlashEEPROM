<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'commentid';
    
    protected $returnType = 'App\Entities\Comment';
    protected $useSoftDeletes = true;
    
    protected $allowedFields = ['scriptid', 'userid', 'comment', 'posted', 'rating'];
    
    protected $useTimestamps = false;
    
    protected $deletedField  = 'deleted_at';
    
    protected $activityModel = null;
    
    public function __construct()
    {
        parent::__construct();
        $this->activityModel = new ActivityModel();
    }
    
    public function getById(int $id)
    {
        return $this->where('commentid', $id)->first();
    }
    
    public function getComments(\App\Entities\Script $script)
    {
        $query = $this->db->query("
            SELECT c.*, u.login AS user, u.email
            FROM `comment` c
            JOIN user u USING (userid)
            WHERE scriptid = {$script->scriptid}
                AND c.deleted_at IS NULL
        ");
        return $query->getResult();
    }
    
    public function createComment(\App\Entities\User $user, \App\Entities\Script $script, ?int $rating, string $text) : \App\Entities\Comment
    {
        $comment = new \App\Entities\Comment();
        $comment->scriptid = $script->scriptid;
        $comment->userid = $user->userid;
        $comment->comment = $text;
        $comment->posted = date('Y-m-d H:i:s');
        $comment->rating = $rating;
        
        if ($id = $this->insert($comment)) {
            $comment->commentid = $id;
            
            $this->activityModel->createForComment($comment);
            
            return $comment;
        }
    }
}
