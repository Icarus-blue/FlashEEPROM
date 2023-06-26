<?php

namespace App\Scripts;

class MG_MG5_bcm_ST95160 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('7A0',2) . $this->getByteForPosition('7A0', 1) . $this->getByteForPosition('7A0', 0) ;
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/Mg.png',
            'texts' => [
                'MG MG5   BCM  ',
                'Eeprom ST95160',
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

        $result = round($value);
        $hex3 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '7A0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '7A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
         
        ];
    }
}
