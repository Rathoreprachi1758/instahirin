<?php

namespace App\Http\Controllers;

use App\Models\AgencyContractorCompany;
use App\Models\AgencyContractorPortfolio;
use App\Models\ComplianceCertificate;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AgencyContractor extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function agencyContractor(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $certificateList = $this->certificate();
        $agencyPortfolios = $this->agencyPortfolio();

        return view('agencyContractor.agency_contractor', compact('certificateList', 'agencyPortfolios'));
    }

    public function certificate()
    {
        return ComplianceCertificate::where('user_id', Auth::id())->get();
    }

    public function agencyPortfolio()
    {
        return AgencyContractorPortfolio::where('user_id', Auth::id())->get();
    }

    public function companyDetails(Request $request)
    {
        $request->validate([
            "company_name" => 'required',
            "company_tagline" => 'required',
            "company_logo" => 'required',
            "company_establishment" => 'required',
            "company_website" => 'required',
            "company_email" => 'required',
            "company_total_employees" => 'required',
            "company_description" => 'required',
            "company_projectSize" => 'required',
            "company_hourly_rate" => 'required',
        ]);
        $agencyContractCompany = new AgencyContractorCompany();

        $agencyContractCompany->company_name = $request->company_name;
        $agencyContractCompany->tagline = $request->company_tagline;
        $agencyContractCompany->logo = $request->company_logo;
        $agencyContractCompany->establishment_date = $request->company_establishment;
        $agencyContractCompany->company_website = $request->company_website;
        $agencyContractCompany->total_employee = $request->company_total_employees;
        $agencyContractCompany->descriptions = $request->company_description;
        $agencyContractCompany->project_size = $request->company_projectSize;
        $agencyContractCompany->project_rate = $request->company_hourly_rate;
        $agencyContractCompany->company_email = $request->company_email;
        $agencyContractCompany->user_id = Auth::id();
        $agencyContractCompany->save();
        return redirect()->route('agencyContractor');
    }

    /**
     * @param Request $request
     * @return null
     */
    public function certificationsForm(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "url" => 'required',
            "attachment" => 'required|mimes:pdf,png,jpg',
        ]);

        if (isset($request->certificate_id)) {
            $complianceCertificate = ComplianceCertificate::find($request->certificate_id);;
        } else {
            $complianceCertificate = new ComplianceCertificate();
        }
        $complianceCertificate->certificate_title = $request->name;
        $complianceCertificate->company_url = $request->url;
        $filename = time() . '_' . $request->file('attachment')->getClientOriginalName();
        $complianceCertificate->certificate = $request->file('attachment')->storeAs('\public\uploads', $filename);
        $complianceCertificate->user_id = Auth::id();
        $complianceCertificate->agency_contractor_companies_id = 1;
        $complianceCertificate->save();
        return $this->certificateList();
    }

    public function certificateList(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $certificateList = $this->certificate();
        return view('agencyContractor.agency_contractor', compact('certificateList'));
    }

    public function complianceCertificate($id)
    {
        $certificate = ComplianceCertificate::find($id);
        return response()->json($certificate);
    }

    public function fileDownload($id)
    {
        $complianceCertificate = ComplianceCertificate::find($id);
        $file = Storage::path($complianceCertificate->certificate);

        return response()->download($file);
    }

    public function editOrDeleteCertificates(Request $request)
    {
        $certificateIds = $request->input('certificate_ids', []);
        $action = $request->input('action');
        if (empty($certificateIds)) {
            return redirect()->back()->with('error', 'Please select at least one certificate.');
        }

        if ($action === 'delete') {
            ComplianceCertificate::whereIn('id', $certificateIds)->delete();
        }
        return view('agencyContractor.agency_contractor');
    }

    public function portfolioSubmit(Request $request)
    {
        if (isset($request->id)) {
            $agencyContractorPortfolio = AgencyContractorPortfolio::find($request->id);
        } else {
            $agencyContractorPortfolio = new AgencyContractorPortfolio();
        }
        $agencyContractorPortfolio->client_name = $request->client_name;
        $agencyContractorPortfolio->client_website = $request->client_website;
        $agencyContractorPortfolio->portfolio_title = $request->portfolio_title;
        $agencyContractorPortfolio->portfolio_service_lines = $request->portfolio_service_lines;
        $agencyContractorPortfolio->portfolio_project_size = $request->portfolio_project_size;
        $agencyContractorPortfolio->portfolio_start_date = $request->portfolio_start_date;
        $agencyContractorPortfolio->portfolio_end_date = $request->portfolio_end_date;
        $agencyContractorPortfolio->portfolio_description = $request->portfolio_description;
        if ($request->videoLink != null) {
            $agencyContractorPortfolio->videoLink = $request->videoLink;
        }
        if ($request->imageUpload != null) {
            $filename = time() . '_' . $request->file('imageUpload')->getClientOriginalName();
            $agencyContractorPortfolio->imageUpload = $request->file('imageUpload')->storeAs('\public\uploads', $filename);
        }
        $agencyContractorPortfolio->privacy = $request->privacy;
        $agencyContractorPortfolio->user_id = Auth::id();
        $agencyContractorPortfolio->save();
        return redirect()->route('agencyContractor');
    }

    public function portfolioDelete(Request $request)
    {
        $portfolioId = $request->id;
        AgencyContractorPortfolio::find($portfolioId)?->delete();
        return redirect()->route('agencyContractor');
    }
}
