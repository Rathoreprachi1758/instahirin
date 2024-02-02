<x-header data="scheduled component" />
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
                            <a href="{{ route('Interview.schedule.calander') }}" class="active">Interview Scheduled
                                Calendar</a>
                        </li>
                        <li><a href="{{ route('Applied.offers') }}">Offers</a></li>
                        <li><a href="{{ route('Applied.History') }}">History</a></li>
                    </ul>
                </div>
                <br>
                <div class="custom_tabs_data" style="display: block" id="tab4">
                    <div class="row">
                        <div class="col-xxl-11 col-xl-11 col-lg-12 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h6>Id</h6>
                                            </th>
                                            <th>
                                                <h6>Position Title</h6>
                                            </th>
                                            <th>
                                                <h6>Company Name</h6>
                                            </th>
                                            <th>
                                                <h6>Business Email</h6>
                                            </th>
                                            <th>
                                                <h6>Location</h6>
                                            </th>
                                            <th>
                                                <h6>Hire Period</h6>
                                            </th>
                                            <th width="220">
                                                <h6>
                                                    Scheduled on Virtual call Assistance
                                                </h6>
                                                <table>
                                                    <thead>
                                                        <th width="100">
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
                                                <h6>Meeting Link</h6>
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
                                                    <p>SQL Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Bizionic Tech</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>hr@bizionictech.com</p>
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
                                            <td width="220">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td width="100">
                                                                <div class="tabletext">
                                                                    <p>DD-MM-YYYY</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>
                                                        <a href="#">https://us04web.zoom.us/j/739425646</a>
                                                    </p>
                                                </div>
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
                                                    <p>SQL Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Bizionic Tech</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>hr@bizionictech.com</p>
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
                                            <td width="220">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td width="100">
                                                                <div class="tabletext">
                                                                    <p>DD-MM-YYYY</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>
                                                        <a href="#">https://us04web.zoom.us/j/739425646</a>
                                                    </p>
                                                </div>
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
                                                    <p>SQL Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Bizionic Tech</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>hr@bizionictech.com</p>
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
                                            <td width="220">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td width="100">
                                                                <div class="tabletext">
                                                                    <p>DD-MM-YYYY</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>
                                                        <a href="#">https://us04web.zoom.us/j/739425646</a>
                                                    </p>
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
</div>
