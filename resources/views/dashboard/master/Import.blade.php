<x-header data="import component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#shift_import').DataTable();
    });
</script>

<style>
    .custom_tabs {
        width: 100%;
        border: 0.5px solid #fff;
    }

    .custom_tabs ul li a.active {

        /* background-color: #dddddd; */
        background-color: transparent !important;
        color: #007bff !important;

        border-bottom: 3px solid #007bff !important;
    }

    .custom_tabs ul li a:hover {
        background-color: transparent !important;
        /* background-color: #425056; */
    }

    .custom_tabs ul li a {
        padding: 0 11px !important;
        font-weight: 500 !important;
        font-size: 15px !important;
        color: #555 !important;
    }

    .masterTab_bg {
        background-color: #fff;
        padding: 0px;
        overflow: hidden;
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

    .showSort_select select {
        width: 620px !important;
    }

    .expImprt_sec {
        width: 100%;
        border: 0px 0px;
        border: 1px solid #e4eef4;
        padding: 12px 0px;
        border-left: 0px;
        border-right: 0px;
    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Master</h4>
                    <p class="description_small_text"><strong style="color:#343A40;">Description:</strong> Keep track of
                        all company master details including employee
                        designations, shift information, category of employees, and their configurations. Also
                        able to oversee leave <br> master with holiday details.</p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ route('Master.index') }}">Company</a></li>
                        <li><a href="{{ route('Department.index') }}">Department</a></li>
                        <li><a href="{{ route('Designation.index') }}">Designation</a></li>
                        <li><a href="{{ route('shift_master.index') }}">Shift Master Daily</a></li>
                        <li><a href="{{ route('Category.index') }}">Category</a></li>
                        <li><a href="{{ route('Employee-Master.index') }}">Employee Master</a></li>
                        <li><a href="{{ route('Employee-Configurations.index') }}">Employee Configuration</a></li>
                        <li><a href="{{ route('Employee-Master.index') }}" class="active">Import/Export - Excel</a></li>
                        <li><a href="{{ route('Leave.index') }}">Leave</a></li>
                        <li><a href="{{ route('Holiday.index') }}">Holiday</a></li>
                    </ul>
                </div>
                <div class="custom_tabs_data" id="tab8" style="display: block;">
                    <div class="masterTab_bg">
                        <div class="masterTab_data">
                            <div class="custom_tittle">
                                <h5>Import/Export Excel</h5>
                            </div>

                            <div class="sorting_nav">
                                <div class="showSort">


                                    <div class="allSelect">
                                        <strong class="entitiesSelect" style="font-size: 13px;">Select
                                            Company</strong>
                                        <div class="showSort_select seleComp">
                                            <select id="companyName" name="company_desig" style="height: 50px;"
                                                aria-label="First select example" onchange="fetchDepartments()">
                                                <option selected disabled>Select Company</option>
                                                @isset($companies)
                                                    @foreach ($companies as $company)
                                                        <option value="{{ $company->id }}">
                                                            {{ $company->company_name }}
                                                        </option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                    </div>


                                </div>

                            </div>


                            <div class="expImprt_sec">
                                <strong>Export Master Data to Excel</strong>
                                <div class="kycForm_file">
                                    <label class="uploadFile">
                                        <i class="fa fa-upload" aria-hidden="true"></i>

                                        <span class="filename">Export</span>
                                        <button></button>
                                    </label>
                                </div>
                            </div>


                            <div class="chooseFile_impport">
                                <div class="auth_field">
                                    <strong>Upload supportive documents, If have</strong>
                                    <div class="">
                                        <input type="file" placeholder="" value="">
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="expImprt_sec mb-3" style="border-top: 0px !important;">
                              <div class="kycForm_file">
                                  <label class="uploadFile">
                                      <i class="fa fa-download" aria-hidden="true"></i>

                                      <span class="filename">Import</span>
                                      <input type="file" class="inputfile form-control" name="file">
                                  </label>
                              </div>
                          </div> --}}
                            <div class="table_actions">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                        <div class="table_actionsBtns">
                                            <!-- <button class="tb_actionBtn">Add</button> -->
                                            <button class="tb_actionBtn">Exit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
