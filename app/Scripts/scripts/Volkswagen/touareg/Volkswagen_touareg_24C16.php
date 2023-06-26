<?php

namespace App\Scripts;

class  Volkswagen_touareg_24C16  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('260', 1) . $this->getByteForPosition('260', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ($number* 16),
            'image' => 'assets/Volkswagen.png',
            'texts' => [
                'touareg  ',
                'Eeprom 24C16',
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
            ['row' => '260', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '260', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '260', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '250', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '250', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '280', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '280', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '280', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '270', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '270', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '2A0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '2A0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '2A0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '290', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '290', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '290', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '290', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '290', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '290', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '290', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '290', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '290', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '290', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '290', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '290', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '290', 'cell' => 15, 'value' => substr($hex2, 0, 2)]

        


        ];
    }
}
