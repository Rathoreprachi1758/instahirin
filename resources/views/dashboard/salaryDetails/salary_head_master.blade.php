<x-header data="insta_project component"/>
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
@include('sweetalert::alert')
<style>
    .form-control {
        margin-right: 10px;
    }

    .remove-button {
        color: red;
        cursor: pointer;
    }
</style>
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
                <h1>Salary Head Master</h1>
                <hr>
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
                    <form action="{{ route('submitSalaryMaster') }}" method="POST">
                        @csrf
                        <input type="hidden" name="company_id" value="{{ $companyId }}">
                        <input type="hidden" name="employee_id" value="{{ $employeeId }}">
                        <input type="hidden" name="department_id" value="{{ $departmentId }}">

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="salary_type" class="form-label">Select Salary Type</label>
                                <select class="form-select" name="salary_type" id="salary_type" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="Hourly">Hourly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Annual">Annual</option>
                                    <option value="Project">Project</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="addHead" class="form-label">Additional Heads</label>
                                <ul id="addHead" class="list-unstyled">
                                    <!-- Additional head inputs will be added here -->
                                </ul>
                                <button type="button" class="btn btn-link p-0" onclick="addHeadInput()"> + </button>
                            </div>

                            <div class="col-md-3">
                                <label for="dedHead" class="form-label">Deduction Heads</label>
                                <ul id="dedHead" class="list-unstyled">
                                    <!-- Deduction head inputs will be added here -->
                                </ul>
                                <button type="button" class="btn btn-link p-0" onclick="dedHeadInput()">+</button>
                            </div>

                            <div class="col-md-3">
                                <label for="pf" class="form-label">PF (%)</label>
                                <input type="text" name="pf" class="form-control mb-3" id="pf">
                                <label for="esi" class="form-label">ESI (%)</label>
                                <input type="text" name="esi" class="form-control" id="esi">
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-3">
                            <label class="text-center fw-bold mt-2 mb-3">Professional Tax Range</label>
                            <div class="col-md-4" id="slabColumn">
                                <ul id="slabList" class="list-unstyled">
                                    <!-- Slab inputs will be added here -->
                                </ul>
                            </div>
                            <div class="col-md-4" id="toColumn">
                                <ul id="toList" class="list-unstyled">
                                    <!-- 'To' inputs will be added here -->
                                </ul>
                            </div>
                            <div class="col-md-4" id="equalsColumn">
                                <ul id="equalsList" class="list-unstyled">
                                    <!-- '=' inputs will be added here -->
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="btn btn-link p-0" onclick="addprofessionalTax()">+</button>

                        <hr>

                        <button class="btn btn-secondary" type="submit">Save</button>
                    </form>
                </div>
            </div>
            <div class="custom_tabs_data mt-3" style="display: block" id="tab5">
                <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                    <div class="activityTable_data">
                        <div class="row ">
                            <div class="col-4">
                                <h6>Additional Heads</h6>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Label</th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mappedAdditionalHeads as $label => $value)
                                        <tr>
                                            <td>{{ $label }}</td>
                                            <td>{{ $value }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <h6>Deduction Heads</h6>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Label</th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mappedDeductionHeads as $label => $value)
                                        <tr>
                                            <td>{{ $label }}</td>
                                            <td>{{ $value }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <h6>Other Heads</h6>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Label</th>
                                        <th>Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mappedDeductionHeads as $label => $value)
                                        <tr>
                                            <td>{{ $label }}</td>
                                            <td>{{ $value }}</td>
                                        </tr>
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
</div>
<script>
    function addHeadInput() {
        var ul = document.getElementById("addHead");
        var li = document.createElement("li");
        var label = document.createElement("label");
        var input = document.createElement("input");
        var removeButton = document.createElement("span");

        var index = ul.children.length + 1;
        label.setAttribute("for", "head" + index);
        label.textContent = "Add Head " + index;

        input.setAttribute("type", "text");
        input.setAttribute("class", "form-control");
        input.setAttribute("id", "head" + index);
        input.setAttribute("name", "addhead" + index);
        input.setAttribute("aria-describedby", "emailHelp");

        removeButton.textContent = "x";
        removeButton.classList.add("remove-button");
        removeButton.onclick = function () {
            ul.removeChild(li);
        };

        li.appendChild(label);
        li.appendChild(input);
        li.appendChild(removeButton);
        ul.appendChild(li);
    }

    function dedHeadInput() {
        var ul = document.getElementById("dedHead");
        var li = document.createElement("li");
        var label = document.createElement("label");
        var input = document.createElement("input");
        var removeButton = document.createElement("span");

        var index = ul.children.length + 1;
        label.setAttribute("for", "dedhead" + index);
        label.textContent = "Ded Head " + index;

        input.setAttribute("type", "text");
        input.setAttribute("class", "form-control");
        input.setAttribute("id", "dedhead" + index);
        input.setAttribute("name", "dedhead" + index);
        input.setAttribute("aria-describedby", "emailHelp");

        removeButton.textContent = "x";
        removeButton.classList.add("remove-button");
        removeButton.onclick = function () {
            ul.removeChild(li);
        };

        li.appendChild(label);
        li.appendChild(input);
        li.appendChild(removeButton);
        ul.appendChild(li);
    }


    function addprofessionalTax() {
        var slabColumn = document.getElementById("slabList");
        var toColumn = document.getElementById("toList");
        var equalsColumn = document.getElementById("equalsList");
        var count = slabColumn.children.length + 1;

        // Create slab input with remove button
        var slabLi = document.createElement("li");
        var slabInput = document.createElement("input");
        slabInput.setAttribute("type", "text");
        slabInput.setAttribute("class", "form-control");
        slabInput.setAttribute("name", "pf_ranges[" + count + "][slab]");
        slabInput.setAttribute("aria-describedby", "emailHelp");
        var slabRemoveButton = document.createElement("span");
        slabRemoveButton.textContent = "x";
        slabRemoveButton.classList.add("remove-button");
        slabRemoveButton.onclick = function () {
            removeProfessionalTaxRow(slabLi, toLi, equalsLi);
        };
        slabLi.appendChild(document.createTextNode("Slab " + count + " "));
        slabLi.appendChild(slabInput);
        slabLi.appendChild(slabRemoveButton);
        slabColumn.appendChild(slabLi);

        // Create 'to' input without remove button
        var toLi = document.createElement("li");
        var toInput = document.createElement("input");
        toInput.setAttribute("type", "text");
        toInput.setAttribute("class", "form-control");
        toInput.setAttribute("name", "pf_ranges[" + count + "][to]");
        toInput.setAttribute("aria-describedby", "emailHelp");
        toLi.appendChild(document.createTextNode("To "));
        toLi.appendChild(toInput);
        toColumn.appendChild(toLi);

        // Create equals input without remove button
        var equalsLi = document.createElement("li");
        var equalsInput = document.createElement("input");
        equalsInput.setAttribute("type", "text");
        equalsInput.setAttribute("class", "form-control");
        equalsInput.setAttribute("name", "pf_ranges[" + count + "][equals]");
        equalsInput.setAttribute("aria-describedby", "emailHelp");
        equalsLi.appendChild(document.createTextNode("= "));
        equalsLi.appendChild(equalsInput);
        equalsColumn.appendChild(equalsLi);
    }

    function removeProfessionalTaxRow(slabLi, toLi, equalsLi) {
        var slabColumn = document.getElementById("slabList");
        var toColumn = document.getElementById("toList");
        var equalsColumn = document.getElementById("equalsList");

        slabColumn.removeChild(slabLi);
        toColumn.removeChild(toLi);
        equalsColumn.removeChild(equalsLi);
    }
</script>
