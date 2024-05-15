@php use Carbon\Carbon; @endphp
<x-header data="profile component"/>
<!-- main content sections -->
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/css/profilestyle.css') }} ">
<link rel="stylesheet" href="{{ asset('css/css/profileresponsive.css') }} ">
<style>
    /* Default text color for buttons */
    .nav-link {
        color: black;
    }

    /* Active state text color */
    .nav-link.active {
        color: white;
    }
</style>
<div class="fr-section">
    <div class="fr-section_detail" style="margin-top: -88px;">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                    <ul>
                        <li>
                            <a href="/profile">User Information</a>
                        </li>
                        <li><a href="/kyc-info" class="active">KYC Information</a></li>
                        <li><a href="/credit-request">Credit Request</a></li>
                    </ul>
                </div>
                <br>
                <div class="custom_tittle">
                    <h4>KYC Application Form</h4>
                </div>
                @if ($kyc)
                    @php
                        $disabled = 'disabled';
                        $submit = 'hidden';
                        $active = 'active';
                    @endphp
                @else
                    @php
                        $disabled = '';
                        $submit = 'submit';
                        $active = '';
                    @endphp
                @endif


                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link active btn-dark" id="pills-individual-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-individual" type="button" role="tab"
                                aria-controls="pills-individual"
                                aria-selected="true">
                            I Am An Individual
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link btn-dark" id="pills-company-tab"
                                data-bs-toggle="pill"
                                style="margin-left: 10px"
                                data-bs-target="#pills-company" type="button" role="tab"
                                aria-controls="pills-company"
                                aria-selected="false">
                            I Own A Company
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    @if ($kyc?->is_approved == 'pending')
                        <div class="alert alert-secondary">
                            <span style="margin-left:330px">Kyc Pending</span>
                        </div>
                    @elseif($kyc?->is_approved == 'approved')
                        <div class="alert alert-success">
                            <span style="margin-left:330px">Kyc Approved</span>
                        </div>
                    @elseif($kyc?->is_approved == 'rejected')
                        <div class="alert alert-danger">
                            <span style="margin-left:330px">Kyc Rejected</span>
                        </div>
                    @elseif($kyc == null)
                        <div class="alert alert-danger">
                            <span>Please complete the KYC form to access all the products and services on the Instahirin platform.</span>
                        </div>
                    @endif


                    <div class="tab-pane fade show active" id="pills-individual" role="tabpanel"
                         aria-labelledby="pills-individual-tab">
                        <form action="{{ route('kyc.submit') }}" method="POST" id="kyc_info"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="individual" value="individual">
                            <div class="kycForm_section">
                                @if (Session::has('kyc_msg'))
                                    <div class="alert alert-success">
                                        <span style="margin-left:330px">{{ Session::get('kyc_msg') }}</span>
                                    </div>
                                @endif
                                @if (Session::has('danger'))
                                    <div class="alert alert-danger">
                                        <span style="margin-left:330px">{{ Session::get('danger') }}</span>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>First Name</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder="First Name"
                                                       name="first_name"
                                                       value="{{ $user->name }}" {{ $disabled }}/>
                                            </div>
                                            @error('first_name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Last Name</strong>
                                            <div class="kycForm_field_info">
                                                <input name="last_name" id="last_name" autocomplete="off"
                                                       placeholder="Last Name"
                                                       value="{{ $kyc?->last_name }}" {{ $disabled }}/>
                                            </div>
                                            @error('last_name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Date of Birth</strong>
                                            <div class="kycForm_field_info">
                                                <input name="dob" id="datepicker1" autocomplete="off"
                                                       value="{{ $kyc?->dob }}" {{ $disabled }}/>
                                            </div>
                                            @error('dob')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Nationality</strong>
                                            <select id="nationality" name="individual_nationality"
                                                    class="form-select" {{ $disabled }}>
                                                <option>Select a country
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Complete Address</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder="Complete Address"
                                                       name="complete_address"
                                                       value="{{ $kyc?->complete_address }}" {{ $disabled }}/>
                                            </div>
                                            @error('complete_address')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>P.O.Box</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder="P.O.Box"
                                                       name="p_o_Box"
                                                       value="{{ $kyc?->p_o_Box }}" {{ $disabled }}/>
                                            </div>
                                            @error('p_o_Box')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Country</strong>
                                            <select id="country" name="country"
                                                    class="form-select"
                                                    onchange="fetchCities()" {{ $disabled }}>
                                                <option value="{{$kyc?->country}}">Select a country
                                                </option>
                                            </select>
                                            @error('country')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>City</strong>
                                            <select id="city" name="city"
                                                    class="form-select" {{ $disabled }}>
                                                <option value="">Select a city
                                                </option>
                                            </select>
                                            @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Country Code</strong>
                                            <select class="form-select small-select" name="country_code"
                                                    id="countryCode">
                                                <option disabled>Country Code</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->phone }}"
                                                            @if($user->country_code == $country->phone) selected @endif>
                                                        {{ $country->phone }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('country_code')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Phone Number</strong>
                                            <input type="number" name="phone" class="form-control"
                                                   id="inputNumber" placeholder="Phone Number"
                                                   value="{{$user?->mobilenumber}}">
                                            @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- kyc upload file section  -->
                            <div class="kycForm_section kwcFileSection">
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Upload your id documents verifying your
                                                personal details*</strong>
                                            <p>
                                                Jpg, png, pdf and gif formats are accepted
                                                with a file size not exceeding 25 MB.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="individual_kycForm_file">
                                                <label class="uploadFile">
                                                    <span
                                                        class="individual_filename">Scanned passport / id copy *</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="Scanned_passport"
                                                           value="{{$kyc?->Scanned_passport }}"
                                                           onchange="previewImageIndividual(this, 'imagePreview1')" {{ $disabled }}/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                @error('Scanned_passport')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview1"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <!-- fatca  select section  -->
                            <div class="kycForm_section">
                                <div class="custom_tittle">
                                    <h4 class="text-uppercase">
                                        FaTCa declaration
                                    </h4>
                                </div>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Are you a us citizen or
                                                resident?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show" name="individual_resident_citizen"
                                                    {{ $disabled }}>
                                                    <option
                                                        value="Yes" {{ $kyc?->resident_citizen === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->resident_citizen === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            <p>(Download the FATCA and W-8BEN forms)</p>
                                        </div>
                                        @error('individual_resident_citizen')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="individual_kycForm_file">
                                                <label class="uploadFile">
                                                    <span class="individual_filename">Upload YOUR FATCA form</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="individual_fatca"
                                                           value="{{ old('FATCA') }}"
                                                           onchange="previewImageIndividual(this, 'imagePreview6')" {{ $disabled }}/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                @error('individual_fatca')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview6"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="individual_kycForm_file">
                                                <label class="uploadFile">
                                                    <span class="individual_filename">Upload YOUR W-8BEN form</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="individual_w_8BEN_form"
                                                           value="{{ old('w_8BEN_form') }}"
                                                           onchange="previewImageIndividual(this, 'imagePreview7')" {{ $disabled }}/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                @error('individual_w_8BEN_form')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview7"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- user  select section  -->
                            <div class="kycForm_section">
                                <div class="custom_tittle">
                                    <h4 class="text-uppercase">
                                        USER COMPLiance declaration
                                    </h4>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Do you remit money from sanctioned
                                                countries?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show"
                                                        name="individual_sanctionedcountries" {{ $disabled }}>
                                                    <option
                                                        value="Yes" {{ $kyc?->sanctionedcountries === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->sanctionedcountries === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            @error('individual_sanctionedcountries')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Do you have subsidiary office or presence
                                                in sanctioned Country?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show"
                                                        name="individual_presencein_sanctioned_Country" {{ $disabled }}>
                                                    <option
                                                        value="Yes" {{ $kyc?->subsidiary_office_sanctioned_Country === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->subsidiary_office_sanctioned_Country === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            @error('individual_presencein_sanctioned_Country')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Do you import/export or provide any
                                                services to sanctioned Entities or
                                                Countries?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show"
                                                        name="individual_any_service_provided_in_sactioned_country"{{ $disabled }}>
                                                    <option
                                                        value="Yes" {{ $kyc?->any_service_provided_in_sactioned_country === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->any_service_provided_in_sactioned_country === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            @error('individual_any_service_provided_in_sactioned_country')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <p>
                                                (Download the customer compliance forms)
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="individual_kycForm_file">
                                                <label class="uploadFile">
                                            <span class="individual_filename">Upload YOUR customer compliance
                                                form</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="individual_customer_compliance"
                                                           onchange="previewImageIndividual(this, 'imagePreview9')" {{ $disabled }}/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                            </div>
                                            @error('customer_compliance')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <div id="imagePreview9"
                                                 style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                <img src="#" alt="Uploaded Image"
                                                     style="max-width: 100%; max-height: 200px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- user  select section  -->
                            <div class="kycForm_section">
                                <div class="agreeSection">
                                    <div class="agreeSection_info">
                                        <div class="auth_text">
                                            <p>
                                                <label class="checkbox-label">
                                                    <input type="checkbox" name="individual_agrement_checkbox"
                                                           value="1" {{ $kyc?->agrement_checkbox ? 'checked' : '' }}/>
                                                    <span class="checkbox-custom rectangular"></span>
                                                </label>
                                                 I agree, and confirm to the best of my knowledge that the information provided in this declaration form is current, accurate and representative of the anti-money laundering and anti-terrorist financing for the 'The Prevention of Money Laundering Act' in the relevant applicable jurisdiction and the regulations thereto: I have submitted evidence of identity and proof of address, dated within the last three months; and I hereby declare that my funds are not as a result of illegal means or activity. I also confirm and authorize letWizard platform to share my information provided in this declaration form to relevant authorities, correspondent and clearing banks and institution, and parties relevant to AML/CFT/KYC Compliance as and when requested.
                                            </p>
                                        </div>
                                        @error('individual_agrement_checkbox')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="customSubmitBtn kycSubmit">
                                        <input type="{{$submit}}" value="Submit" class="btndefault"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-company" role="tabpanel"
                         aria-labelledby="pills-company-tab">
                        <form action="{{ route('kyc.submit') }}" method="POST" id="kyc_info"
                              enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="company" value="company">
                            <div class="kycForm_section">
                                @if (Session::has('kyc_msg'))
                                    <div class="alert alert-success">
                                        <span style="margin-left:330px">{{ Session::get('kyc_msg') }}</span>
                                    </div>
                                @endif
                                @if (Session::has('danger'))
                                    <div class="alert alert-danger">
                                        <span style="margin-left:330px">{{ Session::get('danger') }}</span>
                                    </div>
                                @endif
                                <!-- row 1 -->

                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Company Name (Applicable if you are a
                                                Company)</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder="Enter your Company Name"
                                                       name="Company_Name"
                                                       value="{{ $kyc?->Company_Name }}" {{ $disabled }}/>
                                            </div>
                                            @error('Company_Name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Trade license number *</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder="Enter Trade Licence"
                                                       name="Licence_number"
                                                       value="{{ $kyc?->Licence_number }}" {{ $disabled }}/>
                                            </div>
                                            @error('Licence_number')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- row 2 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Date of incorporation</strong>
                                            <div class="kycForm_field_info">
                                                <input name="Date_incorporation" id="datepicker3" autocomplete="off"
                                                       value="{{ Carbon::parse( $kyc?->Date_incorporation)->format('d/m/Y') }} " {{ $disabled }}/>
                                            </div>
                                            @error('Date_incorporation')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Place of incorporation</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder=" Enter Place of Incorporation"
                                                       name="Place_incorporation"
                                                       value="{{ $kyc?->Place_incorporation }}" {{ $disabled }}/>
                                            </div>
                                            @error('Place_incorporation')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- row 2 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Company Address (line 1)</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder="Address 1"
                                                       name="Company_address_line1"
                                                       value="{{ $kyc?->Company_address_line1 }}" {{ $disabled }}/>
                                            </div>
                                            @error('Company_address_line1')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Company Address (line 2)</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" placeholder="Address 2"
                                                       name="Company_address_line2"
                                                       value="{{ $kyc?->Company_address_line2 }}" {{ $disabled }}/>
                                            </div>
                                            @error('Company_address_line2')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Beneficiary owner</strong>
                                            <div class="kycForm_field_info">
                                                <input type="text" name="beneficiary_owner"
                                                       value="{{ $kyc?->beneficiary_owner }}" {{ $disabled }}/>
                                            </div>
                                            @error('beneficiary_owner')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Nationality</strong>
                                            <select id="company_nationality" name="company_nationality"
                                                    class="form-select" {{ $disabled }}>
                                                <option>Select a country
                                                </option>
                                            </select>
                                        </div>
                                        @error('nationality')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- row 1 -->
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                    <div class="kycForm_field">
                                        <strong>Get/tax Identification Number</strong>
                                        <div class="kycForm_field_info">
                                            <input type="text" placeholder="" name="tax_identification_number"
                                                   value="{{ $kyc?->tax_identification_number }}" {{ $disabled }}/>
                                        </div>
                                        @error('tax_identification_number')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- kyc upload file section  -->
                            <div class="kycForm_section kwcFileSection">
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Upload your id documents verifying your
                                                personal details*</strong>
                                            <p>
                                                Jpg, png, pdf and gif formats are accepted
                                                with a file size not exceeding 25 MB.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="kycForm_file">
                                                <label class="uploadFile">
                                                    <span class="filename">Scanned passport / id copy *</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="Scanned_passport"
                                                           value="{{ old('Scanned_passport') }}"
                                                           onchange="previewImage(this, 'imagePreview10')"/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                @error('Scanned_passport')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview10"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Upload your company trade license</strong>
                                            <p>
                                                Jpg, png, pdf and gif formats are accepted
                                                with a file size not exceeding 25 MB.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="kycForm_file">
                                                <label class="uploadFile">
                                                    <span class="filename">Click to upload</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="Trade_licence"
                                                           value="{{ old('Trade_licence') }}"
                                                           onchange="previewImage(this, 'imagePreview13')"/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                @error('Trade_licence')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview13"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row justify-content-end">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="kycForm_file">
                                                <label class="uploadFile">
                                                    <span class="filename">Other</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="other_doc"
                                                           value="{{ old('other_doc') }}"
                                                           onchange="previewImage(this, 'imagePreview14')"/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                <p>
                                                    (Company MOU, MOA and other documents)
                                                </p>
                                                @error('other_doc')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview14"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- fatca  select section  -->
                            <div class="kycForm_section">
                                <div class="custom_tittle">
                                    <h4 class="text-uppercase">
                                        FaTCa declaration
                                    </h4>
                                </div>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Are you a us citizen or
                                                resident?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show" name="resident_citizen" {{$disabled}}>
                                                    <option
                                                        value="Yes" {{ $kyc?->resident_citizen === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->resident_citizen === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            <p>(Download the FATCA and W-8BEN forms)</p>
                                        </div>
                                        @error('resident_citizen')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="kycForm_file">
                                                <label class="uploadFile">
                                                    <span class="filename">Upload YOUR FATCA form</span>
                                                    <input type="file" class="inputfile form-control" name="FATCA"
                                                           value="{{ old('FATCA') }}"
                                                           onchange="previewImage(this, 'imagePreview15')"/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                @error('FATCA')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview15"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="kycForm_file">
                                                <label class="uploadFile">
                                                    <span class="filename">Upload YOUR W-8BEN form</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="w_8BEN_form"
                                                           value="{{ old('w_8BEN_form') }}"
                                                           onchange="previewImage(this, 'imagePreview16')"/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                                @error('w_8BEN_form')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <div id="imagePreview16"
                                                     style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                    <img src="#" alt="Uploaded Image"
                                                         style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- user  select section  -->
                            <div class="kycForm_section">
                                <div class="custom_tittle">
                                    <h4 class="text-uppercase">
                                        USER COMPLiance declaration
                                    </h4>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Do you remit money from sanctioned
                                                countries?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show" name="sanctionedcountries" {{$disabled}}>
                                                    <option
                                                        value="Yes" {{ $kyc?->sanctionedcountries === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->sanctionedcountries === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            @error('sanctionedcountries')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Do you have subsidiary office or presence
                                                in sanctioned Country?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show" name="presencein_sanctioned_Country">
                                                    <option
                                                        value="Yes" {{ $kyc?->subsidiary_office_sanctioned_Country === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->subsidiary_office_sanctioned_Country === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            @error('presencein_sanctioned_Country')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <strong>Do you import/export or provide any
                                                services to sanctioned Entities or
                                                Countries?*</strong>
                                            <div class="kycForm_select">
                                                <select class="fav_show"
                                                        name="any_service_provided_in_sactioned_country"
                                                        value="{{ old('any_service_provided_in_sactioned_country') }}">
                                                    <option
                                                        value="Yes" {{ $kyc?->any_service_provided_in_sactioned_country === 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>
                                                    <option
                                                        value="No" {{ $kyc?->any_service_provided_in_sactioned_country === 'No' ? 'selected' : '' }}>
                                                        No
                                                    </option>
                                                </select>
                                            </div>
                                            @error('any_service_provided_in_sactioned_country')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <p>
                                                (Download the customer compliance forms)
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <!-- row 1 -->
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                        <div class="kycForm_field">
                                            <div class="kycForm_file">
                                                <label class="uploadFile">
                                            <span class="filename">Upload YOUR customer compliance
                                                form</span>
                                                    <input type="file" class="inputfile form-control"
                                                           name="customer_compliance"
                                                           onchange="previewImage(this, 'imagePreview17')"/>
                                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                                </label>
                                            </div>
                                            @error('customer_compliance')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <div id="imagePreview17"
                                                 style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                <img src="#" alt="Uploaded Image"
                                                     style="max-width: 100%; max-height: 200px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- user  select section  -->
                            <div class="kycForm_section">
                                <div class="agreeSection">
                                    <div class="agreeSection_info">
                                        <div class="auth_text">
                                            <p>
                                                <label class="checkbox-label">
                                                    <input type="checkbox" name="agrement_checkbox"
                                                           value="1" {{ $kyc?->agrement_checkbox ? 'checked' : '' }}/>
                                                    <span class="checkbox-custom rectangular"></span>
                                                </label>
                                                I agree, and confirm to the best of my knowledge that the information provided in this declaration form is current, accurate and representative of the anti-money laundering and anti-terrorist financing for the 'The Prevention of Money Laundering Act' in the relevant applicable jurisdiction and the regulations thereto: I have submitted evidence of identity and proof of address, dated within the last three months; and I hereby declare that my funds are not as a result of illegal means or activity. I also confirm and authorize letWizard platform to share my information provided in this declaration form to relevant authorities, correspondent and clearing banks and institution, and parties relevant to AML/CFT/KYC Compliance as and when requested.
                                            </p>
                                        </div>
                                        @error('agrement_checkbox')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="customSubmitBtn kycSubmit">
                                        <input type="{{$submit}}" value="Submit" class="btndefault"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('css/js/profilepage.js') }}"></script>
<script src="{{ asset('css/js/merge_script.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('css/js/bootstrap.bundle.min.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: "en",
            },
            "google_translate_element"
        );
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<link rel="stylesheet " href="{{ asset('css/css/font-awesome.min.css') }}"/>

<script src="{{ asset('css/js/jquery-3.4.1.min.js') }}"></script>
{{-- // --}}
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>
    $(function () {
        $("#datepicker1").datepicker({
            dateFormat: 'dd-mm-yy',
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:+nn',
        });
    });

    $(function () {
        $("#datepicker2").datepicker({
            dateFormat: 'dd-mm-yy',
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:+nn',
        });
    });

    $(function () {
        $("#datepicker3").datepicker({
            dateFormat: 'dd-mm-yy',
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:+nn',
        });
    });


    function previewImageIndividual(input, previewId) {
        var fileInput = input;
        var filename = fileInput.files[0].name;
        var filenameSpan = input.closest('.individual_kycForm_file').querySelector('.individual_filename');
        var imagePreview = document.getElementById(previewId);

        filenameSpan.textContent = filename;
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.style.display = 'block';
                imagePreview.querySelector('img').src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function previewImage(input, previewId) {
        var fileInput = input;
        var filename = fileInput.files[0].name;
        var filenameSpan = input.closest('.kycForm_file').querySelector('.filename');
        var imagePreview = document.getElementById(previewId);

        filenameSpan.textContent = filename;
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.style.display = 'block';
                imagePreview.querySelector('img').src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    async function fetchCountries(selectedCountry) {
        const response = await fetch('https://restcountries.com/v3.1/all');
        const countries = await response.json();
        const countryDropdown = document.getElementById('country');

        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name.common;
            option.textContent = country.name.common;

            if (selectedCountry && selectedCountry === country.name.common) {
                option.selected = true; // Pre-select the existing country
            }

            countryDropdown.appendChild(option);
        });
    }

    async function fetchIndividualNationality(selectedCountry) {
        const response = await fetch('https://restcountries.com/v3.1/all');
        const countries = await response.json();
        const countryDropdown = document.getElementById('nationality');

        countries.forEach(country => {
            const option = document.createElement('option');
            const countryCode = country.cca2; // Assuming 'cca2' is the country code field in the API response

            option.value = country.name.common;
            option.textContent = country.name.common;

            if (selectedCountry && selectedCountry === country.name.common) {
                option.selected = true; // Pre-select the existing country
            }

            countryDropdown.appendChild(option);
        });
    }

    async function fetchCompanyNationality(selectedCountry) {
        const response = await fetch('https://restcountries.com/v3.1/all');
        const countries = await response.json();
        const countryDropdown = document.getElementById('company_nationality');

        countries.forEach(country => {
            const option = document.createElement('option');
            const countryCode = country.cca2; // Assuming 'cca2' is the country code field in the API response

            option.value = country.name.common;
            option.textContent = country.name.common;

            if (selectedCountry && selectedCountry === country.name.common) {
                option.selected = true; // Pre-select the existing country
            }

            countryDropdown.appendChild(option);
        });
    }

    async function fetchCities() {
        const countryDropdown = document.getElementById('country');
        const countryName = countryDropdown.value;

        console.log(countryName);
        if (!countryName) {
            console.error("No country selected.");
            return;
        }

        try {
            const response = await fetch('https://countriesnow.space/api/v0.1/countries/cities', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    country: countryName
                })
            });

            if (!response.ok) {
                throw new Error(`Failed to fetch cities for ${countryName}`);
            }

            const data = await response.json();
            const cities = data.data; // Assuming data contains an array of city names

            const cityDropdown = document.getElementById('city');
            cityDropdown.innerHTML = ''; // Clear existing options

            cities.forEach(city => {
                const option = document.createElement('option');
                option.value = city;
                option.textContent = city;

                // Check if the city matches the existing city from $kyc->key
                if ("{{ $kyc?->city }}" && city === "{{ $kyc?->city }}") {
                    option.selected = true; // Pre-select the existing city
                }

                cityDropdown.appendChild(option);
            });
        } catch (error) {
            console.error("Error fetching cities:", error);
        }
    }

    // Call the function with the existing nationality value from PHP
    const existingNationality = "{{ $user?->nationality }}";
    fetchIndividualNationality(existingNationality);
    fetchCompanyNationality(existingNationality);

    const existingCountry = "{{ $user?->country }}"; // Assuming $kyc->country contains the existing country name
    fetchCountries(existingCountry);
    fetchNationality();
    fetchCities();

    $(document).ready(function () {
        $('.nav-link').click(function () {
            $('.nav-link').removeClass('active btn-dark').addClass('btn-dark'); // Reset all buttons to default state
            $(this).addClass('active'); // Add active class to clicked button
        });
    });
</script>
