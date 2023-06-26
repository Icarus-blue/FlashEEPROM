<?php

namespace App\Models;

use CodeIgniter\Model;

class DeveloperHistoryModel extends Model
{
    protected $table = 'developerhistory';
    protected $primaryKey = 'developerhistoryid';
    
    protected $returnType = 'App\Entities\DeveloperHistory';
    
    protected $allowedFields = [
        'userid', 'downloadid', 'luascriptid', 'tokens',
        'credit', 'registered_at', 'shareid'
    ];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('developerhistoryid', $id)->first();
    }

    private function registerWithTokens(\App\Entities\User $user, \App\Entities\Download $download, ?\App\Entities\LuaScript $script, int $tokens)
    {
        $history = new \App\Entities\DeveloperHistory();
        $history->userid = $user->userid;
        $history->downloadid = $download->downloadid;

        if ($script) {
            $history->luascriptid = $script->luascriptid;
        }

        $history->tokens = $tokens;
        $history->credit = $tokens * 0.01;
        $history->registered_at = date('Y-m-d H:i:s');
        if ($id = $this->insert($history)) {
            $history->developerhistoryid = $id;
            return $history;
        }
    }

    public function registerShare(\App\Entities\User $user, \App\Entities\Download $download, \App\Entities\Share $share)
    {
        return $this->registerWithTokens($user, $download, null, $share->tokens);
    }
    
    public function register(\App\Entities\User $user, \App\Entities\Download $download, \App\Entities\LuaScript $script)
    {
        return $this->registerWithTokens($user, $download, $script, $script->tokens);
    }
    
    public function getItemsByRange(\App\Entities\User $user, ?string $date_start = null, ?string $date_end = null)
    {
        $date_condition = '';
        if (!empty($date_start) && !empty($date_end)) {
            $date_condition = "AND registered_at >= '" . $this->db->escapeString($date_start) . "'
                AND registered_at < '" . $this->db->escapeString($date_end) . "'";
        }
        
        $query = $this->db->query("
            SELECT h.*, IFNULL(u.login, us.login) AS login,
                IFNULL(l.path, s.name) AS path,
                IFNULL(l.tokens, s.tokens) AS tokens
            FROM developerhistory h
            LEFT JOIN `download` d USING (downloadid)
            LEFT JOIN `user` u ON (d.userid = u.userid)
            LEFT JOIN luascript l USING (luascriptid)
            LEFT JOIN `share` s USING (shareid)
            LEFT JOIN `user` us ON (s.userid = us.userid)
            WHERE h.userid = {$user->userid}
                $date_condition
        ");
        
        return $query->getResult();
    }
    
    public function getStatsByRange(\App\Entities\User $user, ?string $date_start = null, ?string $date_end = null)
    {
        $date_condition = '';
        if (!empty($date_start) && !empty($date_end)) {
            $date_condition = "AND registered_at >= '" . $this->db->escapeString($date_start) . "'
                AND registered_at < '" . $this->db->escapeString($date_end) . "'";
        }
        
        $query = $this->db->query("
            SELECT SUM(tokens) AS tokens, SUM(credit) AS credit, COUNT(*) AS total
            FROM developerhistory
            WHERE userid = {$user->userid}
                $date_condition
        ");
        
        return $query->getRowArray();
    }
}
