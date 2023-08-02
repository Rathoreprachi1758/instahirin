<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireRequest extends Model
{
    use HasFactory;

    //Casts of the model dates
    protected $casts = [
        'availability_date' => 'date',
        'from_date' => 'date',
        'to_date' => 'date'
    ];
}
