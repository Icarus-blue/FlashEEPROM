<?php

namespace App\Scripts;

class Chrysler_Pt_Cruiser_68HC912B32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 0) . $this->getByteForPosition('00', 1);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*100),
            'image' => 'assets/chrysler.png',
            'texts' => [
                'Chrysler Pt Crusier',
                'Micro 68HC912B32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/100));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 2, 2)]
            
            


           
        ];
    }
}
