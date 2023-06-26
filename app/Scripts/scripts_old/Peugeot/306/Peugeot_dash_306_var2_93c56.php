<?php

namespace App\Scripts;

class Peugeot_dash_306_var2_93c56 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 1) . $this->getByteForPosition('00', 0);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 9),
            'image' => 'assets/Peugeot.png',
            'texts' => [
                'Dash 306 var1',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/9));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            
        ];
    }
}
