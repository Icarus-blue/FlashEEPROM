<?php

namespace App\Scripts;

class Fiat_500_95320 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10',1). $this->getByteForPosition('10', 2) . $this->getByteForPosition('10',3);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/100),
            'image' => 'assets/Fiat.png',
            'texts' => [
                '500',
                'Eeprom 95320',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value*100));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        $result2 = round(16777215-($value*100));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '00', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '10', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex2, 4, 2)],

            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '10', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '20', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex2, 4, 2)]
            
        ];
    }
}
