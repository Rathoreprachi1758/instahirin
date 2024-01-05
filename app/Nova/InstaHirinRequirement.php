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
use Laravel\Nova\Http\Requests\NovaRequest;

class InstaHirinRequirement extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\InstaHirinRequirement>
     */
    public static $model = \App\Models\InstaHirinRequirement::class;

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
            Text::make('Position Title', 'position_title')->rules('required', 'min:6,max:255'),
            Text::make('Work Mode', 'work_mode')->rules('required', 'min:6,max:255'),
            Text::make('Project Description', 'project_description')->rules('required', 'min:6,max:255')->hideFromIndex(),
            // Text::make('Key Skills', 'key_skills')->rules('required', 'min:6,max:255')->hideFromIndex(),

            // Text::make('Key Skills', 'key_skills')->resolveUsing(function ($value) {
            //     if (is_array($value)) {
            //         return implode(', ', array_column($value, 'name'));
            //     }
            //     return $value;
            // }),
            Tag::make('Key Skills', 'experty')->showCreateRelationButton()->preload()->displayAsList(),
            // Tag::make('Skills', 'skills')->showCreateRelationButton()->preload()->displayAsList(),
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
            Select::make('Salary Currency Montly/Project', 'salary_currency_monthly_project')->options(['USD' => 'USD', 'INR' => 'INR'])->displayUsingLabels()->filterable()->hideFromIndex(),
            Text::make('Minimum Salary Monthly/Project', 'min_salary_monthly_project')->hideFromIndex(),
            Text::make('Maximum Salary Monthly/Project', 'max_salary_monthly_project')->hideFromIndex(),
            Select::make('Salary Currency Yearly', 'salary_currency_yearly')->options(['USD' => 'USD', 'INR' => 'INR'])->displayUsingLabels()->filterable()->hideFromIndex(),
            Text::make('Minimum Salary Yearly', 'min_salary_yearly')->hideFromIndex(),
            Text::make('Maximum Salary Yearly', 'max_salary_yearly')->hideFromIndex(),
            Select::make('Salary Currency Hourly', 'salary_currency_hourly')->options(['USD' => 'USD', 'INR' => 'INR'])->displayUsingLabels()->filterable()->hideFromIndex(),
            Text::make('Minimum Salary Hourly', 'min_salary_hourly')->hideFromIndex(),
            Text::make('Maximum Salary Hourly', 'max_salary_hourly')->hideFromIndex(),

            Text::make('Location', 'location')->hideFromIndex(),
            Select::make('Education Qualification', 'education_qualification')->options(['Post Graduation' => 'Post Graduation', 'Graduation' => 'Graduation', 'Doctorate' => 'Doctorate'])->displayUsingLabels()->filterable()->hideFromIndex(),
            Text::make('Company Name', 'company_name')->rules('nullable'),
            Text::make('Company Website', 'company_website')->hideFromIndex(),
            Text::make('Contact Person', 'contact_person')->hideFromIndex(),
            Text::make('Email Address', 'email')->rules('nullable')->hideFromIndex(),
            Text::make('Contact # Country Code', 'contact_no_country_code')->rules('nullable')->hideFromIndex(),
            Text::make('Contact #', 'contact_no')->rules('nullable')->hideFromIndex(),
            Text::make('Company Details', 'company_details')->hideFromIndex(),
            // Text::make('Company Address', 'company_address')->hideFromIndex(),
            Select::make('Hiring Timeline', 'company_address')
                ->options([
                    'Immediate' => 'Immediate',
                    'Within One Month' => 'Within One Month',
                    'Within 60 Days' => 'Within 60 Days',
                    'Within 90 Days' => 'Within 90 Days',
                    'Now Hiring' => 'Now Hiring',
                    'Immediate Vacancy' => 'Immediate Vacancy',
                    'Urgently Required' => 'Urgently Required',
                    'Fast-Track Hiring' => 'Fast-Track Hiring',
                    'Direct Recruitment' => 'Direct Recruitment',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            // File::make('Document', 'document')->hideFromIndex(),
            File::make('Document', 'document')
                ->disk('public')
                ->path('bizionic/images')
                ->storeAs(function (Request $request) {
                    // Customize the filename if needed
                    return 'document_' . time() . '.' . $request->file('document')->getClientOriginalExtension();
                })
                ->prunable(),
            Boolean::make('Notify about AI Recommended Applicants', 'notify_ai_applicants')->trueValue('Yes')->falseValue('No')->hideFromIndex(),
            Select::make('Status', 'status')->options(['New' => 'New', 'In Review' => 'In Reivew', 'Reviewed' => 'Reviewed'])->displayUsingLabels()->filterable(),
            // \Laravel\Nova\Fields\Text::make('Post a Job', function () {
            //     $url = route('nova.post-to-jobs', $this->resourceId);

            //     return '<a href="' . $url . '" class="cursor-pointer ml-2 text-70 underline">Post a Job</a>';
            // })->asHtml()->hideWhenCreating()->hideWhenUpdating(),

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
        return [
            new Actions\PostToJobs,
        ];
    }

    // public function fieldsForIndex(NovaRequest $request)
    // {
    //     return [
    //         // Define the key_skills field for the index page
    //         Text::make('Key Skills', 'key_skills')
    //             ->resolveUsing(function ($value) {
    //                 if (is_array($value)) {
    //                     return implode(', ', array_column($value, 'name'));
    //                 }
    //                 return $value;
    //             }),
    //     ];
    // }
}
