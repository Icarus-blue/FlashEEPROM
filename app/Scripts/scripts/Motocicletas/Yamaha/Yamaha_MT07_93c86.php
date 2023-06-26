<?php

namespace App\Scripts;

class Yamaha_MT07_93c86 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 3) . $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/yamaha.png',
            'texts' => [
                'Hunk   ',
                'Eeprom 24c04',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round($value);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
       
        return
         [
            ['row' => '00', 'cell' => 02, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 03, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 06, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 07, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            ['row' => '10', 'cell' => 02, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 03, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 06, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 07, 'value' => substr($hex, 0, 2)],
            
            
            
        ];
    }
}
