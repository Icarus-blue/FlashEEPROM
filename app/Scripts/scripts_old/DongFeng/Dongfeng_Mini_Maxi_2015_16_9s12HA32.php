<?php
namespace App\Scripts;
class Dongfeng_Mini_Maxi_2015_16_9s12HA32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('A00',1). $this->getByteForPosition('A00', 2) . $this->getByteForPosition('A00',3);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)/10),
            'image' => 'assets/dongfeng.png',
            'texts' => [
                'Mini Maxi 2015-2016  ',
                'Micro 9s12HA32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {  
        $result = round(($value*10));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);

        
        return
         [
            ['row' => 'A00', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A00', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'A00', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'A00', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'A00', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => 'A10', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A10', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A10', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'A10', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'A10', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'A10', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => 'A20', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A20', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A20', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'A20', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'A20', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'A20', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => 'A30', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A30', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A30', 'cell' => 3, 'value' => substr($hex, 4, 2)],

            ['row' => 'A40', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'A40', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'A40', 'cell' => 10, 'value' => substr($hex, 4, 2)],
         
            ['row' => 'A50', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A50', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A50', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'A50', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'A50', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'A50', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => 'A60', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A60', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A60', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'A60', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'A60', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'A60', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            ['row' => 'A70', 'cell' => 1, 'value' => substr($hex, 0, 2)],
            ['row' => 'A70', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => 'A70', 'cell' => 3, 'value' => substr($hex, 4, 2)],
            ['row' => 'A70', 'cell' => 8, 'value' => substr($hex, 0, 2)],
            ['row' => 'A70', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => 'A70', 'cell' => 10, 'value' => substr($hex, 4, 2)],

            
         
        ];
    }
}
