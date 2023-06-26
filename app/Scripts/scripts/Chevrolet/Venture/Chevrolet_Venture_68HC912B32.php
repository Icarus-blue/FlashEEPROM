<?php

namespace App\Scripts;

class Chevrolet_Venture_68HC912B32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 0) . $this->getByteForPosition('00', 1);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)*208),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Venture',
                'Eeprom 68hc912b32',
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
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 2, 2)],

            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 13, 'value' => substr($hex, 2, 2)]
        
        ];
    }
}
