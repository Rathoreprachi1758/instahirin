<?php

namespace App\Http\Controllers;

use App\Models\HireRequest;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use ZipArchive;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\EmploymentHistory;
use App\Models\Country;
use App\Models\Creditrequest;
use App\Models\Expert;
use App\Models\CompanyKycInformation;
use App\Models\InstaHirinRequirement;
use App\Models\InstaHirinOnboard;
use App\Models\HireMeApplication;
use App\Models\ScheduledInterview;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class profileController extends Controller
{

    /**
     * @var string
     */
    static $X_Tenant = 'ok2@gmail.com';
    /**
     * @var string
     */
    static $HEADER_PASSWORD = 'pwd1';

    /**
     * @var string
     */
    static $EMAIL_API_URL = 'http://ec2-52-66-178-195.ap-south-1.compute.amazonaws.com:8080/NotificationApplication-0.0.1-SNAPSHOT/email/sendfromGmail';

    /**
     * @var string
     */
    static $PHONE_API_URL = 'http://ec2-52-66-178-195.ap-south-1.compute.amazonaws.com:8080/NotificationApplication-0.0.1-SNAPSHOT/sms/multipleMessage';

    /**
     * @var string
     */
    static $CONTENT_TYPE = 'application/json';

    /**
     * @var string
     */
    static $EMAIL_FROM = "letwizard.hyderabad@gmail.com";

    /**
     * @var string
     */
    static $SMTP_API_PASSWORD = "lvfjlnhjniesuncr";


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
            'Account_no' => 'required|regex:/^[0-9]+$/',
            'Cheque_amount' => 'required|regex:/^[0-9]+$/',
            'cheque_no' => 'required|regex:/^[0-9]+$/',
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
        // return $request->all();
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
        $formData->key_skills = json_decode($request->key_skills);
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
        // $formData->notify_ai_applicants   = 'notify_ai_applicants'];
        $formData->notify_ai_applicants = isset($request->notify_ai_applicants) ? 'Yes' : 'No';
        $formData->save();
        //
        // $instaRequirement = InstaHirinRequirement::find($formData->id);
        // $job = Job::create([
        //     'title' => $instaRequirement->position_title,
        //     'work_mode' => $instaRequirement->work_mode,
        //     'description' => $instaRequirement->project_description,
        //     'key_skills' => json_decode($request->key_skills),
        //     'availability' => $instaRequirement->employment_type,
        //     'ctc_currency' => $instaRequirement->salary_currency_yearly,
        //     'min_price' => $instaRequirement->min_salary_yearly,
        //     'max_price' => $instaRequirement->max_salary_yearly,
        //     'salary_period' => $instaRequirement->salary_period,
        //     // 'experience',
        //     'location' => $instaRequirement->location,
        //     'qualification' => $instaRequirement->education_qualification,
        //     'company' => $instaRequirement->company_name,
        //     // hiring timeline
        //     'prefer_qualification' => $instaRequirement->company_address,
        //     'user_id' => Auth::id(),
        // ]);

        // // Transfer skills
        // $skills = $instaRequirement->experty()->pluck('id')->toArray();
        // $job->keySkills()->attach($skills);
        // $skills = $instaRequirement->experty()->get();
        // $job->keySkills()->attach($skills);
        // return json_decode($request->key_skills);
        return redirect()->back()->with('message', ' Job hasbeen Posted!');
    }

    public function my_job_activity(Request $request)
    {
        $myjob = InstaHirinRequirement::where('user_id', Auth::id())->get();
        // $myjob = Job::where('user_id', Auth::id())->get();
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
        // return $this->job_activity;
        return view('dashboard.Activity_employer.my_job_application', ['results' => $results]);

    }

    public function job_talents(Request $request)
    {
        return view('dashboard.Activity_employer.job_talents');
    }

    public function Instahirin_activity(Request $request)
    {
        // $insta_onboard = InstaHirinOnboard::where('user_id', Auth::id())->get();
        // $insta_onboard = HireRequest::where('user_id', Auth::id())->get();
        // dd($insta_onboard);
        $insta_onboard = HireRequest::where('user_id', Auth::id())->with('expert')->get();
        $expertDataArray = [];
        foreach ($insta_onboard as $hireRequest) {
            $expertData = $hireRequest->expertise_talent;
            $expertDataArray[] = $expertData;
        }
        // return gettype($expertDataArray);
        return view('dashboard.Activity_employer.instahirin', ['insta_onboard' => $expertDataArray]);
        // return view('dashboard.Activity_employer.instahirin', ['insta_onboard' => $insta_onboard]);
    }

    public function Interviewschedule(Request $request)
    {
        // $instaOnboard = InstaHirinOnboard::where('user_id', Auth::id())->get();
        //  $instaOnboard = HireRequest::where('user_id', Auth::id())->get();
        // $insta_talent= HireRequest::where('user_id', Auth::id())->with('expert')->get();
        // $instaOnboard = [];
        // foreach ($insta_talent as $hireRequest) {
        //     $expertData = $hireRequest->expertise_talent;
        //     $instaOnboard[] = $expertData;
        // }
        // // return gettype($instaOnboard);
        // $hireMeApplications = HireMeApplication::whereIn('job_id', $this->job_activity)->get()->toArray();
        // // return gettype($hireMeApplications);
        // $insta_onboard = $instaOnboard->concat($hireMeApplications);
        // // return $insta_onboard;
        $insta_talent = HireRequest::where('user_id', Auth::id())->with('expert')->get();

        $instaOnboard = $insta_talent->map(function ($hireRequest) {
            return $hireRequest->expertise_talent;
        })->all();

        $hireMeApplications = HireMeApplication::whereIn('job_id', $this->job_activity)->get()->toArray();

        $combinedData = collect($instaOnboard)->concat($hireMeApplications)->all();
        /////
        //  return $combinedData;
        ///
        $savedData = ScheduledInterview::all();
        // $scedule = $savedData->concat($combinedData);
        $scedule = $savedData->concat($combinedData)->unique(function ($item) {
            return $item['email'];
        });
        // return $scedule;
        $array_data = [];
        foreach ($scedule as $data) {
            $array_data[] = $data;
        }
        // return $array_data; 
        // $scedule = $savedData->concat($insta_onboard);
        // return view('dashboard.Activity_employer.interview_schedule', ['insta_onboard' => $scedule]);
        return view('dashboard.Activity_employer.interview_schedule', ['insta_onboard' => $array_data]);
    }

    public function schedule_interview(Request $request)
    {
        // return $request->all();
        $schedulr_data = new ScheduledInterview();
        $schedulr_data->name = $request->candidate_name;
        $schedulr_data->email = $request->candidate_email;
        $schedulr_data->current_location = $request->candidate_location;
        $schedulr_data->current_title = $request->current_title;
        $schedulr_data->experience_year = $request->experience_year;
        $schedulr_data->availability_date = $request->availability_date;
        $schedulr_data->availability_time_from = $request->availability_time_from;
        $schedulr_data->availability_time_to = $request->availability_time_to;
        $schedulr_data->Meeting_link = $request->Meeting_link;
        $schedulr_data->interviewr = $request->interviewer;
        $schedulr_data->interview_co_ordinator = $request->interview_co_ordinator;
        $schedulr_data->annual_salary = $request->annual_salary;
        $schedulr_data->availability = $request->availability;
        $schedulr_data->notice_period = $request->notice_period;
        $schedulr_data->contact_details = $request->contact_details;
        $schedulr_data->highest_qualification = $request->highest_qualification;
        $schedulr_data->save();
        return redirect()->back()->with('message', ' Meeting link  hasbeen Updated !');
    }

    public function job_status(Request $request)
    {
        $job_status = ScheduledInterview::all();
        return view('dashboard.Activity_employer.job_status', ['job_statuses' => $job_status]);
    }

    public function status_update(Request $request)
    {

        // return $request->all();
        $status_update = ScheduledInterview::find($request->applicant_id);
        $status_update->status = $request->status;
        $status_update->save();
        return redirect()->back()->with('message', ' Status  hasbeen Updated!');
    }

    public function job_history(Request $request)
    {
        return view('dashboard.Activity_employer.History');
    }

    public function Hire(Request $request)
    {
        $Hired_applicants = ScheduledInterview::where('status', 'hired')->get();
        // return 
        return view('dashboard.Activity_employer.Hire', ['Hired_applicants' => $Hired_applicants]);
    }

    //Talent
    public function Employee_activity(Request $request)
    {   
        $InstaHirin_Onboard = InstaHirinOnboard::where('user_id', Auth::id())->get();
        if (count($InstaHirin_Onboard) != '0') {
            return view('dashboard.Activity_employee.activity_employee', ['InstaHirin_Onboard' => $InstaHirin_Onboard, 'userdata' => $this->userdata, 'countryCodes' => $this->countrycodes]);

        }
        return view('dashboard.Activity_employee.activity_employee', ['userdata' => $this->userdata, 'countryCodes' => $this->countrycodes]);
    }

    public function Employee_Resume(Request $request)
    {   
        $request->validate([
            'document' => 'required|mimes:doc,pdf,rtf,docx|max:2048',
        ]);
        
        $filename = null;

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = 'bizionic/images/' . time() . '_' . $file->getClientOriginalName();
            $file->storeAs('', $filename, 'public');
            $formattedDate = now()->format('d-m-Y');
        }
       
        // return $formData;
        // // Set the form data from the validated request
        // $formData->name = 'name';
        // $formData->contact_details = 'contact_details';
        // $formData->email = 'email';
        // $formData->current_location = 'current_location';
        // //$formData->current_location   = isset('current_location']) ? 'current_location'] : '-';
        // $formData->skills_description = 'skills_description';
        // $formData->current_title = 'current_title';
        // $formData->experience_year = 'experience_year';
        // $formData->experience_month = 'experience_month';
        // $formData->key_skills = json_decode('key_skills');
        // $formData->expert_in = json_decode('expert_in');
        // $formData->also_work_with = json_decode('also_work_with');
        // // $formData->last_company = isset('last_company') ? 'last_company': '-';
        // // $formData->company_location = isset('company_location']) ? 'company_location'] : '-';
        // $formData->company_location = 'company_location';
        // // $formData->currently_working_here = isset('currently_working_here') ? 'currently_working_here' : '-';
        // // $formData->working_since_date = 'working_since_date';
        // // $formData->working_since_date2 = isset('working_since_date2') ? 'working_since_date2' : '-';
        // // $formData->annual_salary_currency = 'annual_salary_currency'];
        // $formData->annual_salary = 'annual_salary';
        // $formData->highest_qualification = 'highest_qualification';
        // // $formData->notice_period = isset('notice_period') ? 'notice_period' : '-';
        // $formData->availability = 'availability';
        // $formData->availability_date = 'availability_date';
        // $formData->availability_time_from = 'availability_time_from';
        // $formData->availability_time_to = 'availability_time_to';
        // $formData->payment_option = 'payment_option';
        // // $formData->sub_payment_option = isset('sub_payment_option') ? 'sub_payment_option': null;
        // // $formData->monthly_rate = isset('monthly_rate') ? 'monthly_rate' : null;
        // // $formData->hourly_rate = isset('hourly_rate') ? 'hourly_rate' : null;
        // // $formData->project_rate = isset('project_rate') ? 'project_rate' : null;
        // $formData->resume_headline = 'resume_headline';
        // $formData->user_id = Auth::id();
        // $formData->save();

        //return view('dashboard.Activity_employee.activity_employee');
        // if ($request->hasFile('file')) {
        //     // Create a temporary zip file
        //     $zipFileName = 'bizionic/images/' . time() . '_documents.zip';
        //     $zip = new ZipArchive();
        //     if ($zip->open(storage_path('app/public/' . $zipFileName), ZipArchive::CREATE) === true) {
        //         foreach ($request->file('file') as $document) {
        //             $originalFilename = $document->getClientOriginalName();
        //             $filename = 'bizionic/images/' . time() . '_' . $originalFilename;
        //             $document->storeAs('', $filename, 'public');
        //             // Add the file to the zip archive
        //             $zip->addFile(storage_path('app/public/' . $filename), $originalFilename);
        //         }
        //         $zip->close();
        //         // Save the zip file information in the database
        //         $formData->document = $zipFileName;
        //         $formData->save();

        //     }

        return redirect()->back()->with('message', ' Resume hasbeen Uploaded!');
    }

    public function Employee_headline_update(Request $request)
    {
        $request->validate([
            'Resume_headline' => 'required|min:6',
        ]);
        $userId = Auth::id();
        $headline = $request->input('Resume_headline');
        $formData = InstaHirinOnboard::updateOrCreate(
            ['user_id' => $userId],
            ['resume_headline' => $headline],
        );
        return redirect()->back()->with('message', 'Resume Headline Uploaded!');
    
    }

    public function Employee_skills_update(Request $request)
    {
        return $request->all();
    }

    public function Employee_Resume_employement(Request $request)
    {   

    
        return $request->all();
        /////EmploymentHistory/////pending
        // $request->validate([
        //     'Position_title' => 'required|min:6',
        //     'company_name' => 'required|min:6',
        //     'work_mode' => 'required',
        //     'from_date' => 'required|min:6',
        //     'to_date' => 'required|min:6',
        //     'discription' => 'required|max:160',
        //     'Notice_Period' => 'required',
        // ]);
        // $userId = Auth::id();
        // $formData = InstaHirinOnboard::updateOrCreate(
        //     ['user_id' => $userId],
        //     ['current_title' => $request->Position_title,
        //     'working_since_date'=> $request->from_date,
        //     'working_since_date2'=> $request->from_date,
        //     'last_company' =>  $request->company_name,
        //     'availability' =>  $request->work_mode,
        //     'skills_description' =>  $request->discription,
        //     'notice_period' =>  $request->Notice_Period],
        // );
        // return redirect()->back()->with('message', 'Employement details Uploaded!');
    }

    public function Employee_Resume_graduation(Request $request)
    {
        // return $request->all();
        $request->validate([
            'highest_qualification' => 'required',
            'collage_name' => 'required|min:4',
            'course_name' => 'required',
            'education_mode' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);
        $userId = Auth::id();
        $from_date1 = date_format(new DateTime($request->from_date), 'd-m-Y');
        $todat2e = date_format(new DateTime($request->to_date), 'd-m-Y');
        $formData = InstaHirinOnboard::updateOrCreate(
            ['user_id' => $userId],
            ['highest_qualification' => $request->highest_qualification,
                'collage_name' => $request->collage_name,
                'discription' => $request->course_name,
                'education_mode' => $request->education_mode,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date],
        );
        return redirect()->back()->with('message', 'Education details Uploaded!');
    }

    public function Employee_Resume_secondary(Request $request)
    {
        // return $request->all();
        $request->validate([
            'highest_qualification2' => 'required',
            'course_name2' => 'required',
            'college_name2' => 'required',
            'work_mode2' => 'required',
            'from_date2' => 'required',
            'to_date2' => 'required',
        ]);
        $userId = Auth::id();
        $from_date = date_format(new DateTime($request->from_date2), 'd-m-Y');
        $todate = date_format(new DateTime($request->to_date2), 'd-m-Y');
        $formdata = InstaHirinOnboard::updateOrCreate(
            ['user_id' => $userId],
            [
                'secondary_qualification' => $request->highest_qualification2,
                'course_name2' => $request->course_name2,
                'college_name2' => $request->college_name2,
                'work_mode2' => $request->work_mode2,
                'from_date2' => $from_date,
                'to_date2' => $todate,

            ],
        );
        return redirect()->back()->with('message', 'Education details Uploaded!');
    }
    
    public function Employee_Resume_personal_info(Request $request)
    {
        // return $request->all();
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'Total_work_experience' => 'required',
            'country_code' => 'required',
            'Mobile_number' => 'required',
            'Availability' => 'required',
            'location' => 'required',
            'Home_town' => 'required',
            'work_permit' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
        ]);
        $userId = Auth::id();
        $formattedDate = date_format(new DateTime($request->dob), 'd-m-Y');
        // return $formattedDate;
        $formdata = InstaHirinOnboard::updateOrCreate(
            ['user_id' => $userId],
            [
                'name' => $request->full_name,
                'email' => $request->email,
                'dob' => $formattedDate,
                'contact_details' => $request->country_code . $request->Mobile_number,
                'experience_year' => $request->Total_work_experience,
                'availability' => $request->Availability,
                'current_location' => $request->location,
                'Home_town' => $request->Home_town,
                'work_permit' => $request->work_permit,
                'nationality' => $request->nationality
            ],
        );
        return redirect()->back()->with('message', 'Personal details Updated!');
        
    }

    public function Employee_Resume_delete($id)
    {    
        $instaHirin = InstaHirinOnboard::findOrFail($id);
        if ($instaHirin->document) {
            \Storage::disk('public')->delete($instaHirin->document);
            $instaHirin->document = null;
        }
        $instaHirin->save();
        return redirect()->back()->with('message', ' Resume hasbeen Deleted!');
    }

    public function emp_favorates(Request $request)
    {
        return view('dashboard.Activity_employee.favourite');
    }

    public function Applied_jobs(Request $request)
    {
        return view('dashboard.Activity_employee.Appliedjobs');
    }

    public function schedule_interview_calander(Request $request)
    {
        return view('dashboard.Activity_employee.intervieweschedule');
    }

    public function employee_offers(Request $request)
    {
        return view('dashboard.Activity_employee.offers');
    }

    public function employee_History(Request $request)
    {
        return view('dashboard.Activity_employee.History');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function emailVerify(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $userEmail = $request->email;
        $token = rand(1000, 9999);
        $hashedToken = md5($token);

        Session::put('emailToken', ['value' => $hashedToken, 'expires_at' => now()->addMinutes(10)]);
        Session::put('email', $userEmail);

        $response = Http::withHeaders([
            'X-Tenant' => self::$X_Tenant,
            'Password' => self::$HEADER_PASSWORD,
            'Content-Type' => self::$CONTENT_TYPE,
        ])->post(self::$EMAIL_API_URL, [
            "multipleRecepients" => [$userEmail],
            "msgBody" => "Your OTP for email verification is " . $token . ". The OTP will expire in 10 minutes.",
            "subject" => "Verify Email",
            "from" => self::$EMAIL_FROM,
            "smtpAPIpassord" => self::$SMTP_API_PASSWORD
        ]);
        if ($response->status() == 200) {
            return redirect()->back()->with('message', ' OTP has been sent!');
        } else {
            return redirect()->back()->with('danger', ' OTP Not sent!');
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function phoneVerify(Request $request): RedirectResponse
    {
        $request->validate([
            'phone' => 'required|min:10'
        ]);
        $phoneNumber = $request->phone;
        $token = rand(1000, 9999);
        $hashedToken = md5($token);
        Session::put('phoneToken', ['value' => $hashedToken, 'expires_at' => now()->addMinutes(10)]);
        Session::put('phoneNumber', $phoneNumber);

        $response = Http::withHeaders([
            'Content-Type' => self::$CONTENT_TYPE,
            'X-Tenant' => self::$X_Tenant,
            'Password' => self::$HEADER_PASSWORD,
        ])->post(self::$PHONE_API_URL, [
            "multiplePhones" => [$phoneNumber],
            "messagebody" => "Your OTP for phone verification is " . $token . ". The OTP will expire in 10 minutes."
        ]);

        if ($response->status() == 200) {
            return redirect()->back()->with('message', ' OTP has been sent!');
        } else {
            return redirect()->back()->with('danger', ' OTP Not sent!');
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function verifyOtp(Request $request): RedirectResponse
    {
        $otp = $request->firstNumber . $request->secondNumber . $request->thirdNumber . $request->fourthNumber;
        $verificationType = $request->verificationType;
        $userId = $request->userId;

        if (empty($otp)) {
            return redirect()->back()->with('danger', 'Please Enter OTP');
        }

        $user = User::find($userId);
        $correctOtp = Session::get($verificationType);

        if (empty($correctOtp) || now()->gt($correctOtp['expires_at']) || md5($otp) !== $correctOtp['value']) {
            return redirect()->back()->with('danger', now()->gt($correctOtp['expires_at']) ? 'Otp Expire' : 'Incorrect OTP!');
        }

        if ($user) {
            $email = Session::get('email');
            $phoneNumber = Session::get('phoneNumber');

            if ($email != null) {
                $user->company_email = $email;
            }
            if ($phoneNumber != null) {
                $user->company_phone_number = $phoneNumber;
            }
            $user->save();
        }
        Session::forget('phoneNumber');
        Session::forget('email');

        return redirect()->back()->with('message', 'OTP Verify Successfully!');
    }

    public function master_company(Request $request)
    {
        return view('dashboard.master.master');
    }

    public function master_department(Request $request)
    {
        return view('dashboard.master.department');
    }

    public function emp_master(Request $request)
    {
        return view('dashboard.master.employee_master');
    }
    public function master_designation(Request $request)
    {
        return view('dashboard.master.designation');
    }

    public function master_shift(Request $request)
    {
        return view('dashboard.master.shift_master_daily');
    }

    public function master_category(Request $request)
    {
        return view('dashboard.master.category');
    }

    public function master_data(Request $request)
    {
        return view('dashboard.master.Import');
    }

    public function master_config(Request $request)
    {
        return view('dashboard.master.employee_configuration');
    }

    public function master_leave(Request $request)
    {
        return view('dashboard.master.leave');
    }

    public function master_holiday(Request $request)
    {
        return view('dashboard.master.Holiday');
    }
}