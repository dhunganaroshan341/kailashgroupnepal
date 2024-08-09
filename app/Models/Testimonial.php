<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $primary_key = 'id';

    use CrudTrait;

    protected $fillable = [
        'name',
        'position',
        'company',
        'testimonial',
        'image_path',
        'writer',
        'role',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
