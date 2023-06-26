<?php

namespace App\Scripts; 

class Pulsar_Dominar_24c02 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 2) . $this->getByteForPosition('00',1). $this->getByteForPosition('00',0);
        $number = hexdec($hex);
         
        return [
            'result' => round($number/10),
            'image' => 'assets/Pulsar.png',
            'texts' => [
                'Pulsar Dominar 250',
                'Eeprom 24c02',
                'www.Flasheeprom.com'
            ],
            'fileprefix' => 'flasheeprom '
        ];
    }
    
    public function calculate(int $value)
    {   $result = (($value*10));
        $hex = str_pad(dechex($result), 8, '0', STR_PAD_LEFT);
        return
         [

            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)]
            

            
        ];
    }
}
