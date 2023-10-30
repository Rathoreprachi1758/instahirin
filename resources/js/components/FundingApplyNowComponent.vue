<template>
  <form enctype="multipart/form-data" @submit.prevent="store">
    <!-- @csrf -->

    <input type="hidden" :value="csrfToken" name="_token" />
    <div class="fundingApplyForm_info">
      <!-- Failure & Success Message -->
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

      <!-- section 1  -->
      <div class="fundingApplyForm_info_section">
        <div class="custom_tittle">
          <h5 class="text-left pb-0">Name <strong>(required)</strong></h5>
        </div>

        <div class="row">
          <!-- first_name -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>First Name</strong>
              <div class="project_form_field">
                <input
                  type="text"
                  name="first_name"
                  placeholder="First Name"
                  v-model="first_name"
                />
              </div>
            </div>
          </div>

          <!-- last_name -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Last Name</strong>
              <div class="project_form_field">
                <input
                  type="text"
                  name="last_name"
                  placeholder="Last Name"
                  v-model="last_name"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- title -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Title <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input type="text" name="title" placeholder="Title" v-model="title" />
              </div>
            </div>
          </div>

          <!-- email -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Email <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input type="email" name="email" placeholder="Email" v-model="email" />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- company -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Company <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input
                  type="text"
                  name="company"
                  placeholder="Company"
                  v-model="company"
                />
              </div>
            </div>
          </div>

          <!-- hq -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>HQ <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input type="text" name="hq" placeholder="HQ" v-model="hq" />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- website -->
          <div class="col-lg-12 col-md-12">
            <div class="fundingForm_col">
              <strong>Website <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input
                  type="url"
                  name="website"
                  placeholder="https://example.com"
                  v-model="website"
                />
              </div>
            </div>
          </div>
        </div>

        <br />
        <hr />
        <br />
      </div>

      <!-- section 2  -->

      <div class="fundingApplyForm_info_section">
        <div class="custom_tittle">
          <h5 class="text-left pb-0">Social Media</h5>
        </div>

        <div class="row">
          <!-- linkedIn -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>LinkedIn <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input
                  type="url"
                  name="linkedIn"
                  placeholder="LinkedIn"
                  v-model="linkedIn"
                />
              </div>
            </div>
          </div>

          <!-- instagram -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Instagram </strong>
              <div class="project_form_field">
                <input
                  type="url"
                  name="instagram"
                  placeholder="Instagram"
                  v-model="instagram"
                />
              </div>
            </div>
          </div>
        </div>

        <!-- twitter -->
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="fundingForm_col">
              <strong>Twitter</strong>
              <div class="project_form_field">
                <input
                  type="url"
                  name="twitter"
                  placeholder="Twitter"
                  v-model="twitter"
                />
              </div>
            </div>
          </div>
        </div>

        <br />
        <hr />
        <br />
      </div>

      <!-- section 3  -->

      <div class="fundingApplyForm_info_section">
        <div class="custom_tittle">
          <h5 class="text-left pb-0">Financials</h5>
        </div>

        <!-- raising_capital -->
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong
                >Are you actively raising capital?
                <sup class="text-danger">*</sup></strong
              >
              <div class="project_form_select">
                <select
                  name="raising_capital"
                  v-model="raising_capital"
                  required
                  autofocus
                >
                  <option value="Yes" selected>Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
          </div>

          <!-- raised_venture_capital -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong
                >Have you ever raised venture capital?
                <sup class="text-danger">*</sup></strong
              >
              <div class="project_form_select">
                <select
                  name="raised_venture_capital"
                  v-model="raised_venture_capital"
                  required
                  autofocus
                >
                  <option value="Yes" selected>Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- raised_amount -->
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>How much have you raised? <sup class="text-danger">*</sup></strong>
              <div class="project_form_select">
                <select name="raised_amount" v-model="raised_amount" required autofocus>
                  <option value="$100,000 - $250,000" selected>
                    $100,000 - $250,000
                  </option>
                  <option value="$200,000 - $250,000">$200,000 - $500,000</option>
                  <option value="$200,000 - $250,000">$500,000 - $1,000,000</option>
                  <option value="$200,000 - $250,000">$1,000,000 - $5,000,000</option>
                  <option value="$200,000 - $250,000">$1,000,000 - $10,000,000</option>
                  <option value="$200,000 - $250,000">$10,000,000+</option>
                  <option value="$200,000 - $250,000">$0</option>
                </select>
              </div>
            </div>
          </div>

          <!-- valuation -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Valuation <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input
                  type="text"
                  name="valuation"
                  placeholder="$10,000"
                  v-model="valuation"
                />
              </div>
            </div>
          </div>
        </div>

        <br />
        <hr />
        <br />
      </div>

      <!-- section 4  -->

      <div class="fundingApplyForm_info_section">
        <div class="custom_tittle">
          <h5 class="text-left pb-0">Company</h5>
        </div>

        <div class="row">
          <!-- enabling_technology -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong
                >What is your enabling technology?
                <sup class="text-danger">*</sup></strong
              >
              <div class="project_form_field">
                <input
                  type="text"
                  name="enabling_technology"
                  placeholder="Enable Technology.."
                  v-model="enabling_technology"
                />
              </div>
            </div>
          </div>

          <!-- industry -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Industry <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input
                  type="text"
                  name="industry"
                  placeholder="industry"
                  v-model="industry"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- challenges -->
          <div class="col-lg-12 col-md-12">
            <div class="fundingForm_col">
              <strong
                >Challanges your company is solving?
                <sup class="text-danger">*</sup></strong
              >
              <p class="pb-2">
                Please describe the challanges you’re solving in only 2 to 3 sentences.
              </p>
              <div class="project_form_textarea">
                <textarea
                  placeholder="Description..."
                  name="challenges"
                  id="challenges"
                  v-model="challenges"
                ></textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- core_buyer -->
          <div class="col-lg-12 col-md-12">
            <div class="fundingForm_col">
              <strong>Who is the core buyer/user of your solution?</strong>
              <div class="project_form_field">
                <input
                  type="text"
                  name="core_buyer"
                  placeholder="Core buyer"
                  v-model="core_buyer"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- investors -->
          <div class="col-lg-12 col-md-12">
            <div class="fundingForm_col">
              <strong>Who are your investors? <sup class="text-danger">*</sup></strong>
              <p class="pb-2">If you’re bootstrapped, please place N/A in field below.</p>
              <div class="project_form_field">
                <input
                  type="text"
                  name="investors"
                  placeholder="Investors"
                  v-model="investors"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="row pt-3">
          <div class="col-lg-12 col-md-12">
            <div class="applyBtn">
              <input
                type="button"
                class="btn_default"
                value="Apply For Funding"
                @click="store"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      csrfToken: "{{ csrf_token() }}",
      first_name: "",
      last_name: "",
      title: "",
      email: "",
      company: "",
      hq: "",
      website: "",
      linkedIn: "",
      instagram: "",
      twitter: "",
      raising_capital: "",
      raised_venture_capital: "",
      raised_amount: "",
      valuation: "",
      enabling_technology: "",
      industry: "",
      challenges: "",
      core_buyer: "",
      investors: "",
    };
  },
  methods: {
    store() {
      // Send form data to the backend
      // console.log(this.formData);
      const formData = new FormData();
      formData.append("first_name", this.first_name);
      formData.append("last_name", this.last_name);
      formData.append("title", this.title);
      formData.append("email", this.email);
      formData.append("company", this.company);
      formData.append("hq", this.hq);
      formData.append("website", this.website);
      formData.append("linkedIn", this.linkedIn);
      formData.append("instagram", this.instagram);
      formData.append("twitter", this.twitter);
      formData.append("raising_capital", this.raising_capital);
      formData.append("raised_venture_capital", this.raised_venture_capital);
      formData.append("raised_amount", this.raised_amount);
      formData.append("valuation", this.valuation);
      formData.append("enabling_technology", this.enabling_technology);
      formData.append("industry", this.industry);
      formData.append("challenges", this.challenges);
      formData.append("core_buyer", this.core_buyer);
      formData.append("investors", this.investors);
      axios
        .post("/funding-apply", formData)
        .then((response) => {
          if (response.status == 200) {
            this.showSuccessMessage();
            this.first_name = "";
            this.last_name = "";
            this.title = "";
            this.email = "";
            this.company = "";
            this.hq = "";
            this.website = "";
            this.linkedIn = "";
            this.instagram = "";
            this.twitter = "";
            this.raising_capital = "";
            this.raised_venture_capital = "";
            this.raised_amount = "";
            this.valuation = "";
            this.enabling_technology = "";
            this.industry = "";
            this.challenges = "";
            this.core_buyer = "";
            this.investors = "";
          }
        })
        .catch((error) => {
          this.showFailureMessage();
        });
    },
    showSuccessMessage() {
      const successMessage = this.$refs.successMessage;
      successMessage.style.display = "block";
      //successMessage.scrollIntoView({ behavior: "smooth" });
      const scrollOptions = {
        behavior: "smooth",
        block: "center",
      };
      successMessage.scrollIntoView(scrollOptions);
      setTimeout(() => {
        successMessage.style.display = "none";
      }, 5000);
    },
    showFailureMessage() {
      const failureMessage = this.$refs.failureMessage;
      failureMessage.style.display = "block";
      //failureMessage.scrollIntoView({ behavior: "smooth" });
      const scrollOptions = {
        behavior: "smooth",
        block: "center",
      };
      failureMessage.scrollIntoView(scrollOptions);
      setTimeout(() => {
        failureMessage.style.display = "none";
      }, 5000);
    },
  },
};
</script>
