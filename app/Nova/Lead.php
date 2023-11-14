<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Select;

class Lead extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Lead>
     */
    public static $model = \App\Models\Lead::class;

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
            Text::make('Email','email')->rules('required','min:6,max:255'),
            Text::make('Phone','phone'),
            Text::make('Hiring Type','hiring_type'),
            Text::make('Budget','budget'),
            Select::make('Lead Type','lead_type')->options(['Consultation'=>'Consultation','Hire'=>'Hire','Other'=>'Other'])->displayUsingLabels()->filterable(),
            Select::make('Status','status')->options(['New'=>'New','In Review'=>'In Reivew','Reviewed'=>'Reviewed'])->displayUsingLabels()->filterable(),
            File::make('Document','document'),
            Trix::make('Details','details'),
            
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

    //
    
}
