<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;

class HireRequest extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\HireRequest>
     */
    public static $model = \App\Models\HireRequest::class;

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
        'id', 'title'
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
            BelongsTo::make('Expert','expert')->noPeeking()->filterable()->nullable(),
            Text::make('Name','name')->rules('required','min:6,max:255'),
            Text::make('Email','email')->rules('required','min:6,max:255'),
            Text::make('Phone','phone')->rules('required','min:6,max:255'),
            Text::make('Company','company')->rules('required','min:6,max:255'),
            Trix::make('Details','message')->rules('required','min:6,max:255'),
            File::make('Document','document')->hideFromIndex(),
            Text::make('Website','website')->hideFromIndex(),
            Text::make('Source','source')->filterable()->nullable(),
            Text::make('Address','address')->hideFromIndex(),
            Text::make('Company','company')->rules('required','min:6,max:255')->hideFromIndex(),
            Trix::make('Company Info','company_info')->hideFromIndex(),
            Select::make('Hiring Type','hiring_type')->options(['Full Time'=>'Full Time','Part Time'=>'Part Time','Daily'=>'Daily','Weekly'=>'Weekly','Period'=>'Period'])->displayUsingLabels()->filterable()->hideFromIndex(),
            Select::make('Priority','priority')->options(['normal'=>'Normal','insta'=>'Insta'])->displayUsingLabels()->filterable(),
            Date::make('From Date','from_date')->rules('nullable', 'date_format:Y-m-d')->hideFromIndex(),
            Date::make('To Date','to_date')->rules('nullable', 'date_format:Y-m-d')->hideFromIndex(),
            Text::make('From Time','from_time')->hideFromIndex(),
            Text::make('To Time','to_time')->hideFromIndex(),
            Boolean::make('Virtual Assistance Call','virtual_assistance_call')->trueValue('Yes')->falseValue('No')->hideFromIndex(),
            Date::make('Availability Date','availability_date')->rules('nullable', 'date_format:Y-m-d')->hideFromIndex(),
            Text::make('Availability Time From','availability_time_from')->hideFromIndex(),
            Text::make('Availability Time To','availability_time_to')->hideFromIndex(),

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
