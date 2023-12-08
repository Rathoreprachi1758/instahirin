<x-header data="forgot page component" />

<header>
 <!-- Bootstrap CSS (make sure to include it) -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

 <!-- Bootstrap JS (make sure to include it) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <div class="header">
        <div class="container-xxl container-xl container-lg container-md">
            <div class="headerDetail">
                <div class="logo" style="margin-left: -58px;">
                    <a href="#"><img src="{{ asset('css/images/logo.png') }}" alt="Logo"></a>
                </div>

                <div class="header_menu">
                    <div class="authBttns">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              User profile
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Profile</a>
                              <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<main>
    <div class="row">
        <div class="main_container">

            <div class="dashboard_screens">

                <!-- main nav  -->

                <div class="fl-bar">
                    <div class="db_tittle">
                        <h3>Hi, User</h3>
                        <p>Welcome to your Bizionic Dashboard</p>
                        <strong>{{ auth()->user()->name }}</strong>
                    </div>


                    <div class="nav-list">
                        <div class="db_nav">
                            <ul>

                                <li>
                                    <a href="javascript:void(0)" class="active"><span><i class="fa fa-user-circle-o"
                                                aria-hidden="true"></i></span> Home <em class="menu_icon"><i
                                                class="fa fa-angle-down" aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-id-card"
                                                aria-hidden="true"></i></span> Profile
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-clock-o"
                                                aria-hidden="true"></i></span> Activity
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>

                                    <ul>
                                        <li><a href="javascript:void(0)">Employer / Company</a></li>
                                        <li><a href="javascript:void(0)">Employee / Talent</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-male"
                                                aria-hidden="true"></i></span>
                                        Master
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-usd"
                                                aria-hidden="true"></i></span> Salary Details
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>

                                    <ul>
                                        <li><a href="javascript:void(0)">Employee Salary Details</a></li>
                                        <li><a href="javascript:void(0)">Salary Head Master</a></li>
                                        <li><a href="javascript:void(0)">Normal Salary</a></li>
                                    </ul>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-clock-o"
                                                aria-hidden="true"></i></span> Time Tracking
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>

                                    <ul>
                                        <li><a href="javascript:void(0)">Work logs</a></li>
                                        <li><a href="javascript:void(0)">Time logs</a></li>
                                        <li><a href="javascript:void(0)">Time off</a></li>
                                    </ul>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-money"
                                                aria-hidden="true"></i></span> Payroll
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>

                                    <ul>
                                        <li><a href="javascript:void(0)">Payrolls</a></li>
                                        <li><a href="javascript:void(0)">Payroll Adjustment</a></li>
                                        <li><a href="javascript:void(0)">Payroll Invoices</a></li>
                                    </ul>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-database"
                                                aria-hidden="true"></i></span> Project
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>

                                    <ul>
                                        <li><a href="javascript:void(0)">Create Project</a></li>
                                        <li><a href="javascript:void(0)">View Project</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-credit-card"
                                                aria-hidden="true"></i></span> Payments
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-file-text"
                                                aria-hidden="true"></i></span> Documents
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-line-chart"
                                                aria-hidden="true"></i></span> Benefits
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-file"
                                                aria-hidden="true"></i></span>
                                        Expenses
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-file-o"
                                                aria-hidden="true"></i></span> Requests
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-inbox"
                                                aria-hidden="true"></i></span> Inbox
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="javascript:void(0)"><span><i class="fa fa-clipboard"
                                                aria-hidden="true"></i></span> My eDashboard
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>



                <!-- main content sections -->

                <div class="fr-section">
                    <div class="fr-section_detail">
                        <div class="dashboardPage">
                            <div class="row">
                                <div class="mobileBtn">
                                    <a id="menu-toggle" class="menu-toggle">
                                        <span class="menu-toggle-bar menu-toggle-bar--top"></span>
                                        <span class="menu-toggle-bar menu-toggle-bar--middle"></span>
                                        <span class="menu-toggle-bar menu-toggle-bar--bottom"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="db_tittle">
                                    <h3>Hi, User</h3>
                                    <p>Welcome to your Bizionic Dashboard</p>
                                    <strong>Bizionic ID: BIZ12860735</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-11 ">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Profile</h4>
                                                        <p>View and manage your account Information</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/profile_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Go to profile</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Activity</h4>
                                                        <p>Manage and keep track of all your account activities,
                                                            including
                                                            your job posting and profile marketing</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/activity_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Manage Activity</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Master</h4>
                                                        <p>Manage and keep track of employee master details pertaining
                                                            to
                                                            Company, Department, Designation, Category, Leave and
                                                            Holidays.
                                                        </p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/master_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Master Tracking</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Salary Details</h4>
                                                        <p>Manage and keep track of employee salary details upon the
                                                            components added under addition & deduction heads.</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/salary_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Manage Salary Tracking</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Time Tracking</h4>
                                                        <p>Manage to keep track of Time Logs, leave approvals, and
                                                            holiday
                                                            calendars</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/timetrack_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Manage Time Tracking</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Payroll</h4>
                                                        <p>View and manage payroll activities and Invoice transaction
                                                            adjustments</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/payroll_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Manage Payroll</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Projects</h4>
                                                        <p>Manage & keep tracking, planning, and work faster for all
                                                            project
                                                            details with its updated status.</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/projrct_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Go to Projects</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Payments</h4>
                                                        <p>Manage invoice and payment transaction information</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/payment_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Go to Payments</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Documents</h4>
                                                        <p>View and manage financial Information</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/document_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Get Documents</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Benefits</h4>
                                                        <p>Manage employment benefits</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/benefit_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Manage Benefits</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Expenses</h4>
                                                        <p>Manage and keep track of all financial adjustments/expenses
                                                        </p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/expences_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Manage Expenses</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Requests</h4>
                                                        <p>View and manage job posting records, and profile marketing
                                                        </p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/request_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Get Requests</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>Inbox</h4>
                                                        <p>Get alerts and notifications on the latest updates including
                                                            new
                                                            job postings, profile updation, and marketing</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/inbox_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Get Started</strong>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 dbPage_col">
                                            <div class="db-blocks">
                                                <div class="db-blocksHead">
                                                    <div class="db-blocksHeadTittle">
                                                        <h4>My eDashboard</h4>
                                                        <p>Ease-to-use digital Dashboard for managing your payments and
                                                            transactions in real time</p>
                                                    </div>

                                                    <div class="db-blocksHeadAvatar">
                                                        <span><img src="{{ asset('css/images/db_avatar.png') }}"
                                                                alt="#" /></span>
                                                    </div>
                                                </div>

                                                <div class="db-blocksFooter">
                                                    <a href="#" class="gotoPage">
                                                        <span><i class="fa fa-angle-right"
                                                                aria-hidden="true"></i></span>
                                                        <strong>Go to eDashboard</strong>
                                                    </a>
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
</main>




<!-- dashboard footer  -->

<footer>
    <div class="footer db_footer">
        <div class="footer_detail">
            <p>Copyright &copy; <a href="https://www.bizionictech.com/" target="_blank">bizionictech.com</a> | All
                rights reserved, Bizionic Technologies and Marketing Solutions Private Limited</p>
        </div>
    </div>
</footer>


</div>
</div>





<script src="js/myscript.js"></script>
<script src="js/merge_script.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>


</body>

</html>
