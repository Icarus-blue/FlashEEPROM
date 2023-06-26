<?php

namespace App\Scripts;

class  Dodge_Caravan_9s12H256 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('520', 3) . $this->getByteForPosition('520', 4);
        $number = hexdec($hex);
         
        return [
            'result' =>  round($number*41.32),
            'image' => 'assets/Dodge.png',
            'texts' => [
                'Caravan',
                'Micro 9s45H256',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value/41.32));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);

        return
         [
            
            ['row' => '520', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '520', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '520', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '520', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '520', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '520', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '520', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '530', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            ['row' => '530', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '530', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '530', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '530', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '530', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '530', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '530', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '540', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            ['row' => '540', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '540', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '540', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '540', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '540', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '540', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '540', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '550', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            ['row' => '550', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '550', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '550', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '550', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '550', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '550', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '550', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '560', 'cell' => 0, 'value' => substr($hex, 2, 2)],


            ['row' => '560', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '560', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '560', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '560', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '560', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '560', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '560', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '570', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            ['row' => '570', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '570', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '570', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '570', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '570', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '570', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '570', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '580', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            ['row' => '580', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '580', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '580', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '580', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '580', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '580', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '580', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '590', 'cell' => 0, 'value' => substr($hex, 2, 2)],

            ['row' => '590', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            ['row' => '590', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '590', 'cell' => 7, 'value' => substr($hex, 0, 2)],
            ['row' => '590', 'cell' => 8, 'value' => substr($hex, 2, 2)],
            ['row' => '590', 'cell' => 11, 'value' => substr($hex, 0, 2)],
            ['row' => '590', 'cell' => 12, 'value' => substr($hex, 2, 2)],
            ['row' => '590', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            ['row' => '5A0', 'cell' => 0, 'value' => substr($hex, 2, 2)]


           
        ];
    }
}
