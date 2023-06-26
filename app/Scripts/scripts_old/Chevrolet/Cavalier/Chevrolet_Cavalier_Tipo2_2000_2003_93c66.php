<?php

namespace App\Scripts;

class Chevrolet_Cavalier_Tipo2_2000_2003_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('190', 15) . $this->getByteForPosition('190', 14);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*26),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Cavalier tipo 2 2000_2003',
                'Eeprom 93c66  ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/26));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [
            
            ['row' => '190', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 6, 'value' => substr($hex, 2, 2)]


        ];
    }
}
