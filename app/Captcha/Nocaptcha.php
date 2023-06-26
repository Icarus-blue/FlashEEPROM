<?php

namespace App\Captcha;

class Nocaptcha extends Captcha
{
    public function getHeaderContent() : string
    {
        return '';
    }
    
    public function getCaptchaElement() : string
    {
        return '';
    }
    
    public function validateCaptcha(\CodeIgniter\HTTP\RequestInterface $request) : bool
    {
        return true;
    }
}
