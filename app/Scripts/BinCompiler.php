<?php

namespace App\Scripts;

class BinCompiler extends Compiler
{
    public function compile(string $hex) : string
    {
        $data = '';
        
        for ($i = 0; $i < strlen($hex); $i += 2) {
            $byte = hexdec(substr($hex, $i, 2));
            $data .= chr($byte);
        }
        
        return $data;
    }
}
