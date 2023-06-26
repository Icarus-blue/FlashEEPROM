<?php
namespace App\Scripts;
class CHANGAN_HONOR_DASH_9S12HA32_CHECKSUM_V3 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00',1). $this->getByteForPosition('00', 2);
        $number = hexdec($hex);
         

        return [
            'result' =>round($number*256),
            'image' => 'assets/CHANGAN.png',
            'texts' => [
                'HONOR CHECKSUM Dash V3',
                'EEPROM 9S12HA32 ',
                'www.flasheeprom.com'
            ],
            'list' => [
                1000,
                4254,
                10000,
                15000,
                24555,
                47852,
                37500,
                50244,
                60500,
                78525,
                98500,
                100000,
                125000,
                145200,
                160552,
                190000
            ],
            'fileprefix' => 'archivo'
        ];
    }
    
    public function calculate(int $value)
    {
        switch ($value) {
            case 1000:
                $hex= '0003CC';
                break;
            case 4254:
                $hex= '001082 ';
                break;
            case 10000:
                $hex= '0026F4 ';
                break;
            case 15000:
                $hex= '003A7C ';
                break;
             case 24555:
                $hex= '005FCF ';
                break;
             case 37500:
                $hex= '009260 ';
                    break;

            case 50244:
                $hex= '00C428 ';
                break;
            case 60500:
                $hex= '00EC38 ';
                    break;   

            case 47852:
                $hex= '00BAD0 ';
                break;
            case 78525:
                $hex= '0132A1 ';
                break;
            case 98500:
                $hex= '0180A8';
                 break;    
            case 100000:
                $hex= '018684';
                 break;          
             case 125000:
                $hex= '01E82C';
                break;
            case 145200:
                $hex= '023714';
                break;
            case 160552:
                $hex= '02730C';
                break;
            case 190000:
                $hex= '02E614';
                break;    

            default:
                return null;
        }
        $fixed_part_left = substr($hex, 0, 2);
        $fixed_part_right = substr($hex, 2, 2);
        $sum_part = hexdec(substr($hex, 4, 2));
        
        $result = $this->getSum('00', 1, 29, $fixed_part_left, $fixed_part_right, $sum_part);
        $result = array_merge($result, $this->getSum('500', 1, 29, $fixed_part_left, $fixed_part_right, $sum_part ));
        
        return $result;
    }
    
    private function getSum(string $row, int $cell, int $quantity, string $fixed_part_left, string $fixed_part_right, int $sum_part) : array
    {
        $result = [];
        
        for ($i = 0; $i < $quantity; $i++) {
            $offset = $i * 4;
            
            $result[] = $this->getOffset($row, $cell, $offset) + ['value' => $fixed_part_left];
            $result[] = $this->getOffset($row, $cell, $offset + 1) + ['value' => $fixed_part_right];
            $result[] = $this->getOffset($row, $cell, $offset + 2) + ['value' => dechex(($sum_part + $i) % 256)];
        }
        
        return $result;
    }
}
