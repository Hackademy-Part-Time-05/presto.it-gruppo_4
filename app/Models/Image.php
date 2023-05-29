<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['path'];

    protected $casts = [
        'labels' => 'array'
    ];

    public function announcement() {
        return $this->belongsTo(Announcement::class);
    }

    public static function getUrlByFilePath($filePath, $width = null, $height = null) {
        if (!$width && !$height) {
            return Storage::url($filePath);
        }

        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/crop_{$width}x{$height}_{$fileName}";

        return Storage::url($file);
    }

    public function getUrl($width = null, $height = null) {
        return Image::getUrlByFilePath($this->path, $width, $height);
    }
}
