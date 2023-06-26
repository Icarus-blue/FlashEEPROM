<?php

namespace App\Scripts;

class MG_MG350_dash_ST95040 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1F0',3) . $this->getByteForPosition('1F0', 2) . $this->getByteForPosition('1F0', 1) . $this->getByteForPosition('1F0', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/Mg.png',
            'texts' => [
                'MG MG350  BCM  ',
                'Eeprom ST95040',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        $result = round((4294967295-$value));
        $hex2 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result = round($value*100);
        $hex3 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex3, 6, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex3, 4, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex3, 0, 2)],

            ['row' => '1F0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '1F0', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '1F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '1F0', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '1F0', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => '1F0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '1F0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '1F0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '1F0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '1F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '1F0', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '1F0', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '1F0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '1F0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
          
          
         
        ];
    }
}
