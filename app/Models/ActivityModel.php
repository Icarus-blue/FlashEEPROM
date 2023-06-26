<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Activity;

class ActivityModel extends Model
{
    protected $table = 'activity';
    protected $primaryKey = 'activityid';
    
    protected $returnType = 'App\Entities\Activity';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = [
        'userid',
        'type',
        'commentid',
        'shareid',
        'downloadid',
        'registered_at'
    ];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('activityid', $id)->first();
    }
    
    public function getRecentActivity(int $items, string $type = '')
    {
        $query = $this->db->query("
            SELECT activityid, u.login AS user, u.email, u.photo, a.type, a.registered_at,
                IFNULL(c.comment, CONCAT(s.brand, ' ', s.model, ' ', s.year)) AS text,
                sc.path AS reference,
                IF(d.scriptid IS NULL, 'file', 'script') AS download_type
            FROM activity a
            JOIN user u USING (userid)
            LEFT JOIN share s USING (shareid)
            LEFT JOIN download d USING (downloadid)
            LEFT JOIN comment c USING (commentid)
            LEFT JOIN script sc ON (sc.scriptid = c.scriptid)
            WHERE c.deleted_at IS NULL
            " . ((!empty($type)) ? "AND a.type = '$type'" : "") . "
            ORDER BY a.registered_at DESC
            LIMIT $items
        ");
        return $query->getResult();
    }
    
    public function createForRegistry(\App\Entities\User $user)
    {
        $activity = new Activity();
        $activity->type = Activity::REGISTER_TYPE;
        $activity->userid = $user->userid;
        $activity->registered_at = $user->created_at;
        if ($id = $this->insert($activity)) {
            $activity->activityid = $id;
            return $activity;
        }
    }
    
    public function createForComment(\App\Entities\Comment $comment)
    {
        $activity = new Activity();
        $activity->type = Activity::COMMENT_TYPE;
        $activity->userid = $comment->userid;
        $activity->registered_at = $comment->posted;
        $activity->commentid = $comment->commentid;
        if ($id = $this->insert($activity)) {
            $activity->activityid = $id;
            return $activity;
        }
    }
    
    public function createForShare(\App\Entities\Share $share)
    {
        $activity = new Activity();
        $activity->type = Activity::SHARE_TYPE;
        $activity->userid = $share->userid;
        $activity->registered_at = date('Y-m-d H:i:s');
        $activity->shareid = $share->shareid;
        if ($id = $this->insert($activity)) {
            $activity->activityid = $id;
            return $activity;
        }
    }
    
    public function createForDownload(\App\Entities\Download $download)
    {
        $activity = new Activity();
        $activity->type = Activity::DOWNLOAD_TYPE;
        $activity->userid = $download->userid;
        $activity->registered_at = $download->downloaded_at;
        $activity->downloadid = $download->downloadid;
        if ($id = $this->insert($activity)) {
            $activity->activityid = $id;
            return $activity;
        }
    }
}
