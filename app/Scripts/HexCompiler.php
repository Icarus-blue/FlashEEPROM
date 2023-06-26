<?php

namespace App\Scripts;

class HexCompiler extends Compiler
{
    public function compile(string $hex) : string
    {
        $data = '';
        
        $address = 0;
        
        for ($i = 0; $i < strlen($hex); $i += 32) {
            $part = substr($hex, $i, 32);
            $bytes = strlen($part) / 2;
            $line = $this->hexPad(dechex($bytes))
                . $this->hexPad(dechex($address), 4) . '00' . $part;
            $data .= ':' . $line
                . $this->hexPad($this->computeChecksum($line)) . "\n";
            
            $address += 16;
        }
        
        $data .= ":00000001FF\n";
        return $data;
    }
    
    private function hexComplement(string $hex) : string
    {
        $dec = hexdec($hex);
        $big = '1' . str_repeat('0', strlen($hex));
        $comp = hexdec($big) - $dec;

        return dechex($comp);
    }
    
    private function hexPad(string $hex, int $pad = 2) : string
    {
        return strtoupper(str_pad($hex, $pad, '0', STR_PAD_LEFT));
    }
    
    private function computeChecksum(string $hex) : string
    {
        $sum = 0;
        for ($i = 0; $i < strlen($hex); $i += 2) {
            $sum += hexdec(substr($hex, $i, 2));
        }
        $lsb = substr(dechex($sum), -2);
        return substr($this->hexComplement($lsb), -2);
    }
}
