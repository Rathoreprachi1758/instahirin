<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLogTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'punch_in',
        'punch_out',
        'employee_id',
        'user_id',
        'ip_address',
        'date',
        'punch'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
