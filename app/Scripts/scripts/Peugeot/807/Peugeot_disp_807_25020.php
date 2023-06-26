<?php

namespace App\Scripts;

class Peugeot_disp_807_25020 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 3) . $this->getByteForPosition('00', 2). $this->getByteForPosition('00', 1). $this->getByteForPosition('00', 0);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)/ 10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                'Disp 807 ',
                'Eeprom 25020',
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
           
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)]
            
           
        ];
    }
}