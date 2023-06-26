<?php

namespace App\Scripts;

class Toyota_Camry_VDO_2007_93c86 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('00', 0) . $this->getByteForPosition('00', 1);
        $number = hexdec($hex);
         
        return [
            'result' => round((65535-$number) *32),
            'image' => 'assets/Toyota.png',
            'texts' => [
                'Camry VDO 2007 ',
                'Eerpom 93c86',
                'www.flashEeprom.com'
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
                98500,
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
                $hex='FFE0FFC1FF83FF07FE0FFC1FF83FF07FE0FFC1FF83FF07FF0FFE1FFC3FF87FF0';
                break;
                case 4254:
                $hex='FF7BFEF7FDEFFBDFF7BFEF7FDEFFBDFF7BFFF7FEEFFDDFFBBFF77FEFFFDEFFBD';
                break;
                case 10000:
                $hex='FEC7FD8FFB1FF63FEC7FD8FFB1FF63FFC7FE8FFD1FFB3FF67FECFFD8FFB1FF63';
                break;
                case 15000:
                $hex='FE2BFC57F8AFF15FE2BFC57F8AFF15FF2BFE57FCAFF85FF1BFE27FC5FF8AFF15';
                break;
                case 24555:
                $hex='FD00FA01F403E807D00FA01F403F807E00FD01FA03F407E80FD01FA03F407E80';
                break;
                case 35500:
                $hex='FBAAF755EEABDD57BAAF755FEABED57DAAFB55F7ABEE57DDAFBA5F75BEEA7DD5';
                break;
                case 50244:
                $hex='F9DDF3BBE777CEEF9DDF3BBF777EEEFCDDF9BBF377E7EFCEDF9DBF3B7E77FCEE';
                break;
                case 47852:
                $hex='FA28F451E8A3D147A28F451F8A3E147D28FA51F4A3E847D18FA21F453E8A7D14';
                break;
                case 78525:
                $hex='F66AECD5D9ABB35766AFCD5E9ABD357B6AF6D5ECABD957B3AF665ECDBD9A7B35';
                break;
                case 98500:
                $hex='F3F9E7F3CFE79FCF3F9F7F3EFE7CFCF9F9F3F3E7E7CFCF9F9F3F3E7F7CFEF9FC';
                break;
                case 125000:
                $hex='F0BDE17BC2F785EF0BDF17BE2F7C5EF8BDF07BE1F7C2EF85DF0BBE177C2FF85E';
                break;
                case 145200:
                $hex='EE46DC8DB91B7237E46EC8DD91BB237746EE8DDC1BB937726EE4DDC8BB917723';
                break;
                case 160552:
                $hex='EC66D8CDB19B6337C66E8CDD19BB337666ECCDD89BB137636EC6DD8CBB197633';
                break;
                case 190000:
                $hex='E8CED19DA33B46778CEE19DD33BA6774CEE89DD13BA37746EE8CDD19BA337467';   

            default:
                return null;
        }
        
        return [

            ['row' => '00', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '00', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '00', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '00', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '00', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '00', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '00', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '00', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '00', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '00', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '00', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '00', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '00', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '00', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '00', 'cell' => 14, 'value' => substr($hex, 28, 2)],
            ['row' => '00', 'cell' => 15, 'value' => substr($hex, 30, 2)],
           
            ['row' => '10', 'cell' => 0, 'value' => substr($hex, 32, 2)],
            ['row' => '10', 'cell' => 1, 'value' => substr($hex, 34, 2)],
            ['row' => '10', 'cell' => 2, 'value' => substr($hex, 36, 2)],
            ['row' => '10', 'cell' => 3, 'value' => substr($hex, 38, 2)],
            ['row' => '10', 'cell' => 4, 'value' => substr($hex, 40, 2)],
            ['row' => '10', 'cell' => 5, 'value' => substr($hex, 42, 2)],
            ['row' => '10', 'cell' => 6, 'value' => substr($hex, 44, 2)],
            ['row' => '10', 'cell' => 7, 'value' => substr($hex, 46, 2)],
            ['row' => '10', 'cell' => 8, 'value' => substr($hex, 48, 2)],
            ['row' => '10', 'cell' => 9, 'value' => substr($hex, 50, 2)],
            ['row' => '10', 'cell' => 10, 'value' => substr($hex, 52, 2)],
            ['row' => '10', 'cell' => 11, 'value' => substr($hex, 54, 2)],
            ['row' => '10', 'cell' => 12, 'value' => substr($hex, 56, 2)],
            ['row' => '10', 'cell' => 13, 'value' => substr($hex, 58, 2)],
            ['row' => '10', 'cell' => 14, 'value' => substr($hex, 60, 2)],
            ['row' => '10', 'cell' => 15, 'value' => substr($hex, 62, 2)],

            ['row' => '20', 'cell' => 0, 'value' => substr($hex, 0, 2)],
            ['row' => '20', 'cell' => 1, 'value' => substr($hex, 2, 2)],
            ['row' => '20', 'cell' => 2, 'value' => substr($hex, 4, 2)],
            ['row' => '20', 'cell' => 3, 'value' => substr($hex, 6, 2)],
            ['row' => '20', 'cell' => 4, 'value' => substr($hex, 8, 2)],
            ['row' => '20', 'cell' => 5, 'value' => substr($hex, 10, 2)],
            ['row' => '20', 'cell' => 6, 'value' => substr($hex, 12, 2)],
            ['row' => '20', 'cell' => 7, 'value' => substr($hex, 14, 2)],
            ['row' => '20', 'cell' => 8, 'value' => substr($hex, 16, 2)],
            ['row' => '20', 'cell' => 9, 'value' => substr($hex, 18, 2)],
            ['row' => '20', 'cell' => 10, 'value' => substr($hex, 20, 2)],
            ['row' => '20', 'cell' => 11, 'value' => substr($hex, 22, 2)],
            ['row' => '20', 'cell' => 12, 'value' => substr($hex, 24, 2)],
            ['row' => '20', 'cell' => 13, 'value' => substr($hex, 26, 2)],
            ['row' => '20', 'cell' => 14, 'value' => substr($hex, 28, 2)],
            ['row' => '20', 'cell' => 15, 'value' => substr($hex, 30, 2)],

            ['row' => '30', 'cell' => 0, 'value' => substr($hex, 32, 2)],
            ['row' => '30', 'cell' => 1, 'value' => substr($hex, 34, 2)],
            ['row' => '30', 'cell' => 2, 'value' => substr($hex, 36, 2)],
            ['row' => '30', 'cell' => 3, 'value' => substr($hex, 38, 2)],
            ['row' => '30', 'cell' => 4, 'value' => substr($hex, 40, 2)],
            ['row' => '30', 'cell' => 5, 'value' => substr($hex, 42, 2)],
            ['row' => '30', 'cell' => 6, 'value' => substr($hex, 44, 2)],
            ['row' => '30', 'cell' => 7, 'value' => substr($hex, 46, 2)],
            ['row' => '30', 'cell' => 8, 'value' => substr($hex, 48, 2)],
            ['row' => '30', 'cell' => 9, 'value' => substr($hex, 50, 2)],
            ['row' => '30', 'cell' => 10, 'value' => substr($hex, 52, 2)],
            ['row' => '30', 'cell' => 11, 'value' => substr($hex, 54, 2)],
            ['row' => '30', 'cell' => 12, 'value' => substr($hex, 56, 2)],
            ['row' => '30', 'cell' => 13, 'value' => substr($hex, 58, 2)],
            ['row' => '30', 'cell' => 14, 'value' => substr($hex, 60, 2)],
            ['row' => '30', 'cell' => 15, 'value' => substr($hex, 62, 2)],
        

            
        ];
    }
}
