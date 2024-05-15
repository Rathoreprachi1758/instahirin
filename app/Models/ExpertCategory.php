<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpertCategory extends Model
{
    use HasFactory;

    public function experts(): HasMany
    {
        return $this->hasMany(Expert::class);
    }
    public function createProject()
    {
        return $this->hasMany(CreateProject::class,'expert_category_id');
    }
}
