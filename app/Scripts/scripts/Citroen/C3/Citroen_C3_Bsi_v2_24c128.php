<?php

namespace App\Scripts;

class Citroen_C3_Bsi_v2_24c128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('3F0', 8) . $this->getByteForPosition('3F0', 9) . $this->getByteForPosition('3F0', 10) . $this->getByteForPosition('3F0', 11);
        $number = hexdec($hex);
        
        return [
            'result' => round((4294967295-$number) /10),
            'image' => 'assets/Citroen.bmp',
            'texts' => [
                'Citroen C3 V2',
                'Eeprom 24C128',
                'FlashEeprom'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(4294967295-($value*10));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
        return [

            ['row' => '3F0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '3F0', 'cell' => 11, 'value' => substr($hex, 3, 2)],
            ['row' => '3F0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '3F0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        
            ['row' => '400', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 1, 'value' => substr($hex, 3, 2)],
            ['row' => '3F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '3F0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '400', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 7, 'value' => substr($hex, 3, 2)],
            ['row' => '400', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 4, 'value' => substr($hex, 0, 2)],

            ['row' => '400', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 13, 'value' => substr($hex, 3, 2)],
            ['row' => '400', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 10, 'value' => substr($hex, 0, 2)],

            ['row' => '410', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '410', 'cell' => 3, 'value' => substr($hex, 3, 2)],
            ['row' => '410', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '410', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            
            ['row' => '410', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '410', 'cell' => 9, 'value' => substr($hex, 3, 2)],
            ['row' => '410', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '410', 'cell' => 6, 'value' => substr($hex, 0, 2)],

            ['row' => '410', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '410', 'cell' => 15, 'value' => substr($hex, 3, 2)],
            ['row' => '410', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '410', 'cell' => 12, 'value' => substr($hex, 0, 2)],

            ['row' => '420', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '420', 'cell' => 5, 'value' => substr($hex, 3, 2)],
            ['row' => '420', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '420', 'cell' => 2, 'value' => substr($hex, 0, 2)]





        ];
    }
}
