<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use File;
use Laravel\Nova\Fields\DateTime;
use Illuminate\Support\Facades\Gate;
use App\Policies\brandpolicy;

class Page extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Page>
     */
    public static $model = \App\Models\Page::class;

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
            Text::make('Title','title')->rules('required','min:3,max:255'),
            Select::make('Slug','slug')->options($this->getAllSlugs())->rules('required'),
            Text::make('Meta Title','meta_title')->rules('min:6,max:255'),
            Text::make('Meta Keywords','meta_keywords')->rules('min:6,max:255'),
            Textarea::make('Meta Description','meta_description')->rules('min:6,max:500'),
            Select::make('Template','template')->options($this->getAllTemplates())->rules('required'),
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

    private function getAllTemplates(){

        $files = File::allFiles(base_path().'/resources/views/templates');

        foreach($files as $key=>$file){
            $fileName = $file->getBasename('.blade.php');
            $fileNames[$fileName] = $fileName;
        }

        return $fileNames;
    }

    private function getAllSlugs(){
       $menus = nova_get_menu_by_slug('header');
       $menus = (object) $menus['menuItems']; 
       $flatMenus = [];
       foreach($menus as $levelOneKey => $levelOneMenu){
        $flatMenus[$levelOneMenu['data']['slug']] =  $levelOneMenu['name'];
            foreach($levelOneMenu['children'] as $levelTwoKey => $levelTwoMenu){
                //array_push($flatMenus,$levelTwoMenu['name']);
                foreach($levelTwoMenu['children'] as $levelThreeKey => $levelThreeMenu){

                    foreach($levelThreeMenu['children'] as $levelThreeKey => $levelFourMenu){
                        //array_push($flatMenus,$levelThreeMenu['name']);
                        foreach($levelFourMenu['children'] as $levelFourKey => $levelFiveMenu){
                            $slug = $levelOneMenu['data']['slug'].'|'.$levelTwoMenu['data']['slug'].'|'.$levelFourMenu['data']['slug'].'|'.$levelFiveMenu['data']['slug'];
                            $name = $levelOneMenu['name'].' | '.$levelTwoMenu['name'].' | '.$levelFourMenu['name'].' | '.$levelFiveMenu['name'];
                            $flatMenus[$slug] =  $name;
                        }
                    }
                }
            }
       }

       return $flatMenus;
    }
    ///
    // public static function authorizedToViewAny($request)
    // {   
    //     //return "Admin";
    //     // $user = auth()->user();
    //     // if($user->roles === 'admin')
    //     // {
    //     //     //return auth()->check() && auth()->user()->can('viewAny', brandpolicy::class);
    //     //     return "Admin";
    //     // }
    //     // else{
    //     //     return "User";
    //     // }
        
    //     //  return $request->user()->can('viewAny', brandpolicy::class);
       
    //     // return auth()->check() && auth()->user()->can('viewAny', brandpolicy::class);
    // }
    
    // public function authorizedToView($request)
    // {
    //     return $request->user()->can('view', $this);
    // }
}
