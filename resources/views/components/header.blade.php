@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <title>Bizionic</title>
    <!-- bootstrap -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
    <!-- aos animation  -->
    <link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">
    <!-- font awesome-->
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- <script src="js/jquery-3.4.1.min.js"></script> --}}

    <!-- aos animation js  -->
    {{-- <script src="js/aos.js"></script> --}}
    {{-- <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}
    {{-- <script src="js/owl.carousel.js "></script> --}}

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
                <div class="logo" style="margin-top: -15px; margin-left: -65px !important;">
                    <a href="{{ url('/about-us') }}">
                        {{-- <img src="{{ asset('css/images/logo.png') }}" alt="Logo"></a> --}}
                        {{-- <a href="{{ url('/about-us') }}"> --}}
                        <? xml version = "1.0" encoding = "utf-8" ?>
                        <!-- Generator: Adobe Illustrator 27.5.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Layer_1" height="100px" width="150px"
                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 219.4 53.5"
                            style="enable-background:new 0 0 219.4 53.5;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #010101;
                                }

                                .st1 {
                                    fill: #333333;
                                }
                            </style>
                            <g>
                                <g>
                                    <path class="st0" d="M4,2.5h5.7v25.9H4V2.5z" />
                                    <path class="st0"
                                        d="M14.9,2.5h7.8l11,18h0.1v-18h5.7v25.9H32L20.7,10h-0.1v18.4h-5.7V2.5z" />
                                    <path class="st0"
                                        d="M57.6,8.9c-0.5-0.6-1.1-1-1.9-1.3s-1.5-0.4-2.3-0.4c-0.4,0-0.8,0-1.3,0.1c-0.4,0.1-0.9,0.3-1.2,0.5
                                    c-0.4,0.2-0.7,0.5-1,0.8c-0.2,0.3-0.3,0.7-0.3,1.2c0,0.8,0.3,1.4,0.9,1.8s1.3,0.8,2.2,1.1c0.9,0.3,1.8,0.6,2.9,0.9
                                    c1,0.3,2,0.7,2.9,1.2s1.6,1.3,2.2,2.2c0.6,0.9,0.9,2.1,0.9,3.6c0,1.4-0.3,2.7-0.8,3.8c-0.5,1.1-1.3,2-2.2,2.7
                                    c-0.9,0.7-2,1.2-3.2,1.6c-1.2,0.3-2.5,0.5-3.8,0.5c-1.7,0-3.2-0.3-4.7-0.8c-1.4-0.5-2.8-1.3-4-2.5l4.1-4.5
                                    c0.6,0.8,1.3,1.4,2.2,1.8c0.9,0.4,1.8,0.6,2.8,0.6c0.5,0,0.9-0.1,1.4-0.2s0.9-0.3,1.3-0.5s0.7-0.5,0.9-0.8
                                    c0.2-0.3,0.3-0.7,0.3-1.2c0-0.8-0.3-1.4-0.9-1.8c-0.6-0.5-1.3-0.8-2.3-1.2c-0.9-0.3-1.9-0.6-2.9-1c-1-0.3-2-0.7-2.9-1.3
                                    c-0.9-0.5-1.7-1.2-2.3-2.1c-0.6-0.9-0.9-2-0.9-3.5c0-1.4,0.3-2.6,0.8-3.7c0.5-1,1.3-1.9,2.2-2.6c0.9-0.7,2-1.2,3.2-1.6
                                    c1.2-0.4,2.4-0.5,3.7-0.5c1.5,0,2.9,0.2,4.2,0.6c1.4,0.4,2.6,1.1,3.7,2.1L57.6,8.9z" />
                                    <path class="st0" d="M70.8,7.6h-7.4v-5h20.5v5h-7.4v20.9h-5.7V7.6z" />
                                    <path class="st0"
                                        d="M95.3,2.5h4.7l11.3,25.9h-6.4l-2.2-5.5H92.6l-2.2,5.5h-6.3L95.3,2.5z M97.5,10.1l-3.1,8h6.3L97.5,10.1z" />
                                    <path class="st0" d="M146.6,2.5h5.7v25.9h-5.7V2.5z" />
                                    <path class="st0"
                                        d="M157.5,2.5h10c1.3,0,2.6,0.1,3.7,0.4c1.2,0.3,2.2,0.7,3.1,1.3c0.9,0.6,1.6,1.4,2.1,2.4s0.8,2.3,0.8,3.8
                                    c0,1.8-0.5,3.4-1.4,4.7c-1,1.3-2.3,2.1-4.2,2.4l6.6,10.9h-6.8L166,18h-2.8v10.4h-5.7L157.5,2.5L157.5,2.5z M163.2,13.3h3.4
                                    c0.5,0,1.1,0,1.6-0.1c0.6,0,1.1-0.1,1.6-0.3c0.5-0.2,0.8-0.5,1.2-0.9c0.3-0.4,0.5-0.9,0.5-1.6c0-0.7-0.1-1.2-0.4-1.6
                                    c-0.3-0.4-0.6-0.7-1-0.9s-0.9-0.3-1.4-0.4c-0.5-0.1-1.1-0.1-1.6-0.1h-3.7v5.9H163.2z" />
                                    <path class="st0" d="M181.2,2.5h5.7v25.9h-5.7V2.5z" />
                                    <path class="st0"
                                        d="M192.1,2.5h7.8l11,18h0.1v-18h5.7v25.9h-7.5L197.9,10h-0.1v18.4h-5.7V2.5z" />
                                    <path class="st0"
                                        d="M116.4,17.4l5.7,5.7v-0.4l-5.7-5.7V17.4z M116.4,16.2l5.7,5.7v-0.4l-5.7-5.7V16.2z M116.4,20.9l5.7,5.7v-0.4
                                    l-5.7-5.7V20.9z M116.4,22.1l5.7,5.7v-0.4l-5.7-5.7V22.1z M116.4,13.9l5.7,5.7v-0.4l-5.7-5.7V13.9z M116.4,19.7l5.7,5.7V25
                                    l-5.7-5.7V19.7z M116.4,18.6l5.7,5.7v-0.5l-5.7-5.7V18.6z M116.4,15l5.7,5.7v-0.4l-5.7-5.7V15z M116.4,8l10.4,10.4h0.4L116.4,7.6
                                    L116.4,8L116.4,8z M116.4,9.2l9.2,9.2h0.4l-9.6-9.6L116.4,9.2L116.4,9.2z M122.2,12.6l5.7,5.7h0.4l-5.7-5.7H122.2z M116.4,10.3
                                    l8,8h0.4l-8.4-8.4V10.3z M123.4,12.6l5.7,5.7h0.4l-5.7-5.7H123.4z M116.4,12.7l5.7,5.7v-0.1h0.4l-6.1-6.1L116.4,12.7L116.4,12.7z
                                     M116.4,11.5l6.8,6.8h0.4l-7.3-7.3v0.5H116.4z M122.1,7.4l-4.8-4.8h-0.4l5.3,5.3V7.4H122.1z M122.1,6.2l-3.7-3.7H118l4.1,4.1
                                    L122.1,6.2L122.1,6.2z M122.1,9.7L116.4,4v0.4l5.7,5.7V9.7z M122.1,8.6l-5.7-5.7v0.4l5.7,5.7V8.6z M122.1,2.7L122,2.6h-0.4
                                    l0.6,0.6V2.7H122.1z M122.1,3.8l-1.3-1.3h-0.4l1.8,1.8V3.8H122.1z M122.1,5l-2.5-2.5h-0.4l2.9,2.9V5z M116.4,26.8l1.6,1.6h0.4
                                    l-2.1-2.1v0.5H116.4z M116.4,25.6l2.8,2.8h0.4l-3.3-3.3v0.5H116.4z M116.4,23.3l5.2,5.2h0.4l-5.6-5.6L116.4,23.3L116.4,23.3z
                                     M116.4,24.4l4,4h0.4l-4.4-4.4V24.4z M122.1,10.9l-5.7-5.7v0.4l5.7,5.7V10.9z M122.1,12.1l-5.7-5.7v0.4l5.7,5.7V12.1z M116.4,28
                                    l0.5,0.5h0.4l-0.9-0.9V28z M134.5,2.5l4.4,4.4V6.5l-4-4H134.5z M133.2,9.5l5.7,5.7v-0.4l-5.7-5.7V9.5z M133.2,8.3l5.7,5.7v-0.4
                                    l-5.7-5.7V8.3z M133.2,7.1l5.7,5.7v-0.4l-5.7-5.7V7.1z M133.2,6l5.7,5.7v-0.4l-5.7-5.7V6z M133.2,12.6h-0.4l6.1,6.1v-0.4
                                    L133.2,12.6L133.2,12.6z M133.2,10.7l5.7,5.7V16l-5.7-5.7V10.7z M131.6,12.6l7.3,7.3v-0.4l-6.8-6.8L131.6,12.6L131.6,12.6z
                                     M133.2,11.9l5.7,5.7v-0.4l-5.7-5.7V11.9z M136.8,2.5l2.1,2.1V4.2l-1.6-1.6L136.8,2.5L136.8,2.5z M135.6,2.5l3.3,3.3V5.4l-2.8-2.8
                                    L135.6,2.5L135.6,2.5z M138.4,2.5H138l0.9,0.9V3L138.4,2.5z M133.2,3.6l5.7,5.7V8.9l-5.7-5.7V3.6z M133.2,4.8l5.7,5.7v-0.4
                                    l-5.7-5.7V4.8z M124.6,12.6l5.7,5.7h0.4l-5.7-5.7H124.6z M133.3,2.5l5.6,5.6V7.7l-5.2-5.2C133.7,2.5,133.3,2.5,133.3,2.5z
                                     M133.2,23.6l4.8,4.8h0.4l-5.3-5.3v0.5H133.2z M133.2,24.8l3.7,3.7h0.4l-4.1-4.1L133.2,24.8L133.2,24.8z M133.2,27.1l1.3,1.3h0.4
                                    l-1.8-1.8v0.5H133.2z M133.2,26l2.5,2.5h0.4l-2.9-2.9V26z M125.8,12.6l5.7,5.7h0.4l-5.7-5.7H125.8z M130.5,12.6l8.4,8.4v-0.4l-8-8
                                    H130.5z M126.9,12.6l5.7,5.7h0.4l-5.7-5.7H126.9z M133.2,28.3l0.1,0.1h0.4l-0.6-0.6v0.5H133.2z M128.1,12.6l10.8,10.8V23
                                    l-10.3-10.4H128.1z M129.3,12.6l9.6,9.6v-0.4l-9.2-9.2H129.3z M133.2,18.9l5.7,5.7v-0.4l-5.7-5.7V18.9z M133.2,22.4l5.7,5.7v-0.4
                                    l-5.7-5.7V22.4z M133.2,20.1l5.7,5.7v-0.4l-5.7-5.7V20.1z M133.2,21.3l5.7,5.7v-0.4l-5.7-5.7V21.3z" />
                                </g>
                                <g>
                                    <path class="st1"
                                        d="M23.8,33.2H22v-0.7h4.3v0.7h-1.8V38h-0.8L23.8,33.2L23.8,33.2z" />
                                    <path class="st1"
                                        d="M30.4,32.5h0.7l2.4,5.5h-0.9L32,36.6h-2.6L28.9,38H28L30.4,32.5z M31.7,36l-1-2.5l0,0l-1,2.5H31.7z" />
                                    <path class="st1" d="M35.7,32.5h0.7v4.8h2.5V38h-3.3v-5.5H35.7z" />
                                    <path class="st1"
                                        d="M41.3,32.5h3.6v0.7h-2.8v1.6h2.6v0.7h-2.6v1.8h3V38h-3.7L41.3,32.5L41.3,32.5z" />
                                    <path class="st1"
                                        d="M47.7,32.5h1l3,4.5l0,0v-4.5h0.7V38h-1l-3.1-4.5l0,0V38h-0.8v-5.5H47.7z" />
                                    <path class="st1" d="M56.6,33.2h-1.8v-0.7h4.3v0.7h-1.8V38h-0.7V33.2z" />
                                    <path class="st1"
                                        d="M65.2,32.5h1.9c0.2,0,0.5,0,0.7,0.1s0.4,0.1,0.5,0.3c0.1,0.1,0.3,0.3,0.4,0.4s0.1,0.4,0.1,0.6
                                    c0,0.3-0.1,0.6-0.3,0.8c-0.2,0.2-0.4,0.3-0.7,0.4l0,0c0.2,0,0.3,0.1,0.5,0.1c0.1,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.2,0.3,0.3,0.4
                                    c0.1,0.2,0.1,0.3,0.1,0.5s-0.1,0.5-0.2,0.7s-0.2,0.4-0.4,0.5c-0.2,0.1-0.4,0.2-0.6,0.3C67.7,38,67.4,38,67.1,38h-1.9V32.5z
                                     M66,34.8h1c0.1,0,0.3,0,0.4,0s0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.2,0.2-0.3C68,34.3,68,34.2,68,34c0-0.2-0.1-0.4-0.2-0.6
                                    s-0.4-0.2-0.7-0.2h-1.2L66,34.8L66,34.8z M66,37.3h1.1c0.1,0,0.2,0,0.4,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.2-0.2,0.3-0.3
                                    c0.1-0.1,0.1-0.3,0.1-0.5c0-0.3-0.1-0.6-0.3-0.7c-0.2-0.2-0.5-0.2-0.9-0.2H66V37.3z" />
                                    <path class="st1"
                                        d="M71.7,32.5h3.6v0.7h-2.8v1.6h2.6v0.7h-2.6v1.8h3V38h-3.7L71.7,32.5L71.7,32.5z" />
                                    <path class="st1"
                                        d="M79.4,35.6l-2.1-3.2h1l1.5,2.4l1.6-2.4h0.9l-2.1,3.2V38h-0.7v-2.4H79.4z" />
                                    <path class="st1" d="M87,38.1c-0.4,0-0.8-0.1-1.2-0.2c-0.4-0.1-0.7-0.4-0.9-0.6c-0.3-0.3-0.5-0.6-0.6-0.9
                                    c-0.1-0.4-0.2-0.7-0.2-1.1s0.1-0.8,0.2-1.1c0.1-0.4,0.3-0.7,0.6-0.9c0.3-0.3,0.6-0.5,0.9-0.6c0.4-0.1,0.7-0.2,1.2-0.2
                                    s0.8,0.1,1.2,0.2c0.4,0.1,0.7,0.4,0.9,0.6c0.3,0.3,0.5,0.6,0.6,0.9c0.1,0.4,0.2,0.7,0.2,1.1s-0.1,0.8-0.2,1.1
                                    c-0.1,0.4-0.3,0.7-0.6,0.9c-0.3,0.3-0.6,0.5-0.9,0.6C87.8,38.1,87.4,38.1,87,38.1z M87,37.4c0.3,0,0.6-0.1,0.9-0.2
                                    s0.5-0.3,0.7-0.5s0.3-0.4,0.4-0.7c0.1-0.3,0.1-0.6,0.1-0.9s0-0.6-0.1-0.9s-0.2-0.5-0.4-0.7c-0.2-0.2-0.4-0.4-0.7-0.5
                                    c-0.3-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2s-0.5,0.3-0.7,0.5s-0.3,0.4-0.4,0.7c-0.1,0.3-0.1,0.6-0.1,0.9s0,0.6,0.1,0.9
                                    s0.2,0.5,0.4,0.7c0.2,0.2,0.4,0.4,0.7,0.5S86.6,37.4,87,37.4z" />
                                    <path class="st1"
                                        d="M92.5,32.5h1l3,4.5l0,0v-4.5h0.8V38h-1l-3.1-4.5l0,0V38h-0.7V32.5z" />
                                    <path class="st1"
                                        d="M100.1,32.5h1.9c0.4,0,0.7,0,1,0.1s0.5,0.2,0.8,0.4s0.4,0.3,0.5,0.5s0.3,0.4,0.3,0.6c0.1,0.2,0.1,0.4,0.2,0.6
                                    c0,0.2,0.1,0.4,0.1,0.6c0,0.4-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.6,0.9s-0.6,0.5-0.9,0.6c-0.4,0.2-0.8,0.2-1.3,0.2h-1.8V32.5z
                                     M100.9,37.3h0.9c0.3,0,0.6,0,0.9-0.1c0.3-0.1,0.5-0.2,0.7-0.4c0.2-0.2,0.4-0.4,0.5-0.6c0.1-0.3,0.2-0.6,0.2-0.9
                                    c0-0.2,0-0.4-0.1-0.6s-0.2-0.5-0.3-0.7c-0.2-0.2-0.4-0.4-0.7-0.5s-0.6-0.2-1.1-0.2h-1.1v4H100.9z" />
                                    <g>
                                        <path class="st1"
                                            d="M157.5,32.5h1.9c0.2,0,0.5,0,0.7,0.1s0.4,0.1,0.5,0.3c0.1,0.1,0.3,0.3,0.4,0.4c0.1,0.2,0.1,0.4,0.1,0.6
                                        c0,0.3-0.1,0.6-0.3,0.8c-0.2,0.2-0.4,0.3-0.7,0.4l0,0c0.2,0,0.3,0.1,0.5,0.1c0.1,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.2,0.3,0.3,0.4
                                        c0.1,0.2,0.1,0.3,0.1,0.5s-0.1,0.5-0.2,0.7c-0.1,0.2-0.2,0.4-0.4,0.5s-0.4,0.2-0.6,0.3c-0.2,0.1-0.5,0.1-0.8,0.1h-1.9V32.5z
                                         M158.3,34.8h1c0.1,0,0.3,0,0.4,0c0.1,0,0.2-0.1,0.3-0.1c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.2,0.1-0.4c0-0.2-0.1-0.4-0.2-0.6
                                        c-0.1-0.2-0.4-0.2-0.7-0.2h-1.2L158.3,34.8L158.3,34.8z M158.3,37.3h1.1c0.1,0,0.2,0,0.4,0c0.1,0,0.3-0.1,0.4-0.1
                                        c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.3,0.1-0.5c0-0.3-0.1-0.6-0.3-0.7s-0.5-0.2-0.9-0.2h-1.1V37.3z" />
                                        <path class="st1"
                                            d="M172.1,32.5h1.9c0.4,0,0.6,0,0.9,0.1c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.1,0.2,0.3,0.3,0.5s0.1,0.4,0.1,0.5
                                        c0,0.2,0,0.3-0.1,0.5s-0.2,0.3-0.3,0.4s-0.3,0.2-0.4,0.3c-0.2,0.1-0.4,0.1-0.6,0.2l1.6,2.5h-0.9l-1.4-2.4h-0.8v2.4h-0.7v-5.4
                                        H172.1z M172.8,34.9h1c0.1,0,0.3,0,0.4,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.3,0.1-0.5s0-0.3-0.1-0.5
                                        c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.3,0-0.4,0h-1V34.9z" />
                                        <path class="st1"
                                            d="M178.3,32.5h1.9c0.4,0,0.7,0,1,0.1s0.5,0.2,0.8,0.4c0.2,0.1,0.4,0.3,0.5,0.5s0.3,0.4,0.3,0.6
                                        c0.1,0.2,0.1,0.4,0.2,0.6c0,0.2,0.1,0.4,0.1,0.6c0,0.4-0.1,0.7-0.2,1c-0.1,0.3-0.3,0.6-0.6,0.9s-0.6,0.5-0.9,0.6
                                        c-0.4,0.2-0.8,0.2-1.3,0.2h-1.8V32.5z M179.1,37.3h0.9c0.3,0,0.6,0,0.9-0.1c0.3-0.1,0.5-0.2,0.7-0.4c0.2-0.2,0.4-0.4,0.5-0.6
                                        c0.1-0.3,0.2-0.6,0.2-0.9c0-0.2,0-0.4-0.1-0.6s-0.2-0.5-0.3-0.7c-0.2-0.2-0.4-0.4-0.7-0.5s-0.6-0.2-1.1-0.2H179v4H179.1z" />
                                        <path class="st1"
                                            d="M185.8,32.5h3.6v0.7h-2.8v1.6h2.6v0.7h-2.6v1.8h3V38h-3.7v-5.5H185.8z" />
                                        <path class="st1"
                                            d="M192.1,32.5h1.9c0.4,0,0.6,0,0.9,0.1c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.1,0.2,0.3,0.3,0.5s0.1,0.4,0.1,0.5
                                        c0,0.2,0,0.3-0.1,0.5s-0.2,0.3-0.3,0.4s-0.3,0.2-0.4,0.3c-0.2,0.1-0.4,0.1-0.6,0.2l1.6,2.5h-0.9l-1.4-2.4h-0.8v2.4h-0.7v-5.4
                                        H192.1z M192.9,34.9h1c0.1,0,0.3,0,0.4,0c0.1,0,0.3-0.1,0.4-0.1c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.3,0.1-0.5s0-0.3-0.1-0.5
                                        c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.3,0-0.4,0h-1V34.9z" />
                                        <path class="st1" d="M198.6,36.8c0.1,0.2,0.3,0.4,0.5,0.4c0.2,0.1,0.4,0.1,0.7,0.1c0.1,0,0.3,0,0.4-0.1c0.1,0,0.2-0.1,0.4-0.2
                                        c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.2,0.1-0.4c0-0.2-0.1-0.4-0.2-0.5c-0.1-0.1-0.3-0.2-0.5-0.3c-0.2-0.1-0.4-0.1-0.7-0.2
                                        c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.4-0.3-0.5-0.5s-0.2-0.5-0.2-0.9c0-0.2,0-0.3,0.1-0.5s0.2-0.3,0.3-0.5
                                        c0.2-0.2,0.3-0.3,0.6-0.4c0.2-0.1,0.5-0.2,0.9-0.2c0.3,0,0.6,0,0.9,0.1c0.3,0.1,0.5,0.3,0.7,0.5l-0.6,0.6
                                        c-0.1-0.1-0.2-0.3-0.4-0.4s-0.4-0.1-0.6-0.1c-0.2,0-0.4,0-0.5,0.1s-0.2,0.1-0.3,0.2s-0.1,0.2-0.2,0.3c0,0.1-0.1,0.2-0.1,0.3
                                        c0,0.2,0.1,0.4,0.2,0.5c0.1,0.1,0.3,0.2,0.5,0.3s0.4,0.1,0.7,0.2c0.2,0.1,0.5,0.1,0.7,0.3c0.2,0.1,0.4,0.3,0.5,0.5
                                        s0.2,0.5,0.2,0.8s-0.1,0.5-0.2,0.7c-0.1,0.2-0.2,0.4-0.4,0.5s-0.4,0.3-0.6,0.3c-0.2,0.1-0.5,0.1-0.8,0.1c-0.4,0-0.7-0.1-1-0.2
                                        s-0.6-0.3-0.8-0.6L198.6,36.8z" />
                                        <g>
                                            <path class="st1"
                                                d="M163.7,35.2c0-1.4,0.9-2.6,2.3-2.8c1.1-0.2,2.1,0.1,2.9,1c0.4,0.4,0.5,0.9,0.6,1.4c0.1,0.8,0,1.5-0.5,2.1
                                            c-0.4,0.6-1,1-1.7,1.2c-0.8,0.2-1.6,0-2.3-0.5s-1.1-1.1-1.2-1.9C163.7,35.5,163.7,35.4,163.7,35.2z M169,33.9
                                            C169,34,169,34,169,33.9c0,0.1,0,0.1,0.1,0.1l0,0C169,34,169,34,169,33.9L169,33.9c-0.1-0.2-0.3-0.4-0.4-0.6
                                            c0,0.1-0.1,0.1-0.2,0.1h-0.1c-0.1,0-0.1,0-0.1,0.1v0.1c0,0,0,0,0,0.1c-0.1-0.1-0.2-0.1-0.3-0.1l0,0c-0.1,0.1-0.1,0.2,0,0.3V34
                                            c0.1,0,0.2,0,0.2,0c0.1-0.1,0.3-0.2,0.4-0.3c0,0.1,0.1,0.2,0.1,0.3c0,0.1,0.1,0.1,0.1,0.1c0.1,0,0.1-0.1,0.2-0.1l0,0
                                            c-0.1-0.1-0.1-0.1-0.2-0.2v-0.1h0.1C168.9,33.8,168.9,33.9,169,33.9z M166,33.1C166,33.1,166.1,33.1,166,33.1
                                            c0-0.1-0.1-0.2-0.1-0.3c0-0.1-0.2-0.1-0.3,0l0,0c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2,0c-0.1-0.1-0.1-0.1-0.2,0
                                            c-0.7,0.4-1.1,1.1-1.2,1.8c0,0.1,0,0.1,0.1,0.1c0,0,0,0,0.1,0s0.2,0.1,0.3,0.1c0.1,0.1,0.1,0.1,0.2,0.1h0.1
                                            c0.1,0.1,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0.1v0.1c0,0.1-0.1,0.1-0.1,0.2s0,0.1-0.1,0.2v0.1c0,0.1,0.1,0.1,0.1,0.2
                                            c0.1,0.1,0.2,0.2,0.3,0.2c0,0,0.1,0,0.1,0.1s0,0.2,0,0.2c0,0.1,0.1,0.1,0.1,0.2s0.1,0.2,0.1,0.3v0.1c0.1,0.1,0.1,0.3,0.2,0.4
                                            c0.1,0.1,0.2,0.2,0.3,0.1l-0.1-0.1c-0.1-0.1-0.1-0.2,0-0.3c0,0,0,0,0-0.1s0-0.1,0.1-0.1s0.2-0.1,0.1-0.2c0,0,0,0,0-0.1
                                            s0-0.1,0.1-0.1s0.1-0.1,0.1-0.2s0-0.1,0.1-0.1c0.2-0.1,0.3-0.3,0.2-0.5c0-0.1-0.1-0.1-0.2-0.2c-0.1,0-0.1-0.1-0.2-0.1l0,0
                                            c-0.1,0-0.1,0-0.2-0.1c0,0,0-0.1-0.1-0.1s-0.1-0.1-0.2-0.1c-0.1,0-0.2,0-0.3,0.1c0,0,0,0-0.1,0c0,0,0-0.1-0.1-0.1l0,0
                                            c-0.1,0-0.2,0-0.2,0c-0.1,0.1-0.2,0.1-0.2,0.1l0,0c0-0.1,0-0.1-0.1-0.1c0,0,0-0.1-0.1-0.1V35h-0.1c-0.1,0.1-0.1,0.1-0.1,0l0,0
                                            c0-0.1,0-0.1,0.1-0.2c0,0,0,0,0.1,0s0.3,0,0.4,0.1h0.1c0.1-0.1,0.2-0.2,0.2-0.3c0-0.1,0-0.2,0.1-0.2c0.1-0.1,0.2-0.2,0.4-0.2
                                            c0.1,0,0.1,0,0.1-0.1s0-0.1,0.1,0c0.1,0,0.1,0,0.2,0.1c0,0,0,0,0.1,0c0.1-0.1,0.1-0.1,0.2-0.2c-0.1,0-0.1,0-0.1-0.1
                                            s-0.1-0.1-0.1-0.2s-0.1,0-0.1,0s-0.1,0.1-0.2,0.1c-0.1,0-0.2,0-0.3,0s-0.2,0.1-0.2,0.1s0,0,0,0.1c0,0,0-0.1-0.1-0.1
                                            c0,0,0,0-0.1,0s-0.1,0-0.1-0.1c0,0,0,0,0-0.1s0-0.1,0.1-0.1s0.1,0,0.2-0.1h0.1c0,0,0.1,0.1,0.1,0
                                            C165.7,33.2,165.9,33.1,166,33.1z M168.7,36.9L168.7,36.9c0.4-0.5,0.6-1,0.6-1.5c0-0.3,0-0.6-0.1-0.9c0,0,0,0,0-0.1
                                            c0,0-0.1,0-0.1-0.1H169c-0.1,0-0.2,0.1-0.3,0.2c0,0,0,0-0.1,0s-0.1-0.1-0.2-0.1c-0.1-0.1-0.2-0.1-0.3-0.1H168h-0.1
                                            c-0.1,0-0.2,0.1-0.3,0.1s-0.2,0.1-0.2,0.2s0,0.1,0,0.2s0,0.1,0,0.1l-0.1,0.1c0,0.1,0,0.3,0,0.4c0.1,0.3,0.3,0.4,0.6,0.3
                                            c0.2-0.1,0.3-0.1,0.5,0l0.1,0.1c0,0.1,0,0.2,0,0.2c0.1,0.1,0.1,0.1,0,0.2l0,0c-0.1,0.1-0.1,0.1,0,0.2
                                            C168.6,36.6,168.7,36.8,168.7,36.9z M168.5,33.3L168.5,33.3c-0.1-0.1-0.1-0.1-0.2-0.2C168.3,33.2,168.4,33.2,168.5,33.3z" />
                                        </g>
                                    </g>
                                </g>
                                <path class="st1" d="M145.3,18.7c-1.3-1.1-3-2-5-2.7v1c2,0.8,3.7,1.8,5,2.9V18.7z M155.2,41.2l-8.8-5.8c0.9-0.8,1.5-1.7,1.9-2.7
                                c0.4-0.9,0.6-1.7,0.6-2.6v-0.3h-3c0,0,0,0-0.1,0.1c-0.2,0.1-0.3,0.3-0.4,0.4c-0.4,0.3-0.9,0.6-1.4,0.9c-3.9,2.4-9.6,3.8-15.7,3.8
                                c-6.1,0-11.8-1.4-15.7-3.8c-0.5-0.3-0.9-0.6-1.4-0.9c-0.2-0.1-0.3-0.3-0.5-0.4c0,0,0,0-0.1-0.1h-3v0.3c0,0.9,0.2,1.8,0.6,2.6
                                c2.2,5,10.5,8.4,20,8.4c3.8,0,7.5-0.6,10.8-1.6l9.5,8.5c0,0,1.1,1.2,3.3,2c0.3,0.1,0.6,0.1,0.9,0.1c0.5,0,0.9-0.1,1.4-0.3
                                c1.2-0.6,2.1-1.7,2.6-3.1C157.5,44.3,157,42.6,155.2,41.2z M150.4,45.3c-0.1,0.5-0.2,1-0.1,1.5l-9.9-8.1c0,0-2.1-2,1.9-4.4
                                c0,0-2.4,2.2-0.6,3.3c1.4,0.8,6.8,4.6,9.3,6.3C150.7,44.2,150.5,44.7,150.4,45.3z M155.8,46.1c-0.4,1.6-1.6,2.7-2.6,2.9
                                c-0.1,0-0.3,0-0.4,0c-0.7-0.1-1.1-0.6-1.2-0.9c-0.3-0.7-0.4-1.5-0.2-2.4c0.4-1.6,1.6-2.7,2.6-2.9c0.1,0,0.3,0,0.4,0
                                c0.7,0.1,1.1,0.6,1.2,0.9C155.9,44.3,156,45.2,155.8,46.1z M115,17.4v-1c-2.4,1.1-4.4,2.5-5.7,4.1l0.4,1
                                C110.9,19.9,112.7,18.5,115,17.4z" />
                            </g>
                        </svg>
                    </a>
                </div>


                <div class="header_menu">
                    <div class="authBttns">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="background-color:#343A40">
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
                                        Home <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
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
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em>
                                    </a>
                                    <ul>
                                        <li><a href="{{ url('Employer-activity') }}">► Employer / Company</a></li>
                                        <li><a href="{{ url('Employee-activity') }}">► Employee / Talent</a></li>
                                        <li><a href="{{ route('agencyContractor') }}">► Agency / Contractor</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/InstaProject') }}"><span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z"/></svg>
                                </span>
                                        Insta Project
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>
                                <li><a href="{{ url('/Master') }}"><span><i class="fa fa-male"
                                                aria-hidden="true"></i></span>
                                        Master
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em></a>
                                </li>

                                <li class="has_list open_sublist" onclick="toggleSublist(this)">
                                    <a href="javascript:void(0)">
                                        <span><i class="fa fa-usd"
                                                 aria-hidden="true"></i></span>
                                        Salary Details
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                                 aria-hidden="true"></i></em>
                                    </a>
                                    <ul>
                                        <li><a href="{{route('salaryDetails')}}">Employee Salary Details</a></li>
                                        <li><a href="javascript:void(0)">Salary Head Master</a></li>
                                        <li><a href="javascript:void(0)">Normal Salary</a></li>
                                    </ul>
                                </li>
                                <li class="has_list open_sublist" onclick="toggleSublist(this)">
                                    <a href="javascript:void(0)">
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                        Time Tracking
                                        <em class="menu_icon"><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></em>
                                    </a>
                                    <ul>
                                        @if (auth()->user()->roles == 'user')
                                            <li><a href="{{ route('logInOff') }}">► Log In / Off</a></li>
                                        @endif
                                        @if (auth()->user()->roles == 'user')
                                            <li><a href="{{ route('employeeWorkLog') }}">► Work Logs</a></li>
                                        @endif
                                        @if (auth()->user()->roles == 'company')
                                            <li><a href="{{ route('timeLogs') }}">► Time Logs</a></li>
                                        @endif
                                        @if (auth()->user()->roles == 'user' || auth()->user()->roles == 'company')
                                            <li><a href="{{ route('timeOff') }}">► Time Off</a></li>
                                        @endif
                                        @if (auth()->user()->roles == 'user')
                                            <li><a href="{{ route('leaveRequest') }}">► Leave Request</a></li>
                                        @endif
                                        @if (auth()->user()->roles == 'user')
                                            <li><a href="{{ route('lateRequest') }}">► Late Coming Request</a></li>
                                        @endif
                                        @if (auth()->user()->roles == 'company')
                                            <li><a href="{{ route('leaveLateApproval') }}">► Leave / Late Request
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
