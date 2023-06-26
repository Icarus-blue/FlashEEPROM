<?php

namespace App\Scripts;

class Chery_Tiggo7_24c04 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('90', 1) . $this->getByteForPosition('90',2). $this->getByteForPosition('90',3);
        $number = hexdec($hex);
         
        return [
            'result' => ($number/10),
            'image' => 'assets/Chery.png',
            'texts' => [
                '4runner yazaki v2 ',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $result2 = (16777215-($value*10));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);
            
      
        return
         [
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            
            ['row' => '90', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            
            ['row' => '110', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            
            ['row' => '110', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            
            ['row' => '190', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            
            ['row' => '190', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '190', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '190', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            

        ];
    }
}
