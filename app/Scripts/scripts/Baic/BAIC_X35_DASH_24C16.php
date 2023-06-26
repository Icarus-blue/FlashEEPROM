<?php
namespace App\Scripts;
class BAIC_X35_DASH_24C16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 0) . $this->getByteForPosition('00', 1). $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/15.9193),
            'image' => 'assets/BAIC.png',
            'texts' => [
                'BAIC 24C16',
                'Eeprom 24C16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value*15.9193));
        $hex = str_pad(dechex($result),6, '0', STR_PAD_LEFT);
        
        $result2 = (00);
        $hex2 = str_pad(dechex($result2),2, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex2, 0, 2)],

            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            
           
        ];
    }
}
