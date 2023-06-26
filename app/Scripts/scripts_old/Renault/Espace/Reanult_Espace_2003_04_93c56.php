<?php

namespace App\Scripts;

class Reanult_Espace_2003_04_93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('90', 0) . $this->getByteForPosition('90', 3). $this->getByteForPosition('90',2);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)),
            'image' => 'assets/Renault.png',
            'texts' => [
                'Espace 2003-04 ',
                'Eeprom 93c56',
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
                $hex='00371027 ';
                   break;
                case 4254:
                $hex='00D22CA6 ';
                   break;
                case 10000:
                $hex='0127A086 ';
                   break;
                case 15000:
                $hex='023BF049 ';
                   break;
                case 24555:
                $hex='03F02EBF ';
                   break;
                case 35500:
                $hex='0527B86A ';
                   break;
                case 50244:
                $hex='0759A8AA ';
                   break;
                case 47852:
                $hex='078C384D ';
                   break;
                case 78525:
                $hex='0B6862FB ';
                   break;
                case 98500:
                $hex='0FBEA807 ';
                   break;
                case 125000:
                $hex='13F5D012 ';
                   break;
                case 145200:
                $hex='161DE027 ';
                   break;
                case 160552:
                $hex='1827907F ';
                   break;
                case 190000:
                $hex='1CF9E0FD ';
                   break;

            default:
                return null;
        }
        
        return [

           
      

            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 6, 2)],

            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 6, 2)],

            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 9, 'value' => substr($hex, 6, 2)],

            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 13, 'value' => substr($hex, 6, 2)],

            ['row' => '90', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex, 6, 2)],



        ];
    }
}
