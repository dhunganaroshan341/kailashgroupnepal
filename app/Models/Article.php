<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use CrudTrait;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_path',
        'featured_image',
    ];

    public function media()
    {
        return $this->morphMany(Media::class, 'related');
    }

    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function newNoticeSections()
    {
        return $this->hasMany(NewsNoticeSection::class, 'news_id');
    }
}
