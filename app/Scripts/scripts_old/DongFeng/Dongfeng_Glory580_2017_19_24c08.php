<?php
namespace App\Scripts;
class Dongfeng_Glory580_2017_19_24c08 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('310',10). $this->getByteForPosition('310', 9) . $this->getByteForPosition('310',8);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)/10),
            'image' => 'assets/dongfeng.png',
            'texts' => [
                'Glory 580 2017-19  ',
                'Eeprom 24c08',
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
            ['row' => '310', 'cell' => 8, 'value' => substr($hex, 4, 2)],
            ['row' => '310', 'cell' => 9, 'value' => substr($hex, 2, 2)],
            ['row' => '310', 'cell' => 10, 'value' => substr($hex, 0, 2)],

            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 0, 2)],
           
           

            
         
        ];
    }
}
