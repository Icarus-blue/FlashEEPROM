<?php
namespace App\Scripts;
class Foton_Forland_2018_24c08 extends Script
{
    public function getResult()
    {$hex = $this->getByteForPosition('1c0', 6) . $this->getByteForPosition('1c0', 7). $this->getByteForPosition('1c0', 10);
        $number = hexdec($hex);
         
        return [
            'result' => (round($number)),
            'image' => 'assets/foton.png',
            'texts' => [
                'L200 2010 - 12 ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        
       
                
        return
         [
            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            
            
            
           
         
        ];
    }
}
