<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'path'];

    protected $table = 'artcile_images';

    protected $primary_key = 'id';

    public function article()
    {
        $this->belongsTo(Article::class);
    }
}
