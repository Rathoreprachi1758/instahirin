<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CreateProject extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function expertCategories(): HasMany
    {
        return $this->hasMany(ExpertCategory::class);
    }
}
