<?php

namespace App\Scripts; 
class Baic_M50S_2015_19_24c04 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('180',1). $this->getByteForPosition('180', 2) . $this->getByteForPosition('180',3);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/baic.png',
            'texts' => [
                'M50S 2015-2019',
                'Eeprom 24c04',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value*10));
        $hex = str_pad(dechex($result),6, '0', STR_PAD_LEFT);

       
        return
         [
     
            ['row' => '180', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '180', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '180', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '180', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '180', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '180', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '180', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '180', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '180', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '180', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '190', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '190', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '190', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '190', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '190', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '190', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '190', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '190', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '190', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '190', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '1A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1A0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1B0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '1B0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1B0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1B0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1B0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1B0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1C0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1C0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '1D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '1D0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1D0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1D0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1D0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1D0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1D0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '1E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1E0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '1E0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1E0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1E0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1E0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1E0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1E0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

            ['row' => '1F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 15, 'value' => substr($hex, 4, 2)],
            ['row' => '1F0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => '1F0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
          
            ['row' => '1F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 11, 'value' => substr($hex, 4, 2)],

            ['row' => '1F0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '1F0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1F0', 'cell' => 15, 'value' => substr($hex, 4, 2)],

        ];
    }
}
