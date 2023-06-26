<?php

namespace App\Payment;

use App\Models\ConfigModel;

class Payment
{
    protected $config;
    
    public function __construct(ConfigModel $config)
    {
        $this->config = $config;
    }
    
    public static function getPayment(string $type, ConfigModel $config): Payment
    {
        if (!self::isValidPayment($type)) {
            throw new \Exception('Invalid payment type');
        }
        
        require_once(__DIR__ . DIRECTORY_SEPARATOR . ucfirst($type) . '.php');
        $class_name = ucfirst($type);
        $class_name = '\\App\\Payment\\' . $class_name;
        
        return new $class_name($config);
    }
    
    private static function isValidPayment(string $type): bool
    {
        if (!preg_match('#^[a-z_-]+$#', $type)) {
            return false;
        }
        
        if (!file_exists(__DIR__ . DIRECTORY_SEPARATOR . ucfirst($type) . '.php')) {
            return false;
        }
        
        return true;
    }
}
