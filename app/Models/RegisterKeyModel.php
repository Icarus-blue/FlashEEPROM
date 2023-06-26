<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterKeyModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'registerkeys';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["equipID", "secretkey", "userid", "user_name", "count", "status",];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getKeyById($id)
    {
        return $this->find($id);
    }

    public function getKeys()
    {
        return $this->findAll();
    }

    public function isExitSecretKey($secretkey)
    {
        return $this->where('secretkey', $secretkey)->first();
    }

    public function getFieldByUserID($userid)
    {
        return $this->where('userid', $userid)->first();
    }

    public function createKey($data)
    {
        // return $this->db->table('my_table')->set($data)->insert();

        $this->insert($data);
        return $this->findAll();
    }

    public function updateDate($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteKey($id)
    {
        return $this->delete($id);
    }
}