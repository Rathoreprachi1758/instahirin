<x-header data="user-profile component" />
{{-- <h1 style="margin-left:675px">This is user info</h1> --}}
<link rel="stylesheet " href="{{ asset('css/css/profilestyle.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/profileresponsive.css') }} ">

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
