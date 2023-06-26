<?php

namespace App\Scripts;

class Hyundai_i10_2014_24c16 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('7C0', 3);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('7C0', 4);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/Hyundai.png',
            'texts' => [
                'i10 Visteon 2014',
                'Eeprom 24c16',
                'www.flasheeprom.com'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                47852,
                32000,
                32545,
                37500,
                50244,
                78525,
                98500,
                125000,
                145200,
                150000,
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
                 case 32000:
                    $hex = '0FA9';
                    break;
               case 32545:
                    $hex = '0FE8';
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
              case 150000:
                $hex = '493E';
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

            
            ['row' => '7C0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '7C0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '7C0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '7C0', 'cell' => 8, 'value' => substr($hex, 2, 2)],

            ['row' => '7C0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '7C0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '7C0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '7D0', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            
            ['row' => '7D0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '7D0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            
        ];
    }
}
