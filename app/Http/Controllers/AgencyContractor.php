<?php

namespace App\Http\Controllers;

use App\Models\AgencyContractorCompany;
use App\Models\AgencyContractorPortfolio;
use App\Models\AgencyService;
use App\Models\AgencySubServices;
use App\Models\ComplianceCertificate;
use App\Models\serviceLine;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class AgencyContractor extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function agencyContractor(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $certificateList = $this->certificate();
        $agencyPortfolios = $this->agencyPortfolio();
        $agencyServices = $this->services();
        $agencySubServices = $this->subServices();
        return view('agencyContractor.agency_contractor', compact('certificateList', 'agencyPortfolios', 'agencyServices', 'agencySubServices'));
    }

    /**
     * @return mixed
     */
    public function certificate(): mixed
    {
        return ComplianceCertificate::where('user_id', Auth::id())->get();
    }

    /**
     * @return mixed
     */
    public function agencyPortfolio(): mixed
    {
        return AgencyContractorPortfolio::where('user_id', Auth::id())->get();
    }

    /**
     * @return Collection
     */
    public function services(): Collection
    {
        return AgencyService::all();
    }

    /**
     * @return Collection
     */
    public function subServices(): Collection
    {
        return AgencySubServices::all();
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function saveServices(Request $request): RedirectResponse
    {
        $serviceLineData = ServiceLine::where('user_id', Auth::id())->first();

        if ($serviceLineData == null) {
            $serviceLine = new ServiceLine();
            $serviceLine->services = json_encode($request->service);
            $serviceLine->user_id = Auth::id();
            $serviceLine->save();
        } else {
            $services = json_decode($serviceLineData->services);
            $newServices = array_diff($request->service, $services);
            if (!empty($newServices)) {
                $updatedServices = array_merge($services, $newServices);
                $serviceLineData->services = json_encode($updatedServices);
                $serviceLineData->save();
            }
        }

        return redirect()->route('agencyContractor');
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function companyDetails(Request $request): RedirectResponse
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
     * @return View|Factory|\Illuminate\Foundation\Application|Application|null
     */
    public function certificationsForm(Request $request): View|Factory|\Illuminate\Foundation\Application|Application|null
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

    /**
     * @return View|\Illuminate\Foundation\Application|Factory|Application
     */
    public function certificateList(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $certificateList = $this->certificate();
        return view('agencyContractor.agency_contractor', compact('certificateList'));
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function complianceCertificate($id): JsonResponse
    {
        $certificate = ComplianceCertificate::find($id);
        return response()->json($certificate);
    }

    /**
     * @param $id
     * @return BinaryFileResponse
     */
    public function fileDownload($id): BinaryFileResponse
    {
        $complianceCertificate = ComplianceCertificate::find($id);
        $file = Storage::path($complianceCertificate->certificate);

        return response()->download($file);
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application|RedirectResponse
     */
    public function editOrDeleteCertificates(Request $request): \Illuminate\Foundation\Application|View|Factory|RedirectResponse|Application
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

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function portfolioSubmit(Request $request): RedirectResponse
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

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function portfolioDelete(Request $request): RedirectResponse
    {
        $portfolioId = $request->id;
        AgencyContractorPortfolio::find($portfolioId)?->delete();
        return redirect()->route('agencyContractor');
    }
}
