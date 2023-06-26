<?php

namespace App\Scripts;

class Gmc_Saturn_Relay_9S12H128 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('F10', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('F10', 1);
        $c = substr($byte2, 0, 1);
        $d = substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*103,
            'image' => 'assets/Gmc.png',
            'texts' => [
                'Saturn Relay',
                'Micro 9S12H128',
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
                $hex = '0093';
                break;
            case 4254:
                $hex = '0297';
                break;
            case 10000:
                $hex = '061D';
                break;
            case 15000:
                $hex = '091E';
                break;
             case 24555:
                $hex = '0EEA';
                break;
                case 37500:
                    $hex = '16C4';
                    break;    
            case 50244:
                $hex = '1E72';
                break;
            case 47852:
                $hex = '1D0C';
                break;
            case 78525:
                $hex = '2FAE';
                break;
                case 98500:
                $hex = '3BC4';
                break;  
                case 115000:
                    $hex = '45C1';
                    break;        
             case 125000:
                $hex = '4BD7';
                break;
            case 145200:
                $hex = '581F';
                break;
            case 160552:
                $hex = '6162';
                break;
            case 190000:
                $hex = '7345';
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

            ['row' => 'EF0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => 'EF0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
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

            ['row' => 'EF0', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'EF0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
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
