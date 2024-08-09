<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionImage extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'path'];

    protected $table = 'section_images';

    protected $primary_key = 'id';

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
