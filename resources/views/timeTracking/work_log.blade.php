<x-header data="offers component"/>
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                </div>
                <br>
                <div class="tabletext">
                    <form action="{{ route('workLogCompany') }}" method="POST">
                        @csrf
                        <label for="from">Select Company:</label>
                        <select id="companyName" name="company"
                                aria-label="First select example" onchange="fetchDepartments()">
                            <option selected disabled>Select Company</option>
                            @isset($companies)
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{$company->company_name }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <label for="departmentSelect">Select Department:</label>
                        <select id="departmentName" name="department"
                                aria-label="Second select example" onchange="this.form.submit()">
                            @if(!isset($companies))
                                disabled
                            @endif>
                            <option selected disabled>Select Department</option>
                            @isset($departments)
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                        <label for="from">From:</label>
                        <input type="date" id="from" name="from">
                        <label for="to">To:</label>
                        <input type="date" id="to" name="to">
                        <button type="submit">Filter</button>
                    </form>
                    <!-- End of 'from' and 'to' date inputs -->
                    <div class="custom_tabs_data" style="display: block" id="tab5">
                        <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
                                        </th>
                                        <th>
                                            <h6>Company</h6>
                                        </th>
                                        <th>
                                            <h6>Department</h6>
                                        </th>
                                        <th>
                                            <h6>Calendar</h6>
                                        </th>
                                        <th>
                                            <h6>Time Recorder</h6>
                                        </th>
                                        <th>
                                            <h6>Total Hours</h6>
                                        </th>
                                        <th>
                                            <h6>Ip Address</h6>
                                        </th>
                                        <th>
                                            <h6>Actions</h6>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($increamentId = 1)
                                    @isset($punchInOutInfo)
                                        @foreach($punchInOutInfo as $punchInOutData)
                                            <tr>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$increamentId}}</p>
                                                    </div>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $punchInOutData['company']->company_name }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $punchInOutData['department']->name }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $punchInOutData['date'] }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>punchIn - {{ $punchInOutData['punchIn'] }}</p>
                                                        <p>punchOut - {{ $punchInOutData['punchOut'] }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$punchInOutData['totalWorkHours']}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $punchInOutData['ip_address'] }}</p>
                                                    </div>
                                                </td>
                                                <td width="90">
                                                    <div class="tabletext">
                                                        <div class="statusFiled">
                                                            @if($punchInOutData['work_log_status'] === null)
                                                                <strong class="">Pending</strong>
                                                            @elseif($punchInOutData['work_log_status'] == true)
                                                                <strong class="">Accepted</strong>
                                                            @elseif($punchInOutData['work_log_status'] == false)
                                                                <strong class="">Rejected</strong>
                                                            @endif
                                                            <div class="statusFieldInfo">
                                                                <div class="statusDrop">
                                                                <span><i class="fa fa-ellipsis-v"
                                                                         aria-hidden="true"></i></span>
                                                                    <div class="statusDropdown">
                                                                        <ul>
                                                                            <li>
                                                                                <form action="{{ route('status') }}"
                                                                                      method="post">
                                                                                    @csrf
                                                                                    <input type="hidden" value="1"
                                                                                           name="status">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['department']->id}}"
                                                                                           name="department_id">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['company']->id}}"
                                                                                           name="company_id">
                                                                                    <input type="hidden"
                                                                                           value="{{ $punchInOutData['date'] }}"
                                                                                           name="date">
                                                                                    <input type="submit" value="Accept"
                                                                                           name="workLog">
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <form action="{{ route('status') }}"
                                                                                      method="post">
                                                                                    @csrf
                                                                                    <input type="hidden" value="0"
                                                                                           name="status">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['department']->id}}"
                                                                                           name="department_id">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['company']->id}}"
                                                                                           name="company_id">
                                                                                    <input type="hidden"
                                                                                           value="{{ $punchInOutData['date'] }}"
                                                                                           name="date">
                                                                                    <input type="submit" value="Reject"
                                                                                           name="workLog">
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php($increamentId++)
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function fetchDepartments() {
            var companyId = document.getElementById('companyName').value;
            var departmentSelect = document.getElementById('departmentName');
            console.log(companyId);
            // Clear previous options
            departmentSelect.innerHTML = ' <option selected disabled>Select Department</option>';

            // Fetch departments based on selected company
            fetch('/company/' + companyId, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    data.forEach(function (department) {
                        var option = document.createElement('option');
                        option.value = department.id;
                        option.textContent = department.name;
                        departmentSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching departments:', error));
        }

    </script>
</div>
