<?php

namespace App\Scripts;

class Ford_Thunderbird_HC11KA4 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('220', 1);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('220', 0);
        $c = substr($byte2, -1);
        $hex = $c . $a. $b ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*182,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Thunderbird',
                'Micro 68HC11KA4',
                'www.flasheeprom.com'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                37500,
                47852,
                50244,
                78525,
                98500,
                115000,
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
                $hex = '4005';
                break;
            case 4254:
                $hex = '4017';
                break;
            case 10000:
                $hex = 'E036';
                break;
            case 15000:
                $hex = '2052';
                break;
             case 24555:
                $hex = '2086';
                break;
                case 37500:
                    $hex = '60CE';
                    break;    
            case 50244:
                $hex = 'E114';
                break;
            case 47852:
                $hex = 'E106';
                break;
            case 78525:
                $hex = '61AF';
                break;
                case 98500:
                $hex = '421D';
                break;  
                case 115000:
                    $hex = '6277';
                    break;        
             case 125000:
                $hex = '42AE';
                break;
            case 145200:
                $hex = '231D';
                break;
            case 160552:
                $hex = 'A372';
                break;
            case 190000:
                $hex = 'C413';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '210', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '210', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '220', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '220', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '230', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '230', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '240', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '240', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '250', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '250', 'cell' => 1, 'value' => substr($hex, 2, 2)]
       

            

        ];
    }
}
