<?php

namespace App\Models;

use CodeIgniter\Model;

class PaypalHookModel extends Model
{
    protected $table = 'paypalhook';
    protected $primaryKey = 'paypalhookid';
    
    protected $returnType = 'App\Entities\PaypalHook';
    protected $useSoftDeletes = true;
    
    protected $allowedFields = ['payload', 'created_at'];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('paypalhookid', $id)->first();
    }
    
    public function register(string $payload) : \App\Entities\PaypalHook
    {
        $hook = new \App\Entities\PaypalHook();
        $hook->payload = $payload;
        $hook->created_at = date('Y-m-d H:i:s');
        
        if ($id = $this->insert($hook)) {
            $hook->paypalhookid = $id;
            
            return $hook;
        }
    }
}
