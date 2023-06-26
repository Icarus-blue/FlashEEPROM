<?php

namespace App\Scripts;

class Peugeot_dash_607_93C66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00'  , 15) . $this->getByteForPosition('00'  , 14);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 16),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                'dash 607 ',
                'Eeprom 93c66',
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
            ['row' => '00'  , 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '00'  , 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '00'  , 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '00'  , 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '00'  , 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '00'  , 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '00'  , 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '00'  , 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '00'  , 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '00'  , 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '00'  , 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '00'  , 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '00'  , 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '00'  , 'cell' => 13, 'value' => substr($hex2, 0, 2)],

            ['row' => '00'  , 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '00'  , 'cell' => 15, 'value' => substr($hex, 0, 2)],


        ];
    }
}
