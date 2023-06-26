<?php

namespace App\Scripts;

class DongFeng_DFA_1145_93c66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('10', 2) . $this->getByteForPosition('10',1). $this->getByteForPosition('10',0);
        $number = hexdec($hex);
         
        return [
            'result' => ($number),
            'image' => 'assets/Dongfeng.png',
            'texts' => [
                'DFA',
                'Eeprom 93c66',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = ($value);
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        return
         [
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 0, 2)]
            

            
        ];
    }
}
