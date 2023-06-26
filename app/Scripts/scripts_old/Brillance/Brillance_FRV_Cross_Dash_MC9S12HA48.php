<?php
namespace App\Scripts; 
class Brillance_FRV_Cross_Dash_MC9S12HA48 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('640',5). $this->getByteForPosition('640', 3). $this->getByteForPosition('640', 1) ;
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/BRILLANCE.png',
            'texts' => [
                'FRV Cross Dash',
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
            ['row' => '640', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '640', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '640', 'cell' => 1, 'value' => substr($hex, 4, 2)],

            ['row' => '740', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '740', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '740', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '740', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '740', 'cell' => 1, 'value' => substr($hex, 4, 2)],

            ['row' => '840', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '840', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '840', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '840', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '840', 'cell' => 1, 'value' => substr($hex, 4, 2)],

            
            
        ];
    }
}
