<?php

namespace App\Scripts;

class Ford_Mondeo_2016_24c32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F80', 0) . $this->getByteForPosition('F80', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number*1283)/ 100),
            'image' => 'assets/ford.png',
            'texts' => [
                'Mondeo 2016',
                'Eeprom 24c32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round((($value*100)/1283)+1);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'F80', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => 'F80', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 5, 'value' => substr($hex, 2, 2)],

            ['row' => 'F80', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 9, 'value' => substr($hex, 2, 2)],

            ['row' => 'F80', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 13, 'value' => substr($hex, 2, 2)],

            ['row' => 'F90', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F90', 'cell' => 1, 'value' => substr($hex, 2, 2)],
           
            


           
        ];
    }
}
