<?php

namespace App\Scripts;

class Jinbei_F50_24c04 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('30', 3) . $this->getByteForPosition('30', 2);
        $number = hexdec($hex);
         
        return [
            'result' => (($number*25.6)),
            'image' => 'assets/Jinbei.png',
            'texts' => [
                'Jinbei Konect   ',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round($value/25.6);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 0, 2)],
           
            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
           
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 0, 2)],
           
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 0, 2)],
           
            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            ['row' => '50', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hex, 0, 2)],
           
        ];
    }
}
