<x-header data="profile component" />
<!-- main content sections -->
<!-- custom css -->
<link rel="stylesheet " href="{{ asset('css/css/profilestyle.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/profileresponsive.css') }} ">

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

<div class="fr-section">
    <div class="fr-section_detail" style="margin-top: -88px;">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                    <ul>
                        <li>
                            <a href="/profile">User Information</a>
                        </li>
                        <li>
                            <a href="/kyc-info">KYC Information</a>
                        </li>
                        <li>
                            <a href="/credit-request" class="active">Credit Request</a>
                        </li>
                    </ul>
                </div>
                <form action="{{route('creadit.request')}}" method="post" id="creadit_request">
                    @csrf
                    <div class="container-fluid" style="margin-top:10px">

                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="kycForm_field">
                                    <strong>Cheque A/c Holder Name *</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" name="Account_holder_name" placeholder="" value="{{ old('Account_holder_name') }}">
                                    </div>
                                        @error('Account_holder_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror 
                                    
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="kycForm_field">
                                    <strong>Cheque A/c No or IBAN No *</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" name="Account_no"placeholder="" value="{{ old('Account_no') }}">
                                    </div>
                                        @error('Account_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror 
                                    
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="kycForm_field">
                                    <strong>Cheque Amount *</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" placeholder="" name="Cheque_amount" value="{{old('Cheque_amount')}}" id="datepicker" />
                                    </div>
                                    @error('Cheque_amount')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="kycForm_field">
                                    <strong>Cheque No *</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" name="cheque_no" placeholder="" value="{{old('cheque_no')}}" />
                                    </div>
                                    @error('cheque_no')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="kycForm_field">
                                    <strong>Cheque Issuing Bank *</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" name="issued_bank" placeholder="" value="{{old('issued_bank')}}" />
                                    </div>
                                    @error('issued_bank')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-12">
                                <div class="kycForm_field">
                                    <strong>Cheque Image * (<u>Sample Cheque</u>)</strong>
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename"></span>
                                            <input type="file" class="inputfile form-control" name="file" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                    </div>
                                    @error('file')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <p>
                                        * JPG, PNG, PDF and GIF formats are accepted with a file size not exceeding more
                                        than 25
                                        MB.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="agreeSection pt-3">
                                    <div class="agreeSection_info">
                                        <div class="auth_text">
                                            <p>
                                                <label class="checkbox-label">
                                                    <input type="checkbox" name="checkbox" required/>
                                                    <span class="checkbox-custom rectangular"></span>
                                                </label>
                                                I/We hereby apply for the Participation Guarantee and other credit
                                                facilities
                                                set out in this application form...
                                                <a href="#">read more</a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="customSubmitBtn kycSubmit">
                                        <input type="submit" value="Submit" class="btndefault" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
