<?php
namespace App\Scripts;
class Chevrolet_Spark_BCM_2017_24c16 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('F0', 9) . $this->getByteForPosition('F0',8). $this->getByteForPosition('F0',7);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/64),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Spark 2016-17 BCM ',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom '
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value*64));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        return
         [

            ['row' => 'F0', 'cell' => 7, 'value' => substr($hex, 4, 2)],
            ['row' => 'F0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => 'F0', 'cell' => 9, 'value' => substr($hex, 0, 2)],

            ['row' => '160', 'cell' => 6, 'value' => substr($hex, 4, 2)],
            ['row' => '160', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => '160', 'cell' => 8, 'value' => substr($hex, 0, 2)],

            ['row' => '1C0', 'cell' => 4, 'value' => substr($hex, 4, 2)],
            ['row' => '1C0', 'cell' => 5, 'value' => substr($hex, 2, 2)],
            ['row' => '1C0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
           
            

            
        ];
    }
}
