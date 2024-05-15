<x-header data="insta_project component"/>
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
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
                        <input type="hidden" name="company_id" value="{{$companyId}}">
                        <input type="hidden" name="employee_id" value="{{$employeeId}}">
                        <input type="hidden" name="department_id" value="{{$departmentId}}">
                        <div class="row">
                            <div class="col-4">
                                    <ul id="addHead">

                                    </ul>

                                    <p onclick="addHeadInput()">Add Head</p>
                            </div>
                            <div class="col-4">
                                <ul id="dedHead">

                                </ul>

                                <p onclick="dedHeadInput()">Add Ded Head</p>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li><label for="pf">PF (%)</label> <input type="text" name="pf" class="form-control" id="pf" aria-describedby="emailHelp"></li>
                                    <li><label for="esi">ESI (%)</label> <input type="text" name="esi" class="form-control" id="esi" aria-describedby="emailHelp"></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <label class="text-center fw-bold mt-2 mb-5">Professional Tax Range</label>
                            <div class="col-4" id="slabColumn">
                                <ul id="slabList">
                                    <!-- Slab inputs will be added here -->
                                </ul>
                            </div>
                            <div class="col-4" id="toColumn">
                                <ul id="toList">
                                    <!-- 'To' inputs will be added here -->
                                </ul>
                            </div>
                            <div class="col-4" id="equalsColumn">
                                <ul id="equalsList">
                                    <!-- '=' inputs will be added here -->
                                </ul>
                            </div>
                        </div>
                        <a onclick="addprofessionalTax()">Add Row</a>
                        <hr>
                        <button class="btn btn-secondary" type="submit">Save</button>
                    </form>
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

        label.setAttribute("for", "head" + (ul.children.length + 1));
        label.textContent = "Add Head " + (ul.children.length + 1);

        input.setAttribute("type", "text");
        input.setAttribute("class", "form-control");
        input.setAttribute("id", "head" + (ul.children.length + 1));
        input.setAttribute("name", "addhead" + (ul.children.length + 1));
        input.setAttribute("aria-describedby", "emailHelp");

        li.appendChild(label);
        li.appendChild(input);
        ul.appendChild(li);
    }
    function dedHeadInput() {
        var ul = document.getElementById("dedHead");
        var li = document.createElement("li");
        var label = document.createElement("label");
        var input = document.createElement("input");

        label.setAttribute("for", "head" + (ul.children.length + 1));
        label.textContent = "Ded Head " + (ul.children.length + 1);

        input.setAttribute("type", "text");
        input.setAttribute("class", "form-control");
        input.setAttribute("id", "dedhead" + (ul.children.length + 1));
        input.setAttribute("name", "dedhead" + (ul.children.length + 1));
        input.setAttribute("aria-describedby", "emailHelp");

        li.appendChild(label);
        li.appendChild(input);
        ul.appendChild(li);
    }

    function addprofessionalTax() {
        var slabColumn = document.getElementById("slabList");
        var count = slabColumn.children.length + 1;

        var slabLi = document.createElement("li");
        var slabInput = document.createElement("input");
        slabInput.setAttribute("type", "text");
        slabInput.setAttribute("class", "form-control");
        slabInput.setAttribute("name", "pf_ranges[" + count + "][slab]");
        slabInput.setAttribute("aria-describedby", "emailHelp");
        slabLi.appendChild(document.createTextNode("Slab " + count + " "));
        slabLi.appendChild(slabInput);
        slabColumn.appendChild(slabLi);

        var toColumn = document.getElementById("toList");
        var toLi = document.createElement("li");
        var toInput = document.createElement("input");
        toInput.setAttribute("type", "text");
        toInput.setAttribute("class", "form-control");
        toInput.setAttribute("name", "pf_ranges[" + count + "][to]");
        toInput.setAttribute("aria-describedby", "emailHelp");
        toLi.appendChild(document.createTextNode("To "));
        toLi.appendChild(toInput);
        toColumn.appendChild(toLi);

        var equalsColumn = document.getElementById("equalsList");
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
</script>
