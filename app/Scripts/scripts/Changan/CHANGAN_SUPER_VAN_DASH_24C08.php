<?php
namespace App\Scripts;
class CHANGAN_SUPER_VAN_DASH_24C08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('390',4). $this->getByteForPosition('390', 5);
        $number = hexdec($hex);
         

        return [
            'result' =>round($number*1.562),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'SUPER VAN Dash',
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
                $hex = '0280FF';
                break;
            case 4254:
                $hex = '0AA3FF';
                break;
            case 10000:
                $hex = '1904FF';
                break;
            case 15000:
                $hex = '2589FF';
                break;
             case 24555:
                $hex = '3D64FF';
                break;
             case 37500:
                    $hex = '5DC1FF';
                    break;

            case 50244:
                $hex = '7D99FF';
                break;
            case 60500:
                    $hex = '9745FF';
                    break;   

            case 47852:
                $hex = '77A0FF';
                break;
            case 78525:
                $hex = 'C457FF';
                break;
            case 98500:
                 $hex = 'F64E';
                 break;    
            case 100000:
                 $hex = 'FA0AFF';
                 break;          
             case 125000:
                $hex = '3882EF';
                break;
            case 145200:
                $hex = '6B05EF';
                break;
            case 160552:
                $hex = '9166EF';
                break;
            case 190000:
                $hex = 'DB0EEF';
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
