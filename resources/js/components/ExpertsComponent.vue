<template>
    <div class="meetTeam_nav">
        <div class="auto_container">
            <div class="meetTeam_nav_inner">
                <div class="meetTeam_nav_info">
                    <ul>
                        <li v-for="category in categories" :key="category.id">
                            <a @click="selectCategory(category)" :class="{ active:  (this.selectedCategory && category.id === this.selectedCategory.id) }">{{
                                category.title
                            }}</a>
                        </li>
                    </ul>
                </div>

                <div class="otherSearch">
                    <!-- Another variation with a button -->
                    <div class="input-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Others..."
                            v-model="searchQuery"
                        />
                        <div class="input-group-append">
                            <button
                                class="btn btn-secondary"
                                type="button"
                                @click="filterExperts"
                            >
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--* Expert Slider Section -->

    <div class="auto_container">
        <div class="showAll_btn mt-3 pr-3">
            <a href="#" class="btn_default">Show All</a>
        </div>
        <div class="meetTeam_sliderSection pt-0">
            <!-- <carousel :items="2" :margin="20"> -->
            <carousel :items-to-show="1.5">
                <slide v-for="(expert, index) in experts" :key="expert">
                    <div class="item">
                        <div class="meetTeam_info ml-2">
                            <div class="meetProfile">
                                <span
                                    ><img
                                        :src="`/storage/${expert.avatar}`"
                                        :alt="expert.title"
                                /></span>
                                <div class="meetProfile_tittle">
                                    <strong>{{ expert.title }}</strong>
                                    <p>{{ expert.sub_title }}</p>
                                </div>
                            </div>

                            <div class="descriptionText">
                                <p v-html="expert.description"></p>
                            </div>

                            <div class="ourExperties">
                                <label class="expertTittle">• Expert in</label>

                                <div class="ourExperties_list">
                                    <ul>
                                        <li
                                            v-for="(experty, index) in expert.experties"
                                            :key="index"
                                        >
                                            <span @click="fetchExpertsByExperty(experty)">{{ experty.title }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="ourWorked">
                                <label class="">Also worked with</label>

                                <div class="ourWorked_list">
                                    <ul>
                                        <li
                                            v-for="(skill, index) in expert.skills"
                                            :key="index"
                                        >
                                            <span @click="fetchExpertsBySkill(skill)">{{ skill.title }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="ourExperience">
                                <div class="ourExperience_col">
                                    <strong>Experience</strong>
                                    <p>{{ expert.experience }}</p>
                                </div>
                                <div class="ourExperience_col">
                                    <strong>Availability</strong>
                                    <p>{{ expert.availability }}</p>
                                </div>
                            </div>

                            <div class="hireBttn">
                                <a href="temp/hire-form" class="btn_default"
                                    >Hire {{ expert.title }}</a
                                >
                            </div>
                        </div>
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
</template>

<style lang="scss" scoped>
/* .meetTeam_slider {
    display: flex;
}
.meetTeam_slider .item {
    flex: 0 0 400px;
    margin-right: 20px;
} */

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
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

export default {
    data() {
        return {
            experts: [],
            categories: [],
            selectedCategory: null,
            searchQuery: "",
        };
    },
    mounted() {
        this.fetchCategories();
        this.fetchExperts();
    },
    methods: {
        fetchCategories() {
            axios
                .get("/api/v1/expert_categories")
                .then((response) => {
                    this.categories = response.data;
                    this.selectedCategory = this.categories[0];
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchExperts() {
            axios
                .get("/api/v1/experts")
                .then((response) => {
                    this.experts = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        // Filter Experts by Category
        fetchExpertsByCategory(category) {

            const requestCategory = { category_id: category.id };

            axios
                .post("/api/v1/experts/category", requestCategory)
                .then((response) => {
                    this.experts = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        // Filter Experts by Experty
        fetchExpertsByExperty(experty) {
            // keyword = Java | Node
            const requestExperty = { keyword: experty.title };

            axios
                .post("/api/v1/experts/experties" , requestExperty)
                .then((response) => {
                    this.experts = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        // Filter Experts by Skill
        fetchExpertsBySkill(skill) {
            //// keyword = Java | Node
            const requestSkill = { keyword: skill.title };
            axios
                .post("/api/v1/experts/skills", requestSkill)
                .then((response) => {
                    this.experts = response.data;
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
        selectCategory(category) {
            this.selectedCategory = category;
            this.fetchExpertsByCategory(category);
        },
        filterExperts() {
            const searchQuery = this.searchQuery.trim().toLowerCase();

            if (!searchQuery) {
                this.filteredExpertsByCategory = this.experts;
                return;
            }

            axios
                .post("/api/v1/experts/search", { keyword: searchQuery })
                .then((response) => {
                this.experts = response.data;
            })
                .catch((error) => {
                console.error(error);
            });
        },
    },
    computed: {
        filteredExpertsByCategory() {
            if (!this.selectedCategory) {
                return this.experts;
            }
            const categoryName = this.selectedCategory.name;
            return this.experts.filter((expert) =>
                expert.expertises.includes(categoryName)
            );
        },
    },
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
};
</script>
