<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    /**
     * Define the relationship between an employee and their department.
     *
     * @return BelongsTo
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
      /**
     * Define the relationship between an employee and their department.
     *
     * @return BelongsTo
     */
    
    public function designation()
    {
        return $this->belongsTo(designation::class);
    }
    /**
     * @return HasMany
     */
    public function employeeLogTimes(): HasMany
    {
        return $this->hasMany(EmployeeLogTime::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
