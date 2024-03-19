<?php

namespace App\Models;

use App\Models\Skill;
use App\Models\Experty;
use App\Models\HireMeApplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    protected $casts = [
        'key_skills' => 'json',
        'posted_date' => 'date',
    ];


    // protected $guarded = [];
    protected $fillable = [
        'title',
        'description',
        'key_skills',
        'status',
        'ctc_currency',
        'min_price',
        'max_price',
        'experience',
        'salary_period',
        'location',
        'work_mode',
        'company',
        'we_offer',
        'prefer_qualification',
        'qualification',
        'responsibilities',
        'availability',
        'user_id',
        'document',
    ];

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Experty::class);
    }

    // public function experties(): BelongsToMany
    // {
    //     return $this->belongsToMany(Experty::class);
    // }

    public function keySkills(): BelongsToMany
    {
        return $this->belongsToMany(Experty::class);
    }

    // public function experties(): BelongsToMany
    // {
    //     return $this->belongsToMany(Experty::class);
    // }

    public function experties(): BelongsToMany
    {
        return $this->belongsToMany(Experty::class);
    }

    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
    public function applicants()
    {
        return $this->belongsTo(HireMeApplication::class, 'job_id');
    }
}
