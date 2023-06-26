<?php

namespace App\Libraries;

class Watermark
{
    public static function watermark(string $sourcePath, string $targetPath): bool
    {
        try {
            $image = \Config\Services::image()
                ->withFile($sourcePath);
            
            $width = $image->getWidth();
            $height = $image->getHeight();
            
            $initialOffsetX = rand(-50, 30);
            $lastOffsetX = $initialOffsetX;
            $initialOffsetY = rand(-20, 20);
            
            for ($y = $initialOffsetY; $y < $height; $y += 200) {
                if ($lastOffsetX == $initialOffsetX) {
                    $lastOffsetX = $initialOffsetX + 140;
                } else {
                    $lastOffsetX = $initialOffsetX;
                }
                
                for ($x = $lastOffsetX; $x < $width; $x += 600) {
                    $image->text('FLASHEEPROM', [
                        'color' => '#fff',
                        'opacity' => 0.35,
                        'hAlign' => 'left',
                        'vAlign' => 'top',
                        'hOffset' => $x,
                        'vOffset' => $y,
                        'fontPath' => WRITEPATH . 'Exo-ExtraBoldItalic.ttf',
                        'fontSize' => 50
                    ]);
                }
            }
            
            $image->save($targetPath);
            return true;
        } catch (\CodeIgniter\Images\Exceptions\ImageException $e) {
            return false;
        }
    }
}
