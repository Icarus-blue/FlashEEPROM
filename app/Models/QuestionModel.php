<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'questionid';
    
    protected $returnType = 'App\Entities\Question';
    protected $useSoftDeletes = true;
    
    protected $allowedFields = ['question', 'tokens', 'groupid'];
    
    protected $useTimestamps = false;
    
    protected $deletedField  = 'deleted_at';
    
    protected $activityModel = null;
    
    public function getById(int $id)
    {
        return $this->where('questionid', $id)->first();
    }
    
    public function getManyById(array $questions)
    {
        return $this->whereIn('questionid', $questions)->findAll();
    }
    
    public function getQuestions()
    {
        return $this->findAll();
    }

    public function getQuestionsForGroup(\App\Entities\QuestionGroup $group)
    {
        return $this->where('groupid', $group->groupid)->findAll();
    }
    
    public function createQuestion(string $name, int $tokens, ?int $groupid): \App\Entities\Question
    {
        $question = new \App\Entities\Question();
        $question->question = $name;
        $question->tokens = $tokens;
        $question->groupid = $groupid;

        if ($id = $this->insert($question)) {
            $question->questionid = $id;
            
            return $question;
        }
    }
}
