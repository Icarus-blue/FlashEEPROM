<?php

namespace App\Scripts;

class Pontiac_vibe_93c46 extends Script
{
    public function getResult()
    {
        $result = '';
        
        $hex = $this->getByteForPosition('00', 0) . $this->getByteForPosition('00',2)
            . $this->getByteForPosition('00', 4) ;
        
        for ($i = 0; $i < strlen($hex); $i++) {
            $number = 15 - hexdec(substr($hex, $i, 1));
            $result .= substr($number, -1);
        }
        
        return [
            'result' => $result,
            'image' => 'assets/Pontiac.png',
            'texts' => [
                'vibe ',
                'Eeprom 93C46',
                'Flasheeprom'
            ],
            'inputlength' => 6,
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = '';
        $text = substr('000000' . $value, -6);
        
        for ($i = 0; $i < strlen($text); $i++) {
            $result .= dechex(15 - substr($text, $i, 1));
        }
        
        $c = substr($result, 0, 2);
        $b = substr($result, 2, 2);
        $a = substr($result, 4, 2);
      //  $d = substr($result, 6, 2);
        
        return [
            ['row' => '00', 'cell' => 0, 'value' => $c],
            ['row' => '00', 'cell' => 2, 'value' => $b],
            ['row' => '00', 'cell' => 4, 'value' => $a],
            ['row' => '00', 'cell' => 6, 'value' => $c],
            ['row' => '00', 'cell' => 8, 'value' => $b],
            ['row' => '00', 'cell' => 9, 'value' => $a],
            ['row' => '00', 'cell' => 10, 'value' => $c],
            ['row' => '00', 'cell' => 11, 'value' => $b],
            ['row' => '00', 'cell' => 12, 'value' => $a],
            ['row' => '00', 'cell' => 13, 'value' => $c],
            ['row' => '00', 'cell' => 14, 'value' => $b],
            ['row' => '00', 'cell' => 15, 'value' => $a],

            ['row' => '10', 'cell' => 0, 'value' => $c],
            ['row' => '10', 'cell' => 1, 'value' => $b],
            ['row' => '10', 'cell' => 2, 'value' => $a],
            ['row' => '10', 'cell' => 3, 'value' => $c],
        ];
    }
}
