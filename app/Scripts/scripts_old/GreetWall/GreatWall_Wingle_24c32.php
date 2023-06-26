<?php

namespace App\Scripts;

class GreatWall_Wingle_24c32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 1) . $this->getByteForPosition('00', 0);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/GreetWall.png',
            'texts' => [
                'Wingle ',
                'Eeprom 24c32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $byte= $hex ; 
        $a = substr($byte, 0,1);
        $b =substr($byte, -2); 
        $c = substr($byte,  -3);
        $d =substr($byte, -4);
        $hex = $a . $c. $b .$d ;
        
                        $a1 = substr($byte, 0,1);
                        $b1 =substr($byte, -2); 
                        $c1 = substr($byte,  -3);
                        $d1 =substr($byte, -4);
                        $hex1 = $c1 . $a1. $b1 .$d1 ;
         
       
        $constante = round((65535-$result));
        $result = round(65535-($constante*2));
        $hexb = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
             $byteb= $hexb ; 
                $ab = substr($byteb, 0,1);
                $bb =substr($byteb,  -2); 
                $cb = substr($byteb, -3);
                $db =substr($byteb,  -4);
                $hexb = $ab . $cb. $bb .$db ;
                        
                        $a2 = substr($byteb, 0,1);
                        $b2 =substr($byteb, -2); 
                        $c2 = substr($byteb,  -3);
                        $d2 =substr($byteb, -4);
                        $hex2 = $c2 . $a2. $b2 .$d2 ;
       
        $result = round(65535-($constante*4));
        $hexc = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
                $bytec= $hexc ; 
                  $ac = substr($bytec, 0,1);
                  $bc =substr($bytec, -2); 
                  $cc = substr($bytec,  -3);
                  $dc =substr($bytec, -4);
                  $hexc = $ac . $cc. $bc .$dc ;
                  
                        $a3 = substr($bytec, 0,1);
                        $b3 =substr($bytec, -2); 
                        $c3 = substr($bytec,  -3);
                        $d3 =substr($bytec, -4);
                        $hex3 = $c3 . $a3. $b3 .$d3 ;
                        
        $result = round(65535-($constante*8));
        $hexd = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
             $byted= $hexd ; 
                $ad = substr($byted, 0,1);
                $bd =substr($byted, -2); 
                $cd = substr($byted,  -3);
                $dd =substr($byted, -4);
                $hexd = $ad . $cd. $bd .$dd ;
                        
                        $a4 = substr($byted, 0,1);
                        $b4 =substr($byted, -2); 
                        $c4 = substr($byted,  -3);
                        $d4 =substr($byted, -4);
                        $hex4 = $c4 . $a4. $b4 .$d4 ; 
       
       
        return
        [
          ['row' => '00', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
             ['row' => '00', 'cell' => 2, 'value' => substr($hexb, 2, 2)],
              ['row' => '00', 'cell' => 3, 'value' => substr($hexb, 0, 2)],
               ['row' => '00', 'cell' => 4, 'value' => substr($hexc, 2, 2)],
                ['row' => '00', 'cell' => 5, 'value' => substr($hexc, 0, 2)],
                 ['row' => '00', 'cell' => 6, 'value' => substr($hexd, 2, 2)],
                  ['row' => '00', 'cell' => 7, 'value' => substr($hexd, 0, 2)],
     ['row' => '00', 'cell' => 8, 'value' => substr($hex1, 2, 2)],
      ['row' => '00', 'cell' => 9, 'value' => substr($hex1, 0, 2)], 
       ['row' => '00', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
        ['row' => '00', 'cell' => 11, 'value' => substr($hex2, 0, 2)], 
         ['row' => '00', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
          ['row' => '00', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
           ['row' => '00', 'cell' => 14, 'value' => substr($hex4, 2, 2)],
             ['row' => '00', 'cell' => 15, 'value' => substr($hex4, 0, 2)],
             
    ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
             ['row' => '10', 'cell' => 2, 'value' => substr($hexb, 0, 2)],
              ['row' => '10', 'cell' => 3, 'value' => substr($hexb, 2, 2)],
               ['row' => '10', 'cell' => 4, 'value' => substr($hexc, 0, 2)],
                ['row' => '10', 'cell' => 5, 'value' => substr($hexc, 2, 2)],
                 ['row' => '10', 'cell' => 6, 'value' => substr($hexd, 0, 2)],
                  ['row' => '10', 'cell' => 7, 'value' => substr($hexd, 2, 2)],
     ['row' => '10', 'cell' => 8, 'value' => substr($hex1, 0, 2)],
      ['row' => '10', 'cell' => 9, 'value' => substr($hex1, 2, 2)], 
       ['row' => '10', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
        ['row' => '10', 'cell' => 11, 'value' => substr($hex2, 2, 2)], 
         ['row' => '10', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
          ['row' => '10', 'cell' => 13, 'value' => substr($hex3, 2, 2)],
           ['row' => '10', 'cell' => 14, 'value' => substr($hex4, 0, 2)],
             ['row' => '10', 'cell' => 15, 'value' => substr($hex4, 2, 2)],     
             
    
    ['row' => '20', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 0, 2)],
             ['row' => '20', 'cell' => 2, 'value' => substr($hexb, 2, 2)],
              ['row' => '20', 'cell' => 3, 'value' => substr($hexb, 0, 2)],
               ['row' => '20', 'cell' => 4, 'value' => substr($hexc, 2, 2)],
                ['row' => '20', 'cell' => 5, 'value' => substr($hexc, 0, 2)],
                 ['row' => '20', 'cell' => 6, 'value' => substr($hexd, 2, 2)],
                  ['row' => '20', 'cell' => 7, 'value' => substr($hexd, 0, 2)],
     ['row' => '20', 'cell' => 8, 'value' => substr($hex1, 2, 2)],
      ['row' => '20', 'cell' => 9, 'value' => substr($hex1, 0, 2)], 
       ['row' => '20', 'cell' => 10, 'value' => substr($hex2, 2, 2)],
        ['row' => '20', 'cell' => 11, 'value' => substr($hex2, 0, 2)], 
         ['row' => '20', 'cell' => 12, 'value' => substr($hex3, 2, 2)],
          ['row' => '20', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
           ['row' => '20', 'cell' => 14, 'value' => substr($hex4, 2, 2)],
             ['row' => '20', 'cell' => 15, 'value' => substr($hex4, 0, 2)],
             
    ['row' => '30', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 2, 2)],
             ['row' => '30', 'cell' => 2, 'value' => substr($hexb, 0, 2)],
              ['row' => '30', 'cell' => 3, 'value' => substr($hexb, 2, 2)],
               ['row' => '30', 'cell' => 4, 'value' => substr($hexc, 0, 2)],
                ['row' => '30', 'cell' => 5, 'value' => substr($hexc, 2, 2)],
                 ['row' => '30', 'cell' => 6, 'value' => substr($hexd, 0, 2)],
                  ['row' => '30', 'cell' => 7, 'value' => substr($hexd, 2, 2)],
     ['row' => '30', 'cell' => 8, 'value' => substr($hex1, 0, 2)],
      ['row' => '30', 'cell' => 9, 'value' => substr($hex1, 2, 2)], 
       ['row' => '30', 'cell' => 10, 'value' => substr($hex2, 0, 2)],
        ['row' => '30', 'cell' => 11, 'value' => substr($hex2, 2, 2)], 
         ['row' => '30', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
          ['row' => '30', 'cell' => 13, 'value' => substr($hex3, 2, 2)],
           ['row' => '30', 'cell' => 14, 'value' => substr($hex4, 0, 2)],
             ['row' => '30', 'cell' => 15, 'value' => substr($hex4, 2, 2)],           
             
             ];
    }
}
