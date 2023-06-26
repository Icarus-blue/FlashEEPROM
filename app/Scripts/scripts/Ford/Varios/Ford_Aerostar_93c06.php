<?php

namespace App\Scripts;

class Ford_Aerostar_93c06 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('00', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('00', 1);
        $c = substr($byte2, -1);
        $hex = $c . $a. $b ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*163,
            'image' => 'assets/ford.png',
            'texts' => [
                'Ford Aerostar',
                'Eeprom 93c06',
                'www.flasheeprom.com'
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
                $hex = '0680';
                break;
            case 4254:
                $hex = '1A60';
                break;
            case 10000:
                $hex = '3DA0';
                break;
            case 15000:
                $hex = '5CC0';
                break;
             case 24555:
                $hex = '9660';
                break;
            case 50244:
                $hex = '34C1';
                break;
            case 47852:
                $hex = '2501';
                break;
            case 78525:
                $hex = 'E141';
                break;
             case 125000:
                $hex = 'FEC2';
                break;
            case 145200:
                $hex = '7A23';
                break;
            case 160552:
                $hex = 'D8E3';
                break;
            case 19000:
                $hex = 'D48';
                break;    

            default:
                return null;
        }
        
        return [

            
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 2, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)]

            

        ];
    }
}
