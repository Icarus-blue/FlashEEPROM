<?php

namespace App\Scripts;

class Toyota_scion_tc_93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('0', 1) . $this->getByteForPosition('0',0);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*17),
            'image' => 'assets/Toyota.png',
            'texts' => [
                'scion tc ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value/17));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result2 = ((65535));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

    
            ['row' => '30', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '40', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            

            
        ];
    }
}
