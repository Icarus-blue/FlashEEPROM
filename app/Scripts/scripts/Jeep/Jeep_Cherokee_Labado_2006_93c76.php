<?php

namespace App\Scripts;

class Jeep_Cherokee_Labado_2006_93c76 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('310', 11) . $this->getByteForPosition('320', 10);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/Jeep.png',
            'texts' => [
                'Cherokee',
                'Eeprom 93c76',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $result2 = round(($value/32));
        $hex2 = str_pad(dechex($result2), 4, '0', STR_PAD_LEFT);

        return
         [
             
            ['row' => '310', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '310', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '310', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '310', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '310', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '310', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '310', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '310', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '320', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '320', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '320', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '320', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '320', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '320', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '320', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '320', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '320', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '320', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '320', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '320', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '320', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '320', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '320', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '320', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '330', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '330', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '330', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '330', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '330', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '330', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '330', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '330', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '330', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '330', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '330', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '330', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '330', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '330', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '330', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '330', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '340', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '340', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '340', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '340', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '340', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '340', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '340', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '340', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '340', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '340', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '340', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '340', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '340', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '340', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '340', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '340', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => '350', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '350', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '350', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '350', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '350', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '350', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '350', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '350', 'cell' => 7, 'value' => substr($hex, 0, 2)],
        

        


        ];
    }
}
