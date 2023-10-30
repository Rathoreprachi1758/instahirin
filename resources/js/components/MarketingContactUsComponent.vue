<template>
  <div class="connected_form_info">
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
    <div class="project_form">
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
            <div class="protectPrivacy">
              <span>
                <img src="/bizionic/images/protect_icon.png" alt="#" />
                Your privacy is protected
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="email"
              v-model="formData.company"
              name="company"
              id="company"
              placeholder="Company Name*"
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
              placeholder="Business Email*"
            />
          </div>
        </div>
        <!-- <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="tel"
                                v-model="formData.countrycode"
                                name="countrycode"
                                id="countrycode"
                                placeholder="Country Code*"
                            />
                        </div>
                    </div> -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field split_in_two">
            <div class="project_form_select m-0 mr-2">
              <select
                v-model="formData.selectedPhoneCode"
                class="project_form form-select codeCountry oncontact pl-3"
                style="padding-left: 15px !important"
                names="country_code"
                id="country_code"
                aria-label="Country Code*"
              >
                <option value="" disabled selected>Country Code*</option>

                <option
                  v-for="(country, id) in formData.phoneCodes"
                  :value="country.phone"
                  :key="id"
                >
                  {{ country.name }} +{{ country.phone }}
                </option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="tel"
              v-model="formData.phone"
              name="phone"
              id="phone"
              placeholder="Contact No*"
            />
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="project_form_textarea">
            <textarea
              name="details"
              id="details"
              v-model="formData.details"
              :placeholder="staticPlaceHolder + template"
            ></textarea>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="addFile_button">
            <div class="addFile">
              <input
                type="file"
                name="document"
                id="document"
                @change="handleFileChange"
              />
            </div>

            <div class="project_form_submit">
              <button class="btn_default" @click="store">Submit Request</button>
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
        country_code: "",
        phoneCodes: [],
        selectedPhoneCode: "",
        details: "",
        document: null,
      },
      staticPlaceHolder: "You are hiring for: ",
    };
  },
  props: {
    template: String,
  },
  created() {
    this.fetchPhoneCodes();
  },
  methods: {
    handleFileChange(event) {
      const file = event.target.files[0];
      this.formData.document = file;
    },

    // Fetching phone codes from the backend
    fetchPhoneCodes() {
      //   console.log("Making request to:", "{{ route('getPhone') }}");
      axios
        .get("/api/v1/getPhone")
        .then((response) => {
          this.formData.phoneCodes = response.data;
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

    store() {
      // Send form data to the backend
      // console.log(this.formData);

      const form = new FormData();
      form.append("name", this.formData.name);
      form.append("company", this.formData.company);
      form.append("email", this.formData.email);
      form.append("country_code", this.formData.selectedPhoneCode);
      form.append("phone", this.formData.phone);
      form.append("details", this.formData.details);
      form.append("document", this.formData.document);

      axios
        .post("/submit-form", form)
        .then((response) => {
          if (response.status == 200) {
            this.showSuccessMessage();
            this.formData = {
              name: "",
              company: "",
              email: "",
              phone: "",
              country_code: "",
              phoneCodes: [],
              selectedPhoneCode: "",
              details: "",
              document: null,
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
