<?php

namespace App\Models;

use App\Models\PlanPricing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlanPricingCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'plan_categories';

    public function plans()
    {
        return $this->hasMany(PlanPricing::class, 'plan_category_id');
    }


    public function hasPlans(): HasMany
    {
        return $this->hasMany(PlanPricing::class, 'plan_category_id');
    }
}
