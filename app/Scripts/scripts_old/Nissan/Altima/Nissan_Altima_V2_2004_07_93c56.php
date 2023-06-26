<?php

namespace App\Scripts;

class Nissan_Altima_V2_2004_07_93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('60', 1) . $this->getByteForPosition('60', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round((46909-($number))*5367/100),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/nissan.png',
            'texts' => [
                'Altima 2004 -07  ',
                'Eerpom 93c56',
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
                $hex='2BB7576EAEDC5DB9556EAADC';
                   break;
                case 4254:
                $hex='EEB6DD6DBADB75B7DB6DB6DB';
                   break;
                case 10000:
                $hex='83B6076D0EDA1DB4056D0ADA';
                   break;
                case 15000:
                $hex='26B64D6C9AD835B14B6C96D8';
                   break;
                case 24555:
                $hex='74B5E96AD2D5A5ABE76ACED5';
                   break;
                case 35500:
                $hex='A8B45169A2D245A54F699ED2';
                   break;
                case 50244:
                $hex='95B32B6756CEAD9C296752CE';
                   break;
                case 47852:
                $hex='C2B385670ACF159E836706CF';
                   break;
                case 78525:
                $hex='86B10D631AC6358C0B6316C6';
                   break;
                case 98500:
                $hex='12B025604AC09580236046C0';
                   break;
                case 125000:
                $hex='24AE495C92B82571475C8EB8';
                   break;
                case 145200:
                $hex='ACAC5959B2B265655759AEB2';
                   break;
                case 160552:
                $hex='8EAB1D573AAE755C1B5736AE';
                   break;
                case 190000:
                $hex='69A9D352A6A54D4BD152A2A5';
                   break;

            default:
                return null;
        }
        
        return [

         ['row' => '60', 'cell' => 8, 'value' => substr($hex, 0, 2)],
         ['row' => '60', 'cell' => 9, 'value' => substr($hex, 2, 2)],
         ['row' => '60', 'cell' => 10, 'value' => substr($hex, 4, 2)],
         ['row' => '60', 'cell' => 11, 'value' => substr($hex, 6, 2)],
         ['row' => '60', 'cell' => 12, 'value' => substr($hex, 8, 2)],
         ['row' => '60', 'cell' => 13, 'value' => substr($hex, 10, 2)],
         ['row' => '60', 'cell' => 14, 'value' => substr($hex, 12, 2)],
         ['row' => '60', 'cell' => 15, 'value' => substr($hex, 14, 2)],
         ['row' => '70', 'cell' => 2, 'value' => substr($hex, 16, 2)],
         ['row' => '70', 'cell' => 3, 'value' => substr($hex, 18, 2)],
         ['row' => '70', 'cell' => 4, 'value' => substr($hex, 20, 2)],
         ['row' => '70', 'cell' => 5, 'value' => substr($hex, 22, 2)],

        ];
    }
}
