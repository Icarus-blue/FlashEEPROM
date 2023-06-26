<?php

namespace App\Scripts;

class Fiat_Brava_68HC05B16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('60',14). $this->getByteForPosition('60', 15) . $this->getByteForPosition('70',0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Fiat.png',
            'texts' => [
                'Brava',
                'Micro 68HC05B16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        $result2 = round(16777215-($value));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 0, 2)],
           
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 13, 'value' => substr($hex, 4, 2)],
           


            ['row' => '90', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex2, 4, 2)],

            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 9, 'value' => substr($hex2, 4, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 12, 'value' => substr($hex2, 4, 2)],
            ['row' => 'A0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 1, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex2, 4, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => 'B0', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 8, 'value' => substr($hex2, 4, 2)],
            ['row' => 'B0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            ['row' => 'B0', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex2, 4, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex2, 4, 2)],
            ['row' => 'C0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex2, 4, 2)],
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex2, 4, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => 'C0', 'cell' => 13, 'value' => substr($hex2, 4, 2)]





            
        ];
    }
}
