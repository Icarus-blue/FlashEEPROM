<?php

namespace App\Scripts;

class Jeep_Grand_Cherokee_BCI_11L6 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('30', 0) . $this->getByteForPosition('30', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number *13.45)),
            'image' => 'assets/Jeep.png',
            'texts' => [
                'Grand Cherokee BCI',
                'micro 11L6',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round(($value / 13.45));

        $return = [];
        foreach (['30', '40'] as $row) {
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
