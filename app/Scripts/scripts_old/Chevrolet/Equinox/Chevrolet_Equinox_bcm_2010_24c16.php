<?php

namespace App\Scripts;

class Chevrolet_Equinox_bcm_2010_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F0', 9) . $this->getByteForPosition('F0', 8);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)*4),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Equinox bcm 2010',
                'Micro 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
     public function calculate(int $value)

    {   
        $result = round(($value/4));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result = round(($value/4));
        $hex2 = str_pad(dechex(15), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex2, 2, 2)],

            ['row' => '160', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 6, 'value' => substr($hex2, 0, 2)],

            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex2, 0, 2)],

           
        ];
    }
}
