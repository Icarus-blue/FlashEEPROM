<?php
namespace App\Scripts;
class BRILLANCE_V5_DASH_MC9S12HA48 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('610', 13) . $this->getByteForPosition('610',11). $this->getByteForPosition('610', 9);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/BRILLANCE.png',
            'texts' => [
                'BRILLANCE V5',
                'MC MC9S12HA48',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*10));
        $hex = str_pad(dechex($result),6, '0', STR_PAD_LEFT);
        

        return
         [
            ['row' => '610', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '610', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '610', 'cell' => 13, 'value' => substr($hex, 0, 2)],

            ['row' => '710', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '710', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '710', 'cell' => 13, 'value' => substr($hex, 0, 2)],

            ['row' => '810', 'cell' => 9, 'value' => substr($hex, 4, 2)],
            ['row' => '810', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => '810', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            
           
        ];
    }
}
