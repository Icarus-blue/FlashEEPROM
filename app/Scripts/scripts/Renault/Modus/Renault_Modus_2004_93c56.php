<?php

namespace App\Scripts;

class Renault_Modus_2004_93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',5). $this->getByteForPosition('00', 4) . $this->getByteForPosition('00',2). $this->getByteForPosition('00',3);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Renault.png',
            'texts' => [
                'Modus 2004 ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result2 = round(4294967295-($value));
        $hex2 = str_pad(dechex($result2), 8, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex2, 4, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex2, 6, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)],

            ['row' => '00', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex2, 6, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            ['row' => '00', 'cell' => 12, 'value' => substr($hex2, 4, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex2, 6, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => '10', 'cell' => 2, 'value' => substr($hex2, 4, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex2, 6, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 2, 2)],
         

            
        ];
    }
}
