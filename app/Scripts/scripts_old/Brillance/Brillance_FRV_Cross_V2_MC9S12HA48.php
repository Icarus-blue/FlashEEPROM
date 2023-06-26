<?php
namespace App\Scripts; 
class Brillance_FRV_Cross_V2_MC9S12HA48 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('640',13). $this->getByteForPosition('640', 11). $this->getByteForPosition('640', 9) ;
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/BRILLANCE.png',
            'texts' => [
                'FRV Cross V2',
                'Micro MC9S12HA48',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $result = round((00));
        $hex2 = str_pad(($result), 4, '0', STR_PAD_LEFT);


    

       
        return
         [
            ['row' => '640', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '640', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '640', 'cell' => 9, 'value' => substr($hex, 4, 2)],

            ['row' => '740', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '740', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '740', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '740', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '740', 'cell' => 9, 'value' => substr($hex, 4, 2)],

            ['row' => '840', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '840', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '840', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '840', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '840', 'cell' => 9, 'value' => substr($hex, 4, 2)],

            
            
        ];
    }
}
