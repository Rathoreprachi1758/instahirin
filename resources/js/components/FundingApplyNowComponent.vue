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
                  @input="validateField('first_name')"
                  ref="first_nameField"
                />
              </div>
              <!-- First name error -->
              <div class="error-message" ref="first_nameError">
                {{ validationErrors.first_name }}
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
                  @input="validateField('last_name')"
                  ref="last_nameField"
                />
              </div>
              <!-- Last name error -->
              <div class="error-message" ref="last_nameError">
                {{ validationErrors.last_name }}
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
                <input
                  type="text"
                  name="title"
                  placeholder="Title"
                  v-model="title"
                  @input="validateField('title')"
                  ref="titleField"
                />
              </div>
              <!-- Title error -->
              <div class="error-message" ref="titleError">
                {{ validationErrors.title }}
              </div>
            </div>
          </div>

          <!-- email -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Email <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input
                  type="email"
                  name="email"
                  placeholder="Email"
                  v-model="email"
                  @input="validateField('email')"
                  ref="emailField"
                />
              </div>
              <!-- Email error -->
              <div class="error-message" ref="emailError">
                {{ validationErrors.email }}
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
                  @input="validateField('company')"
                  ref="companyField"
                />
              </div>
              <!-- Company error -->
              <div class="error-message" ref="companyError">
                {{ validationErrors.company }}
              </div>
            </div>
          </div>

          <!-- hq -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>HQ <sup class="text-danger">*</sup></strong>
              <div class="project_form_field">
                <input
                  type="text"
                  name="hq"
                  placeholder="HQ"
                  v-model="hq"
                  @input="validateField('hq')"
                  ref="hqField"
                />
              </div>
              <!-- HQ error -->
              <div class="error-message" ref="hqError">
                {{ validationErrors.hq }}
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
                  @input="validateField('website')"
                  ref="websiteField"
                />
              </div>
              <!-- Website error -->
              <div class="error-message" ref="websiteError">
                {{ validationErrors.website }}
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
          <h5 class="text-left pb-0">Accessible Funding Solutions</h5>
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
                  @input="validateField('linkedIn')"
                  ref="linkedInField"
                />
              </div>
              <!-- LinkedIn error -->
              <div class="error-message" ref="linkedInError">
                {{ validationErrors.linkedIn }}
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
                  @input="validateField('instagram')"
                  ref="instagramField"
                />
              </div>
              <!-- Instagram error -->
              <div class="error-message" ref="instagramError">
                {{ validationErrors.instagram }}
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
                  @input="validateField('twitter')"
                  ref="twitterField"
                />
              </div>
              <!-- Twitter error -->
              <div class="error-message" ref="twitterError">
                {{ validationErrors.twitter }}
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
          <h5 class="text-left pb-0">Financial Aid And Money Grant Forms</h5>
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
                  @change="validateField('raising_capital')"
                  ref="raising_capitalField"
                >
                  <option value="Yes" selected>Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <!-- Raising capital error -->
              <div class="error-message" ref="raising_capitalError">
                {{ validationErrors.raising_capital }}
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
                  @change="validateField('raised_venture_capital')"
                  ref="raised_venture_capitalField"
                >
                  <option value="Yes" selected>Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <!-- Raised venture capital error -->
              <div class="error-message" ref="raised_venture_capitalError">
                {{ validationErrors.raised_venture_capital }}
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
                <select
                  name="raised_amount"
                  v-model="raised_amount"
                  required
                  autofocus
                  @change="validateField('raised_amount')"
                  ref="raised_amountField"
                >
                  <option value="$100,000 - $250,000" selected>$0 - $100,000</option>
                  <option value="$100,000 - $250,000">$100,000 - $250,000</option>
                  <option value="$200,000 - $250,000">$200,000 - $500,000</option>
                  <option value="$200,000 - $250,000">$500,000 - $1,000,000</option>
                  <option value="$200,000 - $250,000">$1,000,000 - $5,000,000</option>
                  <option value="$200,000 - $250,000">$1,000,000 - $10,000,000</option>
                  <option value="$200,000 - $250,000">$10,000,000+</option>
                </select>
              </div>
              <!-- raised amount error -->
              <div class="error-message" ref="raised_amountError">
                {{ validationErrors.raised_amount }}
              </div>
            </div>
          </div>

          <!-- valuation -->
          <div class="col-lg-6 col-md-6">
            <div class="fundingForm_col">
              <strong>Valuation <sup class="text-danger">*</sup></strong>
              <!-- <div class="project_form_field">
                <input
                  type="text"
                  name="valuation"
                  placeholder="$10,000"
                  v-model="valuation"
                />
              </div> -->
              <div class="project_form_select">
                <select
                  name="valuation"
                  v-model="valuation"
                  required
                  autofocus
                  @change="validateField('valuation')"
                  ref="valuationField"
                >
                  <option value="$100,000 - $250,000" selected>$0 - $100,000</option>
                  <option value="$100,000 - $250,000">$100,000 - $250,000</option>
                  <option value="$200,000 - $250,000">$200,000 - $500,000</option>
                  <option value="$200,000 - $250,000">$500,000 - $1,000,000</option>
                  <option value="$200,000 - $250,000">$1,000,000 - $5,000,000</option>
                  <option value="$200,000 - $250,000">$1,000,000 - $10,000,000</option>
                  <option value="$200,000 - $250,000">$10,000,000+</option>
                </select>
              </div>
              <!-- Valuation error -->
              <div class="error-message" ref="valuationError">
                {{ validationErrors.valuation }}
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
                  @input="validateField('enabling_technology')"
                  ref="enabling_technologyField"
                />
              </div>
              <!-- Enabling technology error -->
              <div class="error-message" ref="enabling_technologyError">
                {{ validationErrors.enabling_technology }}
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
                  @input="validateField('industry')"
                  ref="industryField"
                />
              </div>
              <!-- Industry error -->
              <div class="error-message" ref="industryError">
                {{ validationErrors.industry }}
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
                  @input="validateField('challenges')"
                  ref="challengesField"
                  maxlength="5000"
                ></textarea>
                <!-- character count -->
                <div id="character-count" :class="{ 'limit-reached': isLimitReached }">
                  <span id="current">{{ characterCount }}</span>
                  <span id="maximum">/ 5000</span>
                </div>
              </div>
              <!-- Challenges error -->
              <div class="error-message" ref="challengesError">
                {{ validationErrors.challenges }}
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
                  @input="validateField('core_buyer')"
                  ref="core_buyerField"
                />
              </div>
              <!-- Core buyer error -->
              <div class="error-message" ref="core_buyerError">
                {{ validationErrors.core_buyer }}
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
                  @input="validateField('investors')"
                  ref="investorsField"
                />
              </div>
              <!-- Investors error -->
              <div class="error-message" ref="investorsError">
                {{ validationErrors.investors }}
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

