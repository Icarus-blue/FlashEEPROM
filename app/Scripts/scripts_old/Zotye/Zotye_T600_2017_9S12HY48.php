<?php
namespace App\Scripts;
class Zotye_T600_2017_9S12HY48  extends Script
{

    public function getResult()
    {
        $hex = $this->getByteForPosition('5B0', 6) . $this->getByteForPosition('5B0', 4). $this->getByteForPosition('5B0', 5);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number)),
            'image' => 'assets/zotye.png',
            'texts' => [
                'Aveo V1 2012-18',
                'Eeprom 93c86',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        $hex2 = str_pad(dechex($result-1), 6, '0', STR_PAD_LEFT);
        $hex3 = str_pad(dechex($result-2), 6, '0', STR_PAD_LEFT);//e
        $hex4 = str_pad(dechex($result-3), 6, '0', STR_PAD_LEFT);//D
        $hex5 = str_pad(dechex($result-4), 6, '0', STR_PAD_LEFT);//C
        $hex6 = str_pad(dechex($result-5), 6, '0', STR_PAD_LEFT);//B
        $hex7 = str_pad(dechex($result-6), 6, '0', STR_PAD_LEFT);//A
        $hex8 = str_pad(dechex($result-7), 6, '0', STR_PAD_LEFT);//9
        $hex9 = str_pad(dechex($result-8), 6, '0', STR_PAD_LEFT);//8
        $hex10 = str_pad(dechex($result-9), 6, '0', STR_PAD_LEFT);//7
        $hex11 = str_pad(dechex($result-10), 6, '0', STR_PAD_LEFT);//6
        $hex12 = str_pad(dechex($result-11), 6, '0', STR_PAD_LEFT);//5
        $hex13 = str_pad(dechex($result-12), 6, '0', STR_PAD_LEFT);//4
        $hex14 = str_pad(dechex($result-13), 6, '0', STR_PAD_LEFT);//3
        $hex15 = str_pad(dechex($result-14), 6, '0', STR_PAD_LEFT);//2
        $hex16 = str_pad(dechex($result-15), 6, '0', STR_PAD_LEFT);//1
        $hex17 = str_pad(dechex($result-16), 6, '0', STR_PAD_LEFT);//0
        $hex18 = str_pad(dechex($result-17), 6, '0', STR_PAD_LEFT);//F
        $hex19 = str_pad(dechex($result-18), 6, '0', STR_PAD_LEFT);//E
        
        

        return
         [
            
            ['row' => '5B0', 'cell' => 4, 'value' => substr($hex, 2, 2)],
            ['row' => '5B0', 'cell' => 5, 'value' => substr($hex, 4, 2)],
            ['row' => '5B0', 'cell' => 6, 'value' => substr($hex, 0,2)],
            ['row' => '5B0', 'cell' => 7, 'value' => substr($hex2, 2, 2)],
            ['row' => '5B0', 'cell' => 8, 'value' => substr($hex2, 4, 2)],
            ['row' => '5B0', 'cell' => 9, 'value' => substr($hex2, 0,2)],
             
            ['row' => '5A0', 'cell' => 0, 'value' => substr($hex3, 2, 2)],
            ['row' => '5A0', 'cell' => 1, 'value' => substr($hex3, 4, 2)],
            ['row' => '5A0', 'cell' => 2, 'value' => substr($hex3, 0,2)],
            
            ['row' => '590', 'cell' => 12, 'value' => substr($hex2, 2, 2)],
            ['row' => '590', 'cell' => 13, 'value' => substr($hex2, 4, 2)],
            ['row' => '590', 'cell' => 14, 'value' => substr($hex2, 0,2)],
            
            ['row' => '580', 'cell' => 8, 'value' => substr($hex4, 2, 2)],
            ['row' => '580', 'cell' => 9, 'value' => substr($hex4, 4, 2)],
            ['row' => '580', 'cell' => 10, 'value' => substr($hex4, 0,2)],
            
            ['row' => '580', 'cell' => 4, 'value' => substr($hex3, 2, 2)],
            ['row' => '580', 'cell' => 5, 'value' => substr($hex3, 4, 2)],
            ['row' => '580', 'cell' => 6, 'value' => substr($hex3, 0,2)],
            
            ['row' => '570', 'cell' => 0, 'value' => substr($hex5, 2, 2)],
            ['row' => '570', 'cell' => 1, 'value' => substr($hex5, 4, 2)],
            ['row' => '570', 'cell' => 2, 'value' => substr($hex5, 0,2)],
            
            ['row' => '560', 'cell' => 12, 'value' => substr($hex4, 2, 2)],
            ['row' => '560', 'cell' => 13, 'value' => substr($hex4, 4, 2)],
            ['row' => '560', 'cell' => 14, 'value' => substr($hex4, 0,2)],
            
            ['row' => '550', 'cell' => 8, 'value' => substr($hex6, 2, 2)],
            ['row' => '550', 'cell' => 9, 'value' => substr($hex6, 4, 2)],
            ['row' => '550', 'cell' => 10, 'value' => substr($hex6, 0,2)],
            
            ['row' => '550', 'cell' => 4, 'value' => substr($hex5, 2, 2)],
            ['row' => '550', 'cell' => 5, 'value' => substr($hex5, 4, 2)],
            ['row' => '550', 'cell' => 6, 'value' => substr($hex5, 0,2)],
            
            ['row' => '540', 'cell' => 0, 'value' => substr($hex7, 2, 2)],
            ['row' => '540', 'cell' => 1, 'value' => substr($hex7, 4, 2)],
            ['row' => '540', 'cell' => 2, 'value' => substr($hex7, 0,2)],
            
            ['row' => '530', 'cell' => 12, 'value' => substr($hex6, 2, 2)],
            ['row' => '530', 'cell' => 13, 'value' => substr($hex6, 4, 2)],
            ['row' => '530', 'cell' => 14, 'value' => substr($hex6, 0,2)],
            
            ['row' => '520', 'cell' => 8, 'value' => substr($hex8, 2, 2)],
            ['row' => '520', 'cell' => 9, 'value' => substr($hex8, 4, 2)],
            ['row' => '520', 'cell' => 10, 'value' => substr($hex8, 0,2)],
            
            ['row' => '520', 'cell' => 4, 'value' => substr($hex7, 2, 2)],
            ['row' => '520', 'cell' => 5, 'value' => substr($hex7, 4, 2)],
            ['row' => '520', 'cell' => 6, 'value' => substr($hex7, 0,2)],
            
            ['row' => '510', 'cell' => 0, 'value' => substr($hex9, 2, 2)],
            ['row' => '510', 'cell' => 1, 'value' => substr($hex9, 4, 2)],
            ['row' => '510', 'cell' => 2, 'value' => substr($hex9, 0,2)],
            
            ['row' => '500', 'cell' => 12, 'value' => substr($hex8, 2, 2)],
            ['row' => '500', 'cell' => 13, 'value' => substr($hex8, 4, 2)],
            ['row' => '500', 'cell' => 14, 'value' => substr($hex8, 0,2)],
            
            ['row' => '4F0', 'cell' => 0, 'value' => substr($hex10, 2, 2)],
            ['row' => '4F0', 'cell' => 1, 'value' => substr($hex10, 4, 2)],
            ['row' => '4F0', 'cell' => 2, 'value' => substr($hex10, 0,2)],
            
            ['row' => '4E0', 'cell' => 12, 'value' => substr($hex9, 2, 2)],
            ['row' => '4E0', 'cell' => 13, 'value' => substr($hex9, 4, 2)],
            ['row' => '4E0', 'cell' => 14, 'value' => substr($hex9, 0,2)],
            
            ['row' => '4D0', 'cell' => 8, 'value' => substr($hex11, 2, 2)],
            ['row' => '4D0', 'cell' => 9, 'value' => substr($hex11, 4, 2)],
            ['row' => '4D0', 'cell' => 10, 'value' => substr($hex11, 0,2)],
            
            ['row' => '4D0', 'cell' => 4, 'value' => substr($hex10, 2, 2)],
            ['row' => '4D0', 'cell' => 5, 'value' => substr($hex10, 4, 2)],
            ['row' => '4D0', 'cell' => 6, 'value' => substr($hex10, 0,2)],
            
            ['row' => '4C0', 'cell' => 0, 'value' => substr($hex12, 2, 2)],
            ['row' => '4C0', 'cell' => 1, 'value' => substr($hex12, 4, 2)],
            ['row' => '4C0', 'cell' => 2, 'value' => substr($hex12, 0,2)],
            
            ['row' => '4B0', 'cell' => 12, 'value' => substr($hex11, 2, 2)],
            ['row' => '4B0', 'cell' => 13, 'value' => substr($hex11, 4, 2)],
            ['row' => '4B0', 'cell' => 14, 'value' => substr($hex11, 0,2)],
            
            ['row' => '4A0', 'cell' => 8, 'value' => substr($hex13, 2, 2)],
            ['row' => '4A0', 'cell' => 9, 'value' => substr($hex13, 4, 2)],
            ['row' => '4A0', 'cell' => 10, 'value' => substr($hex13, 0,2)],
            
            ['row' => '4A0', 'cell' => 4, 'value' => substr($hex12, 2, 2)],
            ['row' => '4A0', 'cell' => 5, 'value' => substr($hex12, 4, 2)],
            ['row' => '4A0', 'cell' => 6, 'value' => substr($hex12, 0,2)],
            
            ['row' => '490', 'cell' => 0, 'value' => substr($hex14, 2, 2)],
            ['row' => '490', 'cell' => 1, 'value' => substr($hex14, 4, 2)],
            ['row' => '490', 'cell' => 2, 'value' => substr($hex14, 0,2)],
            
            ['row' => '480', 'cell' => 12, 'value' => substr($hex13, 2, 2)],
            ['row' => '480', 'cell' => 13, 'value' => substr($hex13, 4, 2)],
            ['row' => '480', 'cell' => 14, 'value' => substr($hex13, 0,2)],
            
            ['row' => '470', 'cell' => 8, 'value' => substr($hex15, 2, 2)],
            ['row' => '470', 'cell' => 9, 'value' => substr($hex15, 4, 2)],
            ['row' => '470', 'cell' => 10, 'value' => substr($hex15, 0,2)],
            
            ['row' => '470', 'cell' => 4, 'value' => substr($hex14, 2, 2)],
            ['row' => '470', 'cell' => 5, 'value' => substr($hex14, 4, 2)],
            ['row' => '470', 'cell' => 6, 'value' => substr($hex14, 0,2)],
            
            ['row' => '460', 'cell' => 0, 'value' => substr($hex16, 2, 2)],
            ['row' => '460', 'cell' => 1, 'value' => substr($hex16, 4, 2)],
            ['row' => '460', 'cell' => 2, 'value' => substr($hex16, 0,2)],
            
            ['row' => '450', 'cell' => 12, 'value' => substr($hex15, 2, 2)],
            ['row' => '450', 'cell' => 13, 'value' => substr($hex15, 4, 2)],
            ['row' => '450', 'cell' => 14, 'value' => substr($hex15, 0,2)],
            
            ['row' => '440', 'cell' => 8, 'value' => substr($hex17, 2, 2)],
            ['row' => '440', 'cell' => 9, 'value' => substr($hex17, 4, 2)],
            ['row' => '440', 'cell' => 10, 'value' => substr($hex17, 0,2)],
            
            ['row' => '440', 'cell' => 4, 'value' => substr($hex16, 2, 2)],
            ['row' => '440', 'cell' => 5, 'value' => substr($hex16, 4, 2)],
            ['row' => '440', 'cell' => 6, 'value' => substr($hex16, 0,2)],
            
            ['row' => '430', 'cell' => 0, 'value' => substr($hex18, 2, 2)],
            ['row' => '430', 'cell' => 1, 'value' => substr($hex18, 4, 2)],
            ['row' => '430', 'cell' => 2, 'value' => substr($hex18, 0,2)],
            
            ['row' => '420', 'cell' => 12, 'value' => substr($hex17, 2, 2)],
            ['row' => '420', 'cell' => 13, 'value' => substr($hex17, 4, 2)],
            ['row' => '420', 'cell' => 14, 'value' => substr($hex17, 0,2)],
            
            ['row' => '410', 'cell' => 8, 'value' => substr($hex19, 2, 2)],
            ['row' => '410', 'cell' => 9, 'value' => substr($hex19, 4, 2)],
            ['row' => '410', 'cell' => 10, 'value' => substr($hex19, 0,2)],
            
            ['row' => '410', 'cell' => 4, 'value' => substr($hex18, 2, 2)],
            ['row' => '410', 'cell' => 5, 'value' => substr($hex18, 4, 2)],
            ['row' => '410', 'cell' => 6, 'value' => substr($hex18, 0,2)],
            
        ];
        
    }
}
