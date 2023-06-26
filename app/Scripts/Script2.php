<?php

namespace App\Scripts;

abstract class Script
{
    private $hex;
    
    public function __construct(string $hex)
    {
        $this->hex = $hex;
    }
    
    abstract public function getResult();
    abstract public function calculate(int $value);
    
    protected function getByteForPosition(string $row, int $cell) : string
    {
        $position = hexdec($row) + $cell;
        return substr($this->hex, $position * 2, 2);
    }
    
    protected function getOffset(string $row, int $cell, int $offset) : array
    {
        $total = $cell + $offset;
        
        return [
            'row' => dechex(hexdec($row) + (intdiv($total, 16) * 16)),
            'cell' => $total % 16,
        ];
    }
    
    protected function getByteFromOffset(string $row, int $cell, int $offset)
    {
        $offsetPosition = $this->getOffset($row, $cell, $offset);
        return $this->getByteForPosition($offsetPosition['row'], $offsetPosition['cell']);
    }
    
    private static function getScriptsPath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR;
    }
    
    public static function getScripts()
    {
        return self::getFilesRecursively(self::getScriptsPath(), 'scripts');
    }
    
    public static function getScript(string $path, string $hex) : Script
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
