<?php

namespace App\Scripts;

class volkswagen_golf_4_24c08  extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('70', 1) . $this->getByteForPosition('70', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ($number* 16),
            'image' => 'assets/volkswagen.png',
            'texts' => [
                'golf 4 ',
                'Eeprom 24c08',
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
            ['row' => '70', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex2, 0, 2)]

           

        

        


        ];
    }
}
