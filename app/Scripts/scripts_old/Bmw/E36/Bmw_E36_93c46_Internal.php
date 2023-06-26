<?php

namespace App\Scripts;

class Bmw_E36_93c46_Internal extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('50', 11) . $this->getByteForPosition('50', 10);
        $number = hexdec($hex);
        return [
            'result' => (65535-$number) * 32,
            'image' => 'assets/bmw.png',
            'texts' => [
                'Bmw_E36_Internal',
                'Eeprom 93c46',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(65535-($value /32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return [
            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 0, 2)],

          
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '50', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 13, 'value' => substr($hex, 0, 2)],

            ['row' => '50', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 15, 'value' => substr($hex, 0, 2)]


            

        ];
    }
}
