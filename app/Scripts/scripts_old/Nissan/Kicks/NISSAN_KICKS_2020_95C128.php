<?php
namespace App\Scripts;
class NISSAN_KICKS_2020_95C128 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('1E80', 3) . $this->getByteForPosition('1E80',2);
        $number = hexdec($hex);
         
        return [
            'result' => round($number*32.57328990228013),
            'image' => 'assets/Nissan.png',
            'texts' => [
                'KICKS 2020',
                'EERPOM 95C128',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = (round($value/32.57328990228013));
        $hex = str_pad(dechex($result),4, '0', STR_PAD_LEFT);

        $result2 = (round(65535-($value/32.57328990228013)));
        $hex2 = str_pad(dechex($result2),4, '0', STR_PAD_LEFT);

        

        return
         [
            ['row' => '1E80', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1E80', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1E80', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E80', 'cell' => 5, 'value' => substr($hex2, 0, 2)],

            ['row' => '1E80', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1E80', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1E80', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E80', 'cell' => 9, 'value' => substr($hex2, 0, 2)],

            ['row' => '1E80', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1E80', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1E80', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E80', 'cell' => 13, 'value' => substr($hex2, 0, 2)],

            ['row' => '1E80', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1E80', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E90', 'cell' => 1, 'value' => substr($hex2, 0, 2)],

            ['row' => '1E90', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1E90', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E90', 'cell' => 5, 'value' => substr($hex2, 0, 2)],

            ['row' => '1E90', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1E90', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E90', 'cell' => 9, 'value' => substr($hex2, 0, 2)],

            ['row' => '1E90', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1E90', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1E90', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1E90', 'cell' => 13, 'value' => substr($hex2, 0, 2)],

            ['row' => '1E90', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1E90', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EA0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EA0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1EA0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EA0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EA0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1EA0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EA0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EA0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1EA0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1EA0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EA0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EA0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1EA0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EB0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EB0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '1EB0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 4, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EB0', 'cell' => 5, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EB0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '1EB0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 8, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EB0', 'cell' => 9, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EB0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '1EB0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '1EB0', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EB0', 'cell' => 13, 'value' => substr($hex2, 0, 2)],

            ['row' => '1EB0', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '1EB0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '1EC0', 'cell' => 0, 'value' => substr($hex2, 2, 2)],
            ['row' => '1EC0', 'cell' => 1, 'value' => substr($hex2, 0, 2)],
        ];
    }
}
