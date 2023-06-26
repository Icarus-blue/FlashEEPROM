<?php
namespace App\Scripts;
class CHANGAN_A500_MC9S12HY64 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('530',1). $this->getByteForPosition('530', 2). $this->getByteForPosition('530', 3);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'CS15 dash MC9S12HY64',
                'Micro MC9S12HY64',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $result1 = round(($value)-1);
        $result2 = round(($value)-2);
        $result3 = round(($value)-3);
        $result4 = round(($value)-4);
        $result5 = round(($value)-5);
        $result6 = round(($value)-6);
        $result7 = round(($value)-7);
        $result8 = round(($value)-8);
        $result9 = round(($value)-9);
        
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        $hex2 = str_pad(dechex($result1), 8, '0', STR_PAD_LEFT);
        $hex3 = str_pad(dechex($result2), 8, '0', STR_PAD_LEFT);
        $hex4 = str_pad(dechex($result3), 8, '0', STR_PAD_LEFT);
        $hex5 = str_pad(dechex($result4), 8, '0', STR_PAD_LEFT);
        $hex6 = str_pad(dechex($result5), 8, '0', STR_PAD_LEFT);
        $hex7 = str_pad(dechex($result6), 8, '0', STR_PAD_LEFT);
        $hex8 = str_pad(dechex($result7), 8, '0', STR_PAD_LEFT);
        $hex9 = str_pad(dechex($result8), 8, '0', STR_PAD_LEFT);
        $hex10 = str_pad(dechex($result9), 8, '0', STR_PAD_LEFT);
        
        $resultcero = round((4294967295));
        $hexcero = str_pad(dechex($resultcero), 8, '0', STR_PAD_LEFT);
           
        
        return
         [  
            
            ['row' => '530', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '530', 'cell' => 12, 'value' => substr($hexcero, 0, 8)], 
            
            ['row' => '540', 'cell' => 0, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '540', 'cell' => 4, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '540', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '540', 'cell' => 12, 'value' => substr($hexcero, 0, 8)], 
            
            ['row' => '550', 'cell' => 0, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '550', 'cell' => 4, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '550', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '550', 'cell' => 12, 'value' => substr($hexcero, 0, 8)], 
            
            ['row' => '560', 'cell' => 0, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '560', 'cell' => 4, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '560', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '560', 'cell' => 12, 'value' => substr($hexcero, 0, 8)], 
            
            ['row' => '570', 'cell' => 0, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '570', 'cell' => 4, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '570', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '570', 'cell' => 12, 'value' => substr($hexcero, 0, 8)], 
            
            ['row' => '580', 'cell' => 0, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '580', 'cell' => 4, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '580', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '580', 'cell' => 12, 'value' => substr($hexcero, 0, 8)], 
 
            ['row' => '590', 'cell' => 0, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '590', 'cell' => 4, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '590', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '590', 'cell' => 12, 'value' => substr($hexcero, 0, 8)], 
            
            ['row' => '5A0', 'cell' => 0, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '5A0', 'cell' => 4, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '5A0', 'cell' => 8, 'value' => substr($hexcero, 0, 8)], 
            ['row' => '5A0', 'cell' => 12, 'value' => substr($hexcero, 0, 8)],  
            
            ['row' => '530', 'cell' => 0, 'value' => substr($hex, 0, 2)], 
            ['row' => '530', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '530', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '530', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            
            ['row' => '520', 'cell' => 8, 'value' => substr($hex2, 0, 2)], 
            ['row' => '520', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
            ['row' => '520', 'cell' => 10, 'value' => substr($hex2, 4, 2)],
            ['row' => '520', 'cell' => 11, 'value' => substr($hex2, 6, 2)],
            
            ['row' => '520', 'cell' => 0, 'value' => substr($hex3, 0, 2)], 
            ['row' => '520', 'cell' => 1, 'value' => substr($hex3, 2, 2)],
            ['row' => '520', 'cell' => 2, 'value' => substr($hex3, 4, 2)],
            ['row' => '520', 'cell' => 3, 'value' => substr($hex3, 6, 2)],
            
            ['row' => '510', 'cell' => 8, 'value' => substr($hex4, 0, 2)], 
            ['row' => '510', 'cell' => 9, 'value' => substr($hex4, 2, 2)],
            ['row' => '510', 'cell' => 10, 'value' => substr($hex4, 4, 2)],
            ['row' => '510', 'cell' => 11, 'value' => substr($hex4, 6, 2)],
            
            ['row' => '510', 'cell' => 0, 'value' => substr($hex5, 0, 2)], 
            ['row' => '510', 'cell' => 1, 'value' => substr($hex5, 2, 2)],
            ['row' => '510', 'cell' => 2, 'value' => substr($hex5, 4, 2)],
            ['row' => '510', 'cell' => 3, 'value' => substr($hex5, 6, 2)],
            
            ['row' => '500', 'cell' => 8, 'value' => substr($hex6, 0, 2)], 
            ['row' => '500', 'cell' => 9, 'value' => substr($hex6, 2, 2)],
            ['row' => '500', 'cell' => 10, 'value' => substr($hex6, 4, 2)],
            ['row' => '500', 'cell' => 11, 'value' => substr($hex6, 6, 2)],
            
            ['row' => '500', 'cell' => 0, 'value' => substr($hex7, 0, 2)], 
            ['row' => '500', 'cell' => 1, 'value' => substr($hex7, 2, 2)],
            ['row' => '500', 'cell' => 2, 'value' => substr($hex7, 4, 2)],
            ['row' => '500', 'cell' => 3, 'value' => substr($hex7, 6, 2)],
          
          
        ];
    }
}
