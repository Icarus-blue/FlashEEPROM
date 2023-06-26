<?php
namespace App\Scripts;
class Zotye_Nomada_2013_24c04  extends Script
{

    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 3) . $this->getByteForPosition('00', 0). $this->getByteForPosition('00', 1). $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number/10)),
            'image' => 'assets/zotye.png',
            'texts' => [
                'Aveo V1 2012-18',
                'Eeprom 93c86',
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
            
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0,2)],
            
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 0,2)],
            
            
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 0,2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0,2)],
            
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 0,2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 0,2)],
        
            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 0,2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 0,2)],
       
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 0,2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 0,2)],
            
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 0,2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 0,2)],
            
            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 0,2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 0,2)],
            
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 6,2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 0,2)],
            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 6,2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 0,2)],
        ];
    }
}
