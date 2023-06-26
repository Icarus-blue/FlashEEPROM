<?php

namespace App\Scripts;

class Peugeot_207_BSI_Var4_24128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('4C0',0). $this->getByteForPosition('4C0', 1) . $this->getByteForPosition('4C0',2). $this->getByteForPosition('4C0',3);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '207 BSI VAR4',
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

            ['row' => '4C0', 'cell' => 0, 'value' => substr($hex2, 0, 2)],
            ['row' => '4C0', 'cell' => 1, 'value' => substr($hex2, 2, 2)],
            ['row' => '4C0', 'cell' => 2, 'value' => substr($hex2, 4, 2)],
            ['row' => '4C0', 'cell' => 3, 'value' => substr($hex2, 6, 2)],

            ['row' => '4C0', 'cell' => 6, 'value' => substr($hex2, 0, 2)],
            ['row' => '4C0', 'cell' => 7, 'value' => substr($hex2, 2, 2)],
            ['row' => '4C0', 'cell' => 8, 'value' => substr($hex2, 4, 2)],
            ['row' => '4C0', 'cell' => 9, 'value' => substr($hex2, 6, 2)],

            ['row' => '4C0', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '4C0', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '4C0', 'cell' => 14, 'value' => substr($hex2, 4, 2)],
            ['row' => '4C0', 'cell' => 15, 'value' => substr($hex2, 6, 2)],


            ['row' => '4D0', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '4D0', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => '4D0', 'cell' => 4, 'value' => substr($hex2, 4, 2)],
            ['row' => '4D0', 'cell' => 5, 'value' => substr($hex2, 6, 2)],

            ['row' => '4D0', 'cell' => 8, 'value' => substr($hex2, 0, 2)],
            ['row' => '4D0', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
            ['row' => '4D0', 'cell' => 10, 'value' => substr($hex2, 4, 2)],
            ['row' => '4D0', 'cell' => 11, 'value' => substr($hex2, 6, 2)],

            ['row' => '4D0', 'cell' => 14, 'value' => substr($hex2, 0, 2)],
            ['row' => '4D0', 'cell' => 15, 'value' => substr($hex2, 2, 2)],
            ['row' => '4E0', 'cell' => 0, 'value' => substr($hex2, 4, 2)],
            ['row' => '4E0', 'cell' => 1, 'value' => substr($hex2, 6, 2)],

            ['row' => '4E0', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '4E0', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => '4E0', 'cell' => 6, 'value' => substr($hex2, 4, 2)],
            ['row' => '4E0', 'cell' => 7, 'value' => substr($hex2, 6, 2)],

            ['row' => '4E0', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
            ['row' => '4E0', 'cell' => 11, 'value' => substr($hex2, 2, 2)],
            ['row' => '4E0', 'cell' => 12, 'value' => substr($hex2, 4, 2)],
            ['row' => '4E0', 'cell' => 13, 'value' => substr($hex2, 6, 2)],


           
        ];
    }
}
