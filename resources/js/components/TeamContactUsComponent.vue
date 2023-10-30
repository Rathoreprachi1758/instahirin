<template>
  <div class="connected_form_info getFree">
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
    <div class="">
      <div class="row">
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

        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              v-model="formData.phone"
              name="phone"
              id="phone"
              placeholder="Phone / Skype / Whatsapp"
            />
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="email"
              v-model="formData.email"
              name="email"
              id="email"
              placeholder="Enter business email*"
            />
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="project_form_textarea">
            <textarea
              name="details"
              id="details"
              v-model="formData.details"
              placeholder="What can we build together....."
            ></textarea>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="addFile_button">
            <div class="project_form_submit">
              <!-- <button class="btn_default" @click="store">Contact Us</button> -->
              <input
                type="submit"
                value="Contact Us"
                class="btn_default"
                @click="store"
              />
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
        phone: "",
        email: "",
        details: "",
      },
    };
  },
  methods: {
    store() {
      const form = new FormData();
      form.append("name", this.formData.name);
      form.append("phone", this.formData.phone_number);
      form.append("email", this.formData.email);
      form.append("details", this.formData.details);

      axios
        .post("/submit-team-form", form)
        .then((response) => {
          if (response.status == 200) {
            this.showSuccessMessage();
            this.formData = {
              name: "",
              phone: "",
              email: "",
              details: "",
            };
          }
        })
        .catch((error) => {
          this.showFailureMessage();
        });
    },
    showSuccessMessage() {
      this.$refs.successMessage.style.display = "block";
      setTimeout(() => {
        this.$refs.successMessage.style.display = "none";
      }, 3000);
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
