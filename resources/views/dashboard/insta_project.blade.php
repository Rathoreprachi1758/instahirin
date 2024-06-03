<x-header data="profile component" />
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
</style>
<div class="fr-section">
    <div class="fr-section_detail" style="margin-top: -88px;">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Post Review
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">My Reviews
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <form class="row g-3" action="{{ route('instaProjectReviewSubmit') }}" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputName" class="form-label">Company Name</label>
                                    <select id="companyName" name="company" class="form-select"
                                        onchange="fetchDepartments()">
                                        <option selected>Choose...</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail" class="form-label">Scope of work</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Type" name="scope_work" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail" class="form-label">Company Review</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Type" name="company_review_comment" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                                <label>Quality of service and deliverable</label>
                                <div class="rating" id="quality_deliverable_rating">
                                    <input type="radio" id="qd_star5" name="quality_deliverable_rating"
                                        value="5" />
                                    <label for="qd_star5"></label>
                                    <input type="radio" id="qd_star4" name="quality_deliverable_rating"
                                        value="4" />
                                    <label for="qd_star4"></label>
                                    <input type="radio" id="qd_star3" name="quality_deliverable_rating"
                                        value="3" />
                                    <label for="qd_star3"></label>
                                    <input type="radio" id="qd_star2" name="quality_deliverable_rating"
                                        value="2" />
                                    <label for="qd_star2"></label>
                                    <input type="radio" id="qd_star1" name="quality_deliverable_rating"
                                        value="1" />
                                    <label for="qd_star1"></label>
                                </div>

                                <label>Cost and value of money</label>
                                <div class="rating" id="cost_value_rating">
                                    <input type="radio" id="cv_star5" name="cost_value_rating" value="5" />
                                    <label for="cv_star5"></label>
                                    <input type="radio" id="cv_star4" name="cost_value_rating" value="4" />
                                    <label for="cv_star4"></label>
                                    <input type="radio" id="cv_star3" name="cost_value_rating" value="3" />
                                    <label for="cv_star3"></label>
                                    <input type="radio" id="cv_star2" name="cost_value_rating" value="2" />
                                    <label for="cv_star2"></label>
                                    <input type="radio" id="cv_star1" name="cost_value_rating" value="1" />
                                    <label for="cv_star1"></label>
                                </div>

                                <label>Timelines and marketing deadlines</label>
                                <div class="rating" id="time_lines_marketing_rating">
                                    <input type="radio" id="tm_star5" name="time_lines_marketing_rating"
                                        value="5" />
                                    <label for="tm_star5"></label>
                                    <input type="radio" id="tm_star4" name="time_lines_marketing_rating"
                                        value="4" />
                                    <label for="tm_star4"></label>
                                    <input type="radio" id="tm_star3" name="time_lines_marketing_rating"
                                        value="3" />
                                    <label for="tm_star3"></label>
                                    <input type="radio" id="tm_star2" name="time_lines_marketing_rating"
                                        value="2" />
                                    <label for="tm_star2"></label>
                                    <input type="radio" id="tm_star1" name="time_lines_marketing_rating"
                                        value="1" />
                                    <label for="tm_star1"></label>
                                </div>

                                <label>Over all experience</label>
                                <div class="rating" id="over_all_rating">
                                    <input type="radio" id="oa_star5" name="over_all_rating" value="5" />
                                    <label for="oa_star5"></label>
                                    <input type="radio" id="oa_star4" name="over_all_rating" value="4" />
                                    <label for="oa_star4"></label>
                                    <input type="radio" id="oa_star3" name="over_all_rating" value="3" />
                                    <label for="oa_star3"></label>
                                    <input type="radio" id="oa_star2" name="over_all_rating" value="2" />
                                    <label for="oa_star2"></label>
                                    <input type="radio" id="oa_star1" name="over_all_rating" value="1" />
                                    <label for="oa_star1"></label>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>


                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row col-12">
                                @foreach ($instaProjectReviews as $instaProjectReview)
                                    <div class="col-4">
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-header">
                                                {{ $instaProjectReview->company->company_name }}
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Quality of service and deliverable
                                                    {{ $instaProjectReview->quality_deliverable_rating }}</li>
                                                <li class="list-group-item">Cost and value of money
                                                    {{ $instaProjectReview->cost_value_rating }}</li>
                                                <li class="list-group-item">Timelines and marketing deadlines
                                                    {{ $instaProjectReview->time_lines_marketing_rating }}</li>
                                                <li class="list-group-item">Over all experience
                                                    {{ $instaProjectReview->over_all_rating }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
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
