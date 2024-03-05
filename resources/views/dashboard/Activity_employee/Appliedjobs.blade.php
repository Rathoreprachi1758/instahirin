<x-header data="applied component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Employee / Talent</h4>

                    <p>
                        <strong>Description:</strong> Monitor talent profile
                        details including jobs applied, Offers, and favourites.
                        Eyeball on details of the interview scheduled under
                        <br />the Interview Scheduled Calander, attributes of
                        all the job activities performed will be viewed under
                        the History tab..
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ url('Employee-activity') }}">My Resume</a></li>
                        <li><a href="{{ route('favorites') }}">Favourites</a></li>
                        <li><a href="{{ route('Applied.jobs') }}" class="active">Applied</a></li>
                        <li>
                            <a href="{{ route('Interview.schedule.calander') }}">Interview Scheduled Calendar</a>
                        </li>
                        <li><a href="{{ route('Applied.offers') }}">Offers</a></li>
                        <li><a href="{{ route('Applied.History') }}">History</a></li>
                    </ul>
                </div>
                <br>
                <div class="custom_tabs_data" style="display: block" id="tab3">
                    <div class="col-xxl-9 col-xl-10 col-lg-11 col-md-12">
                        <div class="activityTable_data">
                            {{-- <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>Id</h6>
                                        </th>
                                        <th>
                                            <h6>Company Name</h6>
                                        </th>
                                        <th>
                                            <h6>Position Title</h6>
                                        </th>
                                        <th>
                                            <h6>Experience</h6>
                                        </th>
                                        <th>
                                            <h6>Key Skills</h6>
                                        </th>
                                        <th>
                                            <h6>Location</h6>
                                        </th>
                                        <th>
                                            <h6>Availability</h6>
                                        </th>
                                        <th>
                                            <h6>Applied on</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($applicant as $applay)
                                        <tr>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applay->id}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applay->id}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applay->current_title}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applay->experience_year}}.{{$applay->experience_month}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applay->key_skills}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applay->company_location}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applay->availability_date}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Bizionic Portal</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>Id</h6>
                                        </th>
                                        <th>
                                            <h6>Company Name</h6>
                                        </th>
                                        <th>
                                            <h6>Position Title</h6>
                                        </th>
                                        <th>
                                            <h6>Experience</h6>
                                        </th>
                                        <th>
                                            <h6>Key Skills</h6>
                                        </th>
                                        <th>
                                            <h6>Location</h6>
                                        </th>
                                        <th>
                                            <h6>Availability</h6>
                                        </th>
                                        <th>
                                            <h6>Applied on</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jobsWithApplicants as $job)
                                        @foreach($job->applicants as $applicant)
                                            <tr>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$applicant->id}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$job->company}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$applicant->current_title}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$applicant->experience_year}}.{{$applicant->experience_month}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$applicant->key_skills}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$applicant->company_location}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$applicant->availability_date}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>Bizionic Portal</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
