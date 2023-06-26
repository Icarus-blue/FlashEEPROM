<?php

namespace App\Scripts;

class Mercedes_Class_C_VDO_1995_93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('90', 1) . $this->getByteForPosition('90', 0);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/Mercedes.png',
            'texts' => [
                'Class C VDO  1995',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 2, 2)],

            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 14, 'value' => substr($hex, 2, 2)]
            
            


           
        ];
    }
}
