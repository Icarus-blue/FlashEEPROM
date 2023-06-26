<?php

namespace App\Scripts;

class Zotye_Nomada_2011_93c46 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('30', 10) . $this->getByteForPosition('30', 11). $this->getByteForPosition('30', 12);
        $number = ($hex);
         
        return [
            'result' => round($number) ,
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
    {   $result = round($value);
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);
        return
         [

                
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 4, 2)],

           
        ];
    }
}
