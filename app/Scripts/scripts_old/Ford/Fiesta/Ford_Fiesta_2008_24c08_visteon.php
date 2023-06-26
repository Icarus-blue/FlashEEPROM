<?php

namespace App\Scripts;

class Ford_fiesta_2008_24c08_visteon extends Script
{
    private $primary = [0, 3, 5, 6, 9, 10, 12, 15, 17, 18, 20, 23, 24, 27, 29, 30];
    private $primary_map = [
        0 => '80',
        1 => '20',
        2 => '40',
        3 => 'E0'
    ];
    private $secondary_map = [
        0 => '01',
        1 => 'A1',
        2 => 'C1',
        3 => '61'
    ];
    
    public function getResult()
    { $byte = $this->getByteForPosition('3B0', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('3B0', 1);
        $c = substr($byte2, 0, 1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 
         
        return [
            'result' => ($number*128),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Chevrolet Sail 2009-2013',
                'Eeprom 24C08 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    private function calculateRepeatedValue(int $value) : array
    {
        $result = [];
        
        $result = (($value/128));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $byte= $hex ; 
     
                        $a1 = substr($byte, 0,1);
                        $b1 =substr($byte, -2); 
                        $c1 = substr($byte,  -3);
                        $d1 =substr($byte, -4);
                        $hex2 = $c1 . $a1. $b1 .$d1 ;
                        
         $hex3 = substr($byte, -1);
         $value2 =hexdec($hex3);
         switch ($value2  ^ 0x05) 
         {
         case 00: $hex4 = '00'; break;
         case 01: $hex4 = '0D'; break;
         case 02: $hex4 = '07'; break;
         case 03: $hex4 = '0A'; break;
         case 04: $hex4 = '0E'; break;
         case 05: $hex4 = '03'; break;
         case 06: $hex4 = '09'; break;
         case 07: $hex4 = '04'; break;
         case 8: $hex4 = ' 01'; break;
         case 9: $hex4 = ' 0C'; break;
         case 10: $hex4 = '06'; break;
         case 11: $hex4 = '0B'; break;
         case 12: $hex4 = '0F'; break;
         case 13: $hex4 = '02'; break;
         case 14: $hex4 = '08'; break;
         case 15: $hex4 = '05'; break;
         }
         
        $var2 =  hexdec($hex4) ; 
        $byte3 = substr($byte, -2,1);
        $value2 = hexdec ($byte3);
           switch ($value2  ^ $var2) 
         {
         case 00: $hex5 = '00'; break;
         case 01: $hex5 = '0D'; break;
         case 02: $hex5 = '07'; break;
         case 03: $hex5 = '0A'; break;
         case 04: $hex5 = '0E'; break;
         case 05: $hex5 = '03'; break;
         case 06: $hex5 = '09'; break;
         case 07: $hex5 = '04'; break;
         case 8: $hex5 = ' 01'; break;
         case 9: $hex5 = ' 0C'; break;
         case 10: $hex5 = '06'; break;
         case 11: $hex5 = '0B'; break;
         case 12: $hex5 = '0F'; break;
         case 13: $hex5 = '02'; break;
         case 14: $hex5 = '08'; break;
         case 15: $hex5 = '05'; break;
         }
    
        $var3 =  hexdec($hex5) ; 
        $byte4 = substr($byte, -3,1);
        $value3 = hexdec ($byte4);
           switch ($value3  ^ $var3) 
         {
         case 00: $hex6 = '00'; break;
         case 01: $hex6 = '0D'; break;
         case 02: $hex6 = '07'; break;
         case 03: $hex6 = '0A'; break;
         case 04: $hex6 = '0E'; break;
         case 05: $hex6 = '03'; break;
         case 06: $hex6 = '09'; break;
         case 07: $hex6 = '04'; break;
         case 8: $hex6 = ' 01'; break;
         case 9: $hex6 = ' 0C'; break;
         case 10: $hex6 = '06'; break;
         case 11: $hex6 = '0B'; break;
         case 12: $hex6 = '0F'; break;
         case 13: $hex6 = '02'; break;
         case 14: $hex6 = '08'; break;
         case 15: $hex6 = '05'; break;
         }
         $hex7 = substr($hex2, -1);
         $hex8 = substr($hex6, -1,1);
         $hex9 = $hex7 . $hex8 ;
         
        return
         [

            ['row' => '3B0', 'cell' => 0, 'value' => substr($hex2, 0, 2)],
            ['row' => '3B0', 'cell' => 1, 'value' => substr($hex9, 0, 2)],  
            
            ['row' => '3B0', 'cell' => 4, 'value' => substr($hex2, 0, 2)],
            ['row' => '3B0', 'cell' => 5, 'value' => substr($hex9, 0, 2)], 
            
            ['row' => '3B0', 'cell' => 8, 'value' => substr($hex2, 0, 2)],
            ['row' => '3B0', 'cell' => 9, 'value' => substr($hex9, 0, 2)], 
            
            ['row' => '3B0', 'cell' => 12, 'value' => substr($hex2, 0, 2)],
            ['row' => '3B0', 'cell' => 13, 'value' => substr($hex9, 0, 2)], 
            
            ['row' => '3C0', 'cell' => 0, 'value' => substr($hex2, 0, 2)],
            ['row' => '3C0', 'cell' => 1, 'value' => substr($hex9, 0, 2)], 
           

        ];
        
        return $result;
    }
    
    private function getValue(int $index, int $initial_primary, int $initial_secondary) : string
    {
        if (in_array($index, $this->primary)) {
            return dechex($initial_primary + $index);
        } else {
            return dechex($initial_secondary + $index - 1);
        }
    }
    
    private function getValueForPortion(int $portion, int $index)
    {
        $primary = hexdec($this->primary_map[$portion]);
        $secondary = hexdec($this->secondary_map[$portion]);
        return $this->getValue($index, $primary, $secondary);
    }
    
    public function calculate(int $value)
    {
        $result = $this->calculateRepeatedValue($value);
        
        $counter = [];
        for ($i = 0; $i < 32; $i++) {
            $counter["$i"] = '80';
        }
        
        $units = $value % 128;
        
        $portion = intdiv($units, 32);
        $remaining = $units % 32;
        
        for ($i = 0; $i <= $remaining; $i++) {
            $counter["$i"] = $this->getValueForPortion(($portion), $i);
        }
        
        if ($portion > 0) {
            for ($i = $remaining + 1; $i < 32; $i++) {;
            }
        }
        
        for ($i = 0; $i < 32; $i++) {
        }
        
        return $result;
    }
}
