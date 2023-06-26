<?php

namespace App\Scripts;

class Peugeot_308_BSI_2018 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('370',11). $this->getByteForPosition('370',10) . $this->getByteForPosition('370',9). $this->getByteForPosition('370',8);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                'Dash 308',
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
            ['row' => '370', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '370', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '370', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '370', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '370', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '370', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '370', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '370', 'cell' =>  15, 'value' => substr($hex2, 0, 2)],
            ['row' => '380', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '380', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '380', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '380', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '380', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '380', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => '380', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '380', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '380', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '380', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '380', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '380', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '380', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '380', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '380', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '380', 'cell' =>  15, 'value' => substr($hex2, 0, 2)],
            
         
        ];
    }
}
