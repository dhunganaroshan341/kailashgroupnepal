<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'team_members';

    protected $primary_key = 'id';

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'role',
    ];

    public function socialMedia()
    {
        return $this->hasMany(TeamSocialMedia::class, 'team_id');
    }
}
