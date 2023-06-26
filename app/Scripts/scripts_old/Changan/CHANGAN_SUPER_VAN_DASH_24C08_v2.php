<?php
namespace App\Scripts;
class CHANGAN_SUPER_VAN_DASH_24C08_v2 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('390',5). $this->getByteForPosition('390', 4);
        $number = hexdec($hex);
         

        return [
            'result' =>round($number*1.562),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'SUPER VAN Dash v2',
                'EEPROM 24C08 ',
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
                $hex = '8002FF';
                break;
            case 4254:
                $hex = 'A30AFF';
                break;
            case 10000:
                $hex = '0419FF';
                break;
            case 15000:
                $hex = '8925FF';
                break;
             case 24555:
                $hex = '643DFF';
                break;
             case 37500:
                    $hex = 'C15DFF';
                    break;

            case 50244:
                $hex = '997DFF';
                break;
            case 60500:
                    $hex = '4597FF';
                    break;   

            case 47852:
                $hex = 'A077FF';
                break;
            case 78525:
                $hex = '57C4FF';
                break;
            case 98500:
                 $hex = '4EF6FF';
                 break;    
            case 100000:
                 $hex = '0AFAFF';
                 break;          
             case 125000:
                $hex = '8238EF';
                break;
            case 145200:
                $hex = '056BEF';
                break;
            case 160552:
                $hex = '6691EF';
                break;
            case 190000:
                $hex = '0EDBEF';
                break;    

            default:
                return null;
        }
        
        return [

            
            ['row' => '390', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '390', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '390', 'cell' =>8, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '390', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '390', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '390', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '390', 'cell' => 14, 'value' => substr($hex, 4, 2)],


            ['row' => '3A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3A0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '3A0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '3A0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '3A0', 'cell' =>8, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '3A0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '3A0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3A0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '3A0', 'cell' => 14, 'value' => substr($hex, 4, 2)],

            ['row' => '3B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '3B0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '3B0', 'cell' =>8, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '3B0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3B0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '3B0', 'cell' => 14, 'value' => substr($hex, 4, 2)],

            ['row' => '3C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3C0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '3C0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '3C0', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '3C0', 'cell' =>8, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '3C0', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '3C0', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '3C0', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '3C0', 'cell' => 14, 'value' => substr($hex, 4, 2)],

            ['row' => '3D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '3D0', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '3D0', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '3D0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '3D0', 'cell' => 6, 'value' => substr($hex, 4, 2)],


           
        ];
    }
}
