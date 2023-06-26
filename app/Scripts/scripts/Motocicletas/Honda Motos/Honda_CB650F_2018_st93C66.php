<?php
namespace App\Scripts; 
class Honda_CB650F_2018_st93C66 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('80', 3) . $this->getByteForPosition('80', 2);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/Honda.png',
            'texts' => [
                'Honda_CRF250L_2015_2018 ',
                'Eeprom 93c66',
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


            ['row' => '80', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '80', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '80', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '80', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '80', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '80', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '80', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '80', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            
            ['row' => '90', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '90', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '90', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '90', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '90', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '90', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => '90', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '90', 'cell' => 15, 'value' => substr($hex, 0, 2)],

            ['row' => 'A0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'A0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => 'A0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => 'A0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'A0', 'cell' => 15, 'value' => substr($hex, 0, 2)],


            ['row' => 'B0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => 'B0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => 'B0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],
            ['row' => 'B0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => 'B0', 'cell' => 15, 'value' => substr($hex, 0, 2)],

        


        ];
    }
}
