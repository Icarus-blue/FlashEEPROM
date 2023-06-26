<?php

namespace App\Scripts;

class Chevrolet_Cavalier_BCM_MC9S12XEQ512 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('D30',11) . $this->getByteForPosition('D30', 12) . $this->getByteForPosition('D30', 13) ;
        $number = hexdec($hex);
         
        return [
            'result' => round(($number/64)),
                'image' => 'assets/chevrolet.png',
            'texts' => [
                'Cavalier bcm ',
                'Micro MC9S12XEQ512',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*64));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $result = round((4294967295-$value));
        $hex2 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result = round($value*100);
        $hex3 = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        return
         [
            
           
            ['row' => 'D30', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'D30', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'D30', 'cell' => 13 , 'value' => substr($hex, 4, 2)],

           
            ['row' => 'D30', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'D40', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'D40', 'cell' => 1 , 'value' => substr($hex, 4, 2)],

            ['row' => 'D40', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'D40', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'D40', 'cell' => 5, 'value' => substr($hex, 4, 2)],

            
         
        ];
    }
}
