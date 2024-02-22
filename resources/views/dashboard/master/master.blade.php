<x-header data="master component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function(){
      $('#master_company').DataTable();
   });
</script>
    <div class="fr-section" style="margin-top: -72px">
        <div class="fr-section_detail ">
            <div class="dashboard_innerPages">
                <div class="custom_tabs_section">
                    <div class="custom_tittle descriptionTxt">
                        <h4>Master</h4>
                        <p><strong>Description:</strong> Keep track of all company master details including employee
                            designations, shift information, category of employees, and <br> their configurations. Also
                            able to oversee leave master with holiday details.</p>
                    </div>
                    <div class="custom_tabs">
                        <ul>
                            <li><a href="{{route('master.company')}}" class="active">Company</a></li>
                            <li><a href="{{route('master.department')}}">Department</a></li>
                            <li><a href="{{route('master.designation')}}">Designation</a></li>
                            <li><a href="{{route('master.shift_master')}}">Shift Master Daily</a></li>
                            <li><a href="{{route('master.category')}}">Category</a></li>
                            <li><a href="{{route('master.emp_master')}}">Employee Master</a></li>
                            <li><a href="{{route('master.shift_config')}}">Employee Configuration</a></li>
                            <li><a href="{{route('master.master_data')}}">Import/Export - Excel</a></li>
                            <li><a href="{{route('master.master_leave')}}">Leave</a></li>
                            <li><a href="{{route('master.master_holiday')}}">Holiday</a></li>
                        </ul>
                    </div>
                    <div class="custom_tabs_detail">
                        <div class="custom_tabs_data" id="tab1" style="display: block;">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Company Master</h5>
                                    </div>
                                    <div class="masterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="masterTable_data">
                                                    <table class="table" id="master_company">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:283px">
                                                                    <h6 class="text-left">Company ID</h6>
                                                                </th>
                                                                <th width="200">
                                                                    <h6>Company Name</h6>
                                                                </th>
                                                                <th width="450">
                                                                    <h6>Address</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">01</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Bizionic Technologies</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>3rd Floor, Office No 1A, 6-3-1090/B/4, The
                                                                            Grand Building,Hyderabad</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">02</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>letWizardTechnologies</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>3rd Floor, Office No 1A, 6-3-1090/B/4, The
                                                                            Grand Building,Hyderabad</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">03</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>eShare.ai</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>3rd Floor, Office No 1A, 6-3-1090/B/4, The
                                                                            Grand Building,Hyderabad</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab2">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Department Master</h5>
                                    </div>
                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <strong class="entities">entities</strong>
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="showSort">
                                            <strong>Search</strong>
                                            <div class="showSort_search">
                                                <input type="text" value="" placeholder="" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="masterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="masterTable_data">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6 class="text-left">Department ID</h6>
                                                                </th>
                                                                <th width="550">
                                                                    <h6>Department Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">01</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Technology & Marketing</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">02</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Design</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">03</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>IT</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab3">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Designation Master</h5>
                                    </div>
                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <strong class="entities">entities</strong>
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Department</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="showSort">
                                            <strong>Search</strong>
                                            <div class="showSort_search">
                                                <input type="text" value="" placeholder="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="masterTable_data">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6 class="text-left">Designation ID</h6>
                                                                </th>
                                                                <th width="550">
                                                                    <h6>Designation Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">01</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>UX Designer</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">02</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Python Developer</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">03</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>App Developer</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab4">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Shift Master</h5>
                                    </div>
                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <strong class="entities">entities</strong>
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Department</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="showSort">
                                            <strong>Search</strong>
                                            <div class="showSort_search">
                                                <input type="text" value="" placeholder="" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="masterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="masterTable_data">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6 class="text-left">Shift Code</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Shift Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">In Time</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Out Time</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Shift Hours</h6>
                                                                </th>
                                                                <th width="">
                                                                    <h6>Time Zone</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">G</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>General</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>10:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>19:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>09:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>GMT +05:30</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">G</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>General</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>10:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>19:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>09:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>GMT +05:30</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab5">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Category Master</h5>
                                    </div>

                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <strong class="entities">entities</strong>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Department</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="showSort">
                                            <strong>Search</strong>
                                            <div class="showSort_search">
                                                <input type="text" value="" placeholder="" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="masterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="masterTable_data">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6 class="text-left">Category ID</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Category Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Early Arrival Allow</h6>
                                                                </th>
                                                                <th width="300">
                                                                    <h6>Max. OT Allow</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>01</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Full Time</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>02:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>08:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>01</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Full Time</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>02:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>08:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>01</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Full Time</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>02:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>08:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>01</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Full Time</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>02:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>08:00</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab6">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Employee Master</h5>
                                    </div>
                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Department</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="filterBtn">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Apply Filter</button>
                                                    <button class="tb_actionBtn">Clear Filter</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <strong class="entities">entities</strong>
                                        </div>
                                        <div class="showSort">
                                            <strong>Search</strong>
                                            <div class="showSort_search">
                                                <input type="text" value="" placeholder="" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="masterTable empMasterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="activityTable_data">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="tableCheckbox">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox">
                                                                            <span
                                                                                class="checkbox-custom rectangular"></span>
                                                                        </label>
                                                                    </div>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Emp Code</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Enrolled Id</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Dept. Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Desg. Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Cat. Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tableCheckbox">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox">
                                                                            <span
                                                                                class="checkbox-custom rectangular"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>00000001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Employee Name</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="tableCheckbox">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox">
                                                                            <span
                                                                                class="checkbox-custom rectangular"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>00000001</p>
                                                                    </div>
                                                                </td>
                                                                <td width="250">
                                                                    <div class="tabletext">
                                                                        <p>Employee Name</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="tableCheckbox">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox">
                                                                            <span
                                                                                class="checkbox-custom rectangular"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>00000001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Employee Name</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Default</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6  d-none">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab7">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Employee Configuration</h5>
                                    </div>

                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Department</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="filterBtn">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Apply Filter</button>
                                                    <button class="tb_actionBtn">Clear Filter</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <strong class="entities">entities</strong>
                                        </div>
                                        <div class="showSort">
                                            <strong>Search</strong>
                                            <div class="showSort_search">
                                                <input type="text" value="" placeholder="" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="masterTable empMasterTable empConfigTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="activityTable_data">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6 class="text-left">Emp Code</h6>
                                                                </th>
                                                                <th width="110">
                                                                    <h6>Name</h6>
                                                                </th>
                                                                <th width="150">
                                                                    <h6>Dept. Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>SMS Allow</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>ESS Allow</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Selfie Allow</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Auto Selfie Approval</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Noti. OWN</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Noti. Admin</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Employee 1</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Technology & Marketing</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Employee 1</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Technology & Marketing</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Employee 1</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Technology & Marketing</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>001</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Employee 1</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Technology & Marketing</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>NO</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6  d-none">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab8">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Import/Export Excel</h5>
                                    </div>

                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
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

                                    <div class="expImprt_sec mb-3" style="border-top: 0px !important;">
                                        <div class="kycForm_file">
                                            <label class="uploadFile">
                                                <i class="fa fa-download" aria-hidden="true"></i>

                                                <span class="filename">Import</span>
                                                <input type="file" class="inputfile form-control" name="file">
                                            </label>
                                        </div>
                                    </div>
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
                        <div class="custom_tabs_data" id="tab9">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Leave Master</h5>
                                    </div>

                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>

                                            <strong class="entities">entities</strong>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Department</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="masterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="masterTable_data">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6 class="text-left">Leave Code</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Leave Details</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Encash</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Annual Limit</h6>
                                                                </th>
                                                                <th width="140">
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>CL</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Casual Leave</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>14</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>CL</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Casual Leave</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>14</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>CL</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Casual Leave</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Yes</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>14</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions pb-3">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <p class="p-0">Showing 2 to 2 of 1 entries</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
                                                    <button class="tb_actionBtn">Exit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom_tabs_data" id="tab10">
                            <div class="masterTab_bg">
                                <div class="masterTab_data">
                                    <div class="custom_tittle">
                                        <h5>Holiday Master</h5>
                                    </div>
                                    <div class="sorting_nav">
                                        <div class="showSort">
                                            <strong>Show</strong>
                                            <div class="showSort_select">
                                                <select class="fav_show">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <strong class="entities">entities</strong>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Company</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="allSelect">
                                                <strong class="entitiesSelect">Select Department</strong>
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="masterTable">
                                        <div class="row">
                                            <div class="col-xxl-12 ">
                                                <div class="masterTable_data">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <h6 class="text-left">Holiday Name</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Holiday Date</h6>
                                                                </th>
                                                                <th>
                                                                    <h6 class="text-left">Holiday Type</h6>
                                                                </th>
                                                                <th width="140">
                                                                    <h6>Action</h6>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Pongal</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>DD-MM-YYYY</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>HL</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Pongal</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>DD-MM-YYYY</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>HL</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>Pongal</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>DD-MM-YYYY</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>HL</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn"><i
                                                                                class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i></button>
                                                                        <button class="actBtn"><i class="fa fa-trash"
                                                                                aria-hidden="true"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_actions pb-3">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns d-none">
                                                    <p class="p-0">Showing 2 to 2 of 1 entries</p>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="tablePagination">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Previous</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">Next</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table_actions">
                                        <div class="row align-items-center">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="table_actionsBtns">
                                                    <button class="tb_actionBtn">Add</button>
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
