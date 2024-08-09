<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandImage extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = ['brand_id', 'image_path'];

    protected $table = 'brand_images';

    protected $primaryKey = 'id'; // Corrected property name to $primaryKey

    // Define the relationship properly
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
