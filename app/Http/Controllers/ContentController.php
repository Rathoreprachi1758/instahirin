<?php

namespace App\Http\Controllers;

use Log;
use ZipArchive;
use App\Models\Job;
use App\Models\Hire;
use App\Models\Lead;
use App\Models\Page;
use App\Models\Career;
use App\Models\Expert;
use App\Models\Country;
// use App\Models\Expert;
use App\Models\Countrie;
// use App\Models\HireRequest;
// use App\Models\Subscription;
use App\Models\TimeZones;
use App\Models\HireRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;
//use Laravel\Nova\Fields\Timezone;
use App\Models\TeamContactUs;
use App\Models\AvailabilityData;
use App\Models\InstaHirinOnboard;
use Illuminate\Support\Facades\DB;
use App\Models\InstaHirinRequirement;
use Illuminate\Support\Facades\Cache;
use App\Models\Hire_requests_calender;
use App\Models\InstaHirinOnboardDocument;




class ContentController extends Controller
{
    public function index($levelOne = null, $levelTwo = null, $levelThree = null, $levelFour = null,)
    {

        $slugs = array_filter(func_get_args());
        $pageSlug = implode('|', $slugs);

        // If there is no
        $pageSlug =  strlen($pageSlug) ? $pageSlug : 'hire';
        $page = Page::where('slug', '=', $pageSlug)->first();
        //dd($page->meta_title);
        //dd($page->meta_keywords);
        //dd($page->meta_description);

        $template = $page ? $page->template : '404';

        if ($template == '404') {
            return abort(404);
        }

        $menusResponse = Cache::get('menus', nova_get_menu_by_slug('header'));
        //        echo "<pre>";print_r($menusResponse['menuItems']);exit;f
        // dd($template);
        if ($page->slug == 'hire-me') {
            $jobs = Job::where('status', 'Open')->get();
            return view('welcome', [
                'title' => $page->meta_title,
                'description' => $page->meta_description,
                'keywords' => $page->meta_keywords,
                'menus' => json_decode(json_encode((object) $menusResponse['menuItems']), FALSE),
                'template' => $template,
                'jobs' => $jobs,
            ]);
        }
        $timezones = TimeZones::all();
        // $expert = Expert::all();

        return view('welcome', [
            'title' => $page->meta_title,
            'description' => $page->meta_description,
            'keywords' => $page->meta_keywords,
            'menus' => json_decode(json_encode((object) $menusResponse['menuItems']), FALSE),
            'template' => $template,
            // 'expert' => $expert, // made a change expert here
            'countries' => json_encode(Countrie::all()),
            'timezones' => $timezones,

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
            'countries' => json_encode(Countrie::all()),
            'timezones' => json_encode(TimeZones::all())
        ]);
    }

    //* ContactUs Form Submission
    public function store(Request $request)
    {
        // Validate the request data, including the uploaded file
        if (isset($request->hiring_type)) {
            $validatedData = $request->validate([
                'name' => 'required',
                'company' => '',
                'email' => 'required|email',
                'country_code' => '',
                'phone' => 'required',
                // 'hiring_type' => 'required',
                // 'budget' => 'required',
                'details' => 'required',
                'document' => 'file',
            ]);
        } else {
            $validatedData = $request->validate([
                'name' => 'required',
                'company' => '',
                'email' => 'required|email',
                'country_code' => '',
                'phone' => 'required',
                'details' => '',
                'document' => '',
            ]);
        }

        // Create a new instance of the ContactUs model
        $formData = new Lead();

        // Set the form data from the validated request
        $formData->name = $validatedData['name'];
        //$formData->company = $validatedData['company'];
        $formData->company = isset($validatedData['company']) ? $validatedData['company'] : '';
        $formData->email = $validatedData['email'];
        // $formData->phone = $validatedData['country_code'] . $validatedData['phone'];
        $formData->phone = isset($validatedData['phone']) ? $validatedData['phone'] : '';
        //$formData->lead_type = isset($validatedData['lead_type']) ? $validatedData['lead_type'] : 'Consultation';
        $formData->details = $validatedData['details'];

        // Process and store the uploaded file
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = 'bizionic/images/' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('bizionic/images', $filename, 'public');
            $formData->document = $filename;
        }

