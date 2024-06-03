<x-header data="offers component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .error-message {
        color: red;
    }

    .sub-service-button {
        display: inline-block;
        padding: 5px 10px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
    }

    .checked-label {
        color: #fff;
        /* Change the text color to white */
        background-color: #6c757d;
        /* Change the background color to btn-secondary */
        padding: 5px 10px;
        /* Adjust padding as needed */
        border-radius: 5px;
        /* Add border radius for rounded corners */
    }

    .select.sub-service input[type="checkbox"] {
        display: none;
        /* Hide the checkboxes initially */
    }

    .range-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .range-label {
        margin-right: 10px;
    }

    .form-range {
        flex: 1;
    }

    .range-value-box {
        display: inline-block;
        width: 40px;
        /* Adjust width as needed */
        height: 40px;
        /* Adjust height as needed */
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        line-height: 40px;
        margin-left: 10px;
        /* Adjust margin as needed */
    }

    .selected-sub-service {
        display: inline-block;
        background-color: #f0f0f0;
        padding: 5px 10px;
        margin-right: 10px;
        margin-bottom: 5px;
        border-radius: 5px;
    }

    .remove-sub-service {
        margin-left: 5px;
        cursor: pointer;
    }

    .btn-group {

        .select {
            position: relative;

            input:checked+label {
                background-color: #b0b0b0;

                &:hover,
                &:focus,
                &:active {
                    background-color: #b0b0b0;
                }
            }

            input {
                opacity: 0;
                position: absolute;
            }

            .button_select {
                margin: 0 10px 10px 0;
                display: flex;
                background-color: transparent;

                &:hover,
                &:focus,
                &:active {
                    background-color: transparent;
                }
            }
        }

    }


    .option {
        position: relative;

        input {
            opacity: 0;
            position: absolute;
        }

        input:checked+span {
            background-color: #ffc107;

            &:hover,
            &:focus,
            &:active {
                background-color: #ffc107;
            }
        }

        .btn-option {
            margin: 0 10px 10px 0;
            display: flex;
            background-color: transparent;

            &:hover,
            &:focus,
            &:active {
                background-color: transparent;
            }
        }
    }

    .bordered-container {
        border: 1px solid #000;
        /* Border style */
        padding: 10px;
        /* Padding for inner content */
    }

    .row {
        display: flex;
    }

    .col-6 {
        flex: 1;
        padding: 10px;
    }

    #preview {
        max-width: 100%;
        max-height: 200px;
        margin-top: 10px;
    }

    .transition-screen {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
    }

    .btn {
        margin-right: 10px;
    }

    .small-select {
        width: 50px !important;
        /* Adjust the width as needed */
        height: 38px;
        /* Adjust the height as needed */
        font-size: 12px;
        /* Adjust the font size as needed */
    }

    .leave_button_bg,
    .leave_button_bg2 {
        background-color: #Fff !important;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        padding: 16px 20px;
        font-size: 14px;
        position: relative;
        border: none !important;
        color: #495057;
        border-radius: 5px;
    }

    .leave_button_bg2 {
        position: relative;
        left: 10px !important;
    }

    .leave_button_bg:hover {
        border: none;
    }

    .nav-tabs {
        border-bottom: none !important;
    }

    .tab-content {
        background-color: #Fff !important;
        border-radius: 10px;


    }

    .track-form {
        padding: 25px !important;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .nav-link {

        color: #000;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #343A40;
    }



    .card_portfoiio {
        width: 100%;
        height: auto !important;
        margin-top: 10px;
        border: 1px solid #e1e1e3;
        border-radius: 10px;
    }

    .card_portfoiio2 {
        width: 100%;
        height: auto !important;
        margin-top: 10px;
        border: 1px solid #e1e1e3;
        border-radius: 10px;
        padding-bottom: 61px;
    }




    .card_portfoiio_header {
        width: 100%;
        height: 200px;
        position: relative;
    }


    .card_portfoiio_header img {
        width: 100% !important;
        height: 100% !important;
        position: relative;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    .card_portfoiio_body {
        width: 100%;
        height: auto;
        position: relative;
        background-color: #343A40;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .card_portfoiio_body p {
        color: #fff;
        font-size: 14px;
        text-align: center;
        padding-top: 20px;
    }

    .card_portfolio_plus_card {
        text-align: center;

    }


    .bill-card a {
        text-decoration: none;
        color: #063a6b !important;
    }

    .bill-card-txt {
        font-size: 20px;
        color: #063a6b !important;
        font-weight: 500;
    }

    .bill-card-icon {
        font-size: 25px;
        color: #343A40;
    }

    .card_portfolio_margin_top {
        padding-top: 110px;
        position: relative;
    }

</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="container-fluid">

            <div style="font-size:22px;font-weight:600;margin-bottom:3px;">Time Tracking</div>
            <div style="font-size:16px;font-weight:500;margin-bottom:15px"><b>Description:</b> To monitor the
                timekeeping
                records of employees within their respective companies.</div>

            <div class="dashboard_innerPages">
                <div class="custom_tabs_section">
                    <div class="custom_tabs">
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">Company
                                        Information
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">
                                        Messages
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <div class="custom_tabs_data" style="display: block" id="tab5">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                                    role="tab" aria-controls="pills-home" aria-selected="true"
                                                    style="font-size:14px;background-color:#343A40;color:#Fff;">Company
                                                    Details
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-profile" type="button" role="tab"
                                                    aria-controls="pills-profile" aria-selected="false"
                                                    style="font-size:14px;">Locations
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-service-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-service" type="button" role="tab"
                                                    aria-controls="pills-service" aria-selected="false"
                                                    style="font-size:14px;">Service Lines
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-portfolio-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-portfolio" type="button" role="tab"
                                                    aria-controls="pills-portfolio"
                                                    aria-selected="false"style="font-size:14px;">Portfolio
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-specializations-tab"
                                                    data-bs-toggle="pill" data-bs-target="#pills-specializations"
                                                    type="button" role="tab"
                                                    aria-controls="pills-specializations" aria-selected="false"
                                                    style="font-size:14px;">
                                                    Specializations
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-contact" type="button" role="tab"
                                                    aria-controls="pills-contact"
                                                    aria-selected="false"style="font-size:14px;">Compliance &
                                                    Certifications
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab" tabindex="0">
                                            <div class="container">
                                                <div class="row track-form">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                                        <div class="">

                                                            <form action="{{ route('companyDetailsSubmit') }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Company
                                                                            Name</label>
                                                                        <input type="text" class="form-control"
                                                                            name="company_name"
                                                                            placeholder="Company Name"
                                                                            aria-label="Company Name"
                                                                            class="form-control"
                                                                            style="height: 50px;">
                                                                    </div>


                                                                    <div class="col">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Tagline</label>
                                                                        <input type="text" class="form-control"
                                                                            name="company_tagline"
                                                                            placeholder="Tagline" aria-label="Tagline"
                                                                            class="form-control"
                                                                            style="height: 50px;">
                                                                    </div>

                                                                    <div class="col">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Logo</label>



                                                                        <input type="file" id="myfile"
                                                                            name="myfile" class="form-control"
                                                                            name="company_logo" id="inputGroupFile01"
                                                                            style="height:50px;">


                                                                    </div>

                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Establishment
                                                                            Date</label>
                                                                        <input type="date" class="form-control"
                                                                            placeholder="First name"
                                                                            name="company_establishment"
                                                                            aria-label="First name"
                                                                            class="form-control"
                                                                            style="height: 50px;">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Company
                                                                            Website</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="www" name="company_website"
                                                                            aria-label="Last name"
                                                                            class="form-control"
                                                                            style="height: 50px;">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Sales
                                                                            Email</label>
                                                                        <input type="email" class="form-control"
                                                                            placeholder="Email" name="company_email"
                                                                            aria-label="email" class="form-control"
                                                                            style="height: 50px;">
                                                                    </div>
                                                                    <div class="col">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Total
                                                                            Employees</label>
                                                                        <select class="form-select"
                                                                            name="company_total_employees"
                                                                            id="autoSizingSelect"
                                                                            style="height: 50px;"
                                                                            class="from-control">
                                                                            <option selected>Choose...</option>
                                                                            <option value="0-49">0-49</option>
                                                                            <option value="50-249">50-249</option>
                                                                            <option value="250-999">250-999</option>
                                                                            <option value="1000-9999">1000-9999
                                                                            </option>
                                                                            <option value="10000+">10000+</option>
                                                                        </select>
                                                                    </div>

                                                                    <div
                                                                        class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label"
                                                                            style="font-size: 14px;">Descriptions</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="company_description" rows="3"
                                                                            style="height: 130px;"></textarea>
                                                                    </div>

                                                                    <div class="row mt-3">
                                                                        <label for="exampleFormControlTextarea1"
                                                                            class="form-label fa-2x">Project
                                                                            Information</label>
                                                                        <div class="col">
                                                                            <label for="exampleFormControlTextarea1"
                                                                                class="form-label"
                                                                                style="font-size: 14px;">Minimum
                                                                                Project
                                                                                Size</label>
                                                                            <select class="form-select"
                                                                                name="company_projectSize"
                                                                                id="autoSizingSelect"
                                                                                class="form-control"
                                                                                style="height: 50px;">
                                                                                <option selected>Choose...</option>
                                                                                <option value="1000">1,000+</option>
                                                                                <option value="5000">5,000+</option>
                                                                                <option value="25000">25,000+</option>
                                                                                <option value="50000">50,000+</option>
                                                                                <option value="100000">100,000+
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col">
                                                                            <label for="exampleFormControlTextarea1"
                                                                                class="form-label"
                                                                                style="font-size: 14px;">Average Hourly
                                                                                Rates</label>
                                                                            <div class="input-group">
                                                                                <select
                                                                                    class="form-select small-select"
                                                                                    name="currency" id="currency"
                                                                                    class="form-control"
                                                                                    style="height: 50px;">
                                                                                    @isset($countries)
                                                                                        @foreach ($countries as $country)
                                                                                            <option
                                                                                                value="{{ $country->currency }}">
                                                                                                {{ $country->currency }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    @endisset
                                                                                </select>
                                                                                <select class="form-select"
                                                                                    name="company_hourly_rate"
                                                                                    id="autoSizingSelect">
                                                                                    <option selected>Choose...</option>
                                                                                    <option value="< 25">
                                                                                        < 25</option>
                                                                                    <option value="25-49">25-49
                                                                                    </option>
                                                                                    <option value="50-99">50-99
                                                                                    </option>
                                                                                    <option value="100-149">100-149
                                                                                    </option>
                                                                                    <option value="150-199">150-199
                                                                                    </option>
                                                                                    <option value="200-300">200-300
                                                                                    </option>
                                                                                    <option value="300">300+
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mt-4">
                                                                    <button type="submit" class="btn"
                                                                        style="padding: 12px 30px;background-color:#343A40;color:#fff;
                                                                        ">Submit</button>
                                                                </div>
                                                            </form>







                                                        </div>
                                                    </div>





                                                    {{-- <table class="table table-striped mt-5">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6>Company Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Tagline</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Logo</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Establishment Date</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Company Website</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Sales Email</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Total Employee</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Descriptions</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Minimum Project Size</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Average Hourly Rates</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($companyDetails)
                                                                @foreach ($companyDetails as $companyDetail)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->company_name }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->tagline }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->logo }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->establishment_date }}
                                                                                </p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->company_website }}
                                                                                </p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->company_email }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->total_employee }}
                                                                                </p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->descriptions }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $companyDetail?->project_size }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $country->currency }}
                                                                                    {{ $companyDetail?->project_rate }}</p>
                                                                            </div>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <button class="btn btn-primary editBtn"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#editModal{{ $companyDetail->id }}"
                                                                                    data-id="{{ $companyDetail->id }}">
                                                                                    Edit
                                                                                </button>
                                                                                <div class="tabletext">
                                                                                    <a href="{{ route('deleteCompanyDetail', ['id' => $companyDetail->id]) }}"
                                                                                        class="btn btn-danger">Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <div class="modal fade"
                                                                            id="editModal{{ $companyDetail->id }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="editModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="editModalLabel">Edit Agency
                                                                                            Location</h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <form id="editForm"
                                                                                        action="{{ route('companyDetailsSubmit') }}"
                                                                                        method="post">
                                                                                        @csrf
                                                                                        <div class="modal-body">
                                                                                            <div class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <input type="hidden"
                                                                                                        name="companyId"
                                                                                                        value="{{ $companyDetail->id }}">
                                                                                                    <div class="col">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label">Company
                                                                                                            Name</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            name="company_name"
                                                                                                            placeholder="Company Name"
                                                                                                            value="{{ $companyDetail?->company_name }}"
                                                                                                            aria-label="Company Name">
                                                                                                    </div>
                                                                                                    <div class="col">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label">Tagline</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            name="company_tagline"
                                                                                                            placeholder="Tagline"
                                                                                                            value="{{ $companyDetail?->tagline }}"
                                                                                                            aria-label="Tagline">
                                                                                                    </div>
                                                                                                    <div class="col">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label">Logo</label>
                                                                                                        <div
                                                                                                            class="input-group mb-3">
                                                                                                            <input
                                                                                                                type="file"
                                                                                                                class="form-control"
                                                                                                                name="company_logo"
                                                                                                                value="{{ $companyDetail?->logo }}"
                                                                                                                id="inputGroupFile01">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row mt-3">
                                                                                                    <div class="col-3">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label">Establishment
                                                                                                            Date</label>
                                                                                                        <input
                                                                                                            type="date"
                                                                                                            class="form-control"
                                                                                                            placeholder="First name"
                                                                                                            name="company_establishment"
                                                                                                            value="{{ $companyDetail?->establishment_date }}"
                                                                                                            aria-label="First name">
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label">Company
                                                                                                            Website</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="www"
                                                                                                            name="company_website"
                                                                                                            value="{{ $companyDetail?->company_website }}"
                                                                                                            aria-label="Last name">
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label">Sales
                                                                                                            Email</label>
                                                                                                        <input
                                                                                                            type="email"
                                                                                                            class="form-control"
                                                                                                            placeholder="Email"
                                                                                                            name="company_email"
                                                                                                            value="{{ $companyDetail?->company_email }}"
                                                                                                            aria-label="email">
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label">Total
                                                                                                            Employees</label>
                                                                                                        <select
                                                                                                            class="form-select"
                                                                                                            name="company_total_employees"
                                                                                                            id="autoSizingSelect">
                                                                                                            <option
                                                                                                                value="0-49"
                                                                                                                {{ $companyDetail->total_employee === '0-49' ? 'selected' : '' }}>
                                                                                                                0-49
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="50-249"
                                                                                                                {{ $companyDetail->total_employee === '50-249' ? 'selected' : '' }}>
                                                                                                                50-249
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="250-999"
                                                                                                                {{ $companyDetail->total_employee === '250-999' ? 'selected' : '' }}>
                                                                                                                250-999
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="1000-9999"
                                                                                                                {{ $companyDetail->total_employee === '1000-9999' ? 'selected' : '' }}>
                                                                                                                1000-9999
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="10000+"
                                                                                                                {{ $companyDetail->total_employee === '10000+' ? 'selected' : '' }}>
                                                                                                                10000+
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <div class="row mt-3">
                                                                                                        <div
                                                                                                            class="mb-3">
                                                                                                            <label
                                                                                                                for="exampleFormControlTextarea1"
                                                                                                                class="form-label">Descriptions</label>
                                                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="company_description" rows="3">{{ $companyDetail->descriptions ?? '' }}</textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row mt-3">
                                                                                                        <label
                                                                                                            for="exampleFormControlTextarea1"
                                                                                                            class="form-label fa-2x">Project
                                                                                                            Information</label>
                                                                                                        <div
                                                                                                            class="col">
                                                                                                            <label
                                                                                                                for="exampleFormControlTextarea1"
                                                                                                                class="form-label">Minimum
                                                                                                                Project
                                                                                                                Size</label>
                                                                                                            <select
                                                                                                                class="form-select"
                                                                                                                name="company_projectSize"
                                                                                                                id="autoSizingSelect">
                                                                                                                <option
                                                                                                                    value=""
                                                                                                                    {{ $companyDetail->project_size === null ? 'selected' : '' }}>
                                                                                                                    Choose...
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="1000"
                                                                                                                    {{ $companyDetail->project_size == 1000 ? 'selected' : '' }}>
                                                                                                                    1,000+
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="5000"
                                                                                                                    {{ $companyDetail->project_size == 5000 ? 'selected' : '' }}>
                                                                                                                    5,000+
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="25000"
                                                                                                                    {{ $companyDetail->project_size == 25000 ? 'selected' : '' }}>
                                                                                                                    25,000+
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="50000"
                                                                                                                    {{ $companyDetail->project_size == 50000 ? 'selected' : '' }}>
                                                                                                                    50,000+
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="100000"
                                                                                                                    {{ $companyDetail->project_size == 100000 ? 'selected' : '' }}>
                                                                                                                    100,000+
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col">
                                                                                                            <label
                                                                                                                for="exampleFormControlTextarea1"
                                                                                                                class="form-label">Average
                                                                                                                Hourly
                                                                                                                Rates</label>
                                                                                                            <div
                                                                                                                class="input-group">
                                                                                                                <select
                                                                                                                    class="form-select small-select"
                                                                                                                    name="currency"
                                                                                                                    id="currency">
                                                                                                                    @isset($countries)
                                                                                                                        @foreach ($countries as $country)
                                                                                                                            <option
                                                                                                                                value="{{ $country->currency }}">
                                                                                                                                {{ $country->currency }}
                                                                                                                            </option>
                                                                                                                        @endforeach
                                                                                                                    @endisset
                                                                                                                </select>
                                                                                                                <select
                                                                                                                    class="form-select"
                                                                                                                    name="company_hourly_rate"
                                                                                                                    id="autoSizingSelect">
                                                                                                                    <option
                                                                                                                        value=""
                                                                                                                        {{ is_null($companyDetail->project_rate) ? 'selected' : '' }}>
                                                                                                                        Choose...
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="< 25"
                                                                                                                        {{ $companyDetail->project_rate === '< 25' ? 'selected' : '' }}>
                                                                                                                        &lt;
                                                                                                                        25
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="25-49"
                                                                                                                        {{ $companyDetail->project_rate === '25-49' ? 'selected' : '' }}>
                                                                                                                        25-49
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="50-99"
                                                                                                                        {{ $companyDetail->project_rate === '50-99' ? 'selected' : '' }}>
                                                                                                                        50-99
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="100-149"
                                                                                                                        {{ $companyDetail->project_rate === '100-149' ? 'selected' : '' }}>
                                                                                                                        100-149
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="150-199"
                                                                                                                        {{ $companyDetail->project_rate === '150-199' ? 'selected' : '' }}>
                                                                                                                        150-199
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="200-300"
                                                                                                                        {{ $companyDetail->project_rate === '200-300' ? 'selected' : '' }}>
                                                                                                                        200-300
                                                                                                                    </option>
                                                                                                                    <option
                                                                                                                        value="300"
                                                                                                                        {{ $companyDetail->project_rate === '300' ? 'selected' : '' }}>
                                                                                                                        300+
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">
                                                                                                Close
                                                                                            </button>
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Save
                                                                                                changes
                                                                                            </button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                @endforeach
                                                            @endisset
                                                        </tbody>
                                                    </table> --}}
                                                </div>





                                            </div>
                                        </div>













                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab" tabindex="0">
                                            <div>
                                                <label for="exampleFormControlTextarea1" class="form-label fa-3x"
                                                    style="font-size:22px;font-weight:600;margin-bottom:3px;">Add
                                                    Locations</label>

                                                <div class="row col-12 track-form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="exampleFormControlTextarea1" id="typeLabel"
                                                                class="form-label fa-2x"> </label>
                                                        </div>
                                                        <div id="formContainer">
                                                            <form method="post"
                                                                action="{{ route('agencyLocationSubmit') }}"
                                                                class="row g-3 formTemplate">
                                                                @csrf
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="country" class="form-label"
                                                                        style="font-size: 14px;">Country</label>
                                                                    <select id="country" name="country"
                                                                        class="form-select" onchange="fetchCities()"
                                                                        class="form-control" style="height: 50px;">
                                                                        <option value="">Select a country
                                                                        </option>
                                                                    </select>

                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="city" class="form-label"
                                                                        style="font-size: 14px;">City</label>
                                                                    <select id="city" name="city"
                                                                        class="form-select" class="form-control"
                                                                        style="height: 50px;">
                                                                        <option value="">Select a city
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="type" class="form-label"
                                                                        style="font-size: 14px;">Type</label>
                                                                    <select id="type" name="branch"
                                                                        class="form-select" onchange="updateLabel()"
                                                                        class="form-control" style="height: 50px;">
                                                                        <option disabled>Select a type
                                                                        </option>
                                                                        <option value="headQuarter">
                                                                            Headquarters
                                                                        </option>
                                                                        <option value="branch" selected>
                                                                            Branch
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="inputCity" class="form-label"
                                                                        style="font-size: 14px;">Postal
                                                                        Code</label>
                                                                    <input type="text" name="postal"
                                                                        class="form-control" id="inputCity"
                                                                        class="form-control" style="height: 50px;">
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="countryCode" class="form-label"
                                                                        style="font-size: 14px;">Country
                                                                        Code</label>
                                                                    <input type="text" name="country_code"
                                                                        id="countryCode" class="form-control"
                                                                        class="form-control"
                                                                        style="height: 50px;background-color:#fff;"
                                                                        readonly>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="inputZip" class="form-label"
                                                                        style="font-size: 14px;">Phone
                                                                        Number</label>
                                                                    <input type="text" name="phone"
                                                                        class="form-control" id="inputZip"
                                                                        class="form-control" style="height: 50px;">
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="inputAddress" class="form-label"
                                                                        style="font-size: 14px;">Address</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputAddress" name="address"
                                                                        placeholder="1234 Main St"
                                                                        class="form-control" style="height: 50px;">
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                                    <label for="inputState" class="form-label"
                                                                        style="font-size: 14px;">Total
                                                                        Employees at
                                                                        this
                                                                        Location</label>
                                                                    <select name="total_employee" id="inputState"
                                                                        class="form-select" class="form-control"
                                                                        style="height: 50px;">
                                                                        <option selected>Choose...</option>
                                                                        <option value="0-49">0-49</option>
                                                                        <option value="50-249">50-249
                                                                        </option>
                                                                        <option value="250-999">250-999
                                                                        </option>
                                                                        <option value="1000-9999">
                                                                            1000-9999
                                                                        </option>
                                                                        <option value="10000+">10000+
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                {{-- <button class="btn btn-secondary mt-4" type="submit"
                                                                    id="submitButton">Submit
                                                                </button> --}}


                                                                <div class="mt-4">
                                                                    <button type="submit" class="btn"
                                                                        style="padding: 12px 30px;background-color:#343A40;color:#fff;
                                                                        ">Submit</button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        {{-- <table class="table table-striped mt-5">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <h6>Country</h6>
                                                                    </th>
                                                                    <th>
                                                                        <h6>City</h6>
                                                                    </th>
                                                                    <th>
                                                                        <h6>Postal Code</h6>
                                                                    </th>
                                                                    <th>
                                                                        <h6>Phone</h6>
                                                                    </th>
                                                                    <th>
                                                                        <h6>Address</h6>
                                                                    </th>
                                                                    <th>
                                                                        <h6>Total Employee</h6>
                                                                    </th>
                                                                    <th>
                                                                        <h6>Type</h6>
                                                                    </th>
                                                                    <th>
                                                                        <h6>Action</h6>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @isset($agencyLocations)
                                                                    @foreach ($agencyLocations as $agencyLocation)
                                                                        <tr>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <p>{{ $agencyLocation?->country }}</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <p>{{ $agencyLocation?->city }}</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <p>{{ $agencyLocation?->postal_code }}
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <p>{{ $agencyLocation?->country_code . ' ' . $agencyLocation?->phone_number }}
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <p>{{ $agencyLocation?->address }}</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <p>{{ $agencyLocation?->total_employee }}
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <p>{{ $agencyLocation?->type }}</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="tabletext">
                                                                                    <button class="btn btn-primary editBtn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#editModal{{ $agencyLocation->id }}"
                                                                                        data-id="{{ $agencyLocation->id }}">
                                                                                        Edit
                                                                                    </button>
                                                                                    <div class="tabletext">
                                                                                        <a href="{{ route('deleteAgencyLocation', ['id' => $agencyLocation->id]) }}"
                                                                                            class="btn btn-danger">Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <div class="modal fade"
                                                                                id="editModal{{ $agencyLocation->id }}"
                                                                                tabindex="-1"
                                                                                aria-labelledby="editModalLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="editModalLabel">Edit
                                                                                                Agency
                                                                                                Location</h5>
                                                                                            <button type="button"
                                                                                                class="btn-close"
                                                                                                data-bs-dismiss="modal"
                                                                                                aria-label="Close"></button>
                                                                                        </div>
                                                                                        <form id="editForm"
                                                                                            action="{{ route('agencyLocationSubmit') }}"
                                                                                            method="post">
                                                                                            @csrf
                                                                                            <div class="modal-body">
                                                                                                <div
                                                                                                    class="row container-fluid">
                                                                                                    <input type="hidden"
                                                                                                        name="locationId"
                                                                                                        value="{{ $agencyLocation->id }}">
                                                                                                    <div class="col-md-4">
                                                                                                        <label
                                                                                                            for="Country{{ $agencyLocation->id }}"
                                                                                                            class="form-label">Country</label>
                                                                                                        <select
                                                                                                            id="Country{{ $agencyLocation->id }}"
                                                                                                            name="country"
                                                                                                            class="form-select"
                                                                                                            onchange="fetchModalCities({{ $agencyLocation->id }})">
                                                                                                            <option
                                                                                                                value="">
                                                                                                            </option>

                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label
                                                                                                            for="city"
                                                                                                            class="form-label">City</label>
                                                                                                        <select
                                                                                                            id="city{{ $agencyLocation->id }}"
                                                                                                            name="city"
                                                                                                            class="form-select">
                                                                                                            <option
                                                                                                                value="">
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label
                                                                                                            for="type"
                                                                                                            class="form-label">Type</label>
                                                                                                        <select
                                                                                                            id="type"
                                                                                                            name="branch"
                                                                                                            class="form-select"
                                                                                                            onchange="updateLabel()">
                                                                                                            <option
                                                                                                                disabled>
                                                                                                                Select
                                                                                                                a type
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="headQuarter"
                                                                                                                {{ $agencyLocation->type == 'headQuarter' ? 'selected' : '' }}>
                                                                                                                Headquarters
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="branch"
                                                                                                                {{ $agencyLocation->type == 'branch' ? 'selected' : '' }}>
                                                                                                                Branch
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label
                                                                                                            for="inputCity"
                                                                                                            class="form-label">Postal
                                                                                                            Code</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            name="postal"
                                                                                                            class="form-control"
                                                                                                            value="{{ $agencyLocation->postal_code }}"
                                                                                                            id="inputCity">
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label
                                                                                                            for="countryCode"
                                                                                                            class="form-label">Country
                                                                                                            Code</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            name="country_code"
                                                                                                            id="countryCode{{ $agencyLocation->id }}"
                                                                                                            class="form-control"
                                                                                                            value="{{ $agencyLocation->country_code }}"
                                                                                                            readonly>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <label
                                                                                                            for="inputZip"
                                                                                                            class="form-label">Phone
                                                                                                            Number</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            name="phone"
                                                                                                            class="form-control"
                                                                                                            value="{{ $agencyLocation->phone_number }}"
                                                                                                            id="inputZip">
                                                                                                    </div>
                                                                                                    <div class="col-12">
                                                                                                        <label
                                                                                                            for="inputAddress"
                                                                                                            class="form-label">Address</label>
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="inputAddress"
                                                                                                            name="address"
                                                                                                            value="{{ $agencyLocation->address }}"
                                                                                                            placeholder="1234 Main St">
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <label
                                                                                                            for="inputState"
                                                                                                            class="form-label">Total
                                                                                                            Employees at
                                                                                                            this
                                                                                                            Location</label>
                                                                                                        <select
                                                                                                            name="total_employee"
                                                                                                            id="inputState"
                                                                                                            class="form-select">
                                                                                                            <option
                                                                                                                value=""
                                                                                                                {{ $agencyLocation->total_employee == '' ? 'selected' : '' }}>
                                                                                                                Choose...
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="0-49"
                                                                                                                {{ $agencyLocation->total_employee == '0-49' ? 'selected' : '' }}>
                                                                                                                0-49
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="50-249"
                                                                                                                {{ $agencyLocation->total_employee == '50-249' ? 'selected' : '' }}>
                                                                                                                50-249
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="250-999"
                                                                                                                {{ $agencyLocation->total_employee == '250-999' ? 'selected' : '' }}>
                                                                                                                250-999
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="1000-9999"
                                                                                                                {{ $agencyLocation->total_employee == '1000-9999' ? 'selected' : '' }}>
                                                                                                                1000-9999
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="10000+"
                                                                                                                {{ $agencyLocation->total_employee == '10000+' ? 'selected' : '' }}>
                                                                                                                10000+
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">
                                                                                                    Close
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                    class="btn btn-primary">
                                                                                                    Save
                                                                                                    changes
                                                                                                </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    @endforeach
                                                                @endisset
                                                            </tbody>
                                                        </table> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $subServiceNames = [];
                                            $services = isset($serviceLine->services)
                                                ? json_decode($serviceLine->services, true)
                                                : [];
                                            $specializationServicesId = isset($specializationService->service_id)
                                                ? json_decode($specializationService->service_id, true)
                                                : [];
                                            $specializationSubService = isset($specializationService->sub_services)
                                                ? json_decode($specializationService->sub_services, true) ?? []
                                                : [];
                                            $specializationServiceRanges = isset($specializationService->ranges)
                                                ? json_decode($specializationService?->ranges, true) ?? []
                                                : [];
                                            $servicesRanges = isset($serviceLine?->range)
                                                ? json_decode($serviceLine->ranges, true) ?? []
                                                : [];

                                        @endphp
                                        @isset($agencySubServices)
                                            @foreach ($agencySubServices as $agencySubService)
                                                @php
                                                    $subServiceNames[] = $agencySubService->sub_service_name;
                                                @endphp
                                            @endforeach
                                        @endisset
                                        <div class="tab-pane fade" id="pills-service" role="tabpanel"
                                            aria-labelledby="pills-service-tab" tabindex="0">
                                            <div class="row col-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="fa-2x fw-bold">Add
                                                            Service Line</label>
                                                        <p>Give Buyer A sense of how you
                                                            spend your time. You must
                                                            add
                                                            at least one(1) service line
                                                            to your company profile</p>
                                                        <input type="text" id="search"
                                                            class="form-control mb-3"
                                                            placeholder="Search for your service line">
                                                        <div id="selectedSubServices">
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="col-6">
                                                        <label class="fa-2x fw-bold">Selected
                                                            Service Lines</label>
                                                        <p>Allocate the percentage to a
                                                            service lines reflecting how
                                                            much of your business
                                                            focuses on that line of
                                                            work.All
                                                            service line percentage must
                                                            add upto 100%</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <canvas id="pieChart" width="400" height="400"></canvas>

                                            <form action="{{ route('saveServices') }}" method="post">
                                                @csrf
                                                <div class="row col-12">
                                                    <div class="col-6">
                                                        <label class="fa-2x fw-bold">All
                                                            Available Service
                                                            Line</label>
                                                        <p>Below is the full list of all
                                                            the service lines available
                                                            on
                                                            Instahirin</p>
                                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                                            @isset($agencyServices)
                                                                @foreach ($agencyServices as $agencyService)
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header">
                                                                            <button
                                                                                class="accordion-button bg-dark text-white"
                                                                                type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#panelsStayOpen-collapseOne{{ $agencyService->id }}"
                                                                                aria-expanded="true"
                                                                                aria-controls="panelsStayOpen-collapseOne{{ $agencyService->id }}">
                                                                                {{ $agencyService->service_name }}
                                                                            </button>
                                                                        </h2>
                                                                        <div id="panelsStayOpen-collapseOne{{ $agencyService->id }}"
                                                                            class="accordion-collapse collapse show">
                                                                            <div class="accordion-body">
                                                                                <div class="container">
                                                                                    <div class="btn-group">
                                                                                        <div class="row">
                                                                                            @foreach ($agencySubServices as $agencySubService)
                                                                                                @if ($agencySubService->service_id == $agencyService->id)
                                                                                                    <div
                                                                                                        class="select sub-service">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            name="service[]"
                                                                                                            value="{{ $agencySubService->id }}"
                                                                                                            id="item_{{ $agencySubService->id }}"
                                                                                                            onchange="updateSelectedSubServices()"
                                                                                                            {{ in_array($agencySubService->id, $services) ? 'checked' : '' }}>
                                                                                                        <label
                                                                                                            class="btn btn-secondary text-dark button_select"
                                                                                                            for="item_{{ $agencySubService->id }}">
                                                                                                            {{ $agencySubService->sub_service_name }}
                                                                                                        </label>
                                                                                                    </div>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endisset
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div id="selectedSubServicesRanges">
                                                        </div>
                                                        <div id="error-message" style="color: red; display: none;">
                                                            Total
                                                            range cannot exceed 100%.
                                                        </div>
                                                        <div id="overall-percentage">
                                                        </div>
                                                        <div style="width: 400px; margin: auto;">
                                                            {{--                                                            <canvas id="pieChart"> --}}
                                                            {{--                                                            </canvas> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Hidden inputs for sending ranges with subservice ID and names -->
                                                <div id="hidden-inputs"></div>
                                                <button id="submit-button" class="btn btn-secondary mt-4"
                                                    type="submit">
                                                    Save
                                                </button>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="pills-portfolio" role="tabpanel"
                                            aria-labelledby="pills-portfolio-tab" tabindex="0">
                                            <div class="container">
                                                <div class="row">
                                                    @isset($agencyPortfolios)
                                                        @foreach ($agencyPortfolios as $agencyPortfolio)
                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                <div class="card border-primary mb-3"
                                                                    style="max-width: 18rem;">
                                                                    <div class="card-body text-primary">
                                                                        <h5 class="card-title">
                                                                        </h5>
                                                                        <p class="card-text">
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="card-footer text-center bg-transparent border-success">
                                                                        <a href="#" class="portfolio-link"
                                                                            data-toggle="modal"
                                                                            data-target="#portfolioModal{{ $agencyPortfolio->id }}">{{ $agencyPortfolio->portfolio_title }}</a>
                                                                    </div>


                                                                    <div class="text-end">
                                                                        <a href="#" class="edit-portfolio"
                                                                            data-id="{{ $agencyPortfolio->id }}"
                                                                            data-title="{{ $agencyPortfolio->portfolio_title }}"
                                                                            data-description="{{ $agencyPortfolio->portfolio_description }}"
                                                                            data-service-lines="{{ $agencyPortfolio->portfolio_service_lines }}"
                                                                            data-project-size="{{ $agencyPortfolio->portfolio_project_size }}"
                                                                            data-start-date="{{ $agencyPortfolio->portfolio_start_date }}"
                                                                            data-end-date="{{ $agencyPortfolio->portfolio_end_date }}"
                                                                            data-video-link="{{ $agencyPortfolio->videoLink }}"
                                                                            data-image-upload="{{ $agencyPortfolio->imageUpload }}"
                                                                            data-privacy="{{ $agencyPortfolio->privacy }}">Edit</a>
                                                                        <a
                                                                            href="{{ route('portfolioDelete', ['id' => $agencyPortfolio->id]) }}">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Portfolio Modal -->
                                                            <div class="modal fade"
                                                                id="portfolioModal{{ $agencyPortfolio->id }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="portfolioModalLabel{{ $agencyPortfolio->id }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="portfolioModalLabel{{ $agencyPortfolio->id }}">
                                                                                {{ $agencyPortfolio->portfolio_title }}
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Client
                                                                                Name:-{{ $agencyPortfolio->client_name }}
                                                                            </p>
                                                                            <p>Client
                                                                                Website:-{{ $agencyPortfolio->client_website }}
                                                                            </p>
                                                                            <p>Portfolio
                                                                                Title:-{{ $agencyPortfolio->portfolio_title }}
                                                                            </p>
                                                                            <p>Service
                                                                                Lines:-{{ $agencyPortfolio->portfolio_service_lines }}
                                                                            </p>
                                                                            <p>Project
                                                                                Size:-{{ $agencyPortfolio->portfolio_project_size }}
                                                                            </p>
                                                                            <p>Start
                                                                                Date:-{{ $agencyPortfolio->portfolio_start_date }}
                                                                            </p>
                                                                            <p>
                                                                                End_date:-{{ $agencyPortfolio->portfolio_end_date }}
                                                                            </p>
                                                                            <p>
                                                                                Descriptions:-{{ $agencyPortfolio->portfolio_description }}
                                                                            </p>
                                                                            @if ($agencyPortfolio->videoLink != null)
                                                                                <p> Video
                                                                                    Link:-{{ $agencyPortfolio->videoLink }}
                                                                                </p>
                                                                            @endif
                                                                            @if ($agencyPortfolio->imageUpload != null)
                                                                                <p> Image
                                                                                    :-{{ $agencyPortfolio->imageUpload }}
                                                                                </p>
                                                                            @endif
                                                                            <p>
                                                                            <P> Privacy:-
                                                                                @if ($agencyPortfolio->imageUpload == 1)
                                                                                    Show All
                                                                            </p>
                                                                        @elseif($agencyPortfolio->imageUpload == 0)
                                                                            Confidential</p>
                                                        @endif
                                                        <!-- You can include other details here -->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!-- Add buttons or additional content for the modal footer if needed -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="editPortfolioModal{{ $agencyPortfolio->id }}"
                                            tabindex="-1" role="dialog"
                                            aria-labelledby="editPortfolioModalLabel{{ $agencyPortfolio->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editPortfolioModalLabel{{ $agencyPortfolio->id }}">
                                                            Edit Portfolio</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('portfolioSubmit') }}" method="post"
                                                            id="editPortfolioForm{{ $agencyPortfolio->id }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $agencyPortfolio->id }}">
                                                            <div class="row mb-3">
                                                                <div class="col">
                                                                    <label class="fw-bold">Client
                                                                        Name</label>
                                                                    <input type="text" name="client_name"
                                                                        class="form-control" placeholder="Name"
                                                                        aria-label="Name"
                                                                        value="{{ $agencyPortfolio->client_name }}">
                                                                </div>
                                                                <div class="col">
                                                                    <label class="fw-bold">Client
                                                                        Website</label>
                                                                    <input type="text" name="client_website"
                                                                        class="form-control"
                                                                        placeholder="https://www.example.com"
                                                                        aria-label="Last name"
                                                                        value="{{ $agencyPortfolio->client_website }}">
                                                                </div>
                                                            </div>
                                                            <!-- Portfolio Item Details -->
                                                            <div>
                                                                <label class="fw-bold">Title</label>
                                                                <input type="text" name="portfolio_title"
                                                                    class="form-control"
                                                                    placeholder="Enter a title for this portfolio item"
                                                                    value="{{ $agencyPortfolio->portfolio_title }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="fw-bold mt-2">Service
                                                                    Lines</label>
                                                                <input type="text" name="portfolio_service_lines"
                                                                    class="form-control" placeholder="Search for Service"
                                                                    value="{{ $agencyPortfolio->portfolio_service_lines }}">
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <label for="inputState"
                                                                        class="form-label fw-bold">Estimate
                                                                        Project Size</label>
                                                                    <select id="inputState" name="portfolio_project_size"
                                                                        class="form-select">
                                                                        <option selected>Select
                                                                            the
                                                                            estimate project
                                                                            size
                                                                        </option>
                                                                        <option value="0-49"
                                                                            {{ $agencyPortfolio->portfolio_project_size == '0-49' ? 'selected' : '' }}>
                                                                            0-49
                                                                        </option>
                                                                        <option value="50-249"
                                                                            {{ $agencyPortfolio->portfolio_project_size == '50-249' ? 'selected' : '' }}>
                                                                            50-249
                                                                        </option>
                                                                        <option value="250-999"
                                                                            {{ $agencyPortfolio->portfolio_project_size == '250-999' ? 'selected' : '' }}>
                                                                            250-999
                                                                        </option>
                                                                        <option value="1000-9999"
                                                                            {{ $agencyPortfolio->portfolio_project_size == '1000-9999' ? 'selected' : '' }}>
                                                                            1000-9999
                                                                        </option>
                                                                        <option value="10000+"
                                                                            {{ $agencyPortfolio->portfolio_project_size == '10000+' ? 'selected' : '' }}>
                                                                            10000+
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="input-start-date"
                                                                        class="form-label fw-bold">Start
                                                                        Date (optional)</label>
                                                                    <input type="date" name="portfolio_start_date"
                                                                        class="form-control" id="start-date"
                                                                        value="{{ $agencyPortfolio->portfolio_start_date }}">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="input-end-date"
                                                                        class="form-label fw-bold">End
                                                                        Date (optional)</label>
                                                                    <input type="date" name="portfolio_end_date"
                                                                        class="form-control" id="end-date"
                                                                        value="{{ $agencyPortfolio->portfolio_end_date }}">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                    class="form-label fw-bold">Descriptions</label>
                                                                <textarea class="form-control" name="portfolio_description" id="exampleFormControlTextarea1" rows="3">{{ $agencyPortfolio->portfolio_description }}</textarea>
                                                            </div>
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                    class="form-label fw-bold">Add
                                                                    Video Link or Image
                                                                    (Optional)
                                                                </label><br>
                                                                <input type="radio" id="videoOption" name="option"
                                                                    onclick="showInput('video')"
                                                                    {{ $agencyPortfolio->videoLink ? 'checked' : '' }}>
                                                                <label for="videoOption">Video
                                                                    Link</label><br>
                                                                <input type="radio" id="imageOption" name="option"
                                                                    onclick="showInput('image')"
                                                                    {{ $agencyPortfolio->imageUpload ? 'checked' : '' }}>
                                                                <label for="imageOption">Upload
                                                                    Image</label><br><br>
                                                                <div id="videoInput"
                                                                    style="{{ $agencyPortfolio->videoLink ? '' : 'display:none;' }}">
                                                                    <label for="videoLink">Video
                                                                        Link:</label>
                                                                    <input class="form-control" type="text"
                                                                        id="videoLink" name="videoLink"
                                                                        value="{{ $agencyPortfolio->videoLink }}">
                                                                </div>
                                                                <div id="imageInput"
                                                                    style="{{ $agencyPortfolio->imageUpload ? '' : 'display:none;' }}">
                                                                    <label for="imageUpload">Upload
                                                                        Image:</label><br>
                                                                    <input class="form-control" type="file"
                                                                        id="imageUpload" name="imageUpload"><br><br>
                                                                </div>
                                                                <hr>
                                                                <label class="fw-bold fa-2x mb-2">Privacy
                                                                    Setting</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" value="1"
                                                                        type="radio" name="privacy"
                                                                        id="flexRadioDefault1"
                                                                        {{ $agencyPortfolio->privacy == 1 ? 'checked' : '' }}>
                                                                    <label class="form-check-label fa-2x"
                                                                        for="flexRadioDefault1">
                                                                        Show All
                                                                    </label>
                                                                    <p>All of the above content
                                                                        will
                                                                        be displayed on your
                                                                        profile. Currently, we
                                                                        will
                                                                        only show portfolio
                                                                        items
                                                                        with images</p>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" value="0"
                                                                        type="radio" name="privacy"
                                                                        id="flexRadioDefault2"
                                                                        {{ $agencyPortfolio->privacy == 0 ? 'checked' : '' }}>
                                                                    <label class="form-check-label fa-2x"
                                                                        for="flexRadioDefault2">
                                                                        Confidential
                                                                    </label>
                                                                    <p>Only the following
                                                                        details
                                                                        for this portfolio item
                                                                        will
                                                                        be displayed on your
                                                                        profile: Title,
                                                                        Description,
                                                                        Category, Image or Video
                                                                        link. This is ideal for
                                                                        projects where you are
                                                                        not
                                                                        able to showcase client
                                                                        details.</p>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">
                                                                Update
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endisset
                                </div>
                            </div>




                            <!-- Edit Portfolio Modal -->

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class="card_portfoiio">
                                            <div class="card_portfoiio_header">
                                                <img src=" /bizionic/images2/graphic1.jpg" />

                                                {{-- D:\laragon\www\instahirin\public\bizionic\images\animationsServices_avatar.png --}}

                                            </div>

                                            <div class="card_portfoiio_body">

                                                <p>Graphic Designer</p>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class="card_portfoiio2">
                                            <div class="card_portfoiio_header">

                                                <div class="card_portfolio_plus_card">
                                                    <div class="card_portfolio_margin_top">

                                                        <a href="#"><i
                                                                class="bi bi-plus-circle-fill bill-card-icon"></i>
                                                            <div class="bill-card-txt" id="addPortfolioBtn">Add Card
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="transitionScreen" class="transition-screen">
                                <div class="form-container">
                                    <div style="height: 600px; overflow-y: auto;">
                                        <form action="{{ route('portfolioSubmit') }}" method="post"
                                            id="portfolioForm" enctype="multipart/form-data">
                                            @csrf
                                            <label class="fa-2x fw-bold">Add a New
                                                Portfolio</label><br>
                                            <label class="fw-bold">Share Your Latest Existing
                                                Work</label><br>
                                            <label class="fw-bold mt-2">Client Details</label>
                                            <hr>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label class="fw-bold mt-2">Client
                                                        Name</label>
                                                    <input type="text" name="client_name" class="form-control"
                                                        placeholder="Name" aria-label="Name">
                                                </div>
                                                <div class="col">
                                                    <label class="fw-bold mt-2">Client
                                                        Website</label>
                                                    <input type="text" name="client_website" class="form-control"
                                                        placeholder="https://www.example.com" aria-label="Last name">
                                                </div>
                                            </div>
                                            <label class="fa-2x mt-2">Portfolio Item
                                                Details</label>
                                            <hr>
                                            <div>
                                                <label class="fw-bold">Title</label>
                                                <input type="text" name="portfolio_title" class="form-control"
                                                    id="formGroupExampleInput"
                                                    placeholder="Enter a title for this portfolio item">
                                            </div>
                                            <div class="mb-3">
                                                <label class="fw-bold mt-2">Service
                                                    Lines</label>
                                                <input type="text" name="portfolio_service_lines"
                                                    class="form-control" id="formGroupExampleInput2"
                                                    placeholder="Search for Service">
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="inputState" class="form-label fw-bold">Estimate
                                                        Project Size</label>
                                                    <select id="inputState" name="portfolio_project_size"
                                                        class="form-select">
                                                        <option selected>Select the estimate
                                                            project
                                                            size
                                                        </option>
                                                        <option value="0-49">0-49</option>
                                                        <option value="50-249">50-249</option>
                                                        <option value="250-999">250-999
                                                        </option>
                                                        <option value="1000-9999">1000-9999
                                                        </option>
                                                        <option value="10000+">10000+</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="input-start-date" class="form-label fw-bold">Start
                                                        Date
                                                        (optional)</label>
                                                    <input type="date" name="portfolio_start_date"
                                                        class="form-control" id="start-date">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="input-end-date" class="form-label fw-bold">End Date
                                                        (optional)</label>
                                                    <input type="date" name="portfolio_end_date"
                                                        class="form-control" id="end-date">
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label  fw-bold">Descriptions</label>
                                                <textarea class="form-control" name="portfolio_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3 mt-3">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label fw-bold">Add
                                                    Video Link or
                                                    Image (Optional)</label><br>
                                                <input type="radio" id="videoOption" name="option"
                                                    onclick="showInput('video')" checked>
                                                <label for="videoOption">Video Link</label><br>
                                                <input type="radio" id="imageOption" name="option"
                                                    onclick="showInput('image')">
                                                <label for="imageOption">Upload
                                                    Image</label><br><br>
                                                <div id="videoInput">
                                                    <label for="videoLink">Video Link:</label>
                                                    <input class="form-control" type="text" id="videoLink"
                                                        name="videoLink">
                                                </div>
                                                <div id="imageInput" style="display:none;">
                                                    <label for="imageUpload">Upload
                                                        Image:</label><br>
                                                    <input class="form-control" type="file" id="imageUpload"
                                                        name="imageUpload"><br><br>
                                                </div>
                                                <hr>
                                                <label class="fw-bold fa-2x mb-2">Privacy
                                                    Setting</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" value="1" type="radio"
                                                        name="privacy" id="flexRadioDefault1">
                                                    <label class="form-check-label fa-2x" for="flexRadioDefault1">
                                                        Show All
                                                    </label>
                                                    <p>All of the above content will be
                                                        displayed on
                                                        your profile. Currently, we will only
                                                        show
                                                        portfolio items with images</p>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" value="0" type="radio"
                                                        name="privacy" id="flexRadioDefault2">
                                                    <label class="form-check-label fa-2x" for="flexRadioDefault2">
                                                        Confidential
                                                    </label>
                                                    <p>Only the following details for this
                                                        portfolio
                                                        item will be item will be displayed on
                                                        your
                                                        profile: Title, Description, Category,
                                                        Image
                                                        or
                                                        Video link. This is ideal for projects
                                                        where
                                                        you
                                                        are not able to showcase client details.
                                                    </p>
                                                </div>
                                            </div>
                                            <button type="button" id="cancelBtn" class="btn">Cancel
                                            </button>
                                            <button type="submit" id="saveBtn" class="btn">Save
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-specializations" role="tabpanel"
                            aria-labelledby="pills-specializations-tab" tabindex="0">
                            <form id="myForm" action="{{ route('specializationSubmit') }}" method="post">
                                @csrf
                                <div class="card">
                                    <h5 class="card-header">Industries</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title">Update Industries</h5>
                                                <p>Search the relevant industries for your
                                                    company's
                                                    services</p>
                                                <select class="form-select" id="serviceSelect" name="service"
                                                    aria-label="Default select example"
                                                    onchange="populateSubServices()">
                                                    <option selected disabled>Select a service
                                                    </option>
                                                    @isset($agencyServices)
                                                        @foreach ($agencyServices as $agencyService)
                                                            <option value="{{ $agencyService->id }}"
                                                                @if ($agencyService->id == $specializationServicesId) selected @endif>
                                                                {{ $agencyService->service_name }}
                                                            </option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                                <div id="subServicesContainer">
                                                    <!-- Sub-services checkboxes will be dynamically populated here -->
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="card-title">Selected Industries</h5>
                                                <p>Allocate the percentage to the applicable
                                                    industries
                                                    for
                                                    your services. All industry percentages must
                                                    add up
                                                    to
                                                    100%.</p>
                                                <div class="chart-container">
                                                    <canvas id="specializationServiceChart"></canvas>
                                                </div>
                                                <div id="rangeContainer">
                                                    <!-- Range inputs go here -->

                                                </div>
                                                <span id="errorMessage" class="error-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="submitSpecialization">Save
                                        Changes
                                    </button>
                                </div>
                            </form>
                            <div class="card mt-3">
                                <h5 class="card-header">Clients</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Update client sizes</h5>
                                    <p class="card-text">Allocate a percentage to the
                                        applicable client
                                        sizes for your services.All industry percentage
                                        percentage must
                                        add upto 100%</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="container">
                                                <canvas id="myPieChart"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <form method="post" action="{{ route('clientUpdate') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="customRange1" class="form-label">Small
                                                        Business (< $10M)</label>
                                                            <input type="range" name="smallBusiness"
                                                                class="form-range" id="customRange1" min="0"
                                                                max="100"
                                                                value="<?= $agencyClient->smallBusiness ?? 0 ?>">
                                                            <output id="output1"></output>
                                                </div>
                                                <div class="form-group">
                                                    <label for="customRange2" class="form-label">Medium
                                                        Business ($10M - $18B)</label>
                                                    <input type="range" name="mediumBusiness" class="form-range"
                                                        id="customRange2" min="0" max="100"
                                                        value="<?= $agencyClient->mediumBusiness ?? 0 ?>">
                                                    <output id="output2"></output>
                                                </div>
                                                <div class="form-group">
                                                    <label for="customRange3" class="form-label">Enterprise
                                                        (> $18B)</label>
                                                    <input type="range" name="enterprise" class="form-range"
                                                        id="customRange3" min="0" max="100"
                                                        value="<?= $agencyClient->enterprise ?? 0 ?>">
                                                    <output id="output3"></output>
                                                </div>
                                                <button type="submit">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="container">
                                <div class="bordered-container">
                                    <div class="row col-12">
                                        <div class="col-6">
                                            <label class="fa-2x">Compliance and certificate
                                                list</label>
                                            <hr>
                                            <form action="{{ route('editOrDeleteCertificates') }}" method="POST"
                                                id="certificateForm">
                                                @csrf
                                                @isset($certificateList)
                                                    @foreach ($certificateList as $certificate)
                                                        <div>
                                                            <input type="checkbox" class="certificateCheckbox"
                                                                name="certificate_ids[]" value="{{ $certificate->id }}">
                                                            <a
                                                                href="{{ route('fileDownload', $certificate->id) }}">{{ $certificate->certificate_title }}</a>
                                                        </div>
                                                    @endforeach
                                                @endisset

                                                <button type="submit" name="action" value="delete"
                                                    id="deleteButton" disabled>Delete Selected
                                                    Certificates
                                                </button>
                                            </form>
                                            <button type="submit" name="action" value="edit" id="editButton"
                                                disabled>Edit
                                                Selected
                                                Certificates
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <label class="fa-2x">Certification Details</label>
                                            <hr>
                                            <form action="{{ route('certificationsForm') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Company
                                                        Certificate Title</label>
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Enter Certificate Title">
                                                    @error('name')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="url" class="form-label">Company
                                                        URL</label>
                                                    <input type="url" class="form-control" name="url"
                                                        id="url" placeholder="https://www.example.com">
                                                    @error('url')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="attachment" class="form-label">Upload
                                                        Attachment</label>
                                                    <input type="file" class="form-control" name="attachment"
                                                        id="attachment">
                                                    @error('attachment')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save
                                                </button>
                                                <button type="button" class="btn btn-secondary">
                                                    Cancel
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="editCertificateModal" tabindex="-1"
                            aria-labelledby="editCertificateModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editCertificateModalLabel">Edit
                                            Certificate</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Edit Certificate Form -->
                                        <form id="editCertificateForm" action="{{ route('certificationsForm') }}"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="certificate_id" id="certificateId">
                                            <!-- Hidden input for certificate ID -->
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Company
                                                    Certificate
                                                    Title</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="name" placeholder="Enter Certificate Title">
                                                @error('name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="url" class="form-label">Company
                                                    URL</label>
                                                <input type="url" class="form-control" name="url"
                                                    id="url" placeholder="https://www.example.com">
                                                @error('url')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="attachment" class="form-label">Upload
                                                    Attachment</label>
                                                <input type="file" class="form-control" name="attachment"
                                                    id="attachment">
                                                @error('attachment')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3" id="filePreviewContainer">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save
                                            </button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
    async function fetchCountries() {
        const response = await fetch('https://restcountries.com/v3.1/all');
        const countries = await response.json();
        const countryDropdown = document.getElementById('country');
        countries.forEach(country => {
            const option = document.createElement('option');
            var countryCode = country.idd.root + country.idd.suffixes
            option.value = country.name.common;
            option.countryCode = countryCode
            option.textContent = country.name.common;
            countryDropdown.appendChild(option);
        });
    }

    async function fetchModalCountries(agencyLocationId) {
        try {
            const response = await fetch('https://restcountries.com/v3.1/all');
            const countries = await response.json();
            const countryDropdown = document.getElementById('Country' + agencyLocationId);
            const existingCountry =
                "{{ !!isset($agencyLocation) && isset($agencyLocation->country) ? $agencyLocation->country : '' }}";

            countries.forEach(country => {
                const option = document.createElement('option');
                var countryCode = country.idd.root + country.idd.suffixes;
                option.value = country.name.common;
                option.countryCode = countryCode;
                option.textContent = country.name.common;

                // Check if the fetched country matches the existing country data
                if (existingCountry === country.name.common) {
                    option.selected = true; // Select the existing country
                }

                countryDropdown.appendChild(option);
            });
        } catch (error) {
            console.error('Error fetching countries:', error);
        }
    }


    async function fetchModalCities(agencyLocationId) {
        const countryDropdown = document.getElementById('Country' + agencyLocationId);
        const cityDropdown = document.getElementById('city' + agencyLocationId);
        const existingCity =
            "{{ !!isset($agencyLocation) && isset($agencyLocation->city) ? $agencyLocation->city : '' }}";

        const countryName = countryDropdown.value;
        const countryCodeInput = document.getElementById('countryCode' + agencyLocationId);

        if (!countryName) {
            console.error("No country selected.");
            return;
        }

        const selectedOption = countryDropdown.options[countryDropdown.selectedIndex];
        const countryCode = selectedOption.countryCode;
        console.log(countryCode);

        countryCodeInput.value = countryCode; // Update country code input

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
            const cities = data.data.sort((a, b) => a - b);

            cityDropdown.innerHTML = ''; // Clear existing options

            cities.forEach(city => {
                const option = document.createElement('option');
                option.value = city;
                option.textContent = city;

                // Check if city matches existing data, if so, select it
                if (city === existingCity) {
                    option.selected = true;
                }

                cityDropdown.appendChild(option);
            });
        } catch (error) {
            console.error("Error fetching cities:", error);
        }
    }


    async function fetchCities() {
        const countryDropdown = document.getElementById('country');
        const countryName = countryDropdown.value;
        const countryCodeInput = document.getElementById('countryCode');

        if (!countryName) {
            console.error("No country selected.");
            return;
        }

        const selectedOption = countryDropdown.options[countryDropdown.selectedIndex];
        const countryCode = selectedOption.countryCode;

        countryCodeInput.value = countryCode; // Update country code input

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
            const cities = data.data.sort((a, b) => a - b);

            const cityDropdown = document.getElementById('city');
            cityDropdown.innerHTML = '<option value="">Select a city</option>';

            cities.forEach(city => {
                const option = document.createElement('option');
                option.value = city;
                option.textContent = city;
                cityDropdown.appendChild(option);
            });
        } catch (error) {
            console.error("Error fetching cities:", error);
        }
    }

    fetchCountries();
    @isset($agencyServices)
        @foreach ($agencyLocations as $agencyLocation)
            fetchModalCountries('{{ $agencyLocation->id }}');
        @endforeach
    @endisset

    function updateLabel() {
        var typeSelect = document.getElementById("type");
        var typeLabel = document.getElementById("typeLabel");

        if (typeSelect.value === "headQuarter") {
            typeLabel.textContent = "Add Headquarters";
            submitButton.textContent = "Submit Headquarters";
        } else if (typeSelect.value === "branch") {
            typeLabel.textContent = "Add Branch";
            submitButton.textContent = "Submit Branches";
        } else {
            typeLabel.textContent = "";
            submitButton.textContent = "Submit";
        }
    }
