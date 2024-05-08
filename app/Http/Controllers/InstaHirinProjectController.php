<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\InstaProjectReview;
use Auth;
use Illuminate\Http\RedirectResponse;
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
        $companies = Company::where('user_id', \Illuminate\Support\Facades\Auth::id())->get();
        return view('dashboard.Insta_project.create_reviews' , compact('companies'));
    }
    Public function MyReview()
    {
        $instaProjectReviews = InstaProjectReview::where('user_id' , Auth::id())->get();
        return view('dashboard.Insta_project.my_reviews', compact('instaProjectReviews'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function instaProjectReviewSubmit(Request $request): RedirectResponse
    {
        $review = new InstaProjectReview;

        $review->company_id = $request->company;
        $review->scope_work = $request->scope_work;
        $review->company_review_comment = $request->company_review_comment;
        $review->quality_deliverable_rating = $request->quality_deliverable_rating;
        $review->cost_value_rating = $request->cost_value_rating;
        $review->time_lines_marketing_rating = $request->time_lines_marketing_rating;
        $review->over_all_rating = $request->over_all_rating;
        $review->user_id = auth()->user()->id;
        $review->save();

        return redirect()->route('PostReview');
    }
}
