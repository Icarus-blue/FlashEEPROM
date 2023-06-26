<?php
namespace App\Scripts;
class Baic_D20_BCM_95320 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('AC0',1). $this->getByteForPosition('AC0', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/baic.png',
            'texts' => [
                'Baic D60 BCM 2012-2015',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        $result = round((16777215-$value));
        $hex2 = str_pad(dechex($result),6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => 'AC0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'AC0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
           
        ];
    }
}
