<?php

namespace App\Controllers;

class Emailtest extends BaseController
{
    public function index()
    {
$email = \Config\Services::email();

$email->setFrom('no-reply@flasheeprom.com', 'No-Reply');
$email->setTo('ijhujtohcghlgtnxaz@kvhrw.com');

$email->setSubject('Correo de prueba desde Flasheeprom');
$email->setMessage('Mensaje de correo para probar la configuración del servidor de correo de Flasheeprom.');

$result = $email->send();
var_dump($result);
    }
}