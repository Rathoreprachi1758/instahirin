<x-header data="user-profile component" />
{{-- <h1 style="margin-left:675px">This is user info</h1> --}}
<link rel="stylesheet " href="{{ asset('css/css/profilestyle.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/profileresponsive.css') }} ">
<div class="fr-section">
    <div class="fr-section_detail" style="margin-top: -88px;">
        <div class="dashboard_innerPages">
            {{-- @include('errors.errors') --}}
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
            <div class="custom_tabs_section">

                <div class="custom_tabs">
                    <ul>
                        <li>
                            <a href="/profile" class="active">User Information</a>
                        </li>
                        <li><a href="/kyc-info">KYC Information</a></li>
                        <li><a href="/credit-request">Credit Request</a></li>
                    </ul>
                </div>
                <br>
                @foreach ($userdata as $user)
                    <div class="p_userInfo_section">
                        <div class="p_userInfo_head">
                            <div class="row" style="background-color:#f5f5f5">
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
                                                <p>{{ $user->name }}</p>
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
                                                <p>-</p>
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
                    {{-- // --}}
                    <!-- contact info sec -->
                    <div class="p_userInfo_section">
                        <div class="p_userInfo_head">
                            <div class="row" style="background-color:#f5f5f5">
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
                                                <input type="text" class="w-100" value="{{ $user->email }}" />
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
                                                <input type="text" class="w-100"
                                                    value="{{ $user->mobilenumber }}" />
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
                            <div class="row" style="background-color:#f5f5f5">
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
                                                        <input type="submit" value="Submit" class="btndefault" />
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
                                                        <input type="submit" value="Submit" class="btndefault" />
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
                @endforeach
                <!-- chamge password sec -->
                <div class="p_userInfo_section">
                    <div class="p_userInfo_head">
                        <div class="row" style="background-color:#f5f5f5">
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

                    <form action="{{ url('/change-password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                                    name='current_password' placeholder="Current Password" />
                                                <span class="passwEye togglePassword" style="margin-right: 409px"
                                                    onclick="togglePasswordVisibility(this)">
                                                    <i class="fa fa-eye" style="color:#080816"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            @error('current_password')
                                                <span class="valid"
                                                    style="font-size: 12px;color:#c62424">{{ $message }}</span>
                                            @enderror
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
                                                    name='new_password' placeholder="New Password" />
                                                <span class="passwEye togglePassword" style="margin-right: 409px"
                                                    onclick="togglePasswordVisibility(this)">
                                                    <i class="fa fa-eye" style="color:#080816"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            @error('new_password')
                                                <span class="valid"
                                                    style="font-size: 12px;color:#c62424">{{ $message }}</span>
                                            @enderror
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
                                                    name='confirm_password' placeholder="Confirm new password" />
                                                <span class="passwEye togglePassword" style="margin-right: 409px"
                                                    onclick="togglePasswordVisibility(this)">
                                                    <i class="fa fa-eye" style="color:#080816"
                                                        aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            @error('confirm_password')
                                                <span class="valid"
                                                    style="font-size: 12px;color:#c62424">{{ $message }}</span>
                                            @enderror
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
                    </form>
                </div>
            </div>