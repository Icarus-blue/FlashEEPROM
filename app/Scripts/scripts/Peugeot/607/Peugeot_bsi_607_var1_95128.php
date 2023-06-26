<?php

namespace App\Scripts;

class Peugeot_bsi_607_var1_95128 extends Script
{
    public function getResult()
    {
      $hex = $this->getByteForPosition('1C0', 5) . $this->getByteForPosition('1C0', 7) .  $this->getByteForPosition('1C0', 8);
      $number = hexdec($hex);
        return [
            'result' => round((16777215-$number)/10),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/peugeot.png',
            'texts' => [
                '607 BSI Var1  ',
                'Eerpom 95128',
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
                $hex='C8EFD8FF ';
                   break;
                case 4254:
                $hex='2DD359FF ';
                   break;
                case 10000:
                $hex='D85F79FE ';
                   break;
                case 15000:
                $hex='C40FB6FD ';
                   break;
                case 24555:
                $hex='0FD140FC ';
                   break;
                case 35500:
                $hex='D84795FA ';
                   break;
                case 50244:
                $hex='A65755F8 ';
                   break;
                case 47852:
                $hex='73C7B2F8 ';
                   break;
                case 78525:
                $hex='979D04F4 ';
                   break;
                case 98500:
                $hex='4157F8F0 ';
                   break;
                case 125000:
                $hex='0A2FEDEC ';
                   break;
                case 145200:
                $hex='E21FD8E9 ';
                   break;
                case 160552:
                $hex='D86F80E7 ';
                   break;
                case 190000:
                $hex='061F02E3 ';
                   break;

            default:
                return null;
        }
        
        return [

            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '1C0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => '1C0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            

            ['row' => '1D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '1D0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '1D0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => '1D0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '1D0', 'cell' => 11, 'value' => substr($hex, 2, 2)],      
            ['row' => '1D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 15, 'value' => substr($hex, 6, 2)],

            
            ['row' => '1E0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '1E0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 5, 'value' => substr($hex, 6, 2)],
            ['row' => '1E0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '1E0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '1E0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '1E0', 'cell' => 13, 'value' => substr($hex, 2, 2)],            
            ['row' => '1E0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '1F0', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => '1F0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '1F0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '1F0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '1F0', 'cell' => 9, 'value' => substr($hex, 2, 2)]
            
            
        ];
    }
}
