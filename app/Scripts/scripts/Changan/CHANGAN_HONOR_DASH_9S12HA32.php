<?php
namespace App\Scripts;
class CHANGAN_HONOR_DASH_9S12HA32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',1). $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         
        return [
            'result' => round($number*256.56),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'Honor dash MC9S12HA32',
                'Micro MC9S12HA32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value/256.56));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);


        
        return
         [
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 2, 2)],
          
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '50', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '50', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '60', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '60', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '60', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '70', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '70', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '70', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '80', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 2, 2)],

        ];
    }
}
