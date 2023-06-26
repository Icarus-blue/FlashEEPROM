<?php

namespace App\Scripts;

class Ford_Tourneo_24c16 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('220', 3);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('220', 4);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $c . $d. $a ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*403,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Tourneo ',
                'Eeprom 24c16',
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
                $hex = '2800';
                break;
            case 4254:
                $hex = 'AA00';
                break;
            case 10000:
                $hex = '8601';
                break;
            case 15000:
                $hex = '5402';
                break;
             case 24555:
                $hex = 'C303';
                break;
                case 37500:
                    $hex = 'D805';
                    break;  
            
            case 47852:
                $hex = '6707';
                break;
            case 50244:
                    $hex = 'CB07';
                    break;    
            case 78525:
                $hex = '2D0C';
                break;
                case 98500:
                    $hex = '3C0F';
                    break;

             case 125000:
                $hex = '6213';
                break;
            case 145200:
                $hex = '7F16';
                break;
            case 160552:
                $hex = 'D218';
                break;
            case 190000:
                $hex = '631D';
                break;    

            default:
                return null;
        }
        
        return [

            
        
            ['row' => '1F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 10, 'value' => substr($hex, 2, 2)]
            

        ];
    }
}
