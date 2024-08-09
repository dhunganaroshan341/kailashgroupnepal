<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use CrudTrait;
    protected $fillable = [
        'file_name',
        'file_path',
        'related_type',
        'related_id',
        'description',
    ];

    public function related()
    {
        return $this->morphTo();
    }
}
