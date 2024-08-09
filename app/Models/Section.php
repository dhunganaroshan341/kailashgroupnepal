<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    protected $primary_key = 'id';

    use CrudTrait;

    protected $fillable = [
        'page_id',
        'title',
        'content',
        'order',
        'image_path',
        'rating',
    ];

    public function images()
    {
        return $this->hasMany(SectionImage::class);
    }
}
