<?php

namespace App\Scripts;

class Freightliner_Columbia_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('100', 3) . $this->getByteForPosition('100', 2) . $this->getByteForPosition('100', 1) . $this->getByteForPosition('100', 0);
        $number = hexdec($hex);
        
        return [
            'result' => round((4294967295-$number) /10),
            'image' => 'assets/Freightliner.bmp',
            'texts' => [
                'Freightliner Columbia',
                'Eeprom 96c66',
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
                $hex = 'EFD8FFFFEFD8FFFFEFD8FFFF3A3A3A ';
                break;
            case 4254:
                $hex = 'D359FFFFD359FFFFD359FFFFD5D5D5 ';
                break;
            case 10000:
                $hex = '5F79FEFF5F79FEFF5F79FEFF2A2A2A  ';
                break;
            case 15000:
                $hex = '0FB6FDFF0FB6FDFF0FB6FDFF3E3E3E';
                break;
             case 24555:
                $hex = 'D140FCFFD140FCFFD140FCFFF3F3F3 ';
                break;
                case 35500:
                $hex = '4795FAFF4795FAFF4795FAFF2A2A2A ';
                    break;    
            case 50244:
                $hex = '5755F8FF5755F8FF5755F8FF5C5C5C';
                break;
            case 47852:
                $hex = 'C7B2F8FFC7B2F8FFC7B2F8FF8F8F8F';
                break;
            case 78525:
                $hex = '9D04F4FF9D04F4FF9D04F4FF6B6B6B';
                break;
                case 98500:
                    $hex = '57F8F0FF57F8F0FF57F8F0FFC1C1C1';
                    break;    
             case 125000:
                $hex =     '2FEDECFF2FEDECFF2FEDECFFF8F8F8';
                break;
            case 145200:
                $hex = '1FD8E9FF1FD8E9FF1FD8E9FF202020 ';
                break;
            case 160552:
                $hex = '6F80E7FF6F80E7FF6F80E7FF2A2A2A ';
                break;
            case 190000:
                $hex = '1F02E3FF1F02E3FF1F02E3FFFCFCFC';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '100', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '100', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '100', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '100', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '100', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '100', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '100', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '100', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '100', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '100', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '100', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '100', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '110', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '110', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '110', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '110', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '110', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '110', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '110', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '110', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '110', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '110', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '110', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '110', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '110', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '110', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '110', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '120', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '120', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '120', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '120', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '120', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '120', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '120', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '120', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '120', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '120', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '120', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '120', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '120', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '120', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '120', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '130', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '130', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '130', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '130', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '130', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '130', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '130', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '130', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '130', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '130', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '130', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '130', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '130', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '130', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '130', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '140', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '140', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '140', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '140', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '140', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '140', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '140', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '140', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '140', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '140', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '140', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '140', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '140', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '140', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '140', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '150', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '150', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '150', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '150', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '150', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '150', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '150', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '150', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '150', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '150', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '150', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '150', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '150', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '150', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '150', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '160', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '160', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '160', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '160', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '160', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '160', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '160', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '160', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '160', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '160', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '160', 'cell' => 14, 'value' => substr($hex, 28, 2)],
             
            ['row' => '170', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '170', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '170', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '170', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '170', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '170', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '170', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '170', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '170', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '170', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '170', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '170', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '170', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '170', 'cell' => 14, 'value' => substr($hex, 28, 2)],

            ['row' => '180', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '180', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '180', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '180', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '180', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '180', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '180', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '180', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '180', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '180', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '180', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '180', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '180', 'cell' => 14, 'value' => substr($hex, 28, 2)],


            
        ];
    }
}
