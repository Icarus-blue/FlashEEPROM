<?php

namespace App\Scripts;

class Renault_Clio_2002_25020 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F0', 2) . $this->getByteForPosition('F0', 1). $this->getByteForPosition('70', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/Renault.png',
            'texts' => [
                'Clio 2002  ',
                'Micro 25020',
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
                $hex='E80300EBE70300EAE60300E9E50300E8 ';
                   break;
                case 4254:
                $hex='109E5100 ';
                   break;
                case 10000:
                $hex='102700370F2700360E2700350D270034 ';
                   break;
                case 15000:
                $hex='983A00D2973A00D1963A00D0953A00CF ';
                   break;
                case 24555:
                $hex='EB5F004AEA5F0049E95F0048E85F0047 ';
                   break;
                case 35500:
                $hex='AC8A0036AB8A0035AA8A0034A98A0033 ';
                   break;
                case 50244:
                $hex='44C4000843C4000742C4000641C40005 ';
                   break;
                case 47852:
                $hex='ECBA00A6EBBA00A5EABA00A4E9BA00A3 ';
                   break;
                case 78525:
                $hex='BD3201F0BC3201EFBB3201EEBA3201ED ';
                   break;
                case 98500:
                $hex='C4800145C3800144C2800143C1800142 ';
                   break;
                case 125000:
                $hex='48E8013147E8013046E8012F45E8012E ';
                   break;
                case 145200:
                $hex='303702692F3702682E3702672D370266 ';
                   break;
                case 160552:
                $hex='2873029D2773029C2673029B2573029A ';
                   break;
                case 190000:
                $hex='30E602182FE602172EE602162DE60215 ';
                   break;

            default:
                return null;
        }
        
        return [

           
            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => 'F0', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex, 28, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex, 30, 2)],


            

        ];
    }
}
