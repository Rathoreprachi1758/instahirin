@php use Illuminate\Support\Facades\Auth;
 use App\Models\User;
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <title>Bizionic</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
    <!-- aos animation  -->
    <link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">
    <!-- font awesome-->
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- aos animation js  -->
    <script src="js/aos.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <script src="js/owl.carousel.js "></script>

    <link rel="icon" sizes="96x96" href="{{ asset('css/images/favicon-96x96.png') }}">

    <style>
        .has_list ul {
            display: none;
        }

        .has_list.open_sublist ul {
            display: block;
        }
    </style>
    <script>
        function togglePasswordVisibility(icon) {
            var passwordInput = icon.previousElementSibling;
            var type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            icon.querySelector('i').classList.toggle('fa-eye');
            icon.querySelector('i').classList.toggle('fa-eye-slash');
        }

        //
        function toggleSublist(element) {
            element.classList.toggle('open_sublist');
        }
    </script>

</head>

<header>
    <!-- Bootstrap CSS (make sure to include it) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Bootstrap JS (make sure to include it) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .db_tittle {
            border-bottom: 0.2px solid #bebbbb87 !important;
        }
    </style>
    <div class="header">
        <div class="container-xxl container-xl container-lg container-md">
            <div class="headerDetail">
                <div class="logo" style="margin-left: -58px;">
                    <a href="{{ url('/about-us') }}"><img src="{{ asset('css/images/logo.png') }}" alt="Logo"></a>
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
                        {{-- <strong><a href="{{ url('/InstaHirin') }}"></a></strong> --}}
                    </div>

                    {{-- <p this is instahire ><a href="{{ url('/InstaHirin') }}"></a></p> --}}
                    <div class="nav-list">
                        <div class="db_nav">
                            <ul>
                                <li>
                                    <a href="/dashboard-return" class="active"><span><i class="fa fa-user-circle-o"
                                                                                        aria-hidden="true"></i></span>
                                        Home <em class="menu_icon"><i
                                                class="fa fa-angle-down" aria-hidden="true"></i></em></a>
                                </li>
                                {{-- <li>
                                    <a href="/InstaHirin" ><span><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i></span> Instahirin <em class="menu_icon"><i
                                        class="fa fa-angle-down" aria-hidden="true"></i></em></a>
                                </li> --}}
                                {{-- <li>
                                    <a href="{{route('open-positions')}}" ><span><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i></span>current-open-positions<em class="menu_icon"><i
                                        class="fa fa-angle-down" aria-hidden="true"></i></em></a>
                                </li> --}}
                                <li><a href="/profile"><span><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                        Profile
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                                 aria-hidden="true"></i></em></a>
                                </li>
                                <li class="has_list open_sublist" onclick="toggleSublist(this)">
                                    <a href="javascript:void(0)">
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                        Activity
                                        <em class="menu_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></em>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('Employer-activity')}}">► Employer / Company</a></li>
                                        <li><a href="{{url('Employee-activity')}}">► Employee / Talent</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/master')}}"><span><i class="fa fa-male"
                                                                          aria-hidden="true"></i></span>
                                        Master
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                                 aria-hidden="true"></i></em></a>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-usd"
                                                                                           aria-hidden="true"></i></span>
                                        Salary Details
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                                 aria-hidden="true"></i></em></a>

                                    <ul>
                                        <li><a href="javascript:void(0)">Employee Salary Details</a></li>
                                        <li><a href="javascript:void(0)">Salary Head Master</a></li>
                                        <li><a href="javascript:void(0)">Normal Salary</a></li>
                                    </ul>
                                </li>
                                <li class="has_list open_sublist" onclick="toggleSublist(this)">
                                    <a href="javascript:void(0)">
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                        Time Tracking
                                        <em class="menu_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></em>
                                    </a>
                                    <ul>
                                        @if(auth()->user()->roles == 'user')
                                            <li><a href="{{route('logInOff')}}">► Log In / Off</a></li>
                                        @endif
                                        @if(auth()->user()->roles == 'user')
                                            <li><a href="{{route('employeeWorkLog')}}">► Work Logs</a></li>
                                        @endif
                                        @if(auth()->user()->roles == 'company')
                                            <li><a href="{{route('timeLogs')}}">► Time Logs</a></li>
                                        @endif
                                        <li><a href="{{route('timeOff')}}">► Time Off</a></li>
                                        @if(auth()->user()->roles == 'user')
                                            <li><a href="{{route('leaveRequest')}}">► Leave Request</a></li>
                                        @endif
                                        @if(auth()->user()->roles == 'user')
                                            <li><a href="{{route('lateRequest')}}">► Late Coming Request</a></li>
                                        @endif
                                        @if(auth()->user()->roles == 'company')
                                            <li><a href="{{route('leaveLateApproval')}}">► Leave / Late Request
                                                    Approval</a></li>
                                        @endif
                                    </ul>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-money"
                                                                                           aria-hidden="true"></i></span>
                                        Payroll
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                                 aria-hidden="true"></i></em></a>

                                    <ul>
                                        <li><a href="javascript:void(0)">Payrolls</a></li>
                                        <li><a href="javascript:void(0)">Payroll Adjustment</a></li>
                                        <li><a href="javascript:void(0)">Payroll Invoices</a></li>
                                    </ul>
                                </li>
                                <li class="has_list"><a href="javascript:void(0)"><span><i class="fa fa-database"
                                                                                           aria-hidden="true"></i></span>
                                        Project
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
            </div>
        </div>
    </div>
</main>
<!-- dashboard footer  -->

<footer>
    <div class="footer">
        <div class="footer_detail">
            <p>Copyright &copy; <a href="https://www.bizionictech.com/" target="_blank">bizionictech.com</a> |
                All
                rights reserved, Bizionic Technologies and Marketing Solutions Private Limited</p>
        </div>
    </div>
</footer>
