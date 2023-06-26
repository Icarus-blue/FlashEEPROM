<?php

namespace App\Scripts;

class Chevrolet_Caprice_95160 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 0) . $this->getByteForPosition('10', 1);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*12),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Caprice 2007_2008',
                'Eeprom  95160 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/12));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [
            
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],

              
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)]


        ];
    }
}
