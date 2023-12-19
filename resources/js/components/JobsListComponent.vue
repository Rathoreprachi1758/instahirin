<template>
  <div class="viewAll_search">
    <div class="auto_container">
      <div class="viewAll_search_bar otherSearch">
        <div data-v-4a0f0584="" class="input-group">
          <input
            id="searchQuery"
            data-v-4a0f0584=""
            type="text"
            class="form-control"
            placeholder="Others..."
            v-model="searchQuery"
          />
          <div data-v-4a0f0584="" class="input-group-append">
            <button
              data-v-4a0f0584=""
              class="btn btn-secondary"
              type="button"
              @click="filterExperts"
            >
              <i data-v-4a0f0584="" class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="grid_listing_outer">
    <div class="viewall_sort">
      <div class="auto_container">
        <div class="viewall_sort_detail">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="viewall_tillte">
                <div class="custom_tittle text-left p-0">
                  <h2 class="p-0">View <strong>All</strong></h2>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="sortting_view">
                <div class="grid_list">
                  <a href="javascript:void(0)" class="btn_default">
                    <span class="gridView"
                      ><i class="fa fa-th-large" aria-hidden="true"></i> Grid</span
                    >
                    <span class="listView"
                      ><i class="fa fa-th-list" aria-hidden="true"></i> List</span
                    >
                  </a>
                </div>

                <div class="project_form_select">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>All(200)</option>
                    <option value="1">All(100)</option>
                    <option value="2">All(50)</option>
                  </select>
                </div>
                <div class="project_form_select">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Sort By</option>
                    <option value="1">All(100)</option>
                    <option value="2">All(50)</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--* Expert Slider Section -->
    <div class="viewALL_gridList">
      <div class="auto_container">
        <div class="viewALL_gridList_detail">
          <div class="viewAll_listing">
            <ul>
              <li v-for="job in jobs.data" :key="job.id">
                <div class="meetTeam_info">
                  <div class="meetProfile">
                    <!-- <span
                      ><img :src="`/storage/${expert.avatar}`" :alt="expert.title"
                    /></span> -->
                    <div class="meetProfile_tittle">
                      <strong>{{ job.title }}</strong>
                      <!-- <p>{{ expert.sub_title }}</p> -->
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

                  <div class="experties_outer">
                    <div class="ourExperties">
                      <label class="expertTittle">• Key Skills</label>

                      <div class="ourExperties_list">
                        <ul>
                          <li v-for="(skill, index) in job.skills" :key="index">
                            <span @click="fetchJobsBySkill(skill)">{{
                              skill.title
                            }}</span>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="descriptionText">
                      <label class="expertTittle">• Qualification</label>
                      <p v-html="job.qualification"></p>
                    </div>
                  </div>

                  <div class="ourExperience">
                    <!-- <div class="ourExperience_col">
                      <strong>Experience</strong>
                      <p>{{ job.experience }}</p>
                    </div> -->
                    <div class="descriptionText">
                      <label class="expertTittle">• Experience</label>
                      <p v-html="job.experience"></p>
                    </div>
                    <!-- <div class="ourExperience_col">
                      <strong>Employment Type</strong>
                      <p>{{ job.availability }}</p>
                    </div> -->
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
                    <a class="btn_default text-white" @click="goToJobForm(job.id)"
                      >Show More</a
                    >
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <Pagination
            align="center"
            :data="experts"
            @Pagination-change-page="fetchExperts"
          ></Pagination>
          <div class="pagination">
            <div style="float: left">
              <a href="javascript:void(0)" @click="prevPage">Previous</a>
            </div>
            <div style="float: right">
              <a href="javascript:void(0)" @click="nextPage">Next</a>
            </div>
          </div>
        </div>
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
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color 0.3s;
  border: 1px solid #ddd;
}
.meetTeam_sliderSection {
  overflow: hidden; /* Hide any overflowing content */
}

.meetTeam_sliderSection {
  display: flex; /* Display the experts in a flex container */
  overflow-x: auto; /* Enable horizontal scrolling */
  scroll-behavior: smooth; /* Add smooth scrolling behavior */
}

.meetTeam_sliderSection .item {
  flex: 0 0 400px; /* Set the width of each expert section */
  margin-right: 20px; /* Adjust the spacing between expert sections */
}

/* Hide the scrollbar */
.meetTeam_sliderSection::-webkit-scrollbar {
  width: 0;
  height: 0;
  background: transparent;
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
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

export default {
  data() {
    return {
      // experts: [],
      // categories: [],
      // selectedCategory: null,
      jobs: [],
      searchQuery: "",

      // experts: [],  // Store the fetched data
      currentPage: 1,
      itemsPerPage: 9, // Adjust as needed
      totalItems: 0,
    };
  },
  mounted() {
    // this.fetchCategories();
    // this.fetchExperts();
    this.fetchJobs();
    // let uri = window.location.search.substring(1);
    // let params = new URLSearchParams(uri);
    // this.searchQuery = params.get("query");
    // if (params.get("query")) {
    //   this.filterExperts();
    // }
  },
  methods: {
    nextPage() {
      if (this.currentPage * this.itemsPerPage < this.totalItems) {
        this.currentPage++;
        this.fetchJobs();
      }
    },

    prevPage() {
      if (this.currentPage > 1) {
        this.currentPage--;
        this.fetchJobs();
      }
    },
    // fetchCategories() {
    //   axios
    //     .get("/api/v1/expert_categories")
    //     .then((response) => {
    //       this.categories = response.data;
    //       this.selectedCategory = this.categories[0];
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },
    // fetchExperts() {
    //   axios
    //     .get("/api/v1/experts?page=" + this.currentPage)
    //     .then((response) => {
    //       this.experts = response.data;
    //       this.totalItems = response.data.total;
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },
    fetchJobs() {
      axios
        .get("/api/v1/jobs?page=" + this.currentPage)
        .then((response) => {
          this.jobs = response.data;
          this.totalItems = response.data.total;
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
    //   const requestExperty = { keyword: experty.title };

    //   axios
    //     .post("/api/v1/experts/experties", requestExperty)
    //     .then((response) => {
    //       this.experts = response.data;
    //     })
    //     .catch((error) => {
    //       console.error(error);
    //     });
    // },

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
    searchExperts(keyword) {
      // Keyword
      axios
        .post("/api/v1/experts/search")
        .then((response) => {
          this.experts = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },
    // selectCategory(category) {
    //   this.selectedCategory = category;
    //   this.fetchExpertsByCategory(category);
    // },
    // filterExperts() {
    //   const searchQuery = this.searchQuery.trim().toLowerCase();
    //   console.log(searchQuery);
    //   console.log("we");
    //   if (!searchQuery) {
    //     this.filteredExpertsByCategory = this.experts;
    //     return;
    //   }

    //   axios
    //     .post("/api/v1/experts/search", { keyword: searchQuery })
    //     .then((response) => {
    //       this.experts = response.data;
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
  },
};
</script>
