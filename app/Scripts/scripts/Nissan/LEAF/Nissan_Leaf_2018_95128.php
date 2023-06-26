<?php

namespace App\Scripts;

class Nissan_Leaf_2018_95128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1E80', 4) . $this->getByteForPosition('1E80', 5);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/Nissan.png',
            'texts' => [
                'Fuso 2012 ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result1 = round(($value/32));
        $hex1 = str_pad(dechex($result1), 4, '0', STR_PAD_LEFT);
        
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
        
        
         [
            
            ['row' => '1E80', 'cell' => 2, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E80', 'cell' => 3, 'value' => substr($hex1, 2, 2)],
            ['row' => '1E80', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1E80', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1E80', 'cell' => 6, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E80', 'cell' => 7, 'value' => substr($hex1, 2, 2)],
            ['row' => '1E80', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '1E80', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1E80', 'cell' => 10, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E80', 'cell' => 11, 'value' => substr($hex1, 2, 2)],
            ['row' => '1E80', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '1E80', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1E80', 'cell' => 14, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E80', 'cell' => 15, 'value' => substr($hex1, 2, 2)],
           
            ['row' => '1E90', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1E90', 'cell' => 2, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E90', 'cell' => 3, 'value' => substr($hex1, 2, 2)],
            ['row' => '1E90', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1E90', 'cell' => 6, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E90', 'cell' => 7, 'value' => substr($hex1, 2, 2)],
            ['row' => '1E90', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1E90', 'cell' => 10, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E90', 'cell' => 11, 'value' => substr($hex1, 2, 2)],
            ['row' => '1E90', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1E90', 'cell' => 14, 'value' => substr($hex1, 0, 2)],
            ['row' => '1E90', 'cell' => 15, 'value' => substr($hex1, 2, 2)],
           
           
            ['row' => '1EA0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1EA0', 'cell' => 2, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EA0', 'cell' => 3, 'value' => substr($hex1, 2, 2)],
            ['row' => '1EA0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1EA0', 'cell' => 6, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EA0', 'cell' => 7, 'value' => substr($hex1, 2, 2)],
            ['row' => '1EA0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1EA0', 'cell' => 10, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EA0', 'cell' => 11, 'value' => substr($hex1, 2, 2)],
            ['row' => '1EA0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1EA0', 'cell' => 14, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EA0', 'cell' => 15, 'value' => substr($hex1, 2, 2)],
            
            
            ['row' => '1EB0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            
            
            ['row' => '1EB0', 'cell' => 2, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EB0', 'cell' => 3, 'value' => substr($hex1, 2, 2)],
            ['row' => '1EB0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1EB0', 'cell' => 6, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EB0', 'cell' => 7, 'value' => substr($hex1, 2, 2)],
            ['row' => '1EB0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1EB0', 'cell' => 10, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EB0', 'cell' => 11, 'value' => substr($hex1, 2, 2)],
            ['row' => '1EB0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            
            ['row' => '1EB0', 'cell' => 14, 'value' => substr($hex1, 0, 2)],
            ['row' => '1EB0', 'cell' => 15, 'value' => substr($hex1, 2, 2)],
            
            ['row' => '1EC0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1EC0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            
           
            
           
        ];
    }
}
