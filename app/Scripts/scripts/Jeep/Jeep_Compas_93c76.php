<?php

namespace App\Scripts;

class Jeep_Compas_93c76 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('A0', 3) . $this->getByteForPosition('A0', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ($number* 26),
            'image' => 'assets/Jeep.png',
            'texts' => [
                'Compas',
                'Eeprom 93c76',
                'www.FlashEeprom.com'
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
                $hex='2600D902';
                   break;
                case 4254:
                $hex='A3005C00';
                   break;
                case 10000:
                $hex='80017E03';
                   break;
                case 15000:
                $hex='4002DB03';
                   break;
                case 24555:
                $hex='B0034C02';
                   break;
                case 35500:
                $hex='5505AF00';
                   break;
                case 50244:
                $hex='8C077403';
                   break;
                case 47852:
                $hex='2307DB03 ';
                   break;
                case 78525:
                $hex='CC0B3801';
                   break;
                case 98500:
                $hex='CC0E3D01';
                   break;
                case 125000:
                $hex='C7122A02';
                   break;
                case 145200:
                $hex='D0153A03';
                   break;
                case 160552:
                $hex='1F18F802';
                   break;
                case 190000:
                $hex='8B1C6801 ';
                   break;

            default:
                return null;
        }
        
        return
         [
             
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex, 6, 2)],

        


        ];
    }
}
