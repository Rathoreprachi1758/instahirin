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
                <br>
                <div class="kycForm_section">
                    <div class="custom_tittle">
                        <h4>KYC Application Form</h4>
                    </div>
                    <br>
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        </div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger">
                            <span style="margin-left:330px">{{ Session::get('danger') }}</span>
                        </div>
                    @endif
                    <!-- row 1 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Company Name (Applicable if you are a
                                    Company)</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Trade license number</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Date of incorporation</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" id="datepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Place of incorporation</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Company Address (line 1)</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Company Address (line 2)</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Beneficiary owner</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Cnationality</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                            <div class="kycForm_field">
                                <strong>Get/tax Identification Number</strong>
                                <div class="kycForm_field_info">
                                    <input type="text" placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
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
