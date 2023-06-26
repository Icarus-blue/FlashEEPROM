<?php

namespace App\Scripts; 

class Baic_Plus_car_2012_15_24c02 extends Script
{
public function getResult()
{
    $hex = $this->getByteForPosition('70', 1) . $this->getByteForPosition('70', 2). $this->getByteForPosition('70', 3);
    $number = hexdec($hex);
     
    return [
        'result' => round($number/10),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
        'image' => 'assets/baic.png',
        'texts' => [
            'Plus Car 2012-15',
            'Eerpom 24c02',
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
        'fileprefix' => 'archivo'
    ];
}

public function calculate(int $value)
{
    switch ($value) {
        case 1000:
            $hex='C8002710';
               break;
            case 4254:
            $hex='F100A668';
               break;
            case 10000:
            $hex='D80186A0';
               break;
          
            case 24555:
            $hex='3703DB08';
               break;
            case 35500:
            $hex='D8056AB8';
               break;
            case 50244:
            $hex='6A07AAE4';
               break;
            case 47852:
            $hex='2307AD88';
               break;
            case 78525:
            $hex='650BFB94';
               break;
            case 98500:
            $hex='410F07A8';
               break;
            case 100461:
           $hex=' 000F549C  ';
                   break;

            case 125000:
            $hex='0A1312D0';
               break;
            case 145200:
            $hex='E21621E0';
               break;
            case 160552:
            $hex='88187FE0';
               break;
            case 190000:
            $hex='061CFDE0';
               break;

        default:
            return null;
    }
    
    return [

        ['row' => '70', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => '70', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => '70', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => '70', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => '70', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => '70', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => '70', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => '70', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => '80', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => '80', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => '80', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => '80', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => '80', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => '80', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => '80', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => '80', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => '80', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => '80', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => '80', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => '80', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => '80', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => '80', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => '80', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => '80', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        ['row' => '90', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => '90', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => '90', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => '90', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => '90', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => '90', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => '90', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => '90', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => '90', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => '90', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => '90', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => '90', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => '90', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => '90', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => '90', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => '90', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => 'A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => 'A0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => 'A0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'A0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => 'A0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => 'A0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => 'A0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'A0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => 'A0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => 'B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'B0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => 'B0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => 'B0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => 'B0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'B0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => 'B0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => 'B0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => 'B0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'B0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => 'B0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => 'B0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => 'C0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => 'C0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => 'C0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'C0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => 'C0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => 'C0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => 'C0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => 'D0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => 'D0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'D0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => 'D0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => 'D0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => 'E0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'E0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => 'E0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => 'E0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
        ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
        ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
        ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
        ['row' => 'F0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
        ['row' => 'F0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
        ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
        ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
        ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
        ['row' => 'F0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
        
        ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        ['row' => 'F0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
        ['row' => 'F0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
        ['row' => 'F0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
        
        
        
        
        ] ;
    }
}
