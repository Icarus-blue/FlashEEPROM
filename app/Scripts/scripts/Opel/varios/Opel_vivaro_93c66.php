<?php

namespace App\Scripts;

class Opel_vivaro_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('70', 15) . $this->getByteForPosition('70', 12). $this->getByteForPosition('70', 13);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/Opel.png',
            'texts' => [
                'Vivaro   ',
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
                $hex='03E81400 ';
                   break;
                case 4254:
                $hex='109E5100 ';
                   break;
                case 10000:
                $hex='2710C800 ';
                   break;
                case 15000:
                $hex='3A982D00 ';
                   break;
                case 24555:
                $hex='5FEBB500 ';
                   break;
                case 35500:
                $hex='8AACC900 ';
                   break;
                case 50244:
                $hex='C44F700 ';
                   break;
                case 47852:
                $hex='BAEC5900 ';
                   break;
                case 78525:
                $hex='32BD0F01 ';
                   break;
                case 98500:
                $hex='32BD0F01 ';
                   break;
                case 125000:
                $hex='E848CE01 ';
                   break;
                case 145200:
                $hex='37309602 ';
                   break;
                case 160552:
                $hex='73286202 ';
                   break;
                case 190000:
                $hex='E630E702 ';
                   break;

            default:
                return null;
        }
        
        return [

           
            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 6, 2)],
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

        ];
    }
}
