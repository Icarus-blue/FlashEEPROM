<?php

namespace App\Scripts;

class Ford_Focus_S_Max_2006_9S12H256 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('F20', 2);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('F20', 3);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford focus S-Max',
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

            
            
            ['row' => 'EF0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'EF0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F00', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F10', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F30', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'F60', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'F60', 'cell' => 3, 'value' => substr($hex, 2, 2)],

            
            ['row' => 'EE0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'EE0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'EF0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'EF0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'F00', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'F10', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'F30', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 7, 'value' => substr($hex, 2, 2)],

            
            ['row' => 'EE0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'EE0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'EF0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'EF0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F10', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F30', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 11, 'value' => substr($hex, 2, 2)],

            
            ['row' => 'EE0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'EE0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'EF0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'EF0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F00', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F10', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F30', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 15, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 15, 'value' => substr($hex, 2, 2)],



            

        ];
    }
}
