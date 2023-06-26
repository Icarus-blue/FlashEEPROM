<?php
namespace App\Scripts;
class Dongfeng_Glory330_24c04_checksum extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('30', 0);
        $a =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 1);
        $b =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 2);
        $c =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 3);
        $d =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 4);
        $e =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 5);
        $f =substr($byte, -1);

       
        $hex =  $f . $e . $d. $c. $b . $a;
        $number = ($hex); 

        return [
            'result' => (($number)),
            'image' => 'assets/Dongfeng.png',
            'texts' => [
                'H2E',
                'Eeprom 24C04',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);
        
    
        $a1 = substr($hex, 0, 1);
        $b1 = substr($hex, 1, 1);
        $c1 = substr($hex, 2, 1);
        $d1 = substr($hex, 3, 1);
        $e1 = substr($hex, 4, 1);
        $f1 = substr($hex, 5, 1);
       
        $f = dechex(255 -hexdec($f1)) ; 
        $e = dechex(255 -hexdec($e1)) ; 
        $d = dechex(255 -hexdec($d1)) ; 
        $c = dechex(255 -hexdec($c1)) ; 
        $b = dechex(255 -hexdec($b1)) ; 
        $a = dechex(255 -hexdec($a1)) ;

        return
         [
            ['row' => '30', 'cell' => 11, 'value' => substr($a, 0, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($b, 0, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($c, 0, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($d, 0, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($e, 0, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($f, 0, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 5, 1)],
            
            
            ['row' => '40', 'cell' => 11, 'value' => substr($a, 0, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($b, 0, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($c, 0, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($d, 0, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($e, 0, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($f, 0, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '50', 'cell' => 11, 'value' => substr($a, 0, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($b, 0, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($c, 0, 2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($d, 0, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($e, 0, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($f, 0, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 5, 1)],

          
            
        ];
    }
}
