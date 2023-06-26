<?php
namespace App\Scripts;
class Pulsar_Ns_Renesas_2018_v1  extends Script
{

    public function getResult()
    {
        $hex = $this->getByteForPosition('AF0', 2) . $this->getByteForPosition('AF0', 1). $this->getByteForPosition('AF0', 0);
        $number = hexdec($hex);
         
        return [
            'result' => round(($number/10)),
            'image' => 'assets/bajaj.png',
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
        $result = round(($value*10));
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
        $hex20 = str_pad(dechex($result-19), 6, '0', STR_PAD_LEFT);//5
        $hex21 = str_pad(dechex($result-20), 6, '0', STR_PAD_LEFT);//4
        $hex22 = str_pad(dechex($result-21), 6, '0', STR_PAD_LEFT);//3
        $hex23 = str_pad(dechex($result-22), 6, '0', STR_PAD_LEFT);//2
        $hex24 = str_pad(dechex($result-23), 6, '0', STR_PAD_LEFT);//1
        $hex25 = str_pad(dechex($result-24), 6, '0', STR_PAD_LEFT);//0
        $hex26 = str_pad(dechex($result-25), 6, '0', STR_PAD_LEFT);//F
        $hex27 = str_pad(dechex($result-26), 6, '0', STR_PAD_LEFT);//E
        $hex28 = str_pad(dechex($result-27), 6, '0', STR_PAD_LEFT);//0
        $hex29 = str_pad(dechex($result-28), 6, '0', STR_PAD_LEFT);//F
        $hex30 = str_pad(dechex($result-29), 6, '0', STR_PAD_LEFT);//E
        $hex31 = str_pad(dechex($result-30), 6, '0', STR_PAD_LEFT);//F
        $hex32 = str_pad(dechex($result-31), 6, '0', STR_PAD_LEFT);//E
        $hex33 = str_pad(dechex($result-32), 6, '0', STR_PAD_LEFT);//E
        $hex34 = str_pad(dechex($result-33), 6, '0', STR_PAD_LEFT);//F
        $hex35 = str_pad(dechex($result-34), 6, '0', STR_PAD_LEFT);//E
        
        $hex36 = str_pad(dechex($result-35), 6, '0', STR_PAD_LEFT);//3
        $hex37 = str_pad(dechex($result-36), 6, '0', STR_PAD_LEFT);//2
        $hex38 = str_pad(dechex($result-37), 6, '0', STR_PAD_LEFT);//1
        $hex39 = str_pad(dechex($result-38), 6, '0', STR_PAD_LEFT);//0
        $hex40 = str_pad(dechex($result-39), 6, '0', STR_PAD_LEFT);//F
        $hex41 = str_pad(dechex($result-40), 6, '0', STR_PAD_LEFT);//E
        $hex42 = str_pad(dechex($result-41), 6, '0', STR_PAD_LEFT);//0
        $hex43 = str_pad(dechex($result-42), 6, '0', STR_PAD_LEFT);//F
        $hex44 = str_pad(dechex($result-43), 6, '0', STR_PAD_LEFT);//E
        $hex45 = str_pad(dechex($result-44), 6, '0', STR_PAD_LEFT);//F
        $hex46 = str_pad(dechex($result-45), 6, '0', STR_PAD_LEFT);//E
        $hex47 = str_pad(dechex($result-46), 6, '0', STR_PAD_LEFT);//E
        $hex48 = str_pad(dechex($result-47), 6, '0', STR_PAD_LEFT);//F
        $hex49 = str_pad(dechex($result-48), 6, '0', STR_PAD_LEFT);//E
        
        
        $hex50 = str_pad(dechex($result-49), 6, '0', STR_PAD_LEFT);//E
        $hex51 = str_pad(dechex($result-50), 6, '0', STR_PAD_LEFT);//F
        $hex52 = str_pad(dechex($result-51), 6, '0', STR_PAD_LEFT);//E
        $hex53 = str_pad(dechex($result-52), 6, '0', STR_PAD_LEFT);//E
        $hex54 = str_pad(dechex($result-53), 6, '0', STR_PAD_LEFT);//F
        $hex55 = str_pad(dechex($result-54), 6, '0', STR_PAD_LEFT);//E
        
        $hex56 = str_pad(dechex($result-55), 6, '0', STR_PAD_LEFT);//3
        $hex57 = str_pad(dechex($result-56), 6, '0', STR_PAD_LEFT);//2
        $hex58 = str_pad(dechex($result-57), 6, '0', STR_PAD_LEFT);//1
        $hex59 = str_pad(dechex($result-58), 6, '0', STR_PAD_LEFT);//0
        $hex60 = str_pad(dechex($result-59), 6, '0', STR_PAD_LEFT);//F
        $hex61 = str_pad(dechex($result-60), 6, '0', STR_PAD_LEFT);//E
        $hex62 = str_pad(dechex($result-61), 6, '0', STR_PAD_LEFT);//0
        $hex63 = str_pad(dechex($result-62), 6, '0', STR_PAD_LEFT);//F
        $hex64 = str_pad(dechex($result-63), 6, '0', STR_PAD_LEFT);//E
        $hex65 = str_pad(dechex($result-64), 6, '0', STR_PAD_LEFT);//F
        
        $hex80 = str_pad(dechex($result-65), 6, '0', STR_PAD_LEFT);//3
        $hex81 = str_pad(dechex($result-66), 6, '0', STR_PAD_LEFT);//2
        $hex82 = str_pad(dechex($result-67), 6, '0', STR_PAD_LEFT);//1
        $hex83 = str_pad(dechex($result-68), 6, '0', STR_PAD_LEFT);//0
        $hex84 = str_pad(dechex($result-69), 6, '0', STR_PAD_LEFT);//F
        $hex85 = str_pad(dechex($result-70), 6, '0', STR_PAD_LEFT);//E
        $hex86 = str_pad(dechex($result-71), 6, '0', STR_PAD_LEFT);//0
        $hex87 = str_pad(dechex($result-72), 6, '0', STR_PAD_LEFT);//F
        $hex88 = str_pad(dechex($result-73), 6, '0', STR_PAD_LEFT);//E
        $hex89 = str_pad(dechex($result-74), 6, '0', STR_PAD_LEFT);//F
        
        $hex66 = str_pad(dechex($result+1), 6, '0', STR_PAD_LEFT);//E
        $hex67 = str_pad(dechex($result+2), 6, '0', STR_PAD_LEFT);//E
        $hex68 = str_pad(dechex($result+3), 6, '0', STR_PAD_LEFT);//F
        $hex69 = str_pad(dechex($result+4), 6, '0', STR_PAD_LEFT);//E
        
        $hex70 = str_pad(dechex($result+5), 6, '0', STR_PAD_LEFT);//E
        $hex71 = str_pad(dechex($result+6), 6, '0', STR_PAD_LEFT);//E
        $hex72 = str_pad(dechex($result+7), 6, '0', STR_PAD_LEFT);//F
        $hex73 = str_pad(dechex($result+8), 6, '0', STR_PAD_LEFT);//E
        $hex74 = str_pad(dechex($result+9), 6, '0', STR_PAD_LEFT);//E
        
        
        
        

        return
         [
            ['row' => 'AC0', 'cell' => 12, 'value' => substr($hex73, 4, 2)],
            ['row' => 'AC0', 'cell' => 13, 'value' => substr($hex73, 2, 2)],
            ['row' => 'AC0', 'cell' => 14, 'value' => substr($hex73, 0,2)],
            
            ['row' => 'AD0', 'cell' => 0, 'value' => substr($hex73, 4, 2)],
            ['row' => 'AD0', 'cell' => 1, 'value' => substr($hex73, 2, 2)],
            ['row' => 'AD0', 'cell' => 2, 'value' => substr($hex73, 0,2)],
            
            ['row' => 'AD0', 'cell' => 4, 'value' => substr($hex72, 4, 2)],
            ['row' => 'AD0', 'cell' => 5, 'value' => substr($hex72, 2, 2)],
            ['row' => 'AD0', 'cell' => 6, 'value' => substr($hex72, 0,2)],
            
            ['row' => 'AD0', 'cell' => 8, 'value' => substr($hex71, 4, 2)],
            ['row' => 'AD0', 'cell' => 9, 'value' => substr($hex71, 2, 2)],
            ['row' => 'AD0', 'cell' => 10, 'value' => substr($hex71, 0,2)],
            
            ['row' => 'AD0', 'cell' => 12, 'value' => substr($hex70, 4, 2)],
            ['row' => 'AD0', 'cell' => 13, 'value' => substr($hex70, 2, 2)],
            ['row' => 'AD0', 'cell' => 14, 'value' => substr($hex70, 0,2)],
            
            ['row' => 'AE0', 'cell' => 0, 'value' => substr($hex69, 4, 2)],
            ['row' => 'AE0', 'cell' => 1, 'value' => substr($hex69, 2, 2)],
            ['row' => 'AE0', 'cell' => 2, 'value' => substr($hex69, 0,2)],
        
            ['row' => 'AE0', 'cell' => 4, 'value' => substr($hex68, 4, 2)],
            ['row' => 'AE0', 'cell' => 5, 'value' => substr($hex68, 2, 2)],
            ['row' => 'AE0', 'cell' => 6, 'value' => substr($hex68, 0,2)],
            
            ['row' => 'AE0', 'cell' => 8, 'value' => substr($hex67, 4, 2)],
            ['row' => 'AE0', 'cell' => 9, 'value' => substr($hex67, 2, 2)],
            ['row' => 'AE0', 'cell' => 10, 'value' => substr($hex67, 0,2)],
            
            ['row' => 'AE0', 'cell' => 12, 'value' => substr($hex66, 4, 2)],
            ['row' => 'AE0', 'cell' => 13, 'value' => substr($hex66, 2, 2)],
            ['row' => 'AE0', 'cell' => 14, 'value' => substr($hex66, 0,2)],
            
            ['row' => 'AF0', 'cell' => 0, 'value' => substr($hex, 4, 2)],
            ['row' => 'AF0', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => 'AF0', 'cell' => 2, 'value' => substr($hex, 0,2)],
            
            ['row' => 'AF0', 'cell' => 4, 'value' => substr($hex2, 4, 2)],
            ['row' => 'AF0', 'cell' => 5, 'value' => substr($hex2, 2, 2)],
            ['row' => 'AF0', 'cell' => 6, 'value' => substr($hex2, 0,2)],
            
            ['row' => 'AF0', 'cell' => 8, 'value' => substr($hex3, 4, 2)],
            ['row' => 'AF0', 'cell' => 9, 'value' => substr($hex3, 2, 2)],
            ['row' => 'AF0', 'cell' => 10, 'value' => substr($hex3, 0,2)],
            
            ['row' => 'AF0', 'cell' => 12, 'value' => substr($hex4, 4, 2)],
            ['row' => 'AF0', 'cell' => 13, 'value' => substr($hex4, 2, 2)],
            ['row' => 'AF0', 'cell' => 14, 'value' => substr($hex4, 0,2)],
            
            ['row' => 'B00', 'cell' => 0, 'value' => substr($hex5, 4, 2)],
            ['row' => 'B00', 'cell' => 1, 'value' => substr($hex5, 2, 2)],
            ['row' => 'B00', 'cell' => 2, 'value' => substr($hex5, 0,2)],
            
            ['row' => 'B00', 'cell' => 4, 'value' => substr($hex6, 4, 2)],
            ['row' => 'B00', 'cell' => 5, 'value' => substr($hex6, 2, 2)],
            ['row' => 'B00', 'cell' => 6, 'value' => substr($hex6, 0,2)],
            
            ['row' => 'B00', 'cell' => 8, 'value' => substr($hex7, 4, 2)],
            ['row' => 'B00', 'cell' => 9, 'value' => substr($hex7, 2, 2)],
            ['row' => 'B00', 'cell' => 10, 'value' => substr($hex7, 0,2)],
            
            ['row' => 'B00', 'cell' => 12, 'value' => substr($hex8, 4, 2)],
            ['row' => 'B00', 'cell' => 13, 'value' => substr($hex8, 2, 2)],
            ['row' => 'B00', 'cell' => 14, 'value' => substr($hex8, 0,2)],
            
            ['row' => 'B10', 'cell' => 0, 'value' => substr($hex9, 4, 2)],
            ['row' => 'B10', 'cell' => 1, 'value' => substr($hex9, 2, 2)],
            ['row' => 'B10', 'cell' => 2, 'value' => substr($hex9, 0,2)],
            
            ['row' => 'B10', 'cell' => 4, 'value' => substr($hex10, 4, 2)],
            ['row' => 'B10', 'cell' => 5, 'value' => substr($hex10, 2, 2)],
            ['row' => 'B10', 'cell' => 6, 'value' => substr($hex10, 0,2)],
            
            ['row' => 'B10', 'cell' => 8, 'value' => substr($hex11, 4, 2)],
            ['row' => 'B10', 'cell' => 9, 'value' => substr($hex11, 2, 2)],
            ['row' => 'B10', 'cell' => 10, 'value' => substr($hex11, 0,2)],
            
            ['row' => 'B10', 'cell' => 12, 'value' => substr($hex12, 4, 2)],
            ['row' => 'B10', 'cell' => 13, 'value' => substr($hex12, 2, 2)],
            ['row' => 'B10', 'cell' => 14, 'value' => substr($hex12, 0,2)],
             
            ['row' => 'B20', 'cell' => 0, 'value' => substr($hex13, 4, 2)],
            ['row' => 'B20', 'cell' => 1, 'value' => substr($hex13, 2, 2)],
            ['row' => 'B20', 'cell' => 2, 'value' => substr($hex13, 0,2)],
            
            ['row' => 'B20', 'cell' => 4, 'value' => substr($hex14, 4, 2)],
            ['row' => 'B20', 'cell' => 5, 'value' => substr($hex14, 2, 2)],
            ['row' => 'B20', 'cell' => 6, 'value' => substr($hex14, 0,2)],
            
            ['row' => 'B20', 'cell' => 8, 'value' => substr($hex15, 4, 2)],
            ['row' => 'B20', 'cell' => 9, 'value' => substr($hex15, 2, 2)],
            ['row' => 'B20', 'cell' => 10, 'value' => substr($hex15, 0,2)],
            
            ['row' => 'B20', 'cell' => 12, 'value' => substr($hex16, 4, 2)],
            ['row' => 'B20', 'cell' => 13, 'value' => substr($hex16, 2, 2)],
            ['row' => 'B20', 'cell' => 14, 'value' => substr($hex16, 0,2)], 
            
            ['row' => 'B30', 'cell' => 0, 'value' => substr($hex17, 4, 2)],
            ['row' => 'B30', 'cell' => 1, 'value' => substr($hex17, 2, 2)],
            ['row' => 'B30', 'cell' => 2, 'value' => substr($hex17, 0,2)],
            
            ['row' => 'B30', 'cell' => 4, 'value' => substr($hex18, 4, 2)],
            ['row' => 'B30', 'cell' => 5, 'value' => substr($hex18, 2, 2)],
            ['row' => 'B30', 'cell' => 6, 'value' => substr($hex18, 0,2)],
            
            ['row' => 'B30', 'cell' => 8, 'value' => substr($hex19, 4, 2)],
            ['row' => 'B30', 'cell' => 9, 'value' => substr($hex19, 2, 2)],
            ['row' => 'B30', 'cell' => 10, 'value' => substr($hex19, 0,2)],
            
            ['row' => 'B30', 'cell' => 12, 'value' => substr($hex20, 4, 2)],
            ['row' => 'B30', 'cell' => 13, 'value' => substr($hex20, 2, 2)],
            ['row' => 'B30', 'cell' => 14, 'value' => substr($hex20, 0,2)],
            
            ['row' => 'B40', 'cell' => 0, 'value' => substr($hex21, 4, 2)],
            ['row' => 'B40', 'cell' => 1, 'value' => substr($hex21, 2, 2)],
            ['row' => 'B40', 'cell' => 2, 'value' => substr($hex21, 0,2)],
            
            ['row' => 'B40', 'cell' => 4, 'value' => substr($hex22, 4, 2)],
            ['row' => 'B40', 'cell' => 5, 'value' => substr($hex22, 2, 2)],
            ['row' => 'B40', 'cell' => 6, 'value' => substr($hex22, 0,2)],
            
            ['row' => 'B40', 'cell' => 8, 'value' => substr($hex23, 4, 2)],
            ['row' => 'B40', 'cell' => 9, 'value' => substr($hex23, 2, 2)],
            ['row' => 'B40', 'cell' => 10, 'value' => substr($hex23, 0,2)],
            
            ['row' => 'B40', 'cell' => 12, 'value' => substr($hex24, 4, 2)],
            ['row' => 'B40', 'cell' => 13, 'value' => substr($hex24, 2, 2)],
            ['row' => 'B40', 'cell' => 14, 'value' => substr($hex24, 0,2)],
            
            ['row' => 'B50', 'cell' => 0, 'value' => substr($hex25, 4, 2)],
            ['row' => 'B50', 'cell' => 1, 'value' => substr($hex25, 2, 2)],
            ['row' => 'B50', 'cell' => 2, 'value' => substr($hex25, 0,2)],
            
            ['row' => 'B50', 'cell' => 4, 'value' => substr($hex26, 4, 2)],
            ['row' => 'B50', 'cell' => 5, 'value' => substr($hex26, 2, 2)],
            ['row' => 'B50', 'cell' => 6, 'value' => substr($hex26, 0,2)],
            
            ['row' => 'B50', 'cell' => 8, 'value' => substr($hex27, 4, 2)],
            ['row' => 'B50', 'cell' => 9, 'value' => substr($hex27, 2, 2)],
            ['row' => 'B50', 'cell' => 10, 'value' => substr($hex27, 0,2)],
            
            ['row' => 'B50', 'cell' => 12, 'value' => substr($hex28, 4, 2)],
            ['row' => 'B50', 'cell' => 13, 'value' => substr($hex28, 2, 2)],
            ['row' => 'B50', 'cell' => 14, 'value' => substr($hex28, 0,2)],
            
            ['row' => 'B60', 'cell' => 0, 'value' => substr($hex29, 4, 2)],
            ['row' => 'B60', 'cell' => 1, 'value' => substr($hex29, 2, 2)],
            ['row' => 'B60', 'cell' => 2, 'value' => substr($hex29, 0,2)],
            
            ['row' => 'B60', 'cell' => 4, 'value' => substr($hex30, 4, 2)],
            ['row' => 'B60', 'cell' => 5, 'value' => substr($hex30, 2, 2)],
            ['row' => 'B60', 'cell' => 6, 'value' => substr($hex30, 0,2)],
            
            ['row' => 'B60', 'cell' => 8, 'value' => substr($hex31, 4, 2)],
            ['row' => 'B60', 'cell' => 9, 'value' => substr($hex31, 2, 2)],
            ['row' => 'B60', 'cell' => 10, 'value' => substr($hex31, 0,2)],
            
            ['row' => 'B60', 'cell' => 12, 'value' => substr($hex22, 4, 2)],
            ['row' => 'B60', 'cell' => 13, 'value' => substr($hex32, 2, 2)],
            ['row' => 'B60', 'cell' => 14, 'value' => substr($hex32, 0,2)],
            
            ['row' => 'B70', 'cell' => 0, 'value' => substr($hex33, 4, 2)],
            ['row' => 'B70', 'cell' => 1, 'value' => substr($hex33, 2, 2)],
            ['row' => 'B70', 'cell' => 2, 'value' => substr($hex33, 0,2)],
            
            ['row' => 'B70', 'cell' => 4, 'value' => substr($hex34, 4, 2)],
            ['row' => 'B70', 'cell' => 5, 'value' => substr($hex34, 2, 2)],
            ['row' => 'B70', 'cell' => 6, 'value' => substr($hex34, 0,2)],
            
            ['row' => 'B70', 'cell' => 8, 'value' => substr($hex35, 4, 2)],
            ['row' => 'B70', 'cell' => 9, 'value' => substr($hex35, 2, 2)],
            ['row' => 'B70', 'cell' => 10, 'value' => substr($hex35, 0,2)],
            
            ['row' => 'B70', 'cell' => 12, 'value' => substr($hex36, 4, 2)],
            ['row' => 'B70', 'cell' => 13, 'value' => substr($hex36, 2, 2)],
            ['row' => 'B70', 'cell' => 14, 'value' => substr($hex36, 0,2)],
            
            ['row' => 'B80', 'cell' => 0, 'value' => substr($hex37, 4, 2)],
            ['row' => 'B80', 'cell' => 1, 'value' => substr($hex37, 2, 2)],
            ['row' => 'B80', 'cell' => 2, 'value' => substr($hex37, 0,2)],
            
            ['row' => 'B80', 'cell' => 4, 'value' => substr($hex38, 4, 2)],
            ['row' => 'B80', 'cell' => 5, 'value' => substr($hex38, 2, 2)],
            ['row' => 'B80', 'cell' => 6, 'value' => substr($hex38, 0,2)],
            
            ['row' => 'B80', 'cell' => 8, 'value' => substr($hex39, 4, 2)],
            ['row' => 'B80', 'cell' => 9, 'value' => substr($hex39, 2, 2)],
            ['row' => 'B80', 'cell' => 10, 'value' => substr($hex39, 0,2)],
            
            ['row' => 'B80', 'cell' => 12, 'value' => substr($hex40, 4, 2)],
            ['row' => 'B80', 'cell' => 13, 'value' => substr($hex40, 2, 2)],
            ['row' => 'B80', 'cell' => 14, 'value' => substr($hex40, 0,2)],
            
            ['row' => 'B90', 'cell' => 0, 'value' => substr($hex41, 4, 2)],
            ['row' => 'B90', 'cell' => 1, 'value' => substr($hex41, 2, 2)],
            ['row' => 'B90', 'cell' => 2, 'value' => substr($hex41, 0,2)],
            
            ['row' => 'B90', 'cell' => 4, 'value' => substr($hex42, 4, 2)],
            ['row' => 'B90', 'cell' => 5, 'value' => substr($hex42, 2, 2)],
            ['row' => 'B90', 'cell' => 6, 'value' => substr($hex42, 0,2)],
            
            ['row' => 'B90', 'cell' => 8, 'value' => substr($hex43, 4, 2)],
            ['row' => 'B90', 'cell' => 9, 'value' => substr($hex43, 2, 2)],
            ['row' => 'B90', 'cell' => 10, 'value' => substr($hex43, 0,2)],
            
            ['row' => 'B90', 'cell' => 12, 'value' => substr($hex44, 4, 2)],
            ['row' => 'B90', 'cell' => 13, 'value' => substr($hex44, 2, 2)],
            ['row' => 'B90', 'cell' => 14, 'value' => substr($hex44, 0,2)],
            
            ['row' => 'BA0', 'cell' => 0, 'value' => substr($hex45, 4, 2)],
            ['row' => 'BA0', 'cell' => 1, 'value' => substr($hex45, 2, 2)],
            ['row' => 'BA0', 'cell' => 2, 'value' => substr($hex45, 0,2)],
            
            ['row' => 'BA0', 'cell' => 4, 'value' => substr($hex46, 4, 2)],
            ['row' => 'BA0', 'cell' => 5, 'value' => substr($hex46, 2, 2)],
            ['row' => 'BA0', 'cell' => 6, 'value' => substr($hex46, 0,2)],
            
            ['row' => 'BA0', 'cell' => 8, 'value' => substr($hex47, 4, 2)],
            ['row' => 'BA0', 'cell' => 9, 'value' => substr($hex47, 2, 2)],
            ['row' => 'BA0', 'cell' => 10, 'value' => substr($hex47, 0,2)],
            
            ['row' => 'BA0', 'cell' => 12, 'value' => substr($hex48, 4, 2)],
            ['row' => 'BA0', 'cell' => 13, 'value' => substr($hex48, 2, 2)],
            ['row' => 'BA0', 'cell' => 14, 'value' => substr($hex48, 0,2)],
           
            ['row' => 'BB0', 'cell' => 0, 'value' => substr($hex49, 4, 2)],
            ['row' => 'BB0', 'cell' => 1, 'value' => substr($hex49, 2, 2)],
            ['row' => 'BB0', 'cell' => 2, 'value' => substr($hex49, 0,2)],
            
            ['row' => 'BB0', 'cell' => 4, 'value' => substr($hex50, 4, 2)],
            ['row' => 'BB0', 'cell' => 5, 'value' => substr($hex50, 2, 2)],
            ['row' => 'BB0', 'cell' => 6, 'value' => substr($hex50, 0,2)],
            
            ['row' => 'BB0', 'cell' => 8, 'value' => substr($hex51, 4, 2)],
            ['row' => 'BB0', 'cell' => 9, 'value' => substr($hex51, 2, 2)],
            ['row' => 'BB0', 'cell' => 10, 'value' => substr($hex51, 0,2)],
            
            ['row' => 'BB0', 'cell' => 12, 'value' => substr($hex52, 4, 2)],
            ['row' => 'BB0', 'cell' => 13, 'value' => substr($hex52, 2, 2)],
            ['row' => 'BB0', 'cell' => 14, 'value' => substr($hex52, 0,2)],
            
            ['row' => 'BC0', 'cell' => 0, 'value' => substr($hex53, 4, 2)],
            ['row' => 'BC0', 'cell' => 1, 'value' => substr($hex53, 2, 2)],
            ['row' => 'BC0', 'cell' => 2, 'value' => substr($hex53, 0,2)],
            
            ['row' => 'BC0', 'cell' => 4, 'value' => substr($hex54, 4, 2)],
            ['row' => 'BC0', 'cell' => 5, 'value' => substr($hex54, 2, 2)],
            ['row' => 'BC0', 'cell' => 6, 'value' => substr($hex54, 0,2)],
            
            ['row' => 'BC0', 'cell' => 8, 'value' => substr($hex55, 4, 2)],
            ['row' => 'BC0', 'cell' => 9, 'value' => substr($hex55, 2, 2)],
            ['row' => 'BC0', 'cell' => 10, 'value' => substr($hex55, 0,2)],
            
            ['row' => 'BC0', 'cell' => 12, 'value' => substr($hex56, 4, 2)],
            ['row' => 'BC0', 'cell' => 13, 'value' => substr($hex56, 2, 2)],
            ['row' => 'BC0', 'cell' => 14, 'value' => substr($hex56, 0,2)],
            
            ['row' => 'BD0', 'cell' => 0, 'value' => substr($hex57, 4, 2)],
            ['row' => 'BD0', 'cell' => 1, 'value' => substr($hex57, 2, 2)],
            ['row' => 'BD0', 'cell' => 2, 'value' => substr($hex57, 0,2)],
            
            ['row' => 'BD0', 'cell' => 4, 'value' => substr($hex58, 4, 2)],
            ['row' => 'BD0', 'cell' => 5, 'value' => substr($hex58, 2, 2)],
            ['row' => 'BD0', 'cell' => 6, 'value' => substr($hex58, 0,2)],
            
            ['row' => 'BD0', 'cell' => 8, 'value' => substr($hex59, 4, 2)],
            ['row' => 'BD0', 'cell' => 9, 'value' => substr($hex59, 2, 2)],
            ['row' => 'BD0', 'cell' => 10, 'value' => substr($hex59, 0,2)],
            
            ['row' => 'BD0', 'cell' => 12, 'value' => substr($hex60, 4, 2)],
            ['row' => 'BD0', 'cell' => 13, 'value' => substr($hex60, 2, 2)],
            ['row' => 'BD0', 'cell' => 14, 'value' => substr($hex60, 0,2)],
            
            ['row' => 'BE0', 'cell' => 0, 'value' => substr($hex61, 4, 2)],
            ['row' => 'BE0', 'cell' => 1, 'value' => substr($hex61, 2, 2)],
            ['row' => 'BE0', 'cell' => 2, 'value' => substr($hex61, 0,2)],
            
            ['row' => 'BE0', 'cell' => 4, 'value' => substr($hex62, 4, 2)],
            ['row' => 'BE0', 'cell' => 5, 'value' => substr($hex62, 2, 2)],
            ['row' => 'BE0', 'cell' => 6, 'value' => substr($hex62, 0,2)],
            
            ['row' => 'BE0', 'cell' => 8, 'value' => substr($hex63, 4, 2)],
            ['row' => 'BE0', 'cell' => 9, 'value' => substr($hex63, 2, 2)],
            ['row' => 'BE0', 'cell' => 10, 'value' => substr($hex63, 0,2)],
            
            ['row' => 'BE0', 'cell' => 12, 'value' => substr($hex64, 4, 2)],
            ['row' => 'BE0', 'cell' => 13, 'value' => substr($hex64, 2, 2)],
            ['row' => 'BE0', 'cell' => 14, 'value' => substr($hex64, 0,2)],
            
            ['row' => 'BF0', 'cell' => 0, 'value' => substr($hex65, 4, 2)],
            ['row' => 'BF0', 'cell' => 1, 'value' => substr($hex65, 2, 2)],
            ['row' => 'BF0', 'cell' => 2, 'value' => substr($hex65, 0,2)],
            
            ['row' => 'BF0', 'cell' => 4, 'value' => substr($hex80, 4, 2)],
            ['row' => 'BF0', 'cell' => 5, 'value' => substr($hex80, 2, 2)],
            ['row' => 'BF0', 'cell' => 6, 'value' => substr($hex80, 0,2)],
        
            ['row' => 'BF0', 'cell' => 8, 'value' => substr($hex81, 4, 2)],
            ['row' => 'BF0', 'cell' => 9, 'value' => substr($hex81, 2, 2)],
            ['row' => 'BF0', 'cell' => 10, 'value' => substr($hex81, 0,2)],
        
            ['row' => 'BF0', 'cell' => 12, 'value' => substr($hex82, 4, 2)],
            ['row' => 'BF0', 'cell' => 13, 'value' => substr($hex82, 2, 2)],
            ['row' => 'BF0', 'cell' => 14, 'value' => substr($hex82, 0,2)],
        ];
        
    }
}
