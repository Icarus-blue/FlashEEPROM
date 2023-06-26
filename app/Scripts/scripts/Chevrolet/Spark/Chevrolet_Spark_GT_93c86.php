<?php
namespace App\Scripts;
class Chevrolet_Spark_GT_93c86 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',3). $this->getByteForPosition('00', 0) . $this->getByteForPosition('00',1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)/10),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Spark GT  ',
                'Eeprom 93c86',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $result = round((00));
        $hex2 = str_pad(dechex($result), 2, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => '000', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '000', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '000', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '000', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '000', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '000', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '000', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '000', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '000', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '000', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '000', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '000', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            
            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            
            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            
            ['row' => 'B0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
        
          
           
        ];
    }
}
