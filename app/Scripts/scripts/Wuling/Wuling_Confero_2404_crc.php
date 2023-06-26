<?php

namespace App\Scripts;

class Wuling_Confero_2404_crc extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 2)
            . $this->getByteForPosition('00', 1)
            . $this->getByteForPosition('00', 0);
        $number = hexdec($hex);
        
        return [
            'result' => round ($number/10),
            'image' => 'assets/Wuling.png',
            'texts' => [],
            'fileprefix' => 'archivo'
        ];
    }
    
    public function calculate(int $value)
    {
        $result = [];
        
        $hex = substr('000000' . dechex($value*10), -6);
        
        $bytes = [
            substr($hex, -2),
            substr($hex, 2, 2),
            substr($hex, 0, 2)
        ];
        
        $bytes1 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes2 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes3 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes4 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes5 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes6 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes7 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes8 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        $bytes9 = [substr($hex, -2), substr($hex, 2, 2), substr($hex, 0, 2)];
        
        
        for ($i = 0; $i < 9; $i++) {
            $result[] = ['row' => dechex($i * 16), 'cell' => 0, 'value' => implode('', $bytes)];
        }
        $result[] = ['row' => '300','cell'=> 8,'value' => implode('', $bytes)];
        $result[] = ['row' => '310','cell'=> 8,'value' => implode('', $bytes)];
        $result[] = ['row' => '320','cell'=> 8,'value' => implode('', $bytes)];
        $result[] = ['row' => '330','cell'=> 8,'value' => implode('', $bytes)];
        $result[] = ['row' => '340','cell'=> 8,'value' => implode('', $bytes)];
        $result[] = ['row' => '350','cell'=> 8,'value' => implode('', $bytes)];
        
        for ($i = 3; $i < 14; $i++) {
            $bytes[] = $this->getByteForPosition('00', $i);
            $bytes1[] = $this->getByteForPosition('10', $i);
            $bytes2[] = $this->getByteForPosition('20', $i);
            $bytes3[] = $this->getByteForPosition('30', $i);
            $bytes4[] = $this->getByteForPosition('40', $i);
            $bytes5[] = $this->getByteForPosition('50', $i);
            $bytes6[] = $this->getByteForPosition('60', $i);
            $bytes7[] = $this->getByteForPosition('70', $i);
            $bytes8[] = $this->getByteForPosition('80', $i);
            $bytes9[] = $this->getByteForPosition('90', $i);
        }
        
$result[] =['row' => '00', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes)];
$result[] =['row' => '10', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes1)];
$result[] =['row' => '20', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes2)];
$result[] =['row' => '30', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes3)];
$result[] =['row' => '40', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes4)];
$result[] =['row' => '50', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes5)];
$result[] =['row' => '60', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes6)];
$result[] =['row' => '70', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes7)];
$result[] =['row' => '80', 'cell'=> 15, 'value'=> $this->calculateCrc($bytes8)];
        return $result;
    }
    private function calculateCrc(array $bytes): string
    {
        $lut = [
            0x00, 0x5e, 0xbc, 0xe2, 0x61, 0x3f, 0xdd, 0x83,
            0xc2, 0x9c, 0x7e, 0x20, 0xa3, 0xfd, 0x1f, 0x41,
            0x9d, 0xc3, 0x21, 0x7f, 0xfc, 0xa2, 0x40, 0x1e,
            0x5f, 0x01, 0xe3, 0xbd, 0x3e, 0x60, 0x82, 0xdc,
            0x23, 0x7d, 0x9f, 0xc1, 0x42, 0x1c, 0xfe, 0xa0,
            0xe1, 0xbf, 0x5d, 0x03, 0x80, 0xde, 0x3c, 0x62,
            0xbe, 0xe0, 0x02, 0x5c, 0xdf, 0x81, 0x63, 0x3d,
            0x7c, 0x22, 0xc0, 0x9e, 0x1d, 0x43, 0xa1, 0xff,
            0x46, 0x18, 0xfa, 0xa4, 0x27, 0x79, 0x9b, 0xc5,
            0x84, 0xda, 0x38, 0x66, 0xe5, 0xbb, 0x59, 0x07,
            0xdb, 0x85, 0x67, 0x39, 0xba, 0xe4, 0x06, 0x58,
            0x19, 0x47, 0xa5, 0xfb, 0x78, 0x26, 0xc4, 0x9a,
            0x65, 0x3b, 0xd9, 0x87, 0x04, 0x5a, 0xb8, 0xe6,
            0xa7, 0xf9, 0x1b, 0x45, 0xc6, 0x98, 0x7a, 0x24,
            0xf8, 0xa6, 0x44, 0x1a, 0x99, 0xc7, 0x25, 0x7b,
            0x3a, 0x64, 0x86, 0xd8, 0x5b, 0x05, 0xe7, 0xb9,
            0x8c, 0xd2, 0x30, 0x6e, 0xed, 0xb3, 0x51, 0x0f,
            0x4e, 0x10, 0xf2, 0xac, 0x2f, 0x71, 0x93, 0xcd,
            0x11, 0x4f, 0xad, 0xf3, 0x70, 0x2e, 0xcc, 0x92,
            0xd3, 0x8d, 0x6f, 0x31, 0xb2, 0xec, 0x0e, 0x50,
            0xaf, 0xf1, 0x13, 0x4d, 0xce, 0x90, 0x72, 0x2c,
            0x6d, 0x33, 0xd1, 0x8f, 0x0c, 0x52, 0xb0, 0xee,
            0x32, 0x6c, 0x8e, 0xd0, 0x53, 0x0d, 0xef, 0xb1,
            0xf0, 0xae, 0x4c, 0x12, 0x91, 0xcf, 0x2d, 0x73,
            0xca, 0x94, 0x76, 0x28, 0xab, 0xf5, 0x17, 0x49,
            0x08, 0x56, 0xb4, 0xea, 0x69, 0x37, 0xd5, 0x8b,
            0x57, 0x09, 0xeb, 0xb5, 0x36, 0x68, 0x8a, 0xd4,
            0x95, 0xcb, 0x29, 0x77, 0xf4, 0xaa, 0x48, 0x16,
            0xe9, 0xb7, 0x55, 0x0b, 0x88, 0xd6, 0x34, 0x6a,
            0x2b, 0x75, 0x97, 0xc9, 0x4a, 0x14, 0xf6, 0xa8,
            0x74, 0x2a, 0xc8, 0x96, 0x15, 0x4b, 0xa9, 0xf7,
            0xb6, 0xe8, 0x0a, 0x54, 0xd7, 0x89, 0x6b, 0x35,
        ];
        
        $crc = 0;
        foreach ($bytes as $byte) {
            $crc = $lut[hexdec($byte) ^ $crc];
        }
        
        return dechex($crc);
    }
}
