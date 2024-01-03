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
                                <strong>Trade license number *</strong>
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
                 <!-- kyc upload file section  -->
                 <div class="kycForm_section kwcFileSection">
                    <!-- row 1 -->
                    <div class="row">
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <strong
                            >Upload your id documents verifying your
                            personal details*</strong
                          >
                          <p>
                            Jpg, png, pdf and gif formats are accepted
                            with a file size not exceeding 25 MB.
                          </p>
                        </div>
                      </div>
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename"
                                >Scanned passport / id copy *</span
                              >
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row">
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <p>
                            Upload both sides (front and back) in case
                            of dual-sided identity documents
                          </p>
                        </div>
                      </div>
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename"
                                >Scanned ID copy *</span
                              >
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
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
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <strong
                            >Upload a document that verifies your
                            address</strong
                          >
                          <p>
                            Jpg, png, pdf and gif formats are accepted
                            with a file size not exceeding More than
                            25 MB.
                          </p>
                        </div>
                      </div>
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename"
                                >Scanned Address Proof Copy</span
                              >
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
                            </label>
                            <p>(Electricity or any Utility Bill)</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row">
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <strong
                            >Upload your company trade license</strong
                          >
                          <p>
                            Jpg, png, pdf and gif formats are accepted
                            with a file size not exceeding 25 MB.
                          </p>
                        </div>
                      </div>
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename"
                                >Click to upload</span
                              >
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row justify-content-end">
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename">Other</span>
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
                            </label>
                            <p>
                              (Company MOU, MOA and other documents)
                            </p>
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
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <strong
                            >Are you a us citizen or
                            resident?*</strong
                          >
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
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename"
                                >Upload YOUR FATCA form</span
                              >
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- row 1 -->
                    <div class="row">
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename"
                                >Upload YOUR W-8BEN form</span
                              >
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
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
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <strong
                            >Do you remit money from sanctioned
                            countries?*</strong
                          >
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
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <strong
                            >Do you have subsidiary office or presence
                            in sanctioned Country?*</strong
                          >
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
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <strong
                            >Do you import/export or provide any
                            services to sanctioned Entities or
                            Countries?*</strong
                          >
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
                      <div
                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-12"
                      >
                        <div class="kycForm_field">
                          <div class="kycForm_file">
                            <label class="uploadFile">
                              <span class="filename"
                                >Upload YOUR customer compliance
                                form</span
                              >
                              <input
                                type="file"
                                class="inputfile form-control"
                                name="file"
                              />
                              <i
                                class="fa fa-upload"
                                aria-hidden="true"
                              ></i>
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
                              <span
                                class="checkbox-custom rectangular"
                              ></span>
                            </label>
                            I agree, <a href="#">read more</a>
                          </p>
                        </div>
                      </div>

                      <div class="customSubmitBtn kycSubmit">
                        <input
                          type="submit"
                          value="Submit"
                          class="btndefault"
                        />
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
