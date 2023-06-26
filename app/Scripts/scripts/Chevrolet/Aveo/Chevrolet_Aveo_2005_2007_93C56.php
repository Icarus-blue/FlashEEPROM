<?php

namespace App\Scripts;

class Chevrolet_Aveo_2005_2007_93C56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 8) . $this->getByteForPosition('00', 10). $this->getByteForPosition('00', 11);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Aveo 2005-2007',
                'Eeprom 93c56 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        return
         [
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 4, 5)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 4, 5)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 2, 2)],

            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 4, 5)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 4, 5)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex, 2, 2)],



            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 4, 5)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 4, 5)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 2, 2)],

            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 4, 5)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            ['row' => '50', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 14, 'value' => substr($hex, 4, 5)],
            ['row' => '50', 'cell' => 15, 'value' => substr($hex, 2, 2)],



            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 4, 5)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 4, 5)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex, 2, 2)],

            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 4, 5)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 4, 5)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 2, 2)],



            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 4, 5)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex, 4, 5)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 2, 2)],

            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 4, 5)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            ['row' => 'B0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex, 4, 5)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 4, 5)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 4, 5)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 2, 2)],

            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 4, 5)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 4, 5)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 2, 2)]





          



    
        ];
    }
}
