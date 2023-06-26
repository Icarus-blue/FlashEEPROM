<?php

namespace App\Captcha;

abstract class Captcha
{
    protected $options;
    
    public function __construct(array $options)
    {
        $this->options = $options;
    }
    
    public static function create(string $type, array $options) : Captcha
    {
        switch ($type) {
            case 'nocaptcha':
                return new Nocaptcha($options);
            case 'google':
                return new Google($options);
        }
    }
    
    public abstract function getHeaderContent() : string;
    public abstract function getCaptchaElement() : string;
    public abstract function validateCaptcha(\CodeIgniter\HTTP\RequestInterface $request) : bool;
}
