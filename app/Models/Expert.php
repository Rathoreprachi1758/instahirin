<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Expert extends Model
{
    use HasFactory;

    public function experties():BelongsToMany{
        return $this->belongsToMany(Experty::class);
    }

    public function skills():BelongsToMany{
        return $this->belongsToMany(Skill::class);
    }

    public function expertCategory():BelongsTo{
        return $this->belongsTo(ExpertCategory::class);
    }

    public function hireRequests():HasMany{
        return $this->hasMany(Expert::class);
    }
}