<style scoped>
.error-message {
  color: red;
  font-size: 11px;
}

#character-count {
  float: right;
  padding: 0.1rem 0 0 0;
  font-size: 0.875rem;
}

#character-count.limit-reached .message {
  color: red;
}

#character-count .message {
  color: red;
}
</style>

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
      // charactoer count
      characterCount: 0,
      isLimitReached: false,
      // errors validation
      validationErrors: {
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
      },
    };
  },
  computed: {
    characterCount() {
      return this.challenges.length;
    },
    isLimitReached() {
      return this.characterCount >= 5000;
    },
    hasValidationErrors() {
      for (const field in this.validationErrors) {
        if (this.validationErrors[field]) {
          return true;
        }
      }
      return false;
    },
  },
  methods: {
    validateField(field) {
      this.validationErrors[field] = "";

      // First name validation
      if (field === "first_name") {
        if (!this.first_name) {
          this.validationErrors.first_name = "First name is required";
        } else if (this.first_name.length < 3) {
          this.validationErrors.first_name =
            "First name must be at least 3 characters long";
        } else if (this.first_name.length > 50) {
          this.validationErrors.first_name =
            "First name must be less than 50 characters long";
        } else {
          const regex = /^[a-zA-Z\s]*$/;
          if (!regex.test(this.first_name)) {
            this.validationErrors.first_name = "Please enter a valid first name.";
          }
        }
      }

      // Last name validation
      if (field === "last_name") {
        if (!this.last_name) {
          this.validationErrors.last_name = "Last name is required";
        } else if (this.last_name.length <= 3) {
          this.validationErrors.last_name =
            "Last name must be at least 3 characters long";
        } else if (this.last_name.length > 50) {
          this.validationErrors.last_name =
            "Last name must be less than 50 characters long";
        }
      }

      // Title validation
      if (field === "title") {
        if (!this.title) {
          this.validationErrors.title = "Title is required";
        } else if (this.title.length <= 3) {
          this.validationErrors.title = "Title must be at least 3 characters long";
        } else if (this.title.length > 50) {
          this.validationErrors.title = "Title must be less than 50 characters long";
        }
      }

      // Email validation
      if (field === "email") {
        if (!this.email) {
          this.validationErrors.email = "Email is required.";
        } else {
          const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!regex.test(this.email)) {
            this.validationErrors.email = "Please enter a valid email address.";
          }
        }
      }

      // Company validation
      if (field === "company") {
        if (!this.company) {
          this.validationErrors.company = "Company is required";
        } else if (this.company.length <= 3) {
          this.validationErrors.company = "Company must be at least 3 characters long";
        } else if (this.company.length > 50) {
          this.validationErrors.company = "Company must be less than 50 characters long";
        }
      }

      // HQ validation
      if (field === "hq") {
        if (!this.hq) {
          this.validationErrors.hq = "HQ is required";
        } else if (this.hq.length <= 3) {
          this.validationErrors.hq = "HQ must be at least 3 characters long";
        } else if (this.hq.length > 50) {
          this.validationErrors.hq = "HQ must be less than 50 characters long";
        }
      }

      // Website validation
      if (field === "website") {
        if (!this.website) {
          this.validationErrors.website = "Website is required.";
        }
      }

      // LinkedIn validation
      if (field === "linkedIn") {
        if (!this.linkedIn) {
          this.validationErrors.linkedIn = "LinkedIn is required.";
        }
      }

      // Instagram validation
      if (field === "instagram") {
        if (!this.instagram) {
          this.validationErrors.instagram = "Instagram is required.";
        }
      }

      // Twitter validation
      if (field === "twitter") {
        if (!this.twitter) {
          this.validationErrors.twitter = "Twitter is required.";
        }
      }

      // Raising capital validation
      if (field === "raising_capital") {
        if (!this.raising_capital) {
          this.validationErrors.raising_capital = "Raising capital is required.";
        }
      }

      // Raised venture capital validation
      if (field === "raised_venture_capital") {
        if (!this.raised_venture_capital) {
          this.validationErrors.raised_venture_capital =
            "Raised venture capital is required.";
        }
      }

      // Raised amount validation
      if (field === "raised_amount") {
        if (!this.raised_amount) {
          this.validationErrors.raised_amount = "Raised amount is required.";
        }
      }

      // Valuation validation
      if (field === "valuation") {
        if (!this.valuation) {
          this.validationErrors.valuation = "Valuation is required.";
        }
      }

      // Enabling technology validation
      if (field === "enabling_technology") {
        if (!this.enabling_technology) {
          this.validationErrors.enabling_technology = "Enabling technology is required.";
        }
      }

      // Industry validation
      if (field === "industry") {
        if (!this.industry) {
          this.validationErrors.industry = "Industry is required.";
        }
      }

      // Challenges validation
      if (field === "challenges") {
        if (this.challenges.length === 0) {
          this.validationErrors.challenges = "challenge description is required.";
        } else if (this.challenges.length >= 5000) {
          this.validationErrors.challenges = "Character limit reached (5000 characters).";
        } else {
          this.validationErrors.challenges = "";
        }
      }

      // Core buyer validation
      if (field === "core_buyer") {
        if (!this.core_buyer) {
          this.validationErrors.core_buyer = "Core buyer is required.";
        }
      }

      // Investors validation
      if (field === "investors") {
        if (!this.investors) {
          this.validationErrors.investors = "Investors is required.";
        }
      }
    },

    store() {
      // Trigger validation for all fields
      for (const field in this.validationErrors) {
        this.validateField(field);
      }

      // Check if there are any validation errors
      if (this.hasValidationErrors) {
        this.scrollAndFocusOnErrorField();
        return;
      }
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

    // Scroll to the first field with an error and focus on it
    scrollAndFocusOnErrorField() {
      for (const field in this.validationErrors) {
        if (this.validationErrors[field]) {
          // Scroll to the first error field and focus on it
          const errorField = this.$refs[`${field}Error`];
          errorField.scrollIntoView({
            behavior: "smooth",
            block: "center",
          });
          const errorInput = this.$refs[`${field}Field`];
          errorInput.focus();
          return; // Stop after the first error is encountered
        }
      }
    },
  },
};
</script>
