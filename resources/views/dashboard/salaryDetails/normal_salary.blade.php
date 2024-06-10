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
    .container {
        max-width: 800px;
        margin: 20px auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control[readonly] {
        background-color: #e9ecef;
    }

    .section-title {
        margin-bottom: 20px;
        font-weight: bold;
    }

    .track-form {
        padding: 25px !important;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        background-color: #Fff !important;
        border-radius: 10px;
        margin-top: 15px;
    }

    .container-fluid {
        width: 100%;
        padding-right: 0px;
        margin-left: -10px !important;

    }
</style>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section  track-form">
                <div class="custom_tittle descriptionTxt">
                    <h4>Salary Details</h4>
                    <p><strong>Description:</strong> A comprehensive overview of an employee’s compensation package
                        including wages, bonuses, deductions, and benefits.
                    </p>
                </div>
                <h1>Normal Salary</h1>
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
                            $taxMatrices = json_decode($salaryHead?->tax_matrix, true) ?? null;
                        @endphp
                        
                        <div class="container">
                            <form action="{{ route('normalSalarySubmit') }}" method="POST">


                                <div class="d-flex" style="margin-top: 15px;">
                                    <label for="emp_name form-label"
                                        style="background-color: #Fff !important;padding: 16px 20px;  color: #343A40;border-radius: 5px;font-size:14px;">Salary
                                        Type</label>
                                    <div
                                        style="background-color: #Fff !important;padding: 16px 20px;  color: #343A40;border-radius: 5px;font-size:14px;">
                                        <input style="font-weight: bold;" type="text" name="salaryType"
                                            value="{{ $salaryHead->salary_type }}" readonly>
                                    </div>
                                </div>


                                <hr>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label class="text-center  fw-bold mb-5" style="padding-left: 180px;">Additional
                                            Head</label>
                                        @isset($additionalHeads)
                                            @foreach ($additionalHeads as $key => $additionalHead)
                                                <div class="row mt-4">
                                                    <div class="col-4">{{ $additionalHead }}</div>
                                                    <div class="col-8">
                                                        <input type="text" name="{{ $key }}"
                                                            class="form-control additional-input" id="{{ $key }}"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endisset

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label class="text-center fw-bold" style="padding-left: 180px;">Deduction
                                            Head</label>
                                        @isset($deductionHeads)
                                            @foreach ($deductionHeads as $key => $deductionHead)
                                                <div class="row mt-4">
                                                    <div class="col-4">{{ $deductionHead }}</div>
                                                    <div class="col-8">
                                                        <input type="text" name="{{ $key }}"
                                                            class="form-control deduction-input" id="{{ $key }}"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endisset
                                    </div>
                                    {{--                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12"> --}}
                                    {{--                                        <label class="text-center fw-bold mb-5" style="padding-left: 100px;">Other --}}
                                    {{--                                            Details</label> --}}
                                    {{--                                        @isset($taxMatrices) --}}
                                    {{--                                            @foreach ($taxMatrices as $taxMatrix) --}}
                                    {{--                                                <div class="row mt-4"> --}}
                                    {{--                                                    <div class="col-4">{{$taxMatrix}}</div> --}}
                                    {{--                                                    <div class="col-8"> --}}
                                    {{--                                                        <input type="text" name="taxMatrices[{{$taxMatrix}}]" --}}
                                    {{--                                                               class="form-control" id="{{$taxMatrix}}" --}}
                                    {{--                                                               aria-describedby="emailHelp"> --}}
                                    {{--                                                    </div> --}}
                                    {{--                                                </div> --}}
                                    {{--                                            @endforeach --}}
                                    {{--                                        @endisset --}}

                                    {{--                                    </div> --}}
                                </div>
                                <div class="row mt-4">
                                    <div class="col-4">
                                        <label class="mt-3" for="head5">Sub Total (Additional)</label>
                                        <input type="text" class="form-control" name="sub_total_additional_head"
                                            id="additionSubTotal" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-4">
                                        <label class="mt-3" for="head5">Sub Total (Deduction)</label>
                                        <input type="text" class="form-control" name="sub_total_deduction_head"
                                            id="deductionSubTotal" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-4">
                                        <label class="mt-3" for="head5">Total Amount</label>
                                        <input type="text" class="form-control" name="total" id="finalTotal"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            @endisset

                            <hr>
                            <button class="btn btn-secondary" type="submit">Save</button>
                        </form>
                    </div>
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
