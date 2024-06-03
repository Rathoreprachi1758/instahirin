<x-header data="insta_project create_review component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<style>
    .p_userInfo_tittle h5 {
        font-size: 15px;
        padding: 0px;
        font-family: "avenirmedium";
    }

    /* Default text color for buttons */
    .nav-link {
        color: black;
    }

    /* Active state text color */
    .nav-link.active {
        color: white;
    }

    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
        text-align: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        content: "\2605";
        font-size: 2em;
        font-family: Arial, sans-serif;
        display: inline-block;
        padding-right: 5px;
        /* Adjust as needed for spacing */
    }

    .rating>label {
        color: #ddd;
        cursor: pointer;
    }

    .rating>input:checked~label {
        color: #f90;
    }

    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
    }

    .rating>span {
        display: inline-block;
        position: relative;
        width: 1em;
    }

    .rating>span:hover:before,
    .rating>span:hover~span:before,
    .rating>span:hover:before,
    .rating>input:checked~span:before {
        content: "\2605";
        position: absolute;
        color: gold;
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


    .submit_from_bg_color {
        background-color: #343A40 !important;
        color: #Fff !important;
    }

    .submit_from_bg_color:hover {
        color: #fff !important;
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

    .jq-ry-container .jq-ry-group-wrapper .jq-ry-group svg {
        fill: #FDCC0D !important;
    }
</style>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Insta Project </h4>
                    <p class="description_small_text"><strong style="color:#343A40;">Description:</strong>To manage and
                        track all
                        agency/contractor specifications and
                        services render.Review of a agencies
                        render of agencies render it simpler to get in communication with the agency and seek out the
                        latest information upon
                        payments.
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ url('InstaProject') }}">Create Project</a></li>
                        <li><a href="{{ url('InstaProject/My-Projects') }}">My Project</a></li>
                        <li><a href="{{ url('InstaProject/My-Project-Bid') }}">My Project Bids</a></li>
                        <li><a href="{{ url('InstaProject/Post-Review') }}" class="active">Post Review</a></li>
                        <li><a href="{{ url('InstaProject/My-Review') }}">My Reviews</a></li>
                    </ul>
                </div>
                <div class="container mt-5">
                    <form class="row g-3" action="{{ route('instaProjectReviewSubmit') }}" method="post"
                        style=" border: 1px solid #ebeaea;padding: 10px; background-color: #Fff !important; border-radius: 4px;">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputName" class="form-label" style="font-size:14px;">Company Name</label>
                            <select id="companyName" name="company" class="form-select"
                                style="height:50px;font-size:13px;" onchange="fetchDepartments()">
                                <option selected>Choose...</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="inputName" class="form-label" style="font-size:14px;">Company Name</label>
                            <select id="companyName" name="company" class="form-select"
                                style="height:50px;font-size:13px;" onchange="fetchDepartments()">
                                <option selected>Choose...</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label" style="font-size:14px;">Scope of work</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Type" name="scope_work" id="floatingTextarea"
                                    style="height:50px;font-size:13px;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label" style="font-size:14px;">Company Review</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Type" name="company_review_comment" id="floatingTextarea"
                                    style="height:50px;font-size:13px;"></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label>Quality of service and deliverable</label>
                            <div id="rateYo"></div>
                            <input type="hidden" name="quality_deliverable_rating" id="quality_deliverable_rating"
                                color="" value="">
                            <label class="mt-2">Cost and value of money</label>
                            <div id="rateYo1"></div>
                            <input type="hidden" name="cost_value_rating" id="cost_value_rating" value="">

                            <label class="mt-2">Timelines and marketing deadlines</label>
                            <div id="rateYo2"></div>
                            <input type="hidden" name="time_lines_marketing_rating" id="time_lines_marketing_rating"
                                value="">
                            <label class="mt-2">Over all experience</label>
                            <div id="rateYo3"></div>
                            <input type="hidden" name="over_all_rating" id="over_all_rating" value="">

                        </div>

                        <div class="col-12 mt-2">
                            <button type="submit" class="btn submit_from_bg_color">Submit</button>
                        </div>
                    </form>
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
                {{-- /////////// --}}
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
    // Function to generate stars based on decimal ratings
    $(function() {


        $("#rateYo").rateYo({
            halfStar: true
        }).on("rateyo.change", function(e, data) {
            var rating = data.rating;
            $("#quality_deliverable_rating").val(rating);
        });

        $("#rateYo1").rateYo({
            halfStar: true
        }).on("rateyo.change", function(e, data) {
            var rating = data.rating;
            $("#cost_value_rating").val(rating);
        });

        $("#rateYo2").rateYo({
            halfStar: true
        }).on("rateyo.change", function(e, data) {
            var rating = data.rating;
            $("#time_lines_marketing_rating").val(rating);
        });

        $("#rateYo3").rateYo({
            halfStar: true
        }).on("rateyo.change", function(e, data) {
            var rating = data.rating;
            $("#over_all_rating").val(rating);
        });
    });
</script>
