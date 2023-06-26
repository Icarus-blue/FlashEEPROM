<?php

namespace App\Scripts;

class Opel_astra_j_bcu_95160  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F0',6) . $this->getByteForPosition('F0',7). $this->getByteForPosition('F0',8). $this->getByteForPosition('F0',9);
        $number = hexdec($hex);
         
        return [
            'result' => ($number/64),
            'image' => 'assets/opel.png',
            'texts' => [
                'astra j_bcu ',
                'Eeprom 95160',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value*64));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        return
         [

            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
           
            ['row' => '160', 'cell' => 6, 'value' => substr($hex, 6, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 9, 'value' => substr($hex, 0, 2)],

            
            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            

            
        ];
    }
}
