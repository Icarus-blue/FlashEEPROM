<?php
namespace App\Scripts;
class CHANGAN_CS15_DASH_2022_MC9S12XHY128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',1). $this->getByteForPosition('00', 2). $this->getByteForPosition('00', 3);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'CS15 dash MC9S12XHY128',
                'Micro MC9S12XHY128',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);


        
        return
         [
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex, 0, 2)],

            ['row' => '200', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
        ];
    }
}
