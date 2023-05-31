<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Manipulations;

class WatermarkJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        if(!$i){
            return;
        }

       $srcPath = storage_path('app/public/' . $i->path);
       $image = file_get_contents($srcPath);

       putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));
       $image=SpatieImage::load($srcPath);
       $image->watermark('resources/img/logoWatermark.png') 
       ->watermarkPosition(Manipulations::POSITION_BOTTOM)
       ->watermarkPadding(55)
       ->watermarkOpacity(50);
       $image->save($srcPath);
    }
}
