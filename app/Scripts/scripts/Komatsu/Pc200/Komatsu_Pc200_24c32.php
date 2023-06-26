<?php

namespace App\Scripts;

class Komatsu_Pc200_24c32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('200', 0) . $this->getByteForPosition('200', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)* 18),
            'image' => 'assets/komatsu.png',
            'texts' => [
                '4runner Yazaki   ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/18));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '200', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'A00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'A00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            
        ];
    }
}
