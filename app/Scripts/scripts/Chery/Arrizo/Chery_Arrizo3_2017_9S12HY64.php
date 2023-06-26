<?php

namespace App\Scripts;

class Chery_Arrizo3_2017_9S12HY64 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('500', 1) . $this->getByteForPosition('500', 2). $this->getByteForPosition('500', 3);
        $number = hexdec($hex);
         
        return [
            'result' => ($number) ,
            'image' => 'assets/Chery.png',
            'texts' => [
                'Chery_Amulet',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round($value);
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $hex2 = str_pad(dechex($result-1), 6, '0', STR_PAD_LEFT);
        $hex3 = str_pad(dechex($result-2), 6, '0', STR_PAD_LEFT);//e
        $hex4 = str_pad(dechex($result-3), 6, '0', STR_PAD_LEFT);//D
        $hex5 = str_pad(dechex($result-4), 6, '0', STR_PAD_LEFT);//C
        $hex6 = str_pad(dechex($result-5), 6, '0', STR_PAD_LEFT);//B
        $hex7 = str_pad(dechex($result-6), 6, '0', STR_PAD_LEFT);//A
        $hex8 = str_pad(dechex($result-7), 6, '0', STR_PAD_LEFT);//9
        $hex9 = str_pad(dechex($result-8), 6, '0', STR_PAD_LEFT);//8
        $hex10 = str_pad(dechex($result-9), 6, '0', STR_PAD_LEFT);//7
        $hex11 = str_pad(dechex($result-10), 6, '0', STR_PAD_LEFT);//6
        $hex12 = str_pad(dechex($result-11), 6, '0', STR_PAD_LEFT);//5
        $hex13 = str_pad(dechex($result-12), 6, '0', STR_PAD_LEFT);//4
        $hex14 = str_pad(dechex($result-13), 6, '0', STR_PAD_LEFT);//3
        $hex15 = str_pad(dechex($result-14), 6, '0', STR_PAD_LEFT);//2
        $hex16 = str_pad(dechex($result-15), 6, '0', STR_PAD_LEFT);//1
        $hex17 = str_pad(dechex($result-16), 6, '0', STR_PAD_LEFT);//0
        $hex18 = str_pad(dechex($result-17), 6, '0', STR_PAD_LEFT);//F
        $hex19 = str_pad(dechex($result-18), 6, '0', STR_PAD_LEFT);//E
        $hex20 = str_pad(dechex($result-19), 6, '0', STR_PAD_LEFT);//4
        $hex21 = str_pad(dechex($result-20), 6, '0', STR_PAD_LEFT);//3
        $hex22 = str_pad(dechex($result-21), 6, '0', STR_PAD_LEFT);//2
        $hex23 = str_pad(dechex($result-22), 6, '0', STR_PAD_LEFT);//1
        $hex24 = str_pad(dechex($result-23), 6, '0', STR_PAD_LEFT);//0
        $hex25 = str_pad(dechex($result-24), 6, '0', STR_PAD_LEFT);//F
        $hex26 = str_pad(dechex($result-25), 6, '0', STR_PAD_LEFT);//E
        $hex27 = str_pad(dechex($result-26), 6, '0', STR_PAD_LEFT);//E
        return
         [

                
            ['row' => '500', 'cell' => 1, 'value' => substr($hex27, 0, 2)],
            ['row' => '500', 'cell' => 2, 'value' => substr($hex27, 2, 2)],
            ['row' => '500', 'cell' => 3, 'value' => substr($hex27, 4, 2)],
            ['row' => '500', 'cell' => 9, 'value' => substr($hex26, 0, 2)],
            ['row' => '500', 'cell' => 10, 'value' => substr($hex26, 2, 2)],
            ['row' => '500', 'cell' => 11, 'value' => substr($hex26, 4, 2)],
            
            ['row' => '510', 'cell' => 1, 'value' => substr($hex25, 0, 2)],
            ['row' => '510', 'cell' => 2, 'value' => substr($hex25, 2, 2)],
            ['row' => '510', 'cell' => 3, 'value' => substr($hex25, 4, 2)],
            ['row' => '510', 'cell' => 9, 'value' => substr($hex24, 0, 2)],
            ['row' => '510', 'cell' => 10, 'value' => substr($hex24, 2, 2)],
            ['row' => '510', 'cell' => 11, 'value' => substr($hex24, 4, 2)],
            
            ['row' => '520', 'cell' => 1, 'value' => substr($hex23, 0, 2)],
            ['row' => '520', 'cell' => 2, 'value' => substr($hex23, 2, 2)],
            ['row' => '520', 'cell' => 3, 'value' => substr($hex23, 4, 2)],
            ['row' => '520', 'cell' => 9, 'value' => substr($hex22, 0, 2)],
            ['row' => '520', 'cell' => 10, 'value' => substr($hex22, 2, 2)],
            ['row' => '520', 'cell' => 11, 'value' => substr($hex22, 4, 2)],
            
            ['row' => '530', 'cell' => 1, 'value' => substr($hex21, 0, 2)],
            ['row' => '530', 'cell' => 2, 'value' => substr($hex21, 2, 2)],
            ['row' => '530', 'cell' => 3, 'value' => substr($hex21, 4, 2)],
            ['row' => '530', 'cell' => 9, 'value' => substr($hex20, 0, 2)],
            ['row' => '530', 'cell' => 10, 'value' => substr($hex20, 2, 2)],
            ['row' => '530', 'cell' => 11, 'value' => substr($hex20, 4, 2)],
            
            ['row' => '540', 'cell' => 1, 'value' => substr($hex19, 0, 2)],
            ['row' => '540', 'cell' => 2, 'value' => substr($hex19, 2, 2)],
            ['row' => '540', 'cell' => 3, 'value' => substr($hex19, 4, 2)],
            ['row' => '540', 'cell' => 9, 'value' => substr($hex18, 0, 2)],
            ['row' => '540', 'cell' => 10, 'value' => substr($hex18, 2, 2)],
            ['row' => '540', 'cell' => 11, 'value' => substr($hex18, 4, 2)],
            
            ['row' => '550', 'cell' => 1, 'value' => substr($hex17, 0, 2)],
            ['row' => '550', 'cell' => 2, 'value' => substr($hex17, 2, 2)],
            ['row' => '550', 'cell' => 3, 'value' => substr($hex17, 4, 2)],
            ['row' => '550', 'cell' => 9, 'value' => substr($hex16, 0, 2)],
            ['row' => '550', 'cell' => 10, 'value' => substr($hex16, 2, 2)],
            ['row' => '550', 'cell' => 11, 'value' => substr($hex16, 4, 2)],
            
            ['row' => '560', 'cell' => 1, 'value' => substr($hex15, 0, 2)],
            ['row' => '560', 'cell' => 2, 'value' => substr($hex15, 2, 2)],
            ['row' => '560', 'cell' => 3, 'value' => substr($hex15, 4, 2)],
            ['row' => '560', 'cell' => 9, 'value' => substr($hex14, 0, 2)],
            ['row' => '560', 'cell' => 10, 'value' => substr($hex14, 2, 2)],
            ['row' => '560', 'cell' => 11, 'value' => substr($hex14, 4, 2)],
            
            ['row' => '570', 'cell' => 1, 'value' => substr($hex13, 0, 2)],
            ['row' => '570', 'cell' => 2, 'value' => substr($hex13, 2, 2)],
            ['row' => '570', 'cell' => 3, 'value' => substr($hex13, 4, 2)],
            ['row' => '570', 'cell' => 9, 'value' => substr($hex12, 0, 2)],
            ['row' => '570', 'cell' => 10, 'value' => substr($hex12, 2, 2)],
            ['row' => '570', 'cell' => 11, 'value' => substr($hex12, 4, 2)],
            
            ['row' => '580', 'cell' => 1, 'value' => substr($hex11, 0, 2)],
            ['row' => '580', 'cell' => 2, 'value' => substr($hex11, 2, 2)],
            ['row' => '580', 'cell' => 3, 'value' => substr($hex11, 4, 2)],
            ['row' => '580', 'cell' => 9, 'value' => substr($hex10, 0, 2)],
            ['row' => '580', 'cell' => 10, 'value' => substr($hex10, 2, 2)],
            ['row' => '580', 'cell' => 11, 'value' => substr($hex10, 4, 2)],
        
            ['row' => '590', 'cell' => 1, 'value' => substr($hex9, 0, 2)],
            ['row' => '590', 'cell' => 2, 'value' => substr($hex9, 2, 2)],
            ['row' => '590', 'cell' => 3, 'value' => substr($hex9, 4, 2)],
            ['row' => '590', 'cell' => 9, 'value' => substr($hex8, 0, 2)],
            ['row' => '590', 'cell' => 10, 'value' => substr($hex8, 2, 2)],
            ['row' => '590', 'cell' => 11, 'value' => substr($hex8, 4, 2)],
            
            ['row' => '5A0', 'cell' => 1, 'value' => substr($hex7, 0, 2)],
            ['row' => '5A0', 'cell' => 2, 'value' => substr($hex7, 2, 2)],
            ['row' => '5A0', 'cell' => 3, 'value' => substr($hex7, 4, 2)],
            ['row' => '5A0', 'cell' => 9, 'value' => substr($hex6, 0, 2)],
            ['row' => '5A0', 'cell' => 10, 'value' => substr($hex6, 2, 2)],
            ['row' => '5A0', 'cell' => 11, 'value' => substr($hex6, 4, 2)],
            
            ['row' => '5B0', 'cell' => 1, 'value' => substr($hex5, 0, 2)],
            ['row' => '5B0', 'cell' => 2, 'value' => substr($hex5, 2, 2)],
            ['row' => '5B0', 'cell' => 3, 'value' => substr($hex5, 4, 2)],
            ['row' => '5B0', 'cell' => 9, 'value' => substr($hex4, 0, 2)],
            ['row' => '5B0', 'cell' => 10, 'value' => substr($hex4, 2, 2)],
            ['row' => '5B0', 'cell' => 11, 'value' => substr($hex4, 4, 2)],
            
             ['row' => '5C0', 'cell' => 1, 'value' => substr($hex3, 0, 2)],
            ['row' => '5C0', 'cell' => 2, 'value' => substr($hex3, 2, 2)],
            ['row' => '5C0', 'cell' => 3, 'value' => substr($hex3, 4, 2)],
            ['row' => '5C0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '5C0', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
            ['row' => '5C0', 'cell' => 11, 'value' => substr($hex2, 4, 2)],
            
            ['row' => '5D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '5D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '5D0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            
           
           
        ];
    }
}
