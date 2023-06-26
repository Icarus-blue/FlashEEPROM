<?php

namespace App\Scripts;

class Chevrolet_Corvette_2005_93c76 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('2F0', 3) . $this->getByteForPosition('2F0', 2);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)*26),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Corvette',
                'Eeprom 93c76',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/26));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result2 = round(65535-($value/26));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);
        return
         [
            
            ['row' => '2F0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '2F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '2F0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '2F0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],

            ['row' => '2F0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '2F0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '2F0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '2F0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],

            ['row' => '2F0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '2F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '2F0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '2F0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
        
            ['row' => '2F0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '2F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '300', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '300', 'cell' => 0, 'value' => substr($hex2, 2, 2)],



            ['row' => '300', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '300', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '300', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '300', 'cell' => 4, 'value' => substr($hex2, 2, 2)],

            ['row' => '300', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '300', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '300', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '300', 'cell' => 8, 'value' => substr($hex2, 2, 2)],

            ['row' => '300', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '300', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '300', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '300', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
    
            ['row' => '300', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '300', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '310', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '310', 'cell' => 0, 'value' => substr($hex2, 2, 2)]



           
        ];
    }
}
