<x-header data="interview_schedule component" />
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_responsive.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Interview_schedule').DataTable();
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
                        <li><a href="/Instahirin-activity">InstaHirin Shortlist</a></li>
                        <li><a href="/Interview-schedule" class="active">Interview Scheduled</a></li>
                        <li><a href="/Job-status">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <br>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            // Automatically hide the success message after 20 seconds
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 5000);
                        </script>
                    </div>
                @endif
                <!-- tab6 data  -->
                <div class="custom_tabs_data" style="display: block" id="tab6">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped" id="Interview_schedule">
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
                                            <th width="240">
                                                <h6>Scheduled on Virtual-call-Assistance</h6>
                                                <table>
                                                    <thead>
                                                        <th width="110">
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
                                                <h6>Company Name</h6>
                                            </th>
                                            <th>
                                                <h6>Business Email</h6>
                                            </th>
                                            <th>
                                                <h6>Hire Period</h6>
                                            </th>
                                            <th>
                                                <h6>Meeting Link</h6>
                                            </th>
                                            <th>
                                                <h6>Interviewer</h6>
                                            </th>
                                            <th>
                                                <h6>Interview Coordinator</h6>
                                            </th>
                                            <th>
                                                <h6>Action</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($insta_onboard as $item)
                                            <tr>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $item['id'] }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $item['name'] ?? $item['title'] }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        {{-- <p>{{ $item->current_title }}</p> --}}
                                                        <p>{{ $item['current_title'] ?? $item['sub_title'] }}</p>
                                                    </div>
                                                </td>
                                                <td width="240">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td width="110">
                                                                    <div class="tabletext">
                                                                        <p>{{ $item['availability_date'] ?? 'From Hirerequest' }}</p>
                                                                    </div>
                                                                </td>
                                                                <td width="60">
                                                                    <div class="tabletext">
                                                                        <p>{{ $item['availability_time_from'] ?? null }}</p>
                                                                    </div>
                                                                </td>
                                                                <td width="60">
                                                                    <div class="tabletext">
                                                                        <p>{{ $item['availability_time_to'] ?? null }}</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$item['company'] ?? $item['last_company']}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>hr@bizionictech.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$item['employment_type']?? $item['availability']}}</p>
                                                    </div>
                                                </td>
                                                <form method="POST" action="{{ route('interview_schedule') }}">
                                                    @csrf
                                                    <input type="hidden" name="candidate_id"
                                                        value="{{ $item['id'] }}">
                                                    <input type="hidden" name="candidate_name"
                                                        value="{{ $item['name'] ?? $item['title'] }}">
                                                    <input type="hidden" name="candidate_email"
                                                        value="{{ $item['email']?? null }}">
                                                    <input type="hidden" name="candidate_location"
                                                        value="{{ $item['current_location']?? null }}">
                                                    <input type="hidden" name="current_title"
                                                        value="{{ $item['current_title']??null }}">
                                                    <input type="hidden" name="experience_year"
                                                        value="{{ $item['experience_year'].'.'.$item['experience_month']?? $item['experience']}}">

                                                    <input type="hidden" name="availability_date"
                                                        value="{{ $item['availability_date'] ?? null }}">
                                                    <input type="hidden" name="availability_time_from"
                                                        value="{{ $item['availability_time_from'] ?? null }}">
                                                    <input type="hidden" name="availability_time_to"
                                                        value="{{ $item['availability_time_to']??null }}">

                                                    <input type="hidden" name="annual_salary"
                                                        value="{{ $item['annual_salary_currency'].'.'.$item['annual_salary'] ?? null}}">
                                                    <input type="hidden" name="availability"
                                                        value="{{ $item['availability']?? null }}">
                                                    <input type="hidden" name="notice_period"
                                                        value="{{ $item['notice_period']??null }}">
                                                    <input type="hidden" name="contact_details"
                                                        value="{{ $item['contact_details']?? null }}">
                                                    <input type="hidden" name="highest_qualification"
                                                        value="{{ $item['highest_qualification']??null }}">
                                                    <td>
                                                        <div class="tabletext">
                                                            @if (isset($item['Meeting_link']))
                                                                <a href="{{ $item['Meeting_link'] }}"
                                                                    target="_blank">{{ $item['Meeting_link'] }}</a>
                                                                    {{-- <p>Hii</p> --}}
                                                            @else
                                                                <p><input type="text" class="form-control"
                                                                        name="Meeting_link"
                                                                        placeholder="Ex: https://us04web.zoom.us/j/739425646">
                                                                </p>
                                                                {{-- <p>Hello</p> --}}
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if (isset($item['interviewr']))
                                                            <p>{{ $item['interviewr'] }}</p>
                                                        @else
                                                            <div class="tabletext"><input type="text"
                                                                    name="interviewer" class="form-control"
                                                                    placeholder="James"></div>
                                                            </p>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        @if (isset($item['interview_co_ordinator']))
                                                            <p>{{ $item['interview_co_ordinator'] }}</p>
                                                        @else
                                                            <div class="tabletext"><input type="text"
                                                                    class="form-control" name="interview_co_ordinator"
                                                                    placeholder="Robert"></div>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <div class="tabletext"><input class="btn btn-dark"
                                                                class="form-control" style="border-radius: 7px"
                                                                type="submit"></div>
                                                    </td>
                                                </form>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="11">No interview schedules found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
