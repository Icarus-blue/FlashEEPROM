<?php

namespace App\Scripts;

class peugeot_dash_208_95320 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 3) . $this->getByteForPosition('00', 2). $this->getByteForPosition('00', 1). $this->getByteForPosition('00', 0);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)/ 10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '   Dash 208 ',
                'Eeprom 95320',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
           
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 0, 2)],
           
        ];
    }
}
