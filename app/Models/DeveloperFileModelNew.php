<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\DeveloperFile;

class DeveloperFileModelNew extends Model
{
    protected $table = 'developerfile_new';
    protected $primaryKey = 'developerfileid';

    protected $returnType = 'App\Entities\DeveloperFile';

    protected $allowedFields = [
        'userid', 'name', 'parentid', 'size', 'status',
        'created_at', 'directory_type', 'imageid', 'is_template', 'script_type', "str"
    ];

    protected $validationRules = [
        'name' => 'required|regex_match[/^[A-ZÑÁÉÍÓÚáéíóúñ0-9._ -]+$/i]',
    ];

    protected $useTimestamps = false;

    private $templateFolder = null;

    public function getById(string $id)
    {
        return $this->where('developerfileid', $id)->first();
    }

    private function getOnFlyFolder(string $id, string $name, int $type)
    {
        $folder = new \App\Entities\DeveloperFile();
        $folder->developerfileid = $id;
        $folder->name = $name;
        $folder->parentid = null;
        $folder->size = 0;
        $folder->status = 0;
        $folder->created_at = '2022-03-01 00:00:00';
        $folder->directory_type = $type;
        $folder->imageid = null;

        return $folder;
    }

    public function getApprovalFolder()
    {
        return $this->getOnFlyFolder('approve', 'Aprobar', DeveloperFile::DIRECTORY_APPROVAL);
    }

    public function getApprovedFolder()
    {
        return $this->getOnFlyFolder('approved', 'Aprobados', DeveloperFile::DIRECTORY_APPROVED);
    }

    public function getRejectedFolder()
    {
        return $this->getOnFlyFolder('rejected', 'Desaprobados', DeveloperFile::DIRECTORY_REJECTED);
    }

    public function getUserFolder(int $userid, string $name, DeveloperFile $parent)
    {
        $folder = $this->getOnFlyFolder(
            $parent->developerfileid . '-' . $userid,
            $name,
            $parent->directory_type
        );

        $folder->parentid = $parent->developerfileid;
        return $folder;
    }

    public function updatefield($id, $str)
    {
        $this->update($id, $str);
    }

