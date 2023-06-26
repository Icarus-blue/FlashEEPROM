<?php

namespace App\Scripts;

class Gmc_Saturn_Ion_Body_25040 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('180', 15) . $this->getByteForPosition('180',14). $this->getByteForPosition('180',13). $this->getByteForPosition('180',12);
        $number = hexdec($hex);
         
        return [
            'result' => ($number/64),
            'image' => 'assets/Gmc.png',
            'texts' => [
                'Saturn Ion Body',
                'Eeprom 25040',
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

            ['row' => '180', 'cell' => 12, 'value' => substr($hex, 6, 2)],
            ['row' => '180', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '180', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 15, 'value' => substr($hex, 0, 2)],
           
            ['row' => '190', 'cell' => 2, 'value' => substr($hex, 6, 2)],
            ['row' => '190', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '190', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 5, 'value' => substr($hex, 0, 2)],

            
            ['row' => '190', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '190', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '190', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            

            
        ];
    }
}
