<?php

namespace App\Scripts;

class Suzuki_GSXS_1000_2017_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('140', 1) . $this->getByteForPosition('140', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)* 32.5),
            'image' => 'assets/Suzuki.png',
            'texts' => [
                'Hunk   ',
                'Eeprom 24c04',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round($value/32.5);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
        $result2 = round(65535-($value/32.5));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '140', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '140', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '140', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '140', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '140', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '140', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '140', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '140', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '150', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '150', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '150', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '150', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '150', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '150', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '150', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '150', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '160', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '160', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '160', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '160', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '160', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '160', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '170', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '170', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '170', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '170', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '170', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '170', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '170', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '170', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            


         
        ];
    }
}
