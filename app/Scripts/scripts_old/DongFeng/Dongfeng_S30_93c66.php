<?php

namespace App\Scripts; 
class Dongfeng_S30_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('30',9). $this->getByteForPosition('30', 6) . $this->getByteForPosition('30',7);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Dongfeng.png',
            'texts' => [
                'T100 2019',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);


        
        return
         [
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            
            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            
            
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 01, 'value' => substr($hex, 0, 2)],

            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 0, 2)],




            
        ];
    }
}
