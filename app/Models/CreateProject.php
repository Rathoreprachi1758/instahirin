<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class CreateProject extends Model
{
    use HasFactory;
    protected $table = 'create_projects';

    public function expertCategories()
    {
        return $this->belongsTo(ExpertCategory::class,'expert_category_id');
    }
}
