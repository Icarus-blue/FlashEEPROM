<?php

namespace App\Scripts;

class volkswagen_golf_3_93c56  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 1) . $this->getByteForPosition('10', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ($number* 16),
            'image' => 'assets/volkswagen.png',
            'texts' => [
                'golf3 ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/16));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $result2 = round(($value/16));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex2, 0, 2)]


        

        


        ];
    }
}