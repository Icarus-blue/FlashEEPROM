<?php

namespace App\Scripts;

class MG_GT_BCM_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('A0', 12) . $this->getByteForPosition('A0', 13) . $this->getByteForPosition('A0', 14). $this->getByteForPosition('A0', 15);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/Mg.png',
            'texts' => [
                'MG GT  BCM  ',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        $result = round((4294967295-$value));
        $hex2 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'A0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
            ['row' => '2A0', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '2A0', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '2A0', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '2A0', 'cell' => 15, 'value' => substr($hex2, 6, 2)],
          
         
        ];
    }
}
