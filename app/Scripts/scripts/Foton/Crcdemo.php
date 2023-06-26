<?php

namespace App\Scripts;

class Crcdemo  extends Script
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
        $units = $value % 255;
        $portion = intdiv($units, 255);
        $remaining = $units % 255;
        
        for ($i = 0; $i <= $remaining; $i++) {
            $counter = $i ; 
        }
        
        if ($portion > 0) {
        for ($i = $remaining + 1; $i < 255; $i++) {
                $counter = $i ; 
            }
        }
        
                
          switch ($counter)
    { case 0:$crc='0'; break;
case 1:$crc='1'; break;
case 2:$crc='2'; break;
case 3:$crc='3'; break;
case 4:$crc='4'; break;
case 5:$crc='5'; break;
case 6:$crc='6'; break;
case 7:$crc='7'; break;
case 8:$crc='8'; break;
case 9:$crc='9'; break;
case 10:$crc='10'; break;
case 11:$crc='11'; break;
case 12:$crc='12'; break;
case 13:$crc='13'; break;
case 14:$crc='14'; break;
case 15:$crc='15'; break;
case 16:$crc='16'; break;
case 17:$crc='17'; break;
case 18:$crc='18'; break;
case 19:$crc='19'; break;
case 20:$crc='20'; break;
case 21:$crc='21'; break;
case 22:$crc='22'; break;
case 23:$crc='23'; break;
case 24:$crc='24'; break;
case 25:$crc='25'; break;
case 26:$crc='26'; break;
case 27:$crc='27'; break;
case 28:$crc='28'; break;
case 29:$crc='29'; break;
case 30:$crc='30'; break;
case 31:$crc='31'; break;
case 32:$crc='32'; break;
case 33:$crc='33'; break;
case 34:$crc='34'; break;
case 35:$crc='35'; break;
case 36:$crc='36'; break;
case 37:$crc='37'; break;
case 38:$crc='38'; break;
case 39:$crc='39'; break;
case 40:$crc='40'; break;
case 41:$crc='41'; break;
case 42:$crc='42'; break;
case 43:$crc='43'; break;
case 44:$crc='44'; break;
case 45:$crc='45'; break;
case 46:$crc='46'; break;
case 47:$crc='47'; break;
case 48:$crc='48'; break;
case 49:$crc='49'; break;
case 50:$crc='50'; break;
case 51:$crc='51'; break;
case 52:$crc='52'; break;
case 53:$crc='53'; break;
case 54:$crc='54'; break;
case 55:$crc='55'; break;
case 56:$crc='56'; break;
case 57:$crc='57'; break;
case 58:$crc='58'; break;
case 59:$crc='59'; break;
case 60:$crc='60'; break;
case 61:$crc='61'; break;
case 62:$crc='62'; break;
case 63:$crc='63'; break;
case 64:$crc='64'; break;
case 65:$crc='65'; break;
case 66:$crc='66'; break;
case 67:$crc='67'; break;
case 68:$crc='68'; break;
case 69:$crc='69'; break;
case 70:$crc='70'; break;
case 71:$crc='71'; break;
case 72:$crc='72'; break;
case 73:$crc='73'; break;
case 74:$crc='74'; break;
case 75:$crc='75'; break;
case 76:$crc='76'; break;
case 77:$crc='77'; break;
case 78:$crc='78'; break;
case 79:$crc='79'; break;
case 80:$crc='80'; break;
case 81:$crc='81'; break;
case 82:$crc='82'; break;
case 83:$crc='83'; break;
case 84:$crc='84'; break;
case 85:$crc='85'; break;
case 86:$crc='86'; break;
case 87:$crc='87'; break;
case 88:$crc='88'; break;
case 89:$crc='89'; break;
case 90:$crc='90'; break;
case 91:$crc='91'; break;
case 92:$crc='92'; break;
case 93:$crc='93'; break;
case 94:$crc='94'; break;
case 95:$crc='95'; break;
case 96:$crc='96'; break;
case 97:$crc='97'; break;
case 98:$crc='98'; break;
case 99:$crc='99'; break;
case 100:$crc='100'; break;
case 101:$crc='101'; break;
case 102:$crc='102'; break;
case 103:$crc='103'; break;
case 104:$crc='104'; break;
case 105:$crc='105'; break;
case 106:$crc='106'; break;
case 107:$crc='107'; break;
case 108:$crc='108'; break;
case 109:$crc='109'; break;
case 110:$crc='110'; break;
case 111:$crc='111'; break;
case 112:$crc='112'; break;
case 113:$crc='113'; break;
case 114:$crc='114'; break;
case 115:$crc='115'; break;
case 116:$crc='116'; break;
case 117:$crc='117'; break;
case 118:$crc='118'; break;
case 119:$crc='119'; break;
case 120:$crc='120'; break;
case 121:$crc='121'; break;
case 122:$crc='122'; break;
case 123:$crc='123'; break;
case 124:$crc='124'; break;
case 125:$crc='125'; break;
case 126:$crc='126'; break;
case 127:$crc='127'; break;
case 128:$crc='128'; break;
case 129:$crc='129'; break;
case 130:$crc='130'; break;
case 131:$crc='131'; break;
case 132:$crc='132'; break;
case 133:$crc='133'; break;
case 134:$crc='134'; break;
case 135:$crc='135'; break;
case 136:$crc='136'; break;
case 137:$crc='137'; break;
case 138:$crc='138'; break;
case 139:$crc='139'; break;
case 140:$crc='140'; break;
case 141:$crc='141'; break;
case 142:$crc='142'; break;
case 143:$crc='143'; break;
case 144:$crc='144'; break;
case 145:$crc='145'; break;
case 146:$crc='146'; break;
case 147:$crc='147'; break;
case 148:$crc='148'; break;
case 149:$crc='149'; break;
case 150:$crc='150'; break;
case 151:$crc='151'; break;
case 152:$crc='152'; break;
case 153:$crc='153'; break;
case 154:$crc='154'; break;
case 155:$crc='155'; break;
case 156:$crc='156'; break;
case 157:$crc='157'; break;
case 158:$crc='158'; break;
case 159:$crc='159'; break;
case 160:$crc='160'; break;
case 161:$crc='161'; break;
case 162:$crc='162'; break;
case 163:$crc='163'; break;
case 164:$crc='164'; break;
case 165:$crc='165'; break;
case 166:$crc='166'; break;
case 167:$crc='167'; break;
case 168:$crc='168'; break;
case 169:$crc='169'; break;
case 170:$crc='170'; break;
case 171:$crc='171'; break;
case 172:$crc='172'; break;
case 173:$crc='173'; break;
case 174:$crc='174'; break;
case 175:$crc='175'; break;
case 176:$crc='176'; break;
case 177:$crc='177'; break;
case 178:$crc='178'; break;
case 179:$crc='179'; break;
case 180:$crc='180'; break;
case 181:$crc='181'; break;
case 182:$crc='182'; break;
case 183:$crc='183'; break;
case 184:$crc='184'; break;
case 185:$crc='185'; break;
case 186:$crc='186'; break;
case 187:$crc='187'; break;
case 188:$crc='188'; break;
case 189:$crc='189'; break;
case 190:$crc='190'; break;
case 191:$crc='191'; break;
case 192:$crc='192'; break;
case 193:$crc='193'; break;
case 194:$crc='194'; break;
case 195:$crc='195'; break;
case 196:$crc='196'; break;
case 197:$crc='197'; break;
case 198:$crc='198'; break;
case 199:$crc='199'; break;
case 200:$crc='200'; break;
case 201:$crc='201'; break;
case 202:$crc='202'; break;
case 203:$crc='203'; break;
case 204:$crc='204'; break;
case 205:$crc='205'; break;
case 206:$crc='206'; break;
case 207:$crc='207'; break;
case 208:$crc='208'; break;
case 209:$crc='209'; break;
case 210:$crc='210'; break;
case 211:$crc='211'; break;
case 212:$crc='212'; break;
case 213:$crc='213'; break;
case 214:$crc='214'; break;
case 215:$crc='215'; break;
case 216:$crc='216'; break;
case 217:$crc='217'; break;
case 218:$crc='218'; break;
case 219:$crc='219'; break;
case 220:$crc='220'; break;
case 221:$crc='221'; break;
case 222:$crc='222'; break;
case 223:$crc='223'; break;
case 224:$crc='224'; break;
case 225:$crc='225'; break;
case 226:$crc='226'; break;
case 227:$crc='227'; break;
case 228:$crc='228'; break;
case 229:$crc='229'; break;
case 230:$crc='230'; break;
case 231:$crc='231'; break;
case 232:$crc='232'; break;
case 233:$crc='233'; break;
case 234:$crc='234'; break;
case 235:$crc='235'; break;
case 236:$crc='236'; break;
case 237:$crc='237'; break;
case 238:$crc='238'; break;
case 239:$crc='239'; break;
case 240:$crc='240'; break;
case 241:$crc='241'; break;
case 242:$crc='242'; break;
case 243:$crc='243'; break;
case 244:$crc='244'; break;
case 245:$crc='245'; break;
case 246:$crc='246'; break;
case 247:$crc='247'; break;
case 248:$crc='248'; break;
case 249:$crc='249'; break;
case 250:$crc='250'; break;
case 251:$crc='251'; break;
case 252:$crc='252'; break;
case 253:$crc='253'; break;
case 254:$crc='254'; break;
case 255:$crc='255'; break;


    }    

   $crc0 =dechex($crc+79); 
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
            ['row' => '00', 'cell' => 0, 'value' => substr($crc0, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 0, 2)],
            
           

        ];
    }
}
