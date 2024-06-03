<x-header data="insta_project component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<style>
    /* .hidden {
        display: none;
    } */





    .track-form {
        border: 1px solid #ebeaea;
        padding: 25px;
        background-color: #Fff !important;
        border-radius: 4px;

    }

    .container-fluid {
        width: 100%;
        padding-right: 0px;
        margin-left: -10px !important;

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
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section  track-form">
                <div class="custom_tittle descriptionTxt">
                    <h4>Salary Details</h4>
                    <p class="description_small_text"><strong style="color:#343A40;">Description:</strong> A
                        comprehensive overview of an employee’s compensation package
                        including wages, bonuses, deductions, and benefits.
                    </p>
                </div>
                <h1 style="font-size: 18px;">Normal Salary</h1>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span>{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 2000);
                        </script>
                    </div>
                @endif
                <div class="tabletext">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="emp_code form-label">Employee Code</label>

                            <form action="{{ route('getSalaryHead') }}" method="POST">
                                @csrf
                                <select class="form-select" name="emp_code" id="emp_code" onchange="this.form.submit()"
                                    style="height:50px;">
                                    <option selected disabled>Choose...</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}"
                                            data-empname="{{ $employee->employee_name }}">
                                            {{ $employee?->employee_code }}</option>
                                    @endforeach
                                </select>
                            </form>

                        </div>



                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <form action="{{ route('normalSalarySubmit') }}" method="POST">


                                @csrf
                                <label for="emp_name form-label">Employee Name</label>

                                <input type="text" class="form-control" name="emp_name" id="emp_name"
                                    placeholder="Employee name" aria-label="employee_name" style="height:50px;"
                                    @isset($employeeData)value="{{ $employeeData->employee_name }}" @endisset>

                                <input type="hidden" name="employee_id"
                                    @isset($employeeData)value="{{ $employeeData->id }}" @endisset>
                                <input type="hidden" name="company_id"
                                    @isset($employeeData)value="{{ $employeeData->company->id }}" @endisset>
                        </div>

                    </div>


                    @isset($salaryHead)
                        @php
                            $additionalHeads = json_decode($salaryHead?->additional_Head, true) ?? null;
                            $deductionHeads = json_decode($salaryHead?->deduction_Head, true) ?? null;
                        @endphp
                        <div class="container-fluid">


                            <div class="d-flex" style="margin-top: 15px;">
                                <label for="emp_name form-label"
                                    style="background-color: #Fff !important;padding: 16px 20px;  color: #343A40;border-radius: 5px;font-size:14px;">Salary
                                    Type</label>
                                <div style="margin-top: 17px;"
                                    style="background-color: #Fff !important;padding: 16px 20px;  color: #343A40;border-radius: 5px;font-size:14px;">
                                    <input style="font-weight: bold;" type="text" name="salaryType"
                                        value="{{ $salaryHead->salary_type }}" readonly>
                                </div>

                            </div>




                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label class="text-center fw-bold mb-5">Additional Head</label>

                                    @isset($additionalHeads)
                                        @foreach ($additionalHeads as $key => $additionalHead)
                                            <div class="row mt-2">
                                                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">{{ $additionalHead }}</div>
                                                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">

                                                    <input type="text" name="{{ $key }}"
                                                        class="form-control additional-input" id="{{ $key }}"
                                                        value="{{ isset($employeeSalaryAdditionalHeads[$key]) ? $employeeSalaryAdditionalHeads[$key] : '' }}"
                                                        aria-describedby="emailHelp">

                                                </div>
                                            </div>
                                        @endforeach
                                    @endisset

                                    <label class="mt-4" for="head5">Sub Total</label>
                                    <input type="text" class="form-control" name="sub_total_additional_head"
                                        id="additionSubTotal" value="{{ $employeeSalary?->subtotal_additional_head }}"
                                        aria-describedby="emailHelp">
                                </div>





                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label class="text-center fw-bold mb-5">Deduction Head</label>

                                    @isset($deductionHeads)
                                        @foreach ($deductionHeads as $key => $deductionHead)
                                            <div class="row mt-2">
                                                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">{{ $deductionHead }}</div>
                                                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                    <input type="text" name="{{ $key }}"
                                                        class="form-control deduction-input" id="{{ $key }}"
                                                        value="{{ isset($employeeSalaryDeductionHeads[$key]) ? $employeeSalaryDeductionHeads[$key] : '' }}"
                                                        aria-describedby="emailHelp">

                                                </div>
                                            </div>
                                        @endforeach
                                    @endisset
                                    <label class="mt-5" for="head5"></label>
                                    <input type="text" class="form-control" name="sub_total_deduction_head"
                                        id="deductionSubTotal" value="{{ $employeeSalary?->sub_total_deduction_head }}"
                                        aria-describedby="emailHelp">
                                </div>


                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label class="text-center fw-bold mb-5">Other Details</label>

                                    <div class="row mt-2">
                                        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">PF No.</div>
                                        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">

                                            <input type="text" name="pf_no" class="form-control" id="dedHead1"
                                                value="{{ $employeeSalary?->pf_number }}" aria-describedby="emailHelp">

                                        </div>
                                    </div>


                                    <div class="row mt-2">
                                        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">ESI No.</div>
                                        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">

                                            <input type="text" name="esi_no" class="form-control" id="dedHead2"
                                                value="{{ $employeeSalary?->esi_number }}" aria-describedby="emailHelp">

                                        </div>
                                    </div>
                                    <label class="mt-5" for="head5">Total Amount</label>
                                    <input type="text" class="form-control" name="total[]"
                                        value="{{ $employeeSalary?->total }}" id="finalTotal"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-4">

                                    <label class="text-center fw-bold mb-5">Additional Head</label>

                                    @isset($additionalHeads)
                                        @foreach ($additionalHeads as $key => $additionalHead)
                                            <label class="mt-2" for="{{ $key }}"></label>
                                            <input type="text" name="{{ $key }}"
                                                class="form-control additional-input" id="{{ $key }}"
                                                value="{{ isset($employeeSalaryAdditionalHeads[$key]) ? $employeeSalaryAdditionalHeads[$key] : '' }}"
                                                aria-describedby="emailHelp">
                                        @endforeach
                                    @endisset



                                    <label class="mt-4" for="head5">Sub Total</label>
                                    <input type="text" class="form-control" name="sub_total_additional_head"
                                        id="additionSubTotal" value="{{ $employeeSalary?->subtotal_additional_head }}"
                                        aria-describedby="emailHelp">


                                </div>
                                <div class="col-4">
                                    <label class="text-center fw-bold mb-5">Deduction Head</label>
                                    <ul>
                                        @isset($deductionHeads)
                                            @foreach ($deductionHeads as $key => $deductionHead)
                                                <li>
                                                    <label class="mt-2"
                                                        for="{{ $key }}">{{ $deductionHead }}</label>
                                                    <input type="text" name="{{ $key }}"
                                                        class="form-control deduction-input" id="{{ $key }}"
                                                        value="{{ isset($employeeSalaryDeductionHeads[$key]) ? $employeeSalaryDeductionHeads[$key] : '' }}"
                                                        aria-describedby="emailHelp">
                                                </li>
                                            @endforeach
                                        @endisset
                                    </ul>
                                    <ul>
                                        <li>
                                            <label class="mt-5" for="head5"></label>
                                            <input type="text" class="form-control" name="sub_total_deduction_head"
                                                id="deductionSubTotal"
                                                value="{{ $employeeSalary?->sub_total_deduction_head }}"
                                                aria-describedby="emailHelp">
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <label class="text-center fw-bold mb-5">Other Details</label>
                                    <ul>
                                        <li><label for="dedHead1">PF No.</label> <input type="text" name="pf_no"
                                                class="form-control" id="dedHead1"
                                                value="{{ $employeeSalary?->pf_number }}" aria-describedby="emailHelp">
                                        </li>
                                        <li><label for="dedHead2">ESI No.</label> <input type="text" name="esi_no"
                                                class="form-control" id="dedHead2"
                                                value="{{ $employeeSalary?->esi_number }}" aria-describedby="emailHelp">
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <label class="mt-5" for="head5">Total Amount</label>
                                            <input type="text" class="form-control" name="total[]"
                                                value="{{ $employeeSalary?->total }}" id="finalTotal"
                                                aria-describedby="emailHelp">
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        @endisset
                        @if ($salaryHead == null)
                            <p>Please fill the head master</p>
                        @endif
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.additional-input').on('input', function() {
            calculateAdditionSubTotal();
        });

        $('.deduction-input').on('input', function() {
            calculateDeductionSubTotal();
        });

        function calculateAdditionSubTotal() {
            var sum = 0;
            $('.additional-input').each(function() {
                var value = parseFloat($(this).val());
                if (!isNaN(value)) {
                    sum += value;
                }
            });
            $('#additionSubTotal').val(sum.toFixed(2));
            updateFinalTotal();
        }

        function calculateDeductionSubTotal() {
            var sum = 0;
            $('.deduction-input').each(function() {
                var value = parseFloat($(this).val());
                if (!isNaN(value)) {
                    sum += value;
                }
            });
            $('#deductionSubTotal').val(sum.toFixed(2));
            updateFinalTotal();
        }

        function updateFinalTotal() {
            var additionTotal = parseFloat($('#additionSubTotal').val());
            var deductionTotal = parseFloat($('#deductionSubTotal').val());
            if (!isNaN(additionTotal) && !isNaN(deductionTotal)) {
                var finalTotal = additionTotal - deductionTotal;
                $('#finalTotal').val(finalTotal.toFixed(2));
            }
        }
    });
</script>
