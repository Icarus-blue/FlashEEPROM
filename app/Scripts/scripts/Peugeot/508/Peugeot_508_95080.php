<?php

namespace App\Scripts;

class Peugeot_508_95080 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('80',2). $this->getByteForPosition('80', 1) . $this->getByteForPosition('80',0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '508  ',
                'Eeprom 95080',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        $result2 = round(16777215-($value*10));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 0, 2)],

            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 0, 2)],
           

            
         
        ];
    }
}
