<?php

namespace App\Scripts;

class Ford_Edge_93c86_2014 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('50', 8) . $this->getByteForPosition('50', 9). $this->getByteForPosition('50', 6). $this->getByteForPosition('50', 7);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number /1000)),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Edge ',
                'Micro 93c86',
                'www.flashEeprom.com'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                47852,
                50244,
                78525,
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
                $hex = 'BDB04240000F ';
                break;
            case 4254:
                $hex = '168FE9300040 ';
                break;
            case 10000:
                $hex = '69E796800098  ';
                break;
            case 15000:
                $hex = '1E5BE1C000E4 ';
                break;
             case 24555:
                $hex = '5191ADF80176 ';
                break;
            case 50244:
                $hex = '5461A9A002FE ';
                break;
            case 47852:
                $hex = 'D44529E002DA ';
                break;
            case 78525:
                $hex = 'C909324804AE ';
                break;
             case 125000:
                $hex = '9F4C59400773 ';
                break;
            case 145200:
                $hex = '64D8938008A7 ';
                break;
            case 160552:
                $hex = '222ED4400991 ';
                break;
            case 190000:
                $hex = 'C92C2B800B53 ';
                break;    

            default:
                return null;
        }
        
        return [

            
        
            ['row' => '50', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 8, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 10, 2)],

            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => '50', 'cell' => 14, 'value' => substr($hex, 8, 2)],
            ['row' => '50', 'cell' => 15, 'value' => substr($hex, 10, 2)],

            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex, 10, 2)],

            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 8, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 10, 2)],

            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 13,'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($hex, 6, 2)],
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 8, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 10, 2)],

            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 6, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 8, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex, 10, 2)],

            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 8, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex, 10, 2)],

            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 6, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 8, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 10, 2)],

            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 6, 2)],
            ['row' => '80', 'cell' => 8, 'value' => substr($hex, 8, 2)],
            ['row' => '80', 'cell' => 9, 'value' => substr($hex, 10, 2)],

            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 13, 'value' => substr($hex, 6, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 8, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 10, 2)],

            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 10, 2)],

            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '90', 'cell' => 9, 'value' => substr($hex, 6, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 8, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 10, 2)]
            
        ];
    }
}
