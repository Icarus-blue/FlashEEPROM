<?php

namespace App\Scripts;
global $old; 

class Jac_T8_Mc9s12xhy256_crc extends Script

{
    public function getResult()
    {
    $hex = $this->getByteForPosition('E00', 0) . $this->getByteForPosition('E00', 1);
    $number = hexdec($hex);
     
    return [
        'result' => round($number),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
        'image'   =>'assets/Jack.png',
        'texts' => [
            ' 1035  furgon ',
            'Eerpom 24c04',
            'www.flashEeprom.com'
        ],
        'fileprefix' => 'flasheeprom'
    ];
    }
    
     public function calculate(int $value)
    {
       
         $result = round(($value));
         $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
         $hex1 = str_pad(dechex($result+1), 6, '0', STR_PAD_LEFT); 
         $hex2 = str_pad(dechex($result+2), 6, '0', STR_PAD_LEFT);
         $hex3 = str_pad(dechex($result+3), 6, '0', STR_PAD_LEFT);
                
        
        $counter = [];
        $units = $value % 256;
        $portion = intdiv($units, 256);
        $remaining = $units % 256;
        
        for ($i = 0; $i <= $remaining; $i++) {
            $counter = $i ; 
        }
        
        if ($portion > 0) {
        for ($i = $remaining + 1; $i < 256; $i++) {
                $counter = $i ; 
            }
        }
        if ($counter>100)
        {
        $result = round(($value));
        $hexcounter = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
                 $a = substr($hexcounter, 2, 1);
                 $b = substr($hexcounter, 3, 1);
                 $hex6 = (hexdec($a . $b))+1;
                 $hex4 = dechex($hex6);
                 
        }
         if ($counter<100)
        {
                 $a = substr($hex, 2, 1);
                 $b = substr($hex, 3, 1);
                 $hex6 = ($a . $b);
                 $hex4 = $hex6;
        }
        
        
        $crc= dechex (128 + $counter) ; 
         $crc1= dechex (129 + $counter) ; 
          $crc2= dechex (130 + $counter) ;  
           $crc3= dechex (131 + $counter) ; 
          
           
                
        return
         [
            ['row' => 'E00', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => 'E00', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => 'E00', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'E00', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => 'E00', 'cell' => 5, 'value' => substr($crc, 0, 2)],
            
            ['row' => 'F00', 'cell' => 0, 'value' => substr($hex1, 2, 2)],
            ['row' => 'F00', 'cell' => 1, 'value' => substr($hex1, 4, 2)],
            ['row' => 'F00', 'cell' => 3, 'value' => substr($hex1, 0, 2)],
            ['row' => 'F00', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => 'F00', 'cell' => 5, 'value' => substr($crc1, 0, 2)],
            
            ['row' => '1000', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1000', 'cell' => 1, 'value' => substr($hex2, 4, 2)],
            ['row' => '1000', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '1000', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => '1000', 'cell' => 5, 'value' => substr($crc2, 0, 2)],
            
            ['row' => '1100', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' => '1100', 'cell' => 1, 'value' => substr($hex3, 4, 2)],
            ['row' => '1100', 'cell' => 3, 'value' => substr($hex3, 0, 2)],
            ['row' => '1100', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => '1100', 'cell' => 5, 'value' => substr($crc3, 0, 2)],
           
            
        ];
        
         
        }
           
       
    }

