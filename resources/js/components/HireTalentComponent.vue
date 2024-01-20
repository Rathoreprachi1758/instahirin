<template>
  <form enctype="multipart/form-data" @submit.prevent="submitForm" id="hire_developer">
    <input type="hidden" :value="expertId" name="expert" />
    <!-- <input type="text" :value="userId" name="userid" /> -->
    <!-- <input type="hidden" v-model="localExpertId" name="name" /> -->

    <input type="hidden" :value="csrfToken" name="_token" />
    <!-- Success & Failure Messages -->
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
      <!-- Form -->
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <!-- name -->
          <div class="project_form_field">
            <input
              type="text"
              required
              placeholder="Name*"
              name="name"
              id="name"
              @input="validateField('name')"
              v-model="name"
              ref="nameField"
            />
            <input type="text" value="" name="source" id="source" hidden readonly />
          </div>
          <!-- name error -->
          <div class="error-message" ref="nameError">{{ validationErrors.name }}</div>
        </div>

        <!-- country code -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field split_in_two">
            <div class="project_form_select mt-0 mb-0 mr-0">
              <select
                class="form-select codeCountry m-0 pr-0 pl-2"
                required
                v-model="country_code"
                id="country_code"
                name="country_code"
                @change="validateField('country_code')"
                ref="country_codeField"
              >
                <option value="">Country code</option>
                <option v-for="item in countries" :value="item.phone" :key="item.phone">
                  {{ item.name }} +{{ item.phone }}
                </option>
              </select>
            </div>
            <!-- phone -->
            <input
              type="text"
              required
              placeholder="Phone / Skype / Whatsapp"
              v-model="phone"
              name="phone"
              id="phone"
              @input="validateField('phone')"
              ref="phoneField"
            />
          </div>
          <div class="row">
            <!-- country code error -->
            <div class="error-message col-lg-6 col-md-12" ref="country_codeError">
              {{ validationErrors.country_code }}
            </div>
            <!-- phone error -->
            <div class="error-message col-lg-6 col-md-12" ref="phoneError">
              {{ validationErrors.phone }}
            </div>
          </div>
        </div>

        <!-- company name -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              v-model="company"
              placeholder="Company Name "
              name="company"
              id="company"
              @input="validateField('company')"
              ref="companyField"
            />
          </div>
          <!-- company error -->
          <div class="error-message" ref="companyError">
            {{ validationErrors.company }}
          </div>
        </div>

        <!-- email -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              v-model="email"
              required
              placeholder="Enter business email*"
              name="email"
              id="email"
              @input="validateField('email')"
              ref="emailField"
            />
          </div>
          <!-- email error -->
          <div class="error-message" ref="emailError">
            {{ validationErrors.email }}
          </div>
        </div>

        <!-- website -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <input
              type="text"
              v-model="website"
              placeholder="Website (if Available)"
              name="website"
              id="website"
              @input="validateField('website')"
              ref="websiteField"
            />
          </div>
          <!-- website error -->
          <div class="error-message" ref="websiteError">
            {{ validationErrors.website }}
          </div>
        </div>

        <!-- address -->
        <div class="col-lg-6 col-md-12">
          <div class="project_form_field">
            <!-- <input type="text" value="" placeholder="Address" name="address" id="address" /> -->
            <GoogleAddressAutocomplete
              apiKey="AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc"
              v-model="address"
              name="address"
              css-class="css-class-here"
              placeholder="Write your company address"
            />
          </div>
        </div>

        <!-- message -->
        <div class="col-lg-12 col-md-12">
          <!-- <div class="project_form_textarea">
          <textarea placeholder="Description....." name="message" id="message"></textarea>
        </div> -->
          <!-- Textarea for the description -->
          <div class="project_form_textarea">
            <textarea
              placeholder="Description....."
              name="message"
              id="message"
              v-model="message"
              @input="validateField('message')"
              ref="messageField"
              maxlength="5000"
            ></textarea>
            <!-- Character count and "limit reached" message -->
            <div id="character-count" :class="{ 'limit-reached': isLimitReached }">
              <span id="current">{{ characterCount }}</span>
              <span id="maximum">/ 5000</span>
            </div>
          </div>
          <!-- message error -->
          <div class="error-message" ref="messageError">
            {{ validationErrors.message }}
          </div>
        </div>

        <!-- hire type -->
        <div class="col-lg-12 col-md-12">
          <div class="project_form_select">
            <select
              class="form-select"
              required
              aria-label="Default select example"
              name="hiring_type"
              id="hiring_type"
              v-model="hiring_type"
              @change="validateField('hiring_type')"
              ref="hiring_typeField"
            >
              <option value="" selected disabled>
                Hire Periods (Full Time, Part Time, Daily, Weekly, Periods) Please Select
              </option>
              <option value="Full Time">Full Time</option>
              <option value="Part Time">Part Time</option>
              <option value="Daily">Daily</option>
              <option value="Weekly">Weekly</option>
              <option value="Period">Period</option>
            </select>
          </div>
          <!-- hiring_type error -->
          <div class="error-message" ref="hiring_typeError">
            {{ validationErrors.hiring_type }}
          </div>
        </div>

        <!-- From & To Date -->
        <div class="col-lg-12 col-md-12">
          <div class="dateTime_range">
            <label>Expected Start Date*</label>
            <div class="project_form_field ml-3">
              <input
                type="date"
                placeholder="Calendar"
                name="from_date"
                v-model="from_date"
                @change="validateField('from_date')"
                ref="from_dateField"
              />
            </div>
          </div>
          <!-- form_date error -->
          <div class="error-message" ref="from_dateError">
            {{ validationErrors.from_date }}
          </div>
        </div>

        <!-- Virtual Meeting -->
        <div class="col-lg-12 col-md-12">
          <div class="scheduleCheckbox onFormCheck">
            <label class="checkbox-label">
              <input
                type="checkbox"
                name="virtual_assistance_call"
                v-model="virtual_assistance_call"
              />
              <span class="checkbox-custom rectangular"></span>
              Schedule a Virtual Interview
            </label>
          </div>
        </div>

        <!-- availability -->
        <div
          class="col-lg-12 col-md-12"
          v-for="(calender1, index1) in calenders1"
          :key="index1"
        >
          <div class="dateTime_range">
            <label style="min-width: 90px">Availability</label>
            <div class="project_form_field">
              <input
                type="date"
                v-model="calenders1[index1].availability_date"
                placeholder="Calendar"
                name="availability_date[]"
              />
            </div>
            <div class="project_form_field ml-5">
              <input
                type="time"
                v-model="calenders1[index1].availability_time_from"
                placeholder="Time"
                id="timePicker"
                name="availability_time_from[]"
              />
            </div>
            <label class="text-center">To</label>
            <div class="project_form_field">
              <input
                type="time"
                v-model="calenders1[index1].availability_time_to"
                placeholder="Time"
                name="availability_time_to[]"
              />
            </div>
            <!-- Time Zone -->
            <label class="text-center m-3">Time zone</label>
            <div class="project_form_field">
              <div class="project_form_select">
                <select
                  type="text"
                  v-model="calenders1[index1].availability_time_zone"
                  class="form-select codeCountry"
                  name="availability_time_zone[]"
                  id="availability_time_zone"
                >
                  <option value="" selected disabled>Time Zone</option>
                  <option
                    v-for="(timezone, id) in timezones"
                    :value="timezone.label"
                    :key="id"
                  >
                    {{ timezone.label }} {{ timezone.value }}
                  </option>
                </select>
              </div>
            </div>

            <div class="addDeleteBtn" v-if="index1 > 0">
              <a href="javascript:void(0)" @click="remove1(index1)" class="text-danger"
                ><i class="fa fa-times-circle" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <div class="addCallender">
            <a href="javascript:void(0)" @click="addMore1()" class="btn_default"
              >Add Calender</a
            >
          </div>
        </div>

        <!-- Documents -->
        <div class="col-lg-12 col-md-12">
          <div class="addFile_button onHiredetailPage">
            <div class="addFile">
              <strong>Upload supporting documents. if have!</strong>
              <input
                type="file"
                name="document"
                @change="handleFileUpload"
                ref="fileInput"
              />
            </div>
          </div>
          <div class="error-message" v-if="errorMessage">{{ errorMessage }}</div>
        </div>

        <!-- Subscription -->
        <div class="col-lg-12 col-md-12">
          <div class="scheduleCheckbox onFormCheck">
            <label class="checkbox-label">
              <input
                type="checkbox"
                name="term_of_use"
                v-model="term_of_use"
                @change="validateField('term_of_use')"
                ref="term_of_useField"
              />
              <span class="checkbox-custom rectangular"></span>
              By clicking “Sign Up” you agree to Bizionic Technologies and Marketing
              Solution’s <a href="#">Term of Use</a> and
              <a href="/industries/industries-we-serve/industries/privacy-policy"
                >Privacy Statement</a
              >
              .
            </label>
            <!-- term_of_use error -->
            <div class="error-message" ref="term_of_useError">
              {{ validationErrors.term_of_use }}
            </div>

            <label class="checkbox-label">
              <input type="checkbox" name="future_promotion" v-model="future_promotion" />
              <span class="checkbox-custom rectangular"></span>
              Please tick this box if you are happy for us to send you future promotions,
              offers and communication.
            </label>
            <!-- future_promotion error -->
          </div>
        </div>

        <!--No Obligation Button -->
        <div class="col-lg-12 col-md-12">
          <div class="project_form_submit pt-4">
            <input
              type="button"
              value="Get a No-Obligation Meeting"
              class="btn_default"
              @click="submitForm"
            />
          </div>
        </div>
      </div>
    </div>
  </form>
