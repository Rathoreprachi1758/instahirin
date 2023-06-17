<template>
    <div class="meetTeam_nav">
        <div class="auto_container">
            <div class="meetTeam_nav_inner">
                <div class="meetTeam_nav_info">
                    <ul>
                        <li v-for="category in categories" :key="category.id">
                            <a @click="selectCategory(category)">{{
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
        <div class="meetTeam_sliderSection">
            <div class="showAll_btn">
                <a href="#" class="btn_default">Show All</a>
            </div>
            <carousel :items="2" :margin="10">
                <div class="item" v-for="(expert, index) in experts" :key="index">
                    <div class="meetTeam_info">
                        <div class="meetProfile">
                            <span><img :src="`/storage/${expert.avatar}`" :alt="expert.title" /></span> 
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
                                    <li v-for="(experty, index) in expert.experties" :key="index"><span>{{ experty.title }}</span></li>
                                </ul>
                            </div>
                        </div>



                        <div class="ourWorked">
                            <label class="">Also worked with</label>

                            <div class="ourWorked_list">
                                <ul>
                                    <li v-for="(skill, index) in expert.skills" :key="index"><span>{{ skill.title }}</span></li>
                                </ul>
                            </div>
                        </div>


                        <div class="ourExperience">
                            <div class="ourExperience_col">
                                <strong>Experience</strong>
                                <p>{{ experience }}</p>
                            </div>
                            <div class="ourExperience_col">
                                <strong>Availability</strong>
                                <p>{{ availability }}</p>
                            </div>
                        </div>



                        <div class="hireBttn">
                            <a href="temp/hire-form" class=" btn_default">Hire {{ expert.title }}</a>
                        </div>

                    </div>
                </div>
            </carousel>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { carousel } from "vue-owl-carousel";


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
        fetchExpertsByCategory(category) {
            //category_id
            axios
                .post("/api/v1/experts/category")
                .then((response) => {
                    this.experts = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchExpertsByExperty(experty) {
            // keyword = Java | Node
            axios
                .post("/api/v1/experts/experties")
                .then((response) => {
                    this.experts = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        fetchExpertsBySkill(skill) {
            //// keyword = Java | Node
            axios
                .post("/api/v1/experts/skills")
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

            this.filteredExpertsByCategory = this.experts.filter((expert) => {
                const expertisesMatch = expert.expertises.some((expertise) =>
                    expertise.toLowerCase().includes(searchQuery)
                );
                const workedInMatch = expert.workedIn.some((workedIn) =>
                    workedIn.toLowerCase().includes(searchQuery)
                );
                return expertisesMatch || workedInMatch;
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
        carousel,
    },
};
</script>

