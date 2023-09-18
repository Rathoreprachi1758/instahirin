<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstaHirinOnboard extends Model
{
    use HasFactory;
    protected $table = 'insta_hirin_onboards';

    //Casts of the model dates
    protected $casts = [
        'availability_date' => 'date',
        'key_skills' => 'json',
        'expert_in' => 'json',
        'also_work_with' => 'json',
    ];
}
