<?php
namespace App\Scripts;
class CHANGAN_SUPERVAN_DASH_9S12HA32_V2 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',1). $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         

        return [
            'result' =>round($number*256),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'SUPERVAN_DASH Dash V2',
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
                $hexA= '0003E8';
                break;
            case 4254:
                $hexA= '00109E';
                break;
            case 10000:
                $hexA= '002710'; 
                
                break;
            case 15000:
                $hexA= '003A98'; 
                
                break;
             case 24555:
                $hexA= '005FEB'; 
                break;
             case 37500:
                $hexA= '00927C';
                
                    break;

            case 50244:
                $hexA= '00C444'; 
               
                break;
            case 60500:
                $hexA= '00EC54'; 
                    break;   

            case 47852:
                $hexA= '00BAEC';
                  
                break;
            case 78525:
                $hexA= '0132BD'; 
                break;
            case 98500:
                $hexA= '0180C4'; 
                 break;    
            case 100000:
                $hexA= '0186A0'; 
               
                 break;          
             case 125000:
                $hexA= '01E848'; 
               
                break;
            case 145200:
                $hexA= '023730'; 
               
                break;
            case 160552:
                $hexA= '027328'; 
                break;
            case 190000:
                $hexA= '02E630'; 
                break;    

            default:
                return null;
        }
        return [

            
            ['row' => '00', 'cell' => 1, 'value' => substr($hexA, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hexA, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hexA, 4, 2)],
            
            ['row' => '100', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '100', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '100', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '200', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '200', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '200', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '300', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '300', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '300', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '400', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '400', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '500', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '500', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '500', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '600', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '600', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '600', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '700', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '700', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '700', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '800', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '800', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '800', 'cell' => 3, 'value' => substr($hex, 4, 2)],
        
            ['row' => '900', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '900', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '900', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            
        ];
    }
}
