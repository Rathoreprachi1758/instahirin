<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Policies\CareerPolicy;

class Career extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Career>
     */
    public static $model = \App\Models\Career::class;

    protected $policy = \App\Policies\CareerPolicy::class;

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
        // $this->authorizeTo(new CareerPolicy);
        return [
            ID::make()->sortable(),
            Text::make('Name','name')->rules('required','min:6,max:255'),
            Text::make('Email','email')->rules('required','min:6,max:255'),
            Text::make('Linkedin Profile','linkedin_profile'),
            Select::make('Status','status')->options(['New'=>'New','In Review'=>'In Reivew','Reviewed'=>'Reviewed'])->displayUsingLabels()->filterable(),
            File::make('Document','document'),
            Trix::make('Note','note'),
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
