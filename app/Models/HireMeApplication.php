<?php

namespace App\Models;

use App\Models\Experty;
use App\Models\HireAvailabilityData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HireMeApplication extends Model
{
    use HasFactory;

    protected $table = 'hire_me_application';

    protected $guarded = ['document'];
    //Casts of the model dates
    protected $casts = [
        'availability_date' => 'date',
        'document' => 'string',
        // 'from_date' => 'date',
        // 'to_date' => 'date',
        // 'expert_id' => 'integer',

    ];

    public function hireAvailabilityData(): HasMany
    {
        return $this->hasMany(HireAvailabilityData::class);
    }

    public function keySkills(): BelongsToMany
    {
        return $this->belongsToMany(Experty::class, 'key_skills_hire_application', 'hire_application_id', 'experty_id');
    }

    public function expertIn()
    {
        return $this->belongsToMany(Experty::class, 'expert_in_hire_application', 'hire_application_id', 'experty_id');
    }

    public function alsoWorkWith()
    {
        return $this->belongsToMany(Experty::class, 'work_with_hire_application', 'hire_application_id', 'experty_id');
    }
}
