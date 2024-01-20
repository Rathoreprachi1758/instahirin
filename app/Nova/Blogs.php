<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Blogs extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Blogs>
     */
    public static $model = \App\Models\Blogs::class;

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
            Text::make('Blog Title', 'title')->rules('required', 'min:6,max:255'),
            Image::make('Blog Image', 'image')->disableDownload()->nullable(),
            Avatar::make('Author Avatar', 'author_avatar')->disableDownload()->nullable(),
            // Gravatar::make('Author Avatar', 'author_avatar')->maxWidth(30),
            Text::make('Author Name', 'author_name')->rules('required'),
            Trix::make('Blog Content', 'content')
                ->rules('required')
                ->withFiles('public'),


            // DateTime::make('Published Date')->displayUsing(fn ($value) => $value->diffForHumans()),
            DateTime::make('Published Date')
                ->rules('required')
                ->displayUsing(function ($value) {
                    return optional($value)->diffForHumans();
                }),


            // Date::make('Published Date', 'published_date'),
            DateTime::make('Published Date')->displayUsing(fn ($value) => $value->diffForHumans()),
            // Date::make('Published Date', 'published_date')->resolveUsing(function ($value) {
            //     return $value ? \Carbon\Carbon::parse($value)->format('F d, Y') : now()->format('F d, Y');
            // })->nullable(),
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
