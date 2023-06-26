<?php

namespace App\Captcha;

class Google extends Captcha
{
    public function getHeaderContent() : string
    {
        return '<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
    }
    
    public function getCaptchaElement() : string
    {
        return '<div class="g-recaptcha" data-sitekey="' . $this->options['key'] . '"></div>';
    }
    
    public function validateCaptcha(\CodeIgniter\HTTP\RequestInterface $request) : bool
    {
        $data = $request->getPost('g-recaptcha-response');
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'secret' => $this->options['secret'],
                'response' => $data
            ]
        ));

        $response = curl_exec($curl);
        $data = json_decode($response);
        if (!$data) {
            return false;
        }
        
        return $data->success;
    }
}
