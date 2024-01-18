<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Country;
use App\Models\Creditrequest;
use App\Models\CompanyKycInformation;
use App\Models\InstaHirinRequirement;
use App\Models\InstaHirinOnboard;
use App\Models\HireMeApplication;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class profileController extends Controller
{

    private $userdata;
    private $countrycodes;
    private $job_activity;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userdata = User::where('id', auth()->user()->id)->get();
            $this->countrycodes = Country::all(['name', 'phone']);
            $this->job_activity = Job::where('user_id', auth()->id())->pluck('id')->toArray();
            return $next($request);
        });
    }
    public function index()
    {
        return view('dashboard.userinfo', ['userdata' => $this->userdata, 'countryCodes' => $this->countrycodes]);
    }

    public function edituserinfo(Request $request)
    {
        //return $request->all();
        $user = User::find($request->id);
        $user->country_code = $request->country_code;
        $user->mobilenumber = $request->mobilenumber;
        $user->country = $request->country;
        $user->save();
        // return view('dashboard.userinfo',['userdata' => $this->userdata,'countryCodes'=>$this->countrycodes]);
        return redirect()->back()->with('message', 'Contact details updated successfully!');

    }
    public function editnation(Request $request)
    {
        $user = User::find($request->id);
        $user->nationality = $request->nationality;
        $user->save();
        return redirect()->back()->with('message', 'Nationality details updated successfully!');
    }

    public function creditrequest(Request $request)
    {
        return view('dashboard.creditrequest');
    }

    public function creditrequest_submit(Request $request)
    {
        $request->validate([
            'Account_holder_name' => 'required',
            'Account_no' => 'required',
            'Cheque_amount' => 'required',
            'cheque_no' => 'required',
            'issued_bank' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif',
            'checkbox' => 'required',
        ]);
        $credit = new Creditrequest;
        $credit->User_id = Auth::id();
        $credit->account_holder_name = $request->Account_holder_name;
        $credit->account_no = $request->Account_no;
        $credit->cheque_Amount = $request->Cheque_amount;
        $credit->cheque_number = $request->cheque_no;
        $credit->cheque_issuing_bank = $request->issued_bank;
        // $credit->Cheque_image = $request->file;
        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $filename = 'bizionic/credit_request/' . auth()->user()->email . time() . '_' . $file->getClientOriginalName();
            $file->move('bizionic/credit_request/', $filename);
            $credit->Cheque_image = $filename;
        }
        $credit->save();

        return redirect()->back()->with('message', ' credit request updated!');
    }
    public function user_info(Request $request)
    {
        return view('dashboard.kycinfo');
    }
    public function kyc_submit(Request $request)
    {
        $request->validate([
            'Company_Name' => 'required',
            'Licence_number' => 'required|integer|min:8',
            'Date_incorporation' => 'required',
            'Place_incorporation' => 'required',
            'Company_address_line1' => 'required',
            'Company_address_line2' => 'required',
            'beneficiary_owner' => 'required',
            'nationality' => 'required',
            'tax_identification_number' => 'required',
            'sanctionedcountries' => 'required',
            'presencein_sanctioned_Country' => 'required',
            'any_service_provided_in_sactioned_country' => 'required',
            'Scanned_passport' => 'required|image|mimes:jpeg,png,jpg,gif',
            'resident_citizen' => 'required',
            'back_side_copy' => 'required|image|mimes:jpeg,png,jpg,gif',
            'address_proof_copy' => 'required|image|mimes:jpeg,png,jpg,gif',
            'Trade_licence' => 'required|image|mimes:jpeg,png,jpg,gif',
            'other_doc' => 'required|image|mimes:jpeg,png,jpg,gif',
            'FATCA' => 'required|image|mimes:jpeg,png,jpg,gif',
            'w_8BEN_form' => 'required|image|mimes:jpeg,png,jpg,gif',
            'customer_compliance' => 'required|image|mimes:jpeg,png,jpg,gif',
            'agrement_checkbox' => 'required',

        ]);

        // return $request->all();

        $kyc_info = new CompanyKycInformation;
        $kyc_info->Company_Name = $request->Company_Name;
        $kyc_info->User_id = Auth::id();
        $kyc_info->Licence_number = $request->Licence_number;
        $kyc_info->Date_incorporation = $request->Date_incorporation;
        $kyc_info->Place_incorporation = $request->Place_incorporation;
        $kyc_info->Company_address_line1 = $request->Company_address_line1;
        $kyc_info->Company_address_line2 = $request->Company_address_line2;
        $kyc_info->beneficiary_owner = $request->beneficiary_owner;
        $kyc_info->nationality = $request->nationality;
        $kyc_info->tax_identification_number = $request->tax_identification_number;
        $kyc_info->sanctionedcountries = $request->sanctionedcountries;
        $kyc_info->subsidiary_office_sanctioned_Country = $request->presencein_sanctioned_Country;
        $kyc_info->any_service_provided_in_sactioned_country = $request->any_service_provided_in_sactioned_country;
        $kyc_info->resident_citizen = $request->resident_citizen;
        $kyc_info->agrement_checkbox = $request->agrement_checkbox;
        $uploadFolder = 'bizionic/Kyc_info/' . auth()->user()->email;
        if (!File::exists($uploadFolder)) {
            File::makeDirectory($uploadFolder);
        }
        $uploadFields = [
            'Scanned_passport',
            'back_side_copy',
            'address_proof_copy',
            'Trade_licence',
            'other_doc',
            'FATCA',
            'w_8BEN_form',
            'customer_compliance',
        ];

        foreach ($uploadFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = $uploadFolder . '/' . time() . '_' . $file->getClientOriginalName();
                $file->move($uploadFolder, $filename);
                $kyc_info->{$field} = $filename;
            }
            // print_r($field);
        }
        $kyc_info->save();
        return redirect()->back()->with('kyc_msg', ' KYC Request hasbeen updated!');
    }

    public function Employer_activity(Request $request)
    {
        return view('dashboard.activity_employer', ['countryCodes' => $this->countrycodes]);
    }
    public function post_job(Request $request)
    {
        $request->validate([
            'position_title' => 'required',
            'work_mode' => 'required',
            'project_description' => 'required',
            'key_skills' => 'required',
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
        $formData->position_title = $request->position_title;
        $formData->work_mode = $request->work_mode;
        $formData->project_description = $request->project_description;
        $formData->key_skills = $request->key_skills;
        $formData->user_id = Auth::id();
        // $formData->key_skills = json_decode($request->'key_skills']);
        $formData->min_experience = $request->min_experience;
        $formData->max_experience = $request->max_experience;
        $formData->employment_type = $request->employment_type;
        // changes
        $formData->salary_currency_monthly_project = $request->salary_currency_monthly_project;
        $formData->min_salary_monthly_project = $request->min_salary_monthly_project;
        $formData->max_salary_monthly_project = $request->max_salary_monthly_project;
        $formData->salary_currency_yearly = $request->salary_currency_yearly;
        $formData->min_salary_yearly = $request->min_salary_yearly;
        $formData->max_salary_yearly = $request->max_salary_yearly;
        $formData->salary_currency_hourly = $request->salary_currency_hourly;
        $formData->min_salary_hourly = $request->min_salary_hourly;
        $formData->max_salary_hourly = $request->max_salary_hourly;

        $formData->location = $request->location;
        // return $request->'location'];
        $formData->education_qualification = $request->education_qualification;
        $formData->company_name = $request->company_name;
        $formData->company_website = $request->company_website;
        $formData->contact_person = $request->contact_person;
        $formData->email = $request->email;
        $formData->contact_no_country_code = $request->contact_no_country_code;
        $formData->contact_no = $request->contact_no;
        $formData->company_details = $request->company_details;
        $formData->company_address = $request->company_address;

        // Process and store the uploaded file
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = 'bizionic/images/' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('', $filename, 'public');
            $formData->document = $filename;
        }
        // $formData->notify_ai_applicants   = $validatedData['notify_ai_applicants'];
        $formData->notify_ai_applicants = isset($request->notify_ai_applicants) ? 'Yes' : 'No';
        $formData->save();
        //
        $instaRequirement = InstaHirinRequirement::find($formData->id);
        $job = Job::create([
            'title' => $instaRequirement->position_title,
            'work_mode' => $instaRequirement->work_mode,
            'description' => $instaRequirement->project_description,
            // 'key_skills' => $instaRequirement->key_skills,
            'availability' => $instaRequirement->employment_type,
            'ctc_currency' => $instaRequirement->salary_currency_yearly,
            'min_price' => $instaRequirement->min_salary_yearly,
            'max_price' => $instaRequirement->max_salary_yearly,
            // 'salary_period',
            // 'experience',
            'location' => $instaRequirement->location,
            'qualification' => $instaRequirement->education_qualification,
            'company' => $instaRequirement->company_name,
            // hiring timeline
            'prefer_qualification' => $instaRequirement->company_address,
        ]);

        // Transfer skills
        $skills = $instaRequirement->experty()->pluck('id')->toArray();
        $job->keySkills()->attach($skills);

        return redirect()->back()->with('message', ' Job hasbeen Posted!');
    }

    public function my_job_activity(Request $request)
    {
        $myjob = InstaHirinRequirement::where('user_id', Auth::id())->get();
        // return $myjob;
        return view('dashboard.Activity_employer.my_job', ['myjob' => $myjob]);
    }
    public function my_job_Applicants(Request $request)
    {
        // $job_ids = job::where('user_id', Auth::id())->pluck('id');
        // $results = [];
        // foreach ($job_ids as $job_id) {
        //     $myjob_applicants = HireMeApplication::where('job_id', $job_id)->get();
        //     foreach ($myjob_applicants as $myjob_applicant) {
        //         // print_r($myjob_applicant);
        //         $results[] = $myjob_applicant;
        //     }
        // }
        $results = HireMeApplication::whereIn('job_id', $this->job_activity)->get();
        return view('dashboard.Activity_employer.my_job_application', ['results' => $results]);

    }

    public function job_talents(Request $request)
    {
        return view('dashboard.Activity_employer.job_talents');
    }
    public function Instahirin_activity(Request $request)
    {    
        $insta_onboard = InstaHirinOnboard::where('user_id', Auth::id())->get();
        // $insta_onboard = InstaHirinOnboard::where('user_id', auth()->id())
        // ->where('email', 'pavan152@gmail.com')
        // ->first();
        // return $insta_onboard->key_skills;
        return view('dashboard.Activity_employer.instahirin',['insta_onboard'=>$insta_onboard]);
    }
    public function Interviewschedule(Request $request)
    {   
        // $company_details = InstaHirinRequirement::where('user_id', Auth::id())->whereIn('position_title',)->pluck('email','company_name');
        // return $company_details;
        $insta_onboard = InstaHirinOnboard::where('user_id', Auth::id())->get();
        // return 
        // $results = HireMeApplication::whereIn('job_id', $this->job_activity)->pluck('');
        // return $results;
        return view('dashboard.Activity_employer.interview_schedule',['insta_onboard'=>$insta_onboard]);
    }

    public function job_status(Request $request)
    {
        return view('dashboard.Activity_employer.job_status');
    }

    public function job_history(Request $request)
    {
        return view('dashboard.Activity_employer.History');
    }
    public function Hire(Request $request)
    {
        return view('dashboard.Activity_employer.Hire');
    }

}