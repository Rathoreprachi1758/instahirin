<x-header data="profile component" />
<!-- main content sections -->
    <!-- custom css -->
    <link rel="stylesheet " href="{{asset('css/css/profilestyle.css')}} ">
    <link rel="stylesheet " href="{{asset('css/css/profileresponsive.css')}} ">

<div class="fr-section">
    <div class="fr-section_detail" style="margin-top: -88px;">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                    <ul>
                        <li>
                            <a href="/user-information" class="active">User Information</a>
                        </li>
                        <li><a href="#tab2">KYC Information</a></li>
                        <li><a href="#tab3">Credit Request</a></li>
                    </ul>
                </div>

                <div class="custom_tabs_detail">
                    <!-- tab1 data  -->
                    <div class="custom_tabs_data" style="display: none" id="tab1">
                        <!-- personal info sec -->
                        <div class="p_userInfo_section">
                            <div class="p_userInfo_head">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                        <div class="p_userInfo_tittle">
                                            <h5>
                                                <strong><i class="fa fa-id-card-o" aria-hidden="true"></i></strong>
                                                Personal Info
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p_userInfo_list">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_informationTxt">
                                                    <p>John</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Last Name</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_informationTxt">
                                                    <p>Philips</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Nationality</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" value="" placeholder="Indian" />
                                                    <strong><i class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- contact info sec -->
                        <div class="p_userInfo_section">
                            <div class="p_userInfo_head">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                        <div class="p_userInfo_tittle">
                                            <h5>
                                                <strong><i class="fa fa-id-card-o" aria-hidden="true"></i></strong>
                                                Contact Info
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                        <div class="p_userInfo_editInput">
                                            <strong><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p_userInfo_list">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Email</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" value="" class="w-100"
                                                        placeholder="johnpjilips@gmail.com" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" value="" class="w-100"
                                                        placeholder="+91 9XXXXXXX40" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Country</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" value="" class="w-100"
                                                        placeholder="Indian" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- company info sec -->
                        <div class="p_userInfo_section">
                            <div class="p_userInfo_head">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                        <div class="p_userInfo_tittle">
                                            <h5>
                                                <strong><i class="fa fa-briefcase" aria-hidden="true"></i></strong>
                                                Company Info
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                        <div class="p_userInfo_editInput">
                                            <strong><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p_userInfo_list">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Company Name*</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" value="" class="w-100"
                                                        placeholder="www.bizionictech.com" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12">
                                                <div class="p_userInfo_information">
                                                    <label>Company mail id*</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12">
                                                <div class="verify_section">
                                                    <div class="p_userInfo_editInput">
                                                        <input type="text" value=""
                                                            placeholder="info@bizionictech.com" />
                                                    </div>
                                                    <a href="#" class="verifyText">Verify</a>

                                                    <div class="enterOtp">
                                                        <label>Enter OTP</label>

                                                        <div class="enterOtpFields">
                                                            <input type="text" value="" placeholder="" />
                                                            <input type="text" value="" placeholder="" />
                                                            <input type="text" value="" placeholder="" />
                                                            <input type="text" value="" placeholder="" />
                                                        </div>

                                                        <div class="otpSubmit">
                                                            <input type="submit" value="Submit"
                                                                class="btndefault" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12">
                                                <div class="p_userInfo_information">
                                                    <label>Contact Number*</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12">
                                                <div class="verify_section">
                                                    <div class="p_userInfo_editInput">
                                                        <input type="text" value=""
                                                            placeholder="+91 9XXXXXXX40" />
                                                    </div>
                                                    <a href="#" class="verifyText">Verify</a>

                                                    <div class="enterOtp">
                                                        <label>Enter OTP</label>

                                                        <div class="enterOtpFields">
                                                            <input type="text" value="" placeholder="" />
                                                            <input type="text" value="" placeholder="" />
                                                            <input type="text" value="" placeholder="" />
                                                            <input type="text" value="" placeholder="" />
                                                        </div>

                                                        <div class="otpSubmit">
                                                            <input type="submit" value="Submit"
                                                                class="btndefault" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Address</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" class="w-100" value=""
                                                        placeholder="Road No-1, Madhapur, Hyderabad." />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>GST/VAT No</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" class="w-100" value=""
                                                        placeholder="37DDCPK5481D5632" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- chamge password sec -->
                        <div class="p_userInfo_section">
                            <div class="p_userInfo_head">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                        <div class="p_userInfo_tittle">
                                            <h5>
                                                <strong><i class="fa fa-lock" aria-hidden="true"></i></strong>
                                                Change Password
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6"></div>
                                </div>
                            </div>

                            <div class="p_userInfo_list passwordCol">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                                <div class="p_userInfo_information">
                                                    <label>Current Password</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6">
                                                <div class="p_userInfo_editInput">
                                                    <input type="password" value="" class="w-100"
                                                        placeholder="Current Password" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                                <div class="p_userInfo_information">
                                                    <label>New Password</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6">
                                                <div class="p_userInfo_editInput">
                                                    <input type="password" value="" class="w-100"
                                                        placeholder="New Password" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                                <div class="p_userInfo_information">
                                                    <label>Confirm new password</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6">
                                                <div class="p_userInfo_editInput">
                                                    <input type="password" value="" class="w-100"
                                                        placeholder="Confirm new password" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="customSubmitBtn">
                                            <input type="submit" value="Change Password" class="btndefault" />
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- tab2 data  -->
                    <div class="custom_tabs_data" id="tab2">
                        <div class="row">
                            <div class="col-xxl-9">
                                <!-- status alert  -->
                                <div class="statusAlert">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="statusAlert_info">
                                                <small>KYC Status</small>
                                                <strong>Pending</strong>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="statusAlert_info" style="border: 0px">
                                                <small>Date of submission</small>
                                                <strong>Sep 4, 2023</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- kyc form section  -->
                                <div class="kycForm_section">
                                    <div class="custom_tittle">
                                        <h4>KYC Application Form</h4>
                                    </div>

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
                                                    <input type="text" placeholder="" value=""
                                                        id="datepicker" />
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
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
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
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
                                                    <p class="p-0">
                                                        (Country of residence or Country of
                                                        origin)
                                                    </p>
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
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
                                                    <p>(Electricity or any Utility Bill)</p>
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
                                                        <input type="file" class="inputfile form-control"
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
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
                                                        <input type="file" class="inputfile form-control"
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
                                                    <p>
                                                        (Company MOU, MOA and other documents)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <p>(Download the FATCA and W-8BEN forms)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- row 1 -->
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                                            <div class="kycForm_field">
                                                <div class="kycForm_file">
                                                    <label class="uploadFile">
                                                        <span class="filename">Upload YOUR FATCA form</span>
                                                        <input type="file" class="inputfile form-control"
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
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
                                                        <input type="file" class="inputfile form-control"
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
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
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
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
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
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
                                                    <select class="fav_show">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>

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
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
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
                                                        <input type="checkbox" />
                                                        <span class="checkbox-custom rectangular"></span>
                                                    </label>
                                                    I agree, <a href="#">read more</a>
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
                    </div>

                    <!-- tab3 data  -->
                    <div class="custom_tabs_data" id="tab3" style="display: block">
                        <div class="row">
                            <div class="col-xxl-9">
                                <!-- kyc form section  -->
                                <div class="kycForm_section creditReq_section">
                                    <div class="custom_tittle descriptionTxt">
                                        <p>
                                            <strong>Description:</strong> The Bizionic
                                            fund request facility offers you the
                                            flexibility of funding for Employee/Talent,
                                            with access to additional funds. You can use
                                            these funds any time to make payments. In
                                            order to avail the facility, simply go to your
                                            eWallet profile, submit a request, and a
                                            representative from our team will get in touch
                                            with you.
                                        </p>

                                        <h4>Credit Request Form</h4>
                                    </div>

                                    <div class="faciltyReq_section">
                                        <div class="facilityBtn">
                                            <a href="#" class="btndefault">New Facility Request</a>
                                        </div>

                                        <div class="facilityStatus">
                                            <div class="facilityStatus_info">
                                                <span>Pending
                                                    <b class="statusArrow"><i class="fa fa-angle-down"
                                                            aria-hidden="true"></i></b></span>
                                                <div class="facilityStatus_dropdown">
                                                    <div class="statusAlert">
                                                        <div class="row">
                                                            <div
                                                                class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 statsuCol">
                                                                <div class="statusAlert_info">
                                                                    <small>Facility request status</small>
                                                                    <strong>Pending</strong>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 statsuCol">
                                                                <div class="statusAlert_info">
                                                                    <small>Date of submission</small>
                                                                    <strong>Sep 4, 2023</strong>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 statsuCol">
                                                                <div class="statusAlert_info">
                                                                    <small>Cheque No</small>
                                                                    <strong>1234</strong>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 statsuCol">
                                                                <div class="statusAlert_info">
                                                                    <small>Request Amount</small>
                                                                    <strong>10,000.00</strong>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 statsuCol">
                                                                <div class="statusAlert_info" style="border: 0px">
                                                                    <small>Approved amount</small>
                                                                    <strong>0.00</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- row 1 -->
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="kycForm_field">
                                                <strong>Cheque A/c Holder Name *</strong>
                                                <div class="kycForm_field_info">
                                                    <input type="text" placeholder="" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="kycForm_field">
                                                <strong>Cheque A/c No or IBAN No *</strong>
                                                <div class="kycForm_field_info">
                                                    <input type="text" placeholder="" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- row 1 -->
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="kycForm_field">
                                                <strong>Cheque Amount *</strong>
                                                <div class="kycForm_field_info">
                                                    <input type="text" placeholder="" value=""
                                                        id="datepicker" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="kycForm_field">
                                                <strong>Cheque No *</strong>
                                                <div class="kycForm_field_info">
                                                    <input type="text" placeholder="" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- row 1 -->
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="kycForm_field">
                                                <strong>Cheque Issuing Bank *</strong>
                                                <div class="kycForm_field_info">
                                                    <input type="text" placeholder="" value="" />
                                                </div>
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
                                                        <input type="file" class="inputfile form-control"
                                                            name="file" />
                                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                                <p>
                                                    * JPG, PNG, PDF and GIF formats are
                                                    accepted with a file size not exceeding
                                                    more than 25 MB.
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
                                                                <input type="checkbox" />
                                                                <span class="checkbox-custom rectangular"></span>
                                                            </label>
                                                            I/We hereby apply for the
                                                            Participation Guarantee and other
                                                            credit facilities set out in this
                                                            application form...
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


