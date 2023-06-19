<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expert;
use App\Models\ExpertCategory;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function expert_categories(Request $request)
    {
        return response()->json(ExpertCategory::orderBy('id', 'asc')->get(), 200)->header('Content-Type', 'text/json');
    }

    public function experts(Request $request)
    {
        return response()->json(Expert::with(['experties', 'skills'])->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
    }

    public function experts_search(Request $request)
    {
        // Validation if keyword is not found
        $keyword = $request->input('keyword');

        return response()->json(Expert::with(['experties', 'skills'])->whereHas('experties', function ($query) use ($keyword) {
            $query->where('title', $keyword);
        })->orWhereHas('skills', function ($query) use ($keyword) {
            $query->where('title', $keyword);
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

        return response()->json(Expert::with(['experties', 'skills'])->whereHas('experties', function ($query) use ($keyword) {
            $query->where('title', $keyword);
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