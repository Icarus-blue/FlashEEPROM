<?php

namespace App\Scripts;

class AcuraCL93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('60', 1) . $this->getByteForPosition('60', 0);
        $number = hexdec($hex);
        $number = $number;
        return [
            'result' => $number * 16,
            'image' => 'assets/acura.bmp',
            'texts' => [
                'Acura',
                'Eeprom 93c56',
                'FlashEeprom'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round($value / 17);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
        return [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)]
        ];
    }
}
