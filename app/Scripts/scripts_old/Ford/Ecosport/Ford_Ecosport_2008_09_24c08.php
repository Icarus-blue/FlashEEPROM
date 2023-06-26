<?php

namespace App\Scripts;

class Ford_Ecosport_2008_09_24c08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('3B0', 0) . $this->getByteForPosition('3B0', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number *7.99)),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford EcoSport ',
                'micro 04c08',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value/7.99));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [

            ['row' => '3B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 13, 'value' => substr($hex, 2, 2)],

            ['row' => '3C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            

            
        ];
    }
}
