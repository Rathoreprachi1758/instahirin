<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/bizionic/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet " href="/bizionic/css/style.css ">
    <link rel="stylesheet " href="/bizionic/css/responsive.css ">
    <link rel="stylesheet" href="/bizionic/css/aos.css" />

    <!-- font awesome-->
    <link rel="stylesheet " href="/bizionic/css/font-awesome.min.css ">
    <script src="/bizionic/js/jquery-3.4.1.min.js"></script>
    <!-- slick slider -->
    <link rel=" stylesheet " type="text/css " href="/bizionic/css/slick.css ">
    <link rel="stylesheet " type="text/css " href="/bizionic/css/slick-theme.css ">
    <script type="text/javascript" src="/bizionic/js/slick.js"></script>
    <script type="text/javascript" src="/bizionic/js/owl.carousel.js"></script>
    <link rel="stylesheet" href="/bizionic/css/owl.carousel.min.css" />
    <link rel="icon" sizes="96x96" href="/bizionic/images/favicon-96x96.png"> 
    
</head>

<body>
    <div class="wrapper">
        <!-- header -->
        <header>
            
            <div class="header">
                <div class="auto_container">
                    <div class="header_detail">
                        <div class="main_logo">
                            <a href="#"><img src="/bizionic/images/logo.png" alt="#" /></a>
                        </div>
                        <div class="menuIcon"></div>
                        @include('partials.nav')
                    </div>
                </div>
            </div>
            
        </header>
        <main class="main_container" id="app">
        @yield('content')
        </main>
    <!-- footer -->
        <footer>
           <div class="footer ">
                <div class="footerUp">
                    <div class="auto_container ">
                         <div class="footerUp_detail">
                            <div class="row">
                                @include('forms.subscription')
                                <div class="col-lg-4 col-md-5 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="">
                                    <div class="bizionic_about">
                                        <h6>INDIA  -  U.A.E.  -  UKRAINE  -  SINGAPORE </h6>
                                        <h6>Bizionic Technologies & Marketing Solution Private Limited</h6>
                                        <p>3rd Floor, Office No 1A, 6-3-1090/B/4,
                                            The Grand Building, KFC Building, Raj Bhavan Rd,
                                            Somajiguda, Hyderabad, Telangana 500082</p>
                                        <!-- <p>Pin Code : 500082</p> -->
                                        <div class="infoLinks">
                                            <p class="pr-4"><i class="fa fa-mobile" style="font-size: 20px" aria-hidden="true"></i> <a href="tel:+91 9063756697"> +91 9059360184</a></p>
                                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@bizionictech.com"> info@bizionictech.com</a></p>
                                        </div>
                                        <!-- <p><a href="http://www.bizionictech.com"> www.bizionictech.com</a></p> -->
                                        <p>Monday to Friday 9:00 am to 6:00 pm</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="footerBottom">
                    <div class="auto_container">
                        <div class="footerBottom_detail">
                            <div class="main_logo">
                                <a href="#"><img src="/bizionic/images/footerLogo.png" alt="#" /></a>
                            </div>
                            <div class="copyRight">
                                <p>Copyright © 2022 Bizionic Technologies and Marketing Solutions Pvt. Ltd. All Rights Reserved.</p>
                            </div>

                            
                        </div>
                    </div>
                </div>
           </div>
        </footer>



    </div>
    <script src="/bizionic/js/myscript.js"></script>
    <!-- bootstrap -->
    <script src="/bizionic/js/bootstrap.min.js"></script> 
    <script src="/bizionic/js/aos.js"></script>

</body>
</html>
