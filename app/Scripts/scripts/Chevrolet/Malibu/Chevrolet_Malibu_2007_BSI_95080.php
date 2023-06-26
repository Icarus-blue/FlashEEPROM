<?php

namespace App\Scripts;

class Chevrolet_Malibu_2007_BSI_95080 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1D0', 2) . $this->getByteForPosition('1F0', 3);
        $number = hexdec($hex);
         
        return [
            'result' => (($number*4)),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet_Malibu BSI 2007',
                'Eeprom 95080',
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
            ['row' => '3C0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '3C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '3D0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '3D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '3D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 7, 'value' => substr($hex, 0, 2)]
            
           
        ];
    }
}
