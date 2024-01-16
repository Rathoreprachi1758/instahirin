<template>
  <form
    :action="formAction"
    method="POST"
    enctype="multipart/form-data"
    id="hire_developer"
    @submit.prevent="onFormSubmit"
  >
    <!-- @csrf -->
    <!-- {!! csrf_field() !!} -->
    <input type="hidden" name="_token" :value="csrfToken" />

    <div class="mainForm_fr">
      <div class="custom_tittle text-left">
        <h2 class="">
          Open The <strong>Door</strong> To Endless Working
          <strong>Opportunities</strong> For Talent And Freelancers
          <strong>Across</strong> The Globe.
        </h2>
        <p class="p_color">Please fill the initial information for prescreening.</p>
      </div>
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

      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Full Name</strong>
            <div class="project_form_field">
              <input
                type="text"
                placeholder=""
                name="name"
                id="name"
                v-model="name"
                @input="validateField('name')"
                ref="nameField"
              />
            </div>
            <!-- name error -->
            <div class="error-message" ref="nameError">{{ validationErrors.name }}</div>
          </div>
        </div>

        <!-- Contact Details -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Contact Details</strong>
            <div class="row project_form_field">
              <!-- country code -->
              <div class="col-lg-6 col-md-6 p-0 onForm_col">
                <select
                  v-model="selectedPhoneCode"
                  class="project_form"
                  names="country_code"
                  id="country_code"
                  @change="validateField('selectedPhoneCode')"
                  ref="selectedPhoneCodeField"
                >
                  <option value="" disabled>Country Code</option>
                  <!-- <option v-for="(code, id) in phoneCodes" :value="code" :key="id">
                    {{ code }}
                  </option> -->
                  <option
                    v-for="(country, id) in phoneCodes"
                    :value="country.phone"
                    :key="id"
                  >
                    {{ country.name }} +{{ country.phone }}
                  </option>
                </select>
              </div>
              <!-- number -->
              <div class="col-lg-6 col-md-6 p-0">
                <input
                  type="text"
                  v-model="phoneNumber"
                  placeholder="Phone number"
                  name="contact_number"
                  id="contact_number"
                  @input="validateField('phoneNumber')"
                  ref="phoneNumberField"
                />
              </div>
              <!-- <input type="hidden" name="contact_details" :value="uploadedFiles" /> -->
              <!-- errors -->
              <div class="row m-0">
                <!-- country code error -->
                <div
                  class="error-message col-lg-6 col-md-12"
                  ref="selectedPhoneCodeError"
                >
                  {{ validationErrors.selectedPhoneCode }}
                </div>
                <!-- contact_number error -->
                <div class="error-message col-lg-6 col-md-12" ref="phoneNumberError">
                  {{ validationErrors.phoneNumber }}
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Email  -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Email Address</strong>
            <div class="project_form_field">
              <input
                type="email"
                placeholder=""
                name="email"
                id="email"
                v-model="email"
                @input="validateField('email')"
                ref="emailField"
              />
            </div>
            <!-- email error -->
            <div class="error-message" ref="emailError">
              {{ validationErrors.email }}
            </div>
          </div>
        </div>

        <!-- Current Location -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Current Location</strong>
            <div class="project_form_field">
              <!-- <vue-google-autocomplete
                ref="current_location"
                id="map"
                types="geocode"
                placeholder="Write your address"
                v-model="current_location.formatted_address"
                @placechanged="getAddressData"
              >
              </vue-google-autocomplete> -->
              <!-- <GoogleMapComponent
                id="map"
                types="geocode"
                placeholder="Write your address"
                v-model="current_location"
                @change="handlePlaceChanged"
              >
              </GoogleMapComponent> -->
              <!-- apiKey="AIzaSyDY1vginH3C8j_tCqQRwIyE7awXfUQk-ck" -->
              <GoogleVue
                apiKey="AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc"
                v-model="current_location"
                css-class="css-class-here"
                placeholder="current location"
              />
            </div>
          </div>
        </div>

        <!--Skill Description  -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Talent and Skills Brief Description (Max 5000 words):</strong>
            <div class="project_form_textarea">
              <textarea
                placeholder=" Briefly describe your skills and experience."
                name="skills_description"
                id="skills_description"
                v-model="skills_description"
                @input="validateField('skills_description')"
                ref="skills_descriptionField"
                maxlength="5000"
              ></textarea>
              <!-- Character count and "limit reached" message -->
              <div id="character-count" :class="{ 'limit-reached': isLimitReached }">
                <span id="current">{{ characterCount }}</span>
                <span id="maximum">/ 5000</span>
              </div>
            </div>
            <!-- message error -->
            <div class="error-message" ref="skills_descriptionError">
              {{ validationErrors.skills_description }}
            </div>
          </div>
        </div>

        <!-- Current Title -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Current Title:</strong>
            <div class="project_form_field">
              <input
                type="text"
                placeholder=""
                name="current_title"
                id="current_title"
                v-model="current_title"
                @input="validateField('current_title')"
                ref="current_titleField"
              />
            </div>
            <!-- current_title error -->
            <div class="error-message" ref="current_titleError">
              {{ validationErrors.current_title }}
            </div>
          </div>
        </div>

        <!-- Experience Year  -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Total Work Experience:</strong>
            <div class="project_form_select">
              <select
                class="form-select"
                aria-label="Default select example"
                name="experience_year"
                id="experience_year"
                v-model="experience_year"
                @change="validateField('experience_year')"
                ref="experience_yearField"
              >
                <option selected value="">Years</option>
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20+</option>
              </select>
            </div>
            <!-- hiring_type error -->
            <div class="error-message" ref="experience_yearError">
              {{ validationErrors.experience_year }}
            </div>
          </div>
        </div>

        <!-- Experience month  -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong></strong>
            <div class="project_form_select">
              <select
                class="form-select"
                aria-label="Default select example"
                name="experience_month"
                id="experience_month"
                v-model="experience_month"
                @change="validateField('experience_month')"
                ref="experience_monthField"
              >
                <option selected value="">Month</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
            </div>
            <!-- hiring_type error -->
            <div class="error-message" ref="experience_monthError">
              {{ validationErrors.experience_month }}
            </div>
          </div>
        </div>

        <!-- Key Skill -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Key Skills</strong>
            <div class="keySkils_info">
              <div class="project_form_textarea">
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

        <!-- Expert In -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Expert In:</strong>
            <div class="keySkils_info">
              <div class="project_form_textarea">
                <multiselect
                  v-model="selectedExpertise"
                  :options="expertise"
                  :multiple="true"
                  :searchable="true"
                  :loading="isLoadingExpertise"
                  :internal-search="true"
                  :clear-on-select="false"
                  track-by="id"
                  label="name"
                  placeholder="Type to search"
                  open-direction="bottom"
                  @search-change="onExpert"
                  class="custom-multiselect"
                  :max-height="400"
                >
                </multiselect>
              </div>
            </div>
            <input type="hidden" name="expert_in" :value="selectedExpertise" />
          </div>
        </div>

        <!-- Work With -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Also Work With:</strong>
            <div class="keySkils_info">
              <div class="project_form_textarea">
                <multiselect
                  v-model="selectedWorkWith"
                  :options="workWith"
                  :multiple="true"
                  :searchable="true"
                  :loading="isLoadingWorkWith"
                  :internal-search="true"
                  :clear-on-select="false"
                  track-by="id"
                  label="name"
                  placeholder="Type to search"
                  open-direction="bottom"
                  @search-change="onWork"
                  class="custom-multiselect"
                  :max-height="400"
                ></multiselect>
              </div>
            </div>
          </div>
          <input type="hidden" name="also_work_with" :value="selectedWorkWith" />
        </div>

        <!-- Last / Current Company -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Last/Current Company Name</strong>
            <div class="project_form_field">
              <input
                type="text"
                placeholder=""
                name="last_company"
                id="last_company"
                v-model="last_company"
                @input="validateField('last_company')"
                ref="last_companyField"
              />
            </div>
            <!-- last_company error -->
            <div class="error-message" ref="last_companyError">
              {{ validationErrors.last_company }}
            </div>
          </div>
        </div>

        <!-- location of Company -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Location</strong>
            <!-- <GoogleMapComponent
              v-model="company_location"
              css-class="css-class-here"
              placeholder="Write your company location"
            /> -->
            <!-- apiKey="AIzaSyAI4caNs9dzbHxSeT0gDuZFFRu1xAsA7N0" -->
            <div class="project_form_field">
              <GoogleAddressAutocomplete
                apiKey="AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc"
                v-model="company_location"
                css-class="css-class-here"
                placeholder="Write your company location"
              />
            </div>
          </div>
        </div>

        <!-- Currently Working Checkbox -->
        <div class="scheduleCheckbox pt-2 pl-3">
          <label class="checkbox-label"
            >Curently Working Here
            <input type="checkbox" v-model="currentlyWorking" />
            <span class="checkbox-custom rectangular ml-2"></span>
          </label>
        </div>

        <!-- Work Since Date  -->
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Working Since:</strong>
            <div class="project_form_field">
              <input
                type="date"
                placeholder=""
                name="working_since_date"
                id="working_since_date"
                v-model="working_since_date"
              />
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong></strong>
            <div class="project_form_field">
              <input
                :class="{ 'dimmed-overlay': currentlyWorking }"
                type="date"
                placeholder=""
                name="working_since_date2"
                id="working_since_date2"
                v-model="working_since_date2"
                :disabled="currentlyWorking"
              />
            </div>
          </div>
        </div>
        <input
                type="hidden"
                placeholder=""
                name="jobid"
                id="jobid"
                v-model="this.jobid"
                s
              />
        <!-- Salary Currency -->
        <div class="col-lg-3 col-md-12">
          <div class="onForm_col">
            <strong>Annual Salary:</strong>
            <div class="project_form_select">
              <select
                class="form-select"
                v-model="selectedCurrency"
                name="annual_salary_currency"
                id="annual_salary_currency"
                aria-label="Currency select"
              >
                <option value="USD">USD</option>
                <option value="INR">INR</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Salary Range -->
        <div class="col-lg-9 col-md-12">
          <div class="onForm_col">
            <strong></strong>
            <div class="project_form_select">
              <select
                class="form-select"
                v-model="selectedSalaryRange"
                name="annual_salary"
                id="annual_salary"
                aria-label="Salary range select"
              >
                <option value="" disabled selected>Select your range</option>
                <option
                  v-for="(range, index) in salaryOptions"
                  :key="index"
                  :value="range"
                >
                  {{ range }}
                </option>
              </select>
            </div>
          </div>
        </div>

        <!-- Highest Qualification -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Mention Your Highest Qualification:</strong>
            <div class="project_form_select">
              <select
                class="form-select"
                name="highest_qualification"
                id="highest_qualification"
                aria-label="Default select example"
                v-model="highest_qualification"
                @change="validateField('highest_qualification')"
                ref="highest_qualificationField"
              >
                <option value="" disabled selected>Select your qualification</option>
                <option>Any</option>
                <option>Post Graduation</option>
                <option>Graduation</option>
                <option>Doctorate</option>
              </select>
            </div>
            <!-- highest_qualification error -->
            <div class="error-message" ref="highest_qualificationError">
              {{ validationErrors.highest_qualification }}
            </div>
          </div>
        </div>

        <!-- Upload Document  -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Upload Your Documents:</strong>
            <div class="addFile_section">
              <div class="addFile">
                <input
                  type="file"
                  name="document"
                  id="document"
                  @change="handleFileChange"
                  ref="documentField"
                />
                <!-- error div for document -->
                <div class="error-message" ref="documentError">
                  {{ validationErrors.document }}
                </div>
                <!-- <file-upload
                  v-model="uploadedFiles"
                  ref="fileUpload"
                  :extensions="extensions"
                  :maxSize="maxSize"
                  :multiple="true"
                  @input-filter="inputFilter"
                  name="document[]"
                >
                  <button class="btn btn-info">Upload</button>
                </file-upload> -->

                <!-- <div class="" v-if="errorMessage">
                  {{ errorMessage }}
                </div> -->
                <strong class="p-0 pt-2">(File size max 5 MB)</strong>

                <!-- Display uploaded files with remove buttons -->
                <!-- <div class="uploaded-files">
                  <div
                    v-for="(file, index) in uploadedFiles"
                    :key="index"
                    class="uploaded-file"
                  >
                    {{ file.name }}
                    <a
                      href="javascript:void(0)"
                      class="text-danger"
                      @click="removeFile(index)"
                      style="
                        transform: scale(1.4);
                        display: inline-block;
                        margin-left: 10px;
                      "
                      ><i class="fa fa-times-circle" aria-hidden="true"></i
                    ></a>
                  </div>
                </div> -->
              </div>

              <!-- <div class="addDeleteBtn p-0">
                <a href="javascript:void(0)" class="p_color"
                  ><i class="fa fa-plus-circle" aria-hidden="true"></i
                ></a>
                <a href="javascript:void(0)" class="text-danger"
                  ><i class="fa fa-times-circle" aria-hidden="true"></i
                ></a>
              </div> -->

              <div class="followingDoc_list">
                <p>Kindly upload the following documents.</p>
                <ul>
                  <li>
                    <p>Updated Resume</p>
                  </li>
                  <li>
                    <p>Highest Education Certificate</p>
                  </li>
                  <li>
                    <p>Professional Training Certificates</p>
                  </li>
                  <li>
                    <p>Previous Employer's Reference Letters</p>
                  </li>
                  <li>
                    <p>Last Drawn Salary Slip</p>
                  </li>
                  <li>
                    <p>National ID / Driving Lisence</p>
                  </li>
                  <li>
                    <p>Any Other Supporting Documents</p>
                  </li>
                </ul>
                <p>Adding your details will assist in evaluating your credentials.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Notice Period -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col noticePeriod">
            <strong>Notice Period (To Join):</strong>
            <div class="keySkils_info">
              <div class="suggested_keySkills">
                <ul>
                  <li>
                    <span
                      ><div
                        class="oval-button"
                        @click="selectNoticePeriod('15 Days or less')"
                        :class="{ selected: selectedNoticePeriod === '15 Days or less' }"
                      >
                        15 Days or less
                      </div>
                    </span>
                  </li>
                  <li>
                    <span
                      ><div
                        class="oval-button"
                        @click="selectNoticePeriod('1 Month')"
                        :class="{ selected: selectedNoticePeriod === '1 Month' }"
                      >
                        1 Month
                      </div></span
                    >
                  </li>
                  <li>
                    <span
                      ><div
                        class="oval-button"
                        @click="selectNoticePeriod('2 Month')"
                        :class="{ selected: selectedNoticePeriod === '2 Month' }"
                      >
                        2 Month
                      </div></span
                    >
                  </li>
                  <li>
                    <span
                      ><div
                        class="oval-button"
                        @click="selectNoticePeriod('3 Month')"
                        :class="{ selected: selectedNoticePeriod === '3 Month' }"
                      >
                        3 Month
                      </div></span
                    >
                  </li>
                  <li>
                    <span
                      ><div
                        class="oval-button"
                        @click="selectNoticePeriod('More than 3 months')"
                        :class="{
                          selected: selectedNoticePeriod === 'More than 3 months',
                        }"
                      >
                        More than 3 Months
                      </div></span
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Availability -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Employment Type</strong>
            <div class="project_form_select">
              <select
                class="form-select"
                name="employment_type"
                id="employment_type"
                aria-label="Default select example"
                v-model="employment_type"
                @change="validateField('employment_type')"
                ref="employment_typeField"
              >
                <option disabled selected value="">
                  Full Time, PartTime, Daily, Weekly, Monthly, Hours, Project-Base, etc.
                </option>
                <option>Full Time</option>
                <option>Part Time</option>
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
            <!-- availability error -->
            <div class="error-message" ref="employment_typeError">
              {{ validationErrors.employment_type }}
            </div>
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

        <!-- Button -->
        <div class="col-lg-12 col-md-12">
          <div class="project_form_submit pt-3">
            <input
              type="button"
              class="btn_default"
              value="Apply for Job"
              @click="submitForm"
            />
          </div>
        </div>
        <input type="hidden" name="notice_period" v-model="selectedNoticePeriod" />
      </div>
    </div>
  </form>
