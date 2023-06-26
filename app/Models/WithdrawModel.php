<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Activity;

class WithdrawModel extends Model
{
    protected $table = 'withdraw';
    protected $primaryKey = 'withdrawid';
    
    protected $returnType = 'App\Entities\Withdraw';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = [
        'userid',
        'phone',
        'paypal',
        'document',
        'amount',
        'registered_at'
    ];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('withdrawid', $id)->first();
    }
    
    public function getStatisticsByRange(string $dateStart, string $dateEnd)
    {
        $query = $this->db->query("
            SELECT
                (SUM(amount) * 100) AS total,
                LAST_DAY(registered_at) AS `month`
            FROM withdraw
            WHERE
                registered_at >= " . $this->db->escape($dateStart) . "
                AND registered_at < (" . $this->db->escape($dateEnd). " + INTERVAL 1 DAY)
            GROUP BY LAST_DAY(registered_at)
        ");

        return $query->getResultArray();
    }

    public function withdraw(\App\Entities\Withdraw $withdraw)
    {
        if ($id = $this->insert($withdraw)) {
            $amount = floatval($withdraw->amount);
            
            $this->db->query("
                UPDATE `user`
                SET balance = balance - $amount
                WHERE userid = {$withdraw->userid}
            ");
            
            return true;
        }
        
        return false;
    }
    
    public function getLastWithdraw(\App\Entities\User $user)
    {
        return $this->where('userid', $user->userid)->orderBy('registered_at', 'DESC')->first();
    }
}
