<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MultiSelect;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Tag;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\File;

class Expert extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Expert>
     */
    public static $model = \App\Models\Expert::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','title','sub_title',
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
            BelongsTo::make('Expert Category','expertCategory')->noPeeking()->filterable(),
            Text::make('Title','title')->rules('required','min:6,max:255'),
            Text::make('Sub Title','sub_title')->rules('required','min:6,max:255')->help(
                'E.g Certified Scrum Master'
            ),
            Select::make('Availability','availability')->options(['Full Time'=>'Full Time','Part Time'=>'Part Time'])->displayUsingLabels()->filterable(),
            Text::make('Experience','experience')->help(
                'Put value like this 15 Years, 2 Years'
            ),
            Avatar::make('Avatar','avatar')->disableDownload()->nullable(),
            Tag::make('Experties','experties')->showCreateRelationButton()->preload()->displayAsList(),
            Tag::make('Skills','skills')->showCreateRelationButton()->preload()->displayAsList(),
            File::make('Resume','resume'),
           
            Select::make('Status','status')->options(['New'=>'New','In Review'=>'In Reivew','Reviewed'=>'Reviewed'])->displayUsingLabels()->filterable(),
            Boolean::make('Is Published','published')->filterable(),
            Trix::make('Description','description')
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
