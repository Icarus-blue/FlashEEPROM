<?php

namespace App\Scripts;

class Zotye_Hunter_2016_24c02 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('D0', 1) . $this->getByteForPosition('D0', 2). $this->getByteForPosition('D0', 3);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10) ,
            'image' => 'assets/zotye.png',
            'texts' => [
                'Chery_Amulet',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round($value*10);
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        return
         [

                
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

           
        ];
    }
}
