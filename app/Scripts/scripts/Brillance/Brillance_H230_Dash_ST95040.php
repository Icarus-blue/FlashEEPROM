<?php
namespace App\Scripts;
class Brillance_H230_Dash_ST95040 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('00', 1);
        $a =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 2);
        $b =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 3);
        $c =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 4);
        $d =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 5);
        $e =substr($byte, -1);

        $byte = $this->getByteForPosition('00', 6);
        $f =substr($byte, -1);

       
        $hex =  $a . $b . $c. $d. $e . $f;
        $number = ($hex); 

        return [
            'result' => (($number)),
            'image' => 'assets/BRILLANCE.png',
            'texts' => [
                'H230',
                'Eeprom ST95040',
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
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 5, 1)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 4, 1)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 3, 1)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 1, 1)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 1)],
            
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 5, 1)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex, 4, 1)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 3, 1)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 1, 1)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 0, 1)],

            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 5, 1)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 4, 1)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 3, 1)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 2, 1)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 1, 1)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 0, 1)],

           
           
        ];
    }
}
