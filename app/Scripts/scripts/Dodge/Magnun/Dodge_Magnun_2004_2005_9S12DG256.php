<?php

namespace App\Scripts;

class Dodge_Magnun_2004_2005_9S12DG256 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F70', 0) . $this->getByteForPosition('F70', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number *28.32)),
            'image' => 'assets/Dodge.png',
            'texts' => [
                'Magnun 2004-2005',
                'micro 9S12DG256',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value / 28.32));

        $return = [];
        foreach (['F70', 'F80', 'F90', 'FA0', 'FB0', 'FC0', 'FD0', 'FE0'] as $row) {
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
