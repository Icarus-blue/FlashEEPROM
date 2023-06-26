<?php

namespace App\Scripts;

class Hyundai_H100_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 6) . $this->getByteForPosition('10', 7);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/Hyundai.png',
            'texts' => [
                'H100',
                'Eeprom 93s56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/32));
    $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

    // Separa los dígitos del primer número
       [$a, $b, $c, $d] = str_split($hex);
       $hex5= $d.$a.$b.$c ; 
       
        $result2 = round(65535-($value/32)*2);
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);
         [$a1, $b1, $c1, $d1] = str_split($hex2);
         $hex6= $d1.$a1.$b1.$c1 ; 
       
        $result3 = round(65535-($value/32)*4);
        $hex3 = str_pad(dechex($result3), 4, '0', STR_PAD_LEFT);
         [$a3, $b3, $c3, $d3] = str_split($hex3);
         $hex7= $d3.$a3.$b3.$c3 ; 
       
        $result4 = round(65535-($value/32)*8);
        $hex4 = str_pad(dechex($result4), 4, '0', STR_PAD_LEFT);
         [$a4, $b4, $c4, $d4] = str_split($hex4);
          $hex8= $d4.$a4.$b4.$c4 ; 
      

        return
         [
              ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],
              ['row' => '00', 'cell' => 7, 'value' => substr($hex, 0, 2)],
              ['row' => '00', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
              ['row' => '00', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
              ['row' => '00', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
              ['row' => '00', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
              ['row' => '00', 'cell' => 12, 'value' => substr($hex4, 2, 2)],
              ['row' => '00', 'cell' => 13, 'value' => substr($hex4, 0, 2)],
              ['row' => '00', 'cell' => 14, 'value' => substr($hex5, 0, 4)],
              
              ['row' => '10', 'cell' => 0, 'value' => substr($hex6, 0, 4)],
              ['row' => '10', 'cell' => 2, 'value' => substr($hex7, 0, 4)],
              ['row' => '10', 'cell' => 4, 'value' => substr($hex8, 0, 4)],
              
              ['row' => '10', 'cell' => 6, 'value' => substr($hex, 0, 2)],
              ['row' => '10', 'cell' => 7, 'value' => substr($hex, 2, 2)],
              ['row' => '10', 'cell' => 8, 'value' => substr($hex2, 0, 2)],
              ['row' => '10', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
              ['row' => '10', 'cell' => 10, 'value' => substr($hex3, 0, 2)],
              ['row' => '10', 'cell' => 11, 'value' => substr($hex3, 2, 2)],
              ['row' => '10', 'cell' => 12, 'value' => substr($hex4, 0, 2)],
              ['row' => '10', 'cell' => 13, 'value' => substr($hex4, 2, 2)],
              ['row' => '10', 'cell' => 14, 'value' => substr($hex5, 2, 2)],
              ['row' => '10', 'cell' => 15, 'value' => substr($hex5, 0, 2)], 
              
              ['row' => '20', 'cell' => 0, 'value' => substr($hex6, 2, 2)],
              ['row' => '20', 'cell' => 1, 'value' => substr($hex6, 0, 2)],
              ['row' => '20', 'cell' => 2, 'value' => substr($hex7, 2, 2)],
              ['row' => '20', 'cell' => 3, 'value' => substr($hex7, 0, 2)],
              ['row' => '20', 'cell' => 4, 'value' => substr($hex8, 2, 2)],
              ['row' => '20', 'cell' => 5, 'value' => substr($hex8, 0, 2)],
              
              ['row' => '20', 'cell' => 6, 'value' => substr($hex, 2, 2)],
              ['row' => '20', 'cell' => 7, 'value' => substr($hex, 0, 2)],
              ['row' => '20', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
              ['row' => '20', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
              ['row' => '20', 'cell' => 10, 'value' => substr($hex3, 2, 2)],
              ['row' => '20', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
              ['row' => '20', 'cell' => 12, 'value' => substr($hex4, 2, 2)],
              ['row' => '20', 'cell' => 13, 'value' => substr($hex4, 0, 2)],
              ['row' => '20', 'cell' => 14, 'value' => substr($hex5, 0, 4)],
              
              ['row' => '30', 'cell' => 0, 'value' => substr($hex6, 0, 4)],
              ['row' => '30', 'cell' => 2, 'value' => substr($hex7, 0, 4)],
              ['row' => '30', 'cell' => 4, 'value' => substr($hex8, 0, 4)],
              
              ['row' => '30', 'cell' => 6, 'value' => substr($hex, 0, 2)],
              ['row' => '30', 'cell' => 7, 'value' => substr($hex, 2, 2)],
              ['row' => '30', 'cell' => 8, 'value' => substr($hex2, 0, 2)],
              ['row' => '30', 'cell' => 9, 'value' => substr($hex2, 2, 2)],
              ['row' => '30', 'cell' => 10, 'value' => substr($hex3, 0, 2)],
              ['row' => '30', 'cell' => 11, 'value' => substr($hex3, 2, 2)],
              ['row' => '30', 'cell' => 12, 'value' => substr($hex4, 0, 2)],
              ['row' => '30', 'cell' => 13, 'value' => substr($hex4, 2, 2)],
              ['row' => '30', 'cell' => 14, 'value' => substr($hex5, 2, 2)],
              ['row' => '30', 'cell' => 15, 'value' => substr($hex5, 0, 2)], 
              
              ['row' => '40', 'cell' => 0, 'value' => substr($hex6, 2, 2)],
              ['row' => '40', 'cell' => 1, 'value' => substr($hex6, 0, 2)],
              ['row' => '40', 'cell' => 2, 'value' => substr($hex7, 2, 2)],
              ['row' => '40', 'cell' => 3, 'value' => substr($hex7, 0, 2)],
              ['row' => '40', 'cell' => 4, 'value' => substr($hex8, 2, 2)],
              ['row' => '40', 'cell' => 5, 'value' => substr($hex8, 0, 2)],
        ];
    }
}
