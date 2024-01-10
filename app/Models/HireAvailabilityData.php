<?php

namespace App\Models;

use App\Models\HireMeApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HireAvailabilityData extends Model
{
    use HasFactory;
    protected $table = 'hire_availability_data';

    protected $fillable = ['availability_date', 'availability_time_from', 'availability_time_to', 'availability_time_zone'];

    public function hireMeApplication(): BelongsTo
    {
        return $this->belongsTo(HireMeApplication::class);
    }


    protected $casts = [
        'availability_date' => 'date',
        // ... other casts
    ];
}
