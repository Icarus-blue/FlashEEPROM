<?php

namespace App\Scripts;
global $old; 

class demoi10 extends Script

{
    public function getResult()
    { $byte = $this->getByteForPosition('7B0', 00);
        
        $a = substr($byte, 0, 1);
        $b =substr($byte, -1);

        $byte2=$this->getByteForPosition('7B0', 01);
        $c = substr($byte2, 0, 1);
     
       
         
         $hexx = $this->getByteForPosition('7B0', 02) ;
         $hexx4 = hexdec($hexx);
         switch ($hexx4) 
         {
         case 255: $crcr = '00000'; break;
         case 254: $crcr = '19064'; break;
          case 239: $crcr = '1'; break;
         }
         $old = $crcr ;  
          $varc =hexdec ( $crcr ); 
            $hex = $old .$a . $b. $c ;
            $number = hexdec($hex); 
        return [
            'result' => ($number*25 ),
            'image' => 'assets/chevrolet.png',
            'texts' => [
                'Chevrolet Sail 2009-2013',
                'Eeprom 24C08 ',
                'www.FlashEeprom.com'
            ],
            'fileprefix' => 'flasheeprom'
        ];
    }
    
     public function calculate(int $value)
    {
       
        $result = (($value/25));
        $hex = str_pad(dechex($result), 4, '0', STR_PAD_LEFT);
        $byte= $hex ; 
     
                        $a1 = substr($byte, 0,1);
                        $b1 =substr($byte, -2); 
                        $c1 = substr($byte,  -3);
                        $d1 =substr($byte, -4);
                        $hex2 = $c1 . $a1. $b1 .$d1 ;
                        
         $hex3 = substr($byte, -1);
         $value2 =hexdec($hex3);
         switch ($value2  ^ 0x05) 
         {
         case 00: $hex4 = '00'; break;
         case 01: $hex4 = '0D'; break;
         case 02: $hex4 = '07'; break;
         case 03: $hex4 = '0A'; break;
         case 04: $hex4 = '0E'; break;
         case 05: $hex4 = '03'; break;
         case 06: $hex4 = '09'; break;
         case 07: $hex4 = '04'; break;
         case 8: $hex4 = ' 01'; break;
         case 9: $hex4 = ' 0C'; break;
         case 10: $hex4 = '06'; break;
         case 11: $hex4 = '0B'; break;
         case 12: $hex4 = '0F'; break;
         case 13: $hex4 = '02'; break;
         case 14: $hex4 = '08'; break;
         case 15: $hex4 = '05'; break;
         }
         
        $var2 =  hexdec($hex4) ; 
        $byte3 = substr($byte, -2,1);
        $value2 = hexdec ($byte3);
           switch ($value2  ^ $var2) 
         {
         case 00: $hex5 = '00'; break;
         case 01: $hex5 = '0D'; break;
         case 02: $hex5 = '07'; break;
         case 03: $hex5 = '0A'; break;
         case 04: $hex5 = '0E'; break;
         case 05: $hex5 = '03'; break;
         case 06: $hex5 = '09'; break;
         case 07: $hex5 = '04'; break;
         case 8: $hex5 = ' 01'; break;
         case 9: $hex5 = ' 0C'; break;
         case 10: $hex5 = '06'; break;
         case 11: $hex5 = '0B'; break;
         case 12: $hex5 = '0F'; break;
         case 13: $hex5 = '02'; break;
         case 14: $hex5 = '08'; break;
         case 15: $hex5 = '05'; break;
         }
    
        $var3 =  hexdec($hex5) ; 
        $byte4 = substr($byte, -3,1);
        $value3 = hexdec ($byte4);
           switch ($value3  ^ $var3) 
         {
         case 00: $hex6 = '00'; break;
         case 01: $hex6 = '0D'; break;
         case 02: $hex6 = '07'; break;
         case 03: $hex6 = '0A'; break;
         case 04: $hex6 = '0E'; break;
         case 05: $hex6 = '03'; break;
         case 06: $hex6 = '09'; break;
         case 07: $hex6 = '04'; break;
         case 8: $hex6 = ' 01'; break;
         case 9: $hex6 = ' 0C'; break;
         case 10: $hex6 = '06'; break;
         case 11: $hex6 = '0B'; break;
         case 12: $hex6 = '0F'; break;
         case 13: $hex6 = '02'; break;
         case 14: $hex6 = '08'; break;
         case 15: $hex6 = '05'; break;
         }
      
        $hex7 = substr($hex2, -1);
        
        $hex9 = $hex7 . $hex8 ;
         
        $var4= hexdec($hex6);
        $byte5 = substr($byte, -4,1);
         $old = $byte5 ; 
        $value4= hexdec($byte5);
        $var5 = ($value4  ^ $var4) ;
        $var6 =(dechex($var5));
        $hex8 = substr($var6, -1,1);
        $hex9 = $hex7 . $hex8 ;
        
        
        
        $counter = [];
        $units = $value % 25;
        $portion = intdiv($units, 25);
        $remaining = $units % 25;
        
        for ($i = 0; $i <= $remaining; $i++) {
            $counter = $i ; 
        }
        
        if ($portion > 0) {
        for ($i = $remaining + 1; $i < 25; $i++) {
                $counter = $i ; 
            }
        }
        
                
          switch ($counter) 
                 {
                 case 0:     $crc0= '00'; 
                             $crc1 = '81'; 
                             $crc2 = '82'; 
                             $crc3 = '03'; 
                             $crc4 = '84'; 
                             $crc5 = '05';
                             $crc6 = '06'; 
                             $crc7 = '87'; 
                             $crc8 = '88'; 
                             $crc9 = '09'; 
                             $crc10= '0A'; 
                             $crc11= '8B';
                             $crc12= '0C'; 
                             $crc13= '8D'; 
                             $crc14= '8E'; 
                             $crc15= '0F'; 
                             $crc16= '90'; break;
                
                
                 case 1:     
                             $crc0 = '00';
                             $crc1 = '81'; 
                             $crc2 = '82'; 
                             $crc3 = '03'; 
                             $crc4 = '84'; 
                             $crc5 = '05';
                             $crc6 = '06'; 
                             $crc7 = '87'; 
                             $crc8 = '88'; 
                             $crc9 = '09'; 
                             $crc10= '0A'; 
                             $crc11= '8B';
                             $crc12= '0C'; 
                             $crc13= '8D'; 
                             $crc14= '8E'; 
                             $crc15= '0F'; 
                             $crc16= '90'; break;
                 
                 case 2:     
                            $crc0 = 'A0';
                            $crc1 = '8B'; 
                             $crc2 = '0C'; 
                             $crc3 = '8D'; 
                             $crc4 = '8E'; 
                             $crc5 = '0F';
                             $crc6 = '90'; 
                             $crc7 = '11'; 
                             $crc8 = '12'; 
                             $crc9 = '93'; 
                             $crc10= '14'; 
                             $crc11= '95';
                             $crc12= '96'; 
                             $crc13= '17'; 
                             $crc14= '18'; 
                             $crc15= '99'; 
                             $crc16= '9A'; break;
                 
                 
                 
                 case 3:     $crc0 = '14';
                             $crc1 = '95'; 
                             $crc2 = '96'; 
                             $crc3 = '17'; 
                             $crc4 = '18'; 
                             $crc5 = '99';
                             $crc6 = '9A'; 
                             $crc7 = '1B'; 
                             $crc8 = '9C'; 
                             $crc9 = '1D'; 
                             $crc10= '1E'; 
                             $crc11= '9F';
                             $crc12= 'A0'; 
                             $crc13= '21'; 
                             $crc14= '22'; 
                             $crc15= 'A3'; 
                             $crc16= '24'; break;
                 
                 
                 case 4:     $crc0 = '1E';
                             $crc1 = '9F'; 
                             $crc2 = 'A0'; 
                             $crc3 = '21'; 
                             $crc4 = '22'; 
                             $crc5 = 'A3';
                             $crc6 = '24'; 
                             $crc7 = 'A5'; 
                             $crc8 = 'A6'; 
                             $crc9 = '27'; 
                             $crc10= '28'; 
                             $crc11= 'A9';
                             $crc12= 'AA'; 
                             $crc13= '2B'; 
                             $crc14= 'AC'; 
                             $crc15= '2D'; 
                             $crc16= '2E'; break;
                 
                 
                 case 5:    $crc0 = '28';
                            $crc1 = 'A9'; 
                             $crc2 = 'AA'; 
                             $crc3 = '2B'; 
                             $crc4 = 'AC'; 
                             $crc5 = '2D';
                             $crc6 = '2E'; 
                             $crc7 = 'AF'; 
                             $crc8 = '30'; 
                             $crc9 = 'B1'; 
                             $crc10= 'B2'; 
                             $crc11= '33';
                             $crc12= 'B4'; 
                             $crc13= '35'; 
                             $crc14= '36'; 
                             $crc15= 'B7'; 
                             $crc16= 'E8'; break;
                 
                 
                 
                 case 6:     $crc0 = '33';
                             $crc1 = 'B4'; 
                             $crc2 = '35'; 
                             $crc3 = '36'; 
                             $crc4 = 'B7'; 
                             $crc5 = 'B8';
                             $crc6 = '39'; 
                             $crc7 = '3A'; 
                             $crc8 = 'BB'; 
                             $crc9 = '3C'; 
                             $crc10= 'BD'; 
                             $crc11= 'BE';
                             $crc12= '3F'; 
                             $crc13= 'C0'; 
                             $crc14= '41'; 
                             $crc15= '42'; 
                             $crc16= 'C3'; break;
                 
                 case 7:     
                            $crc0 = 'BD';
                             $crc1 = 'FE'; 
                             $crc2 = '3F'; 
                             $crc3 = 'C0'; 
                             $crc4 = '41'; 
                             $crc5 = '42';
                             $crc6 = 'C3'; 
                             $crc7 = '44'; 
                             $crc8 = 'C5'; 
                             $crc9 = 'C6'; 
                             $crc10= '47'; 
                             $crc11= '48';
                             $crc12= 'C9'; 
                             $crc13= 'CA'; 
                             $crc14= '4B'; 
                             $crc15= 'CC'; 
                             $crc16= '4D'; break;
                 
                 case 8:     $crc0 = '47';
                              $crc1 = '48'; 
                             $crc2 = 'C9'; 
                             $crc3 = 'CA'; 
                             $crc4 = '4B'; 
                             $crc5 = 'CC';
                             $crc6 = '4D'; 
                             $crc7 = '4E'; 
                             $crc8 = 'CF'; 
                             $crc9 = '50'; 
                             $crc10= 'D1'; 
                             $crc11= 'D2';
                             $crc12= '53'; 
                             $crc13= 'D4'; 
                             $crc14= '55'; 
                             $crc15= '56'; 
                             $crc16= 'D7'; break;
                 
                 
                 case 9:     $crc0 = 'D1';
                 
                                $crc1 = 'D2'; 
                             $crc2 = '53'; 
                             $crc3 = 'D4'; 
                             $crc4 = '55'; 
                             $crc5 = '56';
                             $crc6 = 'D7'; 
                             $crc7 = 'D8'; 
                             $crc8 = '59'; 
                             $crc9 = '5A'; 
                             $crc10= 'DB'; 
                             $crc11= '5C';
                             $crc12= 'DD'; 
                             $crc13= 'DE'; 
                             $crc14= '5F'; 
                             $crc15= '60'; 
                             $crc16= 'E1'; 
                             break;
                             
                             
                 
                 case 10:    $crc0 = 'DB';
                            $crc1 = '5C'; 
                             $crc2 = 'DD'; 
                             $crc3 = 'DE'; 
                             $crc4 = '5F'; 
                             $crc5 = '60';
                             $crc6 = 'E1'; 
                             $crc7 = 'E2'; 
                             $crc8 = '63'; 
                             $crc9 = 'E4'; 
                             $crc10= '65'; 
                             $crc11= '66';
                             $crc12= 'E7'; 
                             $crc13= 'E8'; 
                             $crc14= '69'; 
                             $crc15= '6A'; 
                             $crc16= 'EB'; break;
                 
                 
                 
                 case 11:    $crc0 = '66';
                 
                 $crc1 = 'E7'; 
                             $crc2 = 'E8'; 
                             $crc3 = '69'; 
                             $crc4 = '6A'; 
                             $crc5 = 'EB';
                             $crc6 = '6C'; 
                             $crc7 = 'ED'; 
                             $crc8 = 'EE'; 
                             $crc9 = '6F'; 
                             $crc10= 'F0'; 
                             $crc11= '71';
                             $crc12= '72'; 
                             $crc13= 'F3'; 
                             $crc14= '74'; 
                             $crc15= 'F5'; 
                             $crc16= 'F6'; break;
                 
                 case 12:   $crc0 = 'F0';
                        $crc1 = '71'; 
                             $crc2 = '72'; 
                             $crc3 = 'F3'; 
                             $crc4 = '74'; 
                             $crc5 = 'F5';
                             $crc6 = 'F6'; 
                             $crc7 = '77'; 
                             $crc8 = '78'; 
                             $crc9 = 'F9'; 
                             $crc10= 'FA'; 
                             $crc11= '7B';
                             $crc12= 'FC'; 
                             $crc13= '7D'; 
                             $crc14= '7E'; 
                             $crc15= '7F'; 
                             $crc16= '80'; break;
                 
                case 13:     $crc0 = 'FA';
                      $crc1 = 'FA'; 
                             $crc2 = '7B'; 
                             $crc3 = 'FC'; 
                             $crc4 = '7E'; 
                             $crc5 = '7F';
                             $crc6 = '80'; 
                             $crc7 = '01'; 
                             $crc8 = '02'; 
                             $crc9 = '83'; 
                             $crc10= '04'; 
                             $crc11= '85';
                             $crc12= '86'; 
                             $crc13= '07'; 
                             $crc14= '08'; 
                             $crc15= '89'; 
                             $crc16= '8A'; break;
                 
                 case 14:   $crc0 = '04';
                 $crc1 = '85'; 
                             $crc2 = '86'; 
                             $crc3 = '07'; 
                             $crc4 = '08'; 
                             $crc5 = '89';
                             $crc6 = '8A'; 
                             $crc7 = '0B'; 
                             $crc8 = '8C'; 
                             $crc9 = '0D'; 
                             $crc10= '0E'; 
                             $crc11= '8F';
                             $crc12= '10'; 
                             $crc13= '91'; 
                             $crc14= '92'; 
                             $crc15= '13'; 
                             $crc16= '94'; break;
                 
                 case 15:    $crc0 = '0E';
                 $crc1 = '8F'; 
                             $crc2 = '10'; 
                             $crc3 = '91'; 
                             $crc4 = '92'; 
                             $crc5 = '13';
                             $crc6 = '94'; 
                             $crc7 = '15'; 
                             $crc8 = '16'; 
                             $crc9 = '97'; 
                             $crc10= '98'; 
                             $crc11= '19';
                             $crc12= '1A'; 
                             $crc13= '9B'; 
                             $crc14= '1C'; 
                             $crc15= '9D'; 
                             $crc16= '9E'; break;
                 
                 case 16:   $crc0 = '19';
                 $crc1 = '1A'; 
                             $crc2 = '9B'; 
                             $crc3 = '1C'; 
                             $crc4 = '9D'; 
                             $crc5 = '9E';
                             $crc6 = '1F'; 
                             $crc7 = '20'; 
                             $crc8 = 'A1'; 
                             $crc9 = 'A2'; 
                             $crc10= '23'; 
                             $crc11= 'A4';
                             $crc12= '25'; 
                             $crc13= '26'; 
                             $crc14= 'A7'; 
                             $crc15= 'A8'; 
                             $crc16= '29'; break;
                 
                 case 17:$crc0 = '23';
                 $crc1 = 'A4'; 
                             $crc2 = '25'; 
                             $crc3 = '26'; 
                             $crc4 = 'A7'; 
                             $crc5 = 'A8';
                             $crc6 = '29'; 
                             $crc7 = '2A'; 
                             $crc8 = 'AB'; 
                             $crc9 = '2C'; 
                             $crc10= 'AD'; 
                             $crc11= 'AE';
                             $crc12= '2F'; 
                             $crc13= 'B0'; 
                             $crc14= '31'; 
                             $crc15= '32'; 
                             $crc16= 'B3'; break;
                 
                 case 18:   
                     $crc0 = 'AD';
                             $crc1 = 'AE'; 
                             $crc2 = '2F'; 
                             $crc3 = 'B0'; 
                             $crc4 = '31'; 
                             $crc5 = '32';
                             $crc6 = 'B3'; 
                             $crc7 = '35'; 
                             $crc8 = 'B5'; 
                             $crc9 = 'B6'; 
                             $crc10= '37'; 
                             $crc11= '38';
                             $crc12= 'B9'; 
                             $crc13= 'BA'; 
                             $crc14= '3B'; 
                             $crc15= 'BC'; 
                             $crc16= '3D'; break;
                 
                 case 19:    $crc0 = '37';
                             $crc1 = '38'; 
                             $crc2 = 'B9'; 
                             $crc3 = 'BA'; 
                             $crc4 = '3B'; 
                             $crc5 = 'BC';
                             $crc6 = '3D'; 
                             $crc7 = '3E'; 
                             $crc8 = 'BF'; 
                             $crc9 = '40'; 
                             $crc10= 'C1'; 
                             $crc11= 'C2';
                             $crc12= '43'; 
                             $crc13= 'C4'; 
                             $crc14= '45'; 
                             $crc15= '46'; 
                             $crc16= 'C7'; break;
                             
                 case 20:    $crc0 = 'C1';
                             $crc1 = 'C2'; 
                             $crc2 = '43'; 
                             $crc3 = 'C4'; 
                             $crc4 = '45'; 
                             $crc5 = '46';
                             $crc6 = 'C7'; 
                             $crc7 = 'C8'; 
                             $crc8 = '49'; 
                             $crc9 = '4A'; 
                             $crc10= 'CB'; 
                             $crc11= '4C';
                             $crc12= 'CD'; 
                             $crc13= 'CE'; 
                             $crc14= '4F'; 
                             $crc15= 'D0'; 
                             $crc16= '51'; break;
                             
                 case 21:    $crc0 = '4C';
                             $crc1 = 'CD'; 
                             $crc2 = 'CE'; 
                             $crc3 = '4F'; 
                             $crc4 = 'D0'; 
                             $crc5 = '51';
                             $crc6 = '52'; 
                             $crc7 = 'D3'; 
                             $crc8 = '54'; 
                             $crc9 = 'D5'; 
                             $crc10= 'D6'; 
                             $crc11= '57';
                             $crc12= '58'; 
                             $crc13= 'D9'; 
                             $crc14= 'DA'; 
                             $crc15= '5B'; 
                             $crc16= 'DC'; break;
                             
                 case 22:    $crc0 = 'D6';
                             $crc1 = '57'; 
                             $crc2 = '58'; 
                             $crc3 = 'D9'; 
                             $crc4 = 'DA'; 
                             $crc5 = '5B';
                             $crc6 = 'DC'; 
                             $crc7 = '5D'; 
                             $crc8 = '5E'; 
                             $crc9 = 'DF'; 
                             $crc10= 'E0'; 
                             $crc11= '61';
                             $crc12= '62'; 
                             $crc13= 'E3'; 
                             $crc14= '64'; 
                             $crc15= 'E5'; 
                             $crc16= 'E6'; break;
                             
                 case 23:    $crc0 = 'E0';
                             $crc1 = '61'; 
                             $crc2 = '62'; 
                             $crc3 = 'E3'; 
                             $crc4 = '64'; 
                             $crc5 = 'E5';
                             $crc6 = 'E6'; 
                             $crc7 = '67'; 
                             $crc8 = '68'; 
                             $crc9 = 'E9'; 
                             $crc10= 'EA'; 
                             $crc11= '6B';
                             $crc12= 'EC'; 
                             $crc13= '6D'; 
                             $crc14= '6E'; 
                             $crc15= 'EF'; 
                             $crc16= '70'; 
                             
                             break;
                 case 24:    $crc0 = 'EA';
                             $crc1 = '6B'; 
                             $crc2 = 'EC'; 
                             $crc3 = '6D'; 
                             $crc4 = '6E'; 
                             $crc5 = 'EF';
                             $crc6 = '70'; 
                             $crc7 = 'F1'; 
                             $crc8 = 'F2'; 
                             $crc9 = '73'; 
                             $crc10= 'F4'; 
                             $crc11= '75';
                             $crc12= '76'; 
                             $crc13= 'F7'; 
                             $crc14= 'F8'; 
                             $crc15= '79'; 
                             $crc16= '7A'; break;
                             
                 case 25:    $crc0 = 'F4';
                             $crc1 = '75'; 
                             $crc2 = '76'; 
                             $crc3 = 'F7'; 
                             $crc4 = 'F8'; 
                             $crc5 = '79';
                             $crc6 = '7A'; 
                             $crc7 = 'FB'; 
                             $crc8 = '7C'; 
                             $crc9 = 'FD'; 
                             $crc10= 'FE'; 
                             $crc11= '7F';
                             $crc12= '80'; 
                             $crc13= '01'; 
                             $crc14= '02'; 
                             $crc15= '83'; 
                             $crc16= '04'; break;
                 }
         
         if ($value> 102375) {$complemento = dechex (254) ; }
         if ($value < 102374){$complemento = dechex(255);}
        return
         [
            ['row' => '780', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '780', 'cell' => 12, 'value' => substr($hex9, 0, 2)],
            ['row' => '780', 'cell' => 13, 'value' => substr($complemento,0,2)],
            ['row' => '780', 'cell' => 14, 'value' => substr($crc0, 0, 2)],
            
            ['row' => '780', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '790', 'cell' => 0, 'value' => substr($hex9, 0, 2)],
            ['row' => '790', 'cell' => 1, 'value' => substr($complemento,0,2)],
            ['row' => '790', 'cell' => 2, 'value' => substr($crc1, 0, 2)],
            
            ['row' => '790', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '790', 'cell' => 4, 'value' => substr($hex9, 0, 2)],
            ['row' => '790', 'cell' => 5, 'value' => substr($complemento,0,2)],
            ['row' => '790', 'cell' => 6, 'value' => substr($crc2, 0, 2)],
            
            ['row' => '790', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '790', 'cell' => 8, 'value' => substr($hex9, 0, 2)],
            ['row' => '790', 'cell' => 9, 'value' => substr($complemento,0,2)],
            ['row' => '790', 'cell' => 10, 'value' => substr($crc3, 0, 2)],
            
            ['row' => '790', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '790', 'cell' => 12, 'value' => substr($hex9, 0, 2)],
            ['row' => '790', 'cell' => 13, 'value' => substr($complemento,0,2)],
            ['row' => '790', 'cell' => 14, 'value' => substr($crc4, 0, 2)],
            
            ['row' => '790', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '7A0', 'cell' => 00, 'value' => substr($hex9, 0, 2)],
            ['row' => '7A0', 'cell' => 1, 'value' => substr($complemento,0,2)],
            ['row' => '7A0', 'cell' => 2, 'value' => substr($crc5, 0, 2)],
            
            ['row' => '7A0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '7A0', 'cell' => 4, 'value' => substr($hex9, 0, 2)],
            ['row' => '7A0', 'cell' => 5, 'value' => substr($complemento,0,2)],
            ['row' => '7A0', 'cell' => 6, 'value' => substr($crc6, 0, 2)],
            
            ['row' => '7A0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '7A0', 'cell' => 8, 'value' => substr($hex9, 0, 2)],
            ['row' => '7A0', 'cell' => 9, 'value' => substr($complemento,0,2)],
            ['row' => '7A0', 'cell' => 10, 'value' => substr($crc7, 0, 2)],
        
            ['row' => '7A0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '7A0', 'cell' => 12, 'value' => substr($hex9, 0, 2)],
            ['row' => '7A0', 'cell' => 13, 'value' => substr($complemento,0,2)],
            ['row' => '7A0', 'cell' => 14, 'value' => substr($crc8, 0, 2)],
            
            ['row' => '7A0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '7B0', 'cell' => 0, 'value' => substr($hex9, 0, 2)],
            ['row' => '7B0', 'cell' => 1, 'value' => substr($complemento,0,2)],
            ['row' => '7B0', 'cell' => 2, 'value' => substr($crc9, 0, 2)],
            
            ['row' => '7B0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '7B0', 'cell' => 4, 'value' => substr($hex9, 0, 2)],
            ['row' => '7B0', 'cell' => 5, 'value' => substr($complemento,0,2)],
            ['row' => '7B0', 'cell' => 6, 'value' => substr($crc10, 0, 2)],
            
            ['row' => '7B0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '7B0', 'cell' => 8, 'value' => substr($hex9, 0, 2)],
            ['row' => '7B0', 'cell' => 9, 'value' => substr($complemento,0,2)],
            ['row' => '7B0', 'cell' => 10, 'value' => substr($crc11, 0, 2)],
        
            ['row' => '7B0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '7B0', 'cell' => 12, 'value' => substr($hex9, 0, 2)],
            ['row' => '7B0', 'cell' => 13, 'value' => substr($complemento,0,2)],
            ['row' => '7B0', 'cell' => 14, 'value' => substr($crc12, 0, 2)],
            
            ['row' => '7B0', 'cell' => 15, 'value' => substr($hex2, 0, 2)],
            ['row' => '7C0', 'cell' => 00, 'value' => substr($hex9, 0, 2)],
            ['row' => '7C0', 'cell' => 1, 'value' => substr($complemento,0,2)],
            ['row' => '7C0', 'cell' => 2, 'value' => substr($crc13, 0, 2)],
            
            ['row' => '7C0', 'cell' => 3, 'value' => substr($hex2, 0, 2)],
            ['row' => '7C0', 'cell' => 4, 'value' => substr($hex9, 0, 2)],
            ['row' => '7C0', 'cell' => 5, 'value' => substr($complemento,0,2)],
            ['row' => '7C0', 'cell' => 6, 'value' => substr($crc14, 0, 2)],
            
            ['row' => '7C0', 'cell' => 7, 'value' => substr($hex2, 0, 2)],
            ['row' => '7C0', 'cell' => 8, 'value' => substr($hex9, 0, 2)],
            ['row' => '7C0', 'cell' => 9, 'value' => substr($complemento,0,2)],
            ['row' => '7C0', 'cell' => 10, 'value' => substr($crc15, 0, 2)],
            
            ['row' => '7C0', 'cell' => 11, 'value' => substr($hex2, 0, 2)],
            ['row' => '7C0', 'cell' => 12, 'value' => substr($hex9, 0, 2)],
            ['row' => '7C0', 'cell' => 13, 'value' => substr($complemento,0,2)],
            ['row' => '7C0', 'cell' => 14, 'value' => substr($crc16, 0, 2)],
            
        ];
        
         
        }
           
       
    }

