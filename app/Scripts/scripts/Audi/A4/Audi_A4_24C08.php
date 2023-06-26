<?php

namespace App\Scripts;

class Audi_A4_24C08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('60', 1) . $this->getByteForPosition('60', 0);
        $number = hexdec($hex);
         
        return [
            'result' => ($number) * 16,
            'image' => 'assets/audi.png',
            'texts' => [
                'Audi A4',
                'Eeprom 24C08',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value/16) );
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        
        return [
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 2, 2)]






        ];
    }
}
