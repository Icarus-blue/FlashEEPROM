<?php

namespace App\Scripts;

class Nissan_murano_kanzey_millas_v1_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('60', 9) . $this->getByteForPosition('60', 8);
        $number = hexdec($hex);
         
        return [
            'result' => round((35560-($number))*3337/100), //(0x8AE8 - (@0x69 << 8 | @0x68)) * 3337 / 100
            'image' => 'assets/Nissan.png',
            'texts' => [
                'Murano v1',
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
                $hex='CB8A97152E2B5C5695152A2B';
     break;
  case 4254:
                $hex='698AD314A6294C53D114A229';
     break;
  case 10000:
                $hex='BD897B13F626EC4D7913F226';
     break;
  case 15000:
                $hex='27894F129E243C494D129A24';
     break;
  case 24555:
                $hex='0988131026204C4011102220';
     break;
  case 35500:
                $hex='C186830D061B0C36810D021B';
     break;
  case 50244:
                $hex='07850F0A1E143C280D0A1A14';
     break;
  case 47852:
                $hex='4F859F0A3E157C2A9D0A3A15';
     break;
  case 78525:
                $hex='B7816F03DE06BC0D6D03DA06';
     break;
  case 98500:
                $hex='617FC2FE85FD0BFBC0FE81FD';
     break;
  case 125000:
                $hex='477C8EF81DF13BE28CF819F1';
     break;
  case 145200:
                $hex='E979D2F3A5E74BCFD0F3A1E7';
     break;
  case 160552:
                $hex='1D783AF075E0EBC038F071E0';
     break;
  case 190000:
                $hex='AB7456E9ADD25BA554E9A9D2';
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
