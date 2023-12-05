<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\DateTime;
use Illuminate\Support\Facades\Gate;
use App\Policies\brandpolicy;
use App\Policies\CareerPolicy;

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
            Text::make('Title', 'title')->rules('required', 'min:6,max:255'),
            Text::make('Location', 'location'),
            Text::make('Work Mode', 'work_mode'),
            Text::make('Company', 'company'),
            Text::make('Experience', 'experience'),
            Text::make('Availability', 'availability'),
            Trix::make('Job Description', 'description'),
            Trix::make('Key Responsibilities', 'responsibilities'),
            Trix::make('Qualification', 'qualification'),
            Trix::make('Preferred Qualification', 'prefer_qualification'),
            Trix::make('What We Offer', 'we_offer'),
            Select::make('Status', 'status')->options(['Open' => 'Open', 'Closed' => 'Closed'])->displayUsingLabels()->filterable(),
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
