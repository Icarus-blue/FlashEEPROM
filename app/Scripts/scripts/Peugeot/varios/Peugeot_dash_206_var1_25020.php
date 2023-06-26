<?php

namespace App\Scripts;

class Peugeot_dash_206_var1_25020 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('20',11). $this->getByteForPosition('20', 10) . $this->getByteForPosition('20',9). $this->getByteForPosition('20',8);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                'Dash 206',
                'Eeprom 25020',
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
            

            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 0, 2)],

            ['row' => '20', 'cell' => 12, 'value' => substr($hex2, 6, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex2, 0, 2)]


        ];
    }
}
