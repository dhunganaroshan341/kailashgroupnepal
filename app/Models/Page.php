<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use CrudTrait;

    protected $table = 'pages';

    protected $primary_key = 'id';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'parent_id',
    ];

    public function media()
    {
        return $this->morphMany(Media::class, 'related');
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    // Define the relationship to itself (parent page)
    public function parent()
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    // Define the inverse relationship if needed
    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }

    // In your Page model
    public function getTitleAttribute()
    {
        return $this->attributes['title'];
    }
}
