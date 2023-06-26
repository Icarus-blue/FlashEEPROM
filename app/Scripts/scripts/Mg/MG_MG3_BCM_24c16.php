<?php

namespace App\Scripts;

class MG_MG3_BCM_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('A0', 1) . $this->getByteForPosition('A0', 2) . $this->getByteForPosition('A0', 3);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/Mg.png',
            'texts' => [
                'MG MG3  BCM  ',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $result = round((4294967295-$value));
        $hex2 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
           
          
         
        ];
    }
}
