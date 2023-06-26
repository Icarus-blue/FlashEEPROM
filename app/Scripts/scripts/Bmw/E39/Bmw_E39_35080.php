<?php

namespace App\Scripts;

class Bmw_E39_35080  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('30', 7) . $this->getByteForPosition('30', 6);
        $number = hexdec($hex);
        return [
            'result' => (65535-$number) * 16,
            'image' => 'assets/bmw.png',
            'texts' => [
                'Bmw_E39',
                'Micro 35080',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(65535-($value /16));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return [
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 0, 2)],

            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 0, 2)],

            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 0, 2)],

            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 0, 2)],
          
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 0, 2)],

            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 0, 2)]

           

            

        ];
    }
}
