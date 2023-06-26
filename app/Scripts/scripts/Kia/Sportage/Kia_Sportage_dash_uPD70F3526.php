<?php

namespace App\Scripts;

class Kia_Sportage_dash_uPD70F3526 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',8) . $this->getByteForPosition('00', 7) . $this->getByteForPosition('00', 6) ;
        $number = hexdec($hex);
         
        return [
            'result' => round(($number/100)),
            'image' => 'assets/Kia.png',
            'texts' => [
                'Sportage  DASH ',
                'Micro uPD70F3526',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*100));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        $result = round((4294967295-$value));
        $hex2 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result = round($value*100);
        $hex3 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' =>9 , 'value' => substr($hex, 0, 2)],

            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' =>13 , 'value' => substr($hex, 0, 2)],

            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' =>1 , 'value' => substr($hex, 0, 2)],

            
         
        ];
    }
}
