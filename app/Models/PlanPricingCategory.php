<?php

namespace App\Models;

use App\Models\MarketingPlans;
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
        return $this->hasMany(MarketingPlans::class, 'plan_category_id');
    }


    public function hasPlans(): HasMany
    {
        return $this->hasMany(MarketingPlans::class, 'plan_category_id');
    }

    //
    public function marketingPlans(): HasMany
    {
        return $this->hasMany(MarketingPlans::class, 'plan_category_id');
    }
}
