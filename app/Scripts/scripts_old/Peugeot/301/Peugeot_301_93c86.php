<?php

namespace App\Scripts;

class Peugeot_301_93c86 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('650' ,5). $this->getByteForPosition('650' , 3) .$this->getByteForPosition('650' ,2);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)/10),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                '301',
                'Eeprom 93c86',
                'www.flashEeprom.com'
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
            'fileprefix' => 'archivo'
        ];
    }
    
    public function calculate(int $value)
    {
        switch ($value) {
            case 1000:
                $hex='D8EF271000';
                break;
                case   4254:
                $hex='59D3A62C00';
                break;
                case   10000:
                $hex='795E86A001';
                break;
                case   15000:
                $hex='B60D49F002';
                break;
                case   24555:
                $hex='40CEBF2E03';
                break;
                case   35500:
                $hex='95426AB805';
                break;
                case   50244:
                $hex='5550AAA807';
                break;
                case   47852:
                $hex='B2C04D3807';
                break;
                case   78525:
                $hex='0492FB620B';
                break;
                case   98500:
                $hex='F84807A80F';
                break;
                case   125000:
                $hex='ED1C12D013';
                break;
                case   145200:
                $hex='D80927E016';
                break;
                case   160552:
                $hex='80577F9018';
                break;
                case   190000:
                $hex='0203FDE01C';
                   break;

            default:
                return null;
        }
        
        return [

            ['row' => '670' , 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '670' , 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '670' , 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '670' , 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '670' , 'cell' => 5, 'value' => substr($hex, 8, 2)],

            ['row' => '660' , 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '660' , 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '660' , 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '660' , 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '660' , 'cell' => 5, 'value' => substr($hex, 8, 2)],

            ['row' => '650' , 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '650' , 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '650' , 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '650' , 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '650' , 'cell' => 5, 'value' => substr($hex, 8, 2)],

            ['row' => '640', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '640', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '640', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '640', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '640', 'cell' => 5, 'value' => substr($hex, 8, 2)],



        ];
    }
}
