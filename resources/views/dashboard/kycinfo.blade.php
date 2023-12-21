<x-header data="profile component" />
<!-- main content sections -->
<!-- custom css -->
<link rel="stylesheet " href="{{ asset('css/css/profilestyle.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/profileresponsive.css') }} ">

<div class="fr-section">
    <div class="fr-section_detail" style="margin-top: -88px;">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                    <ul>
                        <li>
                            <a href="/profile">User Information</a>
                        </li>
                        <li><a href="/kyc-info" class="active">KYC Information</a></li>
                        <li><a href="/credit-request">Credit Request</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('css/js/profilepage.js') }}"></script>
<script src="{{ asset('css/js/merge_script.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('css/js/bootstrap.bundle.min.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: "en",
            },
            "google_translate_element"
        );
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<link rel="stylesheet " href="{{ asset('css/css/font-awesome.min.css') }}" />

<script src="{{ asset('css/js/jquery-3.4.1.min.js') }}"></script>
