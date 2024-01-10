<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Creditrequest;
use App\Models\CompanyKycInformation;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{

    private $userdata;
    private $countrycodes;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userdata = User::where('id', auth()->user()->id)->get();
            $this->countrycodes = Country::all(['name', 'phone']);

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
        // return  $uploadFolder;
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
        return view('dashboard.activity_employer');
    }
}