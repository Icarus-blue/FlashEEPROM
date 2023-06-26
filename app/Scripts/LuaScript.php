<?php

namespace App\Scripts;

class LuaScript extends Script
{
    private const MEMORY_LIMIT_IN_MB = 10;
    private const CPU_LIMIT_SECONDS = 2;
    
    private $image = 'assets/lua.png';
    private $images = [];
    private $prefix = 'archivo';
    
    private $result_code = '';
    private $calculate_code = '';
    
    private $result = [];
    private $list = null;
    
    private $readResult = [
        'table-1' => [],
        'table-2' => [],
        'meta' => []
    ];
    
    public function getResult()
    {
        $result = $this->runCode($this->result_code);
        
        $data = [
            'result' => (is_array($result) && isset($result[0])) ? $result[0] : 0,
            'image' => $this->image,
            'images' => $this->images,
            'texts' => [],
            'fileprefix' => $this->prefix
        ];
        
        if ($this->list !== null) {
            $data['list'] = $this->list;
        }
        
        return $data;
    }
    
    public function calculate(int $value)
    {
        $this->runCode("local value = $value\r\n" . $this->calculate_code);
        return $this->result;
    }
    
    public function calculateRead()
    {
        $this->runCode($this->calculate_code);
        return $this->readResult;
    }
    
    public function setScriptType(int $type)
    {
        $this->type = $type;
    }
    
    public function setImage(string $image)
    {
        $this->image = $image;
    }
    
    public function setImages(array $images, string $prefix = '')
    {
        $this->images = [];
        foreach ($images as $image) {
            $this->images[] = $prefix . $image;
        }
    }
    
    public function setPrefix(string $prefix)
    {
        $this->prefix = $prefix;
    }
    
    public function setResultCode(string $code)
    {
        $this->result_code = $code;
    }
    
    public function setCalculateCode(string $code)
    {
        $this->calculate_code = $code;
    }
    
    public function setList(array $list)
    {
        $this->list = $list;
    }
    
    private function reverseHex(string $hex) : string
    {
        $result = '';
        for ($i = 2; $i <= strlen($hex); $i += 2) {
            $result .= substr($hex, -$i, 2);
        }
        return $result;
    }
    
    private function write(string $row, int $cell, int $value, ?int $bytes = null, bool $reversed = false)
    {
        $row_sanitized = dechex(hexdec($row));
        
        $data = dechex($value);
        if ($bytes !== null) {
            $data = substr(str_repeat('0', $bytes * 2) . $data, -($bytes * 2));
        }
        
        if ($reversed) {
            $data = $this->reverseHex($data);
        }
        
        $this->result[] = ['row' => $row_sanitized, 'cell' => $cell, 'value' => $data];
    }
    
    private function writeReadTable(int $table, int $row, int $cell, $value)
    {
        if ($table < 1 || $table > 2) {
            $table = 1;
        }
        
        if (is_int($value)) {
            $value = strtoupper(dechex($value));
        }
        
        $this->readResult["table-$table"][] = [
            'row' => $row,
            'cell' => $cell,
            'value' => $value
        ];
    }
    
    private function writeMeta(int $number, string $key, string $value) {
        if ($number < 1 || $number > 3) {
            $number = 1;
        }
        
        $this->readResult['meta']["key-$number"] = $key;
        $this->readResult['meta']["value-$number"] = $value;
    }
    
    private function runCode(string $code)
    {
        $init = '';
        $functions = [
            'size', 'rows', 'read', 'readreverse', 'write', 'writereverse',
            'writetable', 'writemeta'
        ];
        foreach ($functions as $name) {
            $init .= "local $name = flashee.$name\n";
        }
        
        $sandbox = $this->loadSandbox();
        ini_set('memory_limit', self::MEMORY_LIMIT_IN_MB . 'M');
        
        return $sandbox->loadString($init . $code)->call();
    }
    
    private function loadSandbox()
    {
        $sandbox = new \LuaSandbox();
        
        $sandbox->setMemoryLimit(1024 * 1024 * self::MEMORY_LIMIT_IN_MB);
        $sandbox->setCPULimit(self::CPU_LIMIT_SECONDS);
        
        $functions = [
            'size' => function() { return [ $this->getNumberOfBytes() ]; },
            'rows' => function() { return [ $this->getNumberOfRows() ]; },
            'read' => function(int $row, int $cell, int $bytes = 1) {
                return [ hexdec($this->getMultipleBytes(dechex($row), $cell, $bytes)) ];
            },
            'readreverse' => function(int $row, int $cell, int $bytes) {
                $bytes = $this->getMultipleBytes(dechex($row), $cell, $bytes);
                return [ hexdec($this->reverseHex($bytes)) ];
            },
            'write' => function(int $row, int $cell, int $value, ?int $bytes = null) {
                return [ $this->write(dechex($row), $cell, $value, $bytes) ];
            },
            'writereverse' => function(int $row, int $cell, int $value, ?int $bytes = null) {
                return [ $this->write(dechex($row), $cell, $value, $bytes, true) ];
            },
            'writetable' => function(int $table, int $row, int $cell, $value) {
                return [ $this->writeReadTable($table, $row, $cell, $value) ];
            },
            'writemeta' => function(int $number, string $key, string $value) {
                return [ $this->writeMeta($number, $key, $value) ];
            }
        ];
        
        $sandbox->registerLibrary('flashee', $functions);
        
        return $sandbox;
    }
}
