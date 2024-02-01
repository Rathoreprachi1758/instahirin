<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BooleanGroup;

class ScheduledInterview extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ScheduledInterview>
     */
    public static $model = \App\Models\ScheduledInterview::class;

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
            Text::make('Candidate Name','name'),
            Text::make('Email', 'email')->rules('required'),
            Text::make('Experience', 'experience_year')->rules('required'),
            Text::make('Meeting Link','Meeting_link')->rules('required'),
            Text::make('Interviewer', 'interviewr')->rules('required'),
            Text::make('Interview Co-ordinator', 'interview_co_ordinator')->rules('required'),
            Text::make('Current Location', 'current_location'),
            Text::make('Current title', 'current_title'),
            Text::make('Annual Salary','annual_salary'),
            Text::make('Availability', 'availability')->rules('required'),
            Text::make('Notice Period', 'notice_period'),
            Text::make('Contact Details', 'contact_details'),
            Text::make('Highest Qualification', 'highest_qualification'),
            Select::make('Status', 'status')->options(array_combine(['hired','Reject','On Hold'],['Hired','Reject','On Hold']))->rules('required'),
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
