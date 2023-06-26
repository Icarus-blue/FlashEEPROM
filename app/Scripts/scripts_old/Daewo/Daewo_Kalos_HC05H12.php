<?php

namespace App\Scripts;

class Daewo_Kalos_HC05H12 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('50', 8) . $this->getByteForPosition('50',9). $this->getByteForPosition('50',10);
        $number = ($hex);
         
        return [
            'result' => $number,
            'image' => 'assets/Daewo.png',
            'texts' => [
                'Kalos  Doble clic en calcular',
                'para ejecutar --->Micro 65HC05H12',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);


        $hexa= $this->getByteForPosition('50', 8) ; $numbera = hexdec($hexa);
        $hexb= $this->getByteForPosition('50', 9) ;$numberb = hexdec($hexb);
        $hexc= $this->getByteForPosition('50', 10) ;$numberc = hexdec($hexc);
        $number2 = ($numbera+$numberb+$numberc+165);
        $hexx = str_pad(dechex($number2), 4, '0', STR_PAD_LEFT);
        
        return
         [

            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 3, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hexx, 2, 2)],
            
            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 3, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hexx, 2, 2)],

            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 3, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hexx, 2, 2)],

            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 3, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hexx, 2, 2)],
     
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 3, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hexx, 2, 2)],
           
            ['row' => '90', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 3, 2)],
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hexx, 2, 2)],

            ['row' => 'A0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 3, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hexx, 2, 2)],

            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 12, 'value' => substr($hex, 3, 2)],
            ['row' => 'B0', 'cell' => 13, 'value' => substr($hexx, 2, 2)],
            
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 3, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hexx, 2, 2)],

            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 3, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hexx, 2, 2)],

            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 3, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hexx, 2, 2)],

            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 3, 2)],
            ['row' => 'F0', 'cell' => 5, 'value' => substr($hexx, 2, 2)]






           ];
    }
}
