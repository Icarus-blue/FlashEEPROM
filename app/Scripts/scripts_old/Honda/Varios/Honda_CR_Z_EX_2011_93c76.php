<?php

namespace App\Scripts;

class Honda_CR_Z_EX_2011_93c76 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1A0', 3) . $this->getByteForPosition('1A0', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/honda.png',
            'texts' => [
                'CR_Z_EX 2011',
                'Eeprom 93c76',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $result2 = round(($value/32));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
    

            ['row' => '1A0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '1B0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '1B0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1B0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '1C0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '1D0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

        


        ];
    }
}
