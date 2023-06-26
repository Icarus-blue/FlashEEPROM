<?php

namespace App\Scripts;

class Peugeot_3008_5008_DASH_95080 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('320',5). $this->getByteForPosition('320', 4) . $this->getByteForPosition('320',3);
        $number = hexdec($hex);
         
        return [
            'result' => round((16777215-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '3008 5008 dash ',
                'Eeprom 95080',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        $result2 = round(16777215-($value*10));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '300', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '300', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '300', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '300', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '300', 'cell' => 4, 'value' => substr($hex2,2, 2)],
            ['row' => '300', 'cell' => 5, 'value' => substr($hex2, 0, 2)],

            ['row' => '320', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '320', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '320', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '320', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '320', 'cell' => 4, 'value' => substr($hex2,2, 2)],
            ['row' => '320', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
           

            
         
        ];
    }
}
