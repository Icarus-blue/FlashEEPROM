<?php
namespace App\Scripts;
class Suzuki_Ertiga_24c16_VDO extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('790', 1) . $this->getByteForPosition('790', 0);
        $number = hexdec($hex);
         
        return [
            'result' => ((65535-$number)* 32),
            'image' => 'assets/Suzuki.png',
            'texts' => [
                'Ertiga VDO ',
                'Eeprom 24c16',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(65535-($value/32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            ['row' => '790', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '790', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '790', 'cell' => 14, 'value' => substr($hex, 2, 2)],

            ['row' => '7A0', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 0, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 5, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 6, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 9, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 10, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 13, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '7A0', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '7A0', 'cell' => 14, 'value' => substr($hex, 2, 2)]
            
            


           
        ];
    }
}
