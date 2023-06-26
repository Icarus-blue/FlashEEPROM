<?php

namespace App\Scripts;

class Chevrolet_Sail_2013_24C08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('390', 8) . $this->getByteForPosition('390', 9);
        $number = hexdec($hex);
         
        return [
            'result' => ($number*8),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Sail 2009-2013',
                'Eeprom 24C08 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/8));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [



            ['row' => '350', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '350', 'cell' => 1, 'value' => substr($hex, 2, 2)], 

            ['row' => '360', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '360', 'cell' => 1, 'value' => substr($hex, 2, 2)], 

            ['row' => '370', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '370', 'cell' => 1, 'value' => substr($hex, 2, 2)], 

            ['row' => '380', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '380', 'cell' => 1, 'value' => substr($hex, 2, 2)], 

            ['row' => '390', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 1, 'value' => substr($hex, 2, 2)], 

            ['row' => '3A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 1, 'value' => substr($hex, 2, 2)], 

            ['row' => '3B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            
            ['row' => '3C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],   



            ['row' => '340', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '340', 'cell' => 5, 'value' => substr($hex, 2, 2)],

            ['row' => '350', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '350', 'cell' => 5, 'value' => substr($hex, 2, 2)], 

            ['row' => '360', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '360', 'cell' => 5, 'value' => substr($hex, 2, 2)], 

            ['row' => '370', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '370', 'cell' => 5, 'value' => substr($hex, 2, 2)], 

            ['row' => '380', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '380', 'cell' => 5, 'value' => substr($hex, 2, 2)], 

            ['row' => '390', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 5, 'value' => substr($hex, 2, 2)], 

            ['row' => '3A0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 5, 'value' => substr($hex, 2, 2)], 

            ['row' => '3B0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 5, 'value' => substr($hex, 2, 2)],



            ['row' => '340', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '340', 'cell' => 9, 'value' => substr($hex, 2, 2)],

            ['row' => '350', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '350', 'cell' => 9, 'value' => substr($hex, 2, 2)], 

            ['row' => '360', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '360', 'cell' => 9, 'value' => substr($hex, 2, 2)], 

            ['row' => '370', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '370', 'cell' => 9, 'value' => substr($hex, 2, 2)], 

            ['row' => '380', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '380', 'cell' => 9, 'value' => substr($hex, 2, 2)], 

            ['row' => '390', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 9, 'value' => substr($hex, 2, 2)], 

            ['row' => '3A0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 9, 'value' => substr($hex, 2, 2)], 

            ['row' => '3B0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 9, 'value' => substr($hex, 2, 2)],


            ['row' => '340', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '340', 'cell' => 13, 'value' => substr($hex, 2, 2)],

            ['row' => '350', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '350', 'cell' => 13, 'value' => substr($hex, 2, 2)], 

            ['row' => '360', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '360', 'cell' => 13, 'value' => substr($hex, 2, 2)], 

            ['row' => '370', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '370', 'cell' => 13, 'value' => substr($hex, 2, 2)], 

            ['row' => '380', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '380', 'cell' => 13, 'value' => substr($hex, 2, 2)], 

            ['row' => '390', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 13, 'value' => substr($hex, 2, 2)], 

            ['row' => '3A0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 13, 'value' => substr($hex, 2, 2)], 

            ['row' => '3B0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 13, 'value' => substr($hex, 2, 2)]




           
        ];
    }
}
