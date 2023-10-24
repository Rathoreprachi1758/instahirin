<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InstaHirinRequirement extends Model
{
    use HasFactory;


    public function getKeySkillsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }
}
