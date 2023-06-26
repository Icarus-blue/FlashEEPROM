<?php

namespace App\Scripts;

class Hyundai_i10_2010_9S12HY64V0L  extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('80', 2);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('80', 3);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/Hyundai.png',
            'texts' => [
                'i10 2010',
                'Micro 9S12HY64V0L ',
                'www.flasheeprom.com'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                47852,
                37500,
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
                $hex = '007E';
                break;
            case 4254:
                $hex = '0215';
                break;
            case 10000:
                $hex = '04E3';
                break;
            case 15000:
                $hex = '075E';
                break;
             case 24555:
                $hex = '0BF7';
                break;
             case 37500:
                    $hex = '1277';
                    break;

            case 50244:
                $hex = '1884';
                break;
            case 47852:
                $hex = '1753';
                break;
            case 78525:
                $hex = '265B';
                break;
            case 98500:
                    $hex = '301B';
                    break;    
             case 125000:
                $hex = '3D0B';
                break;
            case 145200:
                $hex = '46E9';
                break;
            case 160552:
                $hex = '4E66';
                break;
            case 190000:
                $hex = '5CC3';
                break;    

            default:
                return null;
        }
        
        return [

            

            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'F0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 2, 2)],

        ];
    }
}
