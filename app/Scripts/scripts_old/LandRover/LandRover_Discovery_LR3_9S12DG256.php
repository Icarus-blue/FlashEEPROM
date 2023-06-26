<?php

namespace App\Scripts;

class LandRover_Discovery_LR3_9S12DG256 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('760',5) . $this->getByteForPosition('760', 6). $this->getByteForPosition('760', 7). $this->getByteForPosition('760', 8);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)),
            'image' => 'assets/LandRover.png',
            'texts' => [
                'Discovery LR3',
                'Micro 9S12DG256 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
             
            ['row' => '760', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '760', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '760', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '760', 'cell' => 8, 'value' => substr($hex, 6, 2)],

            ['row' => '770', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '770', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '770', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '770', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => '770', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '770', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '770', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '780', 'cell' => 0, 'value' => substr($hex, 6, 2)],

            ['row' => '780', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '780', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '780', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '780', 'cell' => 12, 'value' => substr($hex, 6, 2)],

            ['row' => '790', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '790', 'cell' => 8, 'value' => substr($hex, 6, 2)],

            ['row' => '7A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '7A0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => '7A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '7B0', 'cell' => 0, 'value' => substr($hex, 6, 2)],

            ['row' => '7B0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '7B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '7B0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '7B0', 'cell' => 12, 'value' => substr($hex, 6, 2)],

            ['row' => '7C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '7C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '7C0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '7C0', 'cell' => 8, 'value' => substr($hex, 6, 2)],

            ['row' => '7D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '7D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '7D0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '7D0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
          
        ];
    }
}
