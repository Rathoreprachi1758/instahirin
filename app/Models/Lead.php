<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $table = 'leads';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'hiring_type',
        'budget',
        'lead_type',
        'details',
        'document',
        'status'
    ];
}
