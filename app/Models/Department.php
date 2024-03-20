<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    /**
     * Define the relationship between a department and its company.
     *
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Define the relationship between a department and its employees.
     *
     * @return HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    /**
     * @return HasMany
     */
    public function leaveRequest(): HasMany
    {
        return $this->hasMany(LeaveRequest::class);
    }

    /**
     * @return HasMany
     */
    public function lateRequest(): HasMany
    {
        return $this->hasMany(LateRequest::class);
    }

    public function employeeTimeLogs(): HasMany
    {
        return $this->hasMany(EmployeeLogTime::class);
    }
}

