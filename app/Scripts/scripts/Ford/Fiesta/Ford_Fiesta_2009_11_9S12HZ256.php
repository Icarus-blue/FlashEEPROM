<?php

namespace App\Scripts;

class Ford_Fiesta_2009_11_9S12HZ256 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('630', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('630', 1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Fiesta 2009-11',
                'Micro 9S12HZ256',
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

            
            ['row' => '630', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '650', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '650', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '660', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '660', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '670', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '6B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => '630', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '650', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '650', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '660', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '660', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '670', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '6B0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 5, 'value' => substr($hex, 2, 2)],

            ['row' => '630', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '650', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '650', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '660', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '660', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '670', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '6B0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 9, 'value' => substr($hex, 2, 2)],

            ['row' => '630', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '630', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '650', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '650', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '660', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '660', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '670', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '6B0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 13, 'value' => substr($hex, 2, 2)],



            

        ];
    }
}
