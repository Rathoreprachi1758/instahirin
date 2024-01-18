<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Job;
use App\Models\Skill;
use App\Models\Client;
use App\Models\Expert;
use Illuminate\Http\Request;
use App\Models\ExpertCategory;
use App\Models\Experty;
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
        if (empty($request->page))
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

        return response()->json(Expert::with(['experties', 'skills'])->whereHas('experties', function ($query) use ($keyword, $availabl) {
            $query->where('title', $keyword);
            if (!empty($availabl))
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

    // fetch all the jobs
    public function jobs(Request $request)
    {
        // return $request->page;
        if (empty($request->page))
            return response()->json(Job::with('skills')->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
        else
            return response()->json(Job::with('skills')->orderBy('created_at', 'desc')->paginate(9), 200)->header('Content-Type', 'text/json');
    }

    //* Method for Filter Jobs By Skill
    public function jobs_by_skills(Request $request)
    {
        // Validation if keyword is not found
        $keyword = $request->input('keyword');

        return response()->json(Job::with(['skills'])->orWhereHas('skills', function ($query) use ($keyword) {
            $query->where('title', $keyword);
        })->orderBy('created_at', 'desc')->get(), 200)->header('Content-Type', 'text/json');
    }

    //* method for fetching experience column values from job table
    public function getSearchSkills(Request $request)
    {
        $experienceOptions = Experty::distinct()->pluck('title');

        return response()->json($experienceOptions);
    }

    //* method for fetching location column values from job table
    public function getJobLocations(Request $request)
    {
        $query = $request->input('query');

        // Fetch location suggestions based on the query
        $locations = Job::where('location', 'like', "$query%")->distinct()->pluck('location');

        return response()->json($locations);
    }

    // method for fetching title column values from job table
    public function getJobTitles(Request $request)
    {
        $query = $request->input('query');

        // Fetch title suggestions based on the query
        $titles = Job::where('title', 'like', "$query%")->distinct()->pluck('title');

        return response()->json($titles);
    }

    // method for searching jobs
    public function jobs_search(Request $request)
    {
        // Validation for the incoming data
        $validatedData = $request->validate([
            'title' => 'array',
            'experience' => 'nullable|string',
            'location' => 'nullable|string',
        ]);

        // Extract values from the validated data
        $selectedSkills = $validatedData['title'];
        $experience = $validatedData['experience'];
        $location = $validatedData['location'];

        // Build the query to filter jobs
        $query = Job::query()->with('skills');

        // Filter by title
        // if ($title) {
        //     $query->where('title', $title);
        // }
        if ($selectedSkills) {
            $query->whereHas('skills', function ($q) use ($selectedSkills) {
                $q->whereIn('title', $selectedSkills);
            });
        }

        // Filter by experience
        if ($experience) {
            $query->where('experience', $experience);
        }

        // Filter by location
        if ($location) {
            $query->where('location', $location);
        }

        // Execute the query and return the results
        $jobs = $query->orderBy('created_at', 'desc')->get();

        return response()->json($jobs, 200)->header('Content-Type', 'text/json');
    }

    // method for fetching blogs
    public function getBlogs(Request $request)
    {
        $blogs = Blogs::orderBy('created_at', 'desc')->get();

        return response()->json($blogs, 200)->header('Content-Type', 'text/json');
    }
}
