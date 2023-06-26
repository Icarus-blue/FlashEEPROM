<?php

namespace App\Scripts;

class Nissan_sunny_jc_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10',7). $this->getByteForPosition('10', 6) . $this->getByteForPosition('10',5). $this->getByteForPosition('10',4);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Nissan.png',
            'texts' => [
                'sunny',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result2 = round(65535-($value));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '10', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '20', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 0, 2)],

            
        ];
    }
}
