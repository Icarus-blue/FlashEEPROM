<?php

namespace App\Scripts;

abstract class Compiler
{
    public static function getCompiler(string $type) : Compiler
    {
        switch ($type) {
            case 'hex':
                return new HexCompiler();
            case 'bin':
                return new BinCompiler();
            default:
                return null;
        }
    }
    
    abstract public function compile(string $hex) : string;
}
