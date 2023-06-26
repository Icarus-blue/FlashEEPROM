<?php

namespace App\Scripts;

class Chevrolet_Malibu_2004_2005_95040 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1D0', 2) . $this->getByteForPosition('1F0', 3);
        $number = hexdec($hex);
         
        return [
            'result' => (($number*4)),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet_Malibu 2004_2005',
                'Eeprom 95040',
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
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '1D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 7, 'value' => substr($hex, 0, 2)],


            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => '1D0', 'cell' => 13, 'value' => substr($hex, 0, 2)]
            
           
        ];
    }
}
