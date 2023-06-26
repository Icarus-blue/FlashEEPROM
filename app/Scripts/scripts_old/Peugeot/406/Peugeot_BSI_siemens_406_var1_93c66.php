<?php

namespace App\Scripts;

class Peugeot_BSI_siemens_406_var1_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('40',5). $this->getByteForPosition('40',2) . $this->getByteForPosition('40',3);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                'siemens bsi 406',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);

        $result2 = round(4294967295-($value*10));
        $hex2 = str_pad(dechex($result2), 8, '0', STR_PAD_LEFT);

        
        return
         [
            
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 6, 2)],
         
        ];
    }
}
