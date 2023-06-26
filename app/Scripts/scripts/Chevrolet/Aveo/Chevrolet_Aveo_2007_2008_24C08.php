<?php

namespace App\Scripts;

class Chevrolet_Aveo_2007_2008_24C08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('390', 8) . $this->getByteForPosition('390', 9);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*8),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Aveo 2007-2008',
                'Eeprom 24C08 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/8));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [
            ['row' => '390', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 9, 'value' => substr($hex, 2, 2)],

            ['row' => '390', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 13, 'value' => substr($hex, 2, 2)],

            ['row' => '3A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => '3A0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 5, 'value' => substr($hex, 2, 2)]

           
        ];
    }
}
