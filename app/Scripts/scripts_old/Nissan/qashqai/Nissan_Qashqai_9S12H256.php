<?php

namespace App\Scripts;

class Nissan_Qashqai_9S12H256 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('F20', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('F20', 1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/Nissan.png',
            'texts' => [
                'Qashqai 1k78x Const 128    ',
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
                100000,
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
                $hex = '0212';
                break;
            case 10000:
                $hex = '04ED';
                break;
            case 15000:
                $hex = '075A';
                break;
             case 24555:
                $hex = '0BFC';
                break;
             case 37500:
                    $hex = '1244';
                    break;

            case 50244:
                $hex = '1888';
                break;
            case 47852:
                $hex = '175A';
                break;
            case 78525:
                $hex = '2655';
                break;
            case 98500:
                    $hex = '3011';
                    break;   
             case 100000:
                        $hex = '30D2';
                        break;            
             case 125000:
                $hex = '3D03';
                break;
            case 145200:
                $hex = '46EE';
                break;
            case 160552:
                $hex = '4E60';
                break;
            case 190000:
                $hex = '5CCF';
                break;    

            default:
                return null;
        }
        
        return [

            
            ['row' => 'F10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'F30', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 1, 'value' => substr($hex, 2, 2)],
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
           

            ['row' => 'F00', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F10', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 5, 'value' => substr($hex, 2, 2)],
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
           


            ['row' => 'F00', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F10', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 9, 'value' => substr($hex, 2, 2)],
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
           

            ['row' => 'F00', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F10', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F10', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F20', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F20', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F30', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F30', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F40', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F40', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F50', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F50', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F60', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F60', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => 'F70', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F70', 'cell' => 13, 'value' => substr($hex, 2, 2)],



            

        ];
    }
}
