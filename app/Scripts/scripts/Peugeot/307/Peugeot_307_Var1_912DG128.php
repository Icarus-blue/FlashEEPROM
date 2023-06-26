<?php

namespace App\Scripts;

class Peugeot_307_Var1_912DG128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('670',13). $this->getByteForPosition('670', 14) . $this->getByteForPosition('670',15). $this->getByteForPosition('670',1);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/2560.0212),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '307 BSI Var 1',
                'Micro 912DG128',
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
                $hex='FFD8EF3B';
                break;
                case 4254:
                $hex='FF59D3D6';
                break;
                case 10000:
                $hex='FE795F2B';
                break;
                case 15000:
                $hex='FDB60F3F';
                break;
                case 24555:
                $hex='FC40D1F4';
                break;
                case 35500:
                $hex='FA95472B';
                break;
                case 50244:
                $hex='F855575D';
                break;
                case 47852:
                $hex='F8B2C790';
                break;
                case 78525:
                $hex='F4049D6C';
                break;
                case 98500:
                $hex='F0F857C2';
                break;
                case 125000:
                $hex='ECED2FF9';
                break;
                case 145200:
                $hex='E9D81F21';
                break;
                case 160552:
                $hex='E7806F2B';
                break;
                case 190000:
                $hex='E3021FFD';
                break;

            default:
                return null;
        }
        
        return [

           
            ['row' => '670', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '670', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '680', 'cell' => 1, 'value' => substr($hex, 6, 2)],

              
            ['row' => '680', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '680', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '680', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 11, 'value' => substr($hex, 4, 2)],
            ['row' => '680', 'cell' => 13, 'value' => substr($hex, 6, 2)],

            ['row' => '680', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '690', 'cell' => 3, 'value' => substr($hex, 6, 2)],

            ['row' => '690', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '690', 'cell' => 9, 'value' => substr($hex, 6, 2)],

            ['row' => '690', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '690', 'cell' => 15, 'value' => substr($hex, 6, 2)],

            ['row' => '6A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => '6A0', 'cell' => 5, 'value' => substr($hex, 6, 2)],

            ['row' => '6A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '6A0', 'cell' => 11, 'value' => substr($hex, 6, 2)],

        ];
    }
}
