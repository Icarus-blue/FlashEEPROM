<?php

namespace App\Scripts;

class Haval_H2_95640 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('620', 0) . $this->getByteForPosition('620',1);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*32),
            'image' => 'assets/GreetWall.png',
            'texts' => [
                'Hilux 2004-06  ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result2 = ((65535));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '620', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '620', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '620', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '620', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '620', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '620', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '620', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '620', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '630', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 10, 'value' => substr($hex,0, 2)],
            ['row' => '630', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            
        ];
    }
}
