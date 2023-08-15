<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class HireRequest extends Model
{
    use HasFactory;

    //Casts of the model dates
    protected $casts = [
        'availability_date' => 'date',
        'from_date' => 'date',
        'to_date' => 'date'
    ];


    public function expert():BelongsTo{
        return $this->belongsTo(Expert::class);
    }

}
