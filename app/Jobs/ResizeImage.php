<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

class ResizeImage implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $fileName;
    private $path;
    private $width;
    private $height;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $width, $height) {
        $this->fileName = basename($filePath);
        $this->path = dirname($filePath);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Execute the job.
     */
    public function handle(): void {
        $width = $this->width;
        $height = $this->height;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$width}x{$height}_" . $this->fileName;
        
        $croppedImage = Image::load($srcPath)->crop(Manipulations::CROP_CENTER, $width, $height)
        ->save($destPath);
    }
}
