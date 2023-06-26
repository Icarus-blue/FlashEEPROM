<?php

namespace App\Scripts;

class Renault_Clio_24c04 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('C0', 11). $this->getByteForPosition('C0', 10). $this->getByteForPosition('C0', 9);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)),
            'image' => 'assets/Renault.png',
            'texts' => [
                'Clio',
                'Eeprom 24c04  ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        return
         [
             
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex, 4, 2)],

            
        ];
    }
}
