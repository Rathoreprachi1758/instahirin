<?php

namespace App\Nova;

use GMP;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Tag;
use App\Policies\brandpolicy;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use App\Policies\CareerPolicy;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\DateTime;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Http\Requests\NovaRequest;

class Job extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Job>
     */
    public static $model = \App\Models\Job::class;

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
    public static $search = ['id'];

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
            Text::make('Title', 'title')->rules('required', 'min:6,max:255'),
            Text::make('Location', 'location'),
            // Text::make('CTC', 'ctc'),
            Select::make('CTC Currency', 'ctc_currency')
                ->options([
                    'USD' => 'USD',
                    'INR' => 'INR',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Text::make('Minimum Price', 'min_price'),
            Text::make('Maximum Price', 'max_price'),
            Select::make('Salary Period', 'salary_period')
                ->options([
                    'Daily' => 'Daily',
                    'Hourly' => 'Hourly',
                    'Bi-Weekly' => 'Bi-Weekly',
                    'Weekly' => 'Weekly',
                    'Monthly' => 'Monthly',
                    'Yearly' => 'Yearly',
                    'Commission' => 'Commission',
                    'Contractual' => 'Contractual',
                    'Project' => 'Project',
                    'Lump Sum Payment' => 'Lump Sum Payment',
                    'Milestone-Based Payments' => 'Milestone-Based Payments',
                    'Retainer Fee' => 'Retainer Fee',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Select::make('Work Mode', 'work_mode')
                ->options([
                    'Full Time' => 'Full Time',
                    'Part Time' => 'Part Time',
                    'Daily Bases' => 'Daily Bases',
                    'Weekly' => 'Weekly',
                    'Period' => 'Period',
                    'Freelance' => 'Freelance',
                    'Project Base' => 'Project Base',
                    'Contract Base' => 'Contract Base',
                    'Hourly' => 'Hourly',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Text::make('Company', 'company'),
            // Text::make('Experience', 'experience'),
            Select::make('Experience', 'experience')
                ->options([
                    '1+ Year of Experience' => '1+ Year of Experience',
                    '2+ Year of Experience' => '2+ Year of Experience',
                    '3+ Year of Experience' => '3+ Year of Experience',
                    '4+ Year of Experience' => '4+ Year of Experience',
                    '5+ Year of Experience' => '5+ Year of Experience',
                    '6+ Year of Experience' => '6+ Year of Experience',
                    '7+ Year of Experience' => '7+ Year of Experience',
                    '8+ Year of Experience' => '8+ Year of Experience',
                    '9+ Year of Experience' => '9+ Year of Experience',
                    '10+ Year of Experience' => '10+ Year of Experience',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            // Text::make('Availability', 'availability'),
            Select::make('Employment Type', 'availability')
                ->options([
                    'Full Time' => 'Full Time',
                    'Part-Time' => 'Part-Time',
                    'Project Base' => 'Project Base',
                    'Hourly' => 'Hourly',
                    'On-Site' => 'On-Site',
                    'Freelancing' => 'Freelancing',
                    'Contract' => 'Contract',
                    'Shift' => 'Shift',
                    'Consulting' => 'Consulting',
                    'Volunteer' => 'Volunteer',
                    'Internships' => 'Internships',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            Trix::make('Job Description', 'description'),
            // Trix::make('Key Skills', 'responsibilities'),
            Tag::make('Key Skills', 'keySkills')->showCreateRelationButton()->preload()->displayAsList(),
            Select::make('Educational Qualification', 'qualification')
                ->options([
                    'Any' => 'Any',
                    'Graduate' => 'Graduate',
                    'Postgraduate' => 'Postgraduate',
                    'Doctorate' => 'Doctorate',
                ])
                ->displayUsingLabels()
                ->filterable()
                ->hideFromIndex(),
            // Trix::make('Job Filling Duration', 'prefer_qualification'),
            Select::make('Hiring Timeline', 'prefer_qualification')
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
            Trix::make('What We Offer', 'we_offer'),
            // posted date field
            Date::make('Posted Date', 'posted_date')->hideFromIndex()->rules('required'),
            Select::make('Status', 'status')
                ->options(['Open' => 'Open', 'Closed' => 'Closed'])
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
    //     $userRoles = auth()->user()->roles;

    // if ($userRoles === 'admin') {
    //     job::authorizedToViewAny($request);
    //     job::authorizedToView($request);
    // } else {
    //     return response('Unauthorized', 403);
    // }
    // public function actions(NovaRequest $request)
    //     {
    //         $userRoles = auth()->user()->roles;

    //         if ($userRoles === 'admin') {
    //             return [
    //                 job::authorizedToViewAny($request),
    //                 job::authorizedToView($request),
    //             ];
    //         } else {
    //             return response('Unauthorized', 403);
    //         }
    //     }
    // public static function authorizedToViewAny($request)
    // {
    //     $user = auth()->user();
    //     // // dd($user->roles);
    //     // if ($user->roles === 'admin') {
    //     //     // dd($user);
    //     //     dd("in admin");
    //     //     return false;
    //     // }

    //     // if ($user->roles === 'user') {
    //     //     dd("in user");
    //     //     return auth()->check() && $user->can('viewAny', brandpolicy::class);

    //     // }
    // }

    public function authorizedToView($request)
    {
        $user = $request->user();
        if ($user->roles === 'admin') {
            return $user->can('view', $this);
        } else {
            return true;
        }
    }
}
