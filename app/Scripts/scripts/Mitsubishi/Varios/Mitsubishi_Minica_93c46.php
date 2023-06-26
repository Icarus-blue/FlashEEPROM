<?php

namespace App\Scripts;

class Mitsubishi_Minica_93c46 extends Script
{
    public function getResult()
    {

        $hex = $this->getByteForPosition('40', 0) . $this->getByteForPosition('40',1).$this->getByteForPosition('40', 2) . $this->getByteForPosition('40',3).$this->getByteForPosition('40', 4) . $this->getByteForPosition('40',5).$this->getByteForPosition('40', 6) . $this->getByteForPosition('40',7);
        $number = ($hex);

        return [
            'result' =>$number,
            'image' => 'assets/Mitsubishi.png',
            'texts' => [
                'Minica ',
                'Solo calculo !!!',
                'Eeprom 93c46',
                'www.FlashEeprom.com'
            ],
            'list' => [
                400,
                900,
                4500,
                10000,
                15000,
                24555,
                47852,
                50244,
                78525,
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
            case 400:
                $hex = '7BEFEFBDEFBDEFBD ';
                break;
            case 900:
                $hex = 'C698EFBDEFBDEFBD';
                break;
            case 4500:
                $hex = '4AA97BEFEFBDEFBD';
                break;
            case 10000:
                $hex = 'EFBDEFBDDEFBEFBD';
                break;
                case 15000:
                    $hex = 'EFBD4AA9DEFBEFBD';
                    break;
                 case 24555:
                    $hex = '4AA97BEFBDF7EFBD';
                    break;
                case 50244:
                    $hex = 'BDF7EFBD4AA9EFBD';
                    break;
                case 47852:
                    $hex = 'F7DE18E37BEFEFBD';
                    break;
                case 78525:
                    $hex = '4AA9F7DE18E3EFBD';
                    break;
                 case 125000:
                    $hex = 'EFBD4AA9BDF7DEFB';
                    break;
                case 145200:
                    $hex = 'BDF74AA97BEFDEFB';
                    break;
                case 160552:
                    $hex = '4AA9EFBD29A5DEFB';
                    break;
                case 190000:
                    $hex = 'EFBDEFBDC698DEFB';
                    break;  
            default:
                return null;
        }
        
        return [
            ['row' => '40', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '40', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex, 14, 2)],
        ];
    }
}
