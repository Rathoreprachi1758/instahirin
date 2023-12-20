{{-- <x-header data="user page component" /> --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no">
    <title>Bizionic</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet " href="css/style.css ">
    <link rel="stylesheet " href="css/responsive.css ">


    <!-- aos animation  -->
    <link rel="stylesheet " href="css/aos.css">
    <!-- font awesome-->
    <link rel="stylesheet " href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="canonical" href="https://www.bizionictech.com/get-sign-Up">
    <!-- aos animation js  -->
    <script src="js/aos.js"></script>
    <link rel="stylesheet " href="css/owl.carousel.min.css ">
    <script src="js/owl.carousel.js "></script>

    <link rel="icon" sizes="96x96" href="{{ asset('css/images/favicon-96x96.png') }}">




</head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="container-xxl container-xl container-lg container-md">
                    <div class="headerDetail">
                        <div class="logo">
                            <a href="{{ url('/about-us') }}"><img src="{{ asset('css/images/logo.png') }}"
                                    alt="Logo"></a>

                        </div>

                        <div class="header_menu">
                            <div class="authBttns">
                                <a href="{{ url('/loginpage') }}" class="signin_btn">Sign in</a>
                                <a href="{{ url('/get-sign-Up') }}" class="signup_btn">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="main_container">
                <div class="auth_screens">
                    <div class="container-xxl container-xl container-lg container-md">
                        <div class="auth_screens_detail">
                            <div class="row" style="margin-top: -59px">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 m-auto">
                                    <div class="auth_info">
                                        <h3 class="text-center">Sign Up</h3>
                                        <div class="text-center">
                                            <h5 style="font-size: 25px;">Connecting Global Talent, Creating Global Solutions</h5>
                                            <p style="font-size: 1rem;margin-top:-13px">
                                                Prepare to join a comprehensive work marketplace bustling with an
                                                extensive range of elite Software Developers, Designers, Cloud Services
                                                and Cyber Security Professionals, Marketers, and Businesses seeking
                                                outstanding talent and project execution.
                                            </p>
                                        </div>
                                        <form action="{{ route('submit.signup') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="auth_form pt-2">
                                                <div class="row">

                                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                        <div class="auth_field">
                                                            <strong>First Name*</strong>
                                                            <div class="auth_field_info">
                                                                <input type="text" name="firstName"
                                                                    class="form-control" id="firstName"
                                                                    placeholder="First Name"
                                                                    value="{{ old('firstName') }}">
                                                                @error('firstName')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                        <div class="auth_field">
                                                            <strong>Last Name*</strong>
                                                            <div class="auth_field_info">
                                                                <input type="text" name="lastName"
                                                                    class="form-control" id="lastName"
                                                                    placeholder="Last Name"
                                                                    value="{{ old('lastName') }}">
                                                                @error('lastName')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 ">
                                                        <div class="auth_field">
                                                            <strong>Email*</strong>
                                                            <div class="auth_field_info">
                                                                <input type="email" name="email"
                                                                    class="form-control" id="email"
                                                                    placeholder="Enter your Email" autocomplete="off"
                                                                    value="{{ old('email') }}">
                                                                @error('email')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="auth_field">
                                                            <strong>Password*</strong>
                                                            <div class="auth_field_info">
                                                                <input type="password" name="password"
                                                                    class="form-control" id="password"
                                                                    placeholder="Password" autocomplete="off" required>
                                                                @error('password')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                                <span class="passwEye togglePassword"
                                                                    onclick="togglePasswordVisibility(this)">
                                                                    <i class="fa fa-eye" style="color:#080816"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="auth_field">
                                                            <strong>Confirm Password*</strong>
                                                            <div class="auth_field_info">
                                                                <input type="password" name="password_confirmation"
                                                                    class="form-control" id="password_confirmation"
                                                                    placeholder="Confirm password" minlength="5"
                                                                    required>
                                                                @error('password_confirmation')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                                <span class="passwEye togglePassword"
                                                                    onclick="togglePasswordVisibility(this)">
                                                                    <i class="fa fa-eye" style="color:#080816"
                                                                        aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                        <div class="auth_field">
                                                            <strong>Country Code*</strong>
                                                            <div class="auth_select_info">
                                                                <select name='country_code' required>
                                                                    <option value="" disabled>Select a country
                                                                        code</option>
                                                                    @foreach ($countryCodes as $country)
                                                                        <option value="+{{ $country->phone }}"
                                                                            @if ($loop->first) selected @endif>
                                                                            +
                                                                            {{ $country->name . ' ' . $country->phone }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                        <div class="auth_field">
                                                            <strong>Mobile Number*</strong>
                                                            <div class="auth_field_info">
                                                                <input type="text" name="Mobile_Number"
                                                                    class="form-control" id="Mobile Number"
                                                                    placeholder="Mobile Number" minlength="9"
                                                                    required value="{{ old('Mobile_Number') }}">
                                                                @error('Mobile_Number')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="auth_text ">
                                                            <p class=" pb-2">
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox" name='privacy_statement'
                                                                        @if (old('privacy_statement')) checked @endif>
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                                @error('privacy_statement')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                            By clicking “Sign Up” you agree to Bizionic’s <a
                                                                href="#">Terms of Use</a> and <a
                                                                href="{{ url('industries/industries-we-serve/industries/privacy-policy') }}"
                                                                target="_blank">Privacy</a>
                                                            Statement
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="auth_text">
                                                            <p>
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox" name='future_promotions'
                                                                        required
                                                                        @if (old('future_promotions')) checked @endif>
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                                Please click this box if you are happy for us to send
                                                                you future promotions, offers and communication
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="auth_sbmit">
                                                            <input type="submit" value="Submit"
                                                                class="btndefault" />
                                                        </div>
                                                    </div>
                                        </form>
                                        <div class="col-12">
                                            <div class="forgotPasswText">
                                                <p>Already a Bizionic user? <a href="{{ url('/loginpage') }}">Click
                                                        here</a></p>
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
        <div class="footer">
            <div class="footer_detail">
                <p>Copyright &copy; <a href="https://www.bizionictech.com/" target="_blank">bizionictech.com</a> |
                    All rights reserved, Bizionic Technologies and Marketing Solutions Private Limited</p>
            </div>
        </div>
    </footer>


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
    <script>
        function togglePasswordVisibility(icon) {
            var passwordInput = icon.previousElementSibling;
            var type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            icon.querySelector('i').classList.toggle('fa-eye');
            icon.querySelector('i').classList.toggle('fa-eye-slash');
        }
    </script>



</body>

</html>
