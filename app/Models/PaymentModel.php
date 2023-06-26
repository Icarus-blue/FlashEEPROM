<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    public const TOKENS_PER_PAYMENT = 300;

    protected $table = 'payment';
    protected $primaryKey = 'paymentid';
    
    protected $returnType = 'App\Entities\Payment';
    protected $useSoftDeletes = false;
    
    protected $allowedFields = ['userid', 'amount', 'paypalid', 'created_at', 'is_return'];
    
    protected $useTimestamps = false;
    
    public function getById(int $id)
    {
        return $this->where('paymentid', $id)->first();
    }
    
    public function getByPaypalId(string $id)
    {
        return $this->where('paypalid', $id)->first();
    }
    
    public function getForUser(\App\Entities\User $user)
    {
        return $this->where('userid', $user->userid)->findAll();
    }

    public function getSoldTokens()
    {
        $data = $this->getStatistics();
        return $data['total'] * self::TOKENS_PER_PAYMENT;
    }

    public function getStatistics()
    {
        $query = $this->db->query("
            SELECT COUNT(*) AS total, SUM(is_return) AS `returning` FROM payment
        ");

        $data = $query->getFirstRow();
        return [
            'total' => $data->total,
            'returning' => $data->returning
        ];
    }

    public function getStatisticsByRange(string $dateStart, string $dateEnd)
    {
        $query = $this->db->query("
            SELECT
                COUNT(*) AS total,
                LAST_DAY(created_at) AS `month`,
                SUM(is_return) AS `returning`
            FROM payment
            WHERE
                created_at >= " . $this->db->escape($dateStart) . "
                AND created_at < (" . $this->db->escape($dateEnd). " + INTERVAL 1 DAY)
            GROUP BY LAST_DAY(created_at)
        ");

        return $query->getResultArray();
    }
    
    public function register(\App\Entities\User $user, float $amount, string $paypalid) : \App\Entities\Payment
    {
        $payment = new \App\Entities\Payment();
        $payment->userid = $user->userid;
        $payment->created_at = date('Y-m-d H:i:s');
        $payment->amount = $amount;
        $payment->paypalid = $paypalid;

        $previous = $this->where('userid', $user->userid)->first();
        if ($previous) {
            $payment->is_return = 1;
        }
        
        if ($id = $this->insert($payment)) {
            $payment->paymentid = $id;
            
            return $payment;
        }
    }
}
