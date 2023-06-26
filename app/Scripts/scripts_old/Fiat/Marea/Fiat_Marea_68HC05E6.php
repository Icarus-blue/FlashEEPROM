<?php

namespace App\Scripts;

class Fiat_Marea_68HC05E6 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('20',0). $this->getByteForPosition('20', 1) . $this->getByteForPosition('20',2);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Fiat.png',
            'texts' => [
                'Marea',
                'Micro 68HC05E6',
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
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 2, 2)],
           
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex, 4, 2)],
           

            ['row' => '50', 'cell' => 0, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex2, 2, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex2, 4, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hex2, 2, 2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($hex2, 4, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '50', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '50', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
              
            ['row' => '60', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex2, 4, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex2, 4, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex2, 4, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex2, 4, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '60', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($hex2, 2, 2)],

            ['row' => '70', 'cell' => 0, 'value' => substr($hex2, 4, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex2, 4, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex2, 4, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

          





            
        ];
    }
}
