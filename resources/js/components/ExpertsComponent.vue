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
            <div
                class="meetTeam_slider owl-carousel owl-theme"
                style="width: 100%; overflow: auto"
            >
                <!-- Expert Section -->
                <carousel>
                    <!-- <div
                        class="item"
                        v-for="expert in filteredExpertsByCategory"
                        :key="expert.id"
                    >
                        <div class="meetTeam_info">
                            <div class="meetProfile">
                                <span
                                    ><img :src="expert.imageUrl" alt=""
                                /></span>
                                <div class="meetProfile_tittle">
                                    <strong>{{ expert.name }}</strong>
                                    <p>{{ expert.subtitle }}</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div
                        class="item"
                        v-for="expert in filteredExpertsByCategory"
                        :key="expert.id"
                    >
                        <div class="meetTeam_info">
                            <div class="meetProfile">
                                <span
                                    ><img
                                        :src="`/storage/${expert.avatar}`"
                                        alt=""
                                /></span>
                                <div class="meetProfile_tittle">
                                    <strong>{{ expert.title }}</strong>
                                    <p>{{ expert.sub_title }}</p>
                                </div>
                            </div>
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
                                    v-for="experty in expert.experties"
                                    :key="experty"
                                >
                                    <span>
                                        {{ experty.title }}
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="ourExperties">
                            <label class="expertTittle">• Expert in</label>
                            <div class="ourExperties_list">
                                <ul>
                                    <li
                                        v-for="expertise in expert.expertises"
                                        :key="expertise"
                                    >
                                        <span>
                                            {{ expertise }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="ourWorked">
                            <label class="">Also worked with</label>
                            <div class="ourWorked_list">
                                <ul>
                                    <li
                                        v-for="skill in expert.skills"
                                        :key="skill"
                                    >
                                        <span>
                                            {{ skill.title }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!--
                            <div class="ourWorked">
                                <label class="">Also worked with</label>
                                <div class="ourWorked_list">
                                    <ul>
                                        <li
                                            v-for="workedIn in expert.workedIn"
                                            :key="workedIn"
                                        >
                                            <span>
                                                {{ workedIn }}
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

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

                            <div class="hireBtn">
                                <a href="#" class="btn_default"
                                    >Hire {{ expert.name }}</a
                                >
                            </div>
                        </div>
                    </div>
                </carousel>
            </div>
        </div>
    </div>
</template>

<style>
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

.meetTeam_slider {
    display: flex; /* Display the experts in a flex container */
    overflow-x: auto; /* Enable horizontal scrolling */
    scroll-behavior: smooth; /* Add smooth scrolling behavior */
}

.meetTeam_slider .item {
    flex: 0 0 400px; /* Set the width of each expert section */
    margin-right: 20px; /* Adjust the spacing between expert sections */
}

/* Hide the scrollbar */
.meetTeam_slider::-webkit-scrollbar {
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
import { carousel } from "vue-owl-carousel";

export default {
    data() {
        return {
            experts: [{}],
            categories: [
                {
                    id: 1,
                    name: "Development & IT",
                    url: "/marketing-solutions/china",
                },
                {
                    id: 2,
                    name: "Design & Creative",
                    url: "/marketing-solutions/india",
                },
                {
                    id: 3,
                    name: "Sales & Marketing",
                    url: "#goto_market",
                },
            ],
            // categories: [],
            // experts: [],
            // imageUrl: "/bizionic/images/influencer_profile5.png",
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
        selectCategory(category) {
            this.selectedCategory = category;
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
