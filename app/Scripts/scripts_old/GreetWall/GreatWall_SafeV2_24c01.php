<?php

namespace App\Scripts;

class GreatWall_SafeV2_24c01 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('20', 2) . $this->getByteForPosition('20', 3).  $this->getByteForPosition('20', 4);
        $number = ($hex);
         
        return [
            'result' => (($number)),
            'image' => 'assets/GreetWall.png',
            'texts' => [
                'Safe v2',
                'Eeprom 24c01',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 4, 2)],


            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 4, 2)],


            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex, 4, 2)],

            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 4, 2)],


            
        ];
    }
}
