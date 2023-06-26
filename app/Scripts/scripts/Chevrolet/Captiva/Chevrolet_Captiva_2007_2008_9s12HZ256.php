<?php

namespace App\Scripts;

class Chevrolet_Captiva_2007_2008_9s12HZ256 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('600', 1) . $this->getByteForPosition('610', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*4),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Captiva 2007_2008',
                'Micro  9s12HZ256 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/4));
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
            ['row' => '6C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '6D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '6D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '6D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '6D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '6E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '6E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '6F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '6F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '6F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '6F0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '6F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '6F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '700', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '700', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '700', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '700', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => '710', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '710', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '720', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '720', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '720', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '720', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '720', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '720', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '730', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '730', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '730', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '730', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '740', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '740', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '750', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '750', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '750', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '750', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '750', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '750', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '760', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '760', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '760', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '760', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '770', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '770', 'cell' => 2, 'value' => substr($hex, 2, 2)]


        ];
    }
}
