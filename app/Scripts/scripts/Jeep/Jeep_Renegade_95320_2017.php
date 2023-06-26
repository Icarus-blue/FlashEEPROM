<?php

namespace App\Scripts;

class Jeep_Renegade_95320_2017 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('0', 10) . $this->getByteForPosition('0', 9)
         . $this->getByteForPosition('0', 8);
        $number = hexdec($hex);
         
        return [
            'result' => ($number),
            'image' => 'assets/Jeep.png',
            'texts' => [
                'Gran Cherokee 2005-07',
                'Eeprom 93c76',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(16777215-($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $result2 = round(($value));
        $hex2 = str_pad(dechex($result2), 6, '0', STR_PAD_LEFT);

        return
        [
            
           ['row' => '0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
           ['row' => '0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
           ['row' => '0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
           
           ['row' => '0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
           ['row' => '0', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
           ['row' => '0', 'cell' => 8, 'value' => substr($hex2, 4, 2)],
        
           
       ];
   }
}
