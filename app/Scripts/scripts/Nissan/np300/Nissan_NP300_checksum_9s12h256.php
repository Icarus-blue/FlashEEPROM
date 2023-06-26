<?php

namespace App\Scripts;

class Nissan_NP300_checksum_9s12h256 extends Script
{
    private $primary = [0, 3, 5, 6, 9, 10, 12, 15, 17, 18, 20, 23, 24, 27, 29, 30];
    private $primary_map = [
        0 => '80',
        1 => '20',
        2 => '40',
        3 => 'E0'
    ];
    private $secondary_map = [
        0 => '01',
        1 => 'A1',
        2 => 'C1',
        3 => '61'
    ];
    
    public function getResult()
    {
        $hex = $this->getByteForPosition('F00', 4);
        $hex .= $this->getByteForPosition('F00', 5);
        
        $base = intdiv(hexdec($hex) * 8, 128);
        
        $map = array_flip($this->primary_map);
        $primary_base = $this->getByteForPosition('F00', 7);
        $portion = $map[$primary_base];
        
        $units = 0;
        for ($i = 1; $i < 32; $i++) {
            $byte = $this->getByteFromOffset('F00', 7, $i * 4);
            if (strtoupper($byte) == str_pad(strtoupper($this->getValueForPortion($portion, $i)), 2, '0', STR_PAD_LEFT)) {
                $units++;
            } else {
                break;
            }
        }
        
        return [
            'result' => ($base * 128) + ($portion * 32) + $units,
            'image' => 'assets/Nissan.png',
            'texts' => [
                'Nissan Qashqai',
                'Micro 9s12h256',
                'flasheeprom.com'
            ],
            'fileprefix' => 'flasheeprom_'
        ];
    }
    
    private function calculateRepeatedValue(int $value) : array
    {
        $result = [];
        
        $repeated = str_pad(dechex(floor(($value)/8)), 4, '0', STR_PAD_LEFT);
        for ($i = 0; $i < 32; $i++) {
            $offset = $this->getOffset('F00', 4, $i * 4);
            $offset['value'] = $repeated;
            $result[] = $offset;
        }
        
        return $result;
    }
    
    private function getValue(int $index, int $initial_primary, int $initial_secondary) : string
    {
        if (in_array($index, $this->primary)) {
            return dechex($initial_primary + $index);
        } else {
            return dechex($initial_secondary + $index - 1);
        }
    }
    
    private function getValueForPortion(int $portion, int $index)
    {
        $primary = hexdec($this->primary_map[$portion]);
        $secondary = hexdec($this->secondary_map[$portion]);
        return $this->getValue($index, $primary, $secondary);
    }
    
    public function calculate(int $value)
    {
        $result = $this->calculateRepeatedValue($value);
        
        $counter = [];
        for ($i = 0; $i < 32; $i++) {
            $counter["$i"] = '80';
        }
        
        $units = $value % 128;
        
        $portion = intdiv($units, 32);
        $remaining = $units % 32;
        
        for ($i = 0; $i <= $remaining; $i++) {
            $counter["$i"] = $this->getValueForPortion($portion, $i);
        }
        
        if ($portion > 0) {
            for ($i = $remaining + 1; $i < 32; $i++) {
                $counter[$i] = $this->getValueForPortion($portion - 1, $i);
            }
        }
        
        for ($i = 0; $i < 32; $i++) {
            $offset = $this->getOffset('F00', 7, $i * 4);
            $offset['value'] = $counter["$i"];
            $result[] = $offset;
        }
        
        return $result;
    }
}
