<?php

namespace App\Http\Controllers;

use App\Models\AgencyClient;
use App\Models\AgencyContractorCompany;
use App\Models\AgencyContractorPortfolio;
use App\Models\AgencyLocation;
use App\Models\AgencyService;
use App\Models\AgencySpecializationService;
use App\Models\AgencySubServices;
use App\Models\ComplianceCertificate;
use App\Models\Country;
use App\Models\ServiceLine;
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
        $serviceLine = $this->serviceLine();
        $specializationService = $this->specializationServices();
        $agencyClient = $this->agencyClient();
        $agencyLocations = $this->agencyLocation();
        $companyDetails = $this->companyDetails();
        $countries = $this->countries();

        return view('agencyContractor.agency_contractor', compact(
            'certificateList',
            'agencyPortfolios',
            'agencyServices',
            'agencySubServices',
            'serviceLine',
            'specializationService',
            'agencyClient',
            'agencyLocations',
            'companyDetails',
            'countries'
        ));
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
     * @return mixed
     */
    public function serviceLine(): mixed
    {
        return ServiceLine::where('user_id', Auth::id())->first();
    }

    /**
     * @return mixed
     */
    public function specializationServices(): mixed
    {
        return AgencySpecializationService::where('user_id', Auth::id())->first();
    }

    /**
     * @return mixed
     */
    public function agencyClient(): mixed
    {
        return AgencyClient::where('user_id', Auth::id())->first();
    }

    /**
     * @return mixed
     */
    public function agencyLocation(): mixed
    {
        return AgencyLocation::where('user_id', Auth::id())->get();
    }

    /**
     * @return mixed
     */
    public function companyDetails(): mixed
    {
        return AgencyContractorCompany::where('user_id', Auth::id())->get();
    }

    public function countries()
    {
        return Country::all();
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function deleteAgencyLocation(Request $request): RedirectResponse
    {
        $agencyLocation = AgencyLocation::find($request->id);
        $agencyLocation->delete();
        return redirect()->route('agencyContractor');
    }

    public function deleteCompanyDetail(Request $request)
    {
        AgencyContractorCompany::find($request->id)->delete();
        return redirect()->route('agencyContractor');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function agencyLocationSubmit(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'country' => 'required',
                'city' => 'required',
                'branch' => 'required',
                'postal' => 'required',
                'country_code' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'total_employee' => 'required',
            ]
        );

        if (isset($request->locationId)) {
            $agencyLocation = AgencyLocation::find($request->locationId);
        } else {
            $agencyLocation = new AgencyLocation();
        }
        $agencyLocation->country = $request->country;
        $agencyLocation->city = $request->city;
        $agencyLocation->type = $request->branch;
        $agencyLocation->postal_code = $request->postal;
        $agencyLocation->country_code = $request->country_code;
        $agencyLocation->phone_number = $request->phone;
        $agencyLocation->address = $request->address;
        $agencyLocation->total_employee = $request->total_employee;
        $agencyLocation->user_id = Auth::id();
        $agencyLocation->save();
        return redirect()->route('agencyContractor');
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
            $serviceLine->ranges = json_encode($request->ranges);
            $serviceLine->user_id = Auth::id();
            $serviceLine->save();
        } else {
            if (!empty($serviceLineData)) {
                $serviceLineData->services = json_encode($request->service);
                $serviceLineData->ranges = json_encode($request->ranges);
                $serviceLineData->save();
            }
        }
        return redirect()->route('agencyContractor');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function clientUpdate(Request $request): RedirectResponse
    {
        $agencyClient = $this->agencyClient();

        if ($agencyClient == null) {
            $agencyClient = new AgencyClient();
            $agencyClient->smallBusiness = $request->smallBusiness;
            $agencyClient->mediumBusiness = $request->mediumBusiness;
            $agencyClient->enterprise = $request->enterprise;
            $agencyClient->user_id = Auth::id();
            $agencyClient->save();
        } else {
            if (!empty($serviceLineData)) {
                $agencyClient->smallBusiness = $request->smallBusiness;
                $agencyClient->mediumBusiness = $request->mediumBusiness;
                $agencyClient->enterprise = $request->enterprise;

            }
        }
        $agencyClient->save();
        return redirect()->route('agencyContractor');

    }

    /**
     * @param Request $request
     * @return RedirectResponse|void
     */
    public function specializationSubmit(Request $request)
    {
        $specializationServiceData = AgencySpecializationService::where('user_id', Auth::id())->first();
        if ($specializationServiceData == null) {
            $specializationService = new AgencySpecializationService();
            $specializationService->service_id = $request->service;
            $specializationService->sub_services = json_encode($request->specializationService);
            $specializationService->ranges = json_encode($request->ranges);
            $specializationService->user_id = Auth::id();
            $specializationService->save();
        } else {
            if (!empty($specializationServiceData)) {
                $specializationServiceData->service_id = $request->service;
                $specializationServiceData->sub_services = json_encode($request->specializationService);
                $specializationServiceData->ranges = json_encode($request->ranges);
                $specializationServiceData->save();
            }
            return redirect()->route('agencyContractor');
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function companyDetailsSubmit(Request $request): RedirectResponse
    {
        $request->validate(["company_name" => 'required', "company_tagline" => 'required', "company_logo" => 'required', "company_establishment" => 'required', "company_website" => 'required', "company_email" => 'required', "company_total_employees" => 'required', "company_description" => 'required', "company_projectSize" => 'required', "company_hourly_rate" => 'required',]);
        if (isset($request->companyId)) {
            $agencyContractCompany = AgencyContractorCompany::find($request->companyId);
        } else {
            $agencyContractCompany = new AgencyContractorCompany();

        }
        $agencyContractCompany->company_name = $request->company_name;
        $agencyContractCompany->tagline = $request->company_tagline;
        $agencyContractCompany->logo = $request->company_logo;
        $agencyContractCompany->establishment_date = $request->company_establishment;
        $agencyContractCompany->company_website = $request->company_website;
        $agencyContractCompany->total_employee = $request->company_total_employees;
        $agencyContractCompany->descriptions = $request->company_description;
        $agencyContractCompany->project_size = $request->company_projectSize;
        $agencyContractCompany->currency = $request->currency;
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
        $request->validate(["name" => 'required', "url" => 'required', "attachment" => 'required|mimes:pdf,png,jpg',]);

        if (isset($request->certificate_id)) {
            $complianceCertificate = ComplianceCertificate::find($request->certificate_id);
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
        return redirect()->route('agencyContractor');
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
