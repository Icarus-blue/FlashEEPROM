<?php

namespace App\Scripts;

class volkswagen_bora_24c02  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('40', 1) . $this->getByteForPosition('40', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ($number* 16),
            'image' => 'assets/volkswagen.png',
            'texts' => [
                'bora ',
                'Eeprom 24c02',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/16));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $result2 = round(($value/16));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '40', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex2, 0, 2)]

           

        

        


        ];
    }
}
