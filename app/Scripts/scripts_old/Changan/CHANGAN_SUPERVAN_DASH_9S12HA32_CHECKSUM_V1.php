<?php
namespace App\Scripts;
class CHANGAN_SUPERVAN_DASH_9S12HA32_CHECKSUM_V1 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',1). $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         

        return [
            'result' =>round($number*256),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'SUPERVAN_DASH CHECKSUM Dash V1',
                'MICRO 9S12HA32  ',
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
                $hexA= '0003E8'; $hexB= '0003E9'; $hexC= '0003EA'; $hexD= '0003EB'; $hexE= '0003EC'; 
                $hexF= '0003E8'; $hexG= '0003EE'; $hexH= '0003EF'; $hexI= '0003F0'; $hexJ= '0003F1'; 
                break;
            case 4254:
                $hexA= '00109E'; $hexB= '00109F'; $hexC= '0010A0'; $hexD= '0010A1'; $hexE= '0010A2'; 
                $hexF= '0010E9'; $hexG= '0010A4'; $hexH= '0010A5'; $hexI= '0010A6'; $hexJ= '0010A7'; 
                break;
            case 10000:
                $hexA= '002710'; $hexB= '002711'; $hexC= '002712'; $hexD= '002713'; $hexE= '002714'; 
                $hexF= '002710'; $hexG= '002716'; $hexH= '002717'; $hexI= '002718'; $hexJ= '002719'; 
                
                break;
            case 15000:
                $hexA= '003A98'; $hexB= '003A99'; $hexC= '003A9A'; $hexD= '003A9B'; $hexE= '003A9C'; 
                $hexF= '003A98'; $hexG= '003A9E'; $hexH= '003A9F'; $hexI= '003AA0'; $hexJ= '003AA1'; 
                
                break;
             case 24555:
                $hexA= '005FEB'; $hexB= '005FEC'; $hexC= '005FED'; $hexD= '005FEE'; $hexE= '005FEF'; 
                $hexF= '005FEB'; $hexG= '005FF1'; $hexH= '005FF2'; $hexI= '005FF3'; $hexJ= '005FF4'; 
                
                break;
             case 37500:
                $hexA= '00927C'; $hexB= '00927D'; $hexC= '00927E'; $hexD= '00927F'; $hexE= '009280'; 
                $hexF= '00927C'; $hexG= '009282'; $hexH= '009283'; $hexI= '009284'; $hexJ= '009285'; 
                
                    break;

            case 50244:
                $hexA= '00C444'; $hexB= '00C445'; $hexC= '00C446'; $hexD= '00C447'; $hexE= '00C448'; 
                $hexF= '00C444'; $hexG= '00C44A'; $hexH= '00C44B'; $hexI= '00C44C'; $hexJ= '00C44D'; 
               
                break;
            case 60500:
                $hexA= '00EC54'; $hexB= '00EC55'; $hexC= '00EC56'; $hexD= '00EC57'; $hexE= '00EC58'; 
                $hexF= '00EC54'; $hexG= '00EC5A'; $hexH= '00EC5B'; $hexI= '00EC5C'; $hexJ= '00EC5D'; 
                    break;   

            case 47852:
                $hexA= '00BAEC'; $hexB= '00BAED'; $hexC= '00BAEE'; $hexD= '00BAEF'; $hexE= '00BAF0'; 
                $hexF= '00BAEC'; $hexG= '00BAF2'; $hexH= '00BAF3'; $hexI= '00BAF4'; $hexJ= '00BAF5'; 
                  
                break;
            case 78525:
                $hexA= '0132BD'; $hexB= '0132BE'; $hexC= '0132BF'; $hexD= '0132C0'; $hexE= '0132C1'; 
                $hexF= '0132BD'; $hexG= '0132C3'; $hexH= '0132C4'; $hexI= '0132C5'; $hexJ= '0132C6'; 
                break;
            case 98500:
                $hexA= '0180C4'; $hexB= '0180C5'; $hexC= '0180C6'; $hexD= '0180C7'; $hexE= '0180C8'; 
                $hexF= '0180C4'; $hexG= '0180CA'; $hexH= '0180CB'; $hexI= '0180CC'; $hexJ= '0180CD'; 
                 break;    
            case 100000:
                $hexA= '0186A0'; $hexB= '0186A1'; $hexC= '0186A2'; $hexD= '0186A3'; $hexE= '0186A4'; 
                $hexF= '0186A0'; $hexG= '0186A6'; $hexH= '0186A7'; $hexI= '0186A8'; $hexJ= '0186A9'; 
               
                 break;          
             case 125000:
                $hexA= '01E848'; $hexB= '01E849'; $hexC= '01E84A'; $hexD= '01E84B'; $hexE= '01E84C'; 
                $hexF= '01E848'; $hexG= '01E84E'; $hexH= '01E84F'; $hexI= '01E850'; $hexJ= '01E851'; 
               
                break;
            case 145200:
                $hexA= '023730'; $hexB= '023731'; $hexC= '023732'; $hexD= '023733'; $hexE= '023734'; 
                $hexF= '023730'; $hexG= '023736'; $hexH= '023737'; $hexI= '023738'; $hexJ= '023739'; 
               
                break;
            case 160552:
                $hexA= '027328'; $hexB= '027329'; $hexC= '02732A'; $hexD= '02732B'; $hexE= '02732C'; 
                $hexF= '027328'; $hexG= '02732E'; $hexH= '02732F'; $hexI= '027330'; $hexJ= '027331'; 
                break;
            case 190000:
                $hexA= '02E630'; $hexB= '02E631'; $hexC= '02E632'; $hexD= '02E633'; $hexE= '02E634'; 
                $hexF= '02E630'; $hexG= '02E636'; $hexH= '02E637'; $hexI= '02E638'; $hexJ= '02E639'; 
                break;    

            default:
                return null;
        }
        return [

            
            ['row' => '00', 'cell' => 1, 'value' => substr($hexA, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hexA, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hexA, 4, 2)],
            
            ['row' => '100', 'cell' => 1, 'value' => substr($hexB, 0, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hexB, 2, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hexB, 4, 2)],

            ['row' => '200', 'cell' => 1, 'value' => substr($hexC, 0, 2)],
            ['row' => '200', 'cell' => 2, 'value' => substr($hexC, 2, 2)],
            ['row' => '200', 'cell' => 3, 'value' => substr($hexC, 4, 2)],

            ['row' => '300', 'cell' => 1, 'value' => substr($hexD, 0, 2)],
            ['row' => '300', 'cell' => 2, 'value' => substr($hexD, 2, 2)],
            ['row' => '300', 'cell' => 3, 'value' => substr($hexD, 4, 2)],

            ['row' => '400', 'cell' => 1, 'value' => substr($hexE, 0, 2)],
            ['row' => '400', 'cell' => 2, 'value' => substr($hexE, 2, 2)],
            ['row' => '400', 'cell' => 3, 'value' => substr($hexE, 4, 2)],

            ['row' => '500', 'cell' => 1, 'value' => substr($hexF, 0, 2)],
            ['row' => '500', 'cell' => 2, 'value' => substr($hexF, 2, 2)],
            ['row' => '500', 'cell' => 3, 'value' => substr($hexF, 4, 2)],

            ['row' => '600', 'cell' => 1, 'value' => substr($hexG, 0, 2)],
            ['row' => '600', 'cell' => 2, 'value' => substr($hexG, 2, 2)],
            ['row' => '600', 'cell' => 3, 'value' => substr($hexG, 4, 2)],

            ['row' => '700', 'cell' => 1, 'value' => substr($hexH, 0, 2)],
            ['row' => '700', 'cell' => 2, 'value' => substr($hexH, 2, 2)],
            ['row' => '700', 'cell' => 3, 'value' => substr($hexH, 4, 2)],

            ['row' => '800', 'cell' => 1, 'value' => substr($hexI, 0, 2)],
            ['row' => '800', 'cell' => 2, 'value' => substr($hexI, 2, 2)],
            ['row' => '800', 'cell' => 3, 'value' => substr($hexI, 4, 2)],
        
            ['row' => '900', 'cell' => 1, 'value' => substr($hexJ, 0, 2)],
            ['row' => '900', 'cell' => 2, 'value' => substr($hexJ, 2, 2)],
            ['row' => '900', 'cell' => 3, 'value' => substr($hexJ, 4, 2)],

            
        ];
    }
}
