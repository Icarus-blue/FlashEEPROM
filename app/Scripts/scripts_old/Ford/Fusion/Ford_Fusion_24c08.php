<?php

namespace App\Scripts;

class Ford_Fusion_24c08 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('160', 4);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('160', 3);
        $c = substr($byte2, 0, 1);
        $d = substr($byte2, -1);
        $hex = $a . $b. $c . $d ;
        $number = hexdec($hex); 

        return [
            'result' =>round($number*15.77),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Fusion ',
                'Eeprom 24c08',
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
                $hex = '3F00';
                break;
            case 4254:
                $hex = '0401';
                break;
            case 10000:
                $hex = '7A02';
                break;
            case 15000:
                $hex = 'BB03';
                break;
             case 24555:
                $hex = '1D06';
                break;
                case 37500:
                    $hex = '4809';
                    break;    
            case 50244:
                $hex = '7B0C';
                break;
            case 47852:
                $hex = 'E1A7';
                break;
            case 78525:
                $hex = 'D90B';
                break;
                case 98500:
                $hex = '6918';
                break;  
                case 115000:
                    $hex = '8C1C';
                    break;        
             case 125000:
                $hex = '081F';
                break;
            case 145200:
                $hex = '0924';
                break;
            case 160552:
                $hex = 'DB27';
                break;
            case 190000:
                $hex = '152F';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '160', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 4, 'value' => substr($hex, 2, 2)]
       

            

        ];
    }
}
