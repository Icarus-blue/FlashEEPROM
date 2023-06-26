<?php

namespace App\Scripts;

class Saturn_Oulook_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('C0', 3) . $this->getByteForPosition('C0', 2). $this->getByteForPosition('C0', 1). $this->getByteForPosition('C0', 0);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)/1000),
            'image' => 'assets/gmc.png',
            'texts' => [
                'Saturn Outlook',
                'Eeprom 93c66',
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

            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        switch ($value) {
            case 1000:
                $hex = 'B0BD40420F00 ';
                break;
            case 4254:
                $hex = '8F1630E94000   ';
                break;
            case 10000:
                $hex = 'E76880969800 ';
                break;
            case 15000:
                $hex = '5B1DC0E1E400 ';
                break;
             case 24555:
                $hex = '9150F8AD7601 ';
                break;
                case 35500:
                $hex = '024EE0AF1D02 ';
                    break;    
            case 50244:
                $hex = '6153A0A9FE02 ';
                break;
            case 47852:
                $hex = '45D3E029DA02 ';
                break;
            case 78525:
                $hex = '09C94832AE04 ';
                break;
                case 98500:
                    $hex = '81FCA0FDDE05';
                    break;    
             case 125000:
                $hex =     '4C9F40597307 ';
                break;
            case 145200:
                $hex = 'D8638093A708 ';
                break;
            case 160552:
                $hex = '2E2240D49109 ';
                break;
            case 190000:
                $hex = '2CC9802B530B';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 8, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 10, 2)],
            ['row' => 'C0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 8, 'value' => substr($hex, 8, 2)],
            ['row' => 'C0', 'cell' => 9, 'value' => substr($hex, 10, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => 'C0', 'cell' => 14, 'value' => substr($hex, 8, 2)],
            ['row' => 'C0', 'cell' => 15, 'value' => substr($hex, 10, 2)],

            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => 'D0', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 8, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 10, 2)],
            ['row' => 'D0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 6, 2)],

            ['row' => 'E0', 'cell' => 0, 'value' => substr($hex, 8, 2)],
            ['row' => 'E0', 'cell' => 1, 'value' => substr($hex, 10, 2)],
            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 5, 'value' => substr($hex, 6, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 8, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex, 10, 2)],
            ['row' => 'E0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => 'E0', 'cell' => 12, 'value' => substr($hex, 8, 2)],
            ['row' => 'E0', 'cell' => 13, 'value' => substr($hex, 10, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'F0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 8, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 10, 2)],
            ['row' => 'F0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 8, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 10, 2)],
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => 'F0', 'cell' => 14, 'value' => substr($hex, 8, 2)],
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex, 10, 2)],

            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '100', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '100', 'cell' => 5, 'value' => substr($hex, 10, 2)],


          
        ];
    
    }
}
