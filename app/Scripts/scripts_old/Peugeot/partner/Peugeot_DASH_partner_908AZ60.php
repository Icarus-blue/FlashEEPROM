<?php

namespace App\Scripts;

class Peugeot_DASH_partner_908AZ60 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('200',4). $this->getByteForPosition('200', 5) . $this->getByteForPosition('200',7). $this->getByteForPosition('200',8);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                'dash partner',
                'Eeprom 25020',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result2 = round(4294967295-($value*10));
        $hex2 = str_pad(dechex($result2), 8, '0', STR_PAD_LEFT);

        
        return
         [
            
            ['row' => '200', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '200', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '200', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '200', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '200', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '200', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '200', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '200', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '200', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '200', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '200', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '200', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '210', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '210', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '210', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '210', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '210', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '210', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '210', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '210', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '210', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '210', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '210', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '210', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '210', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '210', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '210', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '210', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '220', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '220', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '220', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '220', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '220', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '220', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '220', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '220', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '220', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '220', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '220', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '220', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '220', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '220', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '220', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '220', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '230', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '230', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '230', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '230', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '230', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '230', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '230', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '230', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '230', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '230', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '230', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '230', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '230', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '230', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '230', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '230', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '240', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '240', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '240', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '240', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '240', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '240', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '240', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '240', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '240', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '240', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '240', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '240', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '240', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '240', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '240', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '240', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '250', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '250', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '250', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '250', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '250', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '250', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '250', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '250', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '260', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '260', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '260', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '260', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '260', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '260', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '260', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '260', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '260', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '260', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '260', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '260', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '260', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '260', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '270', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '270', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '270', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '270', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '270', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '270', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '270', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '270', 'cell' => 15, 'value' => substr($hex2, 6, 2)]
        ];
    }
}
