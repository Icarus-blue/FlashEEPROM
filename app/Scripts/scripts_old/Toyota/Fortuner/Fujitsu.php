<?php

namespace App\Scripts;

class Fujitsu extends Script
{
    public function getResult()
    {

       $hex = $this->getByteForPosition('30', 5) . $this->getByteForPosition('30', 6). $this->getByteForPosition('30', 7);;
      $number = ($hex);
       
        return [
         'result' => (($number)),
            'image' => 'assets/Toyota.png',
            'texts' => [
                'nombre1',
                'nombre2',
                'nombre3'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                35500,
                47852,
                50244,
                78525,
                90400,
                98500,
                100050,
                125000,
                145200,
                160552,
                190000
            ],
            'fileprefix' => 'Flasheeprom '
        ];
    }
    
    public function calculate(int $value)
    {
        switch ($value) {
            case 1000:
                   $map = [
                    '03' , 
                    '02' ,  
                    '04' ,  
                    '0A' , 
                    '09' ,  
                    '08',
                    '0E',    
                    '0F' ,  
                    '10' ,
                ];
                break;
           
            default:
                return null;
        }
        
        
        $rows = $this->getNumberOfRows();
        $result = [];
        for ($i = 0; $i < 984; $i++) {
            $row = dechex($i * 16);
            $byte = $this->getByteForPosition($row, 1);
            if (isset($map[$byte])) {
                
                $hex2 = dechex(255) ; 
                $result[] = ['row' => $row, 'cell' => 2, 'value' => $hex2];
           
            }
        }   
        
        
        return $result;
    }
}
