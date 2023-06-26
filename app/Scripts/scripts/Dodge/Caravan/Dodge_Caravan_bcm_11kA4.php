<?php

namespace App\Scripts;

class Dodge_Caravan_bcm_11kA4 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('200', 0) . $this->getByteForPosition('200', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number * 13.21)+2),
            'image' => 'assets/Dodge.png',
            'texts' => [
                'Caravan',
                'micro 11KA4',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value / 13.21)-2);

        $return = [];
        foreach (['200', '210'] as $row) {
            for ($i = 0; $i < 16; $i += 2) {
                $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
                
                $return[] = ['row' => $row, 'cell' => $i, 'value' => substr($hex, 0, 2)];
                $return[] = ['row' => $row, 'cell' => $i + 1, 'value' => substr($hex, 2, 2)];
                
                $result++;
            }
        }

        return $return;
    }
}
