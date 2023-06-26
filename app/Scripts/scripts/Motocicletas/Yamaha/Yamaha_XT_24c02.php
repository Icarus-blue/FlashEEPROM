<?php
namespace App\Scripts;
class Yamaha_XT_24c02 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('20', 10) . $this->getByteForPosition('20', 9). $this->getByteForPosition('20', 8);
        $number = hexdec($hex);
         
        return [
           'result' => (round($number/10)),
              'image' => 'assets/yamaha.png',
            'texts' => [
                'Hunk   ',
                'Eeprom 24c04',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*10));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);
        $byte= $hex ; 
                        $a1 = substr($byte, 0,2);
                        $b1 =substr($byte, 2,2); 
                        $c1 = substr($byte,  4,2);
                        $crc = $a1 ^$b1^ $c1 ; 
        
        $result3 = round((0000000));
        $hex3 = str_pad(($result3), 8, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($crc, 0, 2)],
            
            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($crc, 0, 2)],
            
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($crc, 0, 2)],
            
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($crc, 0, 2)],
            
            ['row' => '40', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($crc, 0, 2)],
            
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 7, 'value' => substr($crc, 0, 2)],
            
            ['row' => '50', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '50', 'cell' => 15, 'value' => substr($crc, 0, 2)],
            
            ['row' => '60', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 3, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 7, 'value' => substr($crc, 0, 2)],
            
            ['row' => '60', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '60', 'cell' => 15, 'value' => substr($crc, 0, 2)],
            
            ['row' => '70', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 3, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 4, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 7, 'value' => substr($crc, 0, 2)],
            
            ['row' => '70', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 11, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 12, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex3, 0, 2)],
            ['row' => '70', 'cell' => 15, 'value' => substr($crc, 0, 2)]
            
            
            
           


        ];
    }
}
