<?php

namespace App\Scripts;

class Mercedes_Sprinter_horas_93s46 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 0) . $this->getByteForPosition('10', 1);
        $number = hexdec($hex);
         
        return [
            'result' => (($number*100)),
            'image' => 'assets/mercedes.png',
            'texts' => [
                'Sprinter Horas ',
                'Eeprom 93s46',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/100));
        $hex = str_pad(($result), 4, '0', STR_PAD_LEFT);
        return
         [
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            
        ];
    }
}
