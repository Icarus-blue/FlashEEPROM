<?php

namespace App\Scripts;

class Honda_Ridgeline_millas_9S12H256 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('F00', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('F00', 1);
        $c = substr($byte2, 0, 1);
        $d = substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*64,
            'image' => 'assets/Honda.png',
            'texts' => [
                'Ridgeline',
                'Micro 9S12H256',
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
                $hex = '00FC';
                break;
            case 4254:
                $hex = '0420';
                break;
            case 10000:
                $hex = '09CA';
                break;
            case 15000:
                $hex = '0EAB';
                break;
             case 24555:
                $hex = '17FF';
                break;
                case 35500:
                    $hex = '22A9';
                    break;    
            case 50244:
                $hex = '3119';
                break;
            case 47852:
                $hex = '2EBB';
                break;
            case 78525:
                $hex = '4CA1';
                break;
                case 98500:
                    $hex = '6036';
                    break;    
             case 125000:
                $hex = '7A1C';
                break;
            case 145200:
                $hex = '8DC3';
                break;
            case 160552:
                $hex = '9CCC';
                break;
            case 190000:
                $hex = 'B980';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => 'F00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
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
            ['row' => 'F90', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'F90', 'cell' => 1, 'value' => substr($hex, 2, 2)],

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
            ['row' => 'F80', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => 'F90', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'F90', 'cell' => 5, 'value' => substr($hex, 2, 2)],

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
            ['row' => 'F80', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F90', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'F90', 'cell' => 9, 'value' => substr($hex, 2, 2)],
           
         

            ['row' => 'EF0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'EF0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
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
            ['row' => 'F80', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => 'F80', 'cell' => 13, 'value' => substr($hex, 2, 2)],

         


            

        ];
    }
}
