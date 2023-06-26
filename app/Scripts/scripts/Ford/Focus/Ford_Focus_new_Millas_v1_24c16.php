<?php

namespace App\Scripts;

class Ford_Focus_new_Millas_v1_24c16 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('7A0', 3);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('7A0', 4);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $c . $d. $a ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*156,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Focus millas v1',
                'Eeprom_24c16',
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
                $hex = '6900';
                break;
            case 4254:
                $hex = 'BF01';
                break;
            case 10000:
                $hex = '0E04';
                break;
            case 15000:
                $hex = '0A06';
                break;
             case 24555:
                $hex = 'DD09';
                break;
                case 37500:
                    $hex = '050F';
                    break;  
            
            case 47852:
                $hex = '2313';
                break;
            case 50244:
                $hex = '2D14';
                 break;    
            case 78525:
                $hex = '701F';
                break;

                case 98500:
                    $hex = '7727';
                    break;  

             case 125000:
                $hex = '1F32';
                break;
            case 145200:
                $hex = '2B3A';
                break;
            case 160552:
                $hex = '5E40';
                break;
            case 190000:
                $hex = '1A4C';
                break;    

            default:
                return null;
        }
        
        return [

            
        
            ['row' => '790', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '7B0', 'cell' => 0, 'value' => substr($hex, 2, 2)]
            

        ];
    }
}
