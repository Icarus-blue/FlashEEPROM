<?php

namespace App\Scripts;
global $old; 

class Jac_T8_Mc9s12xhy256_crc extends Script

{
    public function getResult()
    {
    $hex = $this->getByteForPosition('E00', 2). $this-> getByteForPosition('E00', 3) . $this->getByteForPosition('E00', 0). $this->getByteForPosition('E00', 1);
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
         $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
         $hex1 = str_pad(dechex($result+1), 8, '0', STR_PAD_LEFT); 
         $hex2 = str_pad(dechex($result+2), 8, '0', STR_PAD_LEFT);
         $hex3 = str_pad(dechex($result+3), 8, '0', STR_PAD_LEFT);
                
        
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
        $hexcounter = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
                 $a = substr($hexcounter, 3, 1);
                 $b = substr($hexcounter, 4, 1);
                 $hex6 = (hexdec($a . $b))+1;
                 $hex4 = dechex($hex6);
                 
        }
         if ($counter<100)
        {
                 $a = substr($hex, 3, 1);
                 $b = substr($hex, 4, 1);
                 $hex6 = ($a . $b);
                 $hex4 = $hex6;
        }
        {
        $data = [];
        $result22 = round((1099511627775));
        $zero = str_pad(dechex($result22), 10, '0', STR_PAD_LEFT);
        }
         {
       
        $result23 = round((281474976710655));
        $zero2 = str_pad(dechex($result23), 12, '0', STR_PAD_LEFT);

        }
       
        $crc= dechex (128 + $counter) ; 
         $crc1= dechex (129 + $counter) ; 
          $crc2= dechex (130 + $counter) ;  
           $crc3= dechex (131 + $counter) ; 
          
           
                
        return
         [
            ['row' => 'E00', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'E00', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => 'E00', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E00', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E00', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => 'E00', 'cell' => 5, 'value' => substr($crc, 0, 2)],
            
            ['row' => 'E00', 'cell' => 6, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E00', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E10', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E10', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E10', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E20', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E20', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E20', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E30', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E30', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E30', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E40', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E40', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E40', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E50', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E50', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E50', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E60', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E60', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E60', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E70', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E70', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E70', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E80', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'E80', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'E80', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'E90', 'cell' => 0, 'value' => substr($zero2, 0, 12)],                                   
            ['row' => 'E90', 'cell' => 6, 'value' => substr($zero2, 0, 12)],
            
            
           
            
            ['row' => 'F00', 'cell' => 0, 'value' => substr($hex1, 4, 2)],
            ['row' => 'F00', 'cell' => 1, 'value' => substr($hex1, 6, 2)],
            ['row' => 'F00', 'cell' => 2, 'value' => substr($hex1, 0, 2)],
            ['row' => 'F00', 'cell' => 3, 'value' => substr($hex1, 2, 2)],
            ['row' => 'F00', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => 'F00', 'cell' => 5, 'value' => substr($crc1, 0, 2)],
            ['row' => 'F00', 'cell' => 6, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F00', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F10', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F10', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F10', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F20', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F20', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F20', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F30', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F30', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F30', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F40', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F40', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F40', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F50', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F50', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F50', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F60', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F60', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F60', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F70', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F70', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F70', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F80', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => 'F80', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => 'F80', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => 'F90', 'cell' => 0, 'value' => substr($zero2, 0, 12)],                                   
            ['row' => 'F90', 'cell' => 6, 'value' => substr($zero2, 0, 12)],
            
           
            
            ['row' => '1000', 'cell' => 0, 'value' => substr($hex2, 4, 2)],
            ['row' => '1000', 'cell' => 1, 'value' => substr($hex2, 6, 2)],
            ['row' => '1000', 'cell' => 2, 'value' => substr($hex2, 0, 2)],
            ['row' => '1000', 'cell' => 3, 'value' => substr($hex2, 2, 2)],
            ['row' => '1000', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => '1000', 'cell' => 5, 'value' => substr($crc2, 0, 2)],
            ['row' => '1000', 'cell' => 6, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1000', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1010', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1010', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1010', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1020', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1020', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1020', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1030', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1030', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1030', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1040', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1040', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1040', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1050', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1050', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1050', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1060', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1060', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1060', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1070', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1070', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1070', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1080', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1080', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1080', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1090', 'cell' => 0, 'value' => substr($zero2, 0, 12)],                                   
            ['row' => '1090', 'cell' => 6, 'value' => substr($zero2, 0, 12)],
            
            
            ['row' => '1100', 'cell' => 0, 'value' => substr($hex3, 4, 2)],
            ['row' => '1100', 'cell' => 1, 'value' => substr($hex3, 6, 2)],
            ['row' => '1100', 'cell' => 2, 'value' => substr($hex3, 0, 2)],
            ['row' => '1100', 'cell' => 3, 'value' => substr($hex3, 2, 2)],
            ['row' => '1100', 'cell' => 4, 'value' => substr($hex4, 0, 2)],
            ['row' => '1100', 'cell' => 5, 'value' => substr($crc3, 0, 2)],
            ['row' => '1100', 'cell' => 6, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1100', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1110', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1110', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1110', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1120', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1120', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1120', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1130', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1130', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1130', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1140', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1140', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1140', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1150', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1150', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1150', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1160', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1160', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1160', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1170', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1170', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1170', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1180', 'cell' => 0, 'value' => substr($zero, 0, 10)],                                   
            ['row' => '1180', 'cell' => 5, 'value' => substr($zero, 0, 10)],
            ['row' => '1180', 'cell' => 10, 'value' => substr($zero2, 0, 12)],
            ['row' => '1190', 'cell' => 0, 'value' => substr($zero2, 0, 12)],                                   
            ['row' => '1190', 'cell' => 6, 'value' => substr($zero2, 0, 12)],
            
            
            
           
            
        ];
        
         
        }
           
       
    }

