<template>
  <div>
    <!-- Search Functionality -->

    <div class="embark_search_section">
      <div class="embark_search_info">
        <div class="search1">
          <multiselect2
            v-model="selectedSearch"
            :options="searchOptions"
            :searchable="true"
            :multiple="true"
            :close-on-select="true"
            :internal-search="true"
            :clear-on-select="false"
            placeholder="Enter skills / designations / companies"
            class="multiselect"
            :class="{ 'multiselect-container': true }"
          ></multiselect2>
          <b><i class="fa fa-search" aria-hidden="true"></i></b>
        </div>

        <div class="searchSelect search2">
          <select v-model="selectedExperience">
            <option value="" selected disabled>Select experience</option>
            <!-- <option
              v-for="experience in experienceOptions"
              :key="experience"
              :value="experience"
            >
              {{ experience }}
            </option> -->
            <option value="1+ year of Experience">1+ year of Experience</option>
            <option value="2+ year of Experience">2+ year of Experience</option>
            <option value="3+ year of Experience">3+ year of Experience</option>
            <option value="4+ year of Experience">4+ year of Experience</option>
            <option value="5+ year of Experience">5+ year of Experience</option>
            <option value="6+ year of Experience">6+ year of Experience</option>
            <option value="7+ year of Experience">7+ year of Experience</option>
            <option value="8+ year of Experience">8+ year of Experience</option>
            <option value="9+ year of Experience">9+ year of Experience</option>
            <option value="10+ year of Experience">10+ year of Experience</option>
          </select>
        </div>

        <div class="search3">
          <multiselect
            v-model="selectedLocation"
            :options="locationOptions"
            :searchable="true"
            :close-on-select="true"
            placeholder="Enter location"
            class="multiselect"
            :class="{ 'multiselect-container': true }"
          ></multiselect>
        </div>

        <div class="searchResult">
          <input type="submit" value="Search" class="btn_default" @click="searchJobs" />
        </div>
      </div>

      <div class="embark_teamBtn">
        <a href="/bizionic-team" class="btn_default">Join Team Bizionic</a>
      </div>
    </div>

    <!--* Expert Slider Section -->

    <div class="">
      <div class="showAll_btn">
        <!-- <a href="/hire/developer/developers-other/hirin-view-all-job" class="btn_default"
          >View All</a
        > -->
        <a href="/hire-me/view-all-job" class="btn_default"
          >View All</a
        >
      </div>
      <div class="meetTeam_sliderSection pt-0">
        <!-- <carousel :items="2" :margin="20"> -->
        <carousel :items-to-show="3">
          <slide v-if="jobs.length > 0" v-for="job in jobs" :key="job.id">
            <div class="item">
              <div class="meetTeam_info">
                <div class="meetProfile">
                  <!-- <span
                    ><img
                    :src="`/storage/${expert.avatar}`"
                    :alt="expert.title"
                    /></span> -->
                  <div class="meetProfile_tittle">
                    <strong>{{ job.title }}</strong>
                    <div class="infoTxt">
                      <p><b>Company:</b> {{ job.company }}</p>
                      <p><b>Location:</b> {{ job.location }}</p>
                      <p><b>Work Mode:</b> {{ job.work_mode }}</p>
                      <p>
                        <b>CTC Range:</b> {{ job.ctc_currency }} {{ job.min_price }} -
                        {{ job.max_price }} {{ job.salary_period }}
                      </p>
                    </div>
                  </div>
                </div>

                <div class="descriptionText">
                  <label class="expertTittle">• Description</label>
                  <p v-html="job.description"></p>
                </div>

                <div class="ourExperties">
                  <label class="expertTittle">• Key Skills </label>

                  <div class="ourWorked_list">
                    <ul>
                      <li v-for="(skill, index) in job.skills" :key="index">
                        <span @click="fetchJobsBySkill(skill)">{{ skill.title }}</span>
                      </li>
                    </ul>
                  </div>
                  <!-- <div class="ourExperties_list">
                      <ul>
                        <li v-for="(experty, index) in expert.experties" :key="index">
                          <span @click="fetchExpertsByExperty(experty)">{{
                            experty.title
                          }}</span>
                        </li>
                      </ul>
                    </div> -->
                </div>

                <div class="descriptionText">
                  <label class="expertTittle">• Qualification</label>
                  <p v-html="job.qualification"></p>
                </div>

                <div class="descriptionText">
                  <label class="expertTittle">• Hiring Timeline</label>
                  <p v-html="job.prefer_qualification"></p>
                </div>

                <div class="ourExperience">
                  <div class="descriptionText">
                    <label class="expertTittle">• Experience</label>
                    <p v-html="job.experience"></p>
                  </div>
                  <div class="descriptionText">
                    <label class="expertTittle">• Employment Type</label>
                    <p v-html="job.availability"></p>
                  </div>
                </div>

                <div class="hireBttn">
                  <!-- <a
                      :href="'/hire/developer/developers-other/HireForm/' + expert.id"
                      class="btn_default"
                      >Hire {{ expert.title }}</a
                    > -->
                  <!-- <a class="btn_default" href="">Show More</a> -->
                  <!-- <a
                      href="/industries/industries-we-serve/industries/jobid?jobId={{ $job->id }}"
                      target="_blank"
                      class="btn_default"
                      >Show more</a
                    > -->
                  <a
                    class="btn_default text-white"
                    target="_blank"
                    @click="goToJobForm(job.id)"
                    >Show More</a
                  >
                </div>
              </div>
            </div>
          </slide>
          <slide v-else>
            <div class="item">
              <h3>
                Sorry, no job openings for this search result. Kindly search for other job
                openings.
              </h3>
            </div>
          </slide>
          <template #addons>
            <navigation />
            <pagination />
          </template>
        </carousel>

        <!-- </carousel> -->
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
/* .meetTeam_slider {
    display: flex;
}
.meetTeam_slider .item {

} */

