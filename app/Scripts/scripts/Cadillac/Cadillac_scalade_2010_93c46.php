<?php

namespace App\Scripts;

class Cadillac_Scalade_2010_93c46 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('20', 9) . $this->getByteForPosition('20', 8). $this->getByteForPosition('20', 7). $this->getByteForPosition('20', 6);
        $number = hexdec($hex);
         
        return [
            'result' => (4294967295-$number),
            'image' => 'assets/cadillac.png',
            'texts' => [
                'Cadillac_Scalade',
                'Eeprom 93C46',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = ((4294967295-$value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        return
         [

            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 3, 3)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex, 4, 4)],

            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 0, 2)],

            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 3, 3)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 4, 4)],

            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex, 0, 2)],

            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 3, 3)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex, 4, 4)],

            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 0, 2)]


           

            
            
        ];
    }
}
