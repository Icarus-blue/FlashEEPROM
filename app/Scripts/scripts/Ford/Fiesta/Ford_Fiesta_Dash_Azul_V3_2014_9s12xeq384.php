<?php

namespace App\Scripts;

class Ford_Fiesta_Dash_Azul_V3_2014_9s12xeq384 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('8D0', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('8D0', 1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Fista Dash Azul v3 2014',
                'Micro 9s12xeq384',
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
                $hex = '0BFD';
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
                    $hex = '3074';
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

            
            ['row' => '8D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '8D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '8E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '8E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '8F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '8F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '900', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '900', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '910', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '910', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '920', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '920', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '930', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '930', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '940', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '940', 'cell' => 2, 'value' => substr($hex, 2, 2)],

            ['row' => '8D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '8D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '8E0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '8E0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '8F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '8F0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '900', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '900', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '910', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '910', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '920', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '920', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '930', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '930', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '940', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '940', 'cell' => 6, 'value' => substr($hex, 2, 2)],

            ['row' => '8C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '8C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '8D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '8D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '8E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '8E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '8F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '8F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '900', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '900', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '910', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '910', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '920', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '920', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '930', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '930', 'cell' => 10, 'value' => substr($hex, 2, 2)],

            ['row' => '8C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '8C0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '8D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '8D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '8E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '8E0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '8F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '8F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '900', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '900', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '910', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '910', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '920', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '920', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '930', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '930', 'cell' => 14, 'value' => substr($hex, 2, 2)],
        ];
    }
}
