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
use \App\Models\MarketingPlans;
use \App\Models\PlanPricingFeature;
use \App\Models\PlanPricingCategory;
use Laravel\Nova\Fields\BelongsTo;

class MarketingPlanLeads extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\MarketingPlanLeads>
     */
    public static $model = \App\Models\MarketingPlanLeads::class;

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
            Text::make('Name', 'name')->rules('required', 'min:6,max:255'),
            Text::make('Phone', 'phone')->rules('required'),
            Text::make('Email', 'email')->rules('required', 'unique:marketing_plan_leads'),
            Text::make('company', 'company')->hideFromIndex(),
            Text::make('Details', 'message')->hideFromIndex(),
            Select::make('Plan Category ','plan_categories')->options(array_combine(PlanPricingCategory::all()->pluck('title')->unique()->toArray(), PlanPricingCategory::all()->pluck('title')->unique()->toArray())),
            Select::make('Marketing Plan ', 'selected_plan')->options(array_combine(MarketingPlans::all()->pluck('title')->unique()->toArray(), MarketingPlans::all()->pluck('title')->unique()->toArray())),
            ///
            // Select::make('Plan Category', 'plan_category_id')
            //     ->options(
            //         PlanPricingCategory::all()->pluck('title', 'id')->toArray()
            //     ),
              
            // Select::make('Marketing Plan', 'plan_id')
            //     ->options(
            //         MarketingPlans::all()->pluck('title', 'id')->toArray()
            //     ),
            //
            // BelongsTo::make('Marketing Plans', 'marketingPlans', MarketingPlans::class)->display('title')->noPeeking()->filterable()->nullable(),
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
