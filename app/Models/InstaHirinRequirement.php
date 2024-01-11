<?php

namespace App\Models;

use App\Models\Experty;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InstaHirinRequirement extends Model
{
    use HasFactory;

    protected $table = 'insta_hirin_requirements';

    protected $casts = [
        'key_skills' => 'json',
    ];


    public function getKeySkillsAttribute($value)
    {
        return json_decode($value, true);
    }

    // public function skills(): BelongsToMany
    // {
    //     return $this->belongsToMany(Skill::class);
    // }


    public function experty(): BelongsToMany
    {
        return $this->belongsToMany(Experty::class);
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
