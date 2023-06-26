<?php

namespace App\Scripts;

class Honda_Fit_2007_93c76 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1A0', 3) . $this->getByteForPosition('1A0', 2);
        $number = hexdec($hex);
         
        return [
            'result' => round((65535-$number)* 33.78),
            'image' => 'assets/Honda.png',
            'texts' => [
                'Fit 2007',
                'Eeprom 93c76',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/33.78));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result2 = round(($value/33.78));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '1A0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            


           
        ];
    }
}
