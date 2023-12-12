<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experty extends Model
{
    use HasFactory;
    protected $table = 'experties';

    protected $guarded = [];

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
