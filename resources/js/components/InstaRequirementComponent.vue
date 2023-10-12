<template>
  <!-- <form
    action="{{ route('instaHirinRequirements') }}"
    method="POST"
    enctype="multipart/form-data"
    id="hire_developer"
    onsubmit="return false;"
  > -->
  <!-- @csrf -->

  <div class="project_form">
    <!-- Success and error messages -->
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
    <div class="row">
      <!-- Position Title -->
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Position Title:</strong>
          <div class="project_form_field">
            <input
              type="text"
              v-model="position_title"
              name="position_title"
              id="position_title"
              placeholder="IOS App Development"
            />
          </div>
        </div>
      </div>

      <!-- Work Mode -->
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Work Mode:</strong>
          <div class="project_form_select">
            <select
              class="form-select"
              v-model="work_mode"
              name="work_mode"
              id="work_mode"
              aria-label="Default select example"
            >
              <option selected></option>
              <option value="In Office">In Office</option>
              <option value="Remote">Remote</option>
              <option value="Hybrid">Hybrid</option>
              <option value="Flexi Work">Flexi Work</option>
              <option value="Job Sharing">Job Sharing</option>
              <option value="Limited Contract">Limited Contract</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Project Description -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Skills / Project Descriptions:</strong>
          <div class="project_form_textarea">
            <textarea
              placeholder="...."
              v-model="project_description"
              name="project_description"
              id="project_description"
            ></textarea>
          </div>
        </div>
      </div>

      <!-- Key Skills -->
      <div class="col-lg-12 col-md-12">
        <div class="onForm_col">
          <strong class="req_lable">Key Skills:</strong>
          <div class="keySkils_info">
            <div class="project_form_textarea">
              <!-- <input
              type="text"
              v-model="key_skills"
              placeholder="Specify the key skills required"
              name="key_skills"
              id="key_skills"
            /> -->
              <multiselect
                v-model="selectedSkills"
                :options="skills"
                :multiple="true"
                :searchable="true"
                :loading="isLoadingSkills"
                :internal-search="true"
                :clear-on-select="false"
                track-by="id"
                label="name"
                placeholder="Type to search"
                open-direction="bottom"
                @search-change="onSearch"
                class="custom-multiselect"
                :max-height="400"
              >
              </multiselect>
            </div>
          </div>
          <input type="hidden" name="key_skills" :value="selectedSkills" />
        </div>
      </div>

      <!-- Work Experience -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Work Experience (Years):</strong>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="requireForm_lable">
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="min_experience"
              name="min_experience"
              id="min_experience"
            >
              <option selected value="">Min</option>
              <!-- @for($i = 1;$i<16;$i++)
                <option value="{{$i}}">{{ $i }}</option>
                @endfor -->
              <option v-for="i in 15" :key="i" :value="i">
                {{ i }}
              </option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-1 col-md-1 p-0">
        <label class="text-center d-block mt-3">To</label>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="requireForm_lable">
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="max_experience"
              name="max_experience"
              id="max_experience"
            >
              <option selected value="">Max</option>
              <!-- @for($i = 1;$i<16;$i++)
                <option value="{{$i}}">{{ $i }}</option>
                @endfor -->
              <option v-for="i in 15" :key="i" :value="i">
                {{ i }}
              </option>
            </select>
          </div>
        </div>
      </div>

      <!-- Employment Role Type -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Employment Role/Type:</strong>
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="employment_type"
              name="employment_type"
              id="employment_type"
            >
              <option selected>Full Time</option>
              <option>Part-Time</option>
              <option>Project Base</option>
              <option>Hourly</option>
              <option>On-Site</option>
              <option>Freelancing</option>
              <option>Contract</option>
              <option>Shift</option>
              <option>Consulting</option>
              <option>Volunteer</option>
              <option>Internships</option>
            </select>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable"
            >Salary Range (Enter the Salary offered for this Job/Project):</strong
          >
        </div>
      </div>

      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Monthly / Project:</strong>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="salary_currency_monthly_project"
              name="salary_currency_monthly_project"
              id="salary_currency_monthly_project"
            >
              <option selected>USD</option>
              <option selected>INR</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_field">
            <input
              type="text"
              v-model="min_salary_monthly_project"
              placeholder="Min"
              name="min_salary_monthly_project"
              id="min_salary_monthly_project"
            />
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_field">
            <input
              type="text"
              v-model="max_salary_monthly_project"
              placeholder="Max"
              name="max_salary_monthly_project"
              id="max_salary_monthly_project"
            />
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Yearly:</strong>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="salary_currency_yearly"
              name="salary_currency_yearly"
              id="salary_currency_yearly"
            >
              <option selected>USD</option>
              <option selected>INR</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_field">
            <input
              type="text"
              placeholder="Min"
              v-model="min_salary_yearly"
              name="min_salary_yearly"
              id="min_salary_yearly"
            />
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_field">
            <input
              type="text"
              placeholder="Max"
              v-model="max_salary_yearly"
              name="max_salary_yearly"
              id="max_salary_yearly"
            />
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Hourly:</strong>
        </div>
      </div>
      <div class="col-lg-2 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="salary_currency_hourly"
              name="salary_currency_hourly"
              id="salary_currency_hourly"
            >
              <option selected>USD</option>
              <option selected>INR</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_field">
            <input
              type="text"
              placeholder="Min"
              v-model="min_salary_hourly"
              name="min_salary_hourly"
              id="min_salary_hourly"
            />
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-4">
        <div class="requireForm_lable">
          <div class="project_form_field">
            <input
              type="text"
              placeholder="Max"
              v-model="max_salary_hourly"
              name="max_salary_hourly"
              id="max_salary_hourly"
            />
          </div>
        </div>
      </div>

      <!-- Location -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Location:</strong>
          <div class="project_form_field">
            <!-- <input
              type="text"
              value=""
              placeholder="Add Location"
              name="location"
              id="location"
            /> -->
            <GoogleVue
              apiKey="AIzaSyDY1vginH3C8j_tCqQRwIyE7awXfUQk-ck"
              v-model="location"
              css-class="css-class-here"
              placeholder="Write your company location"
            />
          </div>
        </div>
      </div>

      <!-- Educational Qualification -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Educational Qualification:</strong>
          <div class="project_form_select">
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="education_qualification"
              name="education_qualification"
              id="education_qualification"
            >
              <option selected>Any</option>
              <option>Graduate</option>
              <option>Postgraduate</option>
              <option>Doctorate</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Company Name -->
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Company Name:</strong>
          <div class="project_form_field">
            <input
              type="text"
              placeholder=""
              v-model="company_name"
              name="company_name"
              id="company_name"
            />
          </div>
        </div>
      </div>

      <!-- Company Website -->
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Company Website:</strong>
          <div class="project_form_field">
            <input
              type="text"
              v-model="company_website"
              placeholder="www.example.com"
              name="company_website"
              id="company_website"
            />
          </div>
        </div>
      </div>

      <!-- Contract Person -->
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Contact Person:</strong>
          <div class="project_form_field">
            <input
              type="text"
              v-model="contact_person"
              placeholder=""
              name="contact_person"
              id="contact_person"
            />
          </div>
        </div>
      </div>

      <!-- Email -->
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Email Address:</strong>
          <div class="project_form_field">
            <input type="text" v-model="email" placeholder="" name="email" id="email" />
          </div>
        </div>
      </div>

      <!-- Contact -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Contact:</strong>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <div class="project_form_select">
            <!-- @php $countries = json_decode($countries); @endphp -->
            <select
              class="form-select"
              aria-label="Default select example"
              name="contact_no_country_code"
              id="contact_no_country_code"
              v-model="selectedPhoneCode"
            >
              <!-- <option value="">Country Code</option>
                @for($n=0;$n < count($countries);$n++)
                <option value="{{$countries[$n]->phone}}">
                  {{$countries[$n] -> name}}
                </option>
              @endfor -->
              <option value="" disabled>Country Code</option>
              <option
                v-for="(country, id) in phoneCodes"
                :value="country.phone"
                :key="id"
              >
                {{ country.name }} +{{ country.phone }}
              </option>
            </select>
          </div>
        </div>
      </div>

      <!-- Contact Number -->
      <div class="col-lg-6 col-md-12">
        <div class="requireForm_lable">
          <div class="project_form_field">
            <input
              type="text"
              v-model="contact_no"
              placeholder="Mobile / Whatsapp"
              name="contact_no"
              id="contact_no"
            />
          </div>
        </div>
      </div>

      <!-- Company Details -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Company Details:</strong>
          <div class="project_form_textarea">
            <textarea
              placeholder="...."
              name="company_details"
              id="company_details"
              v-model="company_details"
            ></textarea>
          </div>
        </div>
      </div>

      <!-- Company Address -->
      <div class="col-lg-12 col-md-12">
        <div class="requireForm_lable">
          <strong class="req_lable">Company Address:</strong>
          <div class="project_form_textarea">
            <textarea
              placeholder="...."
              name="company_address"
              id="company_address"
              v-model="company_address"
            ></textarea>
          </div>
        </div>
      </div>

      <!-- Document -->
      <div class="col-lg-12 col-md-12">
        <div class="addFile_button onHiredetailPage">
          <div class="addFile">
            <strong>Upload supporting documents, if have:</strong>
            <input type="file" name="document" id="document" @change="handleFileChange" />
          </div>

          <!-- AI Checkbox -->
          <div class="scheduleCheckbox onrequireForm">
            <label class="checkbox-label">
              <input
                type="checkbox"
                v-model="notify_ai_applicants"
                name="notify"
                id="notify"
              />
              <span class="checkbox-custom rectangular"></span>
              Notify me about Al-recommended applicants.
            </label>
          </div>

          <div class="project_form_submit d-block">
            <input
              type="button"
              value="Preview and Post"
              class="btn_default"
              @click="submitPost"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- </form> -->
