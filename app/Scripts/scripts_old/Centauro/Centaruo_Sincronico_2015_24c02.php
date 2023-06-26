<?php

namespace App\Scripts;

class Centaruo_Sincronico_2015_24c02 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('A0',2) . $this->getByteForPosition('A0', 3) . $this->getByteForPosition('A0', 4) ;
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/Centauro.png',
            'texts' => [
                'Centauro Sincronico 2015 ',
                'Eeprom 24c02',
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

        $result = round($value*100);
        $hex3 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 5, 'value' => substr($hex, 4, 2)],

           
        ];
    }
}
