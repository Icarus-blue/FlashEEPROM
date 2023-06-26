<?php

namespace App\Scripts;

class Ford_Ecosport_24U17 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('160', 4) . $this->getByteForPosition('160', 3);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number *15.77)),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford EcoSport ',
                'micro 24U17',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value/15.77));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [

            ['row' => '150', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            ['row' => '160', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '160', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            ['row' => '160', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 6, 'value' => substr($hex, 2, 2)],

            ['row' => '160', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 9, 'value' => substr($hex, 2, 2)],

            ['row' => '160', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 12, 'value' => substr($hex, 2, 2)]

            
        ];
    }
}
