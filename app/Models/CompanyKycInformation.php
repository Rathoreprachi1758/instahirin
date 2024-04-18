<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyKycInformation extends Model
{
    use HasFactory;
    protected $casts = [
        'date_incorporation' => 'date',
        'dob'  => 'date',
        'date_id_passport'  => 'date',
        'Date_incorporation' => 'date'
        // Add other date attributes here
    ];
}