</template>

<style scoped>
/* .project_form {
  border: 1px solid #ccc;
  padding: 10px;
  width: 100%;
  background-color: white;
  color: #333;
  height: 51px;
  font-size: 15px;
} */

.custom-multiselect .multiselect__content-wrapper {
  max-height: 200px;
  overflow-y: auto;
}

.custom-multiselect .multiselect__tags {
  border: 1px solid #ccc;
  padding: 5px;
  border-radius: 15px;
  background-color: #f0f0f0;
}

.custom-multiselect .multiselect__tag {
  margin-right: 5px;
}

.custom-multiselect {
  /* background-color: white;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px; */
  width: 100%;
  padding: 15px 20px;
  border: 1px solid #bcbec0;
  background: #fff;
}

/* .multiselect__tag {
  font-size: 11px;
  border-radius: 50px;
  background: #ccc;
  padding: 3px 8px 3px;
  margin-right: 10px;
  position: relative;
  color: black;
} */
</style>

<script>
// window.csrfToken = "mXyhGMTmEasXYLZmDUm8NAnmRP9ufj74yTGIvqfR";
import { ref } from "vue";
import axios from "axios";
import Multiselect from "vue-multiselect";
import GoogleVue from "vue3-google-address-autocomplete";

export default {
  //   props: {
  //     formAction: {
  //       type: String,
  //       required: true,
  //     },
  //   },
  components: {
    Multiselect,
    GoogleVue,
  },
  data() {
    return {
      position_title: "",
      work_mode: "",
      project_description: "",
      selectedSkills: [],
      skills: [],
      isLoadingSkills: false,
      min_experience: "",
      max_experience: "",
      employment_type: "",
      salary_currency_monthly_project: "",
      min_salary_monthly_project: "",
      max_salary_monthly_project: "",
      salary_currency_yearly: "",
      min_salary_yearly: "",
      max_salary_yearly: "",
      salary_currency_hourly: "",
      min_salary_hourly: "",
      max_salary_hourly: "",
      location: "",
      education_qualification: "",
      company_name: "",
      company_website: "",
      contact_person: "",
      email: "",
      selectedPhoneCode: "",
      phoneCodes: [],
      contact_no: "",
      company_details: "",
      company_address: "",
      document: "",
      notify_ai_applicants: false,
    };
  },
  mounted() {
    this.fetchPhoneCodes();
    // this.selectedSalaryRange = this.salaryOptions[0];

    // this.$el.addEventListener("keydown", this.handleFormKeyDown);

    // this.$refs.current_location.focus();
  },

  methods: {
    handleFileChange(event) {
      const file = event.target.files[0];
      this.document = file;
    },
    // // prevent default form change
    // handleFormKeyDown(event) {
    //   if (event.keyCode === 13) {
    //     event.preventDefault();
    //   }
    // },

    // // destroy the event listener
    // beforeDestroy() {
    //   const form = this.$refs.myForm;
    //   form.removeEventListener("keydown", this.handleFormKeyDown);
    // },

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

    onSearch(query) {
      //   if (query.length >= 1) {
      this.isLoading = true;
      // Make an API request to fetch skills based on the query
      axios
        .get(`/api/v1/skills?query=${query.toLowerCase()}`)
        .then((response) => {
          //   console.log("Response data:", response.data);
          this.skills = response.data;
          this.isLoading = false;
        })
        .catch((error) => {
          console.error("Error fetching skills", error);
          this.isLoading = false;
        });
      //   }
    },

    // onExpert(query) {
    //   //   if (query.length >= 1) {
    //   this.isLoading = true;
    //   // Make an API request to fetch skills based on the query
    //   axios
    //     .get(`/api/v1/expertise?query=${query.toLowerCase()}`)
    //     .then((response) => {
    //       this.expertise = response.data;
    //       this.isLoading = false;
    //     })
    //     .catch((error) => {
    //       console.error("Error fetching skills", error);
    //       this.isLoading = false;
    //     });
    //   //   }
    // },

    // // Fetch skills from the server
    // onWork(query) {
    //   //   if (query.length >= 1) {
    //   this.isLoading = true;
    //   // Make an API request to fetch skills based on the query
    //   axios
    //     .get(`/api/v1/workWith?query=${query.toLowerCase()}`)
    //     .then((response) => {
    //       this.workWith = response.data;
    //       this.isLoading = false;
    //     })
    //     .catch((error) => {
    //       console.error("Error fetching skills", error);
    //       this.isLoading = false;
    //     });
    //   //   }
    // },

    // // Validate the file size and extension
    // inputFilter(newFile, oldFile, prevent) {
    //   //   console.log("New File:", newFile);
    //   if (newFile && (!oldFile || newFile.file !== oldFile.file)) {
    //     if (newFile.size > this.maxSize) {
    //       //console.log("File size exceeded the maximum limit.");
    //       this.$refs.fileUpload.remove(newFile);
    //       prevent();
    //       this.errorMessage = "File size exceeds the maximum limit (5 MB).";
    //       setTimeout(() => {
    //         this.errorMessage = "";
    //       }, 10000); // Remove the error message after 2 seconds
    //     }
    //     if (!this.extensions.includes(newFile.name.split(".").pop())) {
    //       //console.log("Invalid file format.");
    //       this.$refs.fileUpload.remove(newFile);
    //       prevent();
    //       this.errorMessage = "Invalid file format. Allowed formats: PDF, DOC, DOCX.";
    //       setTimeout(() => {
    //         this.errorMessage = "";
    //       }, 10000); // Remove the error message after 2 seconds
    //     }
    //   }
    // },

    // // Remove a file from the uploadedFiles array
    // removeFile(index) {
    //   this.uploadedFiles.splice(index, 1);
    // },

    // // Suggestion Click
    // handleSuggestionClick() {
    //   if (this.is_suggestion_clicked === "No") {
    //     this.is_suggestion_clicked = "Yes";
    //   } else {
    //     this.is_suggestion_clicked = "No";
    //   }
    // },

    // Submit the form
    submitPost() {
      // Prepare the form data
      const formData = new FormData();
      formData.append("position_title", this.position_title);
      formData.append("work_mode", this.work_mode);
      formData.append("project_description", this.project_description);
      formData.append("key_skills", JSON.stringify(this.selectedSkills));
      formData.append("min_experience", this.min_experience);
      formData.append("max_experience", this.max_experience);
      formData.append("employment_type", this.employment_type);
      formData.append(
        "salary_currency_monthly_project",
        this.salary_currency_monthly_project
      );
      formData.append("min_salary_monthly_project", this.min_salary_monthly_project);
      formData.append("max_salary_monthly_project", this.max_salary_monthly_project);
      formData.append("salary_currency_yearly", this.salary_currency_yearly);
      formData.append("min_salary_yearly", this.min_salary_yearly);
      formData.append("max_salary_yearly", this.max_salary_yearly);
      formData.append("salary_currency_hourly", this.salary_currency_hourly);
      formData.append("min_salary_hourly", this.min_salary_hourly);
      formData.append("max_salary_hourly", this.max_salary_hourly);
      formData.append("location", this.location);
      formData.append("education_qualification", this.education_qualification);
      formData.append("company_name", this.company_name);
      formData.append("company_website", this.company_website);
      formData.append("contact_person", this.contact_person);
      formData.append("email", this.email);
      formData.append("contact_no_country_code", this.selectedPhoneCode);
      formData.append("contact_no", this.contact_no);
      formData.append("company_details", this.company_details);
      formData.append("company_address", this.company_address);
      formData.append("document", this.document);
      formData.append("notify_ai_applicants", this.notify_ai_applicants);

      // Send a POST request to your Laravel route
      axios
        .post("/insta-hirin-requirements", formData)
        .then((response) => {
          this.showSuccessMessage();
          //   console.log("Form submitted successfully");
          //   console.log("Form Data:", formData);
          //  reset form fields here
          this.position_title = "";
          this.work_mode = "";
          this.project_description = "";
          this.selectedSkills = [];
          this.min_experience = "";
          this.max_experience = "";
          this.employment_type = "";
          this.salary_currency_monthly_project = "";
          this.min_salary_monthly_project = "";
          this.max_salary_monthly_project = "";
          this.salary_currency_yearly = "";
          this.min_salary_yearly = "";
          this.max_salary_yearly = "";
          this.salary_currency_hourly = "";
          this.min_salary_hourly = "";
          this.max_salary_hourly = "";
          this.location = "";
          this.education_qualification = "";
          this.company_name = "";
          this.company_website = "";
          this.contact_person = "";
          this.email = "";
          this.selectedPhoneCode = "";
          this.contact_no = "";
          this.company_details = "";
          this.company_address = "";
          this.document = "";
          this.notify_ai_applicants = false;
        })
        .catch((error) => {
          this.showFailureMessage();
          console.error("Form submission failed:", error);
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
