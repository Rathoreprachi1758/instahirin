<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\InstaProjectReview;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InstaProject extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function instaProject(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $instaProjectReviews = InstaProjectReview::where('user_id' , Auth::id())->get();
        return view('dashboard.insta_project', compact('companies' , 'instaProjectReviews'));
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

        return redirect()->route('instaProject');
    }
}
