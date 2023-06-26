<?php
namespace App\Scripts;
class Foton_Furgon_2018_24c04 extends Script
{
    public function getResult()
    {$hex = $this->getByteForPosition('10', 2) . $this->getByteForPosition('10', 1). $this->getByteForPosition('10', 0);
        $number = hexdec($hex);
         
        return [
            'result' => (round($number/10)),
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
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        
       
                
        return
         [
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            
            
           
         
        ];
    }
}
