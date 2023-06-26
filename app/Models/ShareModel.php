<?php

namespace App\Models;

use CodeIgniter\Model;

class ShareModel extends Model
{
    protected $table = 'share';
    protected $primaryKey = 'shareid';
    
    protected $returnType = 'App\Entities\Share';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = [
        'userid',
        'name',
        'brand',
        'model',
        'year',
        'memory',
        'kilometers',
        'image',
        'tokens'
    ];
    
    protected $useTimestamps = false;
    
    protected $activityModel = null;
    
    public function __construct()
    {
        parent::__construct();
        $this->activityModel = new ActivityModel();
    }
    
    public function getById(int $id)
    {
        return $this->where('shareid', $id)->first();
    }
    
    public function getExtended(int $id)
    {
        return $this->select('user.*, `share`.*, share.tokens')
            ->join('user', 'user.userid = share.userid', 'LEFT')
            ->where('shareid', $id)->first();
    }
    
    public function create(\App\Entities\Share $share)
    {
        if ($id = $this->insert($share)) {
            $share->shareid = $id;
            
            $this->activityModel->createForShare($share);
            
            return $share;
        }
    }
    
    public function getPaged(int $itemsPerPage)
    {
        return $this->select('user.*, `share`.*, share.tokens')
            ->join('user', 'user.userid = share.userid', 'LEFT')
            ->paginate($itemsPerPage);
    }
    
    public function getFilteredAndPaged(string $filter, int $itemsPerPage)
    {
        return $this->select('user.*, `share`.*, share.tokens')
            ->join('user', 'user.userid = share.userid', 'LEFT')
            ->orLike('brand', $filter)
            ->orLike('model', $filter)
            ->orLike('year', $filter)
            ->orLike('memory', $filter)
            ->orLike('user.login', $filter)
            ->paginate($itemsPerPage);
    }
}
