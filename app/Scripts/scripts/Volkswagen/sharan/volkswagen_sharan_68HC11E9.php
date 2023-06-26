<?php

namespace App\Scripts;

class volkswagen_sharan_68HC11E9 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('1A0', 0);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('1A0',1);
        $c = substr($byte2, 0, 1);
        $d =substr($byte2, -1);
        $hex = $b . $c. $d ;
        $number = hexdec($hex); 

        return [
            'result' =>$number*226,
            'image' => 'assets/Volkswagen.png',
            'texts' => [
                'Sharan',
                'Micro 68HC11E9 ',
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
                $hex = 'C004';
                break;
            case 4254:
                $hex = 'E012';
                break;
            case 10000:
                $hex = '602C';
                break;
            case 15000:
                $hex = '6042';
                break;
             case 24555:
                $hex = 'A06C';
                break;
             case 37500:
                    $hex = 'C0A5';
                    break;

            case 50244:
                $hex = '20DE';
                break;
            case 47852:
                $hex = '00D3';
                break;
            case 78525:
                $hex = '265B';
                break;
            case 98500:
                    $hex = '415B';
                    break;    
             case 125000:
                $hex = '0229';
                break;
            case 145200:
                $hex = 'C282';
                break;
            case 160552:
                $hex = '22C6';
                break;
            case 190000:
                $hex = '0348';
                break;    

            default:
                return null;
        }
        
        return [

            
            ['row' => '1A0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 1, 'value' => substr($hex, 2, 2)]
        ];
    }
}
