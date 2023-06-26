<?php

namespace App\Scripts;

class Yamaha_NeoMax_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('100', 1) . $this->getByteForPosition('100', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number*32)),
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
        $result = round($value/32);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
     $result2 = round(65535-($value/32));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);
       
        return
         [
            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '110', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '120', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '130', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '130', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
        ];
    }
}
