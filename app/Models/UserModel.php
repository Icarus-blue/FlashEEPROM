<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'userid';
    
    protected $returnType = 'App\Entities\User';
    protected $useSoftDeletes = true;
    
    protected $allowedFields = [
        'login', 'email', 'password', 'role', 'created_at',
        'activated_at', 'confirmation', 'confirmation_sent',
        'expire_at', 'tokens', 'is_developer', 'is_moderator'
    ];
    
    protected $useTimestamps = false;
    
    protected $validationRules = [
        'login' => 'required|regex_match[/^[A-ZÑÁÉÍÓÚa-zñáéíóú0-9]+$/]',
        'password' => 'required|min_length[6]',
        'role' => 'required|less_than_equal_to[2]',
        'email' => 'required|valid_email',
    ];
    
    protected $deletedField  = 'deleted_at';
    
    protected $activityModel = null;
    protected $configModel = null;
    protected $historyModel = null;
    
    public function __construct()
    {
        parent::__construct();
        $this->activityModel = new ActivityModel();
        $this->configModel = new ConfigModel();
        $this->historyModel = new DeveloperHistoryModel();
    }

    public function getTokensToPay()
    {
        $query = $this->db->query("
            SELECT SUM(balance) * 100 AS `tokens_to_pay` FROM user
        ");

        return $query->getFirstRow()->tokens_to_pay;
    }

    public function getAvailableTokens()
    {
        $query = $this->db->query("
            SELECT SUM(tokens) AS total_tokens
            FROM user
            WHERE userid IN (SELECT DISTINCT userid FROM expire_log)
        ");

        return $query->getFirstRow()->total_tokens;
    }

    public function countByRange(?string $dateStart = null, ?string $dateEnd = null)
    {
        $condition = '';
        if (!empty($dateStart) && !empty($dateEnd)) {
            $condition = "WHERE created_at BETWEEN " . $this->db->escape($dateStart) . " AND " . $this->db->escape($dateEnd);
        }

        $query = $this->db->query("
            SELECT COUNT(*) AS total FROM user
            $condition
        ");

        return $query->getFirstRow()->total;
    }

    public function getStatisticsByRange(string $dateStart, string $dateEnd)
    {
        $query = $this->db->query("
            SELECT
                COUNT(*) AS total,
                LAST_DAY(created_at) AS `month`
            FROM user
            WHERE
                created_at >= " . $this->db->escape($dateStart) . "
                AND created_at < (" . $this->db->escape($dateEnd). " + INTERVAL 1 DAY)
            GROUP BY LAST_DAY(created_at)
        ");

        return $query->getResultArray();
    }
    
    public function getAll()
    {
        return $this->findAll();
    }

    public function getSellersPaged(int $itemsPerPage)
    {
        return $this->select('user.*,
                (SELECT amount FROM withdraw WHERE userid = user.userid ORDER BY registered_at DESC LIMIT 1) withdraw_amount,
                (SELECT registered_at FROM withdraw WHERE userid = user.userid ORDER BY registered_at DESC LIMIT 1) withdraw_date,
            ')
            ->where('userid IN (SELECT DISTINCT userid FROM developerhistory)')
            ->paginate($itemsPerPage);
    }
    
    public function getSellersFilteredAndPaged(string $filter, int $itemsPerPage)
    {
        return $this->select('user.*,
                (SELECT amount FROM withdraw WHERE userid = user.userid ORDER BY registered_at DESC LIMIT 1) withdraw_amount,
                (SELECT registered_at FROM withdraw WHERE userid = user.userid ORDER BY registered_at DESC LIMIT 1) withdraw_date,
            ')
            ->where('userid IN (SELECT DISTINCT userid FROM developerhistory)')
            ->like('login', $filter)
            ->paginate($itemsPerPage);
    }
    
    public function getPaged(int $itemsPerPage)
    {
        return $this->paginate($itemsPerPage);
    }
    
    public function getFilteredAndPaged(string $filter, int $itemsPerPage)
    {
        return $this->orLike('login', $filter)
            ->orLike('email', $filter)
            ->paginate($itemsPerPage);
    }
    
    public function getById(int $id)
    {
        return $this->find($id);
    }
    
    public function getUserById(int $id)
    {
        return $this->find($id);
    }
    
    public function getUserByEmail(string $email) : ?\App\Entities\User
    {
        return $this->where('email', $email)->first();
    }
    
    public function getUserByLoginOrEmail(string $login)
    {
        return $this->orWhere('login', $login)->orWhere('email', $login)->first();
    }
    
    public function getUserToConfirm(string $confirmation) : ?\App\Entities\User
    {
        return $this->where('confirmation', $confirmation)->where('activated_at IS NULL')->first();
    }
    
    public function getUserToNotify() : ?\App\Entities\User
    {
        return $this->where('role', \App\Entities\User::ROLE_SUPERUSER)->first();
    }
    
    public function emailExists(string $email) : bool
    {
        return $this->where('email', $email)->first() != null;
    }
    
    public function loginExists(string $login) : bool
    {
        return $this->where('login', $login)->first() != null;
    }
    
    public function listManageableUsers(\App\Entities\User $user)
    {
        return $this->where('role <', $user->role)->findAll();
    }
    
    public function create(\App\Entities\User $user)
    {
        $user->expire_at = date('Y-m-d H:i:s', time() + (intval($this->configModel->getByName('initial_days')) * 24 * 60 * 60));
        $user->tokens = intval($this->configModel->getByName('initial_tokens'));
        
        if ($id = $this->insert($user)) {
            $user->userid = $id;
            
            $this->activityModel->createForRegistry($user);
            
            return $user;
        }
    }
    
    public function reduceTokens(\App\Entities\User $user, int $quantity) : bool
    {
        $this->db->query("
            UPDATE `user`
            SET tokens = tokens - $quantity
            WHERE
                userid = {$user->userid}
                AND tokens >= $quantity
                AND expire_at > NOW()
        ");
        
        return $this->db->affectedRows() > 0;
    }
    
    private function creditHistory(\App\Entities\User $user, \App\Entities\DeveloperHistory $history)
    {
        if (!$history) {
            return;
        }

        $this->db->query("
            UPDATE `user`
            SET developer_tokens = developer_tokens + {$history->tokens},
                balance = balance + {$history->credit}
            WHERE
                userid = {$user->userid}
        ");
    }

    public function creditShare(\App\Entities\User $user, \App\Entities\Download $download, \App\Entities\Share $share)
    {
        $history = $this->historyModel->registerShare($user, $download, $share);
        $this->creditHistory($user, $history);
    }

    public function creditDownload(\App\Entities\User $user, \App\Entities\Download $download, \App\Entities\LuaScript $script)
    {
        $history = $this->historyModel->register($user, $download, $script);
        $this->creditHistory($user, $history);
    }
    
    public function isPremium(\App\Entities\User $user) : bool
    {
        $query = $this->db->query("
            SELECT * FROM expire_log WHERE userid = {$user->userid} LIMIT 1
        ");
        
        if ($query->getResultArray()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function updateSubscription(\App\Entities\User $user, int $days, int $tokens)
    {
        $new_expiration = date('Y-m-d H:i:s', strtotime("+$days days") - 1);
        
        $this->db->query("
            INSERT INTO `expire_log`
                (userid, expire_at_current, tokens_current, expire_at_new, tokens_new)
            VALUES
                ({$user->userid}, '{$user->expire_at}', {$user->tokens},
                '$new_expiration', $tokens)
        ");
        
        $user->expire_at = $new_expiration;
        $user->tokens = $tokens;
        
        return $this->save($user);
    }
    
    public function expandSubscription(\App\Entities\User $user, int $days, int $tokens)
    {
        if ($user->hasExpired()) {
            return $this->updateSubscription($user, $days, $tokens);
        }
        
        return $this->updateSubscription(
            $user,
            $user->getDaysLeft() + $days,
            $user->tokens + $tokens
        );
    }
    
    public static function generateToken()
    {
        return bin2hex(openssl_random_pseudo_bytes(20));
    }
}
