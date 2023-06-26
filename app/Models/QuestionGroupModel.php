<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionGroupModel extends Model
{
    protected $table = 'questiongroup';
    protected $primaryKey = 'groupid';
    
    protected $returnType = 'App\Entities\QuestionGroup';
    protected $useSoftDeletes = true;
    
    protected $allowedFields = ['name'];
    
    protected $useTimestamps = false;
    
    protected $deletedField  = 'deleted_at';
    
    private $questionModel = null;

    public function __construct()
    {
        parent::__construct();

        $this->questionModel = new QuestionModel();
    }

    public function getById(int $id)
    {
        return $this->where('groupid', $id)->first();
    }

    public function getGroups()
    {
        return $this->findAll();
    }

    public function getQuestions()
    {
        $groups = $this->findAll();

        $result = [];
        foreach ($groups as $group) {
            $result[$group->groupid] = [
                'name' => $group->name,
                'questions' => []
            ];
        }

        $questions = $this->questionModel->getQuestions();
        foreach ($questions as $question) {
            if (!isset($result[$question->groupid])) {
                continue;
            }

            $result[$question->groupid]['questions'][] = $question;
        }

        return $result;
    }
    
    public function createGroup(string $name): \App\Entities\QuestionGroup
    {
        $group = new \App\Entities\QuestionGroup();
        $group->name = $name;
        
        if ($id = $this->insert($group)) {
            $group->groupid = $id;
            
            return $group;
        }
    }
}
