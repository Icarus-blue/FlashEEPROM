<?php

namespace App\Scripts;

class Renault_Megane_2005_07_24c04 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',11). $this->getByteForPosition('00', 10) . $this->getByteForPosition('00',9);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Renault.png',
            'texts' => [
                'Megane 2005-07 ',
                'Eeprom 24c04',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        
        return
         [
            ['row' => '00', 'cell' => 9,'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '1C0', 'cell' => 9,'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
        ];
    }
}
