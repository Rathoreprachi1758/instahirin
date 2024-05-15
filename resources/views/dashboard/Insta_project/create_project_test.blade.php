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
</style>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Insta Project</h4>
                    <p><strong>Description:</strong>To manage and track all agency/contractor specifications and
                        services render.Review of a agencies
                        render of agencies render it simpler to get in communication with the agency and seek out the
                        latest information upon
                        payments.
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{url('InstaProject')}}" class="active">Create Project</a></li>
                        <li><a href="{{url('InstaProject/My-Projects')}}">My Project</a></li>
                        <li><a href="{{url('InstaProject/My-Project-Bid')}}">My Project Bids</a></li>
                        <li><a href="{{url('InstaProject/Post-Review')}}">Post Review</a></li>
                        <li><a href="{{url('InstaProject/My-Review')}}">My Reviews</a></li>
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
                        <div class="masterTab_bg">
                            <div class="masterTab_data">
                                <div class="container">
                                    <div class="custom_tittle">
                                        <h5 style="padding-bottom: 0px">Project Details</h5>
                                    </div>
                                    <hr>
                                    <form method="post" id="skills" action="{{ route('store_project') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-8 popupForm_col">
                                                <strong>Project Title : <span style="color: red">*</span></strong>
                                                <div class="popupForm_field">
                                                    <input type="text" name="project_title"
                                                        value="{{ old('project_title') }}"
                                                        placeholder="Enter Project Title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Category : <span style="color: red">*</span></strong>
                                                    <div class="popupForm_field">
                                                        <select name="category_name" class="selective">
                                                            @foreach ($expertCategories as $id)
                                                                <option value="{{ $id->id }}">
                                                                    {{ $id->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom_tittle">
                                            <h5 style="padding-bottom: 0px">Project Attributes</h5>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Industry : </strong>
                                                    <div class="popupForm_field">
                                                        <select name="industry" class="selective">
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
                                            </div>
                                            {{-- //searching has to implement --}}
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Search Tags :</strong>
                                                    <div class="popupForm_field">
                                                        <input type="text" name="search_tags"
                                                            value="{{ old('search_tags') }}"
                                                            placeholder="Enter Employee Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Skills Required :</strong>
                                                    <div class="popupForm_field">
                                                        <input type="text" name="skills_required"
                                                            value="{{ old('skills_required') }}"
                                                            placeholder="Enter Require Skills">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Location :</strong>
                                                    <div class="popupForm_field">
                                                        <input type="text" placeholder="Enter Location" id="location"
                                                            value="{{ old('location') }}" name="location">
                                                        @error('location')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Reference Url</strong>
                                                    <div class="popupForm_field">
                                                        <input type="text" name="reference_url"
                                                            value="{{ old('reference_url') }}"
                                                            placeholder="Enter The Company Url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Budget Range (Optional)</strong>
                                                    <div class="popupForm_field">
                                                        <input type="text" name="budget_range"
                                                            value="{{ old('budget_range') }}"
                                                            placeholder="Enter Project Budget">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Project Duration :</strong>
                                                    <div class="col-4 popupForm_field">
                                                        <h9 style="font-size: 10px;margin-left:10px">Start date
                                                        </h9>
                                                        <input type="date" name="proj_start_date"
                                                            value="{{ old('start_date') }}" class="form-control"
                                                            placeholder="Enter Start Date">
                                                    </div>
                                                    <div class="col-4 popupForm_field">
                                                        <h9 style="font-size: 10px;margin-left:10px">End date
                                                        </h9>
                                                        <input type="date" name="proj_end_date"
                                                            value="{{ old('end_date') }}" class="form-control"
                                                            placeholder="Enter End Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Funding</strong>
                                                    <div class="popupForm_field">
                                                        <textarea name="funding" style="border:1px solid #ccc;width: 350px;height: 100px;"
                                                            placeholder="Describe About Project Funding/Financing">{{old('funding')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Project Overview</strong>
                                                    <div class="popupForm_field">
                                                        <textarea name="Project_overview" style="border:1px solid #ccc;width: 350px;height: 100px;"
                                                            placeholder="Description of the project">{{old('Project_overview')}}</textarea>
                                                    </div>
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
                                            <div class="col-8">
                                                <div class="popupForm_col"
                                                    style="border: 1px solid #ccc; padding: 10px; display: flex;">
                                                    <strong>Buy now price</strong>
                                                    <div class="col-4 popupForm_field">
                                                        <select name="currency_code" class="selective"
                                                            style="padding: 9px 13px;font-size: 10px;width: 61%;">
                                                            @foreach ($CurrencyCode as $id)
                                                                <option value="{{ $id->id }}"
                                                                    @if ($id->id == '5') selected @endif>
                                                                    {{ $id->currency }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-4 popupForm_field">
                                                        <input type="text" name="amount"
                                                            style="width: 250px; margin-left: -5rem"
                                                            placeholder="Ex:$1000" value="{{old('amount')}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="popupForm_col">
                                                    <strong>Bidding Duration :</strong>
                                                    <div class="col-4 popupForm_field">
                                                        <h9 style="font-size: 10px;margin-left:10px">Start date
                                                        </h9>
                                                        <input type="date" name="Bid_start_date"
                                                            value="{{ old('Bid_start_date') }}" class="form-control"
                                                            placeholder="Enter Start Date">
                                                    </div>
                                                    <div class="col-4 popupForm_field">
                                                        <h9 style="font-size: 10px;margin-left:10px">End date
                                                        </h9>
                                                        <input type="date" name="bid_end_date"
                                                            value="{{ old('bid_end_date') }}" class="form-control"
                                                            placeholder="Enter End Date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="table_actions" style="margin-left: 294px;margin-top:25px">
                            <div class="table_actionsBtns">
                                <button class="tb_actionBtn" style="background-color:#343A40;color:#fff">Save</button>
                                <button class="tb_actionBtn" style="background-color:#343A40;color:#fff">Exit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initAutocomplete" async defer></script>
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
