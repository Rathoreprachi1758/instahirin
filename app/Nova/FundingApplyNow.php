<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class FundingApplyNow extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\FundingApplyNow>
     */
    public static $model = \App\Models\FundingApplyNow::class;

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
        'id', 'name'
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
            Text::make('First Name', 'first_name')->rules('required', 'min:3,max:255'),
            Text::make('Last Name', 'last_name')->rules('required', 'min:3,max:255'),
            Text::make('Title', 'title')->rules('required', 'min:3,max:255'),
            Text::make('Email', 'email')->rules('required', 'min:3,max:255'),
            Text::make('Company', 'company')->rules('required', 'min:3,max:255'),
            Text::make('HQ', 'hq')->rules('required', 'min:3,max:255'),
            Text::make('Website', 'website')->rules('required', 'min:3,max:255'),
            Text::make('LinkedIn', 'linkedin')->rules('required', 'min:3,max:255'),
            Text::make('Instagram', 'instagram')->rules('required', 'min:3,max:255'),
            Text::make('Twitter', 'twitter')->rules('required', 'min:3,max:255'),
            //Text::make('Raising capital', 'raising_capital')->rules('required', 'min:3,max:255'),
            Select::make('Raising capital', 'raising_capital')
                ->options(['Yes' => 'Yes', 'No' => 'No'])
                ->displayUsingLabels()->filterable()->hideFromIndex(),
            //Text::make('Raised venture capital', 'raised_venture_capital')->rules('required', 'min:3,max:255'),
            Select::make('Raised venture capital', 'raised_venture_capital')
                ->options(['Yes' => 'Yes', 'No' => 'No'])
                ->displayUsingLabels()->filterable()->hideFromIndex(),
            //Text::make('Raised amount', 'raised_amount')->rules('required', 'min:3,max:255'),
            Select::make('Raised amount', 'raised_amount')->options([
                '$0 - $100,000' => '$0 - $100,000',
                '$100,000 - $250,000' => '$100,000 - $250,000',
                '$250,000 - $500,000' => '$250,000 - $500,000',
                '$500,000 - $1,000,000' => '$500,000 - $1,000,000',
                '$1,000,000 - $10,000,000' => '$1,000,000 - $10,000,000',
                '$10,000,000+' => '$10,000,000+',
            ])->displayUsingLabels()->filterable()->hideFromIndex(),
            //Text::make('Valuation', 'valuation')->rules('required', 'min:3,max:255'),
            Select::make('Valuation', 'valuation')->options([
                '$0 - $100,000' => '$0 - $100,000',
                '$100,000 - $250,000' => '$100,000 - $250,000',
                '$250,000 - $500,000' => '$250,000 - $500,000',
                '$500,000 - $1,000,000' => '$500,000 - $1,000,000',
                '$1,000,000 - $10,000,000' => '$1,000,000 - $10,000,000',
                '$10,000,000+' => '$10,000,000+',
            ])->displayUsingLabels()->filterable()->hideFromIndex(),
            Text::make('Enabling technology', 'enabling_technology')->rules('required', 'min:3,max:255'),
            Text::make('Industry', 'industry')->rules('required', 'min:3,max:255'),
            // Text::make('challenges'),
            Trix::make('Challenges Solving', 'challenges')->rules('required', 'min:6,max:255'),
            Text::make('Core buyer', 'core_buyer')->rules('required', 'min:3,max:255'),
            Text::make('Investors', 'investors')->rules('required', 'min:3,max:255'),
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
