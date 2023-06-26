<?php
namespace App\Scripts;
class Dongfeng_DFSK_24C04 extends Script
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
            'image' => 'assets/Dongfeng.png',
            'texts' => [
                'DFSK',
                'Eeprom 24C04',
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
            
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 5, 1)],
            
            ['row' => '20', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '30', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 5, 1)],
            
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '60', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 5, 1)],
            
            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => 'B0', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => 'B0', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => 'B0', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 5, 1)],
            
            ['row' => 'C0', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => 'D0', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 5, 1)],
            
            
           
        ];
    }
}
