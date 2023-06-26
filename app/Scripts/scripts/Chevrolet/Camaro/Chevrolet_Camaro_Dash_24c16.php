<?php

namespace App\Scripts;

class Chevrolet_Camaro_Dash_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('50', 8) . $this->getByteForPosition('50', 9);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*4),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Camaro Dash',
                'Eeprom 24c16 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/4));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 2, 2)]
        ];
    }
}
