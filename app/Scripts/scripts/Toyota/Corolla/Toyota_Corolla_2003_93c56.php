<?php

namespace App\Scripts;

class Toyota_Corolla_2003_93c56 extends Script
{
    public function getResult()
    {
        $result = '';
        
        $hex = $this->getByteForPosition('60', 5) . $this->getByteForPosition('60',4)
            . $this->getByteForPosition('60', 3). $this->getByteForPosition('60', 2)  ;
        
        for ($i = 0; $i < strlen($hex); $i++) {
            $number = 15 - hexdec(substr($hex, $i, 1));
            $result .= substr($number, -1);
        }
        
        return [
            'result' => $result,
            'image' => 'assets/Toyota.png',
            'texts' => [
                'Corolla 2003',
                'Eeprom 93C56',
                'Flasheeprom'
            ],
            'inputlength' => 8,
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 2, 2)]
            
            


           
        ];
    }
}
