<?php

namespace App\Scripts;

class Mercedes_Sprinter_EZS_2008_9S12DT256 extends Script
{
  
    public function getResult()
    {
        $hex = $this->getByteForPosition('40', 4) . $this->getByteForPosition('40', 5).$this->getByteForPosition('40', 8) ;
        $number = hexdec($hex);
         
        return [
            'result' => round(($number) /10),
            'image' => 'assets/mercedes.png',
            'texts' => [
                'Sprinter 2008 ',
                'Micro 9S12DT256',
                'www.flashEeprom.com'
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
                $hex = '0027FFFF1000FFFF2710FFFF0027FFFF10';
                break;
            case 4254:
                $hex = '00A6FFFF2C00FFFFA62CFFFF00A6FFFF2C';
                break;
            case 10000:
                $hex = '0186FFFFA001FFFF86A0FFFF0186FFFFA0';
                break;
            case 15000:
                $hex = '0249FFFFF002FFFF49F0FFFF0249FFFFF0';
                break;
             case 24555:
                $hex = '03BFFFFF2E03FFFFBF2EFFFF03BFFFFF2E';
                break;
                case 37500:
                    $hex = '05B8FFFFD805FFFFB8D8FFFF05B8FFFFD8';
                    break;  
            
            case 47852:
                $hex = '074DFFFF3807FFFF4D38FFFF074DFFFF38';
                break;
            case 50244:
                    $hex = '07AAFFFFA807FFFFAAA8FFFF07AAFFFFA8';
                    break;    
            case 78525:
                $hex = '0BFBFFFF620BFFFFFB62FFFF0BFBFFFF62';
                break;
                case 98500:
                    $hex = '0F07FFFFA80FFFFF07A8FFFF0F07FFFFA8';
                    break;

             case 125000:
                $hex = '1312FFFFD013FFFF12D0FFFF1312FFFFD0';
                break;
            case 145200:
                $hex = '1627FFFFE016FFFF27E0FFFF1627FFFFE0';
                break;
            case 160552:
                $hex = '187FFFFF9018FFFF7F90FFFF187FFFFF90';
                break;
            case 190000:
                $hex = '1CFDFFFFE01CFFFFFDE0FFFF1CFDFFFFE0';
                break;    

            default:
                return null;
        }
        
        return [

            
        
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 8, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 10, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 12, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 14, 2)],
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 16, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 18, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 20, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 22, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 24, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 26, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 28, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 30, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 32, 2)]
            

        ];
    }
}
