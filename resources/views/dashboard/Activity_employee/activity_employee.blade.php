<x-header data="employee component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<style>
    .btn-primary {
        color: #fff;
        background-color: #00439f;
        border-color: #00439f;
    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Employee / Talent</h4>

                    <p>
                        <strong>Description:</strong> Monitor talent profile
                        details including jobs applied, Offers, and favourites.
                        Eyeball on details of the interview scheduled under
                        <br />the Interview Scheduled Calander, attributes of
                        all the job activities performed will be viewed under
                        the History tab..
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ url('Employee-activity') }}" class="active">My Resume</a></li>
                        <li><a href="{{ route('favorites') }}">Favourites</a></li>
                        <li><a href="{{ route('Applied.jobs') }}">Applied</a></li>
                        <li>
                            <a href="{{ route('Interview.schedule.calander') }}">Interview Scheduled Calendar</a>
                        </li>
                        <li><a href="{{ route('Applied.offers') }}">Offers</a></li>
                        <li><a href="{{ route('Applied.History') }}">History</a></li>
                    </ul>
                </div>

                <div class="custom_tabs_detail activityTabs actTabSetting">
                    <!-- tab1 data  -->
                    <form action="{{ route('Employee.Resume.submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    </form>
                    <div class="custom_tabs_data" style="display: block" id="tab1">
                        <div class="row">
                            <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                                <div class="myResumeSection">
                                    <div class="resumeDoc">
                                        <div class="resumeDoc_text">
                                            <strong>Resume.docx</strong>
                                            <p>Uploaded on Sep 19, 2023</p>
                                        </div>

                                        <div class="resumeDoc_action">
                                            <a href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="updateResume">
                                    <div class="file-drop-area">
                                        <span class="fake-btn">Update resume</span>
                                        <span class="file-msg">or drag and drop files here</span>
                                        <input class="file-input" type="file" multiple />

                                        <p>
                                            Supported Formats: doc, docx, rtf, pdf, upto 2
                                            MB
                                        </p>
                                    </div>
                                </div>

                                <p><label class="pb-2" style="margin-left:323px">OR Instahirin Resume</p>
                                <div class="resumeBoxes">
                                    <div class="resumHeadline">
                                        <label class="pb-2">Resume headline
                                            <b><i class="fa fa-pencil" aria-hidden="true"
                                                    id="resume_headline"></i></b></label>
                                        <input type="text" class="form-control" name="Resume_headline"
                                            style="border-radius:1.25rem;font-size: 0.8rem;" id="resume_headline"
                                            placeholder=" Ex:Full Stack Developer with expertise in JavaScript and React"
                                            disabled>
                                        <div class="modal fade" id="headlineModal" tabindex="-1" role="dialog"
                                            aria-labelledby="draftModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        {{-- <h5 class="modal-title" id="draftModalLabel">Save Draft</h5> --}}
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        {{-- CSS style: color: #ab1b1b --}}
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="">
                                                            @csrf
                                                            <label for="draftMessaName">Key Skills</label><br>
                                                            {{-- <input type="text" id="templatename" name="templatename"
                                                                placeholder="Enter your name" style="width: 414px;" required><br><br> --}}
                                                            <input type="text" class="form-control"
                                                                name="Resume_headline"
                                                                style="border-radius:1.25rem;font-size: 0.8rem;"
                                                                id="resume_head"
                                                                placeholder=" Ex:Full Stack Developer with expertise in JavaScript and React">
                                                            <br>

                                                            {{-- <label for="draftSender">From</label><br>
                                                            <input type="text" id="draftSender" name="sender"
                                                                placeholder="Enter sender name" style="width: 414px;" required><br><br>
                                                            <label for="draftMessageName">Subject</label><br>
                                                            <input type="text" id="draftmessagname" name="subject"
                                                                placeholder="Enter your name" style="width: 414px;"
                                                                >
                                                            <br> --}}
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="resumeBoxes">
                                    <div class="resumHeadline">
                                        <label class="pb-2">Key skills
                                            <b><i class="fa fa-pencil" aria-hidden="true"
                                                    id="openSaveDraftModal"></i></b></label>
                                        <div class="modal fade" id="draftModal" tabindex="-1" role="dialog"
                                            aria-labelledby="draftModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        {{-- <h5 class="modal-title" id="draftModalLabel">Save Draft</h5> --}}
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                        {{-- CSS style: color: #ab1b1b --}}
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="">
                                                            @csrf
                                                            <label for="draftMessaName">Key Skills</label><br>
                                                            {{-- <input type="text" id="templatename" name="templatename"
                                                                placeholder="Enter your name" style="width: 414px;" required><br><br> --}}
                                                            <select class="form-control" type="text"
                                                                id="templatename" name="key_skills"
                                                                style="width: 414px;border-radius:1.25rem;">
                                                                <option>Choose skills</option>
                                                                <option>Skill 1</option>
                                                                <option>Skill 2</option>
                                                            </select>
                                                            <br>

                                                            {{-- <label for="draftSender">From</label><br>
                                                            <input type="text" id="draftSender" name="sender"
                                                                placeholder="Enter sender name" style="width: 414px;" required><br><br>
                                                            <label for="draftMessageName">Subject</label><br>
                                                            <input type="text" id="draftmessagname" name="subject"
                                                                placeholder="Enter your name" style="width: 414px;"
                                                                >
                                                            <br> --}}
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skillList">
                                            <ul>
                                                <li><span>Skill</span></li>
                                                <li><span>Skill2</span></li>
                                                <li><span>Skill3</span></li>
                                                <li><span>Skill4</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="resumeBoxes">
                                    <div class="employeementSec">
                                        <div class="employeementSecTittle">
                                            <strong>Employment <i class="fa fa-pencil" aria-hidden="true"
                                                    id="openAdd_employement"></i></strong>
                                            <a href="#">Add Employment</a>
                                        </div>

                                        <div class="positionSection">
                                            <strong>Position</strong>
                                            <div class="modal fade" id="Add_employement" tabindex="-1"
                                                role="dialog" aria-labelledby="draftModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="">
                                                                @csrf
                                                                <label for="draftMessaName">Positions</label>
                                                                <input type="text" id="templatename"
                                                                    class="form-control" name="Position_title"
                                                                    placeholder="Enter your name"
                                                                    style="width: 414px;" required><br>
                                                                <label for="draftMessaName">Company Name</label>
                                                                <input type="text" id="templatename"
                                                                    name="company_name"
                                                                    placeholder="Enter your Comapny Name"
                                                                    class="form-control" style="width: 414px;"
                                                                    required><br>
                                                                <label for="draftMessaName">Work Mode</label>
                                                                <select class="form-control" type="text"
                                                                    id="templatename" name="work_mode"
                                                                    style="width: 414px;border-radius:1.25rem;">
                                                                    <option>Choose Work Mode</option>
                                                                    <option>Full Time</option>
                                                                    <option>Part Time</option>
                                                                    <option>Free Lancing</option>
                                                                    <option>Contractual</option>
                                                                </select>
                                                                <label for="draftMessaName">Time Period</label><br>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <!-- FROM Date -->
                                                                        <label for="fromDate">FROM</label>
                                                                        <input class="form-control" type="text"
                                                                            name="from_date" id="fromDate"
                                                                            autocomplete="off"
                                                                            placeholder="Enter Date"
                                                                            style="width:200px;" required>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <!-- TO Date -->
                                                                        <label for="toDate">TO</label>
                                                                        <input class="form-control" type="text"
                                                                            name="to_date" id="toDate"
                                                                            autocomplete="off"
                                                                            placeholder="Enter Date"
                                                                            style="width: 200px;" required>
                                                                    </div>
                                                                </div>
                                                                <label for="draftMessaName">Discription</label>
                                                                <textarea id="Discription" class="form-control" name="Discription" placeholder="Compose your message"
                                                                    style="width: 414px; height: 99px;" value=""></textarea><br>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Company Name</p>
                                            <p>
                                                Full-time I Jan 2022 to Present (1 Year 09
                                                months)
                                            </p>
                                            <p>15 Days or less Notice Period</p>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry. Lorem
                                                Ipsum has been the industry’s standard dummy
                                                text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled
                                                it to make a type specimen book. It has
                                                survived not only five centuries, but also
                                                the leap into electronic typesetting,
                                                remaining essentially unchanged. It was
                                                popularised in the 1960s with the release of
                                                Letraset sheets containing Lorem Ipsum
                                                passages, and more recently with desktop
                                                publishing software like Aldus PageMaker
                                                including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="resumeBoxes">
                                    <div class="employeementSec">
                                        <div class="positionSection">
                                            <strong>Education<b><i class="fa fa-pencil" aria-hidden="true"
                                                        id="education_edit"></i></b> </strong>
                                            <div class="modal fade" id="education_model" tabindex="-1"
                                                role="dialog" aria-labelledby="draftModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            {{-- <h5 class="modal-title" id="draftModalLabel">Save Draft</h5> --}}
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            {{-- CSS style: color: #ab1b1b --}}
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="">
                                                                @csrf
                                                               <br>
                                                                <form method="post" action="">
                                                                    @csrf
                                                                    <label for="draftMessaName">Qualification</label>
                                                                    <input type="text" id="templatename"
                                                                        class="form-control" name="highest_qualification"
                                                                        placeholder="Enter your Highest_qualification" required><br>
                                                                    <label for="draftMessaName">College/University</label>
                                                                    <input type="text" id="templatename"
                                                                        name="company_name"
                                                                        placeholder="Enter your College Name"
                                                                        class="form-control"
                                                                        required><br>
                                                                    <label for="draftMessaName">Mode of Education</label>
                                                                    <select class="form-control" type="text"
                                                                        id="templatename" name="work_mode"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option>Choose Work Mode</option>
                                                                        <option>Full Time</option>
                                                                        <option>Distance</option>
                                                                    </select>
                                                                    <label for="draftMessaName">Time Period</label><br>
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <!-- FROM Date -->
                                                                            <label for="fromDate">Start</label>
                                                                            <input class="form-control" type="text"
                                                                                name="from_date" id="fromDate"
                                                                                autocomplete="off"
                                                                                placeholder="Enter Date"
                                                                                style="width:200px;" required>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <!-- TO Date -->
                                                                            <label for="toDate">Finish</label>
                                                                            <input class="form-control" type="text"
                                                                                name="to_date" id="toDate"
                                                                                autocomplete="off"
                                                                                placeholder="Enter Date"
                                                                                style="width: 200px;" required>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <strong class="pt-1">B.Tech</strong>
                                            <p>S.V. College of Engineering, Hyderabad.</p>
                                            <p>2008 - 2012 I Full Time</p>
                                            <br />

                                            <strong>X Class</strong>
                                            <p>Golkonda High School, Hyderabad.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="resumeBoxes">
                                    <div class="employeementSec">
                                        <div class="positionSection">
                                            <strong class="pt-1">Personal Details
                                                <b><i class="fa fa-pencil" aria-hidden="true"
                                                        id="personal_info"></i></b></strong>
                                            <div class="modal fade" id="personal_info_model" tabindex="-1"
                                                role="dialog" aria-labelledby="draftModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            {{-- <h5 class="modal-title" id="draftModalLabel">Save Draft</h5> --}}
                                                            @if ($errors->any())
                                                                <div class="alert alert-danger">
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                            {{-- CSS style: color: #ab1b1b --}}
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="">
                                                                @csrf
                                                                <label for="draftMessaName">Full Name</label><br />
                                                                <input class="form-control"
                                                                  type="text"
                                                                  id="templatename"
                                                                  name="full_name"
                                                                  placeholder="Enter your name"
                                                                  style="width: 414px"
                                                                  required
                                                                ><br />
                                                              
                                                                <label for="draftMessaName">Email Address</label><br />
                                                                <input class="form-control"
                                                                  type="text"
                                                                  id="templatename"
                                                                  name="email"
                                                                  placeholder="Enter your name"
                                                                  style="width: 414px"
                                                                  required
                                                                ><br/>
                                                                <label for="draftMessaName">Total Work Experience</label>
                                                                <select
                                                                  class="form-control"
                                                                  type="text"
                                                                  id="templatename"
                                                                  name="Total_work_experience"
                                                                  style="width: 414px; border-radius: 1.25rem"
                                                                >
                                                                  <option>Choose skills</option>
                                                                  <option>1+ years</option>
                                                                  <option>2+ years</option>
                                                                  <option>3+ years</option>
                                                                  <option>4+ years</option>
                                                                  <option>5+ years</option>
                                                                  <option>6+ years</option>
                                                                  <option>7+ years</option>
                                                                  <option>8+ years</option>
                                                                  <option>9+ years</option>
                                                                  <option>10+ years</option></select
                                                                ><br />
                                                              
                                                                <!-- <label for="draftMessaName">Full Name</label><br> -->
                                                                <div class="row">
                                                                  <div class="col-md-5">
                                                                    <!-- FROM Date -->
                                                                    <label for="fromDate">Country code</label>
                                                                    <select
                                                                      name="country_code"
                                                                      class="form-control"
                                                                      required
                                                                      style="width: 100%"
                                                                    >
                                                                      <option value="">Select a country code</option>
                                                                    </select>
                                                                  </div>
                                                                  <div class="col-md-5">
                                                                    <!-- TO Date -->
                                                                    <label for="Mobile_number">Mobile number</label>
                                                                    <input
                                                                      class="form-control"
                                                                      type="text"
                                                                      name="Mobile_number"
                                                                      id="Mobile_number"
                                                                      autocomplete="off"
                                                                      placeholder="Enter Mobile Number"
                                                                      style="width: 200px"
                                                                      required
                                                                    >
                                                                  </div>
                                                                </div>
                                                                <br/>
                                                                <label for="Availability">Availability</label>
                                                                <select
                                                                  class="form-control"
                                                                  type="text"
                                                                  id="Availability"
                                                                  name="Availability"
                                                                  style="border-radius: 1.25rem"
                                                                >
                                                                  <option>Choose skills</option>
                                                                  <option>Full Time</option>
                                                                  <option>Part Time</option>
                                                                  <option>Daily</option>
                                                                  <option>Weekly</option>
                                                                  <option>Monthly</option>
                                                                  <option>Hours</option>
                                                                  <option>Project base</option>
                                                                </select>
                                                                <br/>
                                                                <strong>Temporary Location</strong>
                                                                <div class="auth_field_info">
                                                                    <input type="text" placeholder="Add Location"
                                                                        id="location" value="{{ old('location') }}" onclick="loadMapScript()"
                                                                        name="location">
                                                                </div>
                                                                <br>
                                                                <label for="Home_town">Permanent Location</label>
                                                                    <input
                                                                      class="form-control"
                                                                      type="text"
                                                                      name="Home_town"
                                                                      id="Home_town"
                                                                      autocomplete="off"
                                                                      placeholder="Enter Perminenet location"
                                                                      style="width: 200px"
                                                                      required
                                                                    >
                                                               <br>
                                                                <label for="Home_town">Work Permit</label>
                                                                <select
                                                                class="form-control"
                                                                type="text"
                                                                id="work_permit"
                                                                name="work_permit"
                                                                style="border-radius: 1.25rem"
                                                              >
                                                                <option>Choose skills</option>
                                                                <option>H1B</option>
                                                                <option>H1</option>
                                                                <option>Daily</option>
                                                                <option>Weekly</option>
                                                                <option>Monthly</option>
                                                                <option>Hours</option>
                                                                <option>Project ba
                                                                <br>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                              </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="personalDetail">
                                                <div class="row">
                                                    <div class="col-xxl-6 col-xxl-6 col-xxl-6 col-xxl-6">
                                                        <div class="personalDetail_info">
                                                            <ul>
                                                                <li>
                                                                    <strong>Full Name</strong>
                                                                    <p>K.Ravi Kumar</p>
                                                                </li>
                                                                <li>
                                                                    <strong>Date of birth</strong>
                                                                    <p>01 Jan 1999</p>
                                                                </li>
                                                                <li>
                                                                    <strong>E-mail</strong>
                                                                    <p>ravikumark@gmail.com</p>
                                                                </li>
                                                                <li>
                                                                    <strong>Mobile Number</strong>
                                                                    <p>+91 8761230987</p>
                                                                </li>
                                                                <li>
                                                                    <strong>Experience</strong>
                                                                    <p>8+ Years</p>
                                                                </li>
                                                                <li>
                                                                    <strong>Availability</strong>
                                                                    <p>
                                                                        Full time, Part time, Contract,
                                                                        Freelance
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-xxl-6 col-xxl-6 col-xxl-6 col-xxl-6">
                                                        <div class="personalDetail_info">
                                                            <ul>
                                                                <li>
                                                                    <strong>Location</strong>
                                                                    <p>Hyderabad, Telangana, India</p>
                                                                </li>
                                                                <li>
                                                                    <strong>Home town</strong>
                                                                    <p>Warangal, Telangana, India</p>
                                                                </li>
                                                                <li>
                                                                    <strong>Career break</strong>
                                                                    <p>No</p>
                                                                </li>
                                                                <li>
                                                                    <strong>Work permit</strong>
                                                                    <p>Need US H1 Visa, India</p>
                                                                </li>
                                                            </ul>
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
    </div>
</div>
<script>
    //keyskill-model
    $(document).ready(function() {
        $("#openSaveDraftModal").click(function() {
            $("#draftModal").modal("show");
        });
    });
    //Add employement
    $(document).ready(function() {
        $("#openAdd_employement").click(function() {
            $("#Add_employement").modal("show");
        });
    });
    //education model
    $(document).ready(function() {
        $("#education_edit").click(function() {
            $("#education_model").modal("show");
        });
    });
    //persional_info
    $(document).ready(function() {
        $("#personal_info").click(function() {
            $("#personal_info_model").modal("show");
        });
    });
    //headline
    $(document).ready(function() {
        $("#resume_headline").click(function() {
            $("#headlineModal").modal("show");
        });
    });
</script>
{{-- <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initAutocomplete" async></script> --}}
<script>
    function loadMapScript() {
      var script = document.createElement('script');
      script.defer.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initMap';
      script.async = true;
      document.head.appendChild(script);
    }
    function initMap() {
        var locationInput = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(locationInput);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place);
        });
    }
</script>
{{-- <script>
    $(document).ready(function () {
        $('#datepicker-1').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
        $('#datepicker-2').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script> --}}


