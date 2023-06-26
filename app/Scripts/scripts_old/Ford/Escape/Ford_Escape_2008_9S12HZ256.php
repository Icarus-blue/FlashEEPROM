<?php

namespace App\Scripts;

class Ford_Escape_2008_9S12HZ256 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('730', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('730', 1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*206,
            'image' => 'assets/Ford.png',
            'texts' => [
                '7ord Escape 2008 ',
                'micro 9S12HZ256',
                'www.flashEeprom.com'
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
                85000,
                125000,
                145200,
                160552,
                190000
            ],
            '7ileprefix' => 'archivo'
        ];
    }
    
    public function calculate(int $value)
    {
        switch ($value) {
            case 1000:
                $hex = '0047';
                break;
            case 4254:
                $hex = '0145';
                break;
            case 10000:
                $hex = '0300';
                break;
            case 15000:
                $hex = '048C';
                break;
            case 24555:
                $hex = '0770';
                break;
            case 37500:
                $hex = '0B62';
                 break;    
            case 50244:
                $hex = '0F3C';
                break;
            case 47852:
                $hex = '0E85';
                break;
            case 78525:
                $hex = '17D1';
                break;
            case 85000:
                    $hex = '19C7';
                    break;
             case 125000:
                $hex = '25E6';
                break;
            case 145200:
                $hex = '2C04';
                break;
            case 160552:
                $hex = '30B7';
                break;
            case 190000:
                $hex = '39AF';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '730', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '730', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '740', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '740', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '750', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '750', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '760', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '760', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '770', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '770', 'cell' => 1, 'value' => substr($hex, 2, 2)],

    
            ['row' => '730', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '730', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '740', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '740', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '750', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '750', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '760', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '760', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '770', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '770', 'cell' => 5, 'value' => substr($hex, 2, 2)],


            ['row' => '730', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '730', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '740', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '740', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '750', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '750', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '760', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '760', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '770', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '770', 'cell' => 9, 'value' => substr($hex, 2, 2)],


            ['row' => '720', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '720', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '730', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '730', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '740', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '740', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '750', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '750', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '760', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '760', 'cell' => 13, 'value' => substr($hex, 2, 2)]


        ];
    }
}
