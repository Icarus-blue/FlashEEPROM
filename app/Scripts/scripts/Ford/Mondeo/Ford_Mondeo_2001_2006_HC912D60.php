<?php

namespace App\Scripts;

class Ford_Mondeo_2001_2006_HC912D60 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('390', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('390', 1);
        $c = substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*168,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford  Mondeo 2001-2006',
                'Micro HC912D60',
                'www.flasheeprom.com'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                35750,
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
                $hex = '0050';
                break;
            case 4254:
                $hex = '0191';
                break;
            case 10000:
                $hex = '03BB';
                break;
            case 15000:
                $hex = '0599';
                break;
             case 24555:
                $hex = '0927';
                break;
            case 35750:
                    $hex = '0D40';
                    break;   
            case 50244:
                $hex = '12B4';
                break;
            case 47852:
                $hex = '11CA';
                break;
            case 98500:
                $hex = '24A5';
                break;       

            case 78525:
                $hex = '1D35';
                break;
             case 125000:
                $hex = '2E82';
                break;
            case 145200:
                $hex = '3600';
                break;
            case 160552:
                $hex = '3BBC';
                break;
            case 190000:
                $hex = '46A8';
                break;    

            default:
                return null;
        }
        
        return [

            
            ['row' => '390', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 1, 'value' => substr($hex, 2, 2)]

            

        ];
    }
}
