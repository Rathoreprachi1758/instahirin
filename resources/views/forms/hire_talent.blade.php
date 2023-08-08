<div class="row ">
    <div class="col-lg-4 col-md-5  aos-init " data-aos="fade-right" data-aos-duration="800" data-aos-easing="ease-out-cubic">
        <div class="biz_brief onhire_innerPages">

            <div class="hiringInfo">
                <div class="custom_tittle text-left pb-0">
                    <h3 class="text-white"><strong>Why </strong><span class="page-dev"> HTML5/CSS3 Developers </span> <strong>From BIZIONIC:</strong></h3>
                    <p class=" text-justify text-white">BIZIONIC has a reputation for conducting intensive project requirement research and pre-screening the candidates to present the right talent to satisfy our customers' project requirements. Our Developers at BIZIONIC are well-versed in the foundational knowledge and prerequisites needed for development.</p>
                    <p class=" text-justify text-white">Hiring developers from Bizionic provides several advantages:</p>
                        <div class="hirform_desc_list">
                            <ul class="abt_list text-white">
                                <li><p class=" text-justify text-white">Familiarity with Technology Stack</p></li>
                                <li><p class=" text-justify text-white">Domain Knowledge</p></li>
                                <li><p class=" text-justify text-white">Collaboration and Synergy</p></li>
                                <li><p class=" text-justify text-white">Company Culture Fit</p></li>
                                <li><p class=" text-justify text-white">Knowledge Transfer and Continuity</p></li>
                                <li><p class=" text-justify text-white">Cost and Time Savings</p></li>
                                <li><p class=" text-justify text-white">Bizionic Project Management Team</p></li>
                            </ul>
                        </div>
                    <p class=" text-justify text-white">We invite You to a “No-Obligation Meeting” with the candidate to assess their expertise, skillset, and suitability for your Project requirements. This meeting will provide an opportunity to comprehensively evaluate their qualifications and technical proficiency, ensuring their alignment with your needs.</p>
                    <p class=" text-justify text-white pb-0">Through this meeting, you can administer an assessment test to thoroughly evaluate their abilities and determine their technical capabilities.</p>
                </div>

            </div>

        </div>
    </div>
    <div class="col-lg-8 col-md-7   aos-init " data-aos="fade-left" data-aos-duration="800" data-aos-easing="ease-out-cubic">
        <div class="contactForm_page">
            <div class="custom_tittle text-left">
                <h3 class="p_color pb-5"><span class="page-dev">Hire HTML5/CSS3 Developers</span>:</h3>
                <p class="p-0">Please fill the form and our representative will get back to you.</p>
            </div>
            <div class="alert alert-success text-center" role="alert" id="hire_success"> Thank you for the message. We will contact you shortly. </div>
            <div class="alert alert-danger text-center" role="alert" id="hire_failure"> Sorry! There is some problem sending your query at the moment, Please try again. </div>

            <form action="{{ route('hire') }}" method="POST" enctype="multipart/form-data" id="hire_developer" onsubmit="return false;">
            @csrf

            <hire-talent-component></hire-talent-component>

            </form>
        </div>
    </div>
</div>
