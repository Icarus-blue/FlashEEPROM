<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
    protected $table = 'config';
    protected $primaryKey = 'name';
    
    protected $returnType = 'App\Entities\Config';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = [
        'name',
        'value'
    ];
    
    protected $useTimestamps = false;
    
    public function getByName(string $name)
    {
        $result = $this->where('name', $name)->first();
        if ($result) {
            return $result->value;
        }
    }
    
    public function setByName(string $name, string $value)
    {
        $entity = new \App\Entities\Config();
        $entity->name = $name;
        $entity->value = $value;
        $this->save($entity);
    }
    
    public function getMultipleByName(array $names)
    {
        $data = $this->whereIn('name', $names)->findAll();
        
        $result = [];
        foreach ($data as $item) {
            $result[$item->name] = $item->value;
        }
        
        return $result;
    }
}
