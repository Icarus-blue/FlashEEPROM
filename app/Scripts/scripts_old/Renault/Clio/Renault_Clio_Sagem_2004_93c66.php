<?php

namespace App\Scripts;

class Renault_Clio_Sagem_2004_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('80', 14) . $this->getByteForPosition('80', 13). $this->getByteForPosition('80', 12);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/Renault.png',
            'texts' => [
                'Clio 2004 - 2005    ',
                'Eerpom 93c66',
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
                $hex='9E100051 ';
                   break;
                case 4254:
                $hex='109E5100 ';
                   break;
                case 10000:
                $hex='102700C8 ';
                   break;
                case 15000:
                $hex='983A002D ';
                   break;
                case 24555:
                $hex='EB5F00B5 ';
                   break;
                case 35500:
                $hex='AC8A00C9 ';
                   break;
                case 50244:
                $hex='44C400F7 ';
                   break;
                case 47852:
                $hex='ECBA0059 ';
                   break;
                case 78525:
                $hex='BD32010F ';
                   break;
                case 98500:
                $hex='C48001BA ';
                   break;
                case 125000:
                $hex='48E801CE ';
                   break;
                case 145200:
                $hex='30370296 ';
                   break;
                case 160552:
                $hex='28730262 ';
                   break;
                case 190000:
                $hex='30E602E7 ';
                   break;

            default:
                return null;
        }
        
        return [

           
      

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

        ];
    }
}
