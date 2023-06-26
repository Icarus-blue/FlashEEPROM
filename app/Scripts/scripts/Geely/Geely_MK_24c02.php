<?php

namespace App\Scripts;

class Geely_MK_24c02 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('0', 1) . $this->getByteForPosition('0', 2). $this->getByteForPosition('0', 3);
        $number = hexdec($hex);
        $number = $number;
        return [
            'result' => round(($number*100 )/1303),
            'image' => 'assets/geely.png',
            'texts' => [
                'Acura',
                'Eeprom 93c56',
                'FlashEeprom'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = ((($value*1303)/100)-32);
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
                $a = substr($hex, 0, 2);
                    $a1 = hexdec($a);
                $b = substr($hex, 2, 2);
                $c = substr($hex, 4, 2);
                    $c1 = hexdec($c);
                    $c2 = dechex((hexdec ($c)+1)) ; $cb = hexdec($c2);
                    $c3 = dechex((hexdec ($c2)+1)) ; $cc = hexdec($c3);
                    $c4 = dechex((hexdec ($c3)+1)) ;
                    $c5 = dechex((hexdec ($c4)+1)) ; 
                    $c6 = dechex((hexdec ($c5)+1)) ; 
                    $c7 = dechex((hexdec ($c6)+1)) ; 
                    $c8 = dechex((hexdec ($c7)+1)) ; 
                    $c9 = dechex((hexdec ($c8)+1)) ; 
                    $c10 = dechex((hexdec ($c9)+1)) ; 
                    $c11 = dechex((hexdec ($c10)+1)) ; 
                    $c12 = dechex((hexdec ($c11)+1)) ; 
                    $c13 = dechex((hexdec ($c12)+1)) ; 
                    
                    $c14 = dechex((hexdec ($c13)+1)) ;
                    $c15 = dechex((hexdec ($c14)+1)) ; 
                    $c16 = dechex((hexdec ($c15)+1)) ; 
                    $c17 = dechex((hexdec ($c16)+1)) ; 
                    $c18 = dechex((hexdec ($c17)+1)) ; 
                    $c19 = dechex((hexdec ($c18)+1)) ; 
                    $c20 = dechex((hexdec ($c19)+1)) ; 
                    $c21 = dechex((hexdec ($c20)+1)) ; 
                    $c22 = dechex((hexdec ($c21)+1)) ; 
                    $c23 = dechex((hexdec ($c22)+1)) ; 
                    $c24 = dechex((hexdec ($c23)+1)) ;
                    $c25 = dechex((hexdec ($c24)+1)) ; 
                    $c26 = dechex((hexdec ($c25)+1)) ; 
                    $c27 = dechex((hexdec ($c26)+1)) ; 
                    $c28 = dechex((hexdec ($c27)+1)) ; 
                    $c29 = dechex((hexdec ($c28)+1)) ; 
                    $c30 = dechex((hexdec ($c29)+1)) ; 
                    $c31 = dechex((hexdec ($c30)+1)) ; 
                    $c32 = dechex((hexdec ($c31)+1)) ; 
                   
        $hex00A = $this->getByteForPosition('0', 5); $number1 = hexdec($hex00A);
        $hex00B = $this->getByteForPosition('0', 7); $number2 = hexdec($hex00B);
        $crc0 = dechex((($c1+$a1)+$number1 )+$number2);
        
        $hex00C =$this->getByteForPosition('0', 13);$number00A =hexdec($hex00C);
        $hex00D = $this->getByteForPosition('0',15);$number00B =hexdec($hex00D);
        $crc02 = dechex((($cb+$a1)+$number00A )+$number00B);
        
        $hex10A =$this->getByteForPosition('10',5);$number101 = hexdec($hex10A);
        $hex10B =$this->getByteForPosition('10',7);$number102 = hexdec($hex10B);
        $crc03 = dechex(((($c1+2)+$a1)+$number101 )+$number102);
        
        $hex10C=$this->getByteForPosition('10', 13);$number10A =hexdec($hex10C);
        $hex10D =$this->getByteForPosition('10',15);$number10B =hexdec($hex10D);
        $crc04 = dechex(((($c1+3)+$a1)+$number10A )+$number10B);
        
        $hex20A =$this->getByteForPosition('20',5);$number201 = hexdec($hex20A);
        $hex20B =$this->getByteForPosition('20',7);$number202 = hexdec($hex20B);
        $crc05 = dechex(((($c1+4)+$a1)+$number201 )+$number202);
        
        $hex20C=$this->getByteForPosition('20', 13);$number20A =hexdec($hex20C);
        $hex20D =$this->getByteForPosition('20',15);$number20B =hexdec($hex20D);
        $crc06 = dechex(((($c1+5)+$a1)+$number20A )+$number20B);
        
        $hex30A =$this->getByteForPosition('30',5);$number30A = hexdec($hex30A);
        $hex30B =$this->getByteForPosition('30',7);$number30B = hexdec($hex30B);
        $crc07 = dechex(((($c1+6)+$a1)+$number30A )+$number30B);
        
        $hex30C=$this->getByteForPosition('30', 13);$number30A =hexdec($hex30C);
        $hex30D =$this->getByteForPosition('30',15);$number30B =hexdec($hex30D);
        $crc08 = dechex(((($c1+7)+$a1)+$number30A )+$number30B);
        
        $hex40A =$this->getByteForPosition('40',5);$number40A = hexdec($hex40A);
        $hex40B =$this->getByteForPosition('40',7);$number40B = hexdec($hex40B);
        $crc09 = dechex(((($c1+8)+$a1)+$number40A )+$number40B);
        
        $hex40C=$this->getByteForPosition('40', 13);$number40A =hexdec($hex40C);
        $hex40D =$this->getByteForPosition('40',15);$number40B =hexdec($hex40D);
        $crc10 = dechex(((($c1+9)+$a1)+$number40A )+$number40B);
       
        $hex50A =$this->getByteForPosition('50',5);$number50A = hexdec($hex50A);
        $hex50B =$this->getByteForPosition('50',7);$number50B = hexdec($hex50B);
        $crc11 = dechex(((($c1+10)+$a1)+$number50A )+$number50B);
        
        $hex50C=$this->getByteForPosition('50', 13);$number50A =hexdec($hex50C);
        $hex50D =$this->getByteForPosition('50',15);$number50B =hexdec($hex50D);
        $crc12 = dechex(((($c1+11)+$a1)+$number50A )+$number50B);
        
        $hex60A =$this->getByteForPosition('60',5);$number60A = hexdec($hex60A);
        $hex60B =$this->getByteForPosition('60',7);$number60B = hexdec($hex60B);
        $crc13 = dechex(((($c1+12)+$a1)+$number60A )+$number60B);
        
        $hex60C=$this->getByteForPosition('60', 13);$number60A =hexdec($hex60C);
        $hex60D =$this->getByteForPosition('60',15);$number60B =hexdec($hex60D);
        $crc14 = dechex(((($c1+13)+$a1)+$number60A )+$number60B);
        
        $hex70A =$this->getByteForPosition('70',5);$number70A = hexdec($hex70A);
        $hex70B =$this->getByteForPosition('70',7);$number70B = hexdec($hex70B);
        $crc15 = dechex(((($c1+14)+$a1)+$number70A )+$number70B);
        
        $hex70C=$this->getByteForPosition('70', 13);$number70A =hexdec($hex70C);
        $hex70D =$this->getByteForPosition('70',15);$number70B =hexdec($hex70D);
        $crc16 = dechex(((($c1+15)+$a1)+$number70A )+$number70B);
        
        $hex80A =$this->getByteForPosition('80',5);$number80A = hexdec($hex80A);
        $hex80B =$this->getByteForPosition('80',7);$number80B = hexdec($hex80B);
        $crc17 = dechex(((($c1+16)+$a1)+$number80A )+$number80B);
        
        $hex80C=$this->getByteForPosition('80', 13);$number80A =hexdec($hex80C);
        $hex80D =$this->getByteForPosition('80',15);$number80B =hexdec($hex80D);
        $crc18 = dechex(((($c1+17)+$a1)+$number80A )+$number80B);
            
        $hex90A =$this->getByteForPosition('90',5);$number90A = hexdec($hex90A);
        $hex90B =$this->getByteForPosition('90',7);$number90B = hexdec($hex90B);
        $crc19 = dechex(((($c1+18)+$a1)+$number90A )+$number90B);
        
        $hex90C=$this->getByteForPosition('90', 13);$number90A =hexdec($hex90C);
        $hex90D =$this->getByteForPosition('90',15);$number90B =hexdec($hex90D);
        $crc20 = dechex(((($c1+19)+$a1)+$number90A )+$number90B);
        
        $hexA0A =$this->getByteForPosition('A0',5);$numberA0A = hexdec($hexA0A);
        $hexA0B =$this->getByteForPosition('A0',7);$numberA0B = hexdec($hexA0B);
        $crc21 = dechex(((($c1+20)+$a1)+$numberA0A )+$numberA0B);
        
        $hexA0C=$this->getByteForPosition('A0', 13);$numberA0A =hexdec($hexA0C);
        $hexA0D =$this->getByteForPosition('A0',15);$numberA0B =hexdec($hexA0D);
        $crc22 = dechex(((($c1+21)+$a1)+$numberA0A )+$numberA0B);
        
        $hexB0A =$this->getByteForPosition('B0',5);$numberB0A = hexdec($hexB0A);
        $hexB0B =$this->getByteForPosition('B0',7);$numberB0B = hexdec($hexB0B);
        $crc23 = dechex(((($c1+22)+$a1)+$numberB0A )+$numberB0B);
        
        $hexB0C=$this->getByteForPosition('B0', 13);$numberB0A =hexdec($hexB0C);
        $hexB0D =$this->getByteForPosition('B0',15);$numberB0B =hexdec($hexB0D);
        $crc24 = dechex(((($c1+23)+$a1)+$numberB0A )+$numberB0B);
        
        $hexC0A =$this->getByteForPosition('C0',5);$numberC0A = hexdec($hexC0A);
        $hexC0B =$this->getByteForPosition('C0',7);$numberC0B = hexdec($hexC0B);
        $crc25 = dechex(((($c1+24)+$a1)+$numberC0A )+$numberC0B);
        
        $hexC0C=$this->getByteForPosition('C0', 13);$numberC0A =hexdec($hexC0C);
        $hexC0D =$this->getByteForPosition('C0',15);$numberC0B =hexdec($hexC0D);
        $crc26 = dechex(((($c1+25)+$a1)+$numberC0A )+$numberC0B);
        
        $hexD0A =$this->getByteForPosition('D0',5);$numberD0A = hexdec($hexD0A);
        $hexD0B =$this->getByteForPosition('D0',7);$numberD0B = hexdec($hexD0B);
        $crc27 = dechex(((($c1+26)+$a1)+$numberD0A )+$numberD0B);
        
        $hexD0C=$this->getByteForPosition('D0', 13);$numberD0A =hexdec($hexD0C);
        $hexD0D =$this->getByteForPosition('D0',15);$numberD0B =hexdec($hexD0D);
        $crc28 = dechex(((($c1+27)+$a1)+$numberD0A )+$numberD0B);
        
        $hexE0A =$this->getByteForPosition('E0',5);$numberE0A = hexdec($hexE0A);
        $hexE0B =$this->getByteForPosition('E0',7);$numberE0B = hexdec($hexE0B);
        $crc29 = dechex(((($c1+28)+$a1)+$numberE0A )+$numberE0B);
        
        $hexE0C=$this->getByteForPosition('E0', 13);$numberE0A =hexdec($hexE0C);
        $hexE0D =$this->getByteForPosition('E0',15);$numberE0B =hexdec($hexE0D);
        $crc30 = dechex(((($c1+29)+$a1)+$numberE0A )+$numberE0B);
        
        $hexF0A =$this->getByteForPosition('F0',5);$numberF0A = hexdec($hexF0A);
        $hexF0B =$this->getByteForPosition('F0',7);$numberF0B = hexdec($hexF0B);
        $crc31 = dechex(((($c1+30)+$a1)+$numberF0A )+$numberF0B);
        
        $hexF0C=$this->getByteForPosition('F0', 13);$numberF0A =hexdec($hexF0C);
        $hexF0D =$this->getByteForPosition('F0',15);$numberF0B =hexdec($hexF0D);
        $crc32 = dechex(((($c1+31)+$a1)+$numberF0A )+$numberF0B);
        
        
        return [
            ['row' => '00', 'cell' => 0, 'value' => substr($crc0, 1, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            
            ['row' => '00', 'cell' => 8, 'value' => substr($crc02, 1, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($c2, 0, 2)],
            
            ['row' => '10', 'cell' => 0, 'value' => substr($crc03, 1, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($c3, 0, 2)],
            
            ['row' => '10', 'cell' => 8, 'value' => substr($crc04, 1, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($c4, 0, 2)],
            
            ['row' => '20', 'cell' => 0, 'value' => substr($crc05, 1, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($c5, 0, 2)],
            
            ['row' => '20', 'cell' => 8, 'value' => substr($crc06, 1, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($c6, 0, 2)],
            
            ['row' => '30', 'cell' => 0, 'value' => substr($crc07, 1, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($c7, 0, 2)],
            
            ['row' => '30', 'cell' => 8, 'value' => substr($crc08, 1, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($c8, 0, 2)],
            
            ['row' => '40', 'cell' => 0, 'value' => substr($crc09, 1, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($c9, 0, 2)],
            
            ['row' => '40', 'cell' => 8, 'value' => substr($crc10, 1, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($c10, 0, 2)],
            
            ['row' => '50', 'cell' => 0, 'value' => substr($crc11, 1, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($c11, 0, 2)],
            
            ['row' => '50', 'cell' => 8, 'value' => substr($crc12, 1, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($c12, 0, 2)],
            
            ['row' => '60', 'cell' => 0, 'value' => substr($crc13, 1, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($c13, 0, 2)],
            
            ['row' => '60', 'cell' => 8, 'value' => substr($crc14, 1, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($c14, 0, 2)],
            
            ['row' => '70', 'cell' => 0, 'value' => substr($crc15, 1, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($c15, 0, 2)],
            
            ['row' => '70', 'cell' => 8, 'value' => substr($crc16, 1, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($c16, 0, 2)],
            
            ['row' => '80', 'cell' => 0, 'value' => substr($crc17, 1, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($c17, 0, 2)],
            
            ['row' => '80', 'cell' => 8, 'value' => substr($crc18, 1, 2)],
            ['row' => '80', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($c18, 0, 2)],
            
            ['row' => '90', 'cell' => 0, 'value' => substr($crc19, 1, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($c19, 0, 2)],
            
            ['row' => '90', 'cell' => 8, 'value' => substr($crc20, 1, 2)],
            ['row' => '90', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($c20, 0, 2)],
            
            ['row' => 'A0', 'cell' => 0, 'value' => substr($crc21, 1, 2)],
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($c21, 0, 2)],
            
            ['row' => 'A0', 'cell' => 8, 'value' => substr($crc22, 1, 2)],
            ['row' => 'A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($c22, 0, 2)],
            
            ['row' => 'B0', 'cell' => 0, 'value' => substr($crc23, 1, 2)],
            ['row' => 'B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($c23, 0, 2)],

            ['row' => 'B0', 'cell' => 8, 'value' => substr($crc24, 1, 2)],
            ['row' => 'B0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($c24, 0, 2)],
            
            ['row' => 'C0', 'cell' => 0, 'value' => substr($crc25, 1, 2)],
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($c25, 0, 2)],
            
            ['row' => 'C0', 'cell' => 8, 'value' => substr($crc26, 1, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($c26, 0, 2)],
            
            ['row' => 'D0', 'cell' => 0, 'value' => substr($crc27, 1, 2)],
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($c27, 0, 2)],
            
            ['row' => 'D0', 'cell' => 8, 'value' => substr($crc28, 1, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($c28, 0, 2)],
            
            ['row' => 'E0', 'cell' => 0, 'value' => substr($crc29, 1, 2)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($c29, 0, 2)],
            
            ['row' => 'E0', 'cell' => 8, 'value' => substr($crc30, 1, 2)],
            ['row' => 'E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($c30, 0, 2)],
            
            ['row' => 'F0', 'cell' => 0, 'value' => substr($crc31, 1, 2)],
            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($c31, 0, 2)],
            
            ['row' => 'F0', 'cell' => 8, 'value' => substr($crc32, 1, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($c32, 0, 2)],
            
            
            
        ];
    }
}
