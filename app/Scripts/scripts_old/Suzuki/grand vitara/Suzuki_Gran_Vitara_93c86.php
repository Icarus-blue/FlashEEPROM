<?php
namespace App\Scripts;
class Suzuki_Gran_Vitara_93c86 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('E0', 12) . $this->getByteForPosition('E0',13);
        $number = hexdec($hex);
         
        return [
            'result' => round($number*32.57328990228013),
            'image' => 'assets/Suzuki.png',
            'texts' => [
                'Gran Vitara ',
                'EERPOM 96C86',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = (round($value/32.57328990228013));
        $hex = str_pad(dechex($result),4, '0', STR_PAD_LEFT);

        $result2 = (round(65535-($value/32.57328990228013)));
        $hex2 = str_pad(dechex($result2),4, '0', STR_PAD_LEFT);

        

        return
         [
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
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
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
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
            ['row' => '110', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '110', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '120', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
        ];
    }
}
