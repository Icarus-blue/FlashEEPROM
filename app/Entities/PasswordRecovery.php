<?php

namespace App\Entities;

use CodeIgniter\Entity;

class PasswordRecovery extends Entity
{
    public const VALIDITY_IN_SECONDS = 3600;
    
    public function isStillValid()
    {
        $time = strtotime($this->requested_at);
        if (time() < $time + self::VALIDITY_IN_SECONDS && $this->used_at == null) {
            return true;
        }
        
        return false;
    }
}
