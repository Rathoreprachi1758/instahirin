<template>
  <form
    :action="formAction"
    method="POST"
    enctype="multipart/form-data"
    id="hire_developer"
  >
    <!-- @csrf -->
    <!-- {!! csrf_field() !!} -->
    <input type="hidden" name="_token" :value="csrfToken" />

    <div class="mainForm_fr">
      <div class="custom_tittle text-left">
        <h2>
          <strong>Open the door to</strong> endless working
          <strong>opportunities with Bizionic InstaHirin.</strong>
        </h2>
        <p class="p_color">Please fill the initial information for prescreening.</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Full Name</strong>
            <div class="project_form_field">
              <input type="text" placeholder="" name="name" id="name" v-model="name" />
            </div>
          </div>
        </div>

        <!-- Contact Details -->

        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Contact Details</strong>
            <div class="row project_form_field">
              <!-- country code -->
              <div class="col-lg-3 col-md-3 p-0 onForm_col">
                <select
                  v-model="selectedPhoneCode"
                  class="project_form"
                  names="country_code"
                  id="country_code"
                >
                  <option value="" disabled>Select Phone Code</option>
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
              <div class="col-lg-9 col-md-9 p-0">
                <input
                  type="text"
                  v-model="phoneNumber"
                  placeholder="Phone number"
                  name="contact_number"
                  id="contact_number"
                />
              </div>
              <input type="hidden" name="contact_details" :value="uploadedFiles" />
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
              />
            </div>
          </div>
        </div>

        <!-- Current Location -->

        <div class="col-lg-6 col-md-12">
          <div class="onForm_col">
            <strong>Current Location</strong>
            <div class="project_form_field">
              <vue-google-autocomplete
                id="map"
                types="geocode"
                placeholder="Write your address"
                v-model="current_location"
                @place_changed="handlePlaceChanged"
              >
              </vue-google-autocomplete>
            </div>
          </div>
        </div>

        <!--Skill Description  -->

        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Talent and Skills Brief Description (Max 100 words):</strong>
            <div class="project_form_textarea">
              <textarea
                placeholder=" Briefly describe your skills and experience."
                name="skills_description"
                id="skills_description"
                v-model="skills_description"
              ></textarea>
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
              />
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
              />
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
            <div class="project_form_field">
              <GoogleAddressAutocomplete
                apiKey="AIzaSyDY1vginH3C8j_tCqQRwIyE7awXfUQk-ck"
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
              >
                <option value="" disabled selected>Select your qualification</option>
                <option selected>Post Graduation</option>
                <option>Graduation</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Upload Document  -->
        <div class="col-lg-12 col-md-12">
          <div class="onForm_col">
            <strong>Upload Your Documents:</strong>
            <div class="addFile_section">
              <div class="addFile">
                <file-upload
                  v-model="uploadedFiles"
                  ref="fileUpload"
                  :extensions="extensions"
                  :maxSize="maxSize"
                  :multiple="true"
                  @input-filter="inputFilter"
                  name="document[]"
                >
                  <button class="btn btn-info">Upload</button>
                </file-upload>

                <!-- hidden document field -->
                <!-- <input type="hidden" name="document[]" :value="uploadedFiles" /> -->
                <div class="" v-if="errorMessage">
                  {{ errorMessage }}
                </div>
                <strong class="p-0 pt-2">(File size max 5 MB)</strong>
                <!-- Display uploaded files with remove buttons -->
                <div class="uploaded-files">
                  <div
                    v-for="(file, index) in uploadedFiles"
                    :key="index"
                    class="uploaded-file"
                  >
                    {{ file.name }}
                    <!-- <span
                      type="button"
                      class="remove-file btn btn-danger"
                      @click="removeFile(index)"
                      ></span> -->
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
                </div>
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
            <strong>Availability</strong>
            <div class="project_form_select">
              <select
                class="form-select"
                name="availability"
                id="availability"
                aria-label="Default select example"
                v-model="availability"
              >
                <option selected value="">
                  Full Time, PartTime, Daily, Weekly, Monthly, Hours, Project-Base, etc.
                </option>
                <option>Full Time</option>
                <option>Part Time</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Availability Date -->
        <div class="col-lg-12 col-md-12">
          <div class="dateTime_range">
            <div class="project_form_field">
              <input
                type="date"
                name="availability_date"
                id="availability_date"
                placeholder="Calendar"
                v-model="availability_date"
              />
            </div>

            <label class="text-center">From</label>

            <div class="project_form_field ml-3">
              <input
                type="time"
                name="availability_time_from"
                id="availability_time_from"
                placeholder="Time"
                v-model="availability_time_from"
              /><!-- id="timePicker" remove because two ids given -->
            </div>
            <label class="text-center">To</label>
            <div class="project_form_field">
              <input
                type="time"
                name="availability_time_to"
                id="availability_time_to"
                placeholder="Time"
                v-model="availability_time_to"
              />
            </div>

            <!-- <div class="addDeleteBtn">
              <a href="javascript:void(0)" class="p_color"
                ><i class="fa fa-plus-circle" aria-hidden="true"></i
              ></a>
              <a href="javascript:void(0)" class="text-danger"
                ><i class="fa fa-times-circle" aria-hidden="true"></i
              ></a>
            </div> -->
          </div>
        </div>

        <!-- new contract term section  -->

        <div class="col-lg-12 col-md-12">
          <div class="onForm_col noticePeriod">
            <strong
              >How to Global Audience You would Like to See Your Profile Headline</strong
            >

            <div class="suggested_keySkills">
              <h6 class="font-normal">Contract Terms</h6>
              <strong class="payOption">Payment Option</strong>

              <div class="contract_card">
                <div class="contractCard_info">
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <label class="card" @click="selectPaymentOption('hourly')">
                        <input
                          name="plan"
                          class="radio"
                          type="radio"
                          value="hourly"
                          v-model="selectedPaymentOption"
                        />
                        <span class="plan-details">
                          <small class="categoryHighlight">Popular</small>
                          <span class="plan-type"
                            ><i class="fa fa-clock-o" aria-hidden="true"></i
                          ></span>
                          <span class="plan-cost">Hourly Rate</span>
                          <span>Get paid for the number of hours worked.</span>
                        </span>
                      </label>

                      <!-- Hourly Rate Details -->
                      <div v-if="selectedPaymentOption === 'hourly'">
                        <div class="monthlyYearly_btn">
                          <div
                            class="oval-button"
                            :class="{ selected: selectedPaymentOption === 'hourly' }"
                          >
                            Hourly Rate
                          </div>
                        </div>
                        <div class="rate_edits col-lg-6">
                          <strong>Paid by hour:</strong>
                          <hourly-rate-component
                            v-model="HourlyRateValue"
                          ></hourly-rate-component>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                      <label class="card" @click="selectPaymentOption('fixed')">
                        <input name="plan" class="radio" type="radio" value="fixed" />
                        <span class="plan-details">
                          <small class="categoryHighlight" style="opacity: 0"
                            >Popular</small
                          >
                          <span class="plan-type"
                            ><i class="fa fa-tag" aria-hidden="true"></i
                          ></span>
                          <span class="plan-cost">Fixed Payment</span>
                          <span
                            >Get paid monthly or as project milestone is completed.</span
                          >
                        </span>
                      </label>

                      <!-- Fixed Payment Details -->
                      <div v-if="selectedPaymentOption === 'fixed'">
                        <div class="row">
                          <div class="monthlyYearly_btn col-xl-6 col-lg-6 col-md-6">
                            <div
                              class="contract-button"
                              @click="selectSubPaymentOption('monthlyRate')"
                              :class="{
                                selected: selectedSubPaymentOption === 'monthlyRate',
                              }"
                            >
                              Monthly Rate
                            </div>
                            <div
                              v-if="selectedSubPaymentOption === 'monthlyRate'"
                              class="rate_edits mt-3"
                            >
                              <strong>Paid by month:</strong>
                              <monthly-rate-component
                                v-model="monthlyRateValue"
                              ></monthly-rate-component>
                            </div>
                          </div>
                          <div class="monthlyYearly_btn col-xl-6 col-lg-6 col-md-6 pl-0">
                            <div
                              class="contract-button2"
                              @click="selectSubPaymentOption('projectRate')"
                              :class="{
                                selected: selectedSubPaymentOption === 'projectRate',
                              }"
                            >
                              Get paid fixed price for the project
                            </div>
                            <div
                              v-if="selectedSubPaymentOption === 'projectRate'"
                              class="rate_edits mt-3"
                            >
                              <strong>Paid by project:</strong>
                              <!-- <hourly-rate-component
                                v-model="HourlyRateValue"
                              ></hourly-rate-component> -->
                              <project-rate-component
                                v-model="ProjectRateValue"
                              ></project-rate-component>
                            </div>
                          </div>
                        </div>

                        <!-- Monthly Rate Details -->
                        <div class="row">
                          <!-- <div
                            v-if="selectedSubPaymentOption === 'monthlyRate'"
                            class="rate_edits col-xl-6"
                          >
                            <strong>Paid by project:</strong>
                            <editable-input v-model="monthlyRateValue"></editable-input>
                          </div> -->
                          <!-- Fixed Price Details -->
                          <!-- <div
                            v-if="selectedSubPaymentOption === 'fixedPrice'"
                            class="rate_edits col-xl-6"
                          >
                            <strong>Paid by hour:</strong>
                            <hourly-rate-component
                              v-model="HourlyRateValue"
                            ></hourly-rate-component>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="onForm_col noticePeriod">
            <strong
              >How to Global Audience You would Like to See Your Profile Headline</strong
            >

            <div class="suggested_keySkills">
              <strong
                >Add preferences to get relevant job recommendations & make your profile
                stronger.</strong
              >
              <strong>Resume Headline:</strong>
              <div class="project_form_textarea">
                <textarea
                  name="resume_headline"
                  id="resume_headline"
                  placeholder=" Add resume headline and preferences to make your profile stronger and get relevant job recommendations."
                  v-model="resume_headline"
                ></textarea>
              </div>

              <br />

              <strong>Suggestions:</strong>

              <div class="scheduleCheckbox pt-2">
                <label class="checkbox-label">
                  <input type="checkbox" />
                  <span class="checkbox-custom rectangular"></span>
                  Java and J2Ee Developer with M. Arch in Agriculture currently living in
                  Hyderabad/Secunderabad
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="project_form_submit pt-3">
            <input
              type="button"
              class="btn_default"
              value="Submit Request"
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
import VueUploadComponent from "vue-upload-component";
import MonthlyRateComponent from "./MonthlyRateComponent.vue";
import HourlyRateComponent from "./HourlyRateComponent.vue";
import ProjectRateComponent from "./ProjectRateComponent.vue";
// import GoogleMapComponent from "./GoogleMapComponent.vue";
import VueGoogleAutocomplete from "vue-google-autocomplete";
import GoogleAddressAutocomplete from "vue3-google-address-autocomplete";