</script>
<script>
    function showEditPopup() {
        const checkboxes = document.querySelectorAll('input[name="certificate_ids[]"]:checked');
        const popup = document.getElementById('editPopup');
        const formContainer = popup.querySelector('.form-container');

        // Clear previous forms if any
        formContainer.innerHTML = '';

        checkboxes.forEach(checkbox => {
            const certificateId = checkbox.value;

            // Create a form for each selected certificate
            const form = document.createElement('form');
            form.action = "{{ route('certificationsForm') }}";
            form.method = "post";
            form.enctype = "multipart/form-data";

            // Add CSRF token input
            const csrfInput = document.createElement('input');
            csrfInput.type = "hidden";
            csrfInput.name = "_token";
            csrfInput.value = "{{ csrf_token() }}";
            form.appendChild(csrfInput);

            // Add certificate ID input
            const idInput = document.createElement('input');
            idInput.type = "hidden";
            idInput.name = "certificate_id";
            idInput.value = certificateId;
            form.appendChild(idInput);

            // Add form fields
            form.innerHTML += `
                <div class="mb-3">
                    <label for="name" class="form-label">Company Certificate Title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Certificate Title">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Company URL</label>
                    <input type="url" class="form-control" name="url" id="url" placeholder="https://www.example.com">
                </div>
                <div class="mb-3">
                    <label for="attachment" class="form-label">Upload Attachment</label>
                    <input type="file" class="form-control" name="attachment" id="attachment">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" onclick="hideEditPopup()">Cancel</button>
            `;

            // Append form to form container
            formContainer.appendChild(form);
        });

        // Show popup
        popup.style.display = 'block';
    }

    function hideEditPopup() {
        const popup = document.getElementById('editPopup');
        popup.style.display = 'none';
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.certificateCheckbox');
        const editButton = document.getElementById('editButton');
        const deleteButton = document.getElementById('deleteButton');

        function updateButtonState() {
            const checkedCheckboxes = document.querySelectorAll('.certificateCheckbox:checked');
            if (checkedCheckboxes.length === 1) {
                editButton.disabled = false;
                deleteButton.disabled = false;
            } else if (checkedCheckboxes.length > 1) {
                editButton.disabled = true;
                deleteButton.disabled = false;
            } else {
                editButton.disabled = true;
                deleteButton.disabled = true;
            }
        }

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', updateButtonState);
        });

        // Initial state check
        updateButtonState();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.certificateCheckbox');
        const editButton = document.getElementById('editButton');
        const deleteButton = document.getElementById('deleteButton');
        const editCertificateForm = document.getElementById('editCertificateForm');
        const editCertificateModal = new bootstrap.Modal(document.getElementById('editCertificateModal'));

        function updateButtonState() {
            const checkedCheckboxes = document.querySelectorAll('.certificateCheckbox:checked');
            if (checkedCheckboxes.length === 1) {
                editButton.disabled = false;
                deleteButton.disabled = false;
            } else if (checkedCheckboxes.length > 1) {
                editButton.disabled = true;
                deleteButton.disabled = false;
            } else {
                editButton.disabled = true;
                deleteButton.disabled = true;
            }
        }

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', updateButtonState);
        });

        editButton.addEventListener('click', function() {
            const checkedCheckbox = document.querySelector('.certificateCheckbox:checked');
            if (checkedCheckbox) {
                const certificateId = checkedCheckbox.value;
                // Send AJAX request to fetch certificate data
                fetch(`/getCertificateData/${certificateId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Populate form fields with certificate data
                        document.getElementById('certificateId').value =
                            certificateId; // Set certificate ID
                        editCertificateForm.querySelector('#name').value = data.certificate_title;
                        editCertificateForm.querySelector('#url').value = data.company_url;
                        // Optionally, you can populate attachment field if needed

                        // Show the modal
                        editCertificateModal.show();
                    })
                    .catch(error => console.error('Error:', error));
            }
        });

        // Optional: Close the modal when Cancel button is clicked
        editCertificateForm.querySelector('button[data-bs-dismiss="modal"]').addEventListener('click',
            function() {
                editCertificateModal.hide();
            });
    });
</script>
<script>
    function previewFile() {
        const preview = document.getElementById('preview');
        const file = document.querySelector('input[type=file]').files[0];
        const reader = new FileReader();

        reader.onloadend = function() {
            const img = document.createElement('img');
            img.src = reader.result;
            preview.innerHTML = '';
            preview.appendChild(img);
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = "No file selected";
        }
    }

    document.getElementById("addPortfolioBtn").addEventListener("click", function() {
        document.getElementById("transitionScreen").style.display = "block";
    });

    document.getElementById("cancelBtn").addEventListener("click", function() {
        document.getElementById("transitionScreen").style.display = "none";
    });
</script>
<script>
    // Function to show input fields based on the selected option
    function showInput(option) {
        var videoInput = document.getElementById("videoInput");
        var imageInput = document.getElementById("imageInput");

        if (option === 'video') {
            videoInput.style.display = "block";
            imageInput.style.display = "none";
        } else if (option === 'image') {
            imageInput.style.display = "block";
            videoInput.style.display = "none";
        }
    }
</script>
<script>
    $(document).ready(function() {
        // Function to populate edit form with data
        $('.edit-portfolio').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var title = $(this).data('title');
            // Populate form fields with data
            $('#editPortfolioTitle' + id).val(title);
            // Open modal
            $('#editPortfolioModal' + id).modal('show');
        });
    });

    // Function to update range value display
    function updateRangeValue(subServiceId) {
        var rangeInput = document.getElementById("customRange_" + subServiceId);
        var percentageDisplay = document.getElementById("percentage_" + subServiceId);
        if (rangeInput && percentageDisplay) {
            percentageDisplay.innerHTML = rangeInput.value + "%";
        }
    }

    // Function to update range percentage display
    function updateRangePercentage(subServiceId) {
        var rangeInput = document.getElementById("customRange_" + subServiceId);
        var percentageDisplay = document.getElementById("percentage_" + subServiceId);
        if (rangeInput && percentageDisplay) {
            percentageDisplay.innerHTML = rangeInput.value + "%";
        }
    }
</script>

<script>
    // Function to update selected sub-services and their ranges
    function updateSelectedSubServices() {
        var selectedSubServicesContainer = document.getElementById('selectedSubServices');
        selectedSubServicesContainer.innerHTML = ''; // Clear previous selections

        var selectedSubServices = document.querySelectorAll('input[name="service[]"]:checked');
        selectedSubServices.forEach(function(subService) {
            var subServiceLabel = document.querySelector('label[for="' + subService.id + '"]').textContent;

            // Create a div to contain the selected sub-service
            var subServiceDiv = document.createElement('div');
            subServiceDiv.className = 'selected-sub-service';
            subServiceDiv.textContent = subServiceLabel;

            // Create a remove button
            var removeButton = document.createElement('span');
            removeButton.className = 'remove-sub-service';
            removeButton.textContent = 'x';
            removeButton.addEventListener('click', function() {
                subService.checked = false; // Uncheck the corresponding checkbox
                updateSelectedSubServices(); // Update the displayed selected sub-services
            });

            // Append the remove button to the div
            subServiceDiv.appendChild(removeButton);

            // Append the div to the container
            selectedSubServicesContainer.appendChild(subServiceDiv);
        });

        // Update selected sub-services ranges and their labels with values
        var selectedSubServicesRangesContainer = document.getElementById('selectedSubServicesRanges');
        selectedSubServicesRangesContainer.innerHTML = ''; // Clear previous selections

        var totalRange = 0; // Variable to store the total range value
        selectedSubServices.forEach(function(subService) {
            var subServiceLabel = document.querySelector('label[for="' + subService.id + '"]').textContent;
            var rangeValue = rangeValues[subService.value] || 0;

            // Create a div to contain the range input and label with value
            var rangeDiv = document.createElement('div');
            rangeDiv.className = 'sub-service-range';

            // Create a label for the range input
            var rangeLabel = document.createElement('label');
            rangeLabel.className = 'form-label';
            rangeLabel.textContent = subServiceLabel + ' [' + rangeValue + '%]';

            // Create a range input for the sub-service
            var rangeInput = document.createElement('input');
            rangeInput.type = 'range';
            rangeInput.className = 'form-range';
            rangeInput.id = 'range_' + subService.value;
            rangeInput.name = 'ranges[' + subService.value + ']'; // Use subservice ID as key
            rangeInput.value = rangeValue; // Set the initial value
            rangeInput.addEventListener('input', function() {
                // Update the corresponding label with the range value
                rangeValue = rangeInput.value;
                rangeValues[subService.value] = rangeValue;
                rangeLabel.textContent = subServiceLabel + ' [' + rangeValue + '%]';

                // Update total range
                totalRange = calculateTotalRange();
                if (totalRange > 100) {
                    document.getElementById('error-message').style.display = 'block';
                    document.getElementById('submit-button').disabled = true;
                } else {
                    document.getElementById('error-message').style.display = 'none';
                    document.getElementById('submit-button').disabled = false;
                }

                // Update overall percentage display
                updateOverallPercentage(totalRange);
            });

            // Append the label and range input to the div
            rangeDiv.appendChild(rangeLabel);
            rangeDiv.appendChild(rangeInput);

            // Append the div to the container
            selectedSubServicesRangesContainer.appendChild(rangeDiv);
        });

        // Update overall percentage display
        totalRange = calculateTotalRange();
        updateOverallPercentage(totalRange);
        createOrUpdatePieChart();
    }

    // Function to calculate total range
    function calculateTotalRange() {
        var total = 0;
        for (var key in rangeValues) {
            total += parseInt(rangeValues[key]);
        }
        return total;
    }

    // Function to update overall percentage display
    function updateOverallPercentage(totalRange) {
        var overallPercentageDiv = document.getElementById('overall-percentage');
        overallPercentageDiv.textContent = 'Overall Percentage: ' + totalRange + '%';
    }

    // Real-time search functionality
    document.getElementById('search').addEventListener('input', function() {
        var searchInput = this.value.toLowerCase();
        var subServiceElements = document.querySelectorAll('.sub-service');
        subServiceElements.forEach(function(element) {
            var label = element.querySelector('label').textContent.toLowerCase();
            if (label.includes(searchInput)) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        });
    });

    // Form submission validation
    document.querySelector('form').addEventListener('submit', function(event) {
        var totalRange = calculateTotalRange();
        if (totalRange > 100) {
            document.getElementById('error-message').style.display = 'block';
            document.getElementById('submit-button').disabled = true;
            event.preventDefault(); // Prevent form submission
        }
    });

    // Populate rangeValues with the values from $servicesRanges
    var rangeValues = <?php echo json_encode($servicesRanges); ?>;

    function createOrUpdatePieChart() {
        var ctx = document.getElementById('pieChart').getContext('2d');
        var labels = [];
        var data = [];

        var colors = [
            'rgba(255, 99, 132, 0.7)', // Red
            'rgba(54, 162, 235, 0.7)', // Blue
            'rgba(255, 206, 86, 0.7)', // Yellow
            'rgba(75, 192, 192, 0.7)', // Teal
            'rgba(153, 102, 255, 0.7)', // Purple
            'rgba(255, 159, 64, 0.7)', // Orange
            'rgba(128, 0, 128, 0.7)', // Purple
            'rgba(0, 128, 128, 0.7)', // Teal
            'rgba(0, 255, 0, 0.7)', // Lime
            'rgba(0, 0, 255, 0.7)', // Blue
            'rgba(255, 0, 255, 0.7)', // Magenta
            'rgba(128, 128, 0, 0.7)', // Olive
            'rgba(0, 128, 0, 0.7)', // Green
            'rgba(0, 255, 255, 0.7)', // Cyan
            'rgba(255, 0, 0, 0.7)', // Red
            'rgba(192, 192, 192, 0.7)' // Silver
            // Add more colors as needed
        ];

        // Populate labels and data arrays
        for (var subServiceId in rangeValues) {

            var labelElement = document.querySelector('label[for="service_' + subServiceId + '"]');
            if (labelElement) {

                labels.push(labelElement.textContent);
                data.push(rangeValues[subServiceId]);
            }
        }

        if (labels.length > 0) { // Check if there are labels to create the chart
            if (pieChart) {
                // Update existing chart

                pieChart.data.labels = labels;
                pieChart.data.datasets[0].data = data;
                pieChart.data.datasets[0].backgroundColor = colors.slice(0, data.length);
                pieChart.update();
            } else {
                // Create new chart
                pieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Range Values',
                            data: data,
                            backgroundColor: colors.slice(0, data.length),
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            }
        }
    }

    // Call updateSelectedSubServices() initially to display already selected sub-services
    window.addEventListener('DOMContentLoaded', updateSelectedSubServices);
</script>
<script>
    var rangeInputValues = {};
    var specializationServiceChart;
    var saveButton;

    window.onload = function() {
        populateSubServices();
        saveButton = document.getElementById('submitSpecialization');
    };

    function populateSubServices() {
        var serviceSelect = document.getElementById("serviceSelect");
        var selectedServiceId = serviceSelect.value;

        var specializationServiceRanges = <?php echo json_encode($specializationServiceRanges); ?>;
        var subServices = <?php echo json_encode($agencySubServices); ?>;

        var subServicesContainer = document.getElementById("subServicesContainer");
        subServicesContainer.innerHTML = "";

        subServices.forEach(function(subService) {
            if (subService.service_id == selectedServiceId) {
                var checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.name = "specializationService[]";
                checkbox.value = subService.id;
                checkbox.id = "subService_" + subService.id;
                checkbox.onchange = function() {
                    checkedSubServices();
                };

                var label = document.createElement("label");
                label.htmlFor = "subService_" + subService.id;
                label.appendChild(document.createTextNode(subService.sub_service_name));

                var br = document.createElement("br");

                subServicesContainer.appendChild(checkbox);
                subServicesContainer.appendChild(label);
                subServicesContainer.appendChild(br);

                checkbox.style.display = "none";

                if (specializationServiceRanges[subService.id] !== undefined) {
                    checkbox.checked = true;
                    label.classList.add("checked-label");

                    // Set range input value based on existing data
                    var rangeValue = specializationServiceRanges[subService.id];
                    var rangeInput = document.getElementById("customRange_" + subService.id);
                    if (rangeInput) {
                        rangeInput.value = rangeValue;
                        updatePercentageInput(subService.id); // Update associated percentage input
                    }
                }
            }
        });

        checkedSubServices();
        updateChart();
    }

    function checkedSubServices() {
        var checkedSubServices = document.querySelectorAll('input[name="specializationService[]"]:checked');
        var rangeContainer = document.getElementById("rangeContainer");

        var currentRangeValues = {};

        checkedSubServices.forEach(function(subService) {
            var subServiceId = subService.value;
            var rangeInput = document.getElementById("customRange_" + subServiceId);
            if (rangeInput) {
                currentRangeValues[subServiceId] = rangeInput.value;
            }
        });

        rangeContainer.innerHTML = "";

        if (checkedSubServices.length > 0) {
            checkedSubServices.forEach(function(subService) {
                var subServiceId = subService.value;
                var subServiceName = subService.nextElementSibling.textContent;

                var rangeInput = document.createElement("input");
                rangeInput.type = "range";
                rangeInput.className = "form-range";
                rangeInput.id = "customRange_" + subServiceId;
                rangeInput.max = 100;
                rangeInput.defaultValue = rangeInput.oninput = function() {
                    updatePercentageInput(subServiceId);
                };

                rangeInput.value = currentRangeValues[subServiceId] || 0;

                var percentageInput = document.createElement("input");
                percentageInput.type = "text";
                percentageInput.name = 'ranges[' + subService.value + ']';
                percentageInput.className = "form-control";
                percentageInput.id = "percentageInput_" + subServiceId;
                percentageInput.placeholder = "Range Percentage";

                var percentage = (rangeInput.value / rangeInput.max) * 100;
                percentageInput.value = Math.round(percentage) + "%";

                rangeContainer.appendChild(document.createTextNode(subServiceName + ": "));
                rangeContainer.appendChild(rangeInput);
                rangeContainer.appendChild(percentageInput);
                rangeContainer.appendChild(document.createElement("br"));

                rangeInputValues[subServiceId] = rangeInput.value;

                var label = subService.nextElementSibling;
                label.classList.add("checked-label");
            });

            rangeContainer.style.display = "block";
        } else {
            rangeContainer.style.display = "none";
        }

        var allLabels = document.querySelectorAll('input[name="specializationService[]"] ~ label');
        allLabels.forEach(function(label) {
            var checkbox = label.previousElementSibling;
            if (!checkbox.checked) {
                label.classList.remove("checked-label");
            }
        });
        updateChartAndValidate();
        updateChart();
    }

    function updatePercentageInput(subServiceId) {
        var rangeInput = document.getElementById("customRange_" + subServiceId);
        var percentageInput = document.getElementById("percentageInput_" + subServiceId);

        if (rangeInput.max != 0) {
            var percentage = (rangeInput.value / rangeInput.max) * 100;
            percentageInput.value = Math.round(percentage);

            percentageInput.style.marginLeft = "5px";
        } else {
            rangeInput.max = 100;
            percentageInput.value = "Maximum value set to 100";
        }

        rangeInputValues[subServiceId] = rangeInput.value;
        updateChartAndValidate();
        updateChart();
    }

    function validatePercentage() {
        var totalPercentage = 0;
        for (var subServiceId in rangeInputValues) {
            totalPercentage += parseInt(rangeInputValues[subServiceId]);
        }
        var errorMessageElement = document.getElementById('errorMessage');
        if (totalPercentage > 100) {
            errorMessageElement.textContent = "Total percentage cannot exceed 100%";
            document.getElementById('submitSpecialization').disabled = true
            return false;
        } else {
            errorMessageElement.textContent = "";
            document.getElementById('submitSpecialization').disabled = false

            return true;
        }
    }

    function updateChartAndValidate() {
        var isValid = validatePercentage();
        updateChart();
        // if (!isValid) {
        //     saveButton.disabled = true;
        //     console.log('Button disabled');
        // } else {
        //     saveButton.disabled = false;
        //     console.log('Button eanble');
        // }
    }

    function updateChart() {
        var labels = [];
        var data = [];
        var colors = [
            'rgba(255, 99, 132, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(255, 206, 86, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(128, 0, 128, 0.7)',
            'rgba(0, 128, 128, 0.7)',
            'rgba(0, 255, 0, 0.7)',
            'rgba(0, 0, 255, 0.7)',
            'rgba(255, 0, 255, 0.7)',
            'rgba(128, 128, 0, 0.7)',
            'rgba(0, 128, 0, 0.7)',
            'rgba(0, 255, 255, 0.7)',
            'rgba(255, 0, 0, 0.7)',
            'rgba(192, 192, 192, 0.7)'
        ];

        for (var subServiceId in rangeInputValues) {
            var subServiceName = document.querySelector('label[for="subService_' + subServiceId + '"]').textContent;
            labels.push(subServiceName);
            data.push(rangeInputValues[subServiceId]);
        }

        if (specializationServiceChart) {
            specializationServiceChart.data.labels = labels;
            specializationServiceChart.data.datasets[0].data = data;
            specializationServiceChart.data.datasets[0].backgroundColor = colors.slice(0, data.length);
            specializationServiceChart.update();
        } else {
            var ctx = document.getElementById('specializationServiceChart').getContext('2d');
            ctx.canvas.width = 300;
            ctx.canvas.height = 300;
            specializationServiceChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Range Values',
                        data: data,
                        backgroundColor: colors.slice(0, data.length),
                        borderColor: 'rgba(255, 255, 255, 0)',
                        borderWidth: 1
                    }]
                }
            });
        }
    }
</script>

<script>
    // Get the range inputs
    const ranges = document.querySelectorAll('input[type="range"]');

    // Initial data for the pie chart
    let data = {
        labels: ['Small Business', 'Medium Business', 'Enterprise'],
        datasets: [{
            data: [<?= $agencyClient->smallBusiness ?? 0 ?>, <?= $agencyClient->mediumBusiness ?? 0 ?>,
                <?= $agencyClient->enterprise ?? 0 ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)', // Red
                'rgba(54, 162, 235, 0.7)', // Blue
                'rgba(255, 206, 86, 0.7)' // Yellow
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Options for the pie chart
    const options = {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: 'Business Distribution'
        }
    };

    // Create pie chart
    const ctx = document.getElementById('myPieChart').getContext('2d');
    const myPieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });

    // Update pie chart when range inputs change
    ranges.forEach(range => {
        range.addEventListener('input', () => {
            // Update chart data
            myPieChart.data.datasets[0].data = [parseFloat(document.getElementById('customRange1')
                    .value),
                parseFloat(document.getElementById('customRange2').value),
                parseFloat(document.getElementById('customRange3').value)
            ];
            myPieChart.update();
        });
    });
</script>
</div>
</div>
</div>
