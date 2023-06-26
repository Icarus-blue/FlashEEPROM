<?php

namespace App\Scripts;

class Daewo_Wistorm_2007_2008_Hz128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('600', 1) . $this->getByteForPosition('600',2);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*4),
            'image' => 'assets/daewo.png',
            'texts' => [
                'Wistorm 2007-2008',
                'Micro 9S12HZ128',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value/4));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [

            ['row' => '600', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '600', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '600', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '600', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '600', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '600', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '610', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '610', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '610', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '610', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '620', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '620', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '630', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '630', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '640', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '650', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '650', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '660', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '660', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '660', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '660', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '660', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '660', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '670', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '670', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => '680', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '690', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '6A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '6B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '6C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '6C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '6C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '6C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '6C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '6C0', 'cell' => 10, 'value' => substr($hex, 2, 2)]

        ];
    }
}
