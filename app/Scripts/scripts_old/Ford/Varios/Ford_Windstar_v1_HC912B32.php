<?php

namespace App\Scripts;

class Ford_Windstar_v1_HC912B32 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('290', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('290', 1);
        $c = substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*168,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Windstar v1 ',
                'Micro HC912B32',
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
                $hex = '058E';
                break;
             case 24555:
                $hex = '091E';
                break;
            case 35750:
                    $hex = '0D38';
                    break;   
            case 50244:
                $hex = '129A';
                break;
            case 47852:
                $hex = '11B2';
                break;
            case 98500:
                $hex = '2466';
                break;       

            case 78525:
                $hex = '1D35';
                break;
             case 125000:
                $hex = '2E82';
                break;
            case 145200:
                $hex = '35BD';
                break;
            case 160552:
                $hex = '3B68';
                break;
            case 190000:
                $hex = '4645';
                break;    

            default:
                return null;
        }
        
        return [

            
            ['row' => '290', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '290', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '2A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '2A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '2B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '2B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '2C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '2C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '2D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '2D0', 'cell' => 1, 'value' => substr($hex, 2, 2)]

            

        ];
    }
}
