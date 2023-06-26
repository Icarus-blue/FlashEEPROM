<?php

namespace App\Scripts;

class Geely_GS_2020_95040 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 10) . $this->getByteForPosition('00', 9). $this->getByteForPosition('00', 8);
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
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 0, 2)],
        ];
    }
}
