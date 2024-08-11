<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use CrudTrait;

    protected $fillable = [
        'title',
        'description',
        'image_path',
    ];

    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'id');
    }
}
