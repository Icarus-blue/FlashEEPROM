<?php

namespace App\Scripts;

class Chery_QQ_s15_2017_9s12hy64 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('400', 1) .$this->getByteForPosition('400', 2) . $this->getByteForPosition('400', 3);
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

                
            ['row' => '400', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '400', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '400', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '400', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '400', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '410', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '410', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '410', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '410', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '410', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '410', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '410', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '410', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '410', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '410', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '410', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '410', 'cell' => 15, 'value' => substr($hex, 4, 2)],      
          
            ['row' => '420', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '420', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '420', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '420', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '420', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '420', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '420', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '420', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '420', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '420', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '420', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '420', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            
            ['row' => '430', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '430', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '430', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '430', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '430', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '430', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '430', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '430', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '430', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '430', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '430', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '430', 'cell' => 15, 'value' => substr($hex, 4, 2)], 
            
           ['row' => '440', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '440', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '440', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '440', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '440', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '440', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '440', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '440', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '440', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '440', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '440', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '440', 'cell' => 15, 'value' => substr($hex, 4, 2)], 
           
           
           
        ];
    }
}
