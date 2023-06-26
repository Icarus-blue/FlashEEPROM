<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    const ROLE_SUPERUSER = 2;
    const ROLE_ADMINISTRATOR = 1;
    const ROLE_NORMAL = 0;
    
    public function checkPassword(string $password)
    {
        return password_verify(
            $password,
            $this->attributes['password']
        );
    }
    
    public function setPassword(string $password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        
        return $this;
    }
    
    public function canManageTemplates() : bool
    {
        return $this->canManageAllUsers();
    }
    
    public function canManageUser(\App\Entities\User $user)
    {
        return ($user->role < $this->role);
    }
    
    public function canManageUsers() : bool
    {
        return ($this->role > self::ROLE_NORMAL);
    }
    
    public function canManageAllUsers() : bool
    {
        return ($this->role == self::ROLE_SUPERUSER);
    }
    
    public function canBypassExpiration(): bool
    {
        return ($this->role > self::ROLE_NORMAL);
    }
    
    public function hasExpired() : bool
    {
        return $this->role == self::ROLE_NORMAL && ($this->tokens == 0 || strtotime($this->expire_at) < time());
    }
    
    public function getValidTokens() : int
    {
        return $this->hasExpired() ? 0 : $this->tokens;
    }
    
    public function isDeveloper() : bool
    {
        return $this->is_developer == 1;
    }
    
    public function isModerator() : bool
    {
      return $this->is_moderator == 1;
    }

    public function getDaysLeft() : int
    {
        if ($this->role != self::ROLE_NORMAL) {
            return 0;
        }
        
        $date_start = new \DateTime('now');
        $date_end = new \DateTime($this->expire_at);
        $days = (int)$date_start->diff($date_end)->format('%r%a');
        
        if ($days < 0) {
            return 0;
        }
        
        return $days + 1;
    }
}
