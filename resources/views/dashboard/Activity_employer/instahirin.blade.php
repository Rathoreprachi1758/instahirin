<x-header data="instahirin component" />
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_responsive.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#instahire').DataTable();
    });
</script>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Employer / Company</h4>
                    <p>
                        <strong>Description:</strong> Keep track of all your
                        activities including job postings and job talents.
                        Details of shortlisted candidates will be scheduled
                        <br />
                        for interview. As well as track the status of Hired
                        details.
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="/Employer-activity">Post a Job</a></li>
                        <li><a href="/My-job-activity">My Job</a></li>
                        <li><a href="/My-job-Applicants-activity">My Job Applicants</a></li>
                        {{-- <li><a href="/job-talents-activity">Job Talents</a></li> --}}
                        <li><a href="/Instahirin-activity" class="active">InstaHirin Talents</a></li>
                        <li><a href="/Interview-schedule">Interview Scheduled</a></li>
                        <li><a href="/Job-status">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
            </div>
            <br>
            <!-- tab5 data  -->
            <div class="custom_tabs_data" style="display: block" id="tab5">
                <div class="activityTable_data">
                    <table class="table table-striped" id="instahire">
                        <thead>
                            <tr>
                                <th>
                                    <h6>Id</h6>
                                </th>
                                <th>
                                    <h6>Name</h6>
                                </th>
                                <th>
                                    <h6>Position Title</h6>
                                </th>
                                <th>
                                    <h6>Experience<br>
                                        (In years)</h6>
                                </th>
                                <th>
                                    <h6>Expert in</h6>
                                </th>
                                <th>
                                    <h6>Also Work With</h6>
                                </th>
                                <th>
                                    <h6>Avalilability</h6>
                                </th>
                                <th>
                                    <h6>LinkedIn profile</h6>
                                </th>
                                <th>
                                    <h6>Attachment</h6>
                                </th>
                                <th width="180">
                                    <h6>Schedule Interview</h6>
                                    <table>
                                        <thead>
                                            <th width="60">
                                                <h6>Date</h6>
                                            </th>
                                            <th width="60">
                                                <h6>From</h6>
                                            </th>
                                            <th width="60">
                                                <h6>To</h6>
                                            </th>
                                        </thead>
                                    </table>
                                </th>


                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($insta_onboard as $on_board)
                                <tr>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->id }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->current_title }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->experience_year }}.{{ $on_board->experience_month }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->expert_in }}</p>
                                            <p>-</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->also_work_with}}</p>
                                            {{-- <p>-</p> --}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->availability }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>Linkedin Profile</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>{{ $on_board->document }}</p>
                                        </div>
                                    </td>

                                    <td width="180">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td width="80">
                                                        <div class="tabletext">
                                                            <p>{{ $on_board->availability_date }}</p>
                                                        </div>
                                                    </td>
                                                    <td width="50">
                                                        <div class="tabletext">
                                                            <p>{{ $on_board->availability_time_from }}</p>
                                                        </div>
                                                    </td>
                                                    <td width="50">
                                                        <div class="tabletext">
                                                            <p>{{ $on_board->availability_time_to }}</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>⋮</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                    <td>
                                        <div class="tabletext">
                                            <p>1</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>Ravi Kumar</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>+91 9671237612</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>ravik@gmail.com</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>Hyderabad</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>On Site</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>IOS Developer</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>5 Yrs</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>400000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>B.Com</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>30 Days</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>Full Time</p>
                                        </div>
                                    </td>

                                    <td width="180">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td width="80">
                                                        <div class="tabletext">
                                                            <p>DD-MM-YYYY</p>
                                                        </div>
                                                    </td>
                                                    <td width="50">
                                                        <div class="tabletext">
                                                            <p>HH-MM</p>
                                                        </div>
                                                    </td>
                                                    <td width="50">
                                                        <div class="tabletext">
                                                            <p>HH-MM</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tabletext">
                                            <p>1</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>Ravi Kumar</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>+91 9671237612</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>ravik@gmail.com</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>Hyderabad</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>On Site</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>IOS Developer</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>5 Yrs</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>400000</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>B.Com</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>30 Days</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tabletext">
                                            <p>Full Time</p>
                                        </div>
                                    </td>

                                    <td width="180">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td width="80">
                                                        <div class="tabletext">
                                                            <p>DD-MM-YYYY</p>
                                                        </div>
                                                    </td>
                                                    <td width="50">
                                                        <div class="tabletext">
                                                            <p>HH-MM</p>
                                                        </div>
                                                    </td>
                                                    <td width="50">
                                                        <div class="tabletext">
                                                            <p>HH-MM</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