.multiselect-container {
  position: absolute;
  z-index: 999; /* Ensure it appears above other elements */
}

.multiselect {
  max-width: 200px; /* Set the maximum width as per your design */
}

.meetTeam_sliderSection {
  overflow: hidden; /* Hide any overflowing content */
}

.meetTeam_sliderSection {
  /* Display the experts in a flex container */
  overflow-x: auto; /* Enable horizontal scrolling */
  scroll-behavior: smooth; /* Add smooth scrolling behavior */
}

.meetTeam_sliderSection .item {
  // flex: 0 0 400px; /* Set the width of each expert section */
  /* Adjust the spacing between expert sections */
  width: 100%;
}
.carousel__slide {
  padding: 0px 10px !important;
  display: block !important;
}

/* Hide the scrollbar */
.meetTeam_sliderSection::-webkit-scrollbar {
  width: 0;
  height: 0;
  // gbackground: transparent;
}

/* Optional: Style the navigation arrows for scrolling */
.meetTeam_nav .owl-nav .owl-prev,
.meetTeam_nav .owl-nav .owl-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: #fff;
  padding: 5px;
  border-radius: 50%;
  font-size: 20px;
  z-index: 1;
}

.meetTeam_nav .owl-nav .owl-prev {
  left: 10px;
}

.meetTeam_nav .owl-nav .owl-next {
  right: 10px;
}
</style>

