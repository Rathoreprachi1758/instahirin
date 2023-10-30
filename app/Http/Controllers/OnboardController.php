<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Experty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OnboardController extends Controller
{
    public function getPhoneCodes()
    {
        // $phoneCodes = Country::pluck('phone', 'id')->toArray(); // Convert Collection to array
        $phoneCodes = Country::all(['name', 'phone']);
        // Log::info('Fetched phone codes:', $phoneCodes);
        return response()->json($phoneCodes);
    }

    public function getSkills(Request $request)
    {
        // $query = $request->input('query');
        // $skills = Experty::where('title', 'like', '%' . $query . '%')->pluck('title');
        // return response()->json($skills);
        $query = $request->input('query');
        $skills = Experty::where('title', 'like', '%' . $query . '%')->get()->map(function ($skill) {
            return [
                'id' => $skill->id,
                'name' => $skill->title,
            ];
        });

        return response()->json($skills);
    }

    public function getExpert(Request $request)
    {
        // $query = $request->input('query');
        // $skills = Experty::where('title', 'like', '%' . $query . '%')->pluck('title');
        // return response()->json($skills);
        $query = $request->input('query');
        $skills = Experty::where('title', 'like', '%' . $query . '%')->get()->map(function ($skill) {
            return [
                'id' => $skill->id,
                'name' => $skill->title,
            ];
        });

        return response()->json($skills);
    }

    public function getWork(Request $request)
    {
        // $query = $request->input('query');
        // $skills = Experty::where('title', 'like', '%' . $query . '%')->pluck('title');
        // return response()->json($skills);
        $query = $request->input('query');
        $skills = Experty::where('title', 'like', '%' . $query . '%')->get()->map(function ($skill) {
            return [
                'id' => $skill->id,
                'name' => $skill->title,
            ];
        });

        return response()->json($skills);
    }
}
