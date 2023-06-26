<?php

namespace App\Scripts;

class Lexus_LS460_New_Denso_93C56 extends Script
{
    public function getResult()
    {
        $result = '';
        
        $hex = $this->getByteForPosition('60', 5) . $this->getByteForPosition('60',4)
            . $this->getByteForPosition('60', 3). $this->getByteForPosition('60', 2)  ;
        
        for ($i = 0; $i < strlen($hex); $i++) {
            $number = 15 - hexdec(substr($hex, $i, 1));
            $result .= substr($number, -1);
        }
        
        return [
            'result' => $result,
            'image' => 'assets/Lexus.png',
            'texts' => [
                'LS 460 New Denso',
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
            $result .= dechex(15 - substr($text, $i, 1));
        }
        
        $d = substr($result, 0, 2);
        $c = substr($result, 2, 2);
        $b = substr($result, 4, 2);
        $a = substr($result, 6, 2);
        
        return [
            ['row' => '60', 'cell' => 5, 'value' => $d],
            ['row' => '60', 'cell' => 4, 'value' => $c],
            ['row' => '60', 'cell' => 3, 'value' => $b],
            ['row' => '60', 'cell' => 2, 'value' => $a],

            ['row' => '60', 'cell' => 9, 'value' => $d],
            ['row' => '60', 'cell' => 8, 'value' => $c],
            ['row' => '60', 'cell' => 7, 'value' => $b],
            ['row' => '60', 'cell' => 6, 'value' => $a],

            ['row' => '60', 'cell' => 13, 'value' => $d],
            ['row' => '60', 'cell' => 12, 'value' => $c],
            ['row' => '60', 'cell' => 11, 'value' => $b],
            ['row' => '60', 'cell' => 10, 'value' => $a]
        ];
    }
}