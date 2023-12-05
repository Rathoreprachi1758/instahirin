<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BooleanGroup;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;
use Illuminate\Validation\Rules;
use Laravel\Nova\Fields\Gravatar;
use App\Models\Role;
use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Support\Facades\File;
use \App\Models\PlanPricing;
use \App\Models\PlanPricingFeature;
use \App\Models\PlanPricingCategory;


class MarketingLead extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\MarketingLead>
     */
    public static $model = \App\Models\MarketingLead::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name','name')->rules('required','min:6,max:255'),
            Text::make('Phone','phone')->rules('required'),
            Text::make('Email','email')->rules('required','unique:marketing_plan_leads'),
            Text::make('company','company')->hideFromIndex(),
            Text::make('Details','message')->hideFromIndex(),
            Select::make('Plan Category ','plan_category_id')->options(array_combine(range(1, count(PlanPricingCategory::all()->pluck('title')->unique()->toArray())), PlanPricingCategory::all()->pluck('title')->unique()->toArray())),
            Select::make('Plan ','plan_id')->options(array_combine(range(1, count(PlanPricing::all()->pluck('title')->unique()->toArray())), PlanPricing::all()->pluck('title')->unique()->toArray())),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
