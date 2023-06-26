<?php

namespace App\Scripts;

class Ford_Fiesta_Dash_Azul_V1_2010_9s12xeq384 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('100', 3);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('100', 4);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/Ford.png',
            'texts' => [
                'Fista Dash Azul v1',
                'Micro 9s12xeq384',
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

               
            
   
            ['row' => 'F0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            ['row' => '100', 'cell' => 15, 'value' => substr($hex, 0, 2)],
             ['row' => '110', 'cell' => 0, 'value' => substr($hex, 2, 2)],
             ['row' => '110', 'cell' => 15, 'value' => substr($hex, 0, 2)],
             ['row' => '120', 'cell' => 0, 'value' => substr($hex, 2, 2)],
             ['row' => '120', 'cell' => 15, 'value' => substr($hex, 0, 2)],
             ['row' => '130', 'cell' => 0, 'value' => substr($hex, 2, 2)],
             ['row' => '130', 'cell' => 15, 'value' => substr($hex, 0, 2)],
             ['row' => '140', 'cell' => 0, 'value' => substr($hex, 2, 2)],
             ['row' => '140', 'cell' => 15, 'value' => substr($hex, 0, 2)],
             ['row' => '150', 'cell' => 0, 'value' => substr($hex, 2, 2)],
             ['row' => '150', 'cell' => 15, 'value' => substr($hex, 0, 2)],
             ['row' => '160', 'cell' => 0, 'value' => substr($hex, 2, 2)],
             ['row' => '160', 'cell' => 15, 'value' => substr($hex, 0, 2)],
             ['row' => '170', 'cell' => 0, 'value' => substr($hex, 2, 2)],
             
             ['row' => '100', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '100', 'cell' => 3,'value' => substr($hex, 0, 2)],

             ['row' => '110', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '110', 'cell' => 3,'value' => substr($hex, 0, 2)],

             ['row' => '120', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '120', 'cell' => 3,'value' => substr($hex, 0, 2)],

             ['row' => '130', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '130', 'cell' => 3,'value' => substr($hex, 0, 2)],

             ['row' => '140', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '140', 'cell' => 3,'value' => substr($hex, 0, 2)],

             ['row' => '150', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '150', 'cell' => 3,'value' => substr($hex, 0, 2)],

             ['row' => '160', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '160', 'cell' => 3,'value' => substr($hex, 0, 2)],

             ['row' => '170', 'cell' => 4,'value' => substr($hex, 2, 2)],
             ['row' => '170', 'cell' => 3,'value' => substr($hex, 0, 2)],


             ['row' => '100', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '100', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => '110', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '110', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => '120', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '120', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => '130', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '130', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => '140', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '140', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => '150', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '150', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => '160', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '160', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => '170', 'cell' => 8,'value' => substr($hex, 2, 2)],
             ['row' => '170', 'cell' => 7,'value' => substr($hex, 0, 2)],

             ['row' => 'F0', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => 'F0', 'cell' => 11,'value' => substr($hex, 0, 2)],

             ['row' => '100', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => '100', 'cell' => 11,'value' => substr($hex, 0, 2)],

             ['row' => '110', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => '110', 'cell' => 11,'value' => substr($hex, 0, 2)],

             ['row' => '120', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => '120', 'cell' => 11,'value' => substr($hex, 0, 2)],

             ['row' => '130', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => '130', 'cell' => 11,'value' => substr($hex, 0, 2)],

             ['row' => '140', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => '140', 'cell' => 11,'value' => substr($hex, 0, 2)],

             ['row' => '150', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => '150', 'cell' => 11,'value' => substr($hex, 0, 2)],

             ['row' => '160', 'cell' => 12,'value' => substr($hex, 2, 2)],
             ['row' => '160', 'cell' => 11,'value' => substr($hex, 0, 2)],

           
           
            

        ];
    }
}
