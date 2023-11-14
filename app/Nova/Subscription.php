<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;

class Subscription extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Subscription>
     */
    public static $model = \App\Models\Subscription::class;

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
            Boolean::make('Opted Out','opted_out')->filterable(),           
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
       // public static function authorizedToViewAny($request)
    // {

    //     return auth()->check() && auth()->user()->can('viewAny', brandpolicy::class);

    // }

    // public function authorizedToView($request)
    // {
    //     return $request->user()->can('view', $this);
    // }
}
