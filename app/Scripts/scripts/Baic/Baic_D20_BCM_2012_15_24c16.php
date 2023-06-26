<?php

namespace App\Scripts; 
class Baic_D20_BCM_2012_15_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('A0',12). $this->getByteForPosition('A0', 13) . $this->getByteForPosition('A0',14). $this->getByteForPosition('A0',15);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/baic.png',
            'texts' => [
                'D20 2012-15',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result = round((16777215-$value));
        $hex2 = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 6, 2)],

            ['row' => '2A0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '2A0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '2A0', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            
        ];
    }
}
