<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift_master_daily extends Model
{
    use HasFactory;
    protected $fillable = [
        'week_day',
        'shift_code',
        'shift_name',
        'time_zone',
        'Shift_in',
        'Shift_out',
        'Lunch_in',
        'Lunch_out',
        'ded_full_lunch_hrs',
        'extraday_hrs',
        'Send_sms_delay',
        'department_id',
        'user_id',
        'company_id',
    ];
}
