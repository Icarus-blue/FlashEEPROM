<?php

namespace App\Scripts; 
class Baic_D20_2012_15_9S12HZ128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',1). $this->getByteForPosition('00', 4) . $this->getByteForPosition('00',8);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/baic.png',
            'texts' => [
                'D20 Dash 2012-15',
                'Nicro 9S12HZ128',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        $result2 = round((00));
        $hex2 = str_pad(($result2), 2, '0', STR_PAD_LEFT);

      
        
        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 0, 2)],

            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],

            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => '00', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '20', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '30', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '40', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '50', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '60', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
     
            ['row' => '70', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '80', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '90', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => 'C0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '100', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '100', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '110', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '110', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '120', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '120', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '130', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '130', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '140', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '140', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '140', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '150', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '150', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '150', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '150', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '160', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '160', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '160', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '170', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '170', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '170', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '170', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '180', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '180', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '180', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '180', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '190', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '190', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            
        ];
    }
}
