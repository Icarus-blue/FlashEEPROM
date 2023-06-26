<?php

namespace App\Scripts;

class Peugeot_208_DASH_95320 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('3B0',5). $this->getByteForPosition('3B0', 4) . $this->getByteForPosition('3B0',3);
        $number = hexdec($hex);
         
        return [
            'result' => round((16777215-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '208 dash ',
                'Eeprom 95320',
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
            ['row' => '3A0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '3A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '3A0', 'cell' => 4, 'value' => substr($hex2,2, 2)],
            ['row' => '3A0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],

            ['row' => '3B0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '3B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 3, 'value' => substr($hex2, 4, 2)],
            ['row' => '3B0', 'cell' => 4, 'value' => substr($hex2,2, 2)],
            ['row' => '3B0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
           

            
         
        ];
    }
}
