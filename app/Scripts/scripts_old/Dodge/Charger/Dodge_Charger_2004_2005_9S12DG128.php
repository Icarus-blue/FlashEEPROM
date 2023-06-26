<?php

namespace App\Scripts;

class Dodge_Charger_2004_2005_9S12DG128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('3C0', 0) . $this->getByteForPosition('3C0', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number *6.02)),
            'image' => 'assets/Dodge.png',
            'texts' => [
                'Charger 2004-2005',
                'micro 9S12DG128',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value / 6.02));

        $return = [];
        foreach (['3C0', '3D0', '3E0', '3F0'] as $row) {
            for ($i = 0; $i < 16; $i += 4) {
                $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
               
                $return[] = ['row' => $row, 'cell' => $i, 'value' => substr($hex, 0, 2)];
                $return[] = ['row' => $row, 'cell' => $i + 1, 'value' => substr($hex, 2, 2)];
                
                $result++;
            }
        }

        return $return;
    }
}
