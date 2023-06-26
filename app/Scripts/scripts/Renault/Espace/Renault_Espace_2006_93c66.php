<?php

namespace App\Scripts;

class Renault_Espace_2006_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',5). $this->getByteForPosition('00', 4) . $this->getByteForPosition('00',2). $this->getByteForPosition('00',3);
        $number = hexdec($hex);
         
        return [
            'result' => round($number),
            'image' => 'assets/Renault.png',
            'texts' => [
                'Espace  2006',
                'Eeprom 93c66',
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
                $hex='FC1703E80000 ';
                   break;
                case 4254:
                $hex='EF61109E0000 ';
                   break;
                case 10000:
                $hex='D8EF27100000 ';
                   break;
                case 15000:
                $hex='C5673A980000 ';
                   break;
                case 24555:
                $hex='A0145FEB0000 ';
                   break;
                case 35500:
                $hex='75538AAC0000 ';
                   break;
                case 50244:
                $hex='0759A8AA ';
                   break;
                case 47852:
                $hex='4513BAEC0000 ';
                   break;
                case 78525:
                $hex='CD4132BD0001 ';
                   break;
                case 98500:
                $hex='7F3A80C40001 ';
                   break;
                case 125000:
                $hex='17B6E8480001 ';
                   break;
                case 145200:
                $hex='C8CD37300002 ';
                   break;
                case 160552:
                $hex='8CD573280002 ';
                   break;
                case 190000:
                $hex='19CDE6300002 ';
                   break;

            default:
                return null;
        }
        
      
      
        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 10, 2)],

            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 8, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 10, 2)],

            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 8, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 10, 2)],

            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 8, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 10, 2)],

            
            
        ];
    }
}
