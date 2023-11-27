<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use App\Nova\AvailabilityData;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\DateTime;
use Illuminate\Support\Facades\Gate;
use App\Policies\brandpolicy;
use App\Policies\CareerPolicy;

class HireRequest extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\HireRequest>
     */
    public static $model = \App\Models\HireRequest::class;
    
    protected $policy = \App\Policies\CareerPolicy::class;
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    // public static $title = 'id';
    public static $title = 'name';

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
        // $this->authorizeTo(new CareerPolicy);
        return [
            ID::make()->sortable(),
            BelongsTo::make('Expert', 'expert')->noPeeking()->filterable()->nullable(),
            Text::make('Name', 'name')->rules('required', 'min:6,max:255'),
            Text::make('Email', 'email')->rules('required', 'min:6,max:255'),
            Text::make('Phone', 'phone')->rules('required', 'min:6,max:255'),
            Text::make('Company', 'company')->rules('required', 'min:6,max:255'),
            Trix::make('Details', 'message')->rules('required', 'min:6,max:255'),
            //File::make('Document', 'document')->hideFromIndex(),
            File::make('Document', 'document')
                ->disk('public')
                ->path('bizionic/images')
                ->storeAs(function (Request $request) {
                    // Customize the filename if needed
                    return 'document_' . time() . '.' . $request->file('document')->getClientOriginalExtension();
                })
                ->prunable(),
            Text::make('Website', 'website')->hideFromIndex(),
            Text::make('Source', 'source')->filterable()->nullable(),
            Text::make('Address', 'address')->hideFromIndex(),
            // Text::make('Company', 'company')->rules('required', 'min:6,max:255')->hideFromIndex(),
            Trix::make('Company Info', 'company_info')->hideFromIndex(),
            Select::make('Hiring Type', 'hiring_type')->options(
                [
                    'Full Time' => 'Full Time',
                    'Part Time' => 'Part Time',
                    "Daily Bases" => "Daily Bases",
                    'Weekly' => 'Weekly',
                    'Period' => 'Period',
                    "Freelance" => "Freelance",
                    "Project Base" => "Project Base",
                    "Contract Base" => "Contract Base",
                    'Hourly' => 'Hourly'
                ]
            )->displayUsingLabels()->filterable()->hideFromIndex(),
            Select::make('Priority', 'priority')->options(['normal' => 'Normal', 'insta' => 'Insta'])->displayUsingLabels()->filterable(),
            Date::make('From Date', 'from_date')->rules('nullable', 'date_format:Y-m-d')->hideFromIndex(),
            // Date::make('To Date','to_date')->rules('nullable', 'date_format:Y-m-d')->hideFromIndex(),
            // Text::make('From Time','from_time')->hideFromIndex(),
            // Text::make('To Time','to_time')->hideFromIndex(),
            Boolean::make('Virtual Assistance Call', 'virtual_assistance_call')->trueValue('Yes')->falseValue('No')->hideFromIndex(),
            Boolean::make('Agree to Term of Use', 'term_of_use')->trueValue('Yes')->falseValue('No')->hideFromIndex(),
            Boolean::make('Want Future Promotion , Offers & Communication', 'future_promotion')->trueValue('Yes')->falseValue('No')->hideFromIndex(),
            //Date::make('Availability Date', 'availability_date')->rules('nullable', 'date_format:Y-m-d')->hideFromIndex(),
            // HasMany::make('Availability Data', 'availabilityData', AvailabilityData::class)->hideFromIndex(),
            HasMany::make('Availability Data', 'availabilityData', AvailabilityData::class)->hideFromIndex(),



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
    // public static function authorizedToViewAny($request)
    // {

    //     return auth()->check() && auth()->user()->can('viewAny', brandpolicy::class);

    // }

    // public function authorizedToView($request)
    // {
    //     return $request->user()->can('view', $this);
    // }
}
