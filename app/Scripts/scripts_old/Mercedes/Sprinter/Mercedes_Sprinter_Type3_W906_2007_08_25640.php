<?php

namespace App\Scripts;

class  Mercedes_Sprinter_Type3_W906_2007_08_25640 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('2C0', 9) . $this->getByteForPosition('2C0',6).$this->getByteForPosition('2C0', 3) . $this->getByteForPosition('2C0', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round((4294967295-$number) /1000),
            'image' => 'assets/mercedes.png',
            'texts' => [
                'Sprinter Type3 - 2007-08 ',
                'Eerpom 95640v1',
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
            case  1000:
                $hex='BFB04FBDB24DF0FF00FFF00F';
                break;
                case  4254:
                $hex='CFC03F1619E6BFB04FFFF00F';
                break;
                case 10000:
                $hex='7F708F696699676897FFF00F';
                break;
                case 15000:
                $hex='3F30CF1E11EE1B14EBFFF00F';
                break;
                case 24555:
                $hex='0708F7525DA2898679FEF10E';
                break;
                case 35500:
                $hex='1F10EF505FA0E2ED12FDF20D';
                break;
                case 50244:
                $hex='5F50AF5659A6010EF1FDF20D';
                break;
                case 47852:
                $hex='1F10EFD6D926252AD5FDF20D';
                break;
                case 78525:
                $hex='B7B847CDC23D515EA1FBF40B';
                break;
                case 98500:
                $hex='5F50AF020DF2212ED1FAF50A';
                break;
                case 125000:
                $hex='BFB04FA6A9568C837CF8F708';
                break;
                case 145200:
                $hex='7F708F6C639C5857A8F7F807';
                break;
                case 160552:
                $hex='BFB04F2B24DB6E619EF6F906';
                break;
                case 190000:
                $hex='7F708FD4DB24ACA35CF4FB04';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '2C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '2C0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '2C0', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '2C0', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '2C0', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '2C0', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '2C0', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '2C0', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '2C0', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '2C0', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '2C0', 'cell' => 11, 'value' => substr($hex, 22, 2)],


           
       
        ];
    }
}
