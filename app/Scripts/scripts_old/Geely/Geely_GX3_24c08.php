<?php

namespace App\Scripts;

class Geely_GX3_24c08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 00) . $this->getByteForPosition('10', 1);
        $number = hexdec($hex);
        $number = $number*16;
        return [
            'result' => round($number),
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
        $result = round($value /16);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
        return [
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0,4)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 0,4)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 0,4)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 0,4)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 0,4)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 0,4)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 0,4)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 0,4)],
            
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0,4)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 0,4)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 0,4)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 0,4)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 0,4)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 0,4)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 0,4)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 0,4)],
            
            
            
           
            
            
        ];
    }
}
