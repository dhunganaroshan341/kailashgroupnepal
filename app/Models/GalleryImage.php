<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use CrudTrait;

    protected $table = 'gallery_images';

    protected $fillable = [
        'gallery_id',
        'name',          // Updated column name
        'image_path',    // Updated column name
        'description',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }
}
