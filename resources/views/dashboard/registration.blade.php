{{-- @extends('layouts.base')
@extends('layouts.signup') --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

{{-- <div class="container custom-login" style="padding-top: 100px;">
    @include('errors.errors') 
  @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form action="{{ url('/sign-up') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" class="form-control" id="firstName"
                                    placeholder="First Name">
                                @error('firstName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" class="form-control" id="lastName"
                                    placeholder="Last Name">
                                @error('lastName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" autocomplete="off">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password" autocomplete="off" required>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation" placeholder="Password" autocomplete="off" required>
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">Country Code *</label>
                                <input type="text" name="Country_Code" class="form-control" id="Country Code"
                                    placeholder="Country Code " maxlength="3" required>
                                @error('firstName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Mobile Number * </label>
                                <input type="text" name="Mobile_Number" class="form-control" id="Mobile Number"
                                    placeholder="Mobile Number" minlength="9" required>
                                @error('lastName')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="margin-left: 522px">Submit</button><br>
            <p class="mt-3" style="margin-left: 385px">Already signed up? <a href="{{ url('/loginpage') }}">Login</a>
            </p>
        </div>
    </form>
</div> --}}
<!doctype html>
<html lang="en-US">

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
    
    
        <script src="js/jquery-3.4.1.min.js"></script> 
    
        <!-- aos animation js  -->
        <script src="js/aos.js"></script> 
        <link rel="stylesheet " href="css/owl.carousel.min.css "> 
        <script src="js/owl.carousel.js "></script>

        <link rel="icon" sizes="96x96" href="images/favicon-96x96.png">


    
    
    </head>

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
                            <a href="{{url('/Sign-In')}}" class="signup_btn">Sign Up</a>
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
                                    <h3 class="text-center">Sign Up</h3>
                                    <p class="text-center">Get ready to connect with highly skilled Software Developers, Designers and Marketers
                                        at one stop to build cost-effective solutions at market place</p>

                                    <div class="auth_form pt-2">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="auth_field">
                                                    <strong>First Name*</strong>
                                                    <div class="auth_field_info">
                                                        <input  type="text" placeholder="" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Last Name*</strong>
                                                    <div class="auth_field_info">
                                                        <input  type="text" placeholder="" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="auth_field">
                                                    <strong>Email*</strong>
                                                    <div class="auth_field_info">
                                                        <input  type="text" placeholder="" value="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="auth_field">
                                                    <strong>Password*</strong>
                                                    <div class="auth_field_info">
                                                        <input  type="password" placeholder="" value="" />
                                                        <span class="passwEye"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="auth_field">
                                                    <strong>Confirm Password*</strong>
                                                    <div class="auth_field_info">
                                                        <input  type="password" placeholder="" value="" />
                                                        <span class="passwEye"><i class="fa fa-eye" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                                <div class="auth_field">
                                                    <strong>Country Code*</strong>
                                                    <div class="auth_select_info">
                                                        <select>
                                                            <option>Usa</option>
                                                            <option>Uae</option>
                                                            <option>Uk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Mobile Number*</strong>
                                                    <div class="auth_field_info">
                                                        <input  type="text" placeholder="" value="" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="auth_text ">
                                                    <p class=" pb-2">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox">
                                                            <span class="checkbox-custom rectangular"></span> 
                                                        </label>
                                                         By clicking “Sign Up” you agree to Bizionic’s <a href="#">Terms of Use</a>  and <a href="#">Privacy</a>  Statement</p> 
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="auth_text">
                                                    <p>
                                                        <label class="checkbox-label">
                                                            <input type="checkbox">
                                                            <span class="checkbox-custom rectangular"></span> 
                                                        </label>
                                                        Please click this box if you are happy for us to send you future promotions, offers and communication</p> 
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="auth_sbmit">
                                                    <input type="submit" value="Submit" class="btndefault" />
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="forgotPasswText">
                                                    <p>Already a Bizionic user?  <a href="{{ url('/loginpage') }}">Click here</a></p>  
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

