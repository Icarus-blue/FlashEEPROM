<?php
namespace App\Scripts;

class  Suzuki_Baleno_2018_93c86 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F0', 13) . $this->getByteForPosition('F0',12);
        $number = hexdec($hex);
         
        return [
            'result' => round($number*32.04),
            'image' => 'assets/Suzuki.png',
            'texts' => [
                'Baleno 2018',
                'Eeprom 93c86',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom '
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value/32.04));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $result2 = (65535-($value/32.04));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);
        return
         [

            ['row' => 'E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],

            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex2,2, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => '100', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '100', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => '100', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '100', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
           
            ['row' => '110', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => '110', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 6, 'value' => substr($hex2,2, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '110', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => '110', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 14, 'value' => substr($hex2,2, 2)],
            ['row' => '110', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '120', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 2, 'value' => substr($hex2,2, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => '120', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '120', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => '120', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            
        ];
    }
}
