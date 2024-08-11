<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSlider extends Model
{
    use CrudTrait;

    protected $table = 'banner_sliders';

    protected $fillable = ['image', 'title', 'description'];

    use HasFactory;
}
