<?php
namespace App\Scripts;
class BAIC_X35_BCM_95320 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('440', 3) . $this->getByteForPosition('440', 2). $this->getByteForPosition('440', 1). $this->getByteForPosition('440', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/100),
            'image' => 'assets/BAIC.png',
            'texts' => [
                'BAIC 95320',
                'Eeprom 95320',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*100));
        $hex = str_pad(dechex($result),8, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '440', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '440', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '440', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '440', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            
           
        ];
    }
}
