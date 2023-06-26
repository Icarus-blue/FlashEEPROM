<?php

namespace App\Models;

use CodeIgniter\Model;

class ScriptImageModel extends Model
{
    protected $table = 'scriptimage';
    protected $primaryKey = 'scriptimageid';
    
    protected $returnType = 'App\Entities\ScriptImage';
    
    protected $allowedFields = [
        'scriptid', 'path', 'is_for_expired'
    ];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('scriptimageid', $id)->first();
    }

    public function createForScript(\App\Entities\Script $script, string $path, bool $isForExpired): ?\App\Entities\ScriptImage
    {
        $image = new \App\Entities\ScriptImage();
        $image->scriptid = $script->scriptid;
        $image->path = $path;
        $image->is_for_expired = ($isForExpired ? 1 : 0);

        if ($id = $this->insert($image)) {
            $image->scriptimageid = $id;
            return $image;
        }

        return null;
    }

    public function getForScript(\App\Entities\Script $script): array
    {
        $list = $this->where('scriptid', $script->scriptid)->findAll();

        $result = ['regular' => [], 'expired' => []];
        foreach ($list as $image) {
            if ($image->is_for_expired) {
                $result['expired'][] = 'script/additionalimage/' . $script->scriptid . '/' . $image->scriptimageid;
            } else {
                $result['regular'][] = 'script/additionalimage/' . $script->scriptid . '/' . $image->scriptimageid;
            }
        }

        return $result;
    }
}
