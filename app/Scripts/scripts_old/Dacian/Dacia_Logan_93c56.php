<?php
namespace App\Scripts;

class Dacia_Logan_93c56 extends Script
{
    
    public function getResult()
    {
        $hex = $this->getByteForPosition('D0', 4) . $this->getByteForPosition('D0', 5) ;
        $number = hexdec($hex);
        
        return [
            'result' => round((65535-$number)),
            'image' => 'assets/Dacia.bmp',
            'texts' => [
                'Dacia  Logan',
                'Eeprom 93c56',
                'FlashEeprom'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result2 = round(($value));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        $result3 = round(($value/70000));
        $hex3 = str_pad(dechex($result3), 4, '0', STR_PAD_LEFT);

        
        return [

            
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex3, 0, 2)],

            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex3, 0, 2)],

            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
            ['row' => 'E0', 'cell' => 8, 'value' => substr($hex2, 0, 2)],

            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex3, 0, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex3, 0, 2)],

            ['row' => 'D0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex2, 2, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex2, 0, 2)],

            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex3, 0, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex3, 0, 2)],

            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hex2, 0, 2)],

            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex3, 0, 2)]

          


        ];
    }
}
