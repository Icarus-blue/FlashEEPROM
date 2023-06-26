<?php
namespace App\Scripts;
class CHANGAN_HONOR_DASH_9S12HA32_CHECKSUM_V2 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',1). $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         

        return [
            'result' =>round($number*256),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'HONOR CHECKSUM Dash',
                'EEPROM 9S12HA32 ',
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
                $hexA = '0003DE';$hexB = '0003DF';$hexC = '0003E0';$hexD = '0003E1';$hexE = '0003E2';$hexF = '0003E3';$hexG = '0003E4';$hexH = '0003E5';$hexI = '0003E6';$hexJ = '0003E7';$hexK = '0003E8';
                break;
            case 4254:
                $hexA = '001094';$hexB = '001095';$hexC = '001096';$hexD = '001097';$hexE = '001098';$hexF = '001099';$hexG = '00109A';$hexH = '00109B';$hexI = '00109C';$hexJ = '00109D';$hexK = '00109E';
                break;
            case 10000:
                $hexA = '002706';$hexB = '002707';$hexC = '002708';$hexD = '002709';$hexE = '00270A';$hexF = '00270B';$hexG = '00270C';$hexH = '00270D';$hexI = '00270E';$hexJ = '00270F';$hexK = '002710';
               
                break;
            case 15000:
                $hexA = '003A8E';$hexB = '003A8F';$hexC = '003A90';$hexD = '003A91';$hexE = '003A92';$hexF = '003A93';$hexG = '003A94';$hexH = '003A95';$hexI = '003A96';$hexJ = '003A97';$hexK = '003A98';
               
                break;
             case 24555:
                $hexA = '005FE1';$hexB = '005FE2';$hexC = '005FE3';$hexD = '005FE4';$hexE = '005FE5';$hexF = '005FE6';$hexG = '005FE7';$hexH = '005FE8';$hexI = '005FE9';$hexJ = '005FEA';$hexK = '005FEB';
               
                break;
             case 37500:
                $hexA = '009272';$hexB = '009273';$hexC = '009274';$hexD = '009275';$hexE = '009276';$hexF = '009277';$hexG = '009278';$hexH = '009279';$hexI = '00927A';$hexJ = '00927B';$hexK = '00927C';
               
                    break;

            case 50244:
                $hexA = '00C43A';$hexB = '00C43B';$hexC = '00C43C';$hexD = '00C43D';$hexE = '00C43E';$hexF = '00C43F';$hexG = '00C440';$hexH = '00C441';$hexI = '00C442';$hexJ = '00C443';$hexK = '00C444';
               
                break;
            case 60500:
                $hexA = '00EC4A';$hexB = '00EC4B';$hexC = '00EC4C';$hexD = '00EC4D';$hexE = '00EC4E';$hexF = '00EC4F';$hexG = '00EC50';$hexH = '00EC51';$hexI = '00EC52';$hexJ = '00EC53';$hexK = '00EC54';
               
                    break;   

            case 47852:
                $hexA = '00BAE2';$hexB = '00BAE3';$hexC = '00BAE4';$hexD = '00BAE5';$hexE = '00BAE6';$hexF = '00BAE7';$hexG = '00BAE8';$hexH = '00BAE9';$hexI = '00BAEA';$hexJ = '00BAEB';$hexK = '00BAEC';
               
                break;
            case 78525:
                $hexA = '0132B3';$hexB = '0132B4';$hexC = '0132B5';$hexD = '0132B6';$hexE = '0132B7';$hexF = '0132B8';$hexG = '0132B9';$hexH = '0132BA';$hexI = '0132BB';$hexJ = '0132BC';$hexK = '0132BD';
               
                break;
            case 98500:
                $hexA = '0180BA';$hexB = '0180BB';$hexC = '0180BC';$hexD = '0180BD';$hexE = '0180BE';$hexF = '0180BF';$hexG = '0180C0';$hexH = '0180C1';$hexI = '0180C2';$hexJ = '0180C3';$hexK = '0180C4';
               
                 break;    
            case 100000:
                $hexA = '018696';$hexB = '018697';$hexC = '018698';$hexD = '018699';$hexE = '01869A';$hexF = '01869B';$hexG = '01869C';$hexH = '01869D';$hexI = '01869E';$hexJ = '01869F';$hexK = '0186A0';
               
                 break;          
             case 125000:
                $hexA = '01E83E';$hexB = '01E83F';$hexC = '01E840';$hexD = '01E841';$hexE = '01E842';$hexF = '01E843';$hexG = '01E844';$hexH = '01E845';$hexI = '01E846';$hexJ = '01E847';$hexK = '01E848';
               
                break;
            case 145200:
                $hexA = '023726';$hexB = '023727';$hexC = '023728';$hexD = '023729';$hexE = '02372A';$hexF = '02372B';$hexG = '02372C';$hexH = '02372D';$hexI = '02372E';$hexJ = '02372F';$hexK = '023730';
               
                break;
            case 160552:
                $hexA = '02731E';$hexB = '02731F';$hexC = '027320';$hexD = '027321';$hexE = '027322';$hexF = '027323';$hexG = '027324';$hexH = '027325';$hexI = '027326';$hexJ = '027327';$hexK = '027328';
               
                break;
            case 190000:
                $hexA = '02E626';$hexB = '02E627';$hexC = '02E628';$hexD = '02E629';$hexE = '02E62A';$hexF = '02E62B';$hexG = '02E62C';$hexH = '02E62D';$hexI = '02E62E';$hexJ = '02E62F';$hexK = '02E630';
               
                break;    

            default:
                return null;
        }
        
        return [

            
            ['row' => '00', 'cell' => 1, 'value' => substr($hexA, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hexA, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hexA, 4, 2)],

            ['row' => '00', 'cell' =>5, 'value' => substr($hexB, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hexB, 2, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hexB, 4, 2)],

            ['row' => '00', 'cell' => 9, 'value' => substr($hexC, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hexC, 2, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hexC, 4, 2)],

            ['row' => '00', 'cell' => 13, 'value' => substr($hexD, 0, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hexD, 2, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hexD, 4, 2)],


            ['row' => '10', 'cell' => 1, 'value' => substr($hexE, 0, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hexE, 2, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hexE, 4, 2)],

            ['row' => '10', 'cell' =>5, 'value' => substr($hexF, 0, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hexF, 2, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hexF, 4, 2)],

            ['row' => '10', 'cell' => 9, 'value' => substr($hexG, 0, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hexG, 2, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hexG, 4, 2)],

            ['row' => '10', 'cell' => 13, 'value' => substr($hexH, 0, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hexH, 2, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hexH, 4, 2)],



            ['row' => '20', 'cell' => 1, 'value' => substr($hexI, 0, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hexI, 2, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hexI, 4, 2)],

            ['row' => '20', 'cell' =>5, 'value' => substr($hexJ, 0, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hexJ, 2, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hexJ, 4, 2)],

            ['row' => '20', 'cell' => 9, 'value' => substr($hexK, 0, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hexK, 2, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hexK, 4, 2)],




            ['row' => '500', 'cell' => 1, 'value' => substr($hexA, 0, 2)],
            ['row' => '500', 'cell' => 2, 'value' => substr($hexA, 2, 2)],
            ['row' => '500', 'cell' => 3, 'value' => substr($hexA, 4, 2)],

            ['row' => '500', 'cell' =>5, 'value' => substr($hexB, 0, 2)],
            ['row' => '500', 'cell' => 6, 'value' => substr($hexB, 2, 2)],
            ['row' => '500', 'cell' => 7, 'value' => substr($hexB, 4, 2)],

            ['row' => '500', 'cell' => 9, 'value' => substr($hexC, 0, 2)],
            ['row' => '500', 'cell' => 10, 'value' => substr($hexC, 2, 2)],
            ['row' => '500', 'cell' => 11, 'value' => substr($hexC, 4, 2)],

            ['row' => '500', 'cell' => 13, 'value' => substr($hexD, 0, 2)],
            ['row' => '500', 'cell' => 14, 'value' => substr($hexD, 2, 2)],
            ['row' => '500', 'cell' => 15, 'value' => substr($hexD, 4, 2)],


            ['row' => '510', 'cell' => 1, 'value' => substr($hexE, 0, 2)],
            ['row' => '510', 'cell' => 2, 'value' => substr($hexE, 2, 2)],
            ['row' => '510', 'cell' => 3, 'value' => substr($hexE, 4, 2)],

            ['row' => '510', 'cell' =>5, 'value' => substr($hexF, 0, 2)],
            ['row' => '510', 'cell' => 6, 'value' => substr($hexF, 2, 2)],
            ['row' => '510', 'cell' => 7, 'value' => substr($hexF, 4, 2)],

            ['row' => '510', 'cell' => 9, 'value' => substr($hexG, 0, 2)],
            ['row' => '510', 'cell' => 10, 'value' => substr($hexG, 2, 2)],
            ['row' => '510', 'cell' => 11, 'value' => substr($hexG, 4, 2)],

            ['row' => '510', 'cell' => 13, 'value' => substr($hexH, 0, 2)],
            ['row' => '510', 'cell' => 14, 'value' => substr($hexH, 2, 2)],
            ['row' => '510', 'cell' => 15, 'value' => substr($hexH, 4, 2)],



            ['row' => '520', 'cell' => 1, 'value' => substr($hexI, 0, 2)],
            ['row' => '520', 'cell' => 2, 'value' => substr($hexI, 2, 2)],
            ['row' => '520', 'cell' => 3, 'value' => substr($hexI, 4, 2)],

            ['row' => '520', 'cell' =>5, 'value' => substr($hexJ, 0, 2)],
            ['row' => '520', 'cell' => 6, 'value' => substr($hexJ, 2, 2)],
            ['row' => '520', 'cell' => 7, 'value' => substr($hexJ, 4, 2)],

            ['row' => '520', 'cell' => 9, 'value' => substr($hexK, 0, 2)],
            ['row' => '520', 'cell' => 10, 'value' => substr($hexK, 2, 2)],
            ['row' => '520', 'cell' => 11, 'value' => substr($hexK, 4, 2)],

            
        ];
    }
}
