<?php
namespace App\Scripts;
class CHANGAN_CS35_DASH_9S12XHY128 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('490', 2);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('490', 3);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $a . $b. $c ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*128,
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'Changan CS35 Dash',
                'Micro 9S12XHY128',
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
                60500,
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
            case 60500:
                    $hex = '1D8E';
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

            
            ['row' => '470', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '470', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '470', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '470', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '480', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '480', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '480', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '480', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '480', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '480', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '480', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '480', 'cell' => 15, 'value' => substr($hex, 2, 2)],


            ['row' => '490', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '490', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '490', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '490', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '490', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '490', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '490', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '490', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '4A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '4A0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '4A0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '4A0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '4A0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '4A0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '4A0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '4A0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
           
            ['row' => '4B0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '4B0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '4B0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '4B0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '4B0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '4B0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '4B0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '4B0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '4C0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '4C0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '4C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '4C0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '4C0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '4C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '4C0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '4C0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '4D0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '4D0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '4D0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '4D0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '4D0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '4D0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '4D0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '4D0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '4E0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '4E0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '4E0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '4E0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '4E0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '4E0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '4E0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '4E0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '4F0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '4F0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '4F0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '4F0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
        
           

             
            ['row' => '670', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '670', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '670', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '680', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '680', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '680', 'cell' => 15, 'value' => substr($hex, 2, 2)],


            ['row' => '690', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '690', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '690', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '6A0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '6A0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '6A0', 'cell' => 15, 'value' => substr($hex, 2, 2)],
           
            ['row' => '6B0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '6B0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '6B0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '6B0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '6B0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '6C0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '6C0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '6C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '6C0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '6C0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '6C0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '6C0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '6C0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '6D0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '6D0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '6D0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '6D0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '6D0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '6D0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '6D0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '6D0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '6E0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '6E0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '6E0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '6E0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '6E0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '6E0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '6E0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => '6E0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => '6F0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '6F0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => '6F0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => '6F0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
           

        ];
    }
}
