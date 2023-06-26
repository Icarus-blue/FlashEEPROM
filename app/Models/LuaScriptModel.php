<?php

namespace App\Models;

use CodeIgniter\Model;

class LuaScriptModel extends Model
{
    protected $table = 'luascript';
    protected $primaryKey = 'luascriptid';
    
    protected $returnType = 'App\Entities\LuaScript';
    
    protected $allowedFields = [
        'path', 'hash', 'prefix', 'published_at', 'userid', 'list',
        'tokens', 'developerfileid'];
    
    protected $validationRules = [
        'path' => 'required|regex_match[/^[A-ZÑÁÉÍÓÚáéíóúñ0-9._ \/-]+$/i]',
    ];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('luascriptid', $id)->first();
    }
    
    public function getPublished()
    {
        return $this->where('published_at IS NOT NULL')->findAll();
    }
    
    public function getPendingApproval()
    {
        $query = $this->db->query("
            SELECT luascript.*, developerfile.*, user.login, (
                SELECT GROUP_CONCAT(questionid)
                FROM luascriptquestion
                WHERE luascriptid = luascript.luascriptid
            ) AS questions
            FROM luascript
            JOIN developerfile USING (developerfileid)
            JOIN `user` ON (`user`.userid = luascript.userid)
            WHERE published_at IS NULL
        ");
        
        return $query->getResultArray();
    }
    
    public function getExtended(int $id)
    {
        $query = $this->db->query("
            SELECT luascript.*, developerfile.*, user.login
            FROM luascript
            JOIN developerfile USING (developerfileid)
            JOIN `user` ON (`user`.userid = luascript.userid)
            WHERE luascriptid = $id
        ");
        
        return $query->getCustomRowObject(0, $this->returnType);
    }
    
    private function calculateHash(string $path) : string
    {
        return hash('sha256', str_replace(DIRECTORY_SEPARATOR, '|', $path));
    }
    
    public function requestPublish(\App\Entities\DeveloperFile $file, string $prefix, string $path, array $questions)
    {
        $script = new \App\Entities\LuaScript();
        $script->userid = $file->userid;
        $script->path = $path;
        $script->hash = $this->calculateHash($path);
        $script->prefix = $prefix;
        $script->list = '';
        $script->developerfileid = $file->developerfileid;
        
        $tokens = 0;
        foreach ($questions as $question) {
            $tokens += $question->tokens;
        }
        
        $script->tokens = $tokens;
        
        if ($id = $this->insert($script)) {
            foreach ($questions as $question) {
                $this->db->query("
                    INSERT INTO luascriptquestion
                        (luascriptid, questionid)
                    VALUES
                        ($id, {$question->questionid})
                ");
            }
            
            $script->luascriptid = $id;
            return $script;
        }
    }
}
