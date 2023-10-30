<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expert;
use App\Models\ExpertCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ApiController extends Controller
{
    //

    public function expert_categories(Request $request)
    {
        return response()->json(ExpertCategory::orderBy('id', 'asc')->get(), 200)->header('Content-Type', 'text/json');
    }

    public function experts(Request $request)
    {
        if(empty($request->page))
            return response()->json(Expert::with(['experties', 'skills'])->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
        else    
            return response()->json(Expert::with(['experties', 'skills'])->orderBy('created_at', 'desc')->paginate(9), 200)->header('Content-Type', 'text/json');
    }

    public function experts_search(Request $request)
    {
        // Validation if keyword is not found
        // $keyword = explode(',',$request->input('keyword'));
        // $keyword = explode(' ',implode(',',$keyword));
        $keyword = array($request->input('keyword'));
         return  response()->json(Expert::with(['experties', 'skills'])->whereHas('experties', function ($query) use ($keyword) {
            $query->whereIn('title', $keyword);
        })->orWhereHas('skills', function ($query) use ($keyword) {
            $query->whereIn('title', $keyword);
        })->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
    }


    //* Method for Filter Expert By Category
    public function experts_by_category(Request $request)
    {
        //expertCategory
        $category_id = $request->input('category_id');
        return response()->json(Expert::with(['experties', 'skills'])->where('expert_category_id', $category_id)->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
    }

    //* Method for Filter Expert By Experties
    public function experts_by_experties(Request $request)
    {
        $keyword = $request->input('keyword');
        $availabl = $request->input('availabl');

        return response()->json(Expert::with(['experties', 'skills'])->whereHas('experties', function ($query) use ($keyword,$availabl) {
            $query->where('title', $keyword);
            if(!empty($availabl))
                $query->where('availability', $availabl);

        })->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
    }

    //* Method for Filter Expert By Skill
    public function experts_by_skills(Request $request)
    {
        // Validation if keyword is not found
        $keyword = $request->input('keyword');

        return response()->json(Expert::with(['experties', 'skills'])->orWhereHas('skills', function ($query) use ($keyword) {
            $query->where('title', $keyword);
        })->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
    }

    public function clients(Request $request)
    {
        return response()->json(Client::orderBy('id', 'asc')->get(), 200)->header('Content-Type', 'text/json');
    }
}
