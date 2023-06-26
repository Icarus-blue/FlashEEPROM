<?php

namespace App\Scripts;

class Fiat_Scudo_05H12 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('40', 2) . $this->getByteForPosition('40',3). $this->getByteForPosition('40',4);
        $number = ($hex);
        
        return [
            'result' => $number,
            'image' => 'assets/Fiat.png',
            'texts' => [
                'Scudo',
                'Eeprom 68HC05H12',
                'Flasheeprom'
            ],
            'inputlength' => 6,
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);

        $result = '';
        $text = substr('00000000' . $value, -6);
        
        for ($i = 0; $i < strlen($text); $i++) {
            $result .= dechex(15 - substr($text, $i, 1));
        }
        
        $a = substr($result, 0, 2);
        $b = substr($result, 2, 2);
        $c = substr($result, 4, 2);
        
        return [
           
            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 9, 'value' => $a],
            ['row' => '30', 'cell' => 10, 'value' => $b],
            ['row' => '30', 'cell' => 11, 'value' => $c],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 15, 'value' => $a],

            ['row' => '40', 'cell' => 0, 'value' => $b],
            ['row' => '40', 'cell' => 1, 'value' => $c],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 5, 'value' => $a],
            ['row' => '40', 'cell' => 6, 'value' => $b],
            ['row' => '40', 'cell' => 7, 'value' => $c],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 11, 'value' => $a],
            ['row' => '40', 'cell' => 12, 'value' => $b],
            ['row' => '40', 'cell' => 13, 'value' => $c],

            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 1, 'value' => $a],
            ['row' => '50', 'cell' => 2, 'value' => $b],
            ['row' => '50', 'cell' => 3, 'value' => $c],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 7, 'value' => $a],
            ['row' => '50', 'cell' => 8, 'value' => $b],
            ['row' => '50', 'cell' => 9, 'value' => $c],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 13, 'value' => $a],
            ['row' => '50', 'cell' => 14, 'value' => $b],
            ['row' => '50', 'cell' => 15, 'value' => $c],

            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 3, 'value' => $a],
            ['row' => '60', 'cell' => 4, 'value' => $b],
            ['row' => '60', 'cell' => 5, 'value' => $c],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 9, 'value' => $a],
            ['row' => '60', 'cell' => 10, 'value' => $b],
            ['row' => '60', 'cell' => 11, 'value' => $c],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 15, 'value' => $a],

            ['row' => '70', 'cell' => 0, 'value' => $b],
            ['row' => '70', 'cell' => 1, 'value' => $c],



        ];
    }
}
