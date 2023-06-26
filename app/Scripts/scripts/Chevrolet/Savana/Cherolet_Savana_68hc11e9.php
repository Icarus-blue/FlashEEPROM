<?php

namespace App\Scripts;

class Cherolet_Savana_68hc11e9 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 5) . $this->getByteForPosition('00', 6);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)*208),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Savana',
                'Eeprom 68hc11e9',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/208));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],

            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 2, 2)]
        
        ];
    }
}
