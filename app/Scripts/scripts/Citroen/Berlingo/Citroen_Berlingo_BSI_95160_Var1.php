<?php
namespace App\Scripts;

class Citroen_Berlingo_BSI_95160_Var1 extends Script
{
    
    public function getResult()
    {
        $hex = $this->getByteForPosition('120', 4) . $this->getByteForPosition('120', 3) . $this->getByteForPosition('120', 2) . $this->getByteForPosition('120',1);
        $number = hexdec($hex);
        
        return [
            'result' => round((4294967295-$number) /2560),
            'image' => 'assets/Citroen.bmp',
            'texts' => [
                'Citroen Berlingo BSI var1',
                'Eeprom 95160',
                'FlashEeprom'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(4294967295-($value*2560));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        
        return [


            ['row' => '110', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 5, 'value' => substr($hex, 3, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 8, 'value' => substr($hex, 0, 2)],

            ['row' => '110', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex, 3, 2)],
            ['row' => '110', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 14, 'value' => substr($hex, 0, 2)],

            ['row' => '120', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '120', 'cell' => 1, 'value' => substr($hex, 3, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 4, 'value' => substr($hex, 0, 2)],

            ['row' => '120', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex, 3, 2)],
            ['row' => '120', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex, 0, 2)]

        ];
    }
}
