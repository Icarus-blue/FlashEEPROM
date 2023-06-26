<?php

namespace App\Scripts;

class Chevrolet_N300_25020 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('C0', 3) . $this->getByteForPosition('c0',2).$this->getByteForPosition('c0', 1) . $this->getByteForPosition('c0',0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/1000),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'N300 2015-2018    ',
                'Eeprom 25020',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = ((1000*$value));
        $hex = str_pad(dechex($result),8, '0', STR_PAD_LEFT);

        $result2 = (4294967295-(1000*$value));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 0, 2 )],
            
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => 'C0', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex2,6, 2)],
            ['row' => 'C0', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => 'C0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'C0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],



            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => 'D0', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => 'D0', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
           
            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
           
            ['row' => 'E0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'E0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
           
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => 'E0', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

    
            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => 'F0', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
           
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            

        ];
    }
}
