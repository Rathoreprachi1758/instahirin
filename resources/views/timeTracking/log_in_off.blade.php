@phpuse Carbon\Carbon;
@endphp ?> ?> ?> ?> ?>
<x-header data="worklog" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
<!-- aos animation  -->
<link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">
<!-- font awesome-->
<link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
<style>
    /*Circles Dashboard Zizo*/
    .doghnutChartGroup {
        margin: 10px;
        width: 100px;
        display: flex;
        justify-content: center
    }

    .doghnutChartGroup .circular-progress {
        background: linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(126deg, #1e85f1 50%, #E0E0E0 50%, #E0E0E0);
        border-radius: 50%;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        height: 110px;
        margin: 2em auto;
        position: relative;
        min-width: 110px;
        margin: 10px;
        transition: background .5s 0.3s;
    }

    .doghnutChartGroup .circular-progress::before {
        background-color: #FAFAFA;
        border-radius: 50%;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        color: rgba(0, 0, 0, 0.54);
        content: attr(data-text);
        font-size: 22px;
        font-weight: bold;
        height: 100%;
        text-align: center;
        left: 0;
        line-height: 110px;
        position: absolute;
        text-align: center;
        top: 0;
        -webkit-transform: scale(0.87);
        transform: scale(0.87);
        width: 100%;
    }


    @keyframes turning_cw {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }


    .calendar-container {
        height: 100%;
        width: 100%;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4);
    }

    .calendar-week {
        display: flex;
        list-style: none;
        align-items: center;
        padding-inline-start: 0px;
    }

    .calendar-week-day {
        max-width: 100%;
        width: 100%;
        text-align: center;
        color: #525659;
    }

    .calendar-days {
        margin-top: 0px;
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
        padding-inline-start: 0px;
    }

    .calendar-day {
        text-align: center;
        color: #525659;
        padding: 8px 0;
    }

    .calendar-month-arrow-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .calendar-month-year-container {
        padding: 10px 10px 20px 10px;
        color: #525659;
        cursor: pointer;
    }

    .calendar-arrow-container {
        margin-top: -5px;
    }

    .calendar-left-arrow,
    .calendar-right-arrow {
        height: 30px;
        width: 30px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        color: #525659;
    }

    .calendar-today-button {
        margin-top: -10px;
        border-radius: 10px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        color: #525659;
        padding: 5px 10px;
    }

    .calendar-today-button {
        height: 27px;
        margin-right: 10px;
        background-color: #1e85f1;
        color: white;
    }

    .calendar-months,
    .calendar-years {
        flex: 1;
        border-radius: 10px;
        height: 30px;
        border: none;
        cursor: pointer;
        outline: none;
        color: #525659;
        font-size: 15px;
    }

    .calendar-day-active {
        background-color: #1e85f1;
        color: white;
        border-radius: 50%;
    }


    .events li {
        display: flex;
    }

    .events time {
        position: relative;
        color: #ccc;
        padding: 0 1em 0 0;
    }

    .events time::after {
        content: "";
        position: absolute;
        z-index: 2;
        left: 0;
        top: 0px;
        transform: translateX(0%);
        border-radius: 50%;
        background: #fff;
        border: 4px #000 solid;
        width: 15px;
        height: 15px;
    }


    .events span {
        padding: 0 0.5em 0.7em 1em;
        position: relative;
        margin-top: -3px
    }

    .events span::before {
        content: "";
        position: absolute;
        z-index: 1;
        left: -9px;
        height: 100%;
        max-height: 100%;
        border-left: 1px #ccc solid;
    }

    .card {
        border-radius: 20px;
        /* box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; */
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        margin-bottom: 20px;
        padding: 5px;
        height: 370px;
        border: 1px solid #fff;

    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="container-fluid">
                <div style="font-size:22px;font-weight:600;margin-bottom:3px;">Time Tracking</div>
                <div style="font-size:16px;font-weight:500;margin-bottom:15px"><b>Description:</b> To monitor the
                    timekeeping records of employees within their respective companies.</div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <select id="companyName" class="form-select me-3" name="company"
                                    style="border-radius: 100px;padding:10px;background-color:#f9f9f9;margin-bottom:10px"
                                    aria-label="First select example" onchange="fetchDepartments()">
                                    <option selected disabled>Select Company</option>
                                    @isset($companies)
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <form id="departmentForm" action="{{ route('department') }}" method="POST">
                                    @csrf
                                    <select id="departmentName" class="form-select me-3" name="department"
                                        style="border-radius: 100px;padding:10px;background-color:#f9f9f9;margin-bottom:10px"
                                        aria-label="Second select example" onchange="this.form.submit()">
                                        @if (!isset($companies))
                                            disabled
                                        @endif>
                                        <option selected disabled>Select Department</option>
                                        @isset($departments)
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}">
                                                    {{ $department->department_name }}
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </form>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <select id="companyName" class="form-select me-3" name="company"
                                    style="border-radius: 100px;padding:10px;background-color:#f9f9f9;margin-bottom:10px"
                                    aria-label="First select example" onchange="fetchDepartments()">
                                    <option selected disabled>Select Employee</option>
                                    @isset($companies)
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card p-4">
                            <div class="d-flex justify-content-between">
                                <div style="color:#1e85f1;font-size:20px;font-weight:600">Timesheet</div>
                                <div style="color:#777;font-size:16px">9 Dec 2023</div>
                            </div>
                            <div class="card-box p-2"
                                style="border:1px solid #eae8e8;border-radius:10px;margin-top:10px;">
                                <div style="color:#666;font-size:16px">Punch In at</div>
                                <div style="color:#666;font-size:13px">Sat, 9th Dec 2023 10.00 AM</div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="doghnutChartGroup displayInlineBlock">
                                    <div class="circular-progress" data-percent="55.45" data-text="3.45 hrs"></div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-dark"
                                    style="padding:8px 35px;border-radius:10px;font-size:14px;font-weight:600">Punch
                                    In</button>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card p-4">

                            <div style="color:#1e85f1;font-size:20px;font-weight:600;margin-bottom:8px;">Emoloyee
                                Details</div>

                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Name:</b> John Phillips</div>
                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Company:</b> Bizionic
                                Technologies</div>
                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Department:</b> Marketing
                            </div>
                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Designation:</b> Python
                                Developer</div>
                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Employ ID:</b> 014</div>
                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Mail ID:</b>
                                John@bizionictech.com</div>

                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Reporting Manager:</b> Syed
                                Hussaini(001)</div>
                            <div style="font-size: 16px;color:#777;margin-bottom:0px;"><b>Time Zone:</b> <select
                                    style="font-size: 16px;color:#777;border-bottom:1px solid #777;">
                                    <option value="">GMT +530 hours</option>
                                </select></div>

                        </div>
                    </div>



                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card p-4">
                            <ul class="events">
                                <li>
                                    <time></time>
                                    <span style="font-size: 16px;color:#777">Punch in at<br>
                                        <div style="font-size:12px;color:#b0adad;">10.00AM</div>
                                    </span>



                                </li>

                                <li>
                                    <time></time>
                                    <span style="font-size: 16px;color:#777">Punch Out at
                                        <br>
                                        <div style="font-size:12px;color:#b0adad;">7.00PM</div>
                                    </span>



                                </li>




                                <li>
                                    <time></time>
                                    <span style="font-size: 16px;color:#777">Punch in at<br>
                                        <div style="font-size:12px;color:#b0adad;">10.00AM</div>

                                    </span>


                                </li>

                                <li>
                                    <time></time>
                                    <span style="font-size: 16px;color:#777">Punch in at
                                        <br>
                                        <div style="font-size:12px;color:#b0adad;">8.00PM</div>
                                    </span>




                                </li>

                                <li>
                                    <time></time>
                                    <span style="font-size: 16px;color:#777">Punch in at
                                        <br>
                                        <div style="font-size:12px;color:#b0adad;">10.00Am</div>
                                    </span>



                                </li>

                                <li>
                                    <time></time>
                                    <span style="font-size: 16px;color:#777">Punch Out at
                                        <br>
                                        <div style="font-size:12px;color:#b0adad;">9.00PM</div>
                                    </span>




                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <div class="calendar-container">
                                <div class="calendar-month-arrow-container">
                                    <div class="calendar-month-year-container">
                                        <select class="calendar-years"></select>
                                        <select class="calendar-months">
                                        </select>
                                    </div>
                                    <div class="calendar-month-year">
                                    </div>
                                    <div class="calendar-arrow-container">
                                        <button class="calendar-today-button"></button>
                                        <button class="calendar-left-arrow">
                                            ← </button>
                                        <button class="calendar-right-arrow"> →</button>
                                    </div>
                                </div>
                                <ul class="calendar-week">
                                </ul>
                                <ul class="calendar-days">
                                </ul>
                            </div>
                        </div>
                    </div>








                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card p-4">

                            <div style="color:#1e85f1;font-size:20px;font-weight:600;margin-bottom:8px;">Punch Details
                            </div>

                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Date:</b> 01 Dec 2023</div>

                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Punch In:</b> <span
                                    style="color: rgb(235, 47, 84)">10:30 AM</span></div>
                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Punch Out:</b> 19:00 PM</div>
                            <div style="font-size: 16px;color:#777;margin-bottom:8px;"><b>Work Hours:</b> 9 HRS</div>




                        </div>
                    </div>
                </div>
                {{-- <div class="container-fluid">
                   
                  <div class="row col-12">
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Time Sheet {{ Carbon::now()->format('j M Y') }}
                                    </div>
                                    <form action="{{ route('punch') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="department_id"
                                               value=" @isset($employeeInfo)
                                               {{$employeeInfo->department?->id}}
                                               @endisset">
                                        @if (is_null($lastPunch) || isset($lastPunch['punch_out']))
                                            <ul class=" mt-3 list-group list-group-flush">
                                                <button type="submit" name="punch" value="1" class="btn btn-dark"
                                                        @if (!isset($employeeInfo)) disabled @endif>
                                                    Punch In
                                                </button>
                                            </ul>
                                        @endisset
                                        @isset($lastPunch['punch_in'])
                                            <ul class=" mt-3 list-group list-group-flush">
                                                <button type="submit" name="punch" value="0" class="btn btn-dark"
                                                        @if (!isset($employeeInfo)) disabled @endif>
                                                    Punch Out
                                                </button>
                                            </ul>
                                        @endisset($lastPunch['punch_in'])
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card mt-5" style="width: 18rem;">
                                <div class="card-header">
                                    Employee Details
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Name: @isset($employeeInfo)
                                            {{ $employeeInfo->employee_name }}
                                        @endisset</li>
                                    <li class=" list-group-item">Company: @isset($employeeInfo)
                                            {{ $employeeInfo->company->company_name }}
                                        @endisset</li>
                                    <li class="list-group-item">Department: @isset($employeeInfo)
                                            {{ $employeeInfo->department?->department_name }}
                                        @endisset</li>
                                    <li class="list-group-item">Designation: @isset($employeeInfo)
                                            {{ $employeeInfo->designation->designation_name }}
                                        @endisset</li>
                                    <li class="list-group-item">Employee ID: @isset($employeeInfo)
                                            {{ $employeeInfo->employee_code }}
                                        @endisset</li>
                                    <li class="list-group-item">Email: @isset($employeeInfo)
                                            {{ $employeeInfo->Email }}
                                        @endisset</li>
                                    <li class="list-group-item">Reporting Manager: @isset($employeeInfo)
                                            {{ $employeeInfo->reporting_manager }}
                                        @endisset</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Today Activity
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        @isset($punchHistories)
                                            @foreach ($punchHistories as $punchHistory)
                                                @isset($punchHistory['punch_in'])
                                                    @if ($punchHistory['punch_in'] != null)
                                                        <li class="list-group-item">Punch In
                                                            At: {{ Carbon::parse($punchHistory['punch_in'])->format('h:i A') }}</li>
                                                    @endif
                                                @endisset
                                                @isset($punchHistory['punch_out'])
                                                    @if ($punchHistory['punch_out'] != null)
                                                        <li class="list-group-item">Punch Out
                                                            At: {{ Carbon::parse($punchHistory['punch_out'])->format('h:i A') }}</li>
                                                    @endif
                                                @endisset
                                            @endforeach
                                        @endisset
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="container-fluid">
                    <div class="row col-12">
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Calendar
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Punch Details
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Date: <?php echo Carbon::now()->format('jS F Y'); ?></li>
                                        <li class="list-group-item">Punch In At:
                                            @isset($punchDetails['firstLogIn'])
                                                {{ Carbon::createFromFormat('H:i:s', $punchDetails['firstLogIn'])->format('h:i A') }}
                                            @else
                                                N/A
                                            @endisset
                                        </li>
                                        <li class="list-group-item">Punch Out At:
                                            @isset($punchDetails['lastPunchOut'])
                                                {{ Carbon::createFromFormat('H:i:s', $punchDetails['lastPunchOut'])->format('h:i A') }}
                                            @else
                                                N/A
                                            @endisset
                                        </li>
                                        <li class="list-group-item">Work Hours: @isset($totalWorkHours)
                                                {{$totalWorkHours}}
                                            @endisset</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                data.forEach(function(department) {
                    var option = document.createElement('option');
                    option.value = department.id;
                    option.textContent = department.department_name;
                    departmentSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching departments:', error));
    }
</script>


<script>
    // Draw Circle dashboard
    var doghnutCharts = document.querySelectorAll('.doghnutChartGroup .circular-progress');

    for (var h = 0; h < doghnutCharts.length; h++) {
        var percent = doghnutCharts[h].getAttribute('data-percent');
        console.log(percent);
        var degree = 90 + ((360 / 100) * Number(percent));
        console.log(degree);

        if (percent > 0 && percent <= 25) {
            doghnutCharts[h].style.background =
                'linear-gradient(90deg, #1e85f1 50%, transparent 50%, transparent), linear-gradient(' + degree +
                'deg , #1e85f1 50%, #E0E0E0 50%, #E0E0E0)';
        } else if (percent > 25 && percent <= 50) {
            doghnutCharts[h].style.background =
                'linear-gradient(90deg, #1e85f1 50%, transparent 50%, transparent), linear-gradient(' + degree +
                'deg , #1e85f1 50%, #E0E0E0 50%, #E0E0E0)';
        } else if (percent > 50 && percent <= 75) {
            doghnutCharts[h].style.background =
                'linear-gradient(-90deg, #1e85f1 50%, transparent 50%, transparent), linear-gradient(' + degree +
                'deg , #1e85f1 50%, #E0E0E0 50%, #E0E0E0)';
        } else if (percent > 75 && percent <= 100) {
            doghnutCharts[h].style.background =
                'linear-gradient(-90deg, #1e85f1 50%, transparent 50%, transparent), linear-gradient(' + degree +
                'deg ,#1e85f1 50%, #E0E0E0 50%, #E0E0E0)';
        } else {
            doghnutCharts[h].style.background =
                'linear-gradient(90deg, #1e85f1 50%, transparent 50%, transparent), linear-gradient(90deg , #1e85f1 50%, #E0E0E0 50%, #E0E0E0)';
        }

        //doghnutCharts[h].style.background = 'linear-gradient(90deg, #E0E0E0 50%, transparent 50%, transparent), linear-gradient(' + degree + 'deg , #FF70A6 50%, #E0E0E0 50%, #E0E0E0)';
        console.log(doghnutCharts[h].style.background);
    }
</script>


<script>
    const weekArray = ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"];
    const monthArray = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];
    const current = new Date();
    const todaysDate = current.getDate();
    const currentYear = current.getFullYear();
    const currentMonth = current.getMonth();

    window.onload = function() {
        const currentDate = new Date();
        generateCalendarDays(currentDate);

        let calendarWeek = document.getElementsByClassName("calendar-week")[0];
        let calendarTodayButton = document.getElementsByClassName(
            "calendar-today-button"
        )[0];
        calendarTodayButton.textContent = `Today ${todaysDate}`;

        calendarTodayButton.addEventListener("click", () => {
            generateCalendarDays(currentDate);
        });

        weekArray.forEach((week) => {
            let li = document.createElement("li");
            li.textContent = week;
            li.classList.add("calendar-week-day");
            calendarWeek.appendChild(li);
        });

        const calendarMonths = document.getElementsByClassName("calendar-months")[0];
        const calendarYears = document.getElementsByClassName("calendar-years")[0];
        const monthYear = document.getElementsByClassName("calendar-month-year")[0];

        const selectedMonth = parseInt(monthYear.getAttribute("data-month") || 0);
        const selectedYear = parseInt(monthYear.getAttribute("data-year") || 0);

        monthArray.forEach((month, index) => {
            let option = document.createElement("option");
            option.textContent = month;
            option.value = index;
            option.selected = index === selectedMonth;
            calendarMonths.appendChild(option);
        });

        const currentYear = new Date().getFullYear();
        const startYear = currentYear - 60;
        const endYear = currentYear + 60;
        let newYear = startYear;
        while (newYear <= endYear) {
            let option = document.createElement("option");
            option.textContent = newYear;
            option.value = newYear;
            option.selected = newYear === selectedYear;
            calendarYears.appendChild(option);
            newYear++;
        }

        const leftArrow = document.getElementsByClassName("calendar-left-arrow")[0];

        leftArrow.addEventListener("click", () => {
            const monthYear = document.getElementsByClassName("calendar-month-year")[0];
            const month = parseInt(monthYear.getAttribute("data-month") || 0);
            const year = parseInt(monthYear.getAttribute("data-year") || 0);

            let newMonth = month === 0 ? 11 : month - 1;
            let newYear = month === 0 ? year - 1 : year;
            let newDate = new Date(newYear, newMonth, 1);
            generateCalendarDays(newDate);
        });

        const rightArrow = document.getElementsByClassName("calendar-right-arrow")[0];

        rightArrow.addEventListener("click", () => {
            const monthYear = document.getElementsByClassName("calendar-month-year")[0];
            const month = parseInt(monthYear.getAttribute("data-month") || 0);
            const year = parseInt(monthYear.getAttribute("data-year") || 0);
            let newMonth = month + 1;
            newMonth = newMonth === 12 ? 0 : newMonth;
            let newYear = newMonth === 0 ? year + 1 : year;
            let newDate = new Date(newYear, newMonth, 1);
            generateCalendarDays(newDate);
        });

        calendarMonths.addEventListener("change", function() {
            let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
            generateCalendarDays(newDate);
        });

        calendarYears.addEventListener("change", function() {
            let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
            generateCalendarDays(newDate);
        });
    };

    function generateCalendarDays(currentDate) {
        const newDate = new Date(currentDate);
        const year = newDate.getFullYear();
        const month = newDate.getMonth();
        const totalDaysInMonth = getTotalDaysInAMonth(year, month);
        const firstDayOfWeek = getFirstDayOfWeek(year, month);
        let calendarDays = document.getElementsByClassName("calendar-days")[0];

        removeAllChildren(calendarDays);

        let firstDay = 1;
        while (firstDay <= firstDayOfWeek) {
            let li = document.createElement("li");
            li.classList.add("calendar-day");
            calendarDays.appendChild(li);
            firstDay++;
        }

        let day = 1;
        while (day <= totalDaysInMonth) {
            let li = document.createElement("li");
            li.textContent = day;
            li.classList.add("calendar-day");
            if (todaysDate === day && currentMonth === month && currentYear === year) {
                li.classList.add("calendar-day-active");
            }
            calendarDays.appendChild(li);
            day++;
        }

        const monthYear = document.getElementsByClassName("calendar-month-year")[0];
        monthYear.setAttribute("data-month", month);
        monthYear.setAttribute("data-year", year);
        const calendarMonths = document.getElementsByClassName("calendar-months")[0];
        const calendarYears = document.getElementsByClassName("calendar-years")[0];
        calendarMonths.value = month;
        calendarYears.value = year;
    }

    function getTotalDaysInAMonth(year, month) {
        return new Date(year, month + 1, 0).getDate();
    }

    function getFirstDayOfWeek(year, month) {
        return new Date(year, month, 1).getDay();
    }

    function removeAllChildren(parent) {
        while (parent.firstChild) {
            parent.removeChild(parent.firstChild);
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
