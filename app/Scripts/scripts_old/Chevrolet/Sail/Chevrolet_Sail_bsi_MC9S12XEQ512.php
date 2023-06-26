<?php

namespace App\Scripts;

class Chevrolet_Sail_bsi_MC9S12XEQ512 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('D30', 11) . $this->getByteForPosition('D30', 12);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)*4),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Sail bsi',
                'Micro MC9S12XEQ512',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/4));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result = round(($value/4));
        $hex2 = str_pad(dechex(15), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'D30', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => 'D30', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'D30', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'D30', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => 'D30', 'cell' => 14, 'value' => substr($hex2, 2, 2)],
            ['row' => 'D30', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'D40', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'D40', 'cell' => 1, 'value' => substr($hex2, 2, 2)],

            ['row' => 'D40', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => 'D40', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'D40', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'D40', 'cell' => 5, 'value' => substr($hex2, 0, 2)],


           
        ];
    }
}
