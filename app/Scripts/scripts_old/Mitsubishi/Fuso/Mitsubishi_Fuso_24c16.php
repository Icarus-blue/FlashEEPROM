<?php

namespace App\Scripts;

class Mitsubishi_Fuso_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 11) . $this->getByteForPosition('10', 10);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/Mitsubishi.png',
            'texts' => [
                'Fuso 2012 ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
                $a = substr($hex, 0, 1);
                $b = substr($hex, 1, 1);
                $c = substr($hex, 2, 1);
                $d = substr($hex, 3, 1);
                $hexa = $d .$a ; 
                $hexa1 = $b .$c ;
        
        $result2 = round(65535-($value/16));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);
                $a = substr($hex2, 0, 1);
                $b = substr($hex2, 1, 1);
                $c = substr($hex2, 2, 1);
                $d = substr($hex2, 3, 1);
                $hexb = $d .$a ; 
                $hexb1 = $b .$c ;
                
        $result3 = round(65535-($value/8));
        $hex3 = str_pad(dechex($result3), 4, '0', STR_PAD_LEFT);
                $a = substr($hex3, 0, 1);
                $b = substr($hex3, 1, 1);
                $c = substr($hex3, 2, 1);
                $d = substr($hex3, 3, 1);
                $hexc = $d .$a ; 
                $hexc1 = $b .$c ;
        
        $result4 = round(65535-($value/4));
        $hex4 = str_pad(dechex($result4), 4, '0', STR_PAD_LEFT);
                $a = substr($hex4, 0, 1);
                $b = substr($hex4, 1, 1);
                $c = substr($hex4, 2, 1);
                $d = substr($hex4, 3, 1);
                $hexd = $d .$a ; 
                $hexd1 = $b .$c ;
        

        return
         [
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex3, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex3, 0, 2)],
            ['row' => '20', 'cell' => 0, 'value' => substr($hex4 , 2, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex4, 0, 2)],
            
            
            ['row' => '20', 'cell' => 2, 'value' => substr($hexa , 0, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hexa1 , 0, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hexb , 0, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hexb1 , 0, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hexc , 0, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hexc1 , 0, 2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hexd , 0, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hexd1 , 0, 2)],
            
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex3, 2, 2)],
            ['row' => '30', 'cell' => 0, 'value' => substr($hex4 , 0, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex4, 2, 2)],
            
            ['row' => '30', 'cell' => 2, 'value' => substr($hexa1 , 0, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hexa , 0, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hexb1 , 0, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hexb , 0, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hexc1 , 0, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hexc , 0, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hexd1 , 0, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hexd , 0, 2)],
            
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex3, 2, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 0, 'value' => substr($hex4 , 2, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex4, 0, 2)],
            
            ['row' => '40', 'cell' => 2, 'value' => substr($hexa , 0, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hexa1 , 0, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hexb , 0, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hexb1 , 0, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hexc , 0, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hexc1 , 0, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hexd , 0, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hexd1 , 0, 2)],
            
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex3, 2, 2)],
            ['row' => '50', 'cell' => 0, 'value' => substr($hex4 , 0, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex4, 2, 2)],
            
            ['row' => '50', 'cell' => 2, 'value' => substr($hexa1 , 0, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hexa , 0, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hexb1 , 0, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hexb , 0, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hexc1 , 0, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hexc , 0, 2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($hexd1 , 0, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hexd , 0, 2)],
        ];
    }
}
