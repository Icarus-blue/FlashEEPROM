<?php

namespace App\Scripts;

class Jeep_Cherokee_2001_04_68HC908AS60A extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('9C0', 0) . $this->getByteForPosition('9C0', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round($number * 13.45),
            'image' => 'assets/jeep.png',
            'texts' => [
                'Jeep Cherokee 2001-04',
                'Micro 68HC908AS60A',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value/13.19));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '9C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '9C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '9D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '9D0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '9E0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '9E0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '9F0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '9F0', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => '9C0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '9C0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '9D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '9D0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '9E0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '9E0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '9F0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '9F0', 'cell' => 5, 'value' => substr($hex, 2, 2)],

            ['row' => '9C0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '9C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '9D0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '9D0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '9E0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '9E0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '9F0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '9F0', 'cell' => 9, 'value' => substr($hex, 2, 2)],

            ['row' => '9C0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '9C0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '9D0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '9D0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '9E0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '9E0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '9F0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '9F0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
          

           
        ];
    }
}
