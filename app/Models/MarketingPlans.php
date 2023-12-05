<?php

namespace App\Models;

use App\Models\PlanPricingFeature;
use App\Models\PlanPricingCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MarketingPlans extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'plans';


    public function planCategory(): BelongsTo
    {
        return $this->belongsTo(PlanPricingCategory::class, 'plan_category_id');
    }

    public function planFeature(): HasMany
    {
        return $this->hasMany(PlanPricingFeature::class, 'plan_id');
    }



    public function category()
    {
        return $this->belongsTo(PlanPricingCategory::class, 'plan_category_id');
    }

    public function features()
    {
        return $this->hasMany(PlanPricingFeature::class, 'plan_id');
    }

    ///
    public function planPricingCategory(): BelongsTo
    {
        return $this->belongsTo(PlanPricingCategory::class, 'plan_category_id');
    }

}
