<template>
  <div>
    <div class="applyNow_text">
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

    <!-- Success and  Failure Messages -->

    <div
      class="alert alert-success text-center"
      role="alert"
      id="success"
      ref="successMessage"
    >
      Thank you for the submitting the inquiry. We will contact you shortly.
    </div>

    <div
      class="alert alert-danger text-center"
      role="alert"
      id="failure"
      ref="failureMessage"
    >
      Sorry! There is some problem sending your inquiry at the moment, Please try again.
    </div>

    <!-- advance career section -->

    <div class="advanceCareer_section mb-0 bg_fff">
      <div class="careerPage_inner" id="careerPage_inner_zone">
        <div class="custom_tittle">
          <h2 class="text-left">Advance Your Career <strong>with BIZIONIC:</strong></h2>
          <p class="p_color text-left pb-2">
            Join our team of the brightest tech talents and let’s create awesome solutions
            together!
          </p>
        </div>
        <div class="alert alert-success text-center" role="alert" id="career_success">
          Thank you for the message. We will contact you shortly.
        </div>
        <div class="alert alert-danger text-center" role="alert" id="career_failure">
          Sorry! There is some problem sending your query at the moment, Please try again.
        </div>
        <form
          id="career_form"
          method="POST"
          action="{{ route('career') }}"
          onsubmit="return false"
          enctype="multipart/form-data"
        >
          @csrf
          <div class="advanceCareer_form hi-there">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="advanceCareer_form_fl">
                  <ul>
                    <li>
                      <div class="project_form_field">
                        <input
                          type="text"
                          placeholder="Name*"
                          name="name"
                          id="career_name"
                          v-model="name"
                        />
                      </div>
                    </li>
                    <li>
                      <div class="project_form_field">
                        <input
                          type="text"
                          placeholder="Email*"
                          name="email"
                          id="career_email"
                          v-model="email"
                        />
                      </div>
                    </li>
                    <li>
                      <div class="project_form_field">
                        <input
                          type="text"
                          placeholder="Linkedin Profile"
                          name="linkedin_profile"
                          id="career_linkedin_profile"
                          v-model="linkedin_profile"
                        />
                      </div>
                    </li>
                    <li>
                      <label>Attach CV</label>
                      <div class="project_form_field">
                        <input
                          type="file"
                          value=""
                          placeholder="Attach CV "
                          name="document"
                          id="career_document"
                          @change="handleFileChange"
                        />
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
                        <textarea
                          placeholder="Add a note for our recruiter."
                          name="note"
                          id="career_note"
                          v-model="note"
                        ></textarea>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="attchForm_btn">
            <input type="button" class="btn_default" @click="storeJob" />
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      name: "",
      email: "",
      linkedin_profile: "",
      document: null,
      note: "",
    };
  },
  methods: {
    handleFileChange(event) {
      // const file = event.target.files[0];
      // this.formData.document = file;
      this.document = event.target.files[0];
    },

    storeJob() {
      let formData = new FormData();
      formData.append("name", this.name);
      formData.append("email", this.email);
      formData.append("linkedin_profile", this.linkedin_profile);
      formData.append("document", this.document);
      formData.append("note", this.note);

      axios
        .post("{{ route('career') }}", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          if (response.data.status == "success") {
            $("#career_success").show();
            $("#career_failure").hide();
            $("#career_form")[0].reset();
          } else {
            $("#career_success").hide();
            $("#career_failure").show();
          }
        })
        .catch((error) => {
          $("#career_success").hide();
          $("#career_failure").show();
        });
    },
  },
};
</script>
