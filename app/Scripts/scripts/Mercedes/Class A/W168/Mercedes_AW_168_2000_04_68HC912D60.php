<?php

namespace App\Scripts;

class Mercedes_AW_168_2000_04_68HC912D60  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('140',4). $this->getByteForPosition('140', 5) . $this->getByteForPosition('140',6);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Mercedes.png',
            'texts' => [
                'AW 168 MM',
                'Micro 68HC912D60 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        $result2 = round(16777215-($value));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '140', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 6, 'value' => substr($hex, 4, 2)],

            ['row' => '140', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '140', 'cell' => 9, 'value' => substr($hex2, 4, 2)],

            
            ['row' => '140', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 12, 'value' => substr($hex, 4, 2)],

            ['row' => '140', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '140', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '150', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 2, 'value' => substr($hex, 4, 2)],

            ['row' => '150', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '150', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '150', 'cell' => 5, 'value' => substr($hex2, 4, 2)],

            ['row' => '150', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 8, 'value' => substr($hex, 4, 2)],

            ['row' => '150', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '150', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '150', 'cell' => 11, 'value' => substr($hex2, 4, 2)],

            ['row' => '150', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 14, 'value' => substr($hex, 4, 2)],

            ['row' => '150', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '160', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '160', 'cell' => 1, 'value' => substr($hex2, 4, 2)],

            ['row' => '160', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 4, 'value' => substr($hex, 4, 2)],

            ['row' => '160', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '160', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex2, 4, 2)],

            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => '160', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '160', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '160', 'cell' => 13, 'value' => substr($hex2, 4, 2)],

            ['row' => '160', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '170', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '170', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '170', 'cell' => 3, 'value' => substr($hex2, 4, 2)],

            ['row' => '170', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 6, 'value' => substr($hex, 4, 2)],

            ['row' => '170', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '170', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '170', 'cell' => 9, 'value' => substr($hex2, 4, 2)],

            ['row' => '170', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 12, 'value' => substr($hex, 4, 2)],

            ['row' => '170', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '170', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '170', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '180', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 2, 'value' => substr($hex, 4, 2)],

         
            ['row' => '180', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '180', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '180', 'cell' => 5, 'value' => substr($hex2, 4, 2)],

            ['row' => '180', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 8, 'value' => substr($hex, 4, 2)],

            ['row' => '180', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '180', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '180', 'cell' => 11, 'value' => substr($hex2, 4, 2)],

            ['row' => '180', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            
             
            ['row' => '180', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '190', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '190', 'cell' => 1, 'value' => substr($hex2, 4, 2)],

            ['row' => '190', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 4, 'value' => substr($hex, 4, 2)],

            ['row' => '190', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '190', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '190', 'cell' => 7, 'value' => substr($hex2, 4, 2)],

            ['row' => '190', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => '190', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '190', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '190', 'cell' => 13, 'value' => substr($hex2, 4, 2)],

            ['row' => '190', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex2, 4, 2)],

            ['row' => '1A0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 6, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 9, 'value' => substr($hex2, 4, 2)],

            ['row' => '1A0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 12, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '1A0', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '1A0', 'cell' => 15, 'value' => substr($hex2, 4, 2)],

            ['row' => '1B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 2, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '1B0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 5, 'value' => substr($hex2, 4, 2)],

            ['row' => '1B0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 8, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '1B0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '1B0', 'cell' => 11, 'value' => substr($hex2, 4, 2)],

            ['row' => '1B0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 14, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 1, 'value' => substr($hex2, 4, 2)],

            ['row' => '1C0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex2, 4, 2)],

            ['row' => '1C0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '1C0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1C0', 'cell' => 13, 'value' => substr($hex2, 4, 2)],

            ['row' => '1C0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 0, 'value' => substr($hex, 4, 2)],

            ['row' => '1D0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex2, 4, 2)],

            ['row' => '1D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 6, 'value' => substr($hex, 4, 2)],

            ['row' => '1D0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '1D0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex2, 4, 2)],
            



            
        ];
    }
}