</template>

<style scoped>
/* #success,
    #failure {
        display: none;
    } */

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
import GoogleVue from "vue3-google-address-autocomplete";
import GoogleAddressAutocomplete from "vue3-google-address-autocomplete";
export default {
  components: {
    // GoogleVue,
    GoogleAddressAutocomplete,
  },
  mounted() {
    this.fetchTimezones();
    var pathArray = window.location.pathname.split("/");
    var page = pathArray[pathArray.length - 1];
    var pageText = page.replaceAll("-", " ");

    $(".page-dev").html(pageText);
    console.log("Hire Talent Component mounted.");
    console.log('this is user id',userId);
    document.getElementById("source").value = pageText;
    console.log($("#source").val());
  },
  props: {
    countries: Object,
    // expertId: Number,
    expertId: {
      type: Number,
      default: null,
    },
    userId:{
      type: Number,
      default: null,
    }
  },
  data() {
    return {
      //   expertId: "{{$expert->id}}",
      userId : this.userId,
      localExpertId: this.expertId,
      csrfToken: "{{ csrf_token() }}",
      subscribe: {
        name: "",
        email: "",
      },
      calenders1: [
        {
          calenderName1: "",
          availability_date: null,
          availability_time_from: null,
          availability_time_to: null,
          availability_time_zone: null,
        },
      ],
      country_code: "",
      phone: "",
      company: "",
      website: "",
      hiring_type: "",
      from_date: "",
      address: "",
      selectedTimezone: [],
      nameError: "",
      message: "",
      characterCount: 0,
      limitReached: false,
      description: "",
      // document
      document: "", // extra
      selectedFile: null,
      maxSize: 5 * 1024 * 1024, // 5MB in bytes
      errorMessage: "",
      // checkboc virtual call
      virtual_assistance_call: "No",
      // checkboc term of use
      term_of_use: false,
      // checkboc future promotion
      future_promotion: false,
      //   Error Validation
      validationErrors: {
        name: "",
        country_code: "",
        phone: "",
        company: "",
        email: "",
        website: "",
        message: "",
        hiring_type: "",
        from_date: "",
        // document: "",
        term_of_use: "",
        // future_promotion: "",
      },
    };
  },
  computed: {
    characterCount() {
      return this.message.length;
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
    // still to implement
    // addAvailabilityEntry() {
    //   this.calenders1.push({
    //     availability_date: [],
    //     availability_time_from: [],
    //     availability_time_to: [],
    //     availability_time_zone: [],
    //   });
    // },
    // removeAvailabilityEntry(index) {
    //   this.calenders1.splice(index, 1);
    // },

    // Perform validation based on the field
    validateField(field) {
      this.validationErrors[field] = "";

      //   name filed validation
      if (field === "name") {
        if (!this.name) {
          this.validationErrors.name = "Name is required.";
        } else {
          const regex = /^[a-zA-Z\s]*$/;
          if (!regex.test(this.name)) {
            this.validationErrors.name = "Name can only contain alphabets and spaces.";
          }
        }
      }

      //   country code validation
      if (field === "country_code") {
        if (!this.country_code) {
          this.validationErrors.country_code = "Country code is required.";
        }
      }

      //   phone validation
      if (field === "phone") {
        if (!this.phone) {
          this.validationErrors.phone = "Phone is required.";
        }
      }

      //   company validation
      if (field === "company") {
        if (!this.company) {
          this.validationErrors.company = "Company is required.";
        }
      }

      //   email validation
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

      //   website validation
      if (field === "website") {
        if (!this.website) {
          this.validationErrors.website = "Website is required.";
        }
      }

      //   address validation
      if (field === "address") {
        if (!this.address) {
          this.validationErrors.address = "Address is required.";
        } else {
          this.validationErrors.address = ""; // Clear the error message
        }
      }

      //   message validation
      if (field === "message") {
        if (this.message.length === 0) {
          this.validationErrors.message = "Message is required.";
        } else if (this.message.length >= 5000) {
          this.validationErrors.message = "Character limit reached (5000 characters).";
        } else {
          this.validationErrors.message = "";
        }
      }

      //   hiring_type validation
      if (field === "hiring_type") {
        if (!this.hiring_type) {
          this.validationErrors.hiring_type = "Hiring type is required.";
        }
      }

      //   from_date validation
      if (field === "from_date") {
        if (!this.from_date) {
          this.validationErrors.from_date = "From date is required.";
        }
      }

      //   term_of_use error
      if (field === "term_of_use" && !this.term_of_use) {
        this.validationErrors.term_of_use = "Please accept the term of use.";
      } else {
        this.validationErrors.term_of_use = ""; // Clear the error when checked
      }

      //   future_promotion error
      //   if (field === "future_promotion" && !this.future_promotion) {
      //     this.validationErrors.future_promotion = "Please accept the future promotion.";
      //   } else {
      //     this.validationErrors.future_promotion = ""; // Clear the error when checked
      //   }
    },

    addMore() {
      this.calenders.push({
        calenderName: "",
      });
    },
    remove(index) {
      this.calenders.splice(index, 1);
    },
    addMore1() {
      this.calenders1.push({
        calenderName1: "",
      });
    },
    remove1(index1) {
      this.calenders1.splice(index1, 1);
    },
    subscription() {
      // Send subscribe form data to the backend
      // console.log(this.subscribe);
      axios
        .post("/subscribe", this.subscribe)
        .then((response) => {
          // console.log(response);

          if (response.status === 200) {
            this.showSuccessMessage();
            this.subscribe.name = "";
            this.subscribe.email = "";
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

    // get timezones
    fetchTimezones() {
      axios
        .get("/api/v1/getTimezones")
        .then((response) => {
          this.timezones = response.data;
        })
        .catch((error) => {
          console.error("Error fetching time zones", error);
        });
    },

    // // validate file upload
    // validateFileUpload() {
    //   const fileInput = this.$refs.fileInput;

    //   if (!fileInput) {
    //     this.validationErrors.document = "File input element not found.";
    //     this.selectedFile = null;
    //     return;
    //   }

    //   const selectedFile = fileInput.files[0];

    //   if (!selectedFile) {
    //     this.validationErrors.document = "No file selected.";
    //     this.selectedFile = null;
    //     return;
    //   }

    //   if (selectedFile.size > this.maxSize) {
    //     this.validationErrors.document = "File size exceeds the 5MB limit.";
    //     this.selectedFile = null;
    //   } else {
    //     this.validationErrors.document = "";
    //     this.selectedFile = selectedFile;
    //   }
    // },

    //handle file upload
    handleFileUpload(event) {
      const selectedFile = event.target.files[0];
      if (selectedFile) {
        if (selectedFile.size <= this.maxSize) {
          this.selectedFile = selectedFile;
          this.errorMessage = ""; // Clear any previous error message
        } else {
          this.selectedFile = null;
          this.errorMessage = "File size exceeds the 5MB limit.";
        }
      } else {
        this.selectedFile = null;
        this.errorMessage = "No file selected.";
      }
    },

    // form submit
    submitForm(event) {
      event.preventDefault();

      // Trigger validation for all fields
      for (const field in this.validationErrors) {
        this.validateField(field);
      }

      // Check if there are any validation errors
      if (this.hasValidationErrors) {
        this.scrollAndFocusOnErrorField();
        return;
      }

      const formData = new FormData();
      formData.append("expert", this.localExpertId);
      formData.append("userid",this.userId);
      formData.append("name", this.name);
      formData.append("country_code", this.country_code);
      formData.append("phone", this.phone);
      formData.append("company", this.company);
      formData.append("email", this.email);
      formData.append("website", this.website);
      formData.append("address", this.address);
      formData.append("message", this.message);
      formData.append("hiring_type", this.hiring_type);
      formData.append("from_date", this.from_date);
      formData.append("virtual_assistance_call", this.virtual_assistance_call);
      formData.append("term_of_use", this.term_of_use);
      formData.append("future_promotion", this.future_promotion);

      // Append the file
      if (this.selectedFile) {
        formData.append("document", this.selectedFile);
      }

      // Append the availability
      this.calenders1.forEach((calender1) => {
        formData.append("availability_date[]", calender1.availability_date);
        formData.append("availability_time_from[]", calender1.availability_time_from);
        formData.append("availability_time_to[]", calender1.availability_time_to);
        formData.append("availability_time_zone[]", calender1.availability_time_zone);
      });

      // Send the form data to the backend
      axios
        .post("/hire", formData)
        .then((response) => {
          console.log(response);

          if (response.status === 200) {
            this.showSuccessMessage();
            this.subscribe.name = "";
            this.subscribe.email = "";
            this.country_code = "";
            this.phone = "";
            this.company = "";
            this.website = "";
            this.address = "";
            this.message = "";
            this.hiring_type = "";
            this.from_date = "";
            this.virtual_assistance_call = "";
            this.term_of_use = "";
            this.future_promotion = "";
            this.calenders1.availability_date = "";
            this.calenders1.availability_time_from = "";
            this.calenders1.availability_time_to = "";
            this.calenders1.availability_time_zone = "";
            this.selectedFile = null;
            this.errorMessage = "";

            // alert("Form submitted successfully.");
          }
        })
        .catch((error) => {
          this.showFailureMessage();
          //   alert("Error submitting form.");
        });
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