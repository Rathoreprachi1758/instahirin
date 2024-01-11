<template>
    <div class="pricing_section bg_fff">
        <div class="auto_container">
            <div class="pricing_section_detail">
                <div
                    class="custom_tittle aos-init aos-animate"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-easing="ease"
                >
                    <h2 class="pb-2">Plans &<strong> Pricing</strong></h2>
                    <p class="p_color">Let us make you brand stand out!</p>
                </div>

                <div class="coreServices_section">
                    <div class="coreServices_sectionDetail">
                        <div class="coreTabs" style="color: white">
                            <ul>
                                <li
                                    v-for="category in categories"
                                    :key="category.id"
                                >
                                    <a
                                        @click.prevent="showCategory(category)"
                                        :class="{
                                            'selected-category':
                                                category === selectedCategory,
                                        }"
                                        >{{ category.title }}</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <!-- Dynamic Category Data -->
                        <div class="coreTabs_data">
                            <div v-if="selectedCategory">
                                <!-- Dynamic Pricing List -->
                                <div
                                    class="coreTabs_data_show"
                                    style="display: block"
                                >
                                    <div class="pricingList">
                                        <ul>
                                            <li
                                                v-for="plan in selectedCategory.plans"
                                                :key="plan.id"
                                            >
                                                <div
                                                    class="pricingList_col"
                                                    :class="{
                                                        'selected-plan':
                                                            plan ===
                                                            selectedPlan,
                                                    }"
                                                    @click="selectPlan(plan)"
                                                >
                                                    <strong
                                                        class="categoryTittleTag"
                                                        >{{
                                                            plan.title_tag
                                                        }}</strong
                                                    >
                                                    <strong
                                                        class="categoryTittle"
                                                        >{{
                                                            plan.title
                                                        }}</strong
                                                    >

                                                    <h3 class="priceValue">
                                                        <span
                                                            v-if="
                                                                plan.price ===
                                                                    '15' &&
                                                                plan.title ===
                                                                    'PLATINUM'
                                                            "
                                                        >
                                                            <h6
                                                                class="priceValue"
                                                                style="
                                                                    color: #1a5196;
                                                                "
                                                            >
                                                                {{
                                                                    plan.price
                                                                }}% Ad<sub
                                                                >/Month</sub
                                                            >
                                                            </h6></span
                                                        >
                                                        <span v-else
                                                            >${{ plan.price }}
                                                            <sub
                                                                >/Month</sub
                                                            ></span
                                                        >
                                                    </h3>

                                                    <div class="setupFee" >
                                                        <small
                                                            >Setup Fees</small
                                                        >
                                                        <strong
                                                            >${{
                                                                plan.setup_fee
                                                            }}</strong
                                                        >
                                                    </div>

                                                    <div
                                                        class="priceFeatureList"
                                                    >
                                                        <ul>
                                                            <li
                                                                v-for="feature in plan.features"
                                                                :key="
                                                                    feature.id
                                                                "
                                                            >
                                                                <p>
                                                                    <span
                                                                        ><i
                                                                            class="fa fa-check-square-o"
                                                                            aria-hidden="true"
                                                                        ></i
                                                                    ></span>
                                                                    {{
                                                                        feature.feature
                                                                    }}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="consult_btn pt-3 pb-0">
                    <!-- href="/hire/developer/front-end-developement/planId?planId={{}}" -->
                    <!-- :href="generateProposalUrl(selectedPlan)" -->
                    <a
                        class="btn_default text-white"
                        target="_blank"
                        @click.prevent="goToProposalForm(selectedPlan.id)"
                        >Request a Proposal</a
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.selected-category {
    background-color: #1a5196 !important;
    font-weight: bold;
}

/* .selected-plan {
  background-color: #1a5196 !important;
  transform: scaleY(1.0);
  padding-top: 0px;
    background-color: #1a5196 !important;
    font-weight: bold;
} */

.selected-plan {
    background-color: #1a5196 !important;
    transform: scaleY(1);
    padding-top: 0px;
}

.selected-plan::after {
    display: none !important;
}

.selected-plan .categoryTittle {
    color: #fff !important;
}

.selected-plan .priceValue {
    color: #fff !important;
}

.selected-plan .priceValue sub {
    color: #fff !important;
}

.selected-plan .setupFee {
    background-color: #ecf0f7 !important;
}

.selected-plan .setupFee small {
    color: #1a5196 !important;
}

.selected-plan .setupFee strong {
    color: #1a5196 !important;
}

.selected-plan .priceFeatureList ul li p {
    color: #fff !important;
}

.selected-plan .priceFeatureList ul li p span {
    color: #fff !important;
}

.selected-plan .priceFeatureList ul li {
    border-color: #fff !important;
}

.selected-plan .categoryTittleTag {
    display: block !important;
    margin-bottom: 20px;
}
</style>

<script>
// import { mapGetters } from "vuex";
// import { useRouter } from "vue-router";
export default {
    data() {
        return {
            categories: [],
            selectedCategory: null,
            selectedPlan: null,
        };
    },
    mounted() {
        this.fetchCategories();
    },
    methods: {
        // fetch categories
        fetchCategories() {
            axios
                .get("/api/v1/categories-plans-pricing")
                .then((res) => {
                    this.categories = res.data;
                    //   this.selectedPlan = null;
                    // Select the first plan in each category by default
                    for (const category of this.categories) {
                        if (category.plans.length > 0) {
                            this.selectedPlan = category.plans[0];
                            this.selectedCategory = category;
                            break;
                        }
                    }
                })
                .catch((err) => {
                    console.log("Error fetching data:", err);
                });
        },

        // show plans for the selected category
        showCategory(category) {
            this.selectedCategory = category;
            // Set the selected plan to the first plan in the new category
            this.selectedPlan =
                category.plans.length > 0 ? category.plans[0] : null;
        },

        // select a specific plan
        selectPlan(plan) {
            this.selectedPlan = plan;
            //   // Update the route with the selected plan's ID
            //   this.$router.push({ name: "proposal", params: { planId: plan.id } });
        },

        goToProposalForm(planId) {
            // const url = `/hire/developer/front-end-developement/planId?planId=${planId}`;
            const url = `marketing/marketing-services-we-provide/plans-and-pricing/get-plan?planId=${planId}`;

            window.location.href = url;
            console.log("Navigating to:", url);
        },
        // generateProposalUrl(selectedPlan) {
        //   Check if selectedPlan is not null
        //     if (selectedPlan && selectedPlan.id) {
        //       const url = `/hire/developer/front-end-developement/${selectedPlan.id}`;
        //       console.log(url);
        //       return url;
        //     }
        //     return "#";
        //window.location.href = route("planId", { planId: selectedPlan.id });
        // },
    },
};
</script>
