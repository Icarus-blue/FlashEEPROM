<?php

namespace App\Scripts;

class Ford_Escape_2000_2002_68HC11KA4 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('210', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('210', 1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $b . $c. $d ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*113,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Escape 2000-02 ',
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
                $hex = '6008';
                break;
            case 4254:
                $hex = '6025';
                break;
            case 10000:
                $hex = 'E058';
                break;
            case 15000:
                $hex = '048C';
                break;
            case 24555:
                $hex = '6084';
                break;
            case 37500:
                $hex = '014B';
                 break;    
            case 50244:
                $hex = 'E1BC';
                break;
            case 47852:
                $hex = 'E1A7';
                break;
            case 78525:
                $hex = '82B6';
                break;
            case 85000:
                $hex = '22F0';
                 break;
             case 125000:
                $hex = '8452';
                break;
            case 145200:
                $hex = 'C504';
                break;
            case 160552:
                $hex = 'E58C';
                break;
            case 190000:
                $hex = '8691';
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
            ['row' => '250', 'cell' => 1, 'value' => substr($hex, 2, 2)],

    
         
        ];
    }
}