</template>

<style scoped>
.error-message {
  color: red;
  font-size: 10px;
}

.project_form {
  border: 1px solid #ccc;
  padding: 10px;
  width: 100%;
  background-color: white;
  color: #333;
  height: 51px;
  font-size: 15px;
}

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

.oval-button {
  display: inline-block;
  padding: 5px 20px;
  background-color: white;
  border: 1px solid #ccc;
  cursor: pointer;
  border-radius: 30px;
  user-select: none;
  text-align: center;
  line-height: 30px;
}

.contract-button {
  display: inline-block;
  padding: 13px 16px;
  background-color: white;
  border: 1px solid #ccc;
  cursor: pointer;
  border-radius: 30px;
  user-select: none;
  text-align: center;
  line-height: 16px;
  font-size: 13px;
}

.contract-button2 {
  display: inline-block;
  padding: 6px 1px;
  background-color: white;
  border: 1px solid #ccc;
  cursor: pointer;
  border-radius: 30px;
  user-select: none;
  text-align: center;
  line-height: 15px;
  font-size: 13px;
}

.oval-button.selected {
  background-color: #19437a;
  color: #fff;
}

.selected {
  background-color: #19437a;
  color: white;
}

.dimmed-overlay {
  position: absolute;
  top: 0;
  left: 0;
  /* width: 100%;
  height: 100%; */
  background-color: rgba(0, 0, 0, 0.5);
  pointer-events: none;
  z-index: 1;
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
// window.csrfToken = "mXyhGMTmEasXYLZmDUm8NAnmRP9ufj74yTGIvqfR";
import { ref } from "vue";
import axios from "axios";
import Multiselect from "vue-multiselect";
import VueUploadComponent from "vue-upload-component";

import VueGoogleAutocomplete from "vue-google-autocomplete";
import GoogleAddressAutocomplete from "vue3-google-address-autocomplete";
import GoogleVue from "vue3-google-address-autocomplete";

export default {
  props: {
    formAction: {
      type: String,
      required: true,
    },
    jobid:{
      type: String,
      required: true,
    }
  },
  components: {
    Multiselect,
    FileUpload: VueUploadComponent,
    //GoogleMapComponent,
    VueGoogleAutocomplete,
    GoogleAddressAutocomplete,
    GoogleVue,
  },
  data() {
    return {
      csrfToken: window.csrfToken,
      calenders1: [
        {
          calenderName1: "",
          availability_date: null,
          availability_time_from: null,
          availability_time_to: null,
          availability_time_zone: null,
        },
      ],
      timezones: [],
      phoneCodes: [],
      employment_type: "",
      // Skill Section field
      skills: [],
      isLoadingSkills: false,
      // Expert In Section field
      expertise: [],
      isLoadingExpertise: false,
      //  Work with Section field
      workWith: [],
      //  Salary Section field
      isLoadingWorkWith: false,
      //   File Upload Section field
      extensions: ["pdf", "doc", "docx"],
      maxSize: 5 * 1024 * 1024, // 5 MB
      errorMessage: "",
      // Notice period selection
      selectedNoticePeriod: null,
      location: "",
      searchResults: [],
      service: null,

      document: "",

      // Storing values
      name: "",
      selectedPhoneCode: "",
      phoneNumber: "",
      email: "",
      current_location: "",
      skills_description: "",
      current_title: "",
      experience_year: "",
      experience_month: "",
      selectedSkills: [],
      selectedExpertise: [],
      selectedWorkWith: [],
      last_company: "",
      company_location: "",
      //   current_location: {
      //     formatted_address: "", // Initialize formatted_address
      //   },
      //   Checkbox
      currentlyWorking: false,
      working_since_date: "",
      working_since_date2: "",
      selectedCurrency: "USD",
      selectedSalaryRange: "",
      highest_qualification: "",
      uploadedFiles: [],
      selectedNoticePeriod: "",
      //   availability: "",
      is_suggestion_clicked: "No",
      limitReached: false,
      //    Error Validation
      validationErrors: {
        name: "",
        selectedPhoneCode: "",
        phoneNumber: "",
        email: "",
        skills_description: "",
        current_title: "",
        experience_year: "",
        experience_month: "",
        highest_qualification: "",
        last_company: "",
        availability: "",
        employment_type: "",
      },
    };
  },
  mounted() {
    this.fetchPhoneCodes();
    this.fetchTimezones();
    this.selectedSalaryRange = this.salaryOptions[0];

    this.$el.addEventListener("keydown", this.handleFormKeyDown);
     console.log('this is the job_id',this.jobid);
    // this.$refs.current_location.focus();
  },

  methods: {
    // Character Count
    // updateCharacterCount() {
    //   if (this.skills_description.length >= 5000) {
    //     this.skills_description = this.skills_description.substring(0, 5000);
    //     this.limitReached = true;
    //   } else {
    //     this.limitReached = false;
    //   }
    // },

    handleFileChange(event) {
      const file = event.target.files[0];
      this.document = file;
      // Reset the error message for the document field
      this.validationErrors.document = "";

      //trigger validation for the document field
      if (file) {
        this.validateField("document");
      }
    },

    // prevent default form change
    handleFormKeyDown(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
      }
    },

    // destroy the event listener
    beforeDestroy() {
      const form = this.$refs.myForm;
      form.removeEventListener("keydown", this.handleFormKeyDown);
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

    onExpert(query) {
      //   if (query.length >= 1) {
      this.isLoading = true;
      // Make an API request to fetch skills based on the query
      axios
        .get(`/api/v1/expertise?query=${query.toLowerCase()}`)
        .then((response) => {
          this.expertise = response.data;
          this.isLoading = false;
        })
        .catch((error) => {
          console.error("Error fetching skills", error);
          this.isLoading = false;
        });
      //   }
    },

    // Fetch skills from the server
    onWork(query) {
      //   if (query.length >= 1) {
      this.isLoading = true;
      // Make an API request to fetch skills based on the query
      axios
        .get(`/api/v1/workWith?query=${query.toLowerCase()}`)
        .then((response) => {
          this.workWith = response.data;
          this.isLoading = false;
        })
        .catch((error) => {
          console.error("Error fetching skills", error);
          this.isLoading = false;
        });
      //   }
    },

    // Validate the file size and extension
    inputFilter(newFile, oldFile, prevent) {
      //   console.log("New File:", newFile);
      if (newFile && (!oldFile || newFile.file !== oldFile.file)) {
        if (newFile.size > this.maxSize) {
          //console.log("File size exceeded the maximum limit.");
          this.$refs.fileUpload.remove(newFile);
          prevent();
          this.errorMessage = "File size exceeds the maximum limit (5 MB).";
          setTimeout(() => {
            this.errorMessage = "";
          }, 10000); // Remove the error message after 2 seconds
        }
        if (!this.extensions.includes(newFile.name.split(".").pop())) {
          //console.log("Invalid file format.");
          this.$refs.fileUpload.remove(newFile);
          prevent();
          this.errorMessage = "Invalid file format. Allowed formats: PDF, DOC, DOCX.";
          setTimeout(() => {
            this.errorMessage = "";
          }, 10000); // Remove the error message after 2 seconds
        }
      }
    },

    // Remove a file from the uploadedFiles array
    removeFile(index) {
      this.uploadedFiles.splice(index, 1);
    },

    // Notice period selection
    selectNoticePeriod(noticePeriod) {
      this.selectedNoticePeriod = noticePeriod;
    },

    // Suggestion Click
    handleSuggestionClick() {
      if (this.is_suggestion_clicked === "No") {
        this.is_suggestion_clicked = "Yes";
      } else {
        this.is_suggestion_clicked = "No";
      }
    },

    // Validate the form fields
    validateField(field) {
      this.validationErrors[field] = "";

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
      if (field === "selectedPhoneCode") {
        if (!this.selectedPhoneCode) {
          this.validationErrors.selectedPhoneCode = "Country code is required.";
        }
      }

      //   phone number validation
      if (field === "phoneNumber") {
        if (!this.phoneNumber) {
          this.validationErrors[field] = "Phone number is required.";
        }
      }

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

      if (field === "skills_description") {
        if (this.skills_description.length === 0) {
          this.validationErrors.skills_description = "Message is required.";
        } else if (this.skills_description.length >= 5000) {
          this.validationErrors.skills_description =
            "Character limit reached (5000 characters).";
        } else {
          this.validationErrors.skills_description = "";
        }
      }

      if (field === "current_title") {
        if (!this.current_title) {
          this.validationErrors.current_title = "Current title is required.";
        }
      }

      if (field === "experience_year") {
        if (!this.experience_year) {
          this.validationErrors.experience_year = "Experience year is required.";
        }
      }

      if (field === "experience_month") {
        if (!this.experience_month) {
          this.validationErrors.experience_month = "Experience month is required.";
        }
      }

      if (field === "highest_qualification") {
        if (!this.highest_qualification) {
          this.validationErrors.highest_qualification =
            "Highest qualification is required.";
        }
      }

      if (field === "last_company") {
        if (!this.last_company) {
          this.validationErrors.last_company = "Last company is required.";
        }
      }

      // document field validation
      // Validation for the document field
      if (field === "document") {
        const maxSize = 5 * 1024 * 1024; // 5 MB
        if (this.document.size > maxSize) {
          this.validationErrors.document = "File size should not exceed 5MB.";
        }
      }

      if (field === "employment_type") {
        if (!this.employment_type) {
          this.validationErrors.employment_type = "Employment Type is required.";
        }
      }
    },

    // Submit the form
    submitForm() {
      // Trigger validation for all fields
      for (const field in this.validationErrors) {
        this.validateField(field);
      }

      if (!this.document) {
        this.validationErrors.document = "Document is required.";
      }

      // Check if there are any validation errors
      if (this.hasValidationErrors) {
        this.scrollAndFocusOnErrorField();
        return;
      }

      // Prepare the form data
      const formData = new FormData();
      formData.append("name", this.name);
      formData.append("contact_details", `${this.selectedPhoneCode}${this.phoneNumber}`);
      formData.append("email", this.email);
      formData.append("current_location", this.current_location);
      formData.append("skills_description", this.skills_description);
      formData.append("current_title", this.current_title);
      formData.append("experience_year", this.experience_year);
      formData.append("experience_month", this.experience_month);
      formData.append("jobid",this.jobid);
      //   formData.append("key_skills", JSON.stringify(this.selectedSkills));
      //   formData.append("expert_in", JSON.stringify(this.selectedExpertise));
      //   formData.append("also_work_with", JSON.stringify(this.selectedWorkWith));
      formData.append(
        "key_skills",
        JSON.stringify(this.selectedSkills.map((skill) => skill.id))
      );

      formData.append(
        "expert_in",
        // this.selectedExpertise.map((expertise) => expertise.id)
        JSON.stringify(this.selectedExpertise.map((expertise) => expertise.id))
      );
      formData.append(
        "also_work_with",
        // this.selectedWorkWith.map((workWith) => workWith.id)
        JSON.stringify(this.selectedWorkWith.map((workWith) => workWith.id))
      );
      formData.append("last_company", this.last_company);
      formData.append("company_location", this.company_location);
      // Currently Working  Checkbox
      formData.append("currently_working_here", this.currentlyWorking ? "Yes" : "No");
      formData.append("working_since_date", this.working_since_date);
      formData.append("working_since_date2", this.working_since_date2);
      formData.append("annual_salary_currency", this.selectedCurrency);
      formData.append("annual_salary", this.selectedSalaryRange);
      formData.append("highest_qualification", this.highest_qualification);
      //   for (let i = 0; i < this.uploadedFiles.length; i++) {
      //     formData.append("document[]", this.uploadedFiles[i]);
      //   }
      formData.append("document", this.document);
      formData.append("notice_period", this.selectedNoticePeriod);
      formData.append("employment_type", this.employment_type);

      // Append the availability
      this.calenders1.forEach((calender1) => {
        formData.append("availability_date[]", calender1.availability_date);
        formData.append("availability_time_from[]", calender1.availability_time_from);
        formData.append("availability_time_to[]", calender1.availability_time_to);
        formData.append("availability_time_zone[]", calender1.availability_time_zone);
      });

      // Send a POST request to your Laravel route
      axios
        .post("/submitHireApplication", formData)
        .then((response) => {
          this.showSuccessMessage();
          //   console.log("Form submitted successfully");
          //   console.log("Form Data:", formData);
          //  reset form fields here
          this.name = "";
          this.selectedPhoneCode = "";
          this.phoneNumber = "";
          this.email = "";
          this.current_location = "";
          this.skills_description = "";
          this.current_title = "";
          this.experience_year = "";
          this.experience_month = "";
          this.selectedSkills = [];
          this.selectedExpertise = [];
          this.selectedWorkWith = [];
          this.last_company = "";
          this.company_location = "";
          this.currentlyWorking = "";
          this.working_since_date = "";
          this.working_since_date2 = "";
          this.selectedCurrency = "USD";
          this.selectedSalaryRange = "";
          this.highest_qualification = "";
          this.uploadedFiles = [];
          this.selectedNoticePeriod = "";
          this.employment_type = "";
          this.document = "";
          this.calenders1 = [
            {
              calenderName1: "",
              availability_date: null,
              availability_time_from: null,
              availability_time_to: null,
              availability_time_zone: null,
            },
          ];
          //this.calenders1.availability_date = "";
          //this.calenders1.availability_time_from = "";
          //this.calenders1.availability_time_to = "";
          //this.calenders1.availability_time_zone = "";
        })
        .catch((error) => {
          this.showFailureMessage();
          console.error("Error response from server:", error.response.data);
          console.error("Form submission failed:", error);
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

    // remove for calender
    remove1(index1) {
      this.calenders1.splice(index1, 1);
    },

    // add for calender
    addMore1() {
      this.calenders1.push({
        calenderName1: "",
      });
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
  },
  computed: {
    characterCount() {
      return this.skills_description.length;
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

    salaryOptions() {
      if (this.selectedCurrency === "USD") {
        return [
          "Between 0 to 50,000",
          "Between 50,000 to 100,000",
          "Between 100,000 to 500,000",
          "500,000 above",
        ];
      } else if (this.selectedCurrency === "INR") {
        return [
          "Between 0 to 100,000",
          "Between 100,000 to 10,00,000",
          "Between 10,00,000 to 25,00,000",
          "25,00,000 above",
        ];
      } else {
        return [];
      }
    },
    // displayValue() {
    //   // Return the text to display based on editing mode
    //   //   console.log(this.editingMonthlyRate);
    //   return this.editingMonthlyRate
    //     ? "Edit Monthly Rate:"
    //     : `${this.monthlyRateValue}/project`;
    // },
  },
  watch: {
    selectedCurrency() {
      const options = this.salaryOptions;
      if (options.length > 0) {
        this.selectedSalaryRange = options[0];
      } else {
        this.selectedSalaryRange = "";
      }
    },
  },
};
</script>
