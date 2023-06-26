<?php

namespace App\Scripts;

class Ford_Expedition_2003_68HC912D60 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('340', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('340', 1);
        $c = substr($byte2, 0, 1);
        $d = substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*104,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Expedition 2003 ',
                'Micro 68HC912D60',
                'www.flasheeprom.com'
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
            case 1000:
                $hex = '0093';
                break;
            case 4254:
                $hex = '0280';
                break;
            case 10000:
                $hex = '060A';
                break;
            case 15000:
                $hex = '0909';
                break;
             case 24555:
                $hex = '0EC4';
                break;
                case 35500:
                    $hex = '1557';
                    break;    
            case 50244:
                $hex = '1E33';
                break;
            case 47852:
                $hex = '1CCD';
                break;
            case 78525:
                $hex = '2F3B';
                break;
                case 98500:
                    $hex = '3B3E';
                    break;    
             case 125000:
                $hex = '4B14';
                break;
            case 145200:
                $hex = '574A';
                break;
            case 160552:
                $hex = '6077';
                break;
            case 190000:
                $hex = '7228';
                break;    

            default:
                return null;
        }
        
        return [

            
           
            ['row' => '340', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '340', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '350', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '350', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '360', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '360', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '370', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '370', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '380', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '380', 'cell' => 1, 'value' => substr($hex, 2, 2)]

            

        ];
    }
}
