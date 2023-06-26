<?php
namespace App\Scripts;
class suzuki_Alto_2017_93c86 extends Script
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
            'image' => 'assets/Suzuki.png',
            'texts' => [
                'Cami ',
                'Eeprom 93C46',
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
        
        $hex = str_pad(dechex(4294967295), 8, '0', STR_PAD_LEFT);
        return [
            
            ['row' => '00', 'cell' => 0, 'value' => $hex],
            ['row' => '00', 'cell' => 4, 'value' => $hex],
            ['row' => '00', 'cell' => 8, 'value' => $hex],
            ['row' => '00', 'cell' => 12, 'value' => $hex],
            
            ['row' => '10', 'cell' => 0, 'value' => $hex],
            ['row' => '10', 'cell' => 4, 'value' => $hex],
            ['row' => '10', 'cell' => 8, 'value' => $hex],
            ['row' => '10', 'cell' => 12, 'value' => $hex],
            
            ['row' => '20', 'cell' => 0, 'value' => $hex],
            ['row' => '20', 'cell' => 4, 'value' => $hex],
            ['row' => '20', 'cell' => 8, 'value' => $hex],
            ['row' => '20', 'cell' => 12, 'value' => $hex],
            
            ['row' => '30', 'cell' => 0, 'value' => $hex],
            ['row' => '30', 'cell' => 4, 'value' => $hex],
            ['row' => '30', 'cell' => 8, 'value' => $hex],
            ['row' => '30', 'cell' => 12, 'value' => $hex],
            
            
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
