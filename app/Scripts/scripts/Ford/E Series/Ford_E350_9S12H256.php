<?php

namespace App\Scripts;

class Ford_E350_9S12H256 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('F40', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('F40', 1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*206,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford E350',
                'Micro 9S12H256',
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
            case 50244:
                $hex = '0F3C';
                break;
            case 47852:
                $hex = '0E85';
                break;
            case 78525:
                $hex = '17D1';
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

            
            ['row' => 'F40', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'F60', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F60', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'F70', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F70', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'F80', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 1, 'value' => substr($hex, 2, 2)],

            ['row' => 'F30', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F60', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F60', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F70', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F70', 'cell' => 5, 'value' => substr($hex, 2, 2)],

            ['row' => 'F30', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F60', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F60', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F70', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F70', 'cell' => 9, 'value' => substr($hex, 2, 2)],

            ['row' => 'F30', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F60', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F60', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F70', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F70', 'cell' => 13, 'value' => substr($hex, 2, 2)]



            

        ];
    }
}
