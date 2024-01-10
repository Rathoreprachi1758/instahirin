<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Timezone;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class HireAvailabilityData extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\HireAvailabilityData>
     */
    public static $model = \App\Models\HireAvailabilityData::class;

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

    public static function label()
    {
        return __('Hire Availability Data');
    }

    public static function uriKey()
    {
        return 'hire-availability-data';
    }

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
            Date::make('Availability Date', 'availability_date')->sortable(),
            // Time::make('Time From', 'availability_time_from')->sortable(),
            Text::make('Time From', 'availability_time_from')->withMeta(['extraAttributes' => ['type' => 'time']]),
            //Text::make('Time To', 'availability_time_to')->sortable(),
            Text::make('Time To', 'availability_time_to')->withMeta(['extraAttributes' => ['type' => 'time']]),
            Timezone::make('Time Zone', 'availability_time_zone')->sortable(),
            BelongsTo::make('Hire Me Application')->sortable()->showOnPreview(),
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
