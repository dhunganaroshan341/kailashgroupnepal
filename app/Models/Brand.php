<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'website', 'address', 'logo_path', 'description'];

    protected $table = 'brands';

    protected $primary_key = 'id';

    public function brandImages()
    {
        return $this->hasMany(BrandImage::class, 'brand_id');
    }
}
