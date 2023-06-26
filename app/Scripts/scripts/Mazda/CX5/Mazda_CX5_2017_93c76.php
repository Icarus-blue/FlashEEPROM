<?php

namespace App\Scripts;

class Mazda_CX5_2017_93c76 extends Script
{
    private $map = [
        'DEFB' => 1,
        'BDF7' => 2,
        '8CB1' => 3,
        '7BEF' => 4,
        '4AA9' => 5,
        '29A5' => 6,
        '18E3' => 7,
        'F7DE' => 8,
        'C698' => 9,
        'EFBD' => 0
    ];
    
    public function getResult()
    {
        $number = '';
        
        for ($i = 0; $i < 4; $i++) {
            $offset = $i * 2;
            
            $byte1 = $this->getByteFromOffset('40', 0, $offset);
            $byte2 = $this->getByteFromOffset('40', 1, $offset);
            
            if (isset($this->map[$byte1 . $byte2])) {
                $number = $this->map[$byte1 . $byte2] . $number;
            }
        }
        
        return [
            'result' => intval($number) * 100,
            'image' => 'assets/mazda.png',
            'texts' => [
                'Mazda Axela ',
                'Eeprom 93c56',
                'www.Flasheeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
   public function calculate(int $value)
    {  
      $result = '';
        $text = substr('00000000' . $value, -8);
        
        for ($i = 0; $i < strlen($text); $i++) {
            $result .= (substr($text, $i, 1));
        }
        
        $a = substr($result, 2, 1);
        $b = substr($result, 3, 1);
        $c = substr($result, 4, 1);
        $d = substr($result, 5, 1);
        
        $value1 = $a ; 
           switch ($value1  ) 
         {
         case 00: $hex0 = 'EFBD'; break;
         case 01: $hex0 = 'DEFB'; break;
         case 02: $hex0 = 'BDF7'; break;
         case 03: $hex0 = '8CB1'; break;
         case 04: $hex0 = '7BEF'; break;
         case 05: $hex0 = '4AA9'; break;
         case 06: $hex0 = '29A5'; break;
         case 07: $hex0 = '18E3'; break;
         case 8: $hex0 = 'F7DE'; break;
         case 9: $hex0 = 'C698'; break;
         
         }
         $a1 = $hex0 ; 
         
          $value2 = $b ; 
           switch ($value2  ) 
         {
         case 00: $hex0 = 'EFBD'; break;
         case 01: $hex0 = 'DEFB'; break;
         case 02: $hex0 = 'BDF7'; break;
         case 03: $hex0 = '8CB1'; break;
         case 04: $hex0 = '7BEF'; break;
         case 05: $hex0 = '4AA9'; break;
         case 06: $hex0 = '29A5'; break;
         case 07: $hex0 = '18E3'; break;
         case 8: $hex0 = 'F7DE'; break;
         case 9: $hex0 = 'C698'; break;
         
         }
         $a2 = $hex0 ; 
         
            $value3 = $c ; 
           switch ($value3 ) 
         {
         case 00: $hex0 = 'EFBD'; break;
         case 01: $hex0 = 'DEFB'; break;
         case 02: $hex0 = 'BDF7'; break;
         case 03: $hex0 = '8CB1'; break;
         case 04: $hex0 = '7BEF'; break;
         case 05: $hex0 = '4AA9'; break;
         case 06: $hex0 = '29A5'; break;
         case 07: $hex0 = '18E3'; break;
         case 8: $hex0 = 'F7DE'; break;
         case 9: $hex0 = 'C698'; break;
         
         }
         $a3 = $hex0 ; 
         
           $value4 = $d ; 
           switch ($value4  ) 
         {
         case 0: $hex4= 'EFBD'; break;
         case 01: $hex4 = 'DEFB'; break;
         case 02: $hex4 = 'BDF7'; break;
         case 03: $hex4 = '8CB1'; break;
         case 04: $hex4 = '7BEF'; break;
         case 05: $hex4 = '4AA9'; break;
         case 06: $hex4 = '29A5'; break;
         case 07: $hex4 = '18E3'; break;
         case 8: $hex4 = 'F7DE'; break;
         case 9: $hex4 = 'C698'; break;
         
         }
         $a4 = $hex4; 
         
         
        return
         [
            ['row' => '40', 'cell' => 0, 'value' => substr($a4, 0, 4)],
            ['row' => '40', 'cell' => 2, 'value' => substr($a3, 0, 4)],
            ['row' => '40', 'cell' => 4, 'value' => substr($a2, 0, 4)],
            ['row' => '40', 'cell' => 6, 'value' => substr($a1, 0, 4)],
            
       
         
        ];
    }
}
