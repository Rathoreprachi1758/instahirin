<x-header data="user page component" />

<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="container-xxl container-xl container-lg container-md">
                    <div class="headerDetail">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('css/images/logo.png') }}" alt="Logo"></a>

                        </div>

                        <div class="header_menu">
                            <div class="authBttns">
                                <a href="{{ url('/loginpage') }}" class="signin_btn">Sign in</a>
                                <a href="{{ url('/Sign-In') }}" class="signup_btn">Sign Up</a>
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
                                        <p class="text-center"><h5>Connecting Global Talent, Creating Global Solutions</h5>
                                            <h6 style="font-size: 1rem">Prepare to join a comprehensive work marketplace, bustling with
                                            an extensive range of elite Software Developers, Designers, and Marketers,
                                            alongside businesses seeking outstanding talent and project execution.</h6></p>
                                        <form action="{{ url('/sign-up') }}" method="POST"
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
                                                                    placeholder="First Name">
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
                                                                    placeholder="Last Name">
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
                                                                    placeholder="Enter your Email" autocomplete="off">
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
                                                                <span class="passwEye"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                    <div class="col-12">
                                                        <div class="auth_field">
                                                            <strong>Confirm Password*</strong>
                                                            <div class="auth_field_info">
                                                                <input type="password" name="password_confirmation"
                                                                    class="form-control" id="password_confirmation"
                                                                    placeholder="Confirm password " minlength="5"
                                                                    required>
                                                                @error('password_confirmation')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                                <span class="passwEye"><i class="fa fa-eye"
                                                                        aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                        <div class="auth_field">
                                                            <strong>Country Code*</strong>
                                                            <div class="auth_select_info">
                                                                <select name='country_code'>
                                                                    @foreach ($countryCodes as $country)
                                                                        <option
                                                                            value="+ {{$country->phone}}">
                                                                            + {{ $country->name . ' ' . $country->phone }}
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
                                                                    placeholder="Mobile Number" minlength="9" required>
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
                                                                    <input type="checkbox" name='privacy_statement'>
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                                @error('privacy_statement')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                            By clicking “Sign Up” you agree to Bizionic’s <a
                                                                href="#">Terms of Use</a> and <a
                                                                href={{ url('industries/industries-we-serve/industries/privacy-policy') }}>Privacy</a>
                                                            Statement
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="auth_text">
                                                            <p>
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox" required>
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


</body>

</html>
