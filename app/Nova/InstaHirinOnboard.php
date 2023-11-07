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

class InstaHirinOnboard extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\InstaHirinOnboard>
     */
    public static $model = \App\Models\InstaHirinOnboard::class;

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
    public static $search = ['id', 'name'];

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
            Text::make('Full Name', 'name')->rules('required', 'min:6,max:255'),
            Text::make('Contact Details', 'contact_details')->rules('required', 'min:6,max:255'),
            Text::make('Email', 'email')
                ->rules('required', 'min:6,max:255')
                ->hideFromIndex(),
            Text::make('Current Location', 'current_location')
                ->rules('required', 'min:6,max:255')
                ->hideFromIndex(),
            Text::make('Skills Description', 'skills_description')->hideFromIndex(),
            Text::make('Current Title', 'current_title')->hideFromIndex(),
            Select::make('Experience Year', 'experience_year')
                ->options(['1' => '1', '2' => '2', '3' => '3'])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Select::make('Experience Month', 'experience_month')
                ->options(['1' => '1', '2' => '2', '3' => '3'])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Select::make('Highest Qualification', 'highest_qualification')
                ->options(['Doctorate' => 'Doctorate', 'Masters' => 'Masters', 'Bachelors' => 'Bachelors'])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            // Text::make('Key Skills', 'key_skills')->rules('nullable'),
            Text::make('Key Skills', 'key_skills')->resolveUsing(function ($value) {
                if (is_array($value)) {
                    return implode(', ', array_column($value, 'name'));
                }
                return $value;
            }),
            // Text::make('Expert In', 'expert_in')->hideFromIndex(),
            Text::make('Expert In', 'expert_in')->resolveUsing(function ($value) {
                if (is_array($value)) {
                    return implode(', ', array_column($value, 'name'));
                }
                return $value;
            }),
            // Text::make('Also Work With', 'also_work_with')->hideFromIndex(),
            Text::make('Also Work With', 'also_work_with')->resolveUsing(function ($value) {
                if (is_array($value)) {
                    return implode(',', array_column($value, 'name'));
                }
            }),
            Text::make('Last Company', 'last_company')->hideFromIndex(),
            Text::make('Company Location', 'company_location')->hideFromIndex(),
            Text::make('Currently Working Here', 'currently_working_here')->hideFromIndex(),
            Select::make('Working Since Year', 'working_since_date')
                ->options(['2023' => '2023', '2022' => '2022', '2021' => '2021'])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Select::make('Working Since Month', 'working_since_date2')
                ->options(['1' => 'January', '2' => 'February', '3' => 'March'])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Text::make('Annual Salary Currency', 'annual_salary_currency')->hideFromIndex(),
            Text::make('Annual Salary', 'annual_salary')->hideFromIndex(),
            Text::make('Highest Qualification', 'highest_qualification')->hideFromIndex(),
            Text::make('Notice Period', 'notice_period')->hideFromIndex(),
            Boolean::make('Availability', 'availability')
                ->trueValue('Yes')
                ->falseValue('No')
                ->hideFromIndex(),
            Date::make('Availability Date', 'availability_date')
                ->rules('nullable', 'date_format:Y-m-d')
                ->hideFromIndex(),
            Text::make('Availability Time From', 'availability_time_from')->hideFromIndex(),
            Text::make('Availability Time To', 'availability_time_to')->hideFromIndex(),
            Text::make('Payment Option', 'payment_option')->hideFromIndex(),
            Text::make('Sub Payment Currency', 'sub_payment_option')->hideFromIndex(),
            Text::make('Monthly Rate', 'monthly_rate')->hideFromIndex(),
            Text::make('Hourly Rate', 'hourly_rate')->hideFromIndex(),
            Text::make('Project Rate', 'project_rate')->hideFromIndex(),
            Text::make('Resume Headline', 'resume_headline')->hideFromIndex(),
            File::make('Document', 'document')
                ->disk('public')
                ->path('bizionic/images')
                ->storeAs(function (Request $request) {
                    // Customize the filename if needed
                    return 'document_' . time() . '.' . $request->file('document')->getClientOriginalExtension();
                })
                ->prunable()
                ->help('Upload a zip archive containing documents.'),

            Select::make('Status', 'status')
                ->options(['New' => 'New', 'In Review' => 'In Reivew', 'Reviewed' => 'Reviewed'])
                ->displayUsingLabels()
                ->filterable(),
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
