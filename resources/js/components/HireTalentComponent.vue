<template>
  <div class="project_form">
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
            @input="validateName"
            v-model="name"
          />
          <input type="text" value="" name="source" id="source" hidden readonly />
        </div>
        <div class="error-message">{{ nameError }}</div>
      </div>

      <!-- country code -->
      <div class="col-lg-6 col-md-12">
        <div class="project_form_field split_in_two">
          <div class="project_form_select mt-0 mb-0 mr-0">
            <select
              class="form-select codeCountry m-0 pr-0 pl-2"
              required
              id="country_code"
              name="country_code"
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
            value=""
            required
            placeholder="Phone / Skype / Whatsapp"
            name="phone"
            id="phone"
          />
        </div>
      </div>
      <!-- company name -->
      <div class="col-lg-6 col-md-12">
        <div class="project_form_field">
          <input
            type="text"
            value=""
            placeholder="Company Name "
            name="company"
            id="company"
          />
        </div>
      </div>
      <!-- email -->
      <div class="col-lg-6 col-md-12">
        <div class="project_form_field">
          <input
            type="text"
            value=""
            required
            placeholder="Enter business email*"
            name="email"
            id="email"
          />
        </div>
      </div>
      <!-- website -->
      <div class="col-lg-6 col-md-12">
        <div class="project_form_field">
          <input
            type="text"
            value=""
            placeholder="Website (if Available)"
            name="website"
            id="website"
          />
        </div>
      </div>
      <!-- address -->
      <div class="col-lg-6 col-md-12">
        <div class="project_form_field">
          <!-- <input type="text" value="" placeholder="Address" name="address" id="address" /> -->
          <!-- <GoogleVue
            apiKey="AIzaSyDY1vginH3C8j_tCqQRwIyE7awXfUQk-ck"
            v-model="address"
            css-class="css-class-here"
            placeholder="Address"
          /> -->
          <GoogleAddressAutocomplete
            apiKey="AIzaSyDY1vginH3C8j_tCqQRwIyE7awXfUQk-ck"
            v-model="address"
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
            @input="updateCharacterCount"
            maxlength="5000"
          ></textarea>
          <!-- Character count and "limit reached" message -->
          <div id="character-count" :class="{ 'limit-reached': isLimitReached }">
            <span v-if="limitReached" class="message mr-2">Characters Limit reached</span>
            <span id="current">{{ characterCount }}</span>
            <span id="maximum">/ 5000</span>
          </div>
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
          >
            <option value="" selected>
              Hire Periods (Full Time, Part Time, Daily, Weekly, Periods) Please Select
            </option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
            <option value="Daily">Daily</option>
            <option value="Weekly">Weekly</option>
            <option value="Period">Period</option>
          </select>
        </div>
      </div>

      <!-- From & To Date -->
      <div
        class="col-lg-12 col-md-12"
        v-for="(calender, index) in calenders"
        :key="index"
      >
        <div class="dateTime_range">
          <label>From*</label>
          <div class="project_form_field">
            <input type="date" value="" placeholder="Calendar" name="from_date[]" />
          </div>

          <label class="text-center">To</label>
          <div class="project_form_field mr-2">
            <input type="date" value="" placeholder="Calendar" name="to_date[]" />
          </div>

          <!-- From & To Time -->
          <div class="project_form_field ml-2">
            <input
              type="time"
              value=""
              placeholder="Time"
              id="timePicker"
              name="from_time[]"
            />
          </div>
          <label class="text-center">To</label>
          <div class="project_form_field mr-2">
            <input type="time" value="" placeholder="Time" name="to_time[]" />
          </div>
          <label class="text-center m-3">Time zone</label>
          <div class="project_form_field">
            <div class="project_form_select">
              <select
                v-model="selectedTimezone"
                class="form-select codeCountry"
                names="timezone"
                id="timezone"
                placeholder="time zone"
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

          <!-- Delete BUtton -->
          <div class="addDeleteBtn" v-if="index > 0">
            <a href="javascript:void(0)" @click="remove(index)" class="text-danger"
              ><i class="fa fa-times-circle" aria-hidden="false"></i
            ></a>
          </div>
        </div>
      </div>

      <!-- AddCalender -->
      <div class="col-lg-12 col-md-12">
        <div class="addCallender">
          <a href="javascript:void(0)" @click="addMore()" class="btn_default"
            >Add Calender</a
          >
        </div>
      </div>

      <!-- Virtual Meeting -->
      <div class="col-lg-12 col-md-12">
        <div class="scheduleCheckbox onFormCheck">
          <label class="checkbox-label">
            <input type="checkbox" name="virtual_assistance_call" value="Yes" />
            <span class="checkbox-custom rectangular"></span>
            Schedule a Virtual Interview
          </label>
        </div>
      </div>

      <!-- availability -->
      <div
        class="col-lg-12 col-md-12"
        v-for="(calender1, index1) in calenders1"
        :key1="index1"
      >
        <div class="dateTime_range">
          <label style="min-width: 90px">Availability</label>
          <div class="project_form_field">
            <input
              type="date"
              value=""
              placeholder="Calendar"
              name="availability_date[]"
            />
          </div>
          <div class="project_form_field ml-5">
            <input
              type="time"
              value=""
              placeholder="Time"
              id="timePicker"
              name="availability_time_from[]"
            />
          </div>
          <label class="text-center">To</label>
          <div class="project_form_field">
            <input
              type="time"
              value=""
              placeholder="Time"
              name="availability_time_to[]"
            />
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
            <input type="file" name="document" />
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-12">
        <div class="scheduleCheckbox onFormCheck">
          <label class="checkbox-label">
            <input type="checkbox" />
            <span class="checkbox-custom rectangular"></span>
            By clicking “Sign Up” you agree to Bizionic Technologies and Marketing
            Solution’s <a href="#">Term of Use</a> and
            <a href="/industries/industries-we-serve/industries/privacy-policy"
              >Privacy Statement</a
            >
            .
          </label>

          <label class="checkbox-label">
            <input type="checkbox" />
            <span class="checkbox-custom rectangular"></span>
            Please tick this box if you are happy for us to send you future promotions,
            offers and communication.
          </label>
        </div>
      </div>

      <div class="col-lg-12 col-md-12">
        <div class="project_form_submit pt-4">
          <input type="submit" value="Get a No-Obligation Meeting" class="btn_default" />
        </div>
      </div>
    </div>
  </div>
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
    document.getElementById("source").value = pageText;
    console.log($("#source").val());
  },
  props: {
    countries: Object,
  },
  data() {
    return {
      subscribe: {
        name: "",
        email: "",
      },
      calenders: [
        {
          calenderName: "",
        },
      ],
      calenders1: [
        {
          calenderName1: "",
        },
      ],
      address: "",
      timezones: [],
      selectedTimezone: [],
      name: "",
      nameError: "",
      message: "",
      characterCount: 0,
      limitReached: false,
      description: "",
    };
  },
  computed: {
    characterCount() {
      return this.message.length;
    },
    isLimitReached() {
      return this.characterCount >= 5000;
    },
  },
  methods: {
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

    // validate name
    validateName() {
      // Regular expression to allow only alphabets and spaces
      const regex = /^[a-zA-Z\s]*$/;

      if (!regex.test(this.name)) {
        this.nameError = "Name can only contain alphabets and spaces.";
      } else {
        this.nameError = "";
      }
    },

    updateCharacterCount() {
      // update character count
      this.characterCount = this.message.length;

      if (this.characterCount >= 5000) {
        this.message = this.message.substring(0, 5000);
        this.limitReached = true;
      } else {
        this.limitReached = false;
      }
    },
  },
};
</script>
