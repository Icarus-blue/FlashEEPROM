<?php

namespace App\Scripts;

class Ford_Falcon_93c46 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('50', 9) . $this->getByteForPosition('50', 8);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 16),
            'image' => 'assets/ford.png',
            'texts' => [
                'Ford Falcon VDO',
                'Eeprom 93c46',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/16));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
        
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 2, 2)]
            
            


           
        ];
    }
}
