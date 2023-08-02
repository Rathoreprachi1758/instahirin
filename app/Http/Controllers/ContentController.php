<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\Lead;
use App\Models\Page;
use App\Models\Subscription;
use App\Models\HireRequest;
use App\Models\Career;
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
//        echo "<pre>";print_r($menusResponse['menuItems']);exit;
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
        if(isset($request->hiring_type) && !isset($request->company_info)){
            $validatedData = $request->validate([
                'name' => 'required',
                'company' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'document' => 'required|file',
                'website' => '',
                'message' => '',
                'address' => '',
                'from_date' => '',
                'to_date' => '',
                'from_time' => '',
                'to_time' => '',
                'virtual_assistance_call' => '',
                'availability_date' => '',
                'availability_time_from' => '',
                'availability_time_to' => '',
            ]);

            // Create a new instance of the Hire Request model
            $formData = new HireRequest();

            // Set the form data from the validated request
            $formData->name = $validatedData['name'];
            $formData->company = $validatedData['company'];
            $formData->email = $validatedData['email'];
            $formData->phone = $validatedData['phone'];
            $formData->website = $validatedData['website'];
            $formData->message = $validatedData['message'];
            $formData->address = $validatedData['address'];
            $formData->from_date = $validatedData['from_date'];
            $formData->to_date = $validatedData['to_date'];
            $formData->from_time = $validatedData['from_time'];
            $formData->to_time = $validatedData['to_time'];
            $formData->priority = 'normal';
            $formData->virtual_assistance_call = isset($validatedData['virtual_assistance_call'])?'Yes':'No';
            $formData->availability_date = $validatedData['availability_date'];
            $formData->availability_time_from = $validatedData['availability_time_from'];
            $formData->availability_time_to = $validatedData['availability_time_to'];

            // Process and store the uploaded file
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $filename = $file->getClientOriginalName();
                $file->storeAs('bizionic/images', $filename, 'public');
                $formData->document = $filename;
            }
            $formData->save();
        }
        else if(isset($request->company_info)){
            $validatedData = $request->validate([
                'name' => 'required',
                'company' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'document' => 'required|file',
                'company_info' => '',
                'website' => '',
                'message' => '',
                'address' => '',
                'from_date' => '',
                'to_date' => '',
                'from_time' => '',
                'to_time' => '',
                'virtual_assistance_call' => '',
                'availability_date' => '',
                'availability_time_from' => '',
                'availability_time_to' => '',
            ]);

            // Create a new instance of the Hire Request model
            $formData = new HireRequest();

            // Set the form data from the validated request
            $formData->name = $validatedData['name'];
            $formData->company = $validatedData['company'];
            $formData->company_info = $validatedData['company_info'];
            $formData->email = $validatedData['email'];
            $formData->phone = $validatedData['phone'];
            $formData->website = $validatedData['website'];
            $formData->message = $validatedData['message'];
            $formData->address = $validatedData['address'];
            $formData->from_date = $validatedData['from_date'];
            $formData->to_date = $validatedData['to_date'];
            $formData->from_time = $validatedData['from_time'];
            $formData->to_time = $validatedData['to_time'];
            $formData->priority = 'insta';
            $formData->virtual_assistance_call = isset($validatedData['virtual_assistance_call'])?'Yes':'No';
            $formData->availability_date = $validatedData['availability_date'];
            $formData->availability_time_from = $validatedData['availability_time_from'];
            $formData->availability_time_to = $validatedData['availability_time_to'];

            // Process and store the uploaded file
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $filename = $file->getClientOriginalName();
                $file->storeAs('bizionic/images', $filename, 'public');
                $formData->document = $filename;
            }
            $formData->save();
        }
        else{
            $validatedData = $request->validate([
                'name' => 'required',
                'company' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
            ]);

            // Create a new instance of the Hire Request model
            $formData = new HireRequest();

            // Set the form data from the validated request
            $formData->name = $validatedData['name'];
            $formData->company = $validatedData['company'];
            $formData->email = $validatedData['email'];
            $formData->phone = $validatedData['phone'];
            $formData->message = $validatedData['message'];

            $formData->save();
        }

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }

    //* Career Form Submission
    public function career(Request $request)
    {
        // dd($request->all());
        // Validate the request data, including the uploaded file
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'linkedin_profile' => 'required',
            'note' => 'required',
            'document' => 'required|file',
        ]);

        // Create a new instance of the ContactUs model
        $formData = new Career();

        // Set the form data from the validated request
        $formData->name = $validatedData['name'];
        $formData->email = $validatedData['email'];
        $formData->linkedin_profile = $validatedData['linkedin_profile'];
        $formData->note = $validatedData['note'];

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
}
