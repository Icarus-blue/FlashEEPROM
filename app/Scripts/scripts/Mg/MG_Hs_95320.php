<?php

namespace App\Scripts;

class MG_Hs_95320 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('BB0', 8) . $this->getByteForPosition('BB0', 9) . $this->getByteForPosition('BB0', 10);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number*256)),
            'image' => 'assets/Mg.png',
            'texts' => [
                'MG HS v2   ',
                'Eeprom 95320',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/256));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'BB0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'BB0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'BB0', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => 'BB0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'BB0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'BB0', 'cell' => 14, 'value' => substr($hex, 4, 2)],

            ['row' => 'BC0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'BC0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'BC0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'BC0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'BC0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'BC0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => 'BC0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'BC0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'BC0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => 'BC0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'BC0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'BC0', 'cell' => 14, 'value' => substr($hex, 4, 2)],

            ['row' => 'BD0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'BD0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'BD0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'BD0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'BD0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'BD0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => 'BD0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'BD0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'BD0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => 'BD0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'BD0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'BD0', 'cell' => 14, 'value' => substr($hex, 4, 2)],

         
        ];
    }
}
