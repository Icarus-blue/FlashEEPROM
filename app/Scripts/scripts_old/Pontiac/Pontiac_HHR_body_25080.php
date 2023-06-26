<?php

namespace App\Scripts;

class Pontiac_HHR_body_25080 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('3C0', 12) . $this->getByteForPosition('3C0',13). $this->getByteForPosition('3C0',10). $this->getByteForPosition('3C0',11);
        $number = hexdec($hex);
         
        return [
            'result' => ($number/64),
            'image' => 'assets/Pontiac.png',
            'texts' => [
                'Hhr Body',
                'Eeprom 25080',
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

            ['row' => '3C0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '3C0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '3C0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
           
            ['row' => '3D0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '3D0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '3D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 5, 'value' => substr($hex, 2, 2)],

            
            ['row' => '3D0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '3D0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '3D0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            

            
        ];
    }
}
