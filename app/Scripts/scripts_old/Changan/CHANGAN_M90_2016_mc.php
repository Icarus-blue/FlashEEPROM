<?php
namespace App\Scripts;
class CHANGAN_M90_2016_mc_error extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('400',2). $this->getByteForPosition('400', 1).$this->getByteForPosition('400', 0);
        $number = ($hex);
         
        return [
            'result' => ($number),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'SUPERVAN dash MC9S12HA32',
                'Micro MC9S12HA32',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)
    {   $result = round(($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);


        
        return
         [
            ['row' => '400', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 2, 'value' => substr($hex, 0, 2)],

            ['row' => '440', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '440', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '440', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            
            ['row' => '480', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '480', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '480', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            
            ['row' => '4C0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '4C0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '4C0', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            
            ['row' => '400', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '400', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '400', 'cell' => 2, 'value' => substr($hex, 0, 2)],
            
           
        ];
    }
}
