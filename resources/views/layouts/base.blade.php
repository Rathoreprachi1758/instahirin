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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Hotjar Tracking Code for https://www.bizionictech.com/ --> 
    <script> 
        (function(h,o,t,j,a,r){ 
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; 
            h._hjSettings={hjid:3568140,hjsv:6}; 
            a=o.getElementsByTagName('head')[0]; 
            r=o.createElement('script');r.async=1; 
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; 
            a.appendChild(r); 
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); 
    </script>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '990314288786309');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=990314288786309&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
        
</head>

<body>
    <div class="wrapper">
        <!-- header -->
        <header>
            
            <div class="header flotNav_added">
                <div class="auto_container">
                    <div class="header_detail">
                        <div class="main_logo">
                            <a href="/hire"><img src="/bizionic/images/logo.png" alt="#" /></a>
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
                            <div class="row" id="footer-app">
                                @include('forms.subscription')

                                <div class="col-lg-3 col-md-3">
                                    <div class="quick_links">
                                        <h5>Quick Links</h5>
                                        <ul>
                                            <li><a href="#">Terms of Services</a></li>
                                            <li><a href="/industries/industries-we-serve/industries/acceptable-policy">Acceptable Policy</a></li>
                                            <li><a href="/industries/industries-we-serve/industries/cookies-policy">Cookies Policy</a></li>
                                            <li><a href="/industries/industries-we-serve/industries/privacy-policy">Privacy Policy</a></li>
                                            <li><a href="#">Services Agreement</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-4">
                                    <div class="bizionic_about"> 

                                        <div class="adress_tabs">
                                            <a href="#address1">INDIA</a> -
                                            <a href="#address2">U.A.E</a> -
                                            <a href="#address3">UKRAINE</a> -
                                            <a href="#address4">SINGAPORE</a>
                                        </div>

                                        <!-- india adress -->
                                        <div class="addressTab_data" id="address1" style="display: block;">
                                            <h6>Bizionic Technologies & Marketing Solution Private Limited</h6>
                                            <p class="addressP">3rd Floor, Office No 1A, 6-3-1090/B/4,
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

                                        <!-- uae adress  -->
                                        <div class="addressTab_data" id="address2">
                                            <h6>Bizionic Technologies & Marketing Solution Private Limited</h6>
                                            <p class="addressP">Hub71, 14th floor, Al Khatem Tower, Abu Dhabi Global Market Square Al Maryah Island, Abu Dhabi - U.A.E.</p>
                                            <!-- <p>Pin Code : 500082</p> -->
                                            <div class="infoLinks">
                                                <!-- <p class="pr-4"><i class="fa fa-mobile" style="font-size: 20px" aria-hidden="true"></i> <a href="tel:+91 9063756697"> +91 9059360184</a></p> -->
                                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@bizionictech.com"> info@bizionictech.com</a></p>
                                            </div>
                                            <!-- <p><a href="http://www.bizionictech.com"> www.bizionictech.com</a></p> -->
                                            <p>Monday to Friday 9:00 am to 6:00 pm</p>
                                        </div>

                                        <!-- ukrain adress  -->
                                        <div class="addressTab_data" id="address3">
                                            <h6>Bizionic Technologies & Marketing Solution Private Limited</h6>
                                            <p class="addressP">HUB 4.0 PODIL, Yaroslavsky Lane 1/3, Kyiv Ukraine.</p>
                                            <!-- <p>Pin Code : 500082</p> -->
                                            <div class="infoLinks">
                                                <!-- <p class="pr-4"><i class="fa fa-mobile" style="font-size: 20px" aria-hidden="true"></i> <a href="tel:+91 9063756697"> +91 9059360184</a></p> -->
                                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@bizionictech.com"> info@bizionictech.com</a></p>
                                            </div>
                                            <!-- <p><a href="http://www.bizionictech.com"> www.bizionictech.com</a></p> -->
                                            <p>Monday to Friday 9:00 am to 6:00 pm</p>
                                        </div>

                                        <!-- singapoor adress  -->
                                        <div class="addressTab_data" id="address4">
                                            <h6>Bizionic Technologies & Marketing Solution Private Limited</h6>
                                            <p class="addressP">230 Victoria Street, Level 15, Bugis Junctions Tower, Singapore 188024.</p>
                                            <!-- <p>Pin Code : 500082</p> -->
                                            <div class="infoLinks">
                                                <!-- <p class="pr-4"><i class="fa fa-mobile" style="font-size: 20px" aria-hidden="true"></i> <a href="tel:+91 9063756697"> +91 9059360184</a></p> -->
                                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@bizionictech.com"> info@bizionictech.com</a></p>
                                            </div>
                                            <!-- <p><a href="http://www.bizionictech.com"> www.bizionictech.com</a></p> -->
                                            <p>Monday to Friday 9:00 am to 6:00 pm</p>
                                        </div>


                                        <div class="social_info">
                                            <a href="https://www.facebook.com/Bizionictechnologies" target="_blank" class="s_fb"
                                                ><i class="fa fa-facebook-official" aria-hidden="true"></i
                                            ></a>
                                            <a href="https://www.instagram.com/bizionic_technologies/" target="_blank" class="s_inst"
                                                ><i class="fa fa-instagram" aria-hidden="true"></i
                                            ></a>
                                            <a href="https://twitter.com/bizionictech" target="_blank" class="s_tw"
                                                ><i class="fa fa-twitter-square" aria-hidden="true"></i
                                            ></a>
                                            <a href="https://www.linkedin.com/company/bizionic-technologies-and-marketing-solutions/" target="_blank" class="s_link"
                                                ><i class="fa fa-linkedin-square" aria-hidden="true"></i
                                            ></a>
                                            <a href="https://www.youtube.com/channel/UCDz2zqtte5EZ3_6OAfMl4rw" class="s_yout" target="_blank"
                                                ><i class="fa fa-youtube-play" aria-hidden="true"></i
                                            ></a>
                                            <a href="#" class="s_slide" target="_blank"
                                                ><i class="fa fa-slideshare" aria-hidden="true"></i
                                            ></a>
                                        </div>
                                        
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
                                <a href="/hire"><img src="/bizionic/images/footerLogo.png" alt="#" /></a>
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
