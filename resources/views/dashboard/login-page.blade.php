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

    <!-- aos animation js  -->
    <script src="js/aos.js"></script>
    <link rel="stylesheet " href="css/owl.carousel.min.css ">
    <script src="js/owl.carousel.js "></script>

    <link rel="icon" sizes="96x96" href="{{asset('css/images/favicon-96x96.png')}}">

</head>
<body>
    @include('errors.errors')
    @if (session('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    {{-- <div class="container" style="margin-top:130px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form action="{{ url('/dashboard') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Add Bootstrap JavaScript (you should replace this link with the actual Bootstrap CDN or local file path) -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}

    {{-- <x-header data="login page component" /> --}}

    <body>

        <div class="wrapper">
            <header>
                <div class="header">
                    <div class="container-xxl container-xl container-lg container-md">
                        <div class="headerDetail">
                            <div class="logo">
                                <a href="{{url('/about-us')}}"><img src="{{ asset('css/images/logo.png') }}" alt="Logo"></a>
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





            <!-- main  -->

            <main>
                <div class="main_container">
                    <div class="auth_screens">
                        <div class="container-xxl container-xl container-lg container-md">
                            <div class="auth_screens_detail">
                                <form action="{{ url('/dashboard') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row" style="margin-top: -59px">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 m-auto">
                                            <div class="auth_info">
                                                <h3 class="text-center">Log In</h3>

                                                <div class="auth_form pt-2">
                                                    <div class="row">
                                                        <div class="col-12 ">
                                                            <div class="auth_field">
                                                                <strong>Email</strong>
                                                                <div class="auth_field_info">
                                                                    <input type="email" name="email" id="email"
                                                                        class="form-control"
                                                                        placeholder="Enter Your Email" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="auth_field">
                                                                <strong>Password</strong>
                                                                <div class="auth_field_info">
                                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                                                                    <span class="passwEye togglePassword" onclick="togglePasswordVisibility(this)">
                                                                        <i class="fa fa-eye" style="color:#080816" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-12">
                                                            <div class="auth_text">
                                                                <p>By clicking “Log in” you agree to Bizionic’s <a
                                                                        href="#">Terms of Use</a> and <a
                                                                        href="{{ url('industries/industries-we-serve/industries/privacy-policy') }}"
                                                                        target="_blank">Privacy</a>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="auth_sbmit">
                                                                <input type="submit" value="Login"
                                                                    class="btndefault" />
                                                            </div>
                                                        </div>

                                </form>
                                <div class="col-12">
                                    <div class="forgotPasswText">
                                        <p>Not a Bizionic user yet? <a href="{{ url('/get-sign-Up') }}">Sign Up</a></p>
                                        <p><a href="{{ url('/forgot-password') }}">Forgot Password?</a> </p>
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
                        All
                        rights reserved, Bizionic Technologies and Marketing Solutions Private Limited</p>
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
                var passwordInput = icon.previousElementSibling; // Assuming the input is always before the icon
                var type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;
                icon.querySelector('i').classList.toggle('fa-eye');
                icon.querySelector('i').classList.toggle('fa-eye-slash');
            }
        </script>

    </body>

    </html>
