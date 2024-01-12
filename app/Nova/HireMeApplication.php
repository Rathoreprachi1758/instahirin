<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Tag;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use App\Nova\HireAvailabilityData;
use Laravel\Nova\Http\Requests\NovaRequest;

class HireMeApplication extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\HireMeApplication>
     */
    public static $model = \App\Models\HireMeApplication::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

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
                ->options([
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    '11' => '11',
                    '12' => '12',
                    '13' => '13',
                    '14' => '14',
                    '15' => '15',
                    '16' => '16',
                    '17' => '17',
                    '18' => '18',
                    '19' => '19',
                    '20+' => '20+',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Select::make('Experience Month', 'experience_month')
                ->options([
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10',
                    '11' => '11',
                    '12' => '12',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Tag::make('Key Skills', 'keySkills')->showCreateRelationButton()->preload()->displayAsList(),
            Tag::make('Experties', 'expertIn')->showCreateRelationButton()->preload()->displayAsList(),
            Tag::make('Work With Skill', 'alsoWorkWith')->showCreateRelationButton()->preload()->displayAsList(),
            // // Text::make('Also Work With', 'also_work_with')->hideFromIndex(),
            // Text::make('Also Work With', 'also_work_with')->resolveUsing(function ($value) {
            //     if (is_array($value)) {
            //         return implode(',', array_column($value, 'name'));
            //     }
            // }),
            Text::make('Last Company', 'last_company')->hideFromIndex(),
            Text::make('Company Location', 'company_location')->hideFromIndex(),
            Text::make('Currently Working Here', 'currently_working_here')->hideFromIndex(),
            Select::make('Working Since Year', 'working_since_date')
                ->options(['2023' => '2023', '2022' => '2022', '2021' => '2020'])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Select::make('Working Since Month', 'working_since_date2')
                ->options([
                    '1' => 'January',
                    '2' => 'February',
                    '3' => 'March',
                    '4' => 'April',
                    '5' => 'May',
                    '6' => 'June',
                    '7' => 'July',
                    '8' => 'August',
                    '9' => 'September',
                    '10' => 'October',
                    '11' => 'November',
                    '12' => 'December',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Text::make('Annual Salary Currency', 'annual_salary_currency')->hideFromIndex(),
            Text::make('Annual Salary', 'annual_salary')->hideFromIndex(),
            Select::make('Highest Qualification', 'highest_qualification')
                ->options(['Doctorate' => 'Doctorate', 'Masters' => 'Masters', 'Bachelors' => 'Bachelors'])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            // File::make('Document', 'document')
            //     ->disk('public')
            //     ->path('bizionic/images')
            //     ->storeAs(function (Request $request) {
            //         // Customize the filename if needed
            //         return 'document_' . time() . '.' . $request->file('document')->getClientOriginalExtension();
            //     })
            //     ->prunable()
            //     ->help('Upload a zip archive containing documents.'),
            File::make('Document', 'document')
                ->disk('public')
                ->path('bizionic/images')
                ->storeAs(function (Request $request) {
                    // Customize the filename if needed
                    return 'document_' . time() . '.' . $request->file('document')->getClientOriginalExtension();
                })
                ->prunable(),
            Select::make('Employment Role/Type', 'employment_type')->options([
                'Full Time' => 'Full Time', 'Part-Time' => 'Part-Time',
                'Project Base' => 'Project Base',
                'Hourly' => 'Hourly',
                'On-Site' => 'On-Site',
                'Freelancing' => 'Freelancing',
                'Contract' => 'Contract',
                'Shift' => 'Shift',
                'Consulting' => 'Consulting',
                'Volunteer' => 'Volunteer',
                'Internships' => 'Internships'
            ])->displayUsingLabels()->filterable()->hideFromIndex(),
            Boolean::make('Virtual Assistance Call', 'virtual_assistance_call')->trueValue('Yes')->falseValue('No')->hideFromIndex(),

            Select::make('Status', 'status')
                ->options(['New' => 'New', 'In Review' => 'In Reivew', 'Reviewed' => 'Reviewed'])
                ->displayUsingLabels()
                ->filterable(),
            HasMany::make('Availability Data', 'hireAvailabilityData', HireAvailabilityData::class)->hideFromIndex(),

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
