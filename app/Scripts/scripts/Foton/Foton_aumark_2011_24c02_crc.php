<?php
namespace App\Scripts;
class Foton_aumark_2011_24c02_crc extends Script
{
    public function getResult()
    {$hex = $this->getByteForPosition('20', 0) . $this->getByteForPosition('20', 1). $this->getByteForPosition('20', 2). $this->getByteForPosition('20', 3);
        $number = hexdec($hex);
         
        return [
            'result' => (round($number/10)),
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
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        
        $aa1 = substr($hex, 3, 1);
        $a = substr($hex, 4, 1);
        $b = substr($hex, 5, 1);
        $c = substr($hex, 6, 1);
        $d = substr($hex, 7, 1);
        
        $aa = $aa1 ;
        $a1 = $a ;
        $b1 = $b ; 
        $c1 = $c ;
        $d1 = $d ; 
        $crc = (dechex(15-(hexdec($a1)))) . (dechex(15-(hexdec($b1)))).(dechex(15-(hexdec($c1)))) . (dechex(15-(hexdec($d1)))) ;  
             
                
                
        $result = round((65535-$aa));
        $hex2 = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
            
               
                
        return
         [
            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex2,0, 4)],
            ['row' => '20', 'cell' => 6, 'value' => substr($crc,0, 4)],
            
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex2,0, 4)],
            ['row' => '20', 'cell' => 14, 'value' => substr($crc,0, 4)],
            
            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex2,0, 4)],
            ['row' => '30', 'cell' => 6, 'value' => substr($crc,0, 4)],
            
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex2,0, 4)],
            ['row' => '30', 'cell' => 14, 'value' => substr($crc,0, 4)],
            
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex2,0, 4)],
            ['row' => '40', 'cell' => 6, 'value' => substr($crc,0, 4)],
            
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex2,0, 4)],
            ['row' => '40', 'cell' => 14, 'value' => substr($crc,0, 4)],
            
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex2,0, 4)],
            ['row' => '50', 'cell' => 6, 'value' => substr($crc,0, 4)],
            
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex2,0, 4)],
            ['row' => '50', 'cell' => 14, 'value' => substr($crc,0, 4)],
         
        ];
    }
}
