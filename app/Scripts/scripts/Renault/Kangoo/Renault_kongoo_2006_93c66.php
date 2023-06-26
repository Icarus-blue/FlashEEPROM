<?php

namespace App\Scripts;

class Renault_kongoo_2006_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F0', 2) . $this->getByteForPosition('F0', 1). $this->getByteForPosition('70', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/Renault.png',
            'texts' => [
                'Kangoo Johnson 2006  ',
                'Micro 93c66',
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
                $hex='E80300EB ';
                   break;
                case 4254:
                $hex='9E1000AE ';
                   break;
                case 10000:
                $hex='10270037 ';
                   break;
                case 15000:
                $hex='983A00D2';
                   break;
                case 24555:
                $hex='EB5F004A ';
                   break;
                case 35500:
                $hex='AC8A0036 ';
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
