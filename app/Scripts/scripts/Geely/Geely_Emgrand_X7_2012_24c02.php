<?php

namespace App\Scripts;

class Geely_Emgrand_X7_2012_24c02 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 02) . $this->getByteForPosition('00', 1). $this->getByteForPosition('00', 0);
        $number = hexdec($hex);
        $number = $number;
        return [
            'result' => round($number /10),
            'image' => 'assets/geely.png',
            'texts' => [
                'Acura',
                'Eeprom 93c56',
                'FlashEeprom'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round($value *10);
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        
        return [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            
            
        ];
    }
}
