<x-header data="offers component" />
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
                        <li><a href="{{ route('Applied.jobs') }}">Applied</a></li>
                        <li>
                            <a href="{{ route('Interview.schedule.calander') }}">Interview Scheduled Calendar</a>
                        </li>
                        <li><a href="{{ route('Applied.offers') }}" class="active">Offers</a></li>
                        <li><a href="{{ route('Applied.History') }}">History</a></li>
                    </ul>
                </div>
                <br>
                <div class="custom_tabs_data" style="display: block" id="tab5">
                    <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                        <div class="activityTable_data">
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
                                            <h6>Status</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="tabletext">
                                                <p>1</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>InstaHirin</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Python Developer</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>5 Yrs</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Java, C, C+</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td width="90">
                                            <div class="tabletext">
                                                <div class="statusFiled">
                                                    <p><strong class="">Reject</strong></p>
                                                    <div class="statusFieldInfo">
                                                        <div class="statusDrop">
                                                            <span><i class="fa fa-ellipsis-v"
                                                                    aria-hidden="true"></i></span>
                                                            <div class="statusDropdown">
                                                                <ul>
                                                                    <li>
                                                                        <strong><i class="fa fa-check"
                                                                                aria-hidden="true"></i>
                                                                            Accept</strong>
                                                                    </li>
                                                                    <li>
                                                                        <strong><i class="fa fa-times"
                                                                                aria-hidden="true"></i>
                                                                            Reject</strong>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
