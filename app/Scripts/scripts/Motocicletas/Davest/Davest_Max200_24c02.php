<?php
namespace App\Scripts;
class Davest_Max200_24c02 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('00', 0);
        $a =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 1);
        $b =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 2);
        $c =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 3);
        $d =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 4);
        $e =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 5);
        $f =substr($byte, -1);

       
        $hex =  $f . $e . $d. $c. $b . $a;
        $number = ($hex); 

        return [
            'result' => (($number)),
            'image' => 'assets/Davest.png',
            'texts' => [
                'Davest Max 200',
                'Eeprom 24C02',
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
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 0, 1)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 1, 1)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 2, 1)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 3, 1)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 4, 1)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 5, 1)],

            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 0, 1)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 1, 1)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 2, 1)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 3, 1)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 4, 1)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 5, 1)],
            
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => 'C0', 'cell' => 13, 'value' => substr($hex, 0, 1)],
            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex, 1, 1)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 2, 1)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 3, 1)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 4, 1)],
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 5, 1)],
           
        ];
    }
}
