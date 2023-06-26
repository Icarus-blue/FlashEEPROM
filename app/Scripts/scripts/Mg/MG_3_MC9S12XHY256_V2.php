<?php

namespace App\Scripts;

class MG_3_MC9S12XHY256_V2 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('C20', 1) . $this->getByteForPosition('C20', 2) ;
        $number = hexdec($hex);
         
        return [
            'result' => round(($number*8)),
            'image' => 'assets/Mg.png',
            'texts' => [
                'MG 3   ',
                'Micro MC9S12XHY256_V2',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/8));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => 'C20', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C20', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C20', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C20', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C20', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C20', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C20', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C20', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => 'C30', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C30', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C30', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C30', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C30', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C30', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C30', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C30', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => 'C40', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C40', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C40', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C40', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C40', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C40', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C40', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C40', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => 'C50', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C50', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C50', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C50', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C50', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C50', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C50', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C50', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => 'C60', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C60', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C60', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C60', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C60', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C60', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C60', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C60', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => 'C70', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C70', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C70', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C70', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C70', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C70', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C70', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C70', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            ['row' => 'C80', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C80', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C80', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C80', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C80', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C80', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C80', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C80', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => 'C90', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C90', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C90', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => 'C90', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'C90', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C90', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C90', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => 'C90', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            
            
         
        ];
    }
}
