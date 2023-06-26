<?php

namespace App\Scripts;

class Mitsubishi_Montero_2006_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('C0', 1) . $this->getByteForPosition('C0', 0);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)* 48),
            'image' => 'assets/Mitsubishi.png',
            'texts' => [
                'Montero 2006  ',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/48));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            


           
        ];
    }
}
