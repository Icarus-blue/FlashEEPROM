<?php

namespace App\Scripts;

class volkswagen_jetta_V1_93c86  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('100', 1) . $this->getByteForPosition('100', 0);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 16),
            'image' => 'assets/Volkswagen.png',
            'texts' => [
                'jetta V1 ',
                'Eeprom 93c86',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/16));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            
            ['row' => '100', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex, 2, 2)]

            
            
            


           
        ];
    }
}
