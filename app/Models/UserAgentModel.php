<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAgentModel extends Model
{
    protected $table = 'useragent';
    protected $primaryKey = 'useragentid';
    
    protected $returnType = 'App\Entities\UserAgent';
    
    protected $allowedFields = ['name'];
    
    protected $useTimestamps = false;
    
    public function registerAgent(string $name)
    {
        $newagent = new \App\Entities\UserAgent();
        $newagent->name = $name;
        
        $agent = $this->where('name', $newagent->name)->first();
        if ($agent === null) {
            $this->save($newagent);
            
            $newagent->useragentid = $this->insertID;
            return $newagent;
        }
        return $agent;
    }
}
