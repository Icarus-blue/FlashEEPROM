<?php

namespace App\Scripts;

class Nissan_Almera_Var2_Kansey_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('60', 9) . $this->getByteForPosition('60', 8);
        $number = hexdec($hex);
         
        return [
            'result' => round((65535-($number))*5367/100),//  (0xb73d - (@0x69 << 8 | @0x68)) * 5367 / 100;
            'image' => 'assets/Nissan.png',
            'texts' => [
                'Almera Var2 ',
                'Eerpom 93c66',
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
             $hex='EDFFDBFFB7FF6FFFD9FFB3FF';
                break;
             case 4254:
             $hex='B0FF61FFC3FE87FD5FFFBFFE';
                break;
             case 10000:
             $hex='45FF8BFE17FD2FFA89FE13FD';
                break;
             case 15000:
             $hex='E8FED1FDA3FB47F7CFFD9FFB';
                break;
             case 24555:
             $hex='36FE6DFCDBF8B7F16BFCD7F8';
                break;
             case 35500:
             $hex='6AFDD5FAABF557EBD3FAA7F5';
                break;
             case 50244:
             $hex='57FCAFF85FF1BFE2ADF85BF1';
                break;
             case 47852:
             $hex='84FC09F913F227E407F90FF2';
                break;
             case 78525:
             $hex='48FA91F423E947D28FF41FE9';
                break;
             case 98500:
             $hex='D4F8A9F153E3A7C6A7F14FE3';
                break;
             case 125000:
             $hex='E6F6CDED9BDB37B7CBED97DB';
                break;
             case 145200:
             $hex='ACAC5959B2B265655759AEB2';
                break;
             case 160552:
             $hex='50F4A1E843D187A29FE83FD1';
                break;
             case 190000:
             $hex='2BF257E4AFC85F9155E4ABC8';
                break;

         default:
             return null;
        }
        
        return [

           
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex, 6, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex, 8, 2)],
            ['row' => '60', 'cell' => 13, 'value' => substr($hex, 10, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 12, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($hex, 14, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 16, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex, 18, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex, 20, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 22, 2)],

        ];
    }
}
