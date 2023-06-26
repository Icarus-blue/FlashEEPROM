<?php

namespace App\Scripts;

class Freightliner_25080 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('80', 0) . $this->getByteForPosition('80', 1) . $this->getByteForPosition('80', 2) . $this->getByteForPosition('80', 3);
        $number = hexdec($hex);
        
        return [
            'result' => round((4294967295-$number) /10),
            'image' => 'assets/Freightliner.bmp',
            'texts' => [
                'Freightliner',
                'Eeprom 25080',
                'FlashEeprom'
            ],

            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                35500,
                47852,
                50244,
                78525,
                98500,
                125000,
                145200,
                160552,
                190000
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        switch ($value) {
            case 1000:
                $hex = 'FFFFD8EFFFFFD8EFFFFFD8EF3B3B3B';
                break;
            case 4254:
                $hex = 'FFFF59D3FFFF59D3FFFF59D3D6D6D6  ';
                break;
            case 10000:
                $hex = 'FFFE795FFFFE795FFFFE795F2B2B2B  ';
                break;
            case 15000:
                $hex = 'FFFDB60FFFFDB60FFFFDB60F3F3F3F ';
                break;
             case 24555:
                $hex = 'FFFC40D1FFFC40D1FFFC40D1F4F4F4  ';
                break;
                case 35500:
                $hex = 'FFFA9547FFFA9547FFFA95472B2B2B  ';
                    break;    
            case 50244:
                $hex = 'FFF85557FFF85557FFF855575D5D5D ';
                break;
            case 47852:
                $hex = 'FFF8B2C7FFF8B2C7FFF8B2C7909090 ';
                break;
            case 78525:
                $hex = 'FFF4049DFFF4049DFFF4049D6C6C6C ';
                break;
                case 98500:
                    $hex = 'FFF0F857FFF0F857FFF0F857C2C2C2 ';
                    break;    
             case 125000:
                $hex =     'FFECED2FFFECED2FFFECED2FF9F9F9 ';
                break;
            case 145200:
                $hex = 'FFE9D81FFFE9D81FFFE9D81F212121  ';
                break;
            case 160552:
                $hex = 'FFE7806FFFE7806FFFE7806F2B2B2B ';
                break;
            case 190000:
                $hex = 'FFE3021FFFE3021FFFE3021FFDFDFD';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '50', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '50', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '60', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 28, 2)],
             
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '80', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '80', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '80', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 28, 2)],


            
        ];
    }
}
