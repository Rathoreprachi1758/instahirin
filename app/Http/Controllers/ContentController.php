<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\Lead;
use App\Models\Page;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class ContentController extends Controller
{
    public function index($levelOne = null, $levelTwo = null, $levelThree = null, $levelFour = null)
    {

        $slugs = array_filter(func_get_args());
        $pageSlug = implode('|', $slugs);

        // If there is no
        $pageSlug =  strlen($pageSlug) ? $pageSlug : 'hire';
        $page = Page::where('slug', '=', $pageSlug)->first();
        $template = $page ? $page->template : '404';

        if ($template == '404') {
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


    //* ContactUs Form Submission
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request data, including the uploaded file
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'hiring_type' => 'required',
            'budget' => 'required',
            'details' => 'required',
            'document' => 'required|file',
        ]);

        // Create a new instance of the ContactUs model
        $formData = new Lead();

        // Set the form data from the validated request
        $formData->name = $validatedData['name'];
        $formData->email = $validatedData['email'];
        $formData->phone = $validatedData['phone'];
        $formData->hiring_type = $validatedData['hiring_type'];
        $formData->budget = $validatedData['budget'];
        $formData->lead_type = isset($validatedData['lead_type']) ? $validatedData['lead_type'] : 'Consultation';
        $formData->details = $validatedData['details'];

        // Process and store the uploaded file
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();
            $file->storeAs('bizionic/images', $filename, 'public');
            $formData->document = $filename;
        }

        $formData->status = isset($validatedData['status']) ? $validatedData['status'] : 'New';


        // Save the form data
        $formData->save();

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }



    //* Subscribe Form Submission
    public function subscription(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'opted_out' => 'boolean',
        ]);

        // Create a new instance of the Subscription model
        $subscribe = new Subscription();

        // Set the subscribe form data from the validated request
        $subscribe->name = $validatedData['name'];
        $subscribe->email = $validatedData['email'];
        $subscribe->opted_out = isset($validatedData['opted_out']) ? $validatedData['opted_out'] : false;

        // Save the subscribe form data
        $subscribe->save();

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }

    //* Hire Form Submission
    public function hire(Request $request)
    {
        // dd($request->all());
        // Validate the request data, including the uploaded file
        $validatedData = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Create a new instance of the ContactUs model
        $hireForm = new Hire();

        // Set the form data from the validated request
        $hireForm->name = $validatedData['name'];
        $hireForm->company = $validatedData['company'];
        $hireForm->email = $validatedData['email'];
        $hireForm->phone = $validatedData['phone'];
        $hireForm->message = $validatedData['message'];

        // Save the form data
        $hireForm->save();

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }
}
