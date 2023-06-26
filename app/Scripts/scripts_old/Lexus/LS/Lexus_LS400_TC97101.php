<?php

namespace App\Scripts;

class Lexus_LS400_TC97101 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',0) . $this->getByteForPosition('00', 1);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)),
            'image' => 'assets/Lexus.png',
            'texts' => [
                'LS 400',
                'Micro TC97101 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
             
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 2, 2)],
        ];
    }
}
