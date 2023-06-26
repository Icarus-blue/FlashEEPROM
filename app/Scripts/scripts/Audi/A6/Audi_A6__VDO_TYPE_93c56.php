<?php

namespace App\Scripts;

class Audi_A6__VDO_TYPE_93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('E0', 1) . $this->getByteForPosition('E0', 0);
        $numberz = hexdec($hex);

        $hexx = $this->getByteForPosition('E0', 3) . $this->getByteForPosition('E0', 2);
        $numberx = hexdec($hexx);
       
        $number= ($numberz + (65535-$numberx ))/2 ;
         
        return [
            'result' => ($number) * 32,
            'image' => 'assets/audi.png',
            'texts' => [
                'Audi_A6_UKNSI_NEW',
                'Eeprom 93C56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round($value /32);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result1 = round(65535-($value / 32));
        $hex2 = str_pad(dechex($result1), 4, '0', STR_PAD_LEFT);
        return [
           
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => 'E0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],


            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex2, 0, 2)]


        ];
    }
}
