<?php

namespace App\Scripts;

class Fiat_Marea_68HC711KG4 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('A0',5). $this->getByteForPosition('A0', 6) . $this->getByteForPosition('A0',7). $this->getByteForPosition('A0',8);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Fiat.png',
            'texts' => [
                'Marea',
                'Micro 68HC711KG4',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result2 = round(4294967295-($value));
        $hex2 = str_pad(dechex($result2), 8, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 12, 'value' => substr($hex, 6, 2)],
            ['row' => 'A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 6, 2)],

            ['row' => 'B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => 'B0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'B0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 12, 'value' => substr($hex, 6, 2)],
            ['row' => 'B0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 6, 2)],
            ['row' => 'E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 6, 2)],

            ['row' => 'F0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex2, 4, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex2, 6, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex2, 4, 2)],


            ['row' => '100', 'cell' => 0, 'value' => substr($hex2, 6, 2)],
            ['row' => '100', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '100', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '100', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 7, 'value' => substr($hex2, 4, 2)],
            ['row' => '100', 'cell' => 8, 'value' => substr($hex2, 6, 2)],
            ['row' => '100', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            ['row' => '100', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '100', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '110', 'cell' => 0, 'value' => substr($hex2, 6, 2)],
            ['row' => '110', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '110', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '110', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex2, 4, 2)],
            ['row' => '110', 'cell' => 8, 'value' => substr($hex2, 6, 2)],
            ['row' => '110', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            ['row' => '110', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '110', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '120', 'cell' => 0, 'value' => substr($hex2, 6, 2)],
            ['row' => '120', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '120', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '120', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex2, 4, 2)],
            ['row' => '120', 'cell' => 8, 'value' => substr($hex2, 6, 2)],
            ['row' => '120', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            ['row' => '120', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '120', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '130', 'cell' => 0, 'value' => substr($hex2, 6, 2)],
            ['row' => '130', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '130', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '130', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 7, 'value' => substr($hex2, 4, 2)],
            ['row' => '130', 'cell' => 8, 'value' => substr($hex2, 6, 2)],
            ['row' => '130', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            ['row' => '130', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '130', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '140', 'cell' => 0, 'value' => substr($hex2, 6, 2)],
            ['row' => '140', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '140', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '140', 'cell' => 4, 'value' => substr($hex2, 6, 2)]


            
        ];
    }
}
