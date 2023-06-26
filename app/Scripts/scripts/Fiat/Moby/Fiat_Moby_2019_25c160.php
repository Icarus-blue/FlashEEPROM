<?php

namespace App\Scripts;

class Fiat_Moby_2019_25c160 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 5) . $this->getByteForPosition('00',6).$this->getByteForPosition('00', 7) ;
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Fiat.png',
            'texts' => [
                'Moby 2019',
                'Eeprom 25C160',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = ($value);
        $hex = str_pad(dechex($result),6, '0', STR_PAD_LEFT);

        $result2 = (16777215-($value));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex2, 0, 2 )],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex2, 4, 2)],

            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex2, 0, 2 )],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
           

            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex2, 0, 2 )],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
           

            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex2, 0, 2 )],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
           
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex2, 0, 2 )],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
           
           

        ];
    }
}
