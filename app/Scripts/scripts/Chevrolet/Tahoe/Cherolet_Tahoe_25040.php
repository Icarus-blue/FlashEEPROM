<?php

namespace App\Scripts;

class  Cherolet_Tahoe_25040 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('0', 0) . $this->getByteForPosition('0', 1);
        $number = hexdec($hex);
         
        return [
            'result' =>  ($number*41),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Tahoe',
                'Eeprom 25040',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/41));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 2, 2)],

            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 2, 2)]


           
        ];
    }
}