    public function getApprovedFiles()
    {
        return $this->select('developerfile.*, user.login,
            luascript.tokens, luascript.luascriptid,
            (
                SELECT GROUP_CONCAT(questionid)
                FROM luascriptquestion
                WHERE luascriptid = luascript.luascriptid
            ) AS questions')
            ->join('user', 'user.userid = developerfile.userid', 'LEFT')
            ->join('luascript', 'luascript.developerfileid = developerfile.developerfileid', 'LEFT')
            ->where('status', DeveloperFile::STATUS_PUBLISHED)
            ->findAll();
    }

    public function getRejectedFiles()
    {
        return $this->select('developerfile.*, user.login')
            ->join('user', 'user.userid = developerfile.userid', 'LEFT')
            ->where('status', DeveloperFile::STATUS_REJECTED)
            ->findAll();
    }

    public function getTemplateFolder()
    {
        if (!$this->templateFolder) {
            $this->templateFolder = $this->where('is_template', 1)->where('parentid IS NULL')->first();
        }
        return $this->templateFolder;
    }

    public function getTemplateFiles()
    {
        $folder = $this->getTemplateFolder();
        return $this->where('userid', $folder->userid)->where('is_template', 1)->findAll();
    }

    public function getFilesForUser(\App\Entities\User $user)
    {
        $files = $this->where('userid', $user->userid)
            ->where('is_template', 0)
            ->orderBy('IF(directory_type > 0, 0, 1)')
            ->orderBy('name')
            ->findAll();
        if (count($files) == 0) {
            $this->createDefaultFolders($user);
            return $this->where('userid', $user->userid)
                ->where('is_template', 0)
                ->orderBy('IF(directory_type > 0, 0, 1)')
                ->orderBy('name')
                ->findAll();
        }
        return $files;
    }


    public function createDefaultFolders(\App\Entities\User $user)
    {
        // $this->createFolder('Imágenes', null, $user, DeveloperFile::DIRECTORY_IMAGES);

        $development = $this->createFolder('New folder', null, $user, DeveloperFile::DIRECTORY_SCRIPTS);
        // $this->createFolder('Aprobados', $development, $user, DeveloperFile::DIRECTORY_APPROVED);
        // $this->createFolder('Desaprobados', $development, $user, DeveloperFile::DIRECTORY_REJECTED);
    }

    public function createFolder(string $name, ?DeveloperFile $parent, \App\Entities\User $user, int $type, int $size = 0, int $scriptType = 0)
    {
        $folder = new DeveloperFile();
        $folder->userid = $user->userid;
        $folder->name = $name;

        if ($parent !== null) {
            $folder->parentid = $parent->developerfileid;
            $folder->is_template = $parent->is_template;

            if ($parent->is_template) {
                $folder->userid = $parent->userid;
            }
        } else {
            $folder->is_template = 0;
        }

        $folder->size = $size;
        $folder->status = 0;
        $folder->created_at = date('Y-m-d H:i:s');
        $folder->directory_type = $type;
        $folder->script_type = $scriptType;

        if ($id = $this->insert($folder)) {
            $folder->developerfileid = $id;
            return $folder;
        }
    }

    public function renameFile(DeveloperFile $file, string $name)
    {
        $file->name = $name;
        return $this->save($file);
    }

    public function getTotalSize(\App\Entities\User $user)
    {
        $query = $this->db->query("
            SELECT SUM(size) AS total
            FROM developerfile
            WHERE userid = {$user->userid}
        ");

        return $query->getFirstRow()->total;
    }

    public function setImages(DeveloperFile $file, array $images)
    {
        $this->db->query("DELETE FROM fileimage WHERE developerfileid = " . $file->developerfileid);
        foreach ($images as $image) {
            $this->db->query("
                INSERT INTO fileimage
                    (developerfileid, imageid)
                VALUES
                    ({$file->developerfileid}, {$image->developerfileid})
            ");
        }
    }

    public function getImages(DeveloperFile $file)
    {
        $query = $this->db->query("
            SELECT GROUP_CONCAT(imageid) AS images
            FROM fileimage
            WHERE developerfileid = {$file->developerfileid}
        ");

        $images = $query->getFirstRow()->images;
        if (empty($images)) {
            return [];
        } else {
            return explode(',', $images);
        }
    }

    public function getImage(int $fileid, int $imageid)
    {
        $query = $this->db->query("
            SELECT d.*
            FROM fileimage
            JOIN developerfile d ON (d.developerfileid = fileimage.imageid)
            WHERE fileimage.developerfileid = $fileid AND fileimage.imageid = $imageid
        ");

        return $query->getCustomRowObject(0, $this->returnType);
    }

    public function createFile(string $name, ?DeveloperFile $parent, \App\Entities\User $user, int $size = 0, int $scriptType = 0)
    {
        return $this->createFolder($name, $parent, $user, DeveloperFile::NO_DIRECTORY, $size, $scriptType);
    }

    public function changeStatus(DeveloperFile $file, int $status, ?int $newParent = null)
    {
        if ($newParent) {
            $file->parentid = $newParent;
        }
        $file->status = $status;
        return $this->save($file);
    }

    public function markAsPending(DeveloperFile $file)
    {
        return $this->changeStatus($file, DeveloperFile::STATUS_REQUESTED);
    }

    public function markAsApproved(DeveloperFile $file)
    {
        $folder = $this->getFolderByType($file->userid, DeveloperFile::DIRECTORY_APPROVED);
        return $this->changeStatus($file, DeveloperFile::STATUS_PUBLISHED, $folder->developerfileid);
    }

    public function markAsRejected(DeveloperFile $file)
    {
        $folder = $this->getFolderByType($file->userid, DeveloperFile::DIRECTORY_REJECTED);
        return $this->changeStatus($file, DeveloperFile::STATUS_REJECTED, $folder->developerfileid);
    }

    private function getFolderByType(int $userid, int $type)
    {
        return $this->where('userid', $userid)
            ->where('directory_type', $type)
            ->first();
    }
}