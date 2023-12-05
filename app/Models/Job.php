<?php

namespace App\Models;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';


    protected $guarded = [];

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }
}
