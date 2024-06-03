<x-header data="insta_project component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<style>
    .p_userInfo_tittle h5 {
        font-size: 15px;
        padding: 0px;
        font-family: "avenirmedium";
    }

    .custom_tabs {
        width: 100%;
        border: 0.5px solid #fff;
    }

    .custom_tabs ul li a.active {

        /* background-color: #dddddd; */
        background-color: transparent !important;
        color: #007bff !important;

        border-bottom: 3px solid #007bff !important;
    }

    .custom_tabs ul li a:hover {
        background-color: transparent !important;
        /* background-color: #425056; */
    }

    .custom_tabs ul li a {
        padding: 0 15px !important;
        font-weight: 500 !important;
        font-size: 15px !important;
        color: #555 !important;
    }

    .masterTab_bg {
        background-color: #ffff;
    }

    .masterTab_data {
        width: 100%;
        position: relative;
        background-color: #fff;
        box-shadow: 0px 0px 0px #cccccc96;
        padding: 20px;
        border: 1px solid #ebeaea;
    }

    .custom_tittle h5 {
        border-bottom: 1px solid #ebeaea;


    }

    .popupForm_col {
        width: 100%;
        display: block !important;
        align-items: initial;
        margin: 10px 0px;
    }

    .popupForm_col strong {
        font-family: "avenir_regularregular";
        font-size: 12px;
        color: #000;
        width: 100% !important;
        display: block;
    }

    .popupForm_field {
        width: 100% !important;
        padding-left: 0px !important;
        position: relative;
    }

    .w-25 {
        width: 15% !important;
    }

    .w-75 {
        width: 85% !important;
    }

    .custom_tittle h4 {
        font-size: 25px;
        padding-bottom: 10px;
        font-family: "avenirmedium";
        color: #343A40;
    }

    .description_small_text {
        font-size: 14px !important;
        color: #777;
        line-height: 25px;

    }

    .submit_from_bg_color {
        background-color: #343A40 !important;
        color: #Fff !important;
    }

    .submit_from_bg_color:hover {
        color: #fff !important;
    }
