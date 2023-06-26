<?php

namespace App\Scripts;

class Chevrolet_Cobalt_2005_95080 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('3C0', 5) . $this->getByteForPosition('3C0', 3);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)*4),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Cobalt 2005',
                'Eeprom 95080 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/4));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [
            
            ['row' => '3C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '3C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '3D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 2, 'value' => substr($hex, 2, 2)]


        ];
    }
}
