<x-header data="user-profile component" />
<style>
    .auth_select_info select {
        width: 100%;
        border: none;
        outline: none;
        box-shadow: none;
        background: transparent;
    }

    .auth_select_info option {
        width: 100%;
    }
</style>
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
                                    <form action="{{ route('edit.nation', $user->id) }}" method='Post'
                                        id="nation_info">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Nationality</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    {{-- <input type="text" value="{{$user->nationality}}"
                                                        name="nationality" /> --}}
                                                    <div class="auth_select_info" style="width: 52%; margin-top:-6px">
                                                        <select name="nationality" required style="width: 100%;">
                                                            <option value="">Select a country code
                                                            </option>
                                                            @foreach ($countryCodes as $country)
                                                                <option value="{{ $country->name }}"
                                                                    @if ($user->nationality == $country->name) selected @endif>
                                                                       {{ $country->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="p_userInfo_editInput" id="editButton"
                                                        onclick="toggleSaveButton2()">
                                                        <strong>
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Edit
                                                        </strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p_userInfo_editInput" id="saveButton" style="display: none;">
                                            <button type="submit" id="submitBtn_plan2" class="btn btn-primary"
                                                onclick="submitForm('nation_info')"
                                                style="margin-left: 800px;margin-top: -62px">Save</button>
                                        </div>
                                    </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- // --}}
                    <!-- form content -->
                    <div class="p_userInfo_section">
                        <div class="p_userInfo_head">
                            <div class="row" style="background-color: #f5f5f5">
                                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                    <div class="p_userInfo_tittle">
                                        <h5>
                                            <strong><i class="fa fa-id-card-o" aria-hidden="true"></i></strong>
                                            Contact Info
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                    <div class="p_userInfo_editInput" id="editButtonContainer"
                                        onclick="toggleSaveButton()">
                                        <strong>
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('edit.contact', $user->id) }}" method="post" id="contat_info">
                            @csrf
                            @method('PATCH')

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
                                                    <input type="text" name="email" class="w-100" placeholder="Enter Your Email"
                                                        value="{{ $user->email }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Country Code</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="auth_select_info" style="width: 42%; margin-top:5px">
                                                    <select name="country_code" required style="width: 100%;">
                                                        <option value="" >Select a country code</option>
                                                        @foreach ($countryCodes as $country)
                                                            <option value="+{{ $country->phone }}"
                                                                @if ($user->country_code == $country->phone) selected @endif>
                                                                {{ $country->name . '+' . $country->phone }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5">
                                                <div class="p_userInfo_information">
                                                    <label>Mobile Number</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7">
                                                <div class="p_userInfo_editInput">
                                                    <input type="text" class="w-100" name="mobilenumber"
                                                        pattern="[0-9]+" title="Numericals  only allowed" placeholder="Enter Your Mobile Number"
                                                        maxlength="10" value="{{ $user->mobilenumber }}" />

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
                                                <div class="auth_select_info" style="width: 42%; margin-top:5px">
                                                    <select name="country" required style="width: 100%;">
                                                        <option value="" >Select a country code
                                                        </option>
                                                        @foreach ($countryCodes as $country)
                                                            <option value="{{ $country->name }}"
                                                                @if ($user->country == $country->name) selected @endif>
                                                                   {{ $country->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="p_userInfo_editInput" id="saveButtonContainer" style="display: none;">
                                <button type="submit" id="submitBtn_plan1" class="btn btn-primary"
                                    onclick="submitForm('contat_info')" style="margin-left: 800px">Save</button>
                            </div>
                        </form>
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
                {{-- verification is pending --}}
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
                                            <input type="text" value="" placeholder="+91 9XXXXXXX40" />
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
                {{-- verification is pending --}}
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
                                                <i class="fa fa-eye" style="color:#080816" aria-hidden="true"></i>
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
                                            <input type="password" value="" class="w-100" name='new_password'
                                                placeholder="New Password" />
                                            <span class="passwEye togglePassword" style="margin-right: 409px"
                                                onclick="togglePasswordVisibility(this)">
                                                <i class="fa fa-eye" style="color:#080816" aria-hidden="true"></i>
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
                                                <i class="fa fa-eye" style="color:#080816" aria-hidden="true"></i>
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
        <script>
            function submitForm(planId) {
                var form = document.getElementById('form_Id');
                form.submit();
                location.reload(true);
            }
            //
            function toggleSaveButton() {
                var editButtonContainer = document.getElementById('editButtonContainer');
                var saveButtonContainer = document.getElementById('saveButtonContainer');

                // Toggle the visibility of the "Edit" and "Save" buttons
                if (editButtonContainer.style.display !== 'none') {
                    editButtonContainer.style.display = 'none';
                    saveButtonContainer.style.display = 'block';
                } else {
                    editButtonContainer.style.display = 'block';
                    saveButtonContainer.style.display = 'none';
                }
            }
            //
            function toggleSaveButton2() {
                var editButtonContainer = document.getElementById('editButton');
                var saveButtonContainer = document.getElementById('saveButton');

                // Toggle the visibility of the "Edit" and "Save" buttons
                if (editButtonContainer.style.display !== 'none') {
                    editButtonContainer.style.display = 'none';
                    saveButtonContainer.style.display = 'block';
                } else {
                    editButtonContainer.style.display = 'block';
                    saveButtonContainer.style.display = 'none';
                }
            }
        </script>
