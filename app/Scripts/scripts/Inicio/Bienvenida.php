<?php

namespace App\Scripts;

class Bienvenida extends Script
{
    public function getResult()
    {
        return [
            'result' => 0,
            'image' => 'assets/offer.png',
            'texts' => [],
            'fileprefix' => 'flasheeprom',
            'ads' => true
        ];
    }
    
    public function calculate(int $value)
    {
        return [];
    }
}
