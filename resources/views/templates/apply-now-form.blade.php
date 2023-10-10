<div class="policy_pages">
    <div class="auto_container">
        <div class="policy_pages_detail">
            <div class="policy_pages_content">
                <h1>About the Job:</h1>
                <h4 class="pb-2 pt-2">Job Title: <strong>{{ $job->title }}</strong></h4>
                <h4>Location: <strong>{{ $job->location }}</strong></h4>


                <h6 class="pt-3 pb-0">About Us:</h6>
                <p class="pt-3">Bizionic Technologies is a leading software development and marketing company
                    specialising in cutting-edge technology solutions. We are dedicated to harnessing the power of
                    innovation to empower businesses in the ever-evolving digital landscape. Our team is committed to
                    delivering exceptional results that drive growth and success for our clients.</p>

                <h6 class="">Job Description:</h6>
                {{ $job->description }}


                <h6 class="">Key Responsibilities:</h6>
                {{-- <div class="discList ml-4 pt-0 pb-3">{{ $job->responsibilities }}</div> --}}
                {{ $job->responsibilities }}



                <h6 class="pt-3">Qualifications:</h6>
                {{-- <div class="discList ml-4 pt-0 pb-3">{{ $job->qualification }}</div> --}}
                {{ $job->qualification }}


                <h6 class="pt-3">Preferred Qualifications:</h6>
                {{-- <div class="discList ml-4 pt-0 pb-3">{{ $job->prefer_qualification }}</div> --}}
                {{ $job->prefer_qualification }}


                <h6 class="pt-3">What We Offer:</h6>
                <div class="discList ml-4 pt-0 pb-3"> {{ $job->we_offer }}</div>

                <p>At Bizionic Technologies, we believe in the power of technology to transform businesses. If you are
                    passionate about PHP development, eager to learn, and ready to make a positive impact, we encourage
                    you to apply and join our team.</p>
                <p>To apply, please send your resume and a cover letter detailing your relevant experience and why you
                    want to work with us to <a href="hcm@bizionictech.com"
                        style="color:#000"><b>hcm@bizionictech.com</b></a></p>

                <br>
                <h4 class="pb-3"><strong>Bizionic Technologies T/C applies.</strong></h4>
                <h5 class="texte_787878"><strong>Posted on Sep 26, 2023.</strong></h5>
            </div>

            <jobs-component></jobs-component>

            {{-- <div class="applyNow_text">
                <div class="applyNow_textInfo">
                    <div class="">
                        <h4 class="p-0">Apply for the Position</h4>
                    </div>
                    <a href="#" class="btn_default">Apply</a>
                </div>


                <div class="applyNow_textInfo">
                    <div class="">
                        <h4 class="p-0">Set Alert for Similar Jobs</h4>
                        <p class="texte_787878 p-0">PHP Developer, Hyderabad, Telangana, India</p>

                    </div>
                    <a href="#" class="btn_default">Set Alert</a>
                </div>
            </div>

            <!-- advance career section -->

            <div class="advanceCareer_section mb-0 bg_fff">
                <div class="careerPage_inner" id="careerPage_inner_zone">
                    <div class="custom_tittle">
                        <h2 class="text-left">Advance Your Career <strong>with BIZIONIC:</strong></h2>
                        <p class="p_color text-left pb-2">Join our team of the brightest tech talents and let’s create
                            awesome solutions together!</p>
                    </div>
                    <div class="alert alert-success text-center" role="alert" id="career_success"> Thank you for the
                        message. We will contact you shortly. </div>
                    <div class="alert alert-danger text-center" role="alert" id="career_failure"> Sorry! There is some
                        problem sending your query at the moment, Please try again. </div>
                    <form id="career_form" method="POST" action="{{ route('career') }}" onsubmit="return false"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="advanceCareer_form hi-there">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="advanceCareer_form_fl">
                                        <ul>
                                            <li>
                                                <div class="project_form_field">
                                                    <input type="text" value="" placeholder="Name*" name="name"
                                                        id="career_name">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="project_form_field">
                                                    <input type="text" value="" placeholder="Email*" name="email"
                                                        id="career_email">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="project_form_field">
                                                    <input type="text" value="" placeholder="Linkedin Profile"
                                                        name="linkedin_profile" id="career_linkedin_profile">
                                                </div>
                                            </li>
                                            <li>
                                                <label>Attach CV</label>
                                                <div class="project_form_field">
                                                    <input type="file" value="" placeholder="Attach CV " name="document"
                                                        id="career_document">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="advanceCareer_form_fl">
                                        <ul>
                                            <li>
                                                <div class="project_form_textarea">
                                                    <textarea placeholder="Add a note for our recruiter." name="note"
                                                        id="career_note"></textarea>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="attchForm_btn">
                            <input type="submit" value="Submit" class="btn_default" />
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>