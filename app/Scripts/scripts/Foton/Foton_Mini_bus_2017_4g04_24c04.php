<?php
namespace App\Scripts;
class Foton_Mini_bus_2017_4g04_24c04 extends Script
{
    public function getResult()
    {
        $byte = $this->getByteForPosition('30', 0);
        $a =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 1);
        $b =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 2);
        $c =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 3);
        $d =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 4);
        $e =substr($byte, -1);

        $byte = $this->getByteForPosition('30', 5);
        $f =substr($byte, -1);

       
        $hex =  $f . $e . $d. $c. $b . $a;
        $number = ($hex); 

        return [
            'result' => (($number)),
            'image' => 'assets/foton.png',
            'texts' => [
                'CityVan',
                'Eeprom 24C04',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(($result), 6, '0', STR_PAD_LEFT);

        return
         [
          

            ['row' => '30', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 5, 1)],
            
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 5, 1)],

            ['row' => '50', 'cell' => 5, 'value' => substr($hex, 0, 1)],
            ['row' => '50', 'cell' => 4, 'value' => substr($hex, 1, 1)],
            ['row' => '50', 'cell' => 3, 'value' => substr($hex, 2, 1)],
            ['row' => '50', 'cell' => 2, 'value' => substr($hex, 3, 1)],
            ['row' => '50', 'cell' => 1, 'value' => substr($hex, 4, 1)],
            ['row' => '50', 'cell' => 0, 'value' => substr($hex, 5, 1)],

           
           
        ];
    }
}
