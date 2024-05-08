<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\ExpertCategory;
use App\Models\Country;
use App\Models\CreateProject;
use RealRashid\SweetAlert\Facades\Alert;
class InstaHirinProjectController extends Controller
{
    Public function createProject()
    {
        $CurrencyCode = Country::all();
        $expertCategories = ExpertCategory::all();
        return view('dashboard.Insta_project.create_project',['CurrencyCode' => $CurrencyCode,'expertCategories'=>$expertCategories]);
    }
    Public function post_project(Request $request)
    {
        // return $request->all();
        $InsaProject = new CreateProject();
        $InsaProject->project_title = $request->project_title;
        $InsaProject->expert_category_id = $request->category_name;
        $InsaProject->Industry = $request->industry;
        $InsaProject->search_tags = $request->search_tags;
        $InsaProject->skills_required = $request->skills_required;
        $InsaProject->location = $request->location;
        $InsaProject->proj_start_date = $request->proj_start_date;
        $InsaProject->proj_end_date = $request->proj_end_date;
        $InsaProject->reference_url = $request->reference_url;
        $InsaProject->budget_range = $request->budget_range;
        $InsaProject->funding = $request->project_title;
        $InsaProject->project_overview = $request->project_title;
        $InsaProject->proj_bid_start = $request->Bid_start_date;
        $InsaProject->proj_bid_end = $request->bid_end_date;
        $InsaProject->buy_now_price = $request->currency_code.'+'. $request->amount;
        $InsaProject->user_id = Auth::id();
        $InsaProject->save();
        Alert::success('Project', 'Created Successfully');
        return redirect()->back()->with('message','Created project Succesfully');
   }
    Public function my_project()
    {
        $CreateProject = CreateProject::where('user_id',Auth::id())->get();
        return view('dashboard.Insta_project.my_projects',['CreateProject'=>$CreateProject]);
    }
    
    Public function myProjShow(Request $request)
    {
        $ProjectId =  $request->query('ProjectId');
        $CreateProject = CreateProject::with('expertCategories')->where('id',$ProjectId)->get();
        return view('dashboard.Insta_project.ShowMore',['ProjectId'=>$CreateProject]);
    }
    Public function updateProjOverview(Request $request,$id)
    {
        // return $request->over_view;
        $InsaProject = CreateProject::find($id);
        $InsaProject->project_overview = $request->over_view;
        $InsaProject->save();
        Alert::success('Project-Overview', 'Updated Successfully');
        return redirect()->back()->with('message','Updated Project-Overview Successfully');

    }
    Public function my_project_bids()
    {
        return view('dashboard.Insta_project.my_project_bidders');
    }
    Public function PostReview()
    {
        return view('dashboard.Insta_project.create_revwies');
    }
    Public function MyReview()
    {
        return view('dashboard.Insta_project.my_reviews');
    }
}
