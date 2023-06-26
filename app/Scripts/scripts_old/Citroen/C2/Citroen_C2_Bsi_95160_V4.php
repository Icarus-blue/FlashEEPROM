<?php

namespace App\Scripts;

class Citroen_C2_Bsi_95160_V4 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('100', 4) . $this->getByteForPosition('100', 3) . $this->getByteForPosition('100', 2) . $this->getByteForPosition('100', 1);
        $number = hexdec($hex);
        
        return [
            'result' => round((4294967295-$number) /2560),
            'image' => 'assets/Citroen.bmp',
            'texts' => [
                'Citroen C2',
                'Eeprom 95160',
                'FlashEeprom'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(4294967295-($value*2560));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
        return [
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 3, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 4, 'value' => substr($hex, 0, 2)],

            ['row' => '100', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 8, 'value' => substr($hex, 3, 2)],
            ['row' => '100', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex, 0, 2)],

            ['row' => '100', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 14, 'value' => substr($hex, 3, 2)],
            ['row' => '100', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 0, 'value' => substr($hex, 0, 2)],

            ['row' => '110', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 4, 'value' => substr($hex, 3, 2)],
            ['row' => '110', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 6, 'value' => substr($hex, 0, 2)]
        ];
    }
}
