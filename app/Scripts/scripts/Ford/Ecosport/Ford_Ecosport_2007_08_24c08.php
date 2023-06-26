<?php

namespace App\Scripts;

class Ford_Ecosport_2007_08_24c08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1C0', 4) . $this->getByteForPosition('1C0', 3);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number *15.77038322031225)),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford EcoSport ',
                'micro 04c08',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value/15.77038322031225));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        return
         [

            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '1D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            

            
        ];
    }
}
