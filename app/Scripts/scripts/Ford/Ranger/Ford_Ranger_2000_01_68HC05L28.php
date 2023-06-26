<?php

namespace App\Scripts;

class Ford_Ranger_2000_01_68HC05L28 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('B0', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('B0', 1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);

        $byte3=$this->getByteForPosition('B0', 2);
        $e = substr($byte3, 0, 1);
        $f =substr($byte3, -1);

        $hex = $d. $e. $f ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*105,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Ranger',
                'Micro 68HC05L28',
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
                $hex = '070009 ';
                break;
            case 4254:
                $hex = '020028';
                break;
            case 10000:
                $hex = '02005F';
                break;
            case 15000:
                $hex = '02008E';
                break;
             case 24555:
                $hex = '0000E9';
                break;
            case 37500:
                $hex = '060165';
                break;    
            
            case 47852:
                $hex = '0701C7';
                break;
            case 50244:
                 $hex = '0501DE';
                    break;    
            case 78525:
                $hex = '0402EB';
            break;
            case 98500:
                 $hex = '0503AA';
            break;    
             case 125000:
                $hex = '0204A6';
                break;
            case 145200:
                $hex = '050566';
                break;
            case 160552:
                $hex = '0605F9';
                break;
            case 190000:
                $hex = '030711';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'C0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => 'D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => 'D0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'D0', 'cell' => 2, 'value' => substr($hex, 4, 2)],

         


         

        ];
    }
}
