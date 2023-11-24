<script setup>
//Vue.use(VueRouter)
</script>
<template>
  <div class="connected_form_info">
    <div
      class="alert alert-success text-center"
      role="alert"
      id="success"
      ref="successMessage"
    >
      Thank you for the We will contact you shortly.
    </div>

    <div
      class="alert alert-danger text-center"
      role="alert"
      id="failure"
      ref="failureMessage"
    >
      Sorry! There is some problem sending your inquiry at the moment, Please try again.
    </div>
    <div class="project_form">
      <div class="row">
        <!-- name -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              name="name"
              id="name"
              v-model="formData.name"
              placeholder="Name*"
            />
          </div>
        </div>

        <!-- company -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              name="company"
              id="company"
              v-model="formData.company"
              placeholder="Company Name*"
            />
          </div>
        </div>

        <!-- Email -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="email"
              v-model="formData.email"
              name="email"
              id="email"
              placeholder="Enter business email"
            />
          </div>
        </div>

        <!-- Phone -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="tel"
              v-model="formData.phone"
              name="phone"
              id="phone"
              placeholder="Phone / Skype / Whatsapp"
            />
          </div>
        </div>

        <!-- plan_category -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="formData.plan_category"
              name="plan_category"
              id="plan_category"
            >
              <!-- <option disabled selected>Select hiring type</option> -->
              <option value="dedicated_developer">SEO</option>
              <option value="dedicated">SMM</option>
              <option value="developers">PPC</option>
            </select>
          </div>
        </div>

        <!-- plan -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="formData.plan"
              name="plan"
              id="plan"
            >
              <option value="dedicated">GOLD</option>
              <option value="developers">SILVER</option>
              <option value="developers">PLATINUM</option>
              <option value="below_10K">CUSTOM</option>
            </select>
          </div>
        </div>

        <!-- details -->
        <div class="col-lg-12 col-md-12">
          <div class="project_form_textarea">
            <textarea
              name="details"
              id="details"
              v-model="formData.details"
              placeholder="Tell us more*"
            ></textarea>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="addFile_button justify-content-end">
            <div class="project_form_submit">
              <button class="btn_default" @click="store">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      formData: {
        name: "",
        company: "",
        email: "",
        phone: "",
        plan_category: "",
        plan: "",
        details: "",
        // document: null,
      },
    };
  },
  methods: {
    store() {
      const form = new FormData();
      form.append("name", this.formData.name);
      form.append("company", this.formData.company);
      form.append("email", this.formData.email);
      form.append("phone", this.formData.phone);
      form.append("plan_category", this.formData.plan_category);
      form.append("plan", this.formData.plan);
      form.append("details", this.formData.details);
      //   form.append("document", this.formData.document);

      axios
        .post("/submit-proposal-form", form)
        .then((response) => {
          if (response.status === 200) {
            // Handle the successful response here
            this.$refs.successMessage.style.display = "block";
            setTimeout(() => {
              this.$refs.successMessage.style.display = "none";
            }, 3000);

            // Reset the form
            this.formData = {
              name: "",
              company: "",
              email: "",
              phone: "",
              plan_category: "",
              plan: "",
              details: "",
            };

            // Redirect to the '/thankyou' route on the server side
            // window.location.href = '/thankyou';
            // below is working
            // window.location.href = "/industries/industries-we-serve/industries/thankyou";
          }
        })
        .catch((error) => {
          this.showFailureMessage();
        });
    },
    showFailureMessage() {
      this.$refs.failureMessage.style.display = "block";
      setTimeout(() => {
        this.$refs.failureMessage.style.display = "none";
      }, 3000);
    },
  },
};
</script>
