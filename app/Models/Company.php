<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    /**
     * Define the relationship between a company and its departments.
     *
     * @return HasMany
     */
    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
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
}
