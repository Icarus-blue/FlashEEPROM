<?php

namespace App\Scripts;

class Honda_Civic_93c86_milles extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1E0', 3) . $this->getByteForPosition('1E0', 2);
        $number = hexdec($hex);
         
        return [
            'result' => round(((65535-$number)* 32)*1.609),
            'image' => 'assets/honda.png',
            'texts' => [
                'Jazz 2015',
                'Eeprom 93c86',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round((65535-(($value/1.609)/32)));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $result2 = round((($value/1.609)/32));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
             
            ['row' => '1D0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '1E0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '1E0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1E0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '1F0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1F0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1F0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '1F0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1F0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1F0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '200', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '200', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '200', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '200', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '200', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 7, 'value' => substr($hex, 0, 2)],

        

        ];
    }
}
