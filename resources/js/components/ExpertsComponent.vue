<template>
    <!-- insta hirin banner  -->


    <div class="instaHirin_banner pb-5">
        <div class="auto_container">
            <div class="instaHirin_banner_inner">
                <span class="instaHirin_banner_avatar anim_bouncing"><img src="/bizionic/images/insta_banner_avatar.png" alt="#"></span>

                <div class="instaHirin_banner_info">
                    <div class="custom_tittle text-left">
                        <h2 class="p-0"><strong>Introducing</strong> “Hire Talent in <br>
                            Minutes” <strong>and</strong> "Hire Beyond Borders"</h2>
                        <h3 class="pt-1 pb-2"><strong>Revolutionize your</strong> Recruitment Process!</h3>
                        <p class="p_color p-0"><b>Hire with Confidence.</b> Hire the right Talent instantly from
                            an Unlimited, Prescreened, Assessed, Verified, Evaluated,
                            and Qualified Pool of Professionals across the <b>GLOBE</b>.</p>
                    </div>

                    <form action="/hire/developer/developers-other/hirin-view-all" method="get">
                        <div class="hireIn_minForm">
                            <div class="hireIn_input project_form_field">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="text" name="query" placeholder="Search Java, PHP, Laravel, Android, iOS...." v-model="searchQuery"/>
                            </div>
                            <div class="hireIn_btn">
                                <input
                                    class=""
                                    type="submit"
                                    value='🔍 Hire In Minutes'
                                />

                                <!-- <input type="submit" value="Hire in Minutes"    @click="filterExperts"/> -->
                            </div>
                            <!-- formaction="/hire/developer/developers-other/instaRequirement" -->
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>
    <!-- onboard skills section  -->

    <div class="seamlessLimitless_section skilled_setting_outer">
        <div class="auto_container">
            <div class="seamlessLimitless_section_detail">
                <div class="onboardSkilled_section">

                <div class="onboardSkill_options">
                    <div class="custom_tittle">
                        <h2><strong>Onboard,</strong> Skilled Experts <strong>Providing</strong> Innovative Business Solutions</h2>
                    </div>

                    <div class="nativeSupport_list skilled_setting">
                    <ul>
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Freelancers')">
                                <img src="/bizionic/images/skillOption_icon1.png" alt="#" >

                                <strong>Freelancers</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Project-Base')">
                                <img src="/bizionic/images/skillOption_icon2.png" alt="#" >

                                <strong>Project-Base</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Full Time')">
                                <img src="/bizionic/images/skillOption_icon3.png" alt="#" >

                                <strong>Full-Time</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Part Time')">
                                <img src="/bizionic/images/skillOption_icon4.png" alt="#" >

                                <strong>Part-Time</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Contract Base')">
                                <img src="/bizionic/images/skillOption_icon5.png" alt="#" >

                                <strong>Contract Base</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Monthly')">
                                <img src="/bizionic/images/skillOption_icon6.png" alt="#">

                                <strong>Monthly</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Weekly')">
                                <img src="/bizionic/images/skillOption_icon7.png" alt="#" >

                                <strong>Weekly</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Daily-Bases')">
                                <img src="/bizionic/images/skillOption_icon8.png" alt="#" >

                                <strong>Daily-Bases</strong>
                            </a>
                        </li> 
                        <li>
                            <a href="javascript:void(0)" @click="setPeriod('Hourly')">
                                <img src="/bizionic/images/skillOption_icon9.png" alt="#" >

                                <strong>Hourly</strong>
                            </a>
                        </li> 



                    </ul>
                </div>
                </div>



                <div class="nativeSupport_list skilled_setting">
                    <ul>
                        <li> 
                            <a href="javascript:void(0);" @click="setTech('Web developer')">
                                <img src="/bizionic/images/hirinSkill_icon1.png" alt="#" >

                                <strong>Web developer</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('Front-end Technologies')">
                                <img src="/bizionic/images/hirinSkill_icon2.png" alt="#" >

                                <strong>Front-end Technologies</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('Backend Development')">
                                <img src="/bizionic/images/hirinSkill_icon3.png" alt="#" >

                                <strong>Backend Development</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('IOS Development')">
                                <img src="/bizionic/images/hirinSkill_icon4.png" alt="#" >

                                <strong>IOS Development</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('Android Developer')">
                                <img src="/bizionic/images/hirinSkill_icon5.png" alt="#" >

                                <strong>Android Developer</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('UI/UX Designer')">
                                <img src="/bizionic/images/hirinSkill_icon6.png" alt="#" >

                                <strong>UI/UX Designer</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('Digital Marketing')">
                                <img src="/bizionic/images/hirinSkill_icon7.png" alt="#" >

                                <strong>Digital Marketing</strong>
                            </a>
                        </li>






                        <li>
                            <a href="javascript:void(0);" @click="setTech('Content Creator')">
                                <img src="/bizionic/images/hirinSkill_icon8.png" alt="#" >

                                <strong>Content Creator</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('SEO Specialist')">
                                <img src="/bizionic/images/hirinSkill_icon9.png" alt="#" >

                                <strong>SEO Specialist</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('Graphic & Design')">
                                <img src="/bizionic/images/hirinSkill_icon10.png" alt="#" >

                                <strong>Graphic & Design</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('SMM Specialist')">
                                <img src="/bizionic/images/hirinSkill_icon11.png" alt="#" >

                                <strong>SMM Specialist</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('Video & Animation')">
                                <img src="/bizionic/images/hirinSkill_icon12.png" alt="#" >

                                <strong>Video & Animation</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" @click="setTech('PPC Specialist')">
                                <img src="/bizionic/images/hirinSkill_icon13.png" alt="#" >

                                <strong>PPC Specialist</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/bizionic/images/hirinSkill_icon14.png" alt="#" style="width:84px; height:84px; margin-bottom:0px" > 
                            </a>
                        </li>



                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="meetTeam_nav" id="expertss">
        <div class="auto_container">
            <div class="meetTeam_nav_inner">
                <div class="meetTeam_nav_info">
                    <ul>
                        <li v-for="category in categories" :key="category.id">
                            
                            <a v-if="category.id === 1" @click="selectCategory(category)" :class="{ active:  (this.selectedCategory && category.id === this.selectedCategory.id) }" >{{
                                category.title
                            }}</a>

                            <a v-if="category.id != 1" @click="selectCategory(category)"  :class="{ active:  (this.selectedCategory && category.id === this.selectedCategory.id) }">{{
                                category.title
                            }}</a>
                        </li>
                    </ul>
                </div>

                <div class="otherSearch d-none">
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

    <div class="auto_container" >
        <div class="showAll_btn mt-3 ">
            <a href="/hire/developer/developers-other/hirin-view-all" class="btn_default">Show All</a>
        </div>
        <div class="meetTeam_sliderSection pt-0">
            
            <!-- <carousel :items="2" :margin="20"> -->
            <carousel :items-to-show="3" >
                <slide v-for="(expert) in experts" :key="expert">
                    <div class="item">
                        <div class="meetTeam_info">
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
                                        <!-- <strong style="color:black">{{ auth()->user()->name }}</strong> -->
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
                                <a :href=" '/hire/developer/developers-other/HireForm/' + expert.id" class="btn_default" 
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
    
} */

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
     /* Adjust the spacing between expert sections */ width: 100%;
}
.carousel__slide { padding: 0px 10px !important; display: block !important;}

/* Hide the scrollbar */
.meetTeam_sliderSection::-webkit-scrollbar {
    width: 0;
    height: 0;
    gbackground: transparent;
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
            availabl:"",
            tech:"",
            keyword:""
        };
    },
    mounted() {
        this.fetchCategories();
        this.fetchExperts();
    },
    methods: {
        setPeriod(val){
            this.availabl=val
        },
        setTech(val){  
             this.tech=val            
             this.fetchExpertsByExperty();
        },
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
           
            if(experty !== undefined){
                 this.keyword= experty.title;
                 this.availabl='';
            }
             else{
                 this.keyword=this.tech;
            }
  
            const requestExperty = { keyword:this.keyword ,availabl:this.availabl };

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
                document.getElementById('expertss').scrollIntoView();

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
