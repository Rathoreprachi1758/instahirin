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
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Models\Role;
use Illuminate\Support\Facades\File;

class NovaResourceList extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\NovaResourceList>
     */
    public static $model = \App\Models\novaresourcelist::class;

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
        $resourcePath = app_path('Nova');
        $resources = collect(File::files($resourcePath))
            ->map(function ($file) {
                $class = '\\App\\Nova\\' . pathinfo($file)['filename'];
                return class_exists($class) ?  pathinfo($file)['filename'] : null;
            })
            ->filter()
            ->toArray();
            \Log::info('$resources========$$$$$$$$4=============');
            \Log::info($resources);
        return [
            ID::make()->sortable(),
            Gravatar::make()->maxWidth(30),
            // Text::make('Resource Name','resource_name')->rules('required'),
            Select::make('Resource Name','resource_name')->options(array_combine($resources, $resources)),
            Select::make('Authorized To','autherized_to')->options(array_combine(Role::all()->pluck('role')->unique()->toArray(), Role::all()->pluck('role')->unique()->toArray())),
            
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
