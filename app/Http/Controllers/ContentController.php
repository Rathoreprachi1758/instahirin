<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class ContentController extends Controller
{
    public function index($levelOne=null, $levelTwo=null, $levelThree=null, $levelFour=null)
    {

        $slugs = array_filter(func_get_args());
        $pageSlug = implode('|',$slugs);

        // If there is no 
        $pageSlug =  strlen($pageSlug) ? $pageSlug : 'hire'; 
        $page = Page::where('slug', '=', $pageSlug)->first();
        $template = $page ? $page->template : '404';

        if($template=='404'){
            return abort(404);
        }

        $menusResponse = Cache::get('menus', nova_get_menu_by_slug('header'));

        return view('welcome', [
            'title' => 'Title',
            'description' => 'Desc',
            'keywords' => 'keywords',
            'menus' => json_decode(json_encode((object) $menusResponse['menuItems']), FALSE),
            'template' => $template,
        ]);
    }

}
