<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\Lead;
use App\Models\Page;
use App\Models\Expert;
use App\Models\Subscription;
use App\Models\HireRequest;
use App\Models\Career;
use App\Models\InstaHirinOnboard;
use App\Models\InstaHirinRequirement;
use App\Models\InstaHirinOnboardDocument;
use App\Models\Job;
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
        // dd($page->slug);

        $template = $page ? $page->template : '404';

        if ($template == '404') {
            return abort(404);
        }

        $menusResponse = Cache::get('menus', nova_get_menu_by_slug('header'));
//        echo "<pre>";print_r($menusResponse['menuItems']);exit;
        // dd($template);
        if($page->slug == 'hire-me'){
            $jobs = Job::where('status','Open')->get();
            return view('welcome', [
                'title' => 'Title',
                'description' => 'Desc',
                'keywords' => 'keywords',
                'menus' => json_decode(json_encode((object) $menusResponse['menuItems']), FALSE),
                'template' => $template,
                'jobs' => $jobs,
            ]);
        }
        
        return view('welcome', [
            'title' => 'Title',
            'description' => 'Desc',
            'keywords' => 'keywords',
            'menus' => json_decode(json_encode((object) $menusResponse['menuItems']), FALSE),
            'template' => $template,
        ]);
    }

    public function hireExpert($id)
    {

        $expert = Expert::findOrFail($id);
        // dd($expert->experties);
        $menusResponse = Cache::get('menus', nova_get_menu_by_slug('header'));
        
        return view('welcome', [
            'title' => 'Title',
            'description' => 'Desc',
            'keywords' => 'keywords',
            'menus' => json_decode(json_encode((object) $menusResponse['menuItems']), FALSE),
            'template' => 'hireForm',
            'expert' => $expert,
        ]);
    }

    //* ContactUs Form Submission
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request data, including the uploaded file
        if(isset($request->hiring_type))
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'hiring_type' => 'required',
                'budget' => 'required',
                'details' => 'required',
                'document' => 'required|file',
            ]);
        }
        else
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'details' => 'required',
                'document' => 'required|file',
            ]);
        }

        // Create a new instance of the ContactUs model
        $formData = new Lead();

        // Set the form data from the validated request
        $formData->name = $validatedData['name'];
        $formData->email = $validatedData['email'];
        $formData->phone = $validatedData['phone'];
        if(isset($request->hiring_type))
        {
            $formData->hiring_type = $validatedData['hiring_type'];
            $formData->budget = $validatedData['budget'];
        }
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
                'source' => '',
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
            $formData->source = $validatedData['source'];
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
            // dd('we are here');
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
                'source' => '',
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
            if(isset($request->expert_id)){
                $formData->expert_id = $request->expert_id;
            }
            $formData->priority = 'insta';
            $formData->source = $validatedData['source'];
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
        }else if(!isset($request->company)){
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
            ]);

            // Create a new instance of the Hire Request model
            $formData = new HireRequest();

            // Set the form data from the validated request
            $formData->name = $validatedData['name'];
            $formData->company = '-';
            $formData->email = $validatedData['email'];
            $formData->phone = $validatedData['phone'];
            $formData->message = $validatedData['message'];

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

    //* Hire Form Submission
    public function instaHirinRequirements(Request $request)
    {
        
        // Validate the request data, including the uploaded file
        
        $validatedData = $request->validate([
            'position_title' => 'required',
            'work_mode' => 'required',
            'project_description' => 'required',
            'key_skills' => '',
            'min_experience' => '',
            'max_experience' => '',
            'employment_type' => '',
            'salary_currency' => '',
            'min_salary' => '',
            'max_salary' => '',
            'location' => '',
            'education_qualification' => '',
            'company_name' => '',
            'company_website' => '',
            'contact_person' => '',
            'email' => 'required|email',
            'contact_no_country_code' => '',
            'contact_no' => '',
            'company_details' => '',
            'company_address' => '',
            'document' => 'file',
            'notify' => '',
        ]);

        // Create a new instance of the Hire Request model
        $formData = new InstaHirinRequirement();

        // Set the form data from the validated request
        $formData->position_title   = $validatedData['position_title'];
        $formData->work_mode        = $validatedData['work_mode'];
        $formData->project_description = $validatedData['project_description'];
        $formData->key_skills       = $validatedData['key_skills'];
        $formData->min_experience   = $validatedData['min_experience'];
        $formData->max_experience   = $validatedData['max_experience'];
        $formData->employment_type  = $validatedData['employment_type'];
        $formData->salary_currency  = $validatedData['salary_currency'];
        $formData->min_salary       = $validatedData['min_salary'];
        $formData->max_salary       = $validatedData['max_salary'];
        $formData->location         = $validatedData['location'];
        $formData->education_qualification = $validatedData['education_qualification'];
        $formData->company_name     = $validatedData['company_name'];
        $formData->company_website  = $validatedData['company_website'];
        $formData->contact_person   = $validatedData['contact_person'];
        $formData->email            = $validatedData['email'];
        $formData->contact_no_country_code = $validatedData['contact_no_country_code'];
        $formData->contact_no       = $validatedData['contact_no'];
        $formData->company_details  = $validatedData['company_details'];
        $formData->company_address  = $validatedData['company_address'];
    
        // Process and store the uploaded file
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();
            $file->storeAs('bizionic/images', $filename, 'public');
            $formData->document = $filename;
        }
        $formData->notify           = $validatedData['notify'];
        $formData->save();
        

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }

    public function instaHirinOnboard(Request $request)
    {
        // Validate the request data, including the uploaded file
        
        $validatedData = $request->validate([
            'name' => '',
            'contact_details' => '',
            'email' => '',
            'current_location' => '',
            'skills_description' => '',
            'current_title' => '',
            'experience_year' => '',
            'experience_month' => '',
            'key_skills' => '',
            'expert_in' => '',
            'also_work_with' => '',
            'working_since_date' => '',
            'working_since_date2' => '',
            'annual_salary_currency' => '',
            'annual_salary' => '',
            'highest_qualification' => '',
            'notice_period' => '',
            'availability' => '',
            'availability_date' => '',
            'availability_time_from' => '',
            'availability_time_to' => '',
            'resume_headline' => ''
        ]);

        // Create a new instance of the Hire Request model
        $formData = new InstaHirinOnboard();

        // Set the form data from the validated request
        $formData->name             = $validatedData['name'];
        $formData->contact_details  = $validatedData['contact_details'];
        $formData->email            = $validatedData['email'];
        $formData->current_location = $validatedData['current_location'];
        $formData->skills_description = $validatedData['skills_description'];
        $formData->current_title    = $validatedData['current_title'];
        $formData->experience_year  = $validatedData['experience_year'];
        $formData->experience_month = $validatedData['experience_month'];
        $formData->key_skills       = $validatedData['key_skills'];
        $formData->expert_in        = $validatedData['expert_in'];
        $formData->also_work_with   = $validatedData['also_work_with'];
        $formData->working_since_date = $validatedData['working_since_date'];
        $formData->working_since_date2 = $validatedData['working_since_date2'];
        $formData->annual_salary_currency = $validatedData['annual_salary_currency'];
        $formData->annual_salary    = $validatedData['annual_salary'];
        $formData->highest_qualification = $validatedData['highest_qualification'];
        $formData->notice_period    = isset($validatedData['notice_period'])?$validatedData['notice_period']:'-';
        $formData->availability     = $validatedData['availability'];
        $formData->availability_date = $validatedData['availability_date'];
        $formData->availability_time_from = $validatedData['availability_time_from'];
        $formData->availability_time_to = $validatedData['availability_time_to'];
        $formData->resume_headline  = $validatedData['resume_headline'];
        // dd($request->all());
        $formData->save();

        if(isset($request->document)){
            // echo "here we are";
            foreach($request->document as $document){
                $formData2 = new InstaHirinOnboardDocument();
                $formData2->insta_hirin_onboard_id = $formData->id;
                $file = $document;
                $filename = $file->getClientOriginalName();
                $file->storeAs('bizionic/images', $filename, 'public');
                $formData2->document = $filename;
                $formData2->save();
            }
        }

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }
}
