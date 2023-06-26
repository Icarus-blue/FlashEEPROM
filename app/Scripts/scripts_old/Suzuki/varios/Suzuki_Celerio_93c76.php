<?php
namespace App\Scripts; 
class Suzuki_Celerio_93c76 extends Script
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
                'Celerio 80-FF',
                'Eeprom 93c76',
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

        $result = round(($value/17));
        $hex3 = str_pad(dechex(255), 4, '0', STR_PAD_LEFT);

        
        return [


              
            ['row' => '00', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex3, 2, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex3, 2, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex3, 2, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex3, 2, 2)],
            
            ['row' =>'10', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' =>'10', 'cell' => 2, 'value' => substr($hex3, 2, 2)],
            ['row' =>'10', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' =>'10', 'cell' => 6, 'value' => substr($hex3, 2, 2)],
            ['row' =>'10', 'cell' => 8, 'value' => substr($hex3, 2, 2)],
            ['row' =>'10', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
            ['row' =>'10', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
            ['row' =>'10', 'cell' => 14, 'value' => substr($hex3, 2, 2)],

            ['row' =>'20', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' =>'20', 'cell' => 2, 'value' => substr($hex3, 2, 2)],
            ['row' =>'20', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' =>'20', 'cell' => 6, 'value' => substr($hex3, 2, 2)],
            ['row' =>'20', 'cell' => 8, 'value' => substr($hex3, 2, 2)],
            ['row' =>'20', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
            ['row' =>'20', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
            ['row' =>'20', 'cell' => 14, 'value' => substr($hex3, 2, 2)],

            ['row' =>'30', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' =>'30', 'cell' => 2, 'value' => substr($hex3, 2, 2)],
            ['row' =>'30', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' =>'30', 'cell' => 6, 'value' => substr($hex3, 2, 2)],
            ['row' =>'30', 'cell' => 8, 'value' => substr($hex3, 2, 2)],
            ['row' =>'30', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
            ['row' =>'30', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
            ['row' =>'30', 'cell' => 14, 'value' => substr($hex3, 2, 2)],
            
            ['row' =>'40', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' =>'40', 'cell' => 2, 'value' => substr($hex3, 2, 2)],
            ['row' =>'40', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' =>'40', 'cell' => 6, 'value' => substr($hex3, 2, 2)],
            ['row' =>'40', 'cell' => 8, 'value' => substr($hex3, 2, 2)],
            ['row' =>'40', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
            ['row' =>'40', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
            ['row' =>'40', 'cell' => 14, 'value' => substr($hex3, 2, 2)],

            ['row' =>'50', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' =>'50', 'cell' => 2, 'value' => substr($hex3, 2, 2)],
            ['row' =>'50', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' =>'50', 'cell' => 6, 'value' => substr($hex3, 2, 2)],
            ['row' =>'50', 'cell' => 8, 'value' => substr($hex3, 2, 2)],
            ['row' =>'50', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
            ['row' =>'50', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
            ['row' =>'50', 'cell' => 14, 'value' => substr($hex3, 2, 2)],

            ['row' =>'60', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' =>'60', 'cell' => 14, 'value' => substr($hex3, 2, 2)],
           

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
