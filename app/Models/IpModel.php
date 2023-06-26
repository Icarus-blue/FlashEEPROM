<?php

namespace App\Models;

use CodeIgniter\Model;

class IpModel extends Model
{
    protected $table = 'ip';
    protected $primaryKey = 'ipid';
    
    protected $returnType = 'App\Entities\Ip';
    
    protected $allowedFields = ['address'];
    
    protected $useTimestamps = false;
    
    public function registerIp(string $address)
    {
        $ip = $this->where('address', $address)->first();
        if ($ip === null) {
            $ip = new \App\Entities\Ip();
            $ip->address = $address;
            $this->save($ip);
            
            $ip->ipid = $this->insertID;
        }
        return $ip;
    }
    
    public function countLoginAttempts(\App\Entities\Ip $ip, int $minutes) : int
    {
        $query = $this->db->query("
            SELECT COUNT(*) failed
            FROM failedattempt
            WHERE ipid = {$ip->ipid} AND visitdate > '" . date('Y-m-d H:i:s', strtotime("-$minutes minutes")) . "'
        ");
        
        return $query->getFirstRow()->failed;
    }
    
    public function registerLoginAttempt(\App\Entities\Ip $ip, \App\Entities\UserAgent $agent, string $login)
    {
        $loginescaped = $this->db->escapeString($login);
        $this->db->query("
            INSERT INTO failedattempt (ipid, useragentid, login, visitdate)
            VALUES ({$ip->ipid}, {$agent->useragentid}, '$login', '" . date('Y-m-d H:i:s') . "')
        ");
    }
    
    public function registerSuccessfulLogin(\App\Entities\Ip $ip, \App\Entities\UserAgent $agent, \App\Entities\User $user)
    {
        $this->db->query("
            INSERT INTO loginlog (ipid, useragentid, userid, visitdate)
            VALUES ({$ip->ipid}, {$agent->useragentid}, {$user->userid}, '" . date('Y-m-d H:i:s') . "')
        ");
    }
    
    public function blockIp(\App\Entities\Ip $ip)
    {
        $this->db->query("
            INSERT INTO lockedip (ipid, locked)
            VALUES ({$ip->ipid}, '" . date('Y-m-d H:i:s') . "')
        ");
    }
    
    public function isIpBlocked(\App\Entities\Ip $ip, int $minutes) : bool
    {
        $query = $this->db->query("
            SELECT locked
            FROM lockedip
            WHERE ipid = {$ip->ipid} AND locked > '" . date('Y-m-d H:i:s', strtotime("-$minutes minutes")) . "'
        ");
        
        return ($query->getFirstRow() !== null);
    }
}
