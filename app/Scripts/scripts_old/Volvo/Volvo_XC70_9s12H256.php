<?php

namespace App\Scripts;

class  Volvo_XC70_9s12H256 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('E00', 2) . $this->getByteForPosition('E00', 3);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)*208),
            'image' => 'assets/Volvo.png',
            'texts' => [
                'XC70',
                'Eeprom 9s12H256',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/208));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => 'E00', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E00', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E00', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E00', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E00', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E00', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E00', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E00', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E10', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E10', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E10', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E10', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E10', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E10', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E10', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E10', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E20', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E20', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E20', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E20', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E20', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E20', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E20', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E20', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E30', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E30', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E30', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E30', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E30', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E30', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E30', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E30', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E40', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E40', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E40', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E40', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E40', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E40', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E40', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E40', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E50', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E50', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E50', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E50', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E50', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E50', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E50', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E50', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E60', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E60', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E60', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E60', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E60', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E60', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E60', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E60', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E70', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E70', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E70', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E70', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E70', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E70', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E70', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E70', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E80', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E80', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E80', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E80', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E80', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E80', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E80', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E80', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'E90', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'E90', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'E90', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'E90', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'E90', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'E90', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'E90', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'E90', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'EA0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'EA0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'EA0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'EA0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'EA0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'EA0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'EA0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'EA0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'EB0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'EB0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'EB0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'EB0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'EB0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'EB0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'EB0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'EB0', 'cell' => 15, 'value' => substr($hex, 2, 2)],

            ['row' => 'EC0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            ['row' => 'EC0', 'cell' => 3, 'value' => substr($hex, 2, 2)],
            ['row' => 'EC0', 'cell' => 6, 'value' => substr($hex, 0, 2)],
            ['row' => 'EC0', 'cell' => 7, 'value' => substr($hex, 2, 2)],
            ['row' => 'EC0', 'cell' => 10, 'value' => substr($hex, 0, 2)],
            ['row' => 'EC0', 'cell' => 11, 'value' => substr($hex, 2, 2)],
            ['row' => 'EC0', 'cell' => 14, 'value' => substr($hex, 0, 2)],
            ['row' => 'EC0', 'cell' => 15, 'value' => substr($hex, 2, 2)]

         
      

        ];
    }
}
