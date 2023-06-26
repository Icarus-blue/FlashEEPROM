<?php

namespace App\Scripts;

class Renault_Laguna_2000_68HC12DG128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('50',10). $this->getByteForPosition('50', 11) . $this->getByteForPosition('50',12);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Renault.png',
            'texts' => [
                'Laguna 2000',
                'Micro 68HC12DG128',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex, 4, 2)],

            ['row' => '50', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 15, 'value' => substr($hex, 2, 2)],


            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 4, 2)],


            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 4, 2)],


            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 4, 2)],


            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '110', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '120', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '120', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '120', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '120', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '130', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '130', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '130', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '130', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '130', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '140', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '140', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '140', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '140', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '140', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '150', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '150', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '150', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '150', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 12, 'value' => substr($hex, 4, 2)],




            

            
        ];
    }
}
