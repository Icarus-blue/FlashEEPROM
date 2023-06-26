<?php

namespace App\Scripts;

abstract class Script
{
    private $hex;
    protected $type = 0;
    
    public function __construct(string $hex)
    {
        $this->hex = $hex;
    }
    
    abstract public function getResult();
    abstract public function calculate(int $value);
    
    public function getScriptType()
    {
        return $this->type;
    }
    
    public function calculateRead()
    {
        return [];
    }
    
    protected function getNumberOfRows() : int
    {
        return intval(ceil(strlen($this->hex) / 32.0));
    }
    
    protected function getNumberOfBytes() : int
    {
        return intval(ceil(strlen($this->hex) / 2.0));
    }
    
    protected function getByteForPosition(string $row, int $cell) : string
    {
        return $this->getMultipleBytes($row, $cell, 1);
    }
    
    protected function getMultipleBytes(string $row, int $cell, int $bytes) : string
    {
        $position = hexdec($row) + $cell;
        $result = substr($this->hex, $position * 2, $bytes * 2);
        if ($result === false) {
            return '0';
        } else {
            return $result;
        }
    }
    
    protected function getOffset(string $row, int $cell, int $offset) : array
    {
        $total = $cell + $offset;
        
        return [
            'row' => dechex(hexdec($row) + (intdiv($total, 16) * 16)),
            'cell' => $total % 16,
        ];
    }
    
    protected function getByteFromOffset(string $row, int $cell, int $offset) : string
    {
        return $this->getMultipleFromOffset($row, $cell, $offset, 1);
    }
    
    protected function getMultipleFromOffset(string $row, int $cell, int $offset, int $bytes) : string
    {
        $offsetPosition = $this->getOffset($row, $cell, $offset);
        return $this->getMultipleBytes($offsetPosition['row'], $offsetPosition['cell'], $bytes);
    }
    
    private static function getScriptsPath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR;
    }
    
    public static function getScripts()
    {
        return self::getFilesRecursively(self::getScriptsPath(), 'scripts');
    }
    
    public static function getScript(string $path, string $hex) : ?Script
    {
        $script = preg_replace('#^scripts' . preg_quote(DIRECTORY_SEPARATOR) . '#', '', $path);
        
        if (self::isPathPresent(self::getScriptsPath() . 'scripts', $script)) {
            require_once(self::getScriptsPath() . 'scripts' . DIRECTORY_SEPARATOR . $script);
            
            $parts = explode(DIRECTORY_SEPARATOR, $script);
            $file_name = $parts[count($parts) - 1];
            $class_name = ucfirst(substr($file_name, 0, strrpos($file_name, ".")));
            $class_name = '\\App\\Scripts\\' . $class_name;
            
            return new $class_name($hex);
        }
        
        return null;
    }
    
    private static function isPathPresent($path, $relative_path)
    {
        $parts = explode(DIRECTORY_SEPARATOR, $relative_path, 2);
        
        $contents = scandir($path);
        if ($parts[0] != '.' && $parts[0] != '..' && in_array($parts[0], $contents)) {
            if (count($parts) == 1) {
                return true;
            } else {
                return self::isPathPresent($path . DIRECTORY_SEPARATOR . $parts[0], $parts[1]);
            }
        } else {
            return false;
        }
    }

    private static function getFilesRecursively($base, $path = '')
    {
        $folders = [];
        $files = [];
        
        $contents = scandir($base . $path);
        foreach ($contents as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            
            $file_path = $path . DIRECTORY_SEPARATOR . $file;
            if (is_dir($base . $file_path)) {
                $folders[$file] = self::getFilesRecursively($base, $file_path);
            } else {
                $files[$file] = $file_path;
            }
        }
        
        return $folders + $files;
    }
}
