<?php

namespace App\Scripts;

class Saturn_Vue_93c86 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 3) . $this->getByteForPosition('00', 4);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)*4),
            'image' => 'assets/Gmc.png',
            'texts' => [
                'Saturn Vue',
                'Eeprom 93c86',
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
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 0, 2)],


            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 0, 2)],


            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 0, 2)],


            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => 'A0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 0, 2)],


            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '100', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '110', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '120', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '130', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '140', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 3, 'value' => substr($hex, 0, 2)],

           
        ];
    }
}
