<?php

namespace App\Scripts;

class Geely_515_2017_9s12HY64 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('250', 5) . $this->getByteForPosition('250', 6). $this->getByteForPosition('250', 7);
        $number = hexdec($hex);
        $number = $number;
        return [
            'result' => round($number ),
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
        $result = round($value );
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        
        return [
            ['row' => '250', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '250', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '260', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '260', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '260', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '260', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '270', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '270', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '280', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '280', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 15, 'value' => substr($hex, 4, 2)],
        
            ['row' => '290', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '290', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '290', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '290', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '2A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '2A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '2A0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '2A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '2A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '2A0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '2B0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '2B0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '2B0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '2B0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '2B0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '2B0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
        
            ['row' => '2C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '2C0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '2C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '2C0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '2D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '2D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '2D0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '2D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '2D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '2D0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            
         
            
        ];
    }
}
