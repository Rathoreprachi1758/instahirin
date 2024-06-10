<x-header data="insta_project component" />
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

    .AddHead {

        height: 50px;
    }

    .DedHead {
        height: 50px;
    }


    .custom_tittle h4 {
        font-size: 24px;
        padding-bottom: 10px;
        font-family: "avenirmedium";
        color: #343A40;
    }

    .description_small_text {
        font-size: 16px !important;
        color: #777;
        line-height: 25px;
    }

    .underline {
        width: 100%;
        border: 1px solid #dee2e6 !important;
    }

    h1 {
        font-size: 20px !important;
        padding-bottom: 20px;
        font-family: "avenirmedium";
    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h1>Salary Details</h1>
                    <p class="description_small_text"><strong style="color:#343A40;">Description:</strong> A
                        comprehensive overview of an
                        employee’s compensation package
                        including wages, bonuses, deductions, and benefits.
                    </p>
                </div>
                <h1>Salary Head Master</h1>
                <div class="underline"></div>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
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


                        <div class="col-md-12">
                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <label for="salary_type" class="form-label">Select Salary Type:</label>
                                    <select class="form-select" name="salary_type" id="salary_type" style="height:50px;"
                                        required>
                                        <option selected disabled>Choose...</option>
                                        <option value="Hourly">Hourly</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Annual">Annual</option>
                                        <option value="Project">Project</option>
                                    </select>
                                </div>


                                <div class="col-md-4">
                                    <label for="country" class="form-label">Select Country:</label>
                                    <select id="country" name="country" class="form-select mb-3" style="height:50px;">
                                        @foreach (array_keys($taxDeductions) as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>


                                </div>


                                <div class="col-md-4">
                                    <label for="deductions" class="form-label">Select Deductions:</label>
                                    <div id="deductionsContainer">
                                        <!-- Dynamic deduction select elements will be added here -->



                                    </div>
                                    <button type="button" class="btn btn-link mt-3" id="addDeductionButton">+</button>
                                </div>




                                <div class="col-md-4">
                                    <label for="addHead" class="form-label">Additional Heads:</label>
                                    <ul id="addHead" class="list-unstyled">
                                        <!-- Additional head inputs will be added here -->
                                    </ul>
                                    <button type="button" class="btn btn-link p-0" onclick="addHeadInput()">+</button>
                                </div>

                                <div class="col-md-4">
                                    <label for="dedHead" class="form-label">Deduction Heads:</label>
                                    <ul id="dedHead" class="list-unstyled">
                                        <!-- Deduction head inputs will be added here -->
                                    </ul>
                                    <button type="button" class="btn btn-link p-0"
                                        id="addDeductionHeadButton">+</button>
                                </div>


                            </div>
                        </div>

                        <div class="underline mt-2"></div>
                        <div class="row mb-3">
                            <label class="col-md-12 text-center fw-bold mt-4 mb-3" style="font-size: 18px;">Professional
                                Tax Range</label>
                            <div class="col-md-4">
                                <div id="slabList" class="list-unstyled">
                                    <!-- Slab inputs will be added here -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="toList" class="list-unstyled">
                                    <!-- 'To' inputs will be added here -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="equalsList" class="list-unstyled">
                                    <!-- '=' inputs will be added here -->
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-link d-block mx-auto p-0 mb-3"
                            onclick="addprofessionalTax()">+
                        </button>

                        <div class="underline mt-2"></div>

                        <button class="btn btn-secondary mx-auto justify-content-center align-items: center d-flex mt-4"
                            type="submit">Save</button>
                    </form>
                </div>

            </div>
            <div class="custom_tabs_data mt-3" style="display: block" id="tab5">
                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-lg-12 col-md-12">
                        <div class="activityTable_data">
                            <div class="row">

                                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">

                                </div>

                                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">


                                    <h6 style=" text-align:center;">Additional Heads</h6>
                                    <table class="justify-content-center align-items: center d-flex">
                                        <thead style="color:#fff;">
                                            <tr>
                                                <th>Label</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mappedAdditionalHeads as $label => $value)
                                                <tr>
                                                    <td>{{ $label }}</td>
                                                    <td>{{ $value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">

                                    <h6 style=" text-align:center;">Deduction Heads</h6>
                                    <table class="justify-content-center align-items: center d-flex">
                                        <thead>
                                            <tr style="color:#fff;">
                                                <th>Label</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mappedDeductionHeads as $label => $value)
                                                <tr>
                                                    <td>{{ $label }}</td>
                                                    <td>{{ $value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">

                                </div>

                                {{-- <div class="col-4">
                                    <h6>Other Heads</h6>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Label</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($taxMatrices)
                                                @foreach ($taxMetrics as $label => $value)
                                                    <tr>
                                                        <td>{{ $label }}</td>
                                                        <td>{{ $value }}</td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                        </tbody>
                                    </table>
                                </div> --}}
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
        input.setAttribute("class", "form-control AddHead");
        input.setAttribute("id", "head" + index);
        input.setAttribute("name", "addhead" + index);
        input.setAttribute("aria-describedby", "emailHelp");


        removeButton.textContent = "x";
        removeButton.classList.add("remove-button");
        removeButton.onclick = function() {
            ul.removeChild(li);
        };

        li.appendChild(label);
        li.appendChild(input);
        li.appendChild(removeButton);
        ul.appendChild(li);
    }

    // function dedHeadInput() {
    //     var ul = document.getElementById("dedHead");
    //     var li = document.createElement("li");
    //     var label = document.createElement("label");
    //     var input = document.createElement("input");
    //     var removeButton = document.createElement("span");
    //
    //     var index = ul.children.length + 1;
    //     label.setAttribute("for", "dedhead" + index);
    //     label.textContent = "Ded Head " + index;
    //
    //     input.setAttribute("type", "text");
    //     input.setAttribute("class", "form-control");
    //     input.setAttribute("id", "dedhead" + index);
    //     input.setAttribute("name", "dedhead" + index);
    //     input.setAttribute("aria-describedby", "emailHelp");
    //
    //     removeButton.textContent = "x";
    //     removeButton.classList.add("remove-button");
    //     removeButton.onclick = function () {
    //         ul.removeChild(li);
    //     };
    //
    //     li.appendChild(label);
    //     li.appendChild(input);
    //     li.appendChild(removeButton);
    //     ul.appendChild(li);
    // }


    function addprofessionalTax() {
        var slabColumn = document.getElementById("slabList");
        var toColumn = document.getElementById("toList");
        var equalsColumn = document.getElementById("equalsList");
        var count = slabColumn.children.length + 1;

        // Create slab input with remove button
        var slabLi = document.createElement("li");
        slabLi.classList.add("d-flex", "align-items-center", "mb-3"); // Add flexbox and margin bottom for spacing
        var slabLabel = document.createElement("span");
        slabLabel.textContent = "Slab " + count;
        var slabInput = document.createElement("input");
        slabInput.setAttribute("type", "text");
        slabInput.setAttribute("class", "form-control mb-3 ms-3"); // Add margin to input
        slabInput.setAttribute("name", "pf_ranges[" + count + "][slab]");
        slabInput.setAttribute("aria-describedby", "emailHelp");
        var slabRemoveButton = document.createElement("span");
        slabRemoveButton.textContent = "x";
        slabRemoveButton.classList.add("remove-button", "me-2"); // Add margin to remove button
        slabRemoveButton.onclick = function() {
            removeProfessionalTaxRow(slabLi, toLi, equalsLi);
        };

        slabLi.appendChild(slabRemoveButton);
        slabLi.appendChild(slabLabel);
        slabLi.appendChild(slabInput);
        slabColumn.appendChild(slabLi);

        // Create 'to' input without remove button
        var toLi = document.createElement("li");
        toLi.classList.add("d-flex", "align-items-center", "mb-3"); // Add flexbox and margin bottom for spacing
        var toLabel = document.createElement("span");
        toLabel.textContent = "To";
        var toInput = document.createElement("input");
        toInput.setAttribute("type", "text");
        toInput.setAttribute("class", "form-control mb-3 ms-3"); // Add margin to input
        toInput.setAttribute("name", "pf_ranges[" + count + "][to]");
        toInput.setAttribute("aria-describedby", "emailHelp");
        toLi.appendChild(toLabel);
        toLi.appendChild(toInput);
        toColumn.appendChild(toLi);

        // Create equals input without remove button
        var equalsLi = document.createElement("li");
        equalsLi.classList.add("d-flex", "align-items-center", "mb-3"); // Add flexbox and margin bottom for spacing
        var equalsLabel = document.createElement("span");
        equalsLabel.textContent = "=";
        var equalsInput = document.createElement("input");
        equalsInput.setAttribute("type", "text");
        equalsInput.setAttribute("class", "form-control mb-3 ms-3"); // Add margin to input
        equalsInput.setAttribute("name", "pf_ranges[" + count + "][equals]");
        equalsInput.setAttribute("aria-describedby", "emailHelp");
        equalsLi.appendChild(equalsLabel);
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





    document.addEventListener('DOMContentLoaded', function() {
        const taxDeductions = @json($taxDeductions);
        let deductionCount = 0;

        // Function to populate a specific deduction select element
        function populateDeductionSelect(selectElement) {
            const selectedCountry = document.getElementById("country").value;
            selectElement.innerHTML = ''; // Clear previous options
            if (taxDeductions[selectedCountry]) {
                taxDeductions[selectedCountry].forEach(deduction => {
                    const option = document.createElement("option");
                    option.value = deduction;
                    option.textContent = deduction;
                    selectElement.appendChild(option);
                });
            }
        }

        // Function to add a new deduction select element
        function addDeduction() {
            const container = document.getElementById("deductionsContainer");
            const newSelectContainer = document.createElement("div");
            newSelectContainer.classList.add("deduction-container");

            const newSelect = document.createElement("select");
            newSelect.name = "deduction[]";
            newSelect.classList.add("deduction-select");
            newSelect.onchange = updateDeductionHead;
            newSelect.dataset.index = deductionCount; // Assign an index to link with dedHead
            newSelectContainer.appendChild(newSelect);

            const removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.textContent = "x";
            removeButton.classList.add("remove-button");
            removeButton.onclick = function() {
                container.removeChild(newSelectContainer);
                removeDeductionHead(newSelect.dataset.index); // Remove corresponding dedHead input
            };
            newSelectContainer.appendChild(removeButton);

            container.appendChild(newSelectContainer);

            // Populate the newly added select element
            populateDeductionSelect(newSelect);

            // Add corresponding deduction head input
            addDeductionHead(false, deductionCount); // Make the corresponding input readonly
            deductionCount++;

            // Trigger the updateDeductionHead function to initialize the dedHead input
            updateDeductionHead({
                target: newSelect
            });
        }

        // Function to add a new deduction head input
        function addDeductionHead(readonly = true, index = null) {
            const ul = document.getElementById("dedHead");
            const li = document.createElement("li");
            const label = document.createElement("label");
            const input = document.createElement("input");
            const removeButton = document.createElement("span");

            const idx = index !== null ? index : ul.children.length + 1;
            label.setAttribute("for", "dedhead" + idx);
            label.textContent = "Ded Head " + idx;

            input.setAttribute("type", "text");
            input.setAttribute("class", "form-control");
            input.setAttribute("id", "dedhead" + idx);
            input.setAttribute("name", "dedhead" + idx);
            input.setAttribute("aria-describedby", "emailHelp");
            input.dataset.index = idx; // Store the same index as in the corresponding select

            if (readonly) {
                input.readOnly = true;
            }

            removeButton.textContent = "x";
            removeButton.classList.add("remove-button");
            removeButton.onclick = function() {
                ul.removeChild(li);
                reIndexDeductionHeads();
            };

            li.appendChild(label);
            li.appendChild(input);
            li.appendChild(removeButton);
            ul.appendChild(li);

            reIndexDeductionHeads(); // Ensure reindexing after adding
        }

        // Function to remove the corresponding dedHead input based on the index
        function removeDeductionHead(index) {
            const dedHeadInput = document.querySelector(`#dedHead .form-control[data-index='${index}']`);
            if (dedHeadInput) {
                dedHeadInput.parentElement.remove();
                reIndexDeductionHeads();
            }
        }

        // Function to update the deduction head input based on the selected deduction
        function updateDeductionHead(event) {
            const index = event.target.dataset.index;
            const selectedValue = event.target.value;
            const dedHeadInput = document.querySelector(`#dedHead .form-control[data-index='${index}']`);
            if (dedHeadInput) {
                dedHeadInput.value = selectedValue;
            }
        }

        // Function to reindex deduction head labels and inputs after removal
        function reIndexDeductionHeads() {
            const dedHeadItems = document.querySelectorAll('#dedHead li');
            dedHeadItems.forEach((item, index) => {
                const label = item.querySelector('label');
                const input = item.querySelector('input');
                const newIndex = index + 1;
                label.setAttribute('for', 'dedhead' + newIndex);
                label.textContent = 'Ded Head ' + newIndex;
                input.setAttribute('id', 'dedhead' + newIndex);
                input.setAttribute('name', 'dedhead' + newIndex);
                input.setAttribute("class", "form-control   DedHead");

                input.dataset.index = newIndex;
            });

            const deductionSelects = document.querySelectorAll('.deduction-select');
            deductionSelects.forEach((selectElement, index) => {
                selectElement.dataset.index = index + 1;
            });
        }

        // Event listener for country change to repopulate deductions for new selects
        document.getElementById("country").addEventListener('change', function() {
            const deductionSelects = document.querySelectorAll('.deduction-select');
            deductionSelects.forEach(selectElement => {
                const previousSelection = selectElement.value;
                populateDeductionSelect(selectElement);
                selectElement.value =
                    previousSelection; // Re-apply previous selection if it still exists
                updateDeductionHead({
                    target: selectElement
                }); // Update dedHead input
            });
        });

        document.getElementById("addDeductionButton").addEventListener('click', addDeduction);
        document.getElementById("addDeductionHeadButton").addEventListener('click', function() {
            addDeductionHead(false); // Add a writable deduction head input
        });

        // Add initial deduction select
        addDeduction();
    });
</script>
