<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Captcha extends BaseConfig
{
    public $type = 'nocaptcha';
    
    public $options = [
        'key' => '',
        'secret' => ''
    ];
}
