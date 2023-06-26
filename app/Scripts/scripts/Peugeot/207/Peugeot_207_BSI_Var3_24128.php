<?php

namespace App\Scripts;

class Peugeot_207_BSI_Var3_24128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('3F0',8). $this->getByteForPosition('3F0', 9) . $this->getByteForPosition('3F0',10). $this->getByteForPosition('3F0',11);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '207 BSI VAR2',
                'Eeprom 24128',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result2 = round(4294967295-($value*10));
        $hex2 = str_pad(dechex($result2), 8, '0', STR_PAD_LEFT);

        
        return
         [

            ['row' => '4E0', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '4E0', 'cell' => 15, 'value' => substr($hex2, 2, 2)],
            ['row' => '4F0', 'cell' => 0, 'value' => substr($hex2, 4, 2)],
            ['row' => '4F0', 'cell' => 1, 'value' => substr($hex2, 6, 2)],

            ['row' => '4F0', 'cell' => 0, 'value' => substr($hex2, 4, 2)],
            ['row' => '4F0', 'cell' => 1, 'value' => substr($hex2, 6, 2)],

            ['row' => '4F0', 'cell' => 4, 'value' => substr($hex2, 4, 2)],
            ['row' => '4F0', 'cell' => 5, 'value' => substr($hex2, 6, 2)],
            ['row' => '4F0', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '4F0', 'cell' => 7, 'value' => substr($hex2, 6, 2)],

            ['row' => '4F0', 'cell' => 10, 'value' => substr($hex2, 4, 2)],
            ['row' => '4F0', 'cell' => 11, 'value' => substr($hex2, 6, 2)],
            ['row' => '4F0', 'cell' => 12, 'value' => substr($hex2, 4, 2)],
            ['row' => '4F0', 'cell' => 13, 'value' => substr($hex2, 6, 2)],

            ['row' => '500', 'cell' => 0, 'value' => substr($hex2, 0, 2)],
            ['row' => '500', 'cell' => 1, 'value' => substr($hex2, 2, 2)],
            ['row' => '500', 'cell' => 2, 'value' => substr($hex2, 4, 2)],
            ['row' => '500', 'cell' => 3, 'value' => substr($hex2, 6, 2)],
            ['row' => '500', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '500', 'cell' => 7, 'value' => substr($hex2, 2, 2)],
            ['row' => '500', 'cell' => 8, 'value' => substr($hex2, 4, 2)],
            ['row' => '500', 'cell' => 9, 'value' => substr($hex2, 6, 2)],
            ['row' => '500', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '500', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '500', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '500', 'cell' => 15, 'value' => substr($hex2, 6, 2)],

            ['row' => '510', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '510', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => '510', 'cell' => 4, 'value' => substr($hex2, 4, 2)],
            ['row' => '510', 'cell' => 5, 'value' => substr($hex2, 6, 2)],

            ['row' => '510', 'cell' => 8, 'value' => substr($hex2, 0, 2)],
            ['row' => '510', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
            ['row' => '510', 'cell' => 10, 'value' => substr($hex2, 4, 2)],
            ['row' => '510', 'cell' => 11, 'value' => substr($hex2, 6, 2)],
          
         
        ];
    }
}
