<?php

namespace App\Scripts;

class Peugeot_207_BSI_Var2_95128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1E0',0). $this->getByteForPosition('1E0', 1) . $this->getByteForPosition('1E0',2). $this->getByteForPosition('1E0',3);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '207 BSI VAR2',
                'Eeprom 95128',
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
                $hex='FFFFD8EF3A';
                break;
                case 4254:
                $hex='FFFF4E1B98';
                break;
                case 10000:
                $hex='FFFE795F2A';
                break;
                case 15000:
                $hex='FFFDB60F3E';
                break;
                case 24555:
                $hex='FFFC40D1F3';
                break;
                case 35500:
                $hex='FFFA95472A';
                break;
                case 50244:
                $hex='FFF855575C';
                break;
                case 47852:
                $hex='FFF8B2C78F';
                break;
                case 78525:
                $hex='FFF4049D6B';
                break;
                case 98500:
                $hex='FFF0F857C1';
                break;
                case 125000:
                $hex='FFECED2FF8';
                break;
                case 145200:
                $hex='FFE9D81F20';
                break;
                case 160552:
                $hex='FFE7806F2A';
                break;
                case 190000:
                $hex='FFE3021FFC';
                   break;

            default:
                return null;
        }
        
        return [

            ['row' => '1E0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '1E0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '1E0', 'cell' => 4, 'value' => substr($hex, 8, 2)],

            ['row' => '1E0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '1E0', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => '1E0', 'cell' => 10, 'value' => substr($hex, 8, 2)],

            ['row' => '1E0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '1E0', 'cell' => 15, 'value' => substr($hex, 6, 2)],
            ['row' => '1F0', 'cell' => 0, 'value' => substr($hex, 8, 2)],

            ['row' => '1F0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '1F0', 'cell' => 5, 'value' => substr($hex, 6, 2)],
            ['row' => '1F0', 'cell' => 6, 'value' => substr($hex, 8, 2)],

            ['row' => '1F0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '1F0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '1F0', 'cell' => 12, 'value' => substr($hex, 8, 2)],

            ['row' => '1F0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '200', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => '200', 'cell' => 2, 'value' => substr($hex, 8, 2)],

            ['row' => '200', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '200', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '200', 'cell' => 8, 'value' => substr($hex, 8, 2)],

            ['row' => '200', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '200', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => '200', 'cell' => 14, 'value' => substr($hex, 8, 2)],






           

        ];
    }
}
