<x-header data="insta_project component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
</style>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Insta Project</h4>
                    <p class="description_small_text"><strong style="color:#343A40;">Description:</strong>To manage and
                        track all agency/contractor specifications and
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
                        <li><a href="{{ url('InstaProject/Post-Review') }}">Post Review</a></li>
                        <li><a href="{{ url('InstaProject/My-Review') }}" class="active">My Reviews</a></li>
                    </ul>
                </div>
                <div class="row col-12 mt-5">
                    @foreach ($instaProjectReviews as $instaProjectReview)
                        <div class="col-4">
                            <div class="card mt-2" style="width: 18rem;">
                                <div class="card-header">
                                    {{ $instaProjectReview->company->company_name }}
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Quality of service and deliverable:
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $instaProjectReview->quality_deliverable_rating)
                                                <i class="fa fa-star"></i>
                                            @elseif ($i - 0.5 == $instaProjectReview->quality_deliverable_rating)
                                                <i class="fa fa-star-half"></i>
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                    </li>

                                    <li class="list-group-item">Cost and value of money:
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $instaProjectReview->cost_value_rating)
                                                <i class="fa fa-star"></i>
                                            @elseif ($i - 0.5 == $instaProjectReview->cost_value_rating)
                                                <i class="fa fa-star-half"></i>
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                    </li>

                                    <li class="list-group-item">Timelines and marketing deadlines:
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $instaProjectReview->time_lines_marketing_rating)
                                                <i class="fa fa-star"></i>
                                            @elseif ($i - 0.5 == $instaProjectReview->time_lines_marketing_rating)
                                                <i class="fa fa-star-half"></i>
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                    </li>

                                    <li class="list-group-item">Overall experience:
                                        @php
                                            $overall_rating = $instaProjectReview->over_all_rating;
                                            $full_stars = floor($overall_rating);
                                            $half_star = $overall_rating - $full_stars >= 0.5 ? true : false;
                                        @endphp
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $full_stars)
                                                <i class="fa fa-star"></i>
                                            @elseif ($half_star && $i - 0.5 == $full_stars)
                                                <i class="fa fa-star-half"></i>
                                            @else
                                                <i class="fa fa-star-o"></i>
                                            @endif
                                        @endfor
                                        {{ $overall_rating }}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    @endforeach
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
            </div>
        </div>
    </div>
</div>
