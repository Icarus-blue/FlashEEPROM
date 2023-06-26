<?php

namespace App\Scripts; 

class Pulsar_NS_24c01  extends Script
{
public function getResult()
{
    $hex = $this->getByteForPosition('00', 10) . $this->getByteForPosition('00', 9). $this->getByteForPosition('00', 8);
    $number = hexdec($hex);
     
    return [
        'result' => round($number/10),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
        'image'   =>'assets/Pulsar.png',
        'texts' => [
            'Pulsar NS ',
            'Eerpom 24c01',
            'www.flashEeprom.com'
        ],
        'list' => [
            1000,
            4254,
            10000,
            24555,
            35500,
            47852,
            50244,
            78525,
            98500,
            100461,
            125000,
            145200,
            160552,
            190000
        ],
        'fileprefix'   =>'Flasheeprom '
    ];
}

public function calculate(int $value)
{
   switch($value){
case 1000:
$hex='F62600E3';
break;
case 4254:
$hex='12A60048';
break;
case 10000:
$hex='868601F3';
break;

case 24555:
$hex='14BF032A';
break;
case 35500:
$hex='9E6A05F3';
break;
case 50244:
$hex='8EAA07C1';
break;
case 47852:
$hex='1E4D078E';
break;
case 78525:
$hex='48FB0BB2';
break;
case 98500:
$hex='8E070F5C';
break;
case 100461:
$hex='28540F75';
break;
case 125000:
$hex='B6121325';
break;
case 145200:
$hex='C62716FD';
break;
case 160552:
$hex='767F18F3';
break;
case 190000:
$hex='C6FD1C21';
break;

        default:
            return null;
    }
       // $fixed_part_left = substr($hex, 0, 2);
       $sum_part = hexdec(substr($hex, 0, 2));
       $fixed_part_left = substr($hex, 2, 2);
        $fixed_part_right = substr($hex, 4, 2);
        $sum_part2 = hexdec(substr($hex, 6, 2));
        
        $result = [];
        for ($i = 0; $i < 28; $i++) {
            $offset = $i * 4;
            
           // $result[] = $this->getOffset('00', 2, $offset) + ['value' => //$fixed_part_left];
             $result[] = $this->getOffset('6', 2, $offset + 0) + ['value' => dechex($sum_part + $i)];
            
            
            $result[] = $this->getOffset('6', 2, $offset + 1) + ['value' => $fixed_part_left];
            
            $result[] = $this->getOffset('6', 2, $offset + 2) + ['value' => $fixed_part_right];
            
            $result[] = $this->getOffset('6', 2, $offset + 3) + ['value' => dechex($sum_part2 - $i)];
            
        }
        
        return $result;
    }
}
