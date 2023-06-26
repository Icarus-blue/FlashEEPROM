<?php

namespace App\Scripts;

class Foton_Px11_2019_24c04 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('40', 15) . $this->getByteForPosition('40', 14). $this->getByteForPosition('40', 13);
        $number = hexdec($hex);
         
        return [
            'result' => (($number)),
            'image' => 'assets/foton.png',
            'texts' => [
                'L200 2010 - 12 ',
                'Eeprom 93c56',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
    public function calculate(int $value)

    {   
        $result = round(($value));
        $hex = str_pad(dechex($result), 6, '0', STR_PAD_LEFT);
        
       $hex0 = str_pad(dechex($result-1), 6, '0', STR_PAD_LEFT);
       $hex1 = str_pad(dechex($result-2), 6, '0', STR_PAD_LEFT);
       $hex2 = str_pad(dechex($result-3), 6, '0', STR_PAD_LEFT);
       $hex3 = str_pad(dechex($result-4), 6, '0', STR_PAD_LEFT);
       $hex4 = str_pad(dechex($result-5), 6, '0', STR_PAD_LEFT);
       $hex5 = str_pad(dechex($result-6), 6, '0', STR_PAD_LEFT);
       $hex6 = str_pad(dechex($result-7), 6, '0', STR_PAD_LEFT);
       $hex7 = str_pad(dechex($result-8), 6, '0', STR_PAD_LEFT);
       $hex8 = str_pad(dechex($result-9), 6, '0', STR_PAD_LEFT);
       $hex9 = str_pad(dechex($result-8), 6, '0', STR_PAD_LEFT);
       $hex10 = str_pad(dechex($result-9), 6, '0', STR_PAD_LEFT);
       
   $counter = [];
        $units = $value % 127;
        $portion = intdiv($units, 127);
        $remaining = $units % 127;
        
        for ($i = 0; $i <= $remaining; $i++) {
            $counter = $i ; 
        }
        
        if ($portion > 0) {
        for ($i = $remaining + 1; $i < 127; $i++) {
                $counter = $i ; 
            }
        }
        
                
          switch ($counter)
    {  
case 0:$crc='247';break;
case 1:$crc='248';break;
case 2:$crc='249';break;
case 3:$crc='250';break;
case 4:$crc='251';break;
case 5:$crc='252';break;
case 6:$crc='253';break;
case 7:$crc='254';break;
case 8:$crc='255';break;
case 9:$crc='0';break;
case 10:$crc='1';break;
case 11:$crc='2';break;
case 12:$crc='3';break;
case 13:$crc='4';break;
case 14:$crc='5';break;
case 15:$crc='6';break;
case 16:$crc='7';break;
case 17:$crc='8';break;
case 18:$crc='9';break;
case 19:$crc='10';break;
case 20:$crc='11';break;
case 21:$crc='12';break;
case 22:$crc='13';break;
case 23:$crc='14';break;
case 24:$crc='15';break;
case 25:$crc='16';break;
case 26:$crc='17';break;
case 27:$crc='18';break;
case 28:$crc='19';break;
case 29:$crc='20';break;
case 30:$crc='21';break;
case 31:$crc='22';break;
case 32:$crc='23';break;
case 33:$crc='24';break;
case 34:$crc='25';break;
case 35:$crc='26';break;
case 36:$crc='27';break;
case 37:$crc='28';break;
case 38:$crc='29';break;
case 39:$crc='30';break;
case 40:$crc='31';break;
case 41:$crc='32';break;
case 42:$crc='33';break;
case 43:$crc='34';break;
case 44:$crc='35';break;
case 45:$crc='36';break;
case 46:$crc='37';break;
case 47:$crc='38';break;
case 48:$crc='39';break;
case 49:$crc='40';break;
case 50:$crc='41';break;
case 51:$crc='42';break;
case 52:$crc='43';break;
case 53:$crc='44';break;
case 54:$crc='45';break;
case 55:$crc='46';break;
case 56:$crc='47';break;
case 57:$crc='48';break;
case 58:$crc='49';break;
case 59:$crc='50';break;
case 60:$crc='51';break;
case 61:$crc='52';break;
case 62:$crc='53';break;
case 63:$crc='54';break;
case 64:$crc='55';break;
case 65:$crc='56';break;
case 66:$crc='57';break;
case 67:$crc='58';break;
case 68:$crc='59';break;
case 69:$crc='60';break;
case 70:$crc='61';break;
case 71:$crc='62';break;
case 72:$crc='63';break;
case 73:$crc='64';break;
case 74:$crc='65';break;
case 75:$crc='66';break;
case 76:$crc='67';break;
case 77:$crc='68';break;
case 78:$crc='69';break;
case 79:$crc='70';break;
case 80:$crc='71';break;
case 81:$crc='72';break;
case 82:$crc='73';break;
case 83:$crc='74';break;
case 84:$crc='75';break;
case 85:$crc='76';break;
case 86:$crc='77';break;
case 87:$crc='78';break;
case 88:$crc='79';break;
case 89:$crc='80';break;
case 90:$crc='81';break;
case 91:$crc='82';break;
case 92:$crc='83';break;
case 93:$crc='84';break;
case 94:$crc='85';break;
case 95:$crc='86';break;
case 96:$crc='87';break;
case 97:$crc='88';break;
case 98:$crc='89';break;
case 99:$crc='90';break;
case 100:$crc='91';break;
case 101:$crc='92';break;
case 102:$crc='93';break;
case 103:$crc='94';break;
case 104:$crc='95';break;
case 105:$crc='96';break;
case 106:$crc='97';break;
case 107:$crc='98';break;
case 108:$crc='99';break;
case 109:$crc='100';break;
case 110:$crc='101';break;
case 111:$crc='102';break;
case 112:$crc='103';break;
case 113:$crc='104';break;
case 114:$crc='105';break;
case 115:$crc='106';break;
case 116:$crc='107';break;
case 117:$crc='108';break;
case 118:$crc='109';break;
case 119:$crc='110';break;
case 120:$crc='111';break;
case 121:$crc='112';break;
case 122:$crc='113';break;
case 123:$crc='114';break;
case 124:$crc='115';break;
case 125:$crc='116';break;
case 126:$crc='117';break;

    }    

   $crc0 =dechex($crc+0); 
   $crc1 =dechex($crc+1); 
   $crc2 =dechex($crc+2); 
   $crc3 =dechex($crc+3); 
   $crc4 =dechex($crc+4); 
   $crc5 =dechex($crc+5); 
   $crc6 =dechex($crc+6); 
   $crc7 =dechex($crc+7); 
   $crc8 =dechex($crc+8); 
   $crc9 =dechex($crc+9); 
        
        return
         [
            ['row' => '40', 'cell' => 12, 'value' => substr($crc9, 0, 2)],
            ['row' => '40', 'cell' => 13, 'value' => substr($hex, 4, 2)],
            ['row' => '40', 'cell' => 14, 'value' => substr($hex, 2, 2)],
            ['row' => '40', 'cell' => 15, 'value' => substr($hex, 0, 2)],
            
            ['row' => '40', 'cell' => 8, 'value' => substr($crc8, 0, 2)],
            ['row' => '40', 'cell' => 9, 'value' => substr($hex0, 4, 2)],
            ['row' => '40', 'cell' => 10, 'value' => substr($hex0, 2, 2)],
            ['row' => '40', 'cell' => 11, 'value' => substr($hex0, 0, 2)],
            
            ['row' => '40', 'cell' => 4, 'value' => substr($crc7, 0, 2)],
            ['row' => '40', 'cell' => 5, 'value' => substr($hex1, 4, 2)],
            ['row' => '40', 'cell' => 6, 'value' => substr($hex1, 2, 2)],
            ['row' => '40', 'cell' => 7, 'value' => substr($hex1, 0, 2)],
            
            ['row' => '40', 'cell' => 0, 'value' => substr($crc6, 0, 2)],
            ['row' => '40', 'cell' => 1, 'value' => substr($hex2, 4, 2)],
            ['row' => '40', 'cell' => 2, 'value' => substr($hex2, 2, 2)],
            ['row' => '40', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            
            ['row' => '30', 'cell' => 12, 'value' => substr($crc5, 0, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex3, 4, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex3, 2, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex3, 0, 2)],
            
            ['row' => '30', 'cell' => 8, 'value' => substr($crc4, 0, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex4, 4, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex4, 2, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex4, 0, 2)],
            
            ['row' => '30', 'cell' => 4, 'value' => substr($crc3, 0, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex5, 4, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex5, 2, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex5, 0, 2)],
            
            ['row' => '30', 'cell' => 0, 'value' => substr($crc2, 0, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex6, 4, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex6, 2, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex6, 0, 2)],
            
            ['row' => '20', 'cell' => 12, 'value' => substr($crc1, 0, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex7, 4, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex7, 2, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex7, 0, 2)],
            
            ['row' => '20', 'cell' => 8, 'value' => substr($crc0, 0, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex8, 4, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex8, 2, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex8, 0, 2)],
            
            
          
            

        ];
    }
}
