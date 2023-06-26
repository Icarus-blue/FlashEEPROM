<?php

namespace App\Scripts;

class Renault_Kangoo_2008_93c76 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('30', 12) . $this->getByteForPosition('30', 11). $this->getByteForPosition('30', 10);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/Renault.png',
            'texts' => [
                'Kangoo 2008',
                'Eerpom 93c76',
                'www.flashEeprom.com'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                35500,
                47852,
                50244,
                78525,
                98500,
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
                $hex='17FCE8030000 ';
                   break;
                case 4254:
                $hex='61EF9E100000 ';
                   break;
                case 10000:
                $hex='EFD810270000 ';
                   break;
                case 15000:
                $hex='67C5983A0000 ';
                   break;
                case 24555:
                $hex='14A0EB5F0000 ';
                   break;
                case 35500:
                $hex='5375AC8A0000 ';
                   break;
                case 50244:
                $hex='BB3B44C40000 ';
                   break;
                case 47852:
                $hex='1345ECBA0000 ';
                   break;
                case 78525:
                $hex='41CDBD320100 ';
                   break;
                case 98500:
                $hex='3A7FC4800100 ';
                   break;
                case 125000:
                $hex='B61748E80100 ';
                   break;
                case 145200:
                $hex='CDC830370200 ';
                   break;
                case 160552:
                $hex='D58C28730200 ';
                   break;
                case 190000:
                $hex='CD1930E60200 ';
                   break;

            default:
                return null;
        }
        
        return [

           
      

            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 8, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 10, 2)],

            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 8, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 10, 2)],

            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 8, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 10, 2)],

            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 8, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex, 10, 2)],

          
        ];
    }
}
