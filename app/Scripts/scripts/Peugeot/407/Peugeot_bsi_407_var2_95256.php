<?php

namespace App\Scripts;

class Peugeot_bsi_407_var2_95256 extends Script
{
    public function getResult()
    {
      $hex = $this->getByteForPosition('2D0', 4) . $this->getByteForPosition('2D0', 3) .  $this->getByteForPosition('2D0', 1);
      $number = hexdec($hex);
        return [
            'result' => round((16777215-$number)/10),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/peugeot.png',
            'texts' => [
                '407 BSI Var2  ',
                'Eerpom 95256',
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
                $hex='D8FE795F ';
                   break;
                case 4254:
                $hex='2DFF59D3 ';
                   break;
                case 10000:
                $hex='D8FE795F ';
                   break;
                case 15000:
                $hex='C4FDB60F ';
                   break;
                case 24555:
                $hex='0FFC40D1 ';
                   break;
                case 35500:
                $hex='D8FA9547 ';
                   break;
                case 50244:
                $hex='A65755F8 ';
                   break;
                case 47852:
                $hex='73F8B2C7 ';
                   break;
                case 78525:
                $hex='97FFF4049D ';
                   break;
                case 98500:
                $hex='41F0F857 ';
                   break;
                case 125000:
                $hex='0AECED2F ';
                   break;
                case 145200:
                $hex='F6E9D437 ';
                   break;
                case 160552:
                $hex='D8E7806F ';
                   break;
                case 190000:
                $hex='06E3021F ';
                   break;

            default:
                return null;
        }
        
        return [

            ['row' => '260', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '260', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '270', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '270', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => '270', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '270', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '270', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '270', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '270', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '270', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => '270', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '280', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '280', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '280', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '280', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => '280', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '280', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '280', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '280', 'cell' => 15, 'value' => substr($hex, 6, 2)],

            ['row' => '290', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '290', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '290', 'cell' => 5, 'value' => substr($hex, 6, 2)],
            ['row' => '290', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '290', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '290', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            
        ];
    }
}
