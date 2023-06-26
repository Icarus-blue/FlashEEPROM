<?php

namespace App\Scripts;

class Chevrolet_Spark_2007_Mc68hc05h12 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('50', 8) . $this->getByteForPosition('50',9).$this->getByteForPosition('50',10);
        $number = ($hex);
         
        return [
            'result' => ($number),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chervolet Spark',
                'Micro Mc68hc05h12',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);
        return
         [

            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 4, 2)],

            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 4, 2)],

            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 4, 2)],

            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 4, 2)],

            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex, 4, 2)],

            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 4, 'value' => substr($hex, 4, 2)],

            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 4, 2)],

            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 4, 2)],

            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 4, 2)]
        
            
            
            

            
        ];
    }
}
