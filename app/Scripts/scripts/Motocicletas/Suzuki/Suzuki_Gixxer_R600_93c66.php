<?php

namespace App\Scripts;

class Suzuki_Gixxer_R600_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('190', 9) . $this->getByteForPosition('190', 8);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)* 32.25),
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
        $result = round($value/32.25);
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
        $result2 = round(65535-($value/32.25));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            
         
            
            ['row' => '1A0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1A0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1A0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1A0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1B0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1B0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1B0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1B0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1C0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1C0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1C0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1D0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1D0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1D0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '1D0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
        ];
    }
}
