<?php

namespace App\Models;

use CodeIgniter\Model;

class ScriptModel extends Model
{
    protected $table = 'script';
    protected $primaryKey = 'scriptid';
    
    protected $returnType = 'App\Entities\Script';
    
    protected $allowedFields = ['path', 'hash', 'tokens'];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('scriptid', $id)->first();
    }
    
    public function getScript(string $path) : ?\App\Entities\Script
    {
        $hash = $this->calculateHash($path);
        $script = $this->where('hash', $hash)->first();
        
        if (!$script) {
            $script = new \App\Entities\Script();
            $script->path = $path;
            $script->hash = $hash;
            $script->tokens = 10;
            
            if ($id = $this->insert($script)) {
                $script->scriptid = $id;
                return $script;
            }
        } else {
            return $script;
        }
    }

    public function getScriptTokens(): array
    {
        $query = $this->db->query("
            SELECT path, tokens
            FROM `script`
            WHERE tokens > 1
        ");

        $result = [];
        foreach ($query->getResult() as $row) {
            $result[$row->path] = $row->tokens;
        }
        return $result;
    }
    
    private function calculateHash(string $path) : string
    {
        return hash('sha256', str_replace(DIRECTORY_SEPARATOR, '|', $path));
    }
}