export default {
  props: {
    formAction: {
      type: String,
      required: true,
    },
  },
  components: {
    Multiselect,
    FileUpload: VueUploadComponent,
    MonthlyRateComponent,
    HourlyRateComponent,
    ProjectRateComponent,
    // GoogleMapComponent,
    VueGoogleAutocomplete,
    GoogleAddressAutocomplete,
  },
  data() {
    return {
      csrfToken: window.csrfToken,
      phoneCodes: [],
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
      //   Contract term section
      showHourlyRate: false,
      showFixedRate: false,
      //   editingMonthlyRate: false,
      monthlyRateValue: "600",
      HourlyRateValue: "33",
      ProjectRateValue: "1000",
      // Location Section
      //   suggestions: [],
      location: "",
      searchResults: [],
      service: null,

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
      //   Checkbox
      currentlyWorking: false,
      working_since_date: "",
      working_since_date2: "",
      selectedCurrency: "USD",
      selectedSalaryRange: "",
      highest_qualification: "",
      uploadedFiles: [],
      selectedNoticePeriod: "",
      availability: "",
      availability_date: "",
      availability_time_from: "",
      availability_time_to: "",
      selectedPaymentOption: "hourly",
      selectedSubPaymentOption: "",
      //   monthlyRateValue: 600,
      //   HourlyRateValue: 33,
      resume_headline: "",
    };
  },
  mounted() {
    this.fetchPhoneCodes();
    this.selectedSalaryRange = this.salaryOptions[0];
  },

  methods: {
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
          console.log("Response data:", response.data);
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
      console.log("New File:", newFile);
      if (newFile && (!oldFile || newFile.file !== oldFile.file)) {
        if (newFile.size > this.maxSize) {
          //console.log("File size exceeded the maximum limit.");
          this.$refs.fileUpload.remove(newFile);
          prevent();
          this.errorMessage = "File size exceeds the maximum limit (5 MB).";
          setTimeout(() => {
            this.errorMessage = "";
          }, 5000); // Remove the error message after 2 seconds
        }
        if (!this.extensions.includes(newFile.name.split(".").pop())) {
          //console.log("Invalid file format.");
          this.$refs.fileUpload.remove(newFile);
          prevent();
          this.errorMessage = "Invalid file format. Allowed formats: PDF, DOC, DOCX.";
          setTimeout(() => {
            this.errorMessage = "";
          }, 5000); // Remove the error message after 2 seconds
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

    selectPaymentOption(option) {
      this.selectedPaymentOption = option;
    },
    selectSubPaymentOption(option) {
      this.selectedSubPaymentOption = option;
    },

    handlePlaceChanged(place) {
      // Update current_location when a place is selected
      this.current_location = place.formatted_address;
    },

    // Submit the form
    submitForm() {
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
      formData.append("key_skills", JSON.stringify(this.selectedSkills));
      formData.append("expert_in", JSON.stringify(this.selectedExpertise));
      formData.append("also_work_with", JSON.stringify(this.selectedWorkWith));
      formData.append("last_company", this.last_company);
      formData.append("company_location", this.company_location);
      // Currently Working  Checkbox
      formData.append("currently_working_here", this.currentlyWorking ? "Yes" : "No");
      formData.append("working_since_date", this.working_since_date);
      formData.append("working_since_date2", this.working_since_date2);
      formData.append("annual_salary_currency", this.selectedCurrency);
      formData.append("annual_salary", this.selectedSalaryRange);
      formData.append("highest_qualification", this.highest_qualification);
      // formData.append("document[]", this.uploadedFiles);
      //   formData.append("document[]", JSON.stringify(this.uploadedFiles));
      //   for (const file of this.uploadedFiles) {
      //     formData.append("document[]", file);
      //   }
      for (let i = 0; i < this.uploadedFiles.length; i++) {
        formData.append("document[]", this.uploadedFiles[i]);
      }
      formData.append("notice_period", this.selectedNoticePeriod);
      formData.append("availability", this.availability);
      formData.append("availability_date", this.availability_date);
      formData.append("availability_time_from", this.availability_time_from);
      formData.append("availability_time_to", this.availability_time_to);
      formData.append("payment_option", this.selectedPaymentOption);
      formData.append("sub_payment_option", this.selectedSubPaymentOption);
      //   formData.append("monthly_rate", this.monthlyRateValue);
      //   formData.append("hourly_rate", this.HourlyRateValue);
      if (this.selectedPaymentOption === "hourly") {
        formData.append("hourly_rate", this.HourlyRateValue);
      } else if (
        this.selectedPaymentOption === "fixed" &&
        this.selectedSubPaymentOption === "monthlyRate"
      ) {
        formData.append("monthly_rate", this.monthlyRateValue);
      } else if (
        this.selectedPaymentOption === "fixed" &&
        this.selectedSubPaymentOption === "projectRate"
      ) {
        formData.append("project_rate", this.ProjectRateValue);
      }
      formData.append("resume_headline", this.resume_headline);

      // Send a POST request to your Laravel route
      axios
        .post("/submitForm", formData)
        .then((response) => {
          console.log("Form submitted successfully");
          console.log("Form Data:", formData);
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
          this.availability = "";
          this.availability_date = "";
          this.availability_time_from = "";
          this.availability_time_to = "";
          this.selectedPaymentOption = "";
          this.selectedSubPaymentOption = "";
          this.monthlyRateValue = 600;
          this.HourlyRateValue = 33;
          this.resume_headline = "";
        })
        .catch((error) => {
          console.error("Form submission failed:", error);
        });
    },
  },
  computed: {
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
    displayValue() {
      // Return the text to display based on editing mode
      //   console.log(this.editingMonthlyRate);
      return this.editingMonthlyRate
        ? "Edit Monthly Rate:"
        : `${this.monthlyRateValue}/project`;
    },
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
