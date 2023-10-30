<template>
  <div class="connected_form_info">
    <div
      class="alert alert-success text-center"
      role="alert"
      id="success"
      ref="successMessage"
    >
      Thank you for the message. We will contact you shortly.
    </div>

    <div
      class="alert alert-danger text-center"
      role="alert"
      id="failure"
      ref="failureMessage"
    >
      Sorry! There is some problem sending your query at the moment, Please try again.
    </div>
    <div class="project_form">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              v-model="hireForm.name"
              name="name"
              id="hire_name"
              placeholder="Name*"
            />
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              v-model="hireForm.company"
              name="company"
              id="company"
              placeholder="Company*"
            />
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="email"
              v-model="hireForm.email"
              name="email"
              id="hire_email"
              placeholder="Enter business email"
            />
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="project_form_select col-lg-6 col-md-12 pr-0 border-0">
              <select
                class="form-select codeCountry"
                required
                v-model="hireForm.country_code"
                id="country_code"
                name="country_code"
                @change="validateField('country_code')"
                ref="country_codeField"
              >
                <option value="">Country code</option>
                <option
                  v-for="(country, id) in phoneCodes"
                  :value="country.phone"
                  :key="id"
                >
                  {{ country.name }} +{{ country.phone }}
                </option>
              </select>
            </div>
            <div class="project_form_field col-lg-6 col-md-12 pl-0">
              <input
                type="text"
                v-model="hireForm.phone"
                name="phone"
                id="phone"
                placeholder="Phone / Skype / Whatsapp"
              />
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="project_form_textarea">
            <textarea
              name="message"
              id="message"
              v-model="hireForm.message"
              placeholder="What can we build together....."
            ></textarea>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="addFile_button">
            <p>
              By clicking on “Augment your Team”, you agree to Bizionic Technologies and
              <br />
              Marketing Solution’s Privacy Policy, You can withdraw your consent by
              Contacting us.
            </p>

            <div class="project_form_submit">
              <input
                type="text"
                class="hidden d-none"
                name="lead_type"
                id="hire_lead_type"
                value="Hire Now"
              />
              <input type="text" class="hidden d-none" name="honeypot" id="honeypot" />
              <input
                type="submit"
                value="Augment your Team"
                class="btn_default submit-button"
                @click="hire"
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
      hireForm: {
        name: "",
        company: "",
        email: "",
        phone: "",
        message: "",
        phoneCodes: [],
        country_code: "",
      },
      phoneCodes: [],
      country_code: "",
    };
  },
  mounted() {
    this.fetchPhoneCodes();
  },
  methods: {
    hire() {
      axios
        .post("/hire", this.hireForm)
        .then((response) => {
          if (response.status == 200) {
            // document.getElementById("success").style.display =
            //     "block";
            // document.getElementById("failure").style.display =
            //     "none";
            this.showSuccessMessage();
            this.hireForm = {
              name: "",
              company: "",
              email: "",
              phone: "",
              message: "",
              selectedPhoneCode: "",
            };
          }
        })
        .catch((error) => {
          this.showFailureMessage();
          // document.getElementById("success").style.display = "none";
          // document.getElementById("failure").style.display = "block";
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
    // Fetch phone codes from the server
    fetchPhoneCodes() {
      //   console.log("Making request to:", "{{ route('getPhone') }}");
      axios
        .get("/api/v1/getPhone")
        .then((response) => {
          this.phoneCodes = response.data;
        })
        .catch((error) => {
          //console.error("Error fetching phone codes", error);
          if (error.response) {
            console.error(
              "Request resulted in an error with status code:",
              error.response.status
            );
          } else {
            console.error("Request failed:", error.message);
          }
        });
    },
  },
};
</script>
