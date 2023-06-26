<?php

namespace App\Scripts;

class Mazda_Premacy_Var1_93c56 extends Script
{
    public function getResult()
    {
        $result = '';
        
        $hex = $this->getByteForPosition('10'  , 1) . $this->getByteForPosition('10'  ,0);
        
        for ($i = 0; $i < strlen($hex); $i++) {
            $number = 3 - hexdec(substr($hex, $i, 1));
            $result .= substr($number, -1);
        }
        
        return [
            'result' => $result*100,
            'image' => 'assets/Mazda.png',
            'texts' => [
                'Premancy v1 ',
                'Eeprom 93C56',
                'Flasheeprom'
            ],
            'inputlength' => 8,
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = '';
        $text = substr('00000000' . $value, -8);
        
        for ($i = 0; $i < strlen($text); $i++) {
            $result .= dechex(3 + substr($text, $i, 1));
        }
        
        $d = substr($result, 0, 2);
        $c = substr($result, 2, 2);
        $b = substr($result, 4, 2);
        $a = substr($result, 6, 2);
        
        return [

            ['row' => '00', 'cell' => 0, 'value' => $b],
            ['row' => '00', 'cell' => 1, 'value' => $c],
            ['row' => '00', 'cell' => 2, 'value' => $b],
            ['row' => '00', 'cell' => 3, 'value' => $c],
            ['row' => '00', 'cell' => 4, 'value' => $b],
            ['row' => '00', 'cell' => 5, 'value' => $c],
            ['row' => '00', 'cell' => 6, 'value' => $b],
            ['row' => '00', 'cell' => 7, 'value' => $c],
            ['row' => '00', 'cell' => 8, 'value' => $b],
            ['row' => '00', 'cell' => 9, 'value' => $c],
            ['row' => '00', 'cell' => 10, 'value' => $b],
            ['row' => '00', 'cell' => 11, 'value' => $c],
            ['row' => '00', 'cell' => 12, 'value' => $b],
            ['row' => '00', 'cell' => 13, 'value' => $c],
            ['row' => '00', 'cell' => 14, 'value' => $b],
            ['row' => '00', 'cell' => 15, 'value' => $c],

            ['row' => '60', 'cell' => 0, 'value' => $b],
            ['row' => '60', 'cell' => 1, 'value' => $c],
            ['row' => '60', 'cell' => 2, 'value' => $b],
            ['row' => '60', 'cell' => 3, 'value' => $c],

            ['row' => '50'  , 'cell' => 0, 'value' => $b],
            ['row' => '50'  , 'cell' => 1, 'value' => $c],
            ['row' => '50'  , 'cell' => 2, 'value' => $b],
            ['row' => '50'  , 'cell' => 3, 'value' => $c],
            ['row' => '50'  , 'cell' => 4, 'value' => $b],
            ['row' => '50'  , 'cell' => 5, 'value' => $c],
            ['row' => '50'  , 'cell' => 6, 'value' => $b],
            ['row' => '50'  , 'cell' => 7, 'value' => $c],
            ['row' => '50'  , 'cell' => 8, 'value' => $b],
            ['row' => '50'  , 'cell' => 9, 'value' => $c],
            ['row' => '50'  , 'cell' => 10, 'value' => $b],
            ['row' => '50'  , 'cell' => 11, 'value' => $c],
            ['row' => '50'  , 'cell' => 12, 'value' => $b],
            ['row' => '50'  , 'cell' => 13, 'value' => $c],
            ['row' => '50'  , 'cell' => 14, 'value' => $b],
            ['row' => '50'  , 'cell' => 15, 'value' => $c],
           
            ['row' => '40'  , 'cell' => 0, 'value' => $b],
            ['row' => '40'  , 'cell' => 1, 'value' => $c],
            ['row' => '40'  , 'cell' => 2, 'value' => $b],
            ['row' => '40'  , 'cell' => 3, 'value' => $c],
            ['row' => '40'  , 'cell' => 4, 'value' => $b],
            ['row' => '40'  , 'cell' => 5, 'value' => $c],
            ['row' => '40'  , 'cell' => 6, 'value' => $b],
            ['row' => '40'  , 'cell' => 7, 'value' => $c],
            ['row' => '40'  , 'cell' => 8, 'value' => $b],
            ['row' => '40'  , 'cell' => 9, 'value' => $c],
            ['row' => '40'  , 'cell' => 10, 'value' => $b],
            ['row' => '40'  , 'cell' => 11, 'value' => $c],
            ['row' => '40'  , 'cell' => 12, 'value' => $b],
            ['row' => '40'  , 'cell' => 13, 'value' => $c],
            ['row' => '40'  , 'cell' => 14, 'value' => $b],
            ['row' => '40'  , 'cell' => 15, 'value' => $c],
            
            ['row' => '30'  , 'cell' => 0, 'value' => $b],
            ['row' => '30'  , 'cell' => 1, 'value' => $c],
            ['row' => '30'  , 'cell' => 2, 'value' => $b],
            ['row' => '30'  , 'cell' => 3, 'value' => $c],
            ['row' => '30'  , 'cell' => 4, 'value' => $b],
            ['row' => '30'  , 'cell' => 5, 'value' => $c],
            ['row' => '30'  , 'cell' => 6, 'value' => $b],
            ['row' => '30'  , 'cell' => 7, 'value' => $c],
            ['row' => '30'  , 'cell' => 8, 'value' => $b],
            ['row' => '30'  , 'cell' => 9, 'value' => $c],
            ['row' => '30'  , 'cell' => 10, 'value' => $b],
            ['row' => '30'  , 'cell' => 11, 'value' => $c],
            ['row' => '30'  , 'cell' => 12, 'value' => $b],
            ['row' => '30'  , 'cell' => 13, 'value' => $c],
            ['row' => '30'  , 'cell' => 14, 'value' => $b],
            ['row' => '30'  , 'cell' => 15, 'value' => $c],

            
            ['row' => '20'  , 'cell' => 0, 'value' => $b],
            ['row' => '20'  , 'cell' => 1, 'value' => $c],
            ['row' => '20'  , 'cell' => 2, 'value' => $b],
            ['row' => '20'  , 'cell' => 3, 'value' => $c],
            ['row' => '20'  , 'cell' => 4, 'value' => $b],
            ['row' => '20'  , 'cell' => 5, 'value' => $c],
            ['row' => '20'  , 'cell' => 6, 'value' => $b],
            ['row' => '20'  , 'cell' => 7, 'value' => $c],
            ['row' => '20'  , 'cell' => 8, 'value' => $b],
            ['row' => '20'  , 'cell' => 9, 'value' => $c],
            ['row' => '20'  , 'cell' => 10, 'value' => $b],
            ['row' => '20'  , 'cell' => 11, 'value' => $c],
            ['row' => '20'  , 'cell' => 12, 'value' => $b],
            ['row' => '20'  , 'cell' => 13, 'value' => $c],
            ['row' => '20'  , 'cell' => 14, 'value' => $b],
            ['row' => '20'  , 'cell' => 15, 'value' => $c],


            ['row' => '10'  , 'cell' => 0, 'value' => $b],
            ['row' => '10'  , 'cell' => 1, 'value' => $c],
            ['row' => '10'  , 'cell' => 2, 'value' => $b],
            ['row' => '10'  , 'cell' => 3, 'value' => $c],
            ['row' => '10'  , 'cell' => 4, 'value' => $b],
            ['row' => '10'  , 'cell' => 5, 'value' => $c],
            ['row' => '10'  , 'cell' => 6, 'value' => $b],
            ['row' => '10'  , 'cell' => 7, 'value' => $c],
            ['row' => '10'  , 'cell' => 8, 'value' => $b],
            ['row' => '10'  , 'cell' => 9, 'value' => $c],
            ['row' => '10'  , 'cell' => 10, 'value' => $b],
            ['row' => '10'  , 'cell' => 11, 'value' => $c],
            ['row' => '10'  , 'cell' => 12, 'value' => $b],
            ['row' => '10'  , 'cell' => 13, 'value' => $c],
            ['row' => '10'  , 'cell' => 14, 'value' => $b],
            ['row' => '10'  , 'cell' => 15, 'value' => $c],
            
         
            

        ];
    }
}
