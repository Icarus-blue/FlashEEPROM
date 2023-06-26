<?php

namespace App\Models;

use CodeIgniter\Model;

class PasswordRecoveryModel extends Model
{
    protected $table = 'password_recovery';
    protected $primaryKey = 'requestid';
    
    protected $returnType = 'App\Entities\PasswordRecovery';
    
    protected $allowedFields = ['requested_at', 'userid', 'used_at', 'token', 'sent_at'];
    
    protected $useTimestamps = false;
    
    public function getById(int $requestid)
    {
        return $this->where('requestid', $requestid)->first();
    }
    
    public function generateRequest(\App\Entities\User $user) : ?\App\Entities\PasswordRecovery
    {
        $existing = $this->where('userid', $user->userid)
            ->where('used_at IS NULL')
            ->where('requested_at > ', date('Y-m-d H:i:s', time() - \App\Entities\PasswordRecovery::VALIDITY_IN_SECONDS))
            ->first();
        if ($existing) {
            return $existing;
        }
        
        $request = new \App\Entities\PasswordRecovery();
        $request->requested_at = date('Y-m-d H:i:s');
        $request->userid = $user->userid;
        $request->token = \App\Models\UserModel::generateToken();
        
        if ($insertId = $this->insert($request)) {
            $request->requestid = $insertId;
            return $request;
        }
    }
}
