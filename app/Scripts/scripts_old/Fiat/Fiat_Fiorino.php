<?php

namespace App\Scripts;

class Fiat_fiorino extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('20',3). $this->getByteForPosition('20', 2) . $this->getByteForPosition('20',1). $this->getByteForPosition('20',0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/Fiat.png',
            'texts' => [
                'Ducato',
                'Eeprom 25040',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value*10));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result2 = round(4294967295-($value*10));
        $hex2 = str_pad(dechex($result2), 8, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '00', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '00', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '20', 'cell' => 4, 'value' => substr($hex2, 6, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex2, 4, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex2, 0, 2)]


        ];
    }
}
