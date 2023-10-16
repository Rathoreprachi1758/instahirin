<?php

namespace App\Models;

use App\Models\AvailabilityData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HireRequest extends Model
{
    use HasFactory;

    protected $fillable = ['expert', 'country_code'];

    //Casts of the model dates
    protected $casts = [
        'availability_date' => 'date',
        'from_date' => 'date',
        'to_date' => 'date'
    ];


    public function expert(): BelongsTo
    {
        return $this->belongsTo(Expert::class);
    }

    public function availabilityData(): HasMany
    {
        return $this->hasMany(AvailabilityData::class);
    }
}
