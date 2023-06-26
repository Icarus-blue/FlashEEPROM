<?php

namespace App\Scripts;

class Fiat_500x_24c32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',10). $this->getByteForPosition('00', 9) . $this->getByteForPosition('00',8);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Fiat.png',
            'texts' => [
                '500x',
                'Eeprom 24c32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        $result2 = round(16777215-($value));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 4, 2)],

            ['row' => '00', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex2, 4, 2)]
            
        ];
    }
}
