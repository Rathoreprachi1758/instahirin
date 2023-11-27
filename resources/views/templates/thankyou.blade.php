
@extends('layouts.app')

@section('content')

    <head>

        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-THZV9RC4');
        </script>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THZV9RC4" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        </head>
        <style>
            .footerUp_detail {
                margin-top: 300px !important;
            }
        </style>

        <body>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THZV9RC4" height="0" width="0"
                    style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
            <div class="container">
                <div class="row justify-content-center footerUp_detail">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body text-center">
                                <h1 style="font-family:sans-serif;font-size:24px">Thanks for reaching out! We’ll be in touch
                                    faster
                                    than a FORMULA lap. Stay tuned!
                                </h1>
                                <marquee direction="right" scrollamount="60" style="font-size: 70px;" loop="2"><span
                                        style="display: inline-block; transform: scaleX(-1);">🏎️</span></marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    @endsection