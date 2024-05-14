<x-header data="insta_project component"/>
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<style>
    .hidden {
        display: none;
    }
</style>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Salary Details</h4>
                    <p><strong>Description:</strong> A comprehensive overview of an employee’s compensation package
                        including wages, bonuses, deductions, and benefits.
                    </p>
                </div>
                <h1>Normal Salary</h1>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function () {
                                document.getElementById('success-message').style.display = 'none';
                            }, 2000);
                        </script>
                    </div>
                @endif
                <div class="tabletext">
                    <form action="{{ route('normalSalarySubmit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label for="emp_code" class="col-sm-2 col-form-label">Employee Code</label>
                            <div class="col">
                                <select class="form-select" name="emp_code" id="emp_code">
                                    <option selected disabled>Choose...</option>
                                    @foreach($employees as $employee)
                                        <option value="{{$employee->id}}"
                                                data-empname="{{$employee->employee_name}}">{{$employee->employee_code}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="emp_name" class="col-sm-2 col-form-label">Employee Name</label>
                            <div class="col">
                                <input type="text" class="form-control" name="emp_name" id="emp_name"
                                       placeholder="Employee name"
                                       aria-label="employee_name">
                            </div>
                        </div>
                        <div class="container mt-5">
                            <div class="row mt-3">
                                <label for="emp_name" class="col-sm-2 col-form-label">Salary Type</label>
                                <div class="col mt-2">
                                    <input class="form-check-input" type="radio" name="salaryType" id="hourlyRadio"
                                           value="hourly" checked>
                                    <label class="form-check-label" for="hourlyRadio">Hourly</label>
                                </div>
                                <div class="col mt-2">
                                    <input class="form-check-input" type="radio" name="salaryType" id="monthlyRadio"
                                           value="monthly">
                                    <label class="form-check-label" for="monthlyRadio">Monthly</label>
                                </div>
                                <div class="col mt-2">
                                    <input class="form-check-input" type="radio" name="salaryType" id="annualRadio"
                                           value="annual">
                                    <label class="form-check-label" for="annualRadio">Annual</label>
                                </div>
                                <div class="col mt-2">
                                    <input class="form-check-input" type="radio" name="salaryType"
                                           id="projectBasedRadio" value="project">
                                    <label class="form-check-label" for="projectBasedRadio">Project Based</label>
                                </div>
                            </div>
                            <hr>
                            <div id="hourlyForm" class="mt-3 salary-form">
                                <div class="row mb-3">
                                    <label for="inputState" class="col-sm-4 col-form-label">Currency</label>
                                    <div class="col-sm-8">
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            @foreach($countries as $country)
                                                <option>{{$country->currency}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="hour" class="col-sm-4 col-form-label">Per Hour</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="perHour" id="perHour">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="totalHours" class="col-sm-4 col-form-label">Total Hours</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="totalHours" id="totalHours">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="total" class="col-sm-4 col-form-label">Total</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="total" id="total" readonly>
                                    </div>
                                </div>
                            </div>
                            @isset($salaryHead)
                            @php
                                $additionalHeads = json_decode($salaryHead?->additional_Head , true) ?? null;
                                $deductionHeads = json_decode($salaryHead?->deduction_Head , true) ?? null;
                            @endphp
                            @endisset
                            <div id="additional-deduction-form" class="mt-3 hidden salary-form">
                                <div class="row">
                                    <label class="text-center fw-bold mt-2 mb-5">Professional Tax Range</label>
                                    <div class="col-4">
                                        <label class="text-center fw-bold mb-5">Additional Head</label>
                                        <ul>
                                            @isset($additionalHeads)
                                            @foreach($additionalHeads as $key => $additionalHead )
                                                <li>
                                                    <label class="mt-2" for="head1">{{$additionalHead}}</label>
                                                    <input type="text" name="{{$key}}" class="form-control"
                                                           id="head1" aria-describedby="emailHelp">
                                                </li>
                                            @endforeach
                                            @endisset
                                        </ul>
                                        <ul>
                                            <li>
                                                <label class="mt-5" for="head5">Sub Total</label>
                                                <input type="text" class="form-control" name="sub_total_addtional_head" id="head5" aria-describedby="emailHelp">
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-4">
                                        <label class="text-center fw-bold mb-5">Deduction Head</label>
                                        <ul>
                                            @isset($additionalHeads)
                                            @foreach($deductionHeads as $key => $deductionHead )
                                                <li>
                                                    <label class="mt-2" for="head1">{{$deductionHead}}</label>
                                                    <input type="text" name="{{$key}}" class="form-control"
                                                           id="head1" aria-describedby="emailHelp">
                                                </li>
                                            @endforeach
                                            @endisset
                                        </ul>
                                        <ul>
                                            <li>
                                                <label class="mt-5" for="head5"></label>
                                                <input type="text" class="form-control" name="sub_total_deduction_head" id="head5" aria-describedby="emailHelp">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <label class="text-center fw-bold mb-5">Other Details</label>
                                        <ul>
                                            <li><label for="dedHead1">PF No.</label> <input  type="text" name="pf_no" class="form-control" id="dedHead1" aria-describedby="emailHelp"></li>
                                            <li><label for="dedHead2">ESI No.</label> <input type="text" name="esi_no" class="form-control" id="dedHead2" aria-describedby="emailHelp"></li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <label class="mt-5" for="head5">Total Amount</label>
                                                <input type="text" class="form-control" name="total" id="head5" aria-describedby="emailHelp">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <button class="btn btn-secondary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('input[type="radio"]').click(function () {
            var salaryType = $(this).val();
            if (salaryType !== 'hourly') {
                $('#hourlyForm').hide();
            } else {
                $('#hourlyForm').show();
            }
            $('.hidden').not('#hourlyForm').hide();
            $('#additional-deduction-form').show();
        });

        $('#emp_code').change(function () {
            var selectedOption = $(this).find('option:selected');
            var empName = selectedOption.data('empname');
            $('#emp_name').val(empName);

            var employeeId = selectedOption.val();

            // Send AJAX request to fetch salary head for the selected employee
            $.get("/get-salary-head/" + employeeId, function (data) {
                // Update UI with the fetched salary head
                $("#salary_head").html(data);
            });
        });

        var perHourInput = $("#perHour");
        var totalHoursInput = $("#totalHours");
        var totalInput = $("#total");

        perHourInput.add(totalHoursInput).on("input", function () {
            var perHour = parseFloat(perHourInput.val()) || 0;
            var totalHours = parseFloat(totalHoursInput.val()) || 0;
            var total = perHour * totalHours;
            totalInput.val(total.toFixed(2));
        });
    });
</script>
