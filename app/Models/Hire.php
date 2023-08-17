<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    use HasFactory;
    protected $table = 'hire';

    protected $fillable = [
        'name',
        'company',
        'email',
        'phone',
        'message'
    ];
}
