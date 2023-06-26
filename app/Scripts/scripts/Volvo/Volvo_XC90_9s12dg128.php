<?php

namespace App\Scripts;

class  Volvo_XC90_9s12dg128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('200', 2) . $this->getByteForPosition('200', 3);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)*208),
            'image' => 'assets/Volvo.png',
            'texts' => [
                'XC90',
                'Eeprom 9s12dg128',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/208));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '200', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '210', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '210', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '210', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '210', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '210', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '210', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '210', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '210', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '220', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '220', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '220', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '220', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '220', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '220', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '220', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '220', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '230', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '230', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '230', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '230', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '230', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '230', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '230', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '230', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '240', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '240', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '240', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '240', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '240', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '240', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '240', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '240', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '250', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '260', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '260', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '260', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '260', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '270', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '280', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '290', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '290', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '290', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '290', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '2A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '2A0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '2A0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '2A0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '2A0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '2A0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '2A0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '2A0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '2B0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '2B0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '2B0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '2B0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '2B0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '2B0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '2B0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '2B0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '2C0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '2C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '2C0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '2C0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 15, 'value' => substr($hex, 2, 2)]

         
      

        ];
    }
}
