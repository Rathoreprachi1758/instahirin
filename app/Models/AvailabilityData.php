<?php

namespace App\Models;

use App\Models\HireRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AvailabilityData extends Model
{
    use HasFactory;
    protected $table = 'availability_data';
    protected $fillable = ['availability_date', 'availability_time_from', 'availability_time_to', 'availability_time_zone'];
    //protected $primaryKey = 'id';

    public function hireRequest(): BelongsTo
    {
        return $this->belongsTo(HireRequest::class);
    }
    // public function hireRequest(): BelongsTo
    // {
    //     return $this->belongsTo(HireRequest::class, 'hire_request_id');
    // }


    protected $casts = [
        'availability_date' => 'date',
        // 'availability_time_from' => 'time',
        // 'availability_time_to' => 'time',
        // 'availability_time_zone' => 'string',
    ];
}