</style>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Insta Project</h4>
                    <p class="description_small_text">
                        <strong style="color:#343A40;">Description:</strong>To manage and track all
                        agency/contractor specifications and
                        services render.Review of a agencies
                        render of agencies render it simpler to get in communication with the agency and seek out the
                        latest information upon
                        payments.
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ url('InstaProject') }}" class="active">Create Project</a></li>
                        <li><a href="{{ route('myProjects') }}">My Project</a></li>
                        <li><a href="{{ url('InstaProject/My-Project-Bid') }}">My Project Bids</a></li>
                        <li><a href="{{ url('InstaProject/Post-Review') }}">Post Review</a></li>
                        <li><a href="{{ url('InstaProject/My-Review') }}">My Reviews</a></li>
                    </ul>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 2000);
                        </script>
                    </div>
                @endif
                <div class="custom_tabs_detail">
                    <div class="custom_tabs_data" id="tab1" style="display: block;">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="masterTab_bg">
                                    <div class="masterTab_data">
                                        <div class="container">
                                            <div class="custom_tittle">
                                                <h5 style="padding-bottom: 15px">Project Details</h5>
                                            </div>

                                            <form method="post" id="skills" action="{{ route('store_project') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-2 mt-4">
                                                        <strong>Project Title : <span
                                                                style="color: red">*</span></strong>
                                                    </div>
                                                    <div class="col-10 popupForm_col mt-4">

                                                        <div class="popupForm_field">
                                                            <input type="text" name="project_title"
                                                                value="{{ old('project_title') }}"
                                                                placeholder="Enter Project Title"
                                                                style="height:50px;font-size:13px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2 mt-4">
                                                        <strong>Category : <span style="color: red">*</span></strong>
                                                    </div>
                                                    <div class="col-5 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <select name="category_name" class="selective"
                                                                style="height:50px;font-size:13px">
                                                                @foreach ($expertCategories as $id)
                                                                    <option value="{{ $id->id }}">
                                                                        {{ $id->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-5 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <select name="category_name" class="selective"
                                                                style="height:50px;font-size:13px">
                                                                @foreach ($expertCategories as $id)
                                                                    <option value="{{ $id->id }}">
                                                                        {{ $id->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="custom_tittle mt-4">
                                                    <h5 style="padding-bottom: 15px">Project Attributes</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="col-2 mt-4"> <strong>Industry : </strong></div>
                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <select name="industry" class="selective"
                                                                style="height:50px;font-size:13px">
                                                                <option>IT</option>
                                                                <option>AUTOMOTIVE</option>
                                                                <option>HEALTHCARE</option>
                                                                {{-- @foreach ($comapnaies as $id)
                                                                    <option value="{{ $id->id }}">
                                                                        {{ $id->company_name }}
                                                                    </option>
                                                                @endforeach --}}
                                                            </select>
                                                        </div>

                                                    </div>
                                                    {{-- //searching has to implement --}}

                                                    <div class="col-2 mt-4"> <strong>Search Tags :</strong></div>

                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <input type="text" name="search_tags"
                                                                value="{{ old('search_tags') }}"
                                                                placeholder="Enter Employee Name"
                                                                style="height:50px;font-size:13px">
                                                        </div>

                                                    </div>

                                                    <div class="col-2 mt-4"><strong>Skills Required :</strong></div>

                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <input type="text" name="skills_required"
                                                                value="{{ old('skills_required') }}"
                                                                placeholder="Enter Require Skills"
                                                                style="height:50px;font-size:13px">
                                                        </div>

                                                    </div>


                                                    <div class="col-2 mt-4"><strong>Location :</strong></div>

                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <input type="text" placeholder="&#xf041; Enter Location"
                                                                style="font-family: FontAwesome;" id="location"
                                                                value="{{ old('location') }}" name="location"
                                                                style="height:50px;font-size:13px">
                                                            @error('location')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <div class="col-2 mt-4"> <strong>Reference Url:</strong></div>
                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <input type="text" name="reference_url"
                                                                value="{{ old('reference_url') }}"
                                                                placeholder="Enter The Company Url"
                                                                style="height:50px;font-size:13px">
                                                        </div>

                                                    </div>

                                                    <div class="col-2 mt-4"><strong>Budget Range (Optional):</strong>
                                                    </div>
                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field input-group w-100">
                                                            <select class="selective input-group-text w-25"
                                                                style="height:50px;font-size:13px">
                                                                <option value="inr">INR</option>
                                                            </select>
                                                            <input type="text" name="budget_range" class="w-75"
                                                                value="{{ old('budget_range') }}"
                                                                placeholder="Enter Project Budget">
                                                        </div>

                                                    </div>

                                                    <div class="col-2 mt-5"> <strong>Project Duration :</strong>
                                                    </div>
                                                    <div class="col-5 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <h9 style="font-size: 13px;margin-left:10px">Start date
                                                            </h9>
                                                            <input type="date" name="proj_start_date"
                                                                value="{{ old('start_date') }}" class="form-control"
                                                                placeholder="Enter Start Date"
                                                                style="height:50px;font-size:13px;">
                                                        </div>

                                                    </div>

                                                    <div class="col-5 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <h9 style="font-size: 13px;margin-left:10px">End date
                                                            </h9>
                                                            <input type="date" name="proj_end_date"
                                                                value="{{ old('end_date') }}" class="form-control"
                                                                placeholder="Enter End Date"
                                                                style="height:50px;font-size:13px">
                                                        </div>

                                                    </div>



                                                    <div class="col-2 mt-5"> <strong>Funding:</strong>
                                                    </div>
                                                    <div class="col-10 popupForm_col mt-4">

                                                        <div class="popupForm_field">
                                                            <textarea name="funding" rows="4" style="border:1px solid #ccc;"
                                                                placeholder="Describe About Project Funding/Financing"style="font-size:13px;">{{ old('funding') }}</textarea>
                                                        </div>

                                                    </div>

                                                    <div class="col-2 mt-5"> <strong>Project Overview</strong>
                                                    </div>
                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field">
                                                            <textarea name="Project_overview" rows="4" style="border:1px solid #ccc; font-size:13px;"
                                                                placeholder="Description of the project">{{ old('Project_overview') }}</textarea>
                                                        </div>

                                                    </div>
                                                    {{-- <div class="col-8">
                                                    <div class="popupForm_col">
                                                        <strong>Buy now price</strong>
                                                        <div class="col-4 popupForm_field">
                                                            <select name="currency_code" class="selective">
                                                                @foreach ($CurrencyCode as $id)
                                                                    <option value="{{ $id->id }}">
                                                                        {{ $id->currency }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-2 popupForm_field">
                                                            <input type="text" name="Mobile_number"
                                                                style="width:175px" placeholder="Ex:$1000"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                    <div class="col-2 mt-4"> <strong>Buy now price</strong>
                                                    </div>
                                                    <div class="col-10 popupForm_col mt-4">


                                                        <div class="popupForm_field input-group w-100">
                                                            <select name="currency_code"
                                                                style="height:50px;font-size:13px"
                                                                class="selective input-group-text w-25">
                                                                @foreach ($CurrencyCode as $id)
                                                                    <option value="{{ $id->id }}"
                                                                        @if ($id->id == '5') selected @endif>
                                                                        {{ $id->currency }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                            <input type="text" name="amount" class="w-75"
                                                                placeholder="Ex:$1000" value="{{ old('amount') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-5"> <strong>Bidding Duration :</strong></div>
                                                    <div class="col-5 mt-4 popupForm_col">
                                                        <div class="popupForm_field">
                                                            <h9 style="font-size: 10px;margin-left:13px">Start date
                                                            </h9>
                                                            <input type="date" name="Bid_start_date"
                                                                value="{{ old('Bid_start_date') }}"
                                                                class="form-control" placeholder="Enter Start Date"
                                                                style="height:50px;font-size:13px">
                                                        </div>
                                                    </div>

                                                    <div class="col-5 mt-4 popupForm_col">
                                                        <div class="popupForm_field">
                                                            <h9 style="font-size: 13px;margin-left:10px">End date
                                                            </h9>
                                                            <input type="date" name="bid_end_date"
                                                                value="{{ old('bid_end_date') }}"
                                                                class="form-control" placeholder="Enter End Date"
                                                                style="height:50px;font-size:13px">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table_actions mt-3 ms-5">
                                    <div class="table_actionsBtns">
                                        <button class="tb_actionBtn"
                                            style=" background-color: #343A40 !important;
                                        color: #Fff !important;padding:10px 10px">Save</button>
                                        <button class="tb_actionBtn "
                                            style=" background-color: #343A40 !important;
                                        color: #Fff !important;padding:10px 10px">Exit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initAutocomplete"
    async defer></script>
<script>
    function initAutocomplete() {
        var locationInput = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(locationInput);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place);
        });
    }
</script>
