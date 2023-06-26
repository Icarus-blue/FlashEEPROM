<?php
namespace App\Scripts;

class Chevrolet_TrailBlazer_2016_18_BCM_24C32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('160', 9) . $this->getByteForPosition('160',8). $this->getByteForPosition('160',7). $this->getByteForPosition('160',6);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/64),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Trail Blazer BCM',
                'Eeprom 24C32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom '
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value*64));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        return
         [
            ['row' => 'F0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 6, 2)],

            ['row' => '160', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => '160', 'cell' => 6, 'value' => substr($hex, 6, 2)],
           
            ['row' => '1C0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex, 6, 2)],
            

            
        ];
    }
}
