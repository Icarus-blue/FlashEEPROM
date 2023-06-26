<?php

namespace App\Scripts;

class Fiat_Brava_68HC908AZ32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 0) . $this->getByteForPosition('00', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round($number * 13.21),
            'image' => 'assets/fiat.png',
            'texts' => [
                'Brava',
                'Micro 68HC908AZ32',
                'www.flashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    private function calculateOffset($initial_row, $initial_cell, $offset)
    {
        $total = $initial_cell + $offset;
        
        return [
            'row' => dechex(hexdec($initial_row) + (intdiv($total, 16) * 16)),
            'cell' => $total % 16,
        ];
    }
    
    public function calculate(int $value)
    {
        $result = round($value );

        $return = [];
        
        $row = '00';
        $cell = 7;
        
        for ($offset = 0; ; $offset += 2) {
            $current = $this->calculateOffset('80', 7, $offset);
            if ($current['row'] == '00' && $current['cell'] > 8) {
                break;
            }
            
            $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
            
            $return[] = $current + ['value' => substr($hex, 2, 2)];
            $return[] = $this->calculateOffset('00', 7, $offset + 1) + ['value' => substr($hex, 0, 2)];
            
            $result++;
            
        }
        
        return $return;
    }
}
