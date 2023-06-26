<?php

namespace App\Scripts;

class Dodge_Charger_2011 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('200', 8) . $this->getByteForPosition('200', 7);
        $number = hexdec($hex);
         
        return [
            'result' => round($number * 48.07),
            'image' => 'assets/Dodge.png',
            'texts' => [
                'Charger 2011',
                'Eeprom 20c16',
                'www.flasheeprom.com'
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
        $result = round($value / 48.07);

        $return = [];
        
        $row = '200';
        $cell = 7;
        
        for ($offset = 0; ; $offset += 4) {
            $current = $this->calculateOffset('200', 7, $offset);
            if ($current['row'] == '280' && $current['cell'] > 4) {
                break;
            }
            
            $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
            
            $return[] = $current + ['value' => substr($hex, 2, 2)];
            $return[] = $this->calculateOffset('200', 7, $offset + 1) + ['value' => substr($hex, 0, 2)];
            
            $result++;
            
        }
        
        return $return;
    }
}
