No lines are selected.
<x-header data="profile component" />
<!-- main content sections -->
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/css/profilestyle.css') }} ">
<link rel="stylesheet" href="{{ asset('css/css/profileresponsive.css') }} ">

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
                <form action="{{ route('kyc.submit') }}" method="POST" id="kyc_info" enctype="multipart/form-data">
                    @csrf
                    <div class="kycForm_section">
                        <div class="custom_tittle">
                            <h4>KYC Application Form</h4>
                        </div>
                        @if (Session::has('kyc_msg'))
                            <div class="alert alert-success">
                                <span style="margin-left:330px">{{ Session::get('kyc_msg') }}</span>
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
                                        <input type="text" placeholder="Enter your Company Name" name="Company_Name"
                                            value="{{ old('Company_Name') }}" />
                                    </div>
                                    @error('Company_Name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Trade license number *</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" placeholder="Enter Trade Licence" name="Licence_number"
                                            value="{{ old('Licence_number') }}" />
                                    </div>
                                    @error('Licence_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- row 2 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Date of incorporation</strong>
                                    <div class="kycForm_field_info">
                                        <input name="Date_incorporation" id="datepicker" autocomplete="off"
                                            value="{{ old('Date_incorporation') }}" />
                                    </div>
                                    @error('Date_incorporation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Place of incorporation</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" placeholder=" Enter Place of Incorporation"
                                            name="Place_incorporation" value="{{ old('Place_incorporation') }}" />
                                    </div>
                                    @error('Place_incorporation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- row 2 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Company Address (line 1)</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" placeholder="Address 1" name="Company_address_line1"
                                            value="{{ old('Company_address_line1') }}" />
                                    </div>
                                    @error('Company_address_line1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Company Address (line 2)</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" placeholder="Address 2" name="Company_address_line2"
                                            value="{{ old('Company_address_line2') }}" />
                                    </div>
                                    @error('Company_address_line2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Beneficiary owner</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" name="beneficiary_owner"
                                            value="{{ old('beneficiary_owner') }}" />
                                    </div>
                                    @error('beneficiary_owner')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Nationality</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" name="nationality" value="{{ old('nationality') }}" />
                                    </div>
                                    @error('nationality')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Get/tax Identification Number</strong>
                                    <div class="kycForm_field_info">
                                        <input type="text" placeholder="" name="tax_identification_number"
                                            value="{{ old('tax_identification_number') }}" />
                                    </div>
                                    @error('tax_identification_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- kyc upload file section  -->
                    <div class="kycForm_section kwcFileSection">
                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Upload your id documents verifying your
                                        personal details*</strong>
                                    <p>
                                        Jpg, png, pdf and gif formats are accepted
                                        with a file size not exceeding 25 MB.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Scanned passport / id copy *</span>
                                            <input type="file" class="inputfile form-control"
                                                name="Scanned_passport" value="{{ old('Scanned_passport') }}"
                                                onchange="previewImage(this, 'imagePreview1')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                        @error('Scanned_passport')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="imagePreview1"
                                            style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <img src="#" alt="Uploaded Image"
                                                style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <p>
                                        Upload both sides (front and back) in case
                                        of dual-sided identity documents
                                    </p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Scanned ID copy *</span>
                                            <input type="file" class="inputfile form-control"
                                                name="back_side_copy" value="{{ old('back_side_copy') }}"
                                                onchange="previewImage(this, 'imagePreview2')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                        <p class="p-0">
                                            (Country of residence or Country of
                                            origin)
                                        </p>
                                        @error('back_side_copy')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="imagePreview2"
                                            style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <img src="#" alt="Uploaded Image"
                                                style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Upload a document that verifies your
                                        address</strong>
                                    <p>
                                        Jpg, png, pdf and gif formats are accepted
                                        with a file size not exceeding More than
                                        25 MB.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Scanned Address Proof Copy</span>
                                            <input type="file" class="inputfile form-control"
                                                name="address_proof_copy" value="{{ old('address_proof_copy') }}"
                                                onchange="previewImage(this, 'imagePreview3')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                        <p>(Electricity or any Utility Bill)</p>
                                        @error('address_proof_copy')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="imagePreview3"
                                            style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <img src="#" alt="Uploaded Image"
                                                style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Upload your company trade license</strong>
                                    <p>
                                        Jpg, png, pdf and gif formats are accepted
                                        with a file size not exceeding 25 MB.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Click to upload</span>
                                            <input type="file" class="inputfile form-control" name="Trade_licence"
                                                value="{{ old('Trade_licence') }}"
                                                onchange="previewImage(this, 'imagePreview4')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                        @error('Trade_licence')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="imagePreview4"
                                            style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <img src="#" alt="Uploaded Image"
                                                style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row justify-content-end">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Other</span>
                                            <input type="file" class="inputfile form-control" name="other_doc"
                                                value="{{ old('other_doc') }}"
                                                onchange="previewImage(this, 'imagePreview5')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                        <p>
                                            (Company MOU, MOA and other documents)
                                        </p>
                                        @error('other_doc')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="imagePreview5"
                                            style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <img src="#" alt="Uploaded Image"
                                                style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <!-- fatca  select section  -->
                    <div class="kycForm_section">
                        <div class="custom_tittle">
                            <h4 class="text-uppercase">
                                FaTCa declaration
                            </h4>
                        </div>
                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Are you a us citizen or
                                        resident?*</strong>
                                    <div class="kycForm_select">
                                        <select class="fav_show" name="resident_citizen"
                                            value="{{ old('resident_citizen') }}">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <p>(Download the FATCA and W-8BEN forms)</p>
                                </div>
                                @error('resident_citizen')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Upload YOUR FATCA form</span>
                                            <input type="file" class="inputfile form-control" name="FATCA"
                                                value="{{ old('FATCA') }}"
                                                onchange="previewImage(this, 'imagePreview6')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                        @error('FATCA')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="imagePreview6"
                                            style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <img src="#" alt="Uploaded Image"
                                                style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Upload YOUR W-8BEN form</span>
                                            <input type="file" class="inputfile form-control" name="w_8BEN_form"
                                                value="{{ old('w_8BEN_form') }}"
                                                onchange="previewImage(this, 'imagePreview7')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                        @error('w_8BEN_form')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="imagePreview7"
                                            style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                            <img src="#" alt="Uploaded Image"
                                                style="max-width: 100%; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- user  select section  -->
                    <div class="kycForm_section">
                        <div class="custom_tittle">
                            <h4 class="text-uppercase">
                                USER COMPLiance declaration
                            </h4>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Do you remit money from sanctioned
                                        countries?*</strong>
                                    <div class="kycForm_select">
                                        <select class="fav_show" name="sanctionedcountries"
                                            value="{{ old('sanctionedcountries') }}">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    @error('sanctionedcountries')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Do you have subsidiary office or presence
                                        in sanctioned Country?*</strong>
                                    <div class="kycForm_select">
                                        <select class="fav_show" name="presencein_sanctioned_Country"
                                            value="{{ old('presencein_sanctioned_Country') }}">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    @error('presencein_sanctioned_Country')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <strong>Do you import/export or provide any
                                        services to sanctioned Entities or
                                        Countries?*</strong>
                                    <div class="kycForm_select">
                                        <select class="fav_show" name="any_service_provided_in_sactioned_country"
                                            value="{{ old('any_service_provided_in_sactioned_country') }}">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    @error('any_service_provided_in_sactioned_country')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <p>
                                        (Download the customer compliance forms)
                                    </p>

                                </div>
                            </div>
                        </div>

                        <!-- row 1 -->
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                <div class="kycForm_field">
                                    <div class="kycForm_file">
                                        <label class="uploadFile">
                                            <span class="filename">Upload YOUR customer compliance
                                                form</span>
                                            <input type="file" class="inputfile form-control"
                                                name="customer_compliance"
                                                onchange="previewImage(this, 'imagePreview9')" />
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </label>
                                    </div>
                                    @error('customer_compliance')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <div id="imagePreview9"
                                        style="display: none; text-align: center; padding: 20px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                        <img src="#" alt="Uploaded Image"
                                            style="max-width: 100%; max-height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- user  select section  -->
                    <div class="kycForm_section">
                        <div class="agreeSection">
                            <div class="agreeSection_info">
                                <div class="auth_text">
                                    <p>
                                        <label class="checkbox-label">
                                            <input type="checkbox" name="agrement_checkbox" />
                                            <span class="checkbox-custom rectangular"></span>
                                        </label>
                                        I agree, <a href="#">read more</a>
                                    </p>
                                </div>
                                @error('agrement_checkbox')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="customSubmitBtn kycSubmit">
                                <input type="submit" value="Submit" class="btndefault" />
                            </div>
                        </div>
                </form>
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
{{-- // --}}
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: 'dd-mm-yy',
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:+nn',
        });
    });

    function previewImage(input, previewId) {
        var fileInput = input;
        var filename = fileInput.files[0].name;
        var filenameSpan = input.closest('.kycForm_file').querySelector('.filename');
        var imagePreview = document.getElementById(previewId);

        filenameSpan.textContent = filename;
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.style.display = 'block';
                imagePreview.querySelector('img').src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
</script>
