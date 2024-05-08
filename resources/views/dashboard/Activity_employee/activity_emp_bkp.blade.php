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
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 5000);
                        </script>
                    </div>
                @endif
                <div class="custom_tabs_detail activityTabs actTabSetting">
                    <!-- tab1 data  -->
                    <div class="custom_tabs_data" style="display: block" id="tab1">
                        <div class="row">
                            @if (!isset($InstaHirin_Onboard))
                                <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                                    {{-- <div class="myResumeSection">
                                    <div class="resumeDoc">
                                        <div class="resumeDoc_text">
                                            <strong>Resume.docx</strong>
                                            <p>Ex:Uploaded on Sep 19, 2023</p>
                                        </div>

                                        <div class="resumeDoc_action">
                                            <a href="javascript:void(0);" class="previewBtn"><i class="fa fa-download" aria-hidden="true" style="font-size:26px;margin-left: -55px;"></i></a>
                                            <a href="#" style="display: inline-block; margin-left: 5px;" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                                    <form id="resumeForm" action="{{ route('Employee.Resume.submit') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="updateResume">
                                            <div class="file-drop-area">
                                                <span class="fake-btn">Update resume</span>
                                                <span class="file-msg">or drag and drop files here</span>
                                                <input type="file" class="file-input" id="fileInput" name="document"
                                                    multiple>
                                                <p>
                                                    Supported Formats: doc, docx, rtf, pdf, upto 2
                                                    MB
                                                </p>
                                            </div>
                                        </div>
                                        {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                                    </form>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    <script></script>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <p><label class="pb-2" style="margin-left:323px">OR Instahirin Resume</p>
                                    <div class="resumeBoxes">
                                        <div class="resumHeadline">
                                            <label class="pb-2">Resume Headline
                                                <b><i class="fa fa-pencil" aria-hidden="true"
                                                        id="resume_headline"></i></b></label>

                                            <input type="text" class="form-control" name="Resume_headline"
                                                style="border-radius:1.25rem;font-size: 0.8rem;" id="resume_headline"
                                                placeholder=" Ex:Full Stack Developer with expertise in JavaScript and React"
                                                value="" disabled>
                                            {{-- @endforeach --}}
                                            {{-- <input type="text" class="form-control" name="Resume_headline"
                                            style="border-radius:1.25rem;font-size: 0.8rem;" id="resume_headline"
                                            placeholder=" Ex:Full Stack Developer with expertise in JavaScript and React" value=""
                                            disabled> --}}
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
                                                            <form method="post" id="resume_headline"
                                                                action="{{ route('Employee.Resume.headline') }}">
                                                                @csrf
                                                                <label for="draftMessaName">Resume Headline</label><br>
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
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
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
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" id="skills"
                                                                action="{{ route('Employee.keyskills.submit') }}">
                                                                @csrf
                                                                <label for="draftMessaName">Key Skills</label><br>
                                                                <select class="form-control" type="text"
                                                                    id="key_skills" name="key_skills"
                                                                    style="width: 414px;border-radius:1.25rem;">
                                                                    <option>Choose skills</option>
                                                                    <option>Skill 1</option>
                                                                    <option>Skill 2</option>
                                                                </select>
                                                                <br>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="employeementSecTittle"
                                        style="justify-content: end; color:#00439f;margin-left: 655px;width: 15%;"onclick="isPressed()"><a>Add
                                            Employment</a></button>
                                    <div class="resumeBoxes">
                                        <div class="employeementSec">
                                            <div class="employeementSecTittle">
                                                <strong>Employment <i class="fa fa-pencil" aria-hidden="true"
                                                        id="openAdd_employement"></i></strong>
                                                {{-- <a href="#">Add Employment</a> --}}
                                            </div>

                                            <div class="positionSection">
                                                <strong>-</strong>
                                                <div class="modal fade" id="Add_employement" tabindex="-1"
                                                    role="dialog" aria-labelledby="draftModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                {{-- <strong>Employment</strong> --}}
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
                                                                <form method="post" id="employment"
                                                                    action="{{ route('Employee.Resume.employement') }}">
                                                                    @csrf
                                                                    <label for="draftMessaName">Positions</label>
                                                                    <input type="text" id="Position_title"
                                                                        class="form-control" name="Position_title"
                                                                        placeholder="Enter your name" value=""
                                                                        style="width: 414px;" required><br>
                                                                    <label for="draftMessaName">Company Name</label>
                                                                    <input type="text" id="company_name"
                                                                        name="company_name"
                                                                        placeholder="Enter your Comapny Name"
                                                                        value=" " class="form-control"
                                                                        style="width: 414px;" required><br>
                                                                    <label for="draftMessaName">Work Mode</label>
                                                                    <select class="form-control" type="text"
                                                                        id="work_mode" name="work_mode"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>Choose Work Mode</option>
                                                                        <option value="Full Time">Full Time</option>
                                                                        <option value="Part Time">Part Time</option>
                                                                        <option value="Free Lancing">Free Lancing
                                                                        </option>
                                                                        <option value="Contractual">Contractual
                                                                        </option>
                                                                    </select>
                                                                    <br>
                                                                    {{-- <label for="draftMessaName">Time Period</label> --}}
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
                                                                        style="width: 414px; height: 99px;"></textarea><br>
                                                                    <label for="toDate">Notice Period</label>
                                                                    <select class="form-control" type="text"
                                                                        id="Notice_Period" name="Notice_Period"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>Choose Notice Period</option>
                                                                        <option value="15 Days or less">15 Days or less
                                                                        </option>
                                                                        <option value="1 Month">1 Month</option>
                                                                        <option value="2 Month">2 Month</option>
                                                                        <option value="3 Month">3 Month</option>
                                                                        <option value="More than 3 Month">More than 3
                                                                            Month</option>
                                                                    </select>
                                                                    <br>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <p>{{$instahirin->last_company}}</p>
                                            <p>{{$instahirin->availability}}| {{$instahirin->working_since_date}} to {{$instahirin->working_since_date2}}</p>
                                            <p>{{$instahirin->notice_period}}</p>
                                            <p>{{$instahirin->skills_description}}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resumeBoxes">
                                        <div class="employeementSec">
                                            <div class="positionSection">
                                                <strong>Education</strong>
                                                <div class="modal fade" id="education_model" tabindex="-1"
                                                    role="dialog" aria-labelledby="draftModalLabel"
                                                    aria-hidden="true">
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
                                                                <br>
                                                                <form method="post" id= "graduation"
                                                                    action="{{ route('Employee.Resume.graduation') }}">
                                                                    @csrf
                                                                    <label for="draftMessaName">Qualification</label>
                                                                    <select class="form-control" type="text"
                                                                        id="highest_qualification"
                                                                        name="highest_qualification"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>choose qualification</option>
                                                                        <option value="Any">Any</option>
                                                                        <option value="Doctorate">Doctorate</option>
                                                                        <option value="Post Graduation">Post Graduation
                                                                        </option>
                                                                        <option value="Graduation">Graduation</option>
                                                                        <option value="XII">XII Class</option>
                                                                        <option value="X">X Class</option>
                                                                    </select><br>
                                                                    <label
                                                                        for="draftMessaName">College/University</label>
                                                                    <input type="text" id="company_name"
                                                                        name="company_name"
                                                                        placeholder="Enter your College Name"
                                                                        class="form-control" required><br>
                                                                    <label for="draftMessaName">Mode of
                                                                        Education</label>
                                                                    <select class="form-control" type="text"
                                                                        id="work_mode" name="work_mode"
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
                                                <strong class="pt-1">B.Tech<b><i class="fa fa-pencil"
                                                            aria-hidden="true" id="education_edit"></i></b></strong>
                                                <p>Ex: S.V. College of Engineering, Hyderabad.</p>
                                                <p>Ex: 2008 - 2012 I Full Time</p>
                                                <br />
                                                <strong>X Class<b><i class="fa fa-pencil" aria-hidden="true"
                                                            id="secondary_education_edit"></i></b></strong>
                                                <p>Ex:Golkonda High School, Hyderabad.</p>
                                                <p>Ex:2004|Full Time</p>
                                                <div class="modal fade" id="secondory_education_model" tabindex="-1"
                                                    role="dialog" aria-labelledby="draftModalLabel"
                                                    aria-hidden="true">
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
                                                                <br>
                                                                <form method="post" id="secondary"
                                                                    action="{{ route('Employee.Resume.secondary') }}">
                                                                    @csrf
                                                                    <label for="draftMessaName">Qualification</label>
                                                                    <select class="form-control" type="text"
                                                                        id="highest_qualification"
                                                                        name="highest_qualification"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>choose qualification</option>
                                                                        <option value="Any">Any</option>
                                                                        <option value="Doctorate">Doctorate</option>
                                                                        <option value="Post Graduation">Post Graduation
                                                                        </option>
                                                                        <option value="Graduation">Graduation</option>
                                                                        <option value="XII">XII Class</option>
                                                                        <option value="X">X Class</option>
                                                                    </select><br>
                                                                    <label
                                                                        for="draftMessaName">College/University</label>
                                                                    <input type="text" id="company_name"
                                                                        name="company_name"
                                                                        placeholder="Enter your College Name"
                                                                        class="form-control" required><br>
                                                                    <label for="draftMessaName">Mode of
                                                                        Education</label>
                                                                    <select class="form-control" type="text"
                                                                        id="work_mode" name="work_mode"
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
                                                    role="dialog" aria-labelledby="draftModalLabel"
                                                    aria-hidden="true">
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
                                                                <form method="post" id="personal_info"
                                                                    action="{{ route('Employee.Resume.personal_info') }}">
                                                                    @csrf
                                                                    <label for="draftMessaName">Full Name</label><br />
                                                                    <input class="form-control" type="text"
                                                                        id="full_name" name="full_name"
                                                                        placeholder="Enter your name"
                                                                        style="width: 414px" required><br />
                                                                    <label for="draftMessaName">Email
                                                                        Address</label><br />
                                                                    <input class="form-control" type="text"
                                                                        id="email" name="email"
                                                                        placeholder="Enter your name"
                                                                        style="width: 414px" required><br />
                                                                    <label for="draftMessaName">Total Work
                                                                        Experience</label>
                                                                    <select class="form-control" type="text"
                                                                        id="Total_work_experience"
                                                                        name="Total_work_experience"
                                                                        style="width: 414px; border-radius: 1.25rem">
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
                                                                        <option>10+ years</option>
                                                                    </select><br />

                                                                    <!-- <label for="draftMessaName">Full Name</label><br> -->
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <!-- FROM Date -->
                                                                            <label for="fromDate">Country code</label>
                                                                            <select name="country_code"
                                                                                class="form-control" required
                                                                                style="width: 100%">
                                                                                <option value="">Select a country
                                                                                    code</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <!-- TO Date -->
                                                                            <label for="Mobile_number">Mobile
                                                                                number</label>
                                                                            <input class="form-control" type="text"
                                                                                name="Mobile_number"
                                                                                id="Mobile_number" autocomplete="off"
                                                                                placeholder="Enter Mobile Number"
                                                                                style="width: 200px" required>
                                                                        </div>
                                                                    </div>
                                                                    <br />
                                                                    <label for="Availability">Availability</label>
                                                                    <select class="form-control" type="text"
                                                                        id="Availability" name="Availability"
                                                                        style="border-radius: 1.25rem">
                                                                        <option>Choose skills</option>
                                                                        <option>Full Time</option>
                                                                        <option>Part Time</option>
                                                                        <option>Daily</option>
                                                                        <option>Weekly</option>
                                                                        <option>Monthly</option>
                                                                        <option>Hours</option>
                                                                        <option>Project base</option>
                                                                    </select>
                                                                    <br />
                                                                    <strong>Temporary Location</strong>
                                                                    <div class="auth_field_info">
                                                                        <input type="text"
                                                                            placeholder="Add Location" id="location"
                                                                            value="{{ old('location') }}"
                                                                            onclick="loadMapScript()" name="location">
                                                                    </div>
                                                                    <br>
                                                                    <label for="Home_town">Permanent Location</label>
                                                                    <input class="form-control" type="text"
                                                                        name="Home_town" id="Home_town"
                                                                        autocomplete="off"
                                                                        placeholder="Enter Perminenet location"
                                                                        style="width: 200px" required>
                                                                    <br>
                                                                    <label for="Home_town">Work Permit</label>
                                                                    <select class="form-control" type="text"
                                                                        id="work_permit" name="work_permit"
                                                                        style="border-radius: 1.25rem">
                                                                        <option>Choose skills</option>
                                                                        <option>H1B</option>
                                                                        <option>H1</option>
                                                                        <option>Daily</option>
                                                                        <option>Weekly</option>
                                                                        <option>Monthly</option>
                                                                        <option>Hours</option>
                                                                        <option>Project base</option>
                                                                    </select>
                                                                    <br>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="personalDetail">
                                                    @foreach ($userdata as $user)
                                                        <div class="row">
                                                            <div class="col-xxl-6 col-xxl-6 col-xxl-6 col-xxl-6">
                                                                <div class="personalDetail_info">

                                                                    <ul>
                                                                        <li>
                                                                            <strong>Full Name</strong>
                                                                            <p>{{ $user->name }}</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>Date of birth</strong>
                                                                            <p></p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>E-mail</strong>
                                                                            <p>{{ $user->email }}</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>Mobile Number</strong>
                                                                            <p>{{ $user->mobilenumber }}</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>Experience</strong>
                                                                            <p>-</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>Availability</strong>
                                                                            <p>-</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="col-xxl-6 col-xxl-6 col-xxl-6 col-xxl-6">
                                                                <div class="personalDetail_info">
                                                                    <ul>
                                                                        <li>
                                                                            <strong>Location</strong>
                                                                            <p>-</p>
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
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                @foreach ($InstaHirin_Onboard as $instahirin)
                                    <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                                        <div class="myResumeSection">
                                            <div class="resumeDoc">
                                                @if ($instahirin->document && Storage::disk('public')->exists($instahirin->document))
                                                    <div class="resumeDoc_text">
                                                        {{-- <strong>Resume.docx</strong> --}}
                                                        <strong>{{ basename($instahirin->document) }}
                                                        </strong>
                                                        <p>Uploaded on {{ $instahirin->Resume_update_date }}</p>
                                                    </div>

                                                    <div class="resumeDoc_action">
                                                        <a href="javascript:void(0);" class=""
                                                            onclick="showPDFPreview('{{ asset('storage/' . $instahirin->document) }}')">
                                                            <i class="fa fa-download" aria-hidden="true"
                                                                style="font-size:26px; margin-left: -55px;"></i>
                                                        </a>
                                                        <a href="{{ route('Employee.Resume.delete', ['id' => $instahirin->id]) }}"
                                                            style="display: inline-block; margin-left: 5px;"
                                                            onclick="return confirm('Are you sure you want to delete this resume?');">
                                                            <i class="fa fa-trash" aria-hidden="true"
                                                                style="font-size:26px"></i>
                                                        </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <form id="resumeForm" action="{{ route('Employee.Resume.submit') }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="updateResume">
                                            <div class="file-drop-area">
                                                <span class="fake-btn">Update resume</span>
                                                <span class="file-msg">or drag and drop files here</span>
                                                <input type="file" class="file-input" id="fileInput"
                                                    name="document" multiple>
                                                <p>
                                                    Supported Formats: doc, docx, rtf, pdf, upto 2
                                                    MB
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    <script>
                                                        setTimeout(function() {
                                                            document.querySelector('.alert.alert-danger').style.display = 'none';
                                                        }, 5000);
                                                    </script>
                                                @endforeach
                                            </ul>
                                            {{-- @foreach ($job->skills as $skill)
                                                <li>{{ $skill->title }}</li>
                                                 @endforeach --}}
                                        </div>
                                    @endif
                                    <p><label class="pb-2" style="margin-left:323px">OR Instahirin Resume</p>
                                    <div class="resumeBoxes">
                                        <div class="resumHeadline">
                                            <label class="pb-2">Resume Headline
                                                <b><i class="fa fa-pencil" aria-hidden="true" data-toggle="modal"
                                                        data-target="#headlineModal"></i></b>
                                            </label>

                                            <input type="text" class="form-control" name="Resume_headline"
                                                style="border-radius:1.25rem;font-size: 0.8rem;" id="resume_headline"
                                                placeholder="Ex: Full Stack Developer with expertise in JavaScript and React"
                                                value="{{ $instahirin->resume_headline }}" disabled>

                                            <div class="modal fade" id="headlineModal" tabindex="-1" role="dialog"
                                                aria-labelledby="draftModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" id="headline"
                                                                action="{{ route('Employee.Resume.headline') }}">
                                                                @csrf
                                                                <label for="draftMessaName">Resume Headline<span
                                                                        class="required"
                                                                        style="color: red;margin-left: 3px;">*</span></label><br>
                                                                <input type="text" class="form-control"
                                                                    name="Resume_headline"
                                                                    style="border-radius:1.25rem;font-size: 0.8rem;"
                                                                    id="resume_head"
                                                                    placeholder="Ex: Full Stack Developer with expertise in JavaScript and React"
                                                                    value="{{ $instahirin->resume_headline }}">
                                                                @error('Resume_headline')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                                <br>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
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
                                                            <form method="post" id="keyskills"
                                                                action="{{ route('Employee.keyskills.submit') }}">
                                                                @csrf
                                                                <label for="draftMessaName">Key Skills<span
                                                                        class="required"
                                                                        style="color: red;margin-left: 3px;">*</span></label><br>
                                                                <select class="form-control" type="text"
                                                                    id="key_skills" name="key_skills"
                                                                    style="width: 414px;border-radius:1.25rem;">
                                                                    <option>Choose skills</option>
                                                                    <option>React Js</option>
                                                                    <option>React Js</option>
                                                                </select>
                                                                <br>
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
                                                    {{-- <li><span>{{ $instahirin->key_skills[0]['name'] }}
                                                        </span></li> --}}
                                                    {{-- <li><span>{{ $instahirin->key_skills}}</span></li> --}}
                                                </ul>
                                                {{-- @foreach ($job->skills as $skill)
                                                    <li>{{ $skill->title }}</li>
                                                     @endforeach --}}
                                            </div>
                                        </div>
                                    </div>
                                    <hire-me-application></hire-me-application>
                                    <button class="employeementSecTittle"
                                        style="justify-content: end; color:#00439f;margin-left: 655px;width: 15%;"onclick="isPressed()"><a>Add
                                            Employment</a></button>
                                    <br>
                                    <div class="resumeBoxes">
                                        <div class="employeementSec">
                                            <div class="employeementSecTittle">
                                                <strong>Employment <i class="fa fa-pencil" aria-hidden="true"
                                                        id="openAdd_employement"></i></strong>
                                                {{-- <a href="#">Add Employment</a> --}}
                                            </div>

                                            <div class="positionSection">
                                                <strong>{{ $instahirin->current_title }}</strong>
                                                <div class="modal fade" id="Add_employement" tabindex="-1"
                                                    role="dialog" aria-labelledby="draftModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" id="employmentform"
                                                                    action="{{ route('Employee.Resume.employement') }}">
                                                                    @csrf
                                                                    <label for="draftMessaName">Positions<span
                                                                            class="required"
                                                                            style="color: red;margin-left: 3px;">*</span></label>
                                                                    <input type="text" id="Position_title"
                                                                        class="form-control" name="Position_title"
                                                                        placeholder="Enter your name"
                                                                        value="{{ $instahirin->current_title }}"
                                                                        style="width: 414px;" required>
                                                                    @error('Position_title')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <br>
                                                                    <label for="draftMessaName">Company Name<span
                                                                            class="required"
                                                                            style="color: red;margin-left: 3px;">*</span></label>
                                                                    <input type="text" id="company_name"
                                                                        name="company_name"
                                                                        placeholder="Enter your Comapny Name"
                                                                        value="{{ $instahirin->last_company }}"
                                                                        class="form-control" style="width: 414px;"
                                                                        required>
                                                                    @error('company_name')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <br>
                                                                    <label for="draftMessaName">Work Mode<span
                                                                            class="required"
                                                                            style="color: red;margin-left: 3px;">*</span></label>
                                                                    <select class="form-control" type="text"
                                                                        id="work_mode" name="work_mode"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>Choose Work Mode</option>
                                                                        <option value="Full Time"
                                                                            @if ($instahirin->availability == 'Full Time') selected @endif>
                                                                            Full Time</option>
                                                                        <option value="Part Time"
                                                                            @if ($instahirin->availability == 'Part Time') selected @endif>
                                                                            Part Time</option>
                                                                        <option value="Free Lancing"
                                                                            @if ($instahirin->availability == 'Free Lancing') selected @endif>
                                                                            Free Lancing</option>
                                                                        <option value="Contractual"
                                                                            @if ($instahirin->availability == 'Contractual') selected @endif>
                                                                            Contractual</option>
                                                                    </select>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <!-- FROM Date -->
                                                                            <label for="fromDate">FROM</label>
                                                                            <input class="form-control" type="date"
                                                                                name="from_date" id="fromDate"
                                                                                autocomplete="off"
                                                                                placeholder="Enter Date"
                                                                                style="width:200px;" required>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <!-- TO Date -->
                                                                            <label for="toDate">TO</label>
                                                                            <input class="form-control" type="date"
                                                                                name="to_date" id="toDate"
                                                                                autocomplete="off"
                                                                                placeholder="Enter Date"
                                                                                style="width: 200px;" required>
                                                                        </div>
                                                                    </div>
                                                                    <label for="draftMessaName">Discription</label>
                                                                    <textarea id="Discription" class="form-control" name="discription" placeholder="Compose your message"
                                                                        style="width: 414px; height: 99px;" oninput="updateWordCount()" maxlength='170'>{{ $instahirin->skills_description }}</textarea>
                                                                    <br>
                                                                    <span id="wordCount"></span>
                                                                    <br>
                                                                    <span id="wordCountWarning"
                                                                        style="color:red"></span>
                                                                    <br>
                                                                    <label for="toDate">Notice Period<span
                                                                            class="required"
                                                                            style="color: red;margin-left: 3px;">*</span></label>
                                                                    <select class="form-control" type="text"
                                                                        id="Notice_Period" name="Notice_Period"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>Choose Notice Period</option>
                                                                        <option value="15 Days or less"
                                                                            @if ($instahirin->notice_period == '15 Days or less') selected @endif>
                                                                            15 Days or less</option>
                                                                        <option value="1 Month"
                                                                            @if ($instahirin->notice_period == '1 Month') selected @endif>
                                                                            1 Month</option>
                                                                        <option value="2 Month"
                                                                            @if ($instahirin->notice_period == '2 Month') selected @endif>
                                                                            2 Month</option>
                                                                        <option value="3 Month">3 Month</option>
                                                                        <option value="More than 3 Month"
                                                                            @if ($instahirin->notice_period == 'More than 3 Month') selected @endif>
                                                                            More than 3 Month</option>
                                                                    </select>
                                                                    <br>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Save</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>{{ $instahirin->last_company }}</p>
                                                <p>{{ $instahirin->availability }}|
                                                    {{ $instahirin->working_since_date }} to
                                                    {{ $instahirin->working_since_date2 }}</p>
                                                <p>Notice Period :{{ $instahirin->notice_period }}</p>
                                                <p>{{ $instahirin->skills_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="targetContainer">
                                    </div>
                                    <div class="resumeBoxes">
                                        <div class="employeementSec">
                                            <div class="positionSection">
                                                <strong>Education</strong>
                                                <div class="modal fade" id="education_model" tabindex="-1"
                                                    role="dialog" aria-labelledby="draftModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <br>
                                                                <form method="post" id="qualification"
                                                                    action="{{ route('Employee.Resume.graduation') }}">
                                                                    @csrf
                                                                    <label for="draftMessaName">Qualification</label>
                                                                    <select class="form-control" type="text"
                                                                        id="highest_qualification"
                                                                        name="highest_qualification"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>choose qualification</option>
                                                                        <option value="Any"
                                                                            @if ($instahirin->notice_period == 'Any') selected @endif>
                                                                            Any</option>
                                                                        <option value="Doctorate"
                                                                            @if ($instahirin->notice_period == 'Doctorate') selected @endif>
                                                                            Doctorate</option>
                                                                        <option value="Post Graduation"
                                                                            @if ($instahirin->notice_period == 'Post Graduation') selected @endif>
                                                                            Post Graduation</option>
                                                                        <option value="Graduation"
                                                                            @if ($instahirin->notice_period == 'Graduation') selected @endif>
                                                                            Graduation</option>
                                                                        <option value="XII Class"
                                                                            @if ($instahirin->notice_period == 'XII') selected @endif>
                                                                            XII Class</option>
                                                                        <option value="X Class"
                                                                            @if ($instahirin->notice_period == 'X') selected @endif>
                                                                            X Class</option>
                                                                    </select><br>
                                                                    <label for="draftMessaName">Course<span
                                                                            class="required"
                                                                            style="color: red;margin-left: 3px;">*</span></label>
                                                                    <input type="text" id="course_name"
                                                                        name="course_name"
                                                                        placeholder="Enter your Course Name"
                                                                        class="form-control">
                                                                    @error('course_name')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <br>
                                                                    <label for="draftMessaName">College/University<span
                                                                            class="required"
                                                                            style="color: red;margin-left: 3px;">*</span></label>
                                                                    <input type="text" id="collage_name"
                                                                        name="collage_name"
                                                                        placeholder="Enter your College Name"
                                                                        class="form-control" required><br>
                                                                    @error('collage_name')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <label for="draftMessaName">Mode of
                                                                        Education</label>
                                                                    <select class="form-control" type="text"
                                                                        id="work_mode" name="education_mode"
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
                                                                            <input class="form-control" type="date"
                                                                                name="from_date" id="fromDate"
                                                                                autocomplete="off"
                                                                                placeholder="Enter Date"
                                                                                style="width:200px;" required>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <!-- TO Date -->
                                                                            <label for="toDate">Finish</label>
                                                                            <input class="form-control" type="date"
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
                                                <strong class="pt-1">{{ $instahirin->highest_qualification }}<b><i
                                                            class="fa fa-pencil" aria-hidden="true"
                                                            id="education_edit"></i></b></strong>
                                                <p>{{ $instahirin->discription }}</p>
                                                <p>{{ $instahirin->collage_name }}</p>
                                                <p>{{ $instahirin->from_date }} To {{ $instahirin->to_date }} I
                                                    {{ $instahirin->education_mode }}</p>
                                                <br />
                                                <strong>{{ $instahirin->secondary_qualification }}<b><i
                                                            class="fa fa-pencil" aria-hidden="true"
                                                            id="secondary_education_edit"></i></b></strong>
                                                <p>{{ $instahirin->course_name2 }}</p>
                                                <p>{{ $instahirin->collage_name2 }}</p>
                                                <p>{{ $instahirin->from_date2 }} To {{ $instahirin->to_date2 }} I
                                                    {{ $instahirin->work_mode2 }}</p>
                                                <div class="modal fade" id="secondory_education_model" tabindex="-1"
                                                    role="dialog" aria-labelledby="draftModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <br>
                                                                <form method="post" id="secondary"
                                                                    action="{{ route('Employee.Resume.secondary') }}">
                                                                    @csrf
                                                                    <label for="draftMessaName">Qualification</label>
                                                                    <select class="form-control" type="text"
                                                                        id="highest_qualification"
                                                                        name="highest_qualification2"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option disabled>choose qualification</option>
                                                                        <option value="Any"
                                                                            @if ($instahirin->notice_period == 'Any') selected @endif>
                                                                            Any</option>
                                                                        <option value="Doctorate"
                                                                            @if ($instahirin->notice_period == 'Doctorate') selected @endif>
                                                                            Doctorate</option>
                                                                        <option value="Post Graduation"
                                                                            @if ($instahirin->notice_period == 'Post Graduation') selected @endif>
                                                                            Post Graduation</option>
                                                                        <option value="Graduation"
                                                                            @if ($instahirin->notice_period == 'Graduation') selected @endif>
                                                                            Graduation</option>
                                                                        <option value="XII Class"
                                                                            @if ($instahirin->notice_period == 'XII') selected @endif>
                                                                            XII Class</option>
                                                                        <option value="X Class"
                                                                            @if ($instahirin->notice_period == 'X') selected @endif>
                                                                            X Class</option>
                                                                    </select><br>
                                                                    <label for="draftMessaName">Course<span
                                                                            class="required"
                                                                            style="color: red;margin-left: 3px;">*</span></label>
                                                                    <input type="text" id="course_name"
                                                                        name="course_name2"
                                                                        placeholder="Enter your Course Name"
                                                                        class="form-control">
                                                                    @error('course_name2')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <br>
                                                                    <label
                                                                        for="draftMessaName">College/University</label>
                                                                    <input type="text" id="company_name"
                                                                        name="college_name2"
                                                                        placeholder="Enter your College Name"
                                                                        class="form-control" required>
                                                                    @error('college_name2')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                    <br>
                                                                    <label for="draftMessaName">Mode of
                                                                        Education</label>
                                                                    <select class="form-control" type="text"
                                                                        id="work_mode" name="work_mode2"
                                                                        style="width: 414px;border-radius:1.25rem;">
                                                                        <option>Choose Work Mode</option>
                                                                        <option>Full Time</option>
                                                                        <option>Distance</option>
                                                                    </select>
                                                                    <br>
                                                                    <label for="draftMessaName">Time Period</label>
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <!-- FROM Date -->
                                                                            <label for="fromDate">Start</label>
                                                                            <input class="form-control" type="date"
                                                                                name="from_date2" id="fromDate"
                                                                                autocomplete="off"
                                                                                placeholder="Enter Date"
                                                                                style="width:200px;" required>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <!-- TO Date -->
                                                                            <label for="toDate">Finish</label>
                                                                            <input class="form-control" type="date"
                                                                                name="to_date2" id="toDate"
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
                                            </div>
                                        </div>
                                    </div>

                                    <div class="resumeBoxes">
                                        <div class="employeementSec">
                                            <div class="positionSection">
                                                <strong class="pt-1">Personal Details
                                                    <b><i class="fa fa-pencil" aria-hidden="true"
                                                            id="personal_info"></i></b></strong>
                                                ////
                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <input type="text" class="form-control" id="location" placeholder="Add Location" value="{{ old('location') }}" name="location">
                                                </div>
                                                {{-- <div class="modal fade" id="personal_info_model" tabindex="-1" role="dialog" aria-labelledby="draftModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" id="personal_info" action="{{ route('Employee.Resume.personal_info') }}">
                                                                    @csrf
                                                                    <strong>Temporary Location</strong>
                                                                    <div class="form-control" style="width: 89%">
                                                                        <input type="text" placeholder="Add Location" id="location" value="{{ old('location') }}" name="location">
                                                                    </div>
                                                                    <div id="autocomplete-suggestions"></div>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="modal fade" id="personal_info_model" tabindex="-1" aria-labelledby="personal_info_model_Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="personal_info_model_Label">Place Details</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="location">Location</label>
                                                                    <input type="text" class="form-control" id="location" placeholder="Add Location" value="{{ old('location') }}" name="location">
                                                                </div>
                                                                <div id="autocomplete-container"></div> <!-- Container for autocomplete dropdown -->
                                                                <p id="place-name"></p>
                                                                <p id="place-address"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="personalDetail">
                                                    <input type="text" placeholder="Add Location" id="location"
                                                    value="{{ old('location') }}" name="location">
                                            
                                                    <div class="row">
                                                        <div class="col-xxl-6 col-xxl-6 col-xxl-6 col-xxl-6">
                                                            <div class="personalDetail_info">
                                                                @foreach ($userdata as $user)
                                                                    <ul>
                                                                        <li>
                                                                            <strong>Full Name</strong>
                                                                            <p>{{ $user->name }}</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>Date of birth</strong>
                                                                            <p>{{ $instahirin->dob }}</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>E-mail</strong>
                                                                            <p>{{ $user->email }}</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>Mobile Number</strong>
                                                                            <p>{{ $user->country_code }}
                                                                                {{ $user->mobilenumber }}</p>
                                                                        </li>
                                                                        <li>
                                                                            <strong>Experience</strong>
                                                                            @if ($instahirin->experience_year)
                                                                                <p>{{ $instahirin->experience_year }}.{{ $instahirin->experience_month }}
                                                                                </p>
                                                                            @else
                                                                                <p>- years</p>
                                                                            @endif
                                                                        </li>
                                                                        <li>
                                                                            <strong>Availability</strong>
                                                                            <p>{{ $instahirin->availability }}</p>
                                                                        </li>
                                                                    </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-xxl-6 col-xxl-6 col-xxl-6 col-xxl-6">
                                                            <div class="personalDetail_info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Location</strong>
                                                                        <p>{{ $instahirin->current_location }}</p>
                                                                    </li>

                                                                    <li>
                                                                        <strong>Nationality</strong>
                                                                        <p>{{ $user->nationality }}
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Work permit</strong>
                                                                        <p>{{ $instahirin->work_permit }}</p>
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
                        @endforeach
                    @break
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    //keyskill-model
        $(document).ready(function() {
        $('#fileInput').change(function() {
            if ($(this).val() !== "") {
                $('#resumeForm').submit();
            }
        });
        $("#openSaveDraftModal").click(function() {
            $("#draftModal").modal("show");
        });
        // //Add employement
        $("#openAdd_employement").click(function() {
            $("#Add_employement").modal("show");
        });
        // //education model
        $("#education_edit").click(function() {
            $("#education_model").modal("show");
        });
        // //persional_info
        $("#personal_info").click(function() {
            $("#personal_info_model").modal("show");
        });
        // //headline
        $("#resume_headline").click(function() {
            $("#headlineModal").modal("show");
        });

        $("#secondary_education_edit").click(function() {
            $("#secondory_education_model").modal("show");
        });
    });

    function showPDFPreview(pdfUrl) {
        window.open(pdfUrl, '_blank');
    }
 
    function updateWordCount() {
        var text = document.getElementById('Discription').value;
        var trimmedText = text.trim();
        var words = trimmedText.length;

        document.getElementById('wordCount').textContent = 'Word count' + words + '/160';
        if (words > 160) {
            document.getElementById('wordCountWarning').textContent =
                'Warning: Exceeding or reaching the maximum word count of 160!';
        } else {
            document.getElementById('wordCountWarning').textContent = '';
        }
    }
    window.onload = updateWordCount;

    function isPressed() {
        // alert('Hii');
        var newResumeBox = document.createElement('div');
        newResumeBox.className = 'resumeBoxes';
        var targetContainer = document.getElementById('targetContainer');
        targetContainer.insertAdjacentElement('afterend', newResumeBox);

    }
</script> --}}
{{-- <script>
    $("#personal_info").click(function() {
        // Show the modal
        $("#personal_info_model").modal("show");

        // Load Google Maps API and initialize autocomplete once modal is shown
        $('#personal_info_model').on('shown.bs.modal', function() {
            // Ensure the Google Maps API script is not loaded already
            if (!$('#google-maps-api').length) {
                var script = document.createElement('script');
                script.src =
                    'https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initAutocomplete';
                script.id = 'google-maps-api';
                document.head.appendChild(script);
            }
        });
    });

    // Define initAutocomplete globally
    function initAutocomplete() {
        var locationInput = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(locationInput);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place);
        });
    }
</script> --}}
{{-- ////working --}}
{{-- <script>
    $("#personal_info").click(function() {
        $("#personal_info_model").modal("show");
        $('#personal_info_model').on('shown.bs.modal', function() {
            if (!$('#google-maps-api').length) {
                var script = document.createElement('script');
                script.src =
                    'https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initAutocomplete';
                script.id = 'google-maps-api';
                document.head.appendChild(script);
            }
        });
    });

    // Define initAutocomplete globally
    function initAutocomplete() {
        var locationInput = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(locationInput);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place);
        });
    }
</script> --}}


{{-- <div class="modal fade" id="personal_info_model" tabindex="-1" aria-labelledby="personal_info_model_Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="personal_info_model_Label">Place Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location_1" placeholder="Add Location" value="{{ old('location') }}" name="location">
                    <div id="location"></div>
                </div>
                <div id="autocomplete-container"></div> 
                <p id="place-name"></p>
                <p id="place-address"></p>
            </div>
        </div>
    </div>
</div> --}}
////


<style>
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0,0,0,0.4); 
    }
    
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }
    
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      /* cursor: pointer; */
    }
    
    .cancel-btn {
      float: right;
      margin-left: 10px;
      background-color: #f44336;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }
    
    .cancel-btn:hover {
      background-color: #d32f2f;
    }
    
    .modal-header {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .modal-body {
      padding: 2px 16px;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
    }
    
    </style>

<button id="openModalBtn">Open Modal</button>

<div id="modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Place Details</h2>
      <button class="cancel" id="close">&times;</button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" id="location_1" placeholder="Add Location">
      </div>
      <div id="autocomplete-container"></div>
      <p id="place-name"></p>
      <p id="place-address"></p>
    </div>
  </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById("modal");
    var openModalBtn = document.getElementById("openModalBtn");
    var closeBtn = document.getElementsByClassName("close")[0];
    var cancelBtn = document.getElementsByClassName("cancel")[0];
    openModalBtn.onclick = function() {
      modal.style.display = "block";
    }
    closeBtn.onclick = function() {
      modal.style.display = "none";
    }

    cancelBtn.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        modal.style.display = 'none';
      }
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initAutocomplete" async defer></script>
<script>
    function initAutocomplete() {
        var locationInput = document.getElementById('location_1');
        var autocomplete = new google.maps.places.Autocomplete(locationInput);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place);
        });
    }
</script>
