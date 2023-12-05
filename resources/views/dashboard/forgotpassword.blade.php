<x-header data="forgot page component" />
<body>
     
    <div class="wrapper">

       <!-- dashboard header  -->

       <header>
        <div class="header">
            <div class="container-xxl container-xl container-lg container-md">
                <div class="headerDetail">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('css/images/logo.png') }}" alt="Logo"></a>
                    </div>

                    <div class="header_menu">
                        <!-- <div class="change_langOuter">
                            <div id="google_translate_element"></div>
                        </div> -->

                        <div class="authBttns">
                            <a href="{{ url('/loginpage') }}" class="signin_btn">Sign in</a>
                            <a href="{{ url('/Sign-In') }}" class="signup_btn">Sign Up</a>
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
                                    <h3 class="text-center">Forgot Password</h3>
                                    <p class="pt-2">Recover your account by following these simple steps!</p>

                                    <div class="followingSteps">
                                    <p>1. Enter your Bizionic email address below.</p>
                                    <p>2. Wait for password recovery details to be sent.</p>
                                    <p>3. Follow instructions mentioned in the email and be re-united with Bizionic</p>

                                    </div>

                                    <div class="auth_form pt-2">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="auth_field"> 
                                                    <div class="auth_field_info">
                                                        <input  type="text" placeholder="" value="" />
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="col-12 pt-3">
                                                <div class="auth_sbmit">
                                                    <input type="submit" value="Submit" class="btndefault" />
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="forgotPasswText">
                                                    <p>Did you recall your password?  <a href="{{ url('/loginpage') }}">Login</a></p> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-warning alertcustom" role="alert">
                                        <p>We have received your request for resetting your password. You will
                                        receive an email soon with instructions on how to reset your password.</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">Ok</button>
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
                 <p>Copyright &copy;  <a href="https://www.bizionictech.com/" target="_blank">bizionictech.com</a>  | All rights reserved, Bizionic Technologies and Marketing Solutions Private Limited</p>
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