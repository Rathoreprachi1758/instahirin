<?php

namespace App\MenuItemTypes;

use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use Outl1ne\MenuBuilder\MenuItemTypes\BaseMenuItemType;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use File;

class BizionicMenuItemType extends BaseMenuItemType
{

    public static function getIdentifier(): string
    {
        return 'bizionic-url';
    }

    public static function getName(): string
    {
        return 'Bizionic URL';
    }

    public static function getType(): string
    {
        return 'bizionic-url';
    }

    public static function getRules(): array
    {
        return [

        ];
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array An array of fields.
     */
    public static function getFields(): array
    {
        return [
            Text::make('Slug','slug'),
            Number::make('Menu Columns','menu_columns')->min(1)->max(4)->step(1),
            Text::make('Menu Icon','menu_icon'),
            Text::make('Custom Class','is_action_item'),
            Select::make('Template','template')->options(BizionicMenuItemType::getAllTemplates())
        ];
    }
    private static function getAllTemplates(){

        $files = File::allFiles(base_path().'/resources/views/templates');

        foreach($files as $key=>$file){
            $fileName = $file->getBasename('.blade.php');
            $fileNames[$fileName] = $fileName;
        }

        return $fileNames;
    }

}
