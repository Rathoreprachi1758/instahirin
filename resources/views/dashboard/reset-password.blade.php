{{-- <x-header reset page/> --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no">
    <title>Bizionic</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <!-- aos animation  -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- font awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- aos animation js  -->
    <script src="js/aos.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <script src="js/owl.carousel.js"></script>

    <link rel="icon" sizes="96x96" href="{{ asset('css/images/favicon-96x96.png') }}">




</head>

<body>

    <div class="wrapper">

        <!-- dashboard header  -->

        <header>
            <div class="header">
                <div class="container-xxl container-xl container-lg container-md">
                    <div class="headerDetail">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('css/images/logo.png ') }}" /></a>
                        </div>

                        <div class="header_menu">
                            <!-- <div class="change_langOuter">
                            <div id="google_translate_element"></div>
                        </div> -->

                            <div class="authBttns">
                                <a href="signin.html" class="signin_btn">Sign in</a>
                                <a href="signup.html" class="signup_btn">Sign Up</a>
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
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 m-auto">
                                    <div class="auth_info">
                                        <h3 class="text-center">Reset Password</h3>
                                        <p class="text-center">Reset your Password for Bizionic account</p>

                                        <div class="auth_form pt-2">
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="auth_field">
                                                        <strong>New Password</strong>
                                                        <div class="auth_field_info">
                                                            <input type="password" placeholder="" value="">
                                                            <span class="passwEye"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="auth_field">
                                                        <strong>Confirm New Password</strong>
                                                        <div class="auth_field_info">
                                                            <input type="password" placeholder="" value="">
                                                            <span class="passwEye"><i class="fa fa-eye"
                                                                    aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 pt-4">
                                                    <div class="auth_sbmit">
                                                        <input type="submit" value="Update" class="btndefault">
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
