<?php

namespace App\Scripts;

class   Daihatsu__Sirion_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1A0', 3) . $this->getByteForPosition('1A0', 2). $this->getByteForPosition('1A0', 1).$this->getByteForPosition('1A0', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/4102),
            'image' => 'assets/daihatsu.png',
            'texts' => [
                'Sirion',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(4294967295-($value*4102));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '1A0', 'cell' => 0, 'value' => substr($hex, 3, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '1A0', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '1A0', 'cell' => 4, 'value' => substr($hex, 3, 2)],
            ['row' => '1A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],

            ['row' => '1A0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '1A0', 'cell' => 8, 'value' => substr($hex, 3, 2)],
            ['row' => '1A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '1A0', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '1A0', 'cell' => 12, 'value' => substr($hex, 3, 2)],
            ['row' => '1A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '1B0', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '1B0', 'cell' => 0, 'value' => substr($hex, 3, 2)],
            ['row' => '1B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '1B0', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '1B0', 'cell' => 4, 'value' => substr($hex, 3, 2)],
            ['row' => '1B0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 7, 'value' => substr($hex, 0, 2)],

            ['row' => '1B0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '1B0', 'cell' => 8, 'value' => substr($hex, 3, 2)],
            ['row' => '1B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '1B0', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '1B0', 'cell' => 12, 'value' => substr($hex, 3, 2)],
            ['row' => '1B0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 15, 'value' => substr($hex, 0, 2)]
        
        ];
    }
}
