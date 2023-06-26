<?php

namespace App\Scripts;

class Suzuki_Presso_95c160_2022 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('150', 1) . $this->getByteForPosition('150', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number* 25.5),
            'image' => 'assets/Suzuki.png',
            'texts' => [
                'grand nomade 2008 ',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/25.5));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '150', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            
            
            
            


           
        ];
    }
}
