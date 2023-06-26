<?php

namespace App\Scripts;

class LandRover_Discovery_BCU_68HC11P2 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('170', 12) . $this->getByteForPosition('170', 13);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)* 256),
            'image' => 'assets/LandRover.png',
            'texts' => [
                'Discovery BCU',
                'Micro 68HC11P2',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/256));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
             
          

            ['row' => '170', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '170', 'cell' => 12, 'value' => substr($hex, 0, 2)],
        

        


        ];
    }
}
