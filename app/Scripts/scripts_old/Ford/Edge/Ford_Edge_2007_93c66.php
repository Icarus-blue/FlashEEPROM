<?php

namespace App\Scripts;

class Ford_Edge_2007_93c66 extends Script
{
    public function getResult()
    {
        $result = '';
        
        $hex = $this->getByteForPosition('60', 5) . $this->getByteForPosition('60',4)
            . $this->getByteForPosition('60', 3) . $this->getByteForPosition('60', 2);
        
        for ($i = 0; $i < strlen($hex); $i++) {
            $number = 15 - hexdec(substr($hex, $i, 1));
            $result .= substr($number, -1);
        }
        
        return [
            'result' => $result,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Edge 2007',
                'Eeprom 93C66',
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
            $result .= dechex(15 - substr($text, $i, 1));
        }
        
        $a = substr($result, 0, 2);
        $b = substr($result, 2, 2);
        $c = substr($result, 4, 2);
        $d = substr($result, 6, 2);
        
        return [
            ['row' => '60', 'cell' => 2, 'value' => $d],
            ['row' => '60', 'cell' => 3, 'value' => $c],
            ['row' => '60', 'cell' => 4, 'value' => $b],
            ['row' => '60', 'cell' => 5, 'value' => $a],

            ['row' => '60', 'cell' => 6, 'value' => $d],
            ['row' => '60', 'cell' => 7, 'value' => $c],
            ['row' => '60', 'cell' => 8, 'value' => $b],
            ['row' => '60', 'cell' => 9, 'value' => $a],

            ['row' => '60', 'cell' => 10, 'value' => $d],
            ['row' => '60', 'cell' => 11, 'value' => $c],
            ['row' => '60', 'cell' => 12, 'value' => $b],
            ['row' => '60', 'cell' => 13, 'value' => $a]
        ];
    }
}
