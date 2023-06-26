<?php

namespace App\Scripts;

class Chevrolet_N300_93cL66A extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 0) . $this->getByteForPosition('00',1).$this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'N300 2015-2018    ',
                'Eeprom 25020',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = ((10*$value));
        $hex = str_pad(dechex($result),6, '0', STR_PAD_LEFT);
            $a = substr($hex, 0, 2);
            $b = substr($hex, 2, 2);
            $c = substr($hex, 4, 2);
                   $a1 =hexdec($a) ;
                   $a2 =hexdec($b) ;
                   $a3 =hexdec($c) ;
                   
                   $b1 = ($a1 + $a2 + $a3) ; 
                   
                   $c1 = str_pad(dechex($b1),4, '0', STR_PAD_LEFT);
                   $bb = (85) ;
                   $b2 = ($a1 ^$a2 ^$a3 )  ; 
                   $b3 = ( $b1);
                   $b4 = ($b2);
                   $b5= dechex($b3 ^$b4 ^ $bb) ;

        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 4, 2 )],
                    ['row' => '00', 'cell' => 3, 'value' => substr($c1, 2, 2)],
                    ['row' => '00', 'cell' => 4, 'value' => $b5],
        
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 4, 2)],
                     ['row' => '00', 'cell' => 8, 'value' => substr($c1, 2, 2)],
                     ['row' => '00', 'cell' => 9, 'value' => $b5],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            
                    ['row' => '00', 'cell' => 13, 'value' => substr($c1, 2, 2)],
                    ['row' => '00', 'cell' => 14, 'value' => $b5],
                    
                    
            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 4, 2 )],
                    ['row' => '100', 'cell' => 3, 'value' => substr($c1, 2, 2)],
                    ['row' => '100', 'cell' => 4, 'value' => $b5],
        
            ['row' => '100', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 7, 'value' => substr($hex, 4, 2)],
                 ['row' => '100', 'cell' => 8, 'value' => substr($c1, 2, 2)],
                 ['row' => '100', 'cell' => 9, 'value' => $b5],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            
                ['row' => '100', 'cell' => 13, 'value' => substr($c1, 2, 2)],
                    ['row' => '100', 'cell' => 14, 'value' => $b5],         
                    
        ];
    }
}
