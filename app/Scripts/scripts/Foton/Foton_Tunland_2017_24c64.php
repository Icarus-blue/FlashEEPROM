<?php
namespace App\Scripts;
class Foton_Tunland_2017_24c64 extends Script
{
    public function getResult()
    {$hex = $this->getByteForPosition('40', 0) . $this->getByteForPosition('40', 1);
        $number = hexdec($hex);
         
        return [
            'result' => (round(65535-$number)*32),
            'image' => 'assets/foton.png',
            'texts' => [
                'L200 2010 - 12 ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(65535-($value/32));
        $restante = round(($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
               
        $a = substr($hex, 0, 1);
        $b = substr($hex, 1, 1);
        $c = substr($hex, 2, 1);
        $d = substr($hex, 3, 1);
        $resultA = $b.$c. $d . $a; 
        $resultb = $d.$a. $b . $c; 
        
        
        $resultado2= (($result-($value/32))); 
        $hex2 = str_pad(dechex($resultado2), 4, '0', STR_PAD_LEFT);
        
        $a2 = substr($hex2, 0, 1);
        $b2 = substr($hex2, 1, 1);
        $c2 = substr($hex2, 2, 1);
        $d2 = substr($hex2, 3, 1);
        $resultA2 = $b2.$c2. $d2 . $a2;   
        $resultb2 = $d2.$a2. $b2 . $c2; 
                
        $resultado3= (($result- (($value/32)*3))); 
        $hex3 = str_pad(dechex($resultado3), 4, '0', STR_PAD_LEFT);  
        
        $a3 = substr($hex3, 0, 1);
        $b3 = substr($hex3, 1, 1);
        $c3 = substr($hex3, 2, 1);
        $d3 = substr($hex3, 3, 1);
        $resultA3 = $b3.$c3. $d3 . $a3;     
        $resultb3 = $d3.$a3. $b3 . $c3; 
        
        $resultado4= ($result-(($value/32)*7)); 
        $hex4 = str_pad(dechex($resultado4), 4, '0', STR_PAD_LEFT); 
        
        $a4 = substr($hex4, 0, 1);
        $b4 = substr($hex4, 1, 1);
        $c4 = substr($hex4, 2, 1);
        $d4 = substr($hex4, 3, 1);
        $resultA4 = $b4.$c4. $d4 . $a4;    
        $resultb4 = $d4.$a4. $b4 . $c4; 
        return
         [
            
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex3, 2, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex4, 0, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex4, 2, 2)],
                   
            ['row' => '40', 'cell' => 8, 'value' =>  substr($resultA, 0, 4)],
            ['row' => '40', 'cell' => 10, 'value' =>  substr($resultA2, 0, 4)],
            ['row' => '40', 'cell' => 12, 'value' =>  substr($resultA3, 0, 4)],
            ['row' => '40', 'cell' => 14, 'value' =>  substr($resultA4, 0, 4)],
            
            
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex4, 2, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hex4, 0, 2)],
            
            ['row' => '50', 'cell' => 8, 'value' =>  substr($resultb, 0, 4)],
            ['row' => '50', 'cell' => 10, 'value' =>  substr($resultb2, 0, 4)],
            ['row' => '50', 'cell' => 12, 'value' =>  substr($resultb3, 0, 4)],
            ['row' => '50', 'cell' => 14, 'value' =>  substr($resultb4, 0, 4)],
            
            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex3, 2, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex4, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex4, 2, 2)],
            
            ['row' => '60', 'cell' => 8, 'value' =>  substr($resultA, 0, 4)],
            ['row' => '60', 'cell' => 10, 'value' =>  substr($resultA2, 0, 4)],
            ['row' => '60', 'cell' => 12, 'value' =>  substr($resultA3, 0, 4)],
            ['row' => '60', 'cell' => 14, 'value' =>  substr($resultA4, 0, 4)],
            
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex4, 2, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex4, 0, 2)],
            
            ['row' => '70', 'cell' => 8, 'value' =>  substr($resultb, 0, 4)],
            ['row' => '70', 'cell' => 10, 'value' =>  substr($resultb2, 0, 4)],
            ['row' => '70', 'cell' => 12, 'value' =>  substr($resultb3, 0, 4)],
            ['row' => '70', 'cell' => 14, 'value' =>  substr($resultb4, 0, 4)],
        ];
    }
}
