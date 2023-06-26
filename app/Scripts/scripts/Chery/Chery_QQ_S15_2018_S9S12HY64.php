<?php

namespace App\Scripts;

class Chery_QQ_S15_2018_S9S12HY64 extends Script
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
        return
         [

                
            ['row' => '500', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '500', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '500', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '500', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '500', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '500', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '510', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '510', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '510', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '510', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '510', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '510', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '520', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '520', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '520', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '520', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '520', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '520', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '530', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '530', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '530', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '530', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '530', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '530', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '540', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '540', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '540', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '540', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '540', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '540', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '550', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '550', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '550', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '550', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '550', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '550', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '560', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '560', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '560', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '560', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '560', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '560', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '570', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '570', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '570', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '570', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '570', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '570', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '580', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '580', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '580', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '580', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '580', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '580', 'cell' => 11, 'value' => substr($hex, 4, 2)],
        
            ['row' => '590', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '590', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '590', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '590', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '590', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '590', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '5A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '5A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '5A0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '5A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '5A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '5A0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '5B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '5B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '5B0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '5B0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '5B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '5B0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
             ['row' => '5C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '5C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '5C0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '5C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '5C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '5C0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '5D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '5D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '5D0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '5D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '5D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '5D0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '5E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '5E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '5E0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '5E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '5E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '5E0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            
            ['row' => '5F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '5F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '5F0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '5F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '5F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '5F0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

           
        ];
    }
}
