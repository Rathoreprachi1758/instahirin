<div class="contactForm_page">
    <div class="custom_tittle text-left">
        <h3 class="p_color pb-5"><span class="page-dev">Hire HTML5/CSS3 Developers</span>:</h3>
        <p class="p-0">Please fill the form and our representative will get back to you.</p>
    </div>
    <div class="alert alert-success text-center" role="alert" id="hire_success"> Thank you for the message. We will
        contact you shortly. </div>
    <div class="alert alert-danger text-center" role="alert" id="hire_failure"> Sorry! There is some problem sending
        your query at the moment, Please try again. </div>

    <form action="{{ route('hire') }}" method="POST" enctype="multipart/form-data" id="hire_developer"
        onsubmit="return false;">
        @csrf

        <hire-talent-component></hire-talent-component>

    </form>
</div>