        $formData->status = isset($validatedData['status']) ? $validatedData['status'] : 'New';


        // Save the form data
        $formData->save();

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }


    //* Team Form Submission
    public function teamForm(Request $request)
    {
        // Validate the request data, including the uploaded file
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'details' => 'required',
        ]);


        $formData = new TeamContactUs();


        $formData->name = $validatedData['name'];
        $formData->phone = $validatedData['phone'];
        $formData->email = $validatedData['email'];
        $formData->details = $validatedData['details'];

        //$formData->status = isset($validatedData['status']) ? $validatedData['status'] : 'New';

        $formData->save();
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
        //! for form where `hiring_type` exists
        if (isset($request->hiring_type) && !isset($request->company_info)) {

            $validatedData = $request->validate([
                'name' => 'required',
                'country_code' => '',
                'phone' => '',
                'company' => 'required',
                'email' => 'required|email',
                'website' => '',
                'address' => '',
                'message' => '',
                'hiring_type' => '',
                'from_date' => '',
                'virtual_assistance_call' => '',
                'availability_date' => '',
                'availability_time_from' => '',
                'availability_time_to' => '',
                'availability_time_zone' => '',
                'document' => 'file',
                'term_of_use' => '',
                'future_promotion' => '',
                // 'to_date' => '',
                // 'from_time' => '',
                // 'to_time' => '',
                'source' => '',
                'template' => '',
                'expert' => '',
            ]);
            // dd($validatedData);
            // Create a new instance of the Hire Request model
            $formData = new HireRequest();



            // Set the form data from the validated request
            // $formData->expert_id = $validatedData['expert_id'];
            $formData->name = $validatedData['name'];
            $formData->company = $validatedData['company'];
            $formData->email = $validatedData['email'];
            $formData->phone = $validatedData['country_code'] . $validatedData['phone'];
            $formData->website = $validatedData['website'];
            $formData->message = $validatedData['message'];
            $formData->address = $validatedData['address'];
            $formData->from_date = $validatedData['from_date'];
            //$formData->to_date = $validatedData['to_date'];
            //$formData->from_time = $validatedData['from_time'];
            //$formData->to_time = $validatedData['to_time'];
            $formData->priority = 'normal';
            $formData->source = ($formData->source) ? $validatedData['source'] : '';
            $formData->virtual_assistance_call = isset($validatedData['virtual_assistance_call']) ? 'Yes' : 'No';
            $formData->term_of_use = isset($validatedData['term_of_use']) ? 'Yes' : 'No';
            $formData->future_promotion = isset($validatedData['future_promotion']) ? 'Yes' : 'No';
            // $formData->availability_date = json_encode($validatedData['availability_date']);
            // $formData->availability_time_from = json_encode($validatedData['availability_time_from']);
            // $formData->availability_time_to = json_encode($validatedData['availability_time_to']);
            // $formData->timezone = json_encode($validatedData['availability_time_zone']);
            //! for multiple dates
            // foreach ($request->availability_date as $key => $date) {
            //     $availabilityData = new AvailabilityData([
            //         'availability_date' => $date,
            //         'availability_time_from' => $request->availability_time_from[$key],
            //         'availability_time_to' => $request->availability_time_to[$key],
            //         'availability_time_zone' => $request->availability_time_zone[$key],
            //     ]);
            //     $formData->availabilityData()->save($availabilityData);
            // }
            $formData->hiring_type = $validatedData['hiring_type'];
            $formData->template = @$validatedData['template'];
            //$formData->expert_id = @$validatedData['expert'];
            //$formData->expert_id = isset($validatedData['expert']) ? $validatedData['expert'] : null;
            if (array_key_exists('expert', $validatedData) && $validatedData['expert'] !== '') {
                $formData->expert_id = $validatedData['expert'];
            } else {
                $formData->expert_id = null;
            }

            // Process and store the uploaded file
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $filename = 'bizionic/images/' . time() . '_' . $file->getClientOriginalName();
                $file->storeAs('bizionic/images', $filename, 'public');
                $formData->document = $filename;
            }
            $formData->save();
            foreach ($request->availability_date as $key => $date) {
                $availabilityData = new AvailabilityData([
                    'availability_date' => $date,
                    'availability_time_from' => $request->availability_time_from[$key],
                    'availability_time_to' => $request->availability_time_to[$key],
                    'availability_time_zone' => $request->availability_time_zone[$key],
                ]);

                $formData->availabilityData()->save($availabilityData);
            }
        } else if (isset($request->company_info)) {
            $requestId = $formData->id;
            for ($n = 0; $n < count($request->from_date); $n++) {
                $formData = new Hire_requests_calender();
                $formData->from_date = $request->from_date[$n];
                $formData->to_date = $request->to_date[$n];
                $formData->from_time = $request->from_time[$n];
                $formData->to_time = $request->to_time[$n];
                $formData->calender_type = 1;
                $formData->request_id = $requestId;
                $formData->save();
            }
            for ($n = 0; $n < count($request->availability_date); $n++) {
                $formData = new Hire_requests_calender();
                $formData->from_date = $request->availability_date[$n];
                $formData->from_time = $request->availability_time_from[$n];
                $formData->to_time = $request->availability_time_to[$n];
                $formData->calender_type = 2;
                $formData->request_id = $requestId;
                $formData->save();
            }
        } else if (isset($request->company_info)) {
            // dd('we are here');

            $validatedData = $request->validate([
                'name' => 'required',
                'company' => '',
                'email' => 'required|email',
                'country_code' => '',
                'phone' => '',
                'document' => 'file',
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
            $formData->phone =  $validatedData['country_code'] . $validatedData['phone'];
            $formData->website = $validatedData['website'];
            $formData->message = $validatedData['message'];
            $formData->address = $validatedData['address'];
            $formData->from_date = $validatedData['from_date'];
            $formData->to_date = $validatedData['to_date'];
            $formData->from_time = $validatedData['from_time'];
            $formData->to_time = $validatedData['to_time'];
            if (isset($request->expert_id)) {
                $formData->expert_id = $request->expert_id;
            }
            $formData->priority = 'insta';
            $formData->source = isset($validatedData['source']) ? $validatedData['source'] : '';
            $formData->virtual_assistance_call = isset($validatedData['virtual_assistance_call']) ? 'Yes' : 'No';
            $formData->availability_date = $validatedData['availability_date'];
            $formData->availability_time_from = $validatedData['availability_time_from'];
            $formData->availability_time_to = $validatedData['availability_time_to'];

            // Process and store the uploaded file
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $filename = 'bizionic/images/' . time() . '_' . $file->getClientOriginalName();
                $file->storeAs('bizionic/images', $filename, 'public');
                $formData->document = $filename;
            }
            $formData->save();
        } else if (!isset($request->company)) {
            //! this is not for hire form
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'country_code' => '',
                'phone' => '',
                'message' => 'required',
            ]);

            // Create a new instance of the Hire Request model
            $formData = new HireRequest();

            // Set the form data from the validated request
            $formData->name = $validatedData['name'];
            $formData->company = '-';
            $formData->email = $validatedData['email'];
            $formData->phone = $validatedData['country_code'] . $validatedData['phone'];
            $formData->message = $validatedData['message'];

            $formData->save();
        } else {
            //! this is not for hire form
            $validatedData = $request->validate([
                'name' => 'required',
                'company' => '',
                'email' => 'required|email',
                'country_code' => '',
                'phone' => '',
                'message' => 'required',
            ]);

            // Create a new instance of the Hire Request model
            $formData = new HireRequest();

            // Set the form data from the validated request
            $formData->name = $validatedData['name'];
            $formData->company = $validatedData['company'];
            $formData->email = $validatedData['email'];
            $formData->phone = $validatedData['country_code'] . $validatedData['phone'];
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
            'linkedin_profile' => '',
            'note' => '',
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
            $filename = 'bizionic/images/' . time() . '_' . $file->getClientOriginalName();
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
            'key_skills' => 'required|json',
            'min_experience' => '',
            'max_experience' => '',
            'employment_type' => '',
            // changes
            'salary_currency_monthly_project' => '',
            'min_salary_monthly_project' => '',
            'max_salary_monthly_project' => '',
            'salary_currency_yearly' => '',
            'min_salary_yearly' => '',
            'max_salary_yearly' => '',
            'salary_currency_hourly' => '',
            'min_salary_hourly' => '',
            'max_salary_hourly' => '',
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
            'notify_ai_applicants' => '',
        ]);

        //Log::info('Request data:', $request->all());
        // Create a new instance of the Hire Request model
        $formData = new InstaHirinRequirement();

        // Set the form data from the validated request
        $formData->position_title   = $validatedData['position_title'];
        $formData->work_mode        = $validatedData['work_mode'];
        $formData->project_description = $validatedData['project_description'];
        $formData->key_skills       = $validatedData['key_skills'];
        // $formData->key_skills = json_decode($validatedData['key_skills']);
        $formData->min_experience   = $validatedData['min_experience'];
        $formData->max_experience   = $validatedData['max_experience'];
        $formData->employment_type  = $validatedData['employment_type'];
        // changes
        $formData->salary_currency_monthly_project = $validatedData['salary_currency_monthly_project'];
        $formData->min_salary_monthly_project = $validatedData['min_salary_monthly_project'];
        $formData->max_salary_monthly_project = $validatedData['max_salary_monthly_project'];
        $formData->salary_currency_yearly = $validatedData['salary_currency_yearly'];
        $formData->min_salary_yearly = $validatedData['min_salary_yearly'];
        $formData->max_salary_yearly = $validatedData['max_salary_yearly'];
        $formData->salary_currency_hourly = $validatedData['salary_currency_hourly'];
        $formData->min_salary_hourly = $validatedData['min_salary_hourly'];
        $formData->max_salary_hourly = $validatedData['max_salary_hourly'];

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
            $filename = 'bizionic/images/' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('bizionic/images', $filename, 'public');
            $formData->document = $filename;
        }
        // $formData->notify_ai_applicants   = $validatedData['notify_ai_applicants'];
        $formData->notify_ai_applicants = isset($validatedData['notify_ai_applicants']) ? 'Yes' : 'No';
        $formData->save();


        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }

    // public function instaHirinOnboard(Request $request)
    // {
    //     // Validate the request data, including the uploaded file

    //     $validatedData = $request->validate([
    //         'name' => '',
    //         'contact_details' => '',
    //         'email' => '',
    //         'current_location' => '',
    //         'skills_description' => '',
    //         'current_title' => '',
    //         'experience_year' => '',
    //         'experience_month' => '',
    //         'key_skills' => '',
    //         'expert_in' => '',
    //         'also_work_with' => '',
    //         'working_since_date' => '',
    //         'working_since_date2' => '',
    //         'annual_salary_currency' => '',
    //         'annual_salary' => '',
    //         'highest_qualification' => '',
    //         'notice_period' => '',
    //         'availability' => '',
    //         'availability_date' => '',
    //         'availability_time_from' => '',
    //         'availability_time_to' => '',
    //         'resume_headline' => ''
    //     ]);

    //     // Create a new instance of the Hire Request model
    //     $formData = new InstaHirinOnboard();

    //     // Set the form data from the validated request
    //     $formData->name             = $validatedData['name'];
    //     $formData->contact_details  = $validatedData['contact_details'];
    //     $formData->email            = $validatedData['email'];
    //     $formData->current_location = $validatedData['current_location'];
    //     $formData->skills_description = $validatedData['skills_description'];
    //     $formData->current_title    = $validatedData['current_title'];
    //     $formData->experience_year  = $validatedData['experience_year'];
    //     $formData->experience_month = $validatedData['experience_month'];
    //     $formData->key_skills       = $validatedData['key_skills'];
    //     $formData->expert_in        = $validatedData['expert_in'];
    //     $formData->also_work_with   = $validatedData['also_work_with'];
    //     $formData->working_since_date = $validatedData['working_since_date'];
    //     $formData->working_since_date2 = $validatedData['working_since_date2'];
    //     $formData->annual_salary_currency = $validatedData['annual_salary_currency'];
    //     $formData->annual_salary    = $validatedData['annual_salary'];
    //     $formData->highest_qualification = $validatedData['highest_qualification'];
    //     $formData->notice_period    = isset($validatedData['notice_period']) ? $validatedData['notice_period'] : '-';
    //     $formData->availability     = $validatedData['availability'];
    //     $formData->availability_date = $validatedData['availability_date'];
    //     $formData->availability_time_from = $validatedData['availability_time_from'];
    //     $formData->availability_time_to = $validatedData['availability_time_to'];
    //     $formData->resume_headline  = $validatedData['resume_headline'];
    //     // dd($request->all());
    //     $formData->save();

    //     if (isset($request->document)) {
    //         // echo "here we are";
    //         foreach ($request->document as $document) {
    //             $formData2 = new InstaHirinOnboardDocument();
    //             $formData2->insta_hirin_onboard_id = $formData->id;
    //             $file = $document;
    //             $filename = $file->getClientOriginalName();
    //             $file->storeAs('bizionic/images', $filename, 'public');
    //             $formData2->document = $filename;
    //             $formData2->save();
    //         }
    //     }

    //     // Return a response indicating success
    //     return response()->json(['message' => 'Form submitted successfully']);
    // }


    // Insta Hiring Onboard Form Controller
    public function submitForm(Request $request)
    {
        // Validate the request data, including the uploaded file
        // Log::info('Request data:', $request->all());

        $validatedData = $request->validate([
            'name' => 'required',
            'contact_details' => 'required',
            'email' => 'required',
            'current_location' => 'required',
            'skills_description' => 'required',
            'current_title' => 'required',
            'experience_year' => 'required',
            'experience_month' => 'required',
            'key_skills' => 'required|json',
            'expert_in' => 'required|json',
            'also_work_with' => 'required|json',
            'last_company' => '',
            'company_location' => '',
            'currently_working_here' => '', // new column
            'working_since_date' => 'required',
            'working_since_date2' => '',
            'annual_salary_currency' => 'required',
            'annual_salary' => 'required',
            'highest_qualification' => 'required',
            'notice_period' => 'required',
            'availability' => 'required',
            'availability_date' => 'required',
            'availability_time_from' => 'required',
            'availability_time_to' => 'required',
            'payment_option' => '',
            'sub_payment_option' => '',
            'monthly_rate' => '',
            'hourly_rate' => '',
            'project_rate' => '',
            'resume_headline' => 'required',
            // 'document' => 'required|array',
            // 'document.*' => 'file|mimes:pdf,doc,docx|max:5120'
        ]);

        DB::beginTransaction();

        // Create a new instance of the Hire Request model
        $formData = new InstaHirinOnboard();

        // Set the form data from the validated request
        $formData->name             = $validatedData['name'];
        $formData->contact_details  = $validatedData['contact_details'];
        $formData->email            = $validatedData['email'];
        $formData->current_location = $validatedData['current_location'];
        //$formData->current_location   = isset($validatedData['current_location']) ? $validatedData['current_location'] : '-';
        $formData->skills_description = $validatedData['skills_description'];
        $formData->current_title    = $validatedData['current_title'];
        $formData->experience_year  = $validatedData['experience_year'];
        $formData->experience_month = $validatedData['experience_month'];
        $formData->key_skills = json_decode($validatedData['key_skills']);
        $formData->expert_in = json_decode($validatedData['expert_in']);
        $formData->also_work_with = json_decode($validatedData['also_work_with']);
        $formData->last_company = isset($validatedData['last_company']) ? $validatedData['last_company'] : '-';
        // $formData->company_location = isset($validatedData['company_location']) ? $validatedData['company_location'] : '-';
        $formData->company_location = $validatedData['company_location'];
        $formData->currently_working_here = isset($validatedData['currently_working_here']) ? $validatedData['currently_working_here'] : '-';
        $formData->working_since_date      = $validatedData['working_since_date'];
        $formData->working_since_date2     = isset($validatedData['working_since_date2']) ? $validatedData['working_since_date2'] : '-';
        $formData->annual_salary_currency  = $validatedData['annual_salary_currency'];
        $formData->annual_salary           = $validatedData['annual_salary'];
        $formData->highest_qualification   = $validatedData['highest_qualification'];
        $formData->notice_period           = isset($validatedData['notice_period']) ? $validatedData['notice_period'] : '-';
        $formData->availability            = $validatedData['availability'];
        $formData->availability_date       = $validatedData['availability_date'];
        $formData->availability_time_from  = $validatedData['availability_time_from'];
        $formData->availability_time_to    = $validatedData['availability_time_to'];
        $formData->payment_option          = $validatedData['payment_option'];
        $formData->sub_payment_option      = isset($validatedData['sub_payment_option']) ? $validatedData['sub_payment_option'] : null;
        $formData->monthly_rate            = isset($validatedData['monthly_rate']) ? $validatedData['monthly_rate'] : null;
        $formData->hourly_rate             = isset($validatedData['hourly_rate']) ? $validatedData['hourly_rate'] : null;
        $formData->project_rate            = isset($validatedData['project_rate']) ? $validatedData['project_rate'] : null;
        $formData->resume_headline         = $validatedData['resume_headline'];
        // dd($request->all());
        $formData->save();

        // if ($request->hasFile('document')) {
        //     //echo "here we are";
        //     if (is_array($request->document) && count($request->document) > 0) {
        //         $uploadedDocuments = [];
        //         foreach ($request->document as $document) {
        //             //echo 'Uploading file: ' . $document->getClientOriginalName() . '<br>';
        //             $originalFilename = $document->getClientOriginalName();
        //             $timestamp = time();
        //             $filename = $timestamp . '_' . $originalFilename;
        //             $document->storeAs('bizionic/files', $filename, 'public');
        //             $uploadedDocuments[] = [
        //                 'name' => $originalFilename, // Store the original filename
        //                 'unique_name' => $filename,
        //                 'path' => 'bizionic/images/' . $filename,
        //             ];
        //             // $formData2->insta_hirin_onboard_id = $formData->id;
        //             // $file = $document;
        //             // $filename = $file->getClientOriginalName();
        //             // $file->storeAs('bizionic/images', $filename, 'public');
        //             // $formData2->document = $filename;
        //             // $formData2->save();
        //         }
        //         // Save the uploaded document information in the database
        //         $formData->document = json_encode($uploadedDocuments);
        //         $formData->save();
        //     }
        // }

        // ? Correct code below

        // if ($request->hasFile('document')) {
        //     $uploadedDocuments = [];

        //     foreach ($request->file('document') as $document) {
        //         $originalFilename = $document->getClientOriginalName();
        //         $filename = 'bizionic/images/' . time() . '_' . $originalFilename;
        //         $document->storeAs('bizionic/images', $filename, 'public');

        //         $uploadedDocuments[] = [
        //             'name' => $originalFilename, // Store the original filename
        //             'unique_name' => $filename,
        //             'path' => 'bizionic/images/' . $filename,
        //         ];
        //     }

        //     // Save the uploaded document information in the database
        //     $formData->document = json_encode($uploadedDocuments);
        //     $formData->save();
        // }

        // ?  New code
        if ($request->hasFile('document')) {
            // Create a temporary zip file
            $zipFileName = 'bizionic/images/' . time() . '_documents.zip';
            $zip = new ZipArchive();
            if ($zip->open(storage_path('app/public/' . $zipFileName), ZipArchive::CREATE) === true) {
                foreach ($request->file('document') as $document) {
                    $originalFilename = $document->getClientOriginalName();
                    $filename = 'bizionic/images/' . time() . '_' . $originalFilename;
                    $document->storeAs('bizionic/images', $filename, 'public');
                    // Add the file to the zip archive
                    $zip->addFile(storage_path('app/public/' . $filename), $originalFilename);
                }
                $zip->close();

                // Save the zip file information in the database
                $formData->document = $zipFileName;
                $formData->save();
            }
        }



        DB::commit();

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully']);
    }


    // Jobs Form Controller
    public function applyShow($jobId)
    {
        //dd($jobId);
        $job = Job::find($jobId);
        //dd($job);


        return view('templates.apply-now-form', ['job' => $job]);
    }


    // Time Zone Controller
    public function getTimezones()
    {
        $timezones = TimeZones::all();
        return response()->json($timezones);
    }
}
