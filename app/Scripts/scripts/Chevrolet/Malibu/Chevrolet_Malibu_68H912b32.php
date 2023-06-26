<?php

namespace App\Scripts;

class  Chevrolet_Malibu_68H912b32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 3) . $this->getByteForPosition('10', 4);
        $number = hexdec($hex);
         
        return [
            'result' =>  ((65535-$number)*128),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Malibu',
                'Micro 68H912B32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/128));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 2, 2)],

            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 2, 2)]


           
        ];
    }
}
