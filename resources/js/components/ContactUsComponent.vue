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
              type="text"
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
              placeholder="Business email*"
            />
          </div>
        </div>

        <!-- Contact Details -->

        <!-- <div class="col-lg-6 col-md-12">
                        <div class="project_form_field split_in_two">
                            <div class="project_form_select m-0 mr-2">
                                <select
                                v-model="selectedPhoneCode"
                                class="project_form form-select codeCountry oncontact"
                                names="country_code"
                                id="country_code"
                                >
                                <option value="" disabled>Select Phone Code</option>

                                <option
                                    v-for="(country, id) in phoneCodes"
                                    :value="country.phone"
                                    :key="id"
                                >
                                    {{ country.name }} +{{ country.phone }}
                                </option>
                                </select>
                            </div>

                                <input
                                type="text"
                                v-model="phoneNumber"
                                placeholder="Phone number"
                                name="contact_number"
                                id="contact_number" class="filedPhone"
                                />
                            <input type="hidden" name="contact_details" :value="uploadedFiles" />
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

            <!-- <input
                                type="text"
                                v-model="phoneNumber"
                                placeholder="Phone number"
                                name="contact_number"
                                id="contact_number" class="filedPhone"
                                />  -->
            <!-- <input type="hidden" name="contact_details" :value="uploadedFiles" />  -->
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="tel"
              v-model="formData.phone_number"
              name="phone_number"
              id="phone_number"
              placeholder="Contact No*"
            />
          </div>
        </div>

        <!-- <div class="col-lg-6 col-md-12">
                        <div class="project_form_select">
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                v-model="formData.hiring_type"
                                name="hiring_type"
                                id="hiring_type"
                            >
                                <option value="dedicated_developer">Hire Dedicated Developers</option>
                                <option value="dedicated">Hire Dedicated</option>
                                <option value="developers">Hire Developers</option>
                            </select>
                        </div>
                    </div> -->

        <!-- <div class="col-lg-6 col-md-12">
                        <div class="project_form_select">
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                v-model="formData.budget"
                                name="budget"
                                id="budget"
                            >
                                <option value="below_10K">Below $10K</option>
                                <option value="above_10K">Above $10K</option>
                            </select>
                        </div>
                    </div> -->

        <div class="col-lg-12 col-md-12">
          <div class="project_form_textarea">
            <textarea
              name="details"
              id="details"
              v-model="formData.details"
              placeholder="Message*"
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
                ref="fileInput"
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
        country_code: "",
        phone_number: "",
        phoneCodes: [],
        selectedPhoneCode: "",
        // phoneNumber: "",
        // hiring_type: "dedicated_developer",
        // budget: "below_10K",
        details: "",
        document: null,
      },
    };
  },
  created() {
    this.fetchPhoneCodes();
  },
  methods: {
    handleFileChange(event) {
      const file = event.target.files[0];
      this.formData.document = file;

      this.$refs.fileInput.value = "";
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
      // form.append("country_code", this.formData.selectedPhoneCode);
      //form.append("phone", this.formData.phone_number);
      form.append(
        "phone",
        `${this.formData.selectedPhoneCode}${this.formData.phone_number}`
      );
      //   form.append("hiring_type", this.formData.hiring_type);
      //   form.append("budget", this.formData.budget);
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
              country_code: "",
              phone_number: "",
              phoneCodes: [],
              selectedPhoneCode: "",
              //   hiring_type: "",
              //   budget: "",
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
