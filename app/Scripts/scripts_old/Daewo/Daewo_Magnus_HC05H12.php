<?php

namespace App\Scripts;

class Daewo_Magnus_HC05H12 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('40', 0) . $this->getByteForPosition('40',1). $this->getByteForPosition('40',2);
        $number = ($hex);
         
        return [
            'result' => $number,
            'image' => 'assets/Daewo.png',
            'texts' => [
                'Magnus  Doble clic en calcular',
                'para ejecutar --->Micro 65HC05H12',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);


        $hexa= $this->getByteForPosition('40', 0) ; $numbera = hexdec($hexa);
        $hexb= $this->getByteForPosition('40', 1) ;$numberb = hexdec($hexb);
        $hexc= $this->getByteForPosition('40', 2) ;$numberc = hexdec($hexc);
        $number2 = ($numbera+$numberb+$numberc+165);
        $hexx = str_pad(dechex($number2), 4, '0', STR_PAD_LEFT);
        
        return
         [

            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 3, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hexx, 2, 2)],
            
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 3, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hexx, 2, 2)],

            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 3, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hexx, 2, 2)],

            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 3, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hexx, 2, 2)],
     
            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 3, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hexx, 2, 2)],
           
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 3, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hexx, 2, 2)],

            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 8, 'value' => substr($hex, 3, 2)],
            ['row' => 'A0', 'cell' => 9, 'value' => substr($hexx, 2, 2)],

            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 9, 'value' => substr($hex, 3, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hexx, 2, 2)],
            
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 3, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hexx, 2, 2)],

            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 3, 2)],
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hexx, 2, 2)],

            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 3, 2)],
            ['row' => 'E0', 'cell' => 13, 'value' => substr($hexx, 2, 2)]

           ];
    }
}
