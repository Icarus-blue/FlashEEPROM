<?php

namespace App\Scripts;

class Ford_Focus_2007_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('7A0', 2) . $this->getByteForPosition('7A0', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number*24.96)),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Focus 2007',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
       
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
                $hex = '2800';
                break;
            case 4254:
                $hex = 'AA00';
                break;
            case 10000:
                $hex = '9101';
                break;
            case 15000:
                $hex = '5402';
                break;
             case 24555:
                $hex = 'D403';
                break;
                case 37500:
                    $hex = 'D805';
                    break;  
            
            case 47852:
                $hex = '7007';
                break;
            case 50244:
                    $hex = 'DC07';
                    break;    
            case 78525:
                $hex = '420C';
                break;
             case 125000:
                $hex = '8F13';
                break;
            case 145200:
                $hex = 'BC16';
                break;
            case 160552:
                $hex = '1319';
                break;
            case 190000:
                $hex = 'B71D';
                break;    

            default:
                return null;
        }
        
        return [

            
        
            ['row' => '7A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            
            ['row' => '7B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '7B0', 'cell' => 2, 'value' => substr($hex, 2, 2)]
            

        ];
    }
}
