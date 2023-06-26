<?php

namespace App\Models;

use CodeIgniter\Model;

class DownloadModel extends Model
{
    protected $table = 'download';
    protected $primaryKey = 'downloadid';
    
    protected $returnType = 'App\Entities\Download';
    
    protected $allowedFields = [
        'userid', 'downloaded_at', 'filename', 'scriptid', 'is_read', 'shareid'
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
        return $this->where('downloadid', $id)->first();
    }
    
    public function getByUser(\App\Entities\User $user, int $itemsPerPage)
    {
        return $this->where('userid', $user->userid)
            ->where('is_read = 0')
            ->where('download.scriptid IS NOT NULL')
            ->join('script', 'script.scriptid = download.scriptid', 'INNER')
            ->orderBy('downloaded_at', 'DESC')
            ->paginate($itemsPerPage);
    }
    
    public function registerDownload(\App\Entities\User $user, string $filename, ?int $scriptid, int $isRead = 0, ?int $shareid = null)
    {
        $download = new \App\Entities\Download();
        $download->userid = $user->userid;
        $download->downloaded_at = date('Y-m-d H:i:s');
        $download->filename = $filename;
        $download->scriptid = $scriptid;
        $download->shareid = $shareid;
        $download->is_read = $isRead;
        
        if ($id = $this->insert($download)) {
            $download->downloadid = $id;
            
            $this->activityModel->createForDownload($download);
            
            return $download;
        }
    }
    
    public function getTotalDownloads()
    {
        $query = $this->db->query("
            SELECT COUNT(downloadid) AS total FROM download
        ");
        
        return $query->getFirstRow()->total;
    }
}
