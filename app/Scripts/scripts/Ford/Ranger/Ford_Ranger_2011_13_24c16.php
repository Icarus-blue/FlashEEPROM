<?php

namespace App\Scripts;

class Ford_Ranger_2011_13_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('70', 13) . $this->getByteForPosition('70', 12);
        $number = hexdec($hex);
         
        return [
            'result' => round((62730-$number) *16),
            'image' => 'assets/Ford.png',
            'texts' => [
                'Ford Ranger 2011-13',
                'Eerpom 24c16',
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
                $hex = 'CCF499E933D367A6CF4C9E993D337A66F4CCE999D333A6674CCF999E333D667A  ';
                break;
            case 4254:
                $hex = '01F403E807D00FA01F403E807D00FA00F401E803D007A00F401F803E007D00FA  ';
                break;
            case 10000:
                $hex = '99F233E567CACF949F293E537CA6F94CF299E533CA6794CF299F533EA67C4CF9 ';
                break;
            case 15000:
                $hex = '61F1C3E287C50F8B1F163E2C7C58F8B0F161E2C3C5878B0F161F2C3E587CB0F8  ';
                break;
             case 24555:
                $hex = '0CEF19DE33BC6778CEF09DE13BC37786EF0CDE19BC337867F0CEE19DC33B8677  ';
                break;
                case 35500:
                $hex = '60ECC1D883B107630EC61D8C3B187630EC60D8C1B1836307C60E8C1D183B3076 ';
                    break;    
            case 50244:
                $hex = 'C6E88DD11BA337466E8CDD18BA317463E8C6D18DA31B46378C6E18DD31BA6374  ';
                break;
            case 47852:
                $hex = '5CE9B9D273A5E74ACE959D2B3A5774AEE95CD2B9A5734AE795CE2B9D573AAE74  ';
                break;
            case 78525:
                $hex = 'DFE1BFC37F87FF0EFE1DFC3BF877F0EFE1DFC3BF877F0EFF1DFE3BFC77F8EFF0  ';
                break;
                case 98500:
                    $hex = 'FEDCFDB9FB73F6E7EDCFDB9FB73F6E7FDCFEB9FD73FBE7F6CFED9FDB3FB77F6E ';
                    break;    
             case 125000:
                $hex =     '86D60DAD1B5A36B46D68DAD0B5A16B43D686AD0D5A1BB436686DD0DAA1B5436B  ';
                break;
            case 145200:
                $hex = '97D12FA35F46BE8C7D19FA32F465E8CBD197A32F465F8CBE197D32FA65F4CBE8  ';
                break;
            case 160552:
                $hex = 'D8CDB19B6337C66E8CDD19BB337666ECCDD89BB137636EC6DD8CBB197633EC66  ';
                break;
            case 190000:
                $hex = 'A7C64F8D9F1A3E357C6AF8D4F1A9E353C6A78D4F1A9F353E6A7CD4F8A9F153E3  ';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '70', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($hex, 6, 2)],
            ['row' => '80', 'cell' => 0, 'value' => substr($hex, 8, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 10, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 12, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 14, 2)],
            ['row' => '80', 'cell' => 4, 'value' => substr($hex, 16, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hex, 18, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 20, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 22, 2)],
            ['row' => '80', 'cell' => 8, 'value' => substr($hex, 24, 2)],
            ['row' => '80', 'cell' => 9, 'value' => substr($hex, 26, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 28, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 30, 2)],

           
            ['row' => '80', 'cell' => 12, 'value' => substr($hex, 32, 2)],
            ['row' => '80', 'cell' => 13, 'value' => substr($hex, 34, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 36, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 38, 2)],
            ['row' => '90', 'cell' => 0, 'value' => substr($hex, 40, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex, 42, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 44, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 46, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex, 48, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex, 50, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 52, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 54, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex, 56, 2)],
            ['row' => '90', 'cell' => 9, 'value' => substr($hex, 58, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 60, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 62, 2)]

            
        ];
    }
}