<script>
import axios from "axios";
import "vue3-carousel/dist/carousel.css";
import Multiselect from "vue-multiselect";
import Multiselect2 from "vue-multiselect";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
  data() {
    return {
      //   experts: [],
      jobs: [],
      experienceOptions: [],
      locationOptions: [],
      selectedExperience: null,
      selectedLocation: null,
      searchOptions: [],
      selectedSearch: [],
      //   locationQuery: "",
      //   showLocationDropdown: false,

      //   categories: [],
      //   selectedCategory: null,
      searchQuery: "",
      availabl: "",
      tech: "",
      keyword: "",
    };
  },
  mounted() {
    // this.fetchCategories();
    // this.fetchExperts();
    this.fetchJobs();
    // this.fetchExperienceOptions();
    this.fetchLocationOptions();
    this.fetchSearchOptions();
  },
  methods: {
    setPeriod(val) {
      this.availabl = val;
    },
    setTech(val) {
      this.tech = val;
      this.fetchExpertsByExperty();
    },

    fetchJobs() {
      axios
        .get("/api/v1/jobs")
        .then((response) => {
          this.jobs = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    // fetchExperienceOptions() {
    //   // Fetch the experience options from the jobs table
    //   axios
    //     .get("/api/v1/job-skills")
    //     .then((response) => {
    //       this.experienceOptions = response.data;
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },

    fetchLocationOptions() {
      axios
        .get("/api/v1/job-locations")
        .then((response) => {
          this.locationOptions = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    onLocationSelected(location) {
      this.selectedLocation = location;
    },

    fetchSearchOptions() {
      axios
        .get("/api/v1/job-skills")
        .then((response) => {
          this.searchOptions = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    // Filter Experts by Category
    // fetchExpertsByCategory(category) {
    //   const requestCategory = { category_id: category.id };

    //   axios
    //     .post("/api/v1/experts/category", requestCategory)
    //     .then((response) => {
    //       this.experts = response.data;
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },

    // Filter Experts by Experty
    // fetchExpertsByExperty(experty) {
    //   // keyword = Java | Node

    //   if (experty !== undefined) {
    //     this.keyword = experty.title;
    //     this.availabl = "";
    //   } else {
    //     this.keyword = this.tech;
    //   }

    //   const requestExperty = { keyword: this.keyword, availabl: this.availabl };

    //   axios
    //     .post("/api/v1/experts/experties", requestExperty)
    //     .then((response) => {
    //       this.experts = response.data;
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },

    // // Filter Experts by Skill
    // fetchExpertsBySkill(skill) {
    //   //// keyword = Java | Node
    //   const requestSkill = { keyword: skill.title };
    //   axios
    //     .post("/api/v1/experts/skills", requestSkill)
    //     .then((response) => {
    //       this.experts = response.data;
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },

    // Filter Jobs by Skill
    fetchJobsBySkill(skill) {
      //// keyword = Java | Node
      const requestSkill = { keyword: skill.title };
      axios
        .post("/api/v1/jobs/skills", requestSkill)
        .then((response) => {
          this.jobs = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    goToJobForm(jobId) {
      const url = `/industries/industries-we-serve/industries/jobid?jobId=${jobId}`;
      window.location.href = url;
      console.log("Navigating to:", url);
    },

    // Search Job Filteration
    searchJobs() {
      const requestSearch = {
        // title: this.selectedSearch ? this.selectedSearch.title : null,
        title: this.selectedSearch,
        experience: this.selectedExperience,
        location: this.selectedLocation,
      };

      axios
        .post("/api/v1/jobs-search", requestSearch)
        .then((response) => {
          this.jobs = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },

    //

    // Search Experts
    // searchExperts(keyword) {
    //   // Keyword
    //   axios
    //     .post("/api/v1/experts/search")
    //     .then((response) => {
    //       this.experts = response.data;
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },
    // selectCategory(category) {
    //   this.selectedCategory = category;
    //   this.fetchExpertsByCategory(category);
    // },
    // filterExperts() {
    //   const searchQuery = this.searchQuery.trim().toLowerCase();

    //   if (!searchQuery) {
    //     this.filteredExpertsByCategory = this.experts;
    //     return;
    //   }

    //   axios
    //     .post("/api/v1/experts/search", { keyword: searchQuery })
    //     .then((response) => {
    //       this.experts = response.data;
    //       document.getElementById("expertss").scrollIntoView();
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },
  },
  computed: {
    // filteredExpertsByCategory() {
    //   if (!this.selectedCategory) {
    //     return this.experts;
    //   }
    //   const categoryName = this.selectedCategory.name;
    //   return this.experts.filter((expert) => expert.expertises.includes(categoryName));
    // },
  },
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
    Multiselect,
    Multiselect2,
  },
};
</script>