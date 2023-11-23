<?php

namespace App\Models;

use App\Models\PlanPricing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanPricingFeature extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'plan_features';

    public function planFeature(): BelongsTo
    {
        return $this->belongsTo(PlanPricing::class, 'plan_id');
    }

    public function plan()
    {
        return $this->belongsTo(PlanPricing::class, 'plan_id');
    }
}
