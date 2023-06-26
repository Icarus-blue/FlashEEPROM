<?php

namespace App\Scripts;

class volkswagen_jetta_crypto_micronas_3272_24c32 extends Script
{
    public function getResult()
    {
        $hex = $this->getByteForPosition('800', 13) . $this->getByteForPosition('800', 12);
        $number = hexdec($hex);
         
        return [
            'result' => round((65535-$number) *32),
            'image' => 'assets/volkswagen.png',
            'texts' => [
                'jetta crypto micronas 3272 ',
                'Eerpom 24c32',
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
            case  1000:
                $hex='E0FFC1FF83FF07FF0FFE1FFC3FF87FF0FFE0FFC1FF83FF07FE0FFC1FF83FF07F';
                break;
                case  4254:
                $hex='7BFFF7FEEFFDDFFBBFF77FEFFFDEFFBDFF7BFEF7FDEFFBDFF7BFEF7FDEFFBDFF';
                break;
                case 10000:
                $hex='C7FE8FFD1FFB3FF67FECFFD8FFB1FF63FEC7FD8FFB1FF63FEC7FD8FFB1FF63FF';
                break;
                case 15000:
                $hex='2BFE57FCAFF85FF1BFE27FC5FF8AFF15FE2BFC57F8AFF15FE2BFC57F8AFF15FF';
                break;
                case 24555:
                $hex='00FD01FA03F407E80FD01FA03F407E80FD00FA01F403E807D00FA01F403F807E';
                break;
                case 35500:
                $hex='AAFB55F7ABEE57DDAFBA5F75BEEA7DD5FBAAF755EEABDD57BAAF755FEABED57D';
                break;
                case 50244:
                $hex='DDF9BBF377E7EFCEDF9DBF3B7E77FCEEF9DDF3BBE777CEEF9DDF3BBF777EEEFC';
                break;
                case 47852:
                $hex='28FA51F4A3E847D18FA21F453E8A7D14FA28F451E8A3D147A28F451F8A3E147D';
                break;
                case 78525:
                $hex='6AF6D5ECABD957B3AF665ECDBD9A7B35F66AECD5D9ABB35766AFCD5E9ABD357B';
                break;
                case 98500:
                $hex='F9F3F3E7E7CFCF9F9F3F3E7F7CFEF9FCF3F9E7F3CFE79FCF3F9F7F3EFE7CFCF9';
                break;
                case 125000:
                $hex='BDF07BE1F7C2EF85DF0BBE177C2FF85EF0BDE17BC2F785EF0BDF17BE2F7C5EF8';
                break;
                case 145200:
                $hex='46EE8DDC1BB937726EE4DDC8BB917723EE46DC8DB91B7237E46EC8DD91BB2377';
                break;
                case 160552:
                $hex='66ECCDD89BB137636EC6DD8CBB197633EC66D8CDB19B6337C66E8CDD19BB3376';
                break;
                case 190000:
                $hex='CEE89DD13BA37746EE8CDD19BA337467E8CED19DA33B46778CEE19DD33BA6774';
                break;    

            default:
                return null;
        }
        
        return [

            ['row' => '800', 'cell' => 12, 'value' => substr($hex, 0, 2)],
            ['row' => '800', 'cell' => 13, 'value' => substr($hex, 2, 2)],
            ['row' => '800', 'cell' => 14, 'value' => substr($hex, 4, 2)],
            ['row' => '800', 'cell' => 15, 'value' => substr($hex, 6, 2)],
            
            ['row' => '810', 'cell' => 0, 'value' => substr($hex, 8, 2)],
            ['row' => '810', 'cell' => 1, 'value' => substr($hex, 10, 2)],
            ['row' => '810', 'cell' => 2, 'value' => substr($hex, 12, 2)],
            ['row' => '810', 'cell' => 3, 'value' => substr($hex, 14, 2)],
            ['row' => '810', 'cell' => 4, 'value' => substr($hex, 16, 2)],
            ['row' => '810', 'cell' => 5, 'value' => substr($hex, 18, 2)],
            ['row' => '810', 'cell' => 6, 'value' => substr($hex, 20, 2)],
            ['row' => '810', 'cell' => 7, 'value' => substr($hex, 22, 2)],
            ['row' => '810', 'cell' => 8, 'value' => substr($hex, 24, 2)],
            ['row' => '810', 'cell' => 9, 'value' => substr($hex, 26, 2)],
            ['row' => '810', 'cell' => 10, 'value' => substr($hex, 28, 2)],
            ['row' => '810', 'cell' => 11, 'value' => substr($hex, 30, 2)],
            ['row' => '810', 'cell' => 12, 'value' => substr($hex, 32, 2)],
            ['row' => '810', 'cell' => 13, 'value' => substr($hex, 34, 2)],
            ['row' => '810', 'cell' => 14, 'value' => substr($hex, 36, 2)],
            ['row' => '810', 'cell' => 15, 'value' => substr($hex, 38, 2)],
            
            ['row' => '820', 'cell' => 0, 'value' => substr($hex, 40, 2)],
            ['row' => '820', 'cell' => 1, 'value' => substr($hex, 42, 2)],
            ['row' => '820', 'cell' => 2, 'value' => substr($hex, 44, 2)],
            ['row' => '820', 'cell' => 3, 'value' => substr($hex, 46, 2)],
            ['row' => '820', 'cell' => 4, 'value' => substr($hex, 48, 2)],
            ['row' => '820', 'cell' => 5, 'value' => substr($hex, 50, 2)],
            ['row' => '820', 'cell' => 6, 'value' => substr($hex, 52, 2)],
            ['row' => '820', 'cell' => 7, 'value' => substr($hex, 54, 2)],
            ['row' => '820', 'cell' => 8, 'value' => substr($hex, 56, 2)],
            ['row' => '820', 'cell' => 9, 'value' => substr($hex, 58, 2)],
            ['row' => '820', 'cell' => 10, 'value' => substr($hex, 60, 2)],
            ['row' => '820', 'cell' => 11, 'value' => substr($hex, 62, 2)]
            

            
        ];
    }
}
