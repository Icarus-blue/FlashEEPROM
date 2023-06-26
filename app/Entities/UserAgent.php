<?php

namespace App\Entities;

use CodeIgniter\Entity;

class UserAgent extends Entity
{
    public function setName(string $name)
    {
        $this->attributes['name'] = mb_substr($name, 0, 255, 'UTF-8');
    }
}
