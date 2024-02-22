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

    protected $fillable = [
        'user_id',
        'document',
        'contact_details',
        'name',
        'email',
        'Resume_update_date',
        'resume_headline',
        'discription',
        'current_title',
        'working_since_date',
        'working_since_date2',
        'last_company',
        'availability',
        'skills_description',
        'notice_period',
        'highest_qualification',
        'collage_name',
        'education_mode',
        'from_date',
        'to_date',
        'secondary_qualification',
        'course_name2',
        'college_name2',
        'work_mode2',
        'from_date2',
        'to_date2',
        'experience_year',
        'Home_town',
        'work_permit',
        'current_location',
        'availability',
        'dob',
        'nationality',
    ];
}
