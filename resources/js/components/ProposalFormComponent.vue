<script setup>
//Vue.use(VueRouter)
</script>

<template>
    <div v-if="planTitle && planCategory">
        <div class="connected_form_info">
            <div
                class="alert alert-success text-center"
                role="alert"
                id="success"
                ref="successMessage"
            >
                Thank you for the We will contact you shortly.
            </div>

            <div
                class="alert alert-danger text-center"
                role="alert"
                id="failure"
                ref="failureMessage"
            >
                Sorry! There is some problem sending your inquiry at the moment,
                Please try again.
            </div>
            <div class="project_form">
                <div class="row">
                    <!-- name -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                v-model="formData.name"
                                placeholder="Name*"
                            />
                        </div>
                    </div>

                    <!-- company -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="text"
                                name="company"
                                id="company"
                                v-model="formData.company"
                                placeholder="Company Name*"
                            />
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="email"
                                v-model="formData.email"
                                name="email"
                                id="email"
                                placeholder="Enter business email"
                            />
                        </div>
                    </div>

                    <!-- contact details -->
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div
                                    class="project_form_field"
                                    style="
                                        border: 1px solid #ccc;
                                        padding: 10px;
                                        width: 129px;
                                        height: 51px;
                                    "
                                >
                                    <select
                                        name="country_code"
                                        id="country_code"
                                        required
                                        v-model="formData.country_code"
                                        @change="validateField('country_code')"
                                        ref="country_codeField"
                                    >
                                        <option value="">+ Country code</option>
                                        <!-- <option value="+91">India</option> -->
                                        <option
                                            v-for="(country, id) in phoneCodes"
                                            :value="country.phone"
                                            :key="id"
                                        >
                                            {{ country.name }} +{{
                                                country.phone
                                            }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project_form_field">
                                    <input
                                        type="tel"
                                        v-model="formData.phone"
                                        name="phone"
                                        id="phone"
                                        placeholder="Phone / Skype / Whatsapp"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- plan_category -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="tel"
                                v-model="this.planCategory"
                                name="plan_category"
                                id="plan_category"
                                placeholder="Plan Category"
                            />
                        </div>
                    </div>

                    <!-- plan -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="tel"
                                v-model="this.planTitle"
                                name="plan"
                                id="plan"
                                placeholder="Plan"
                            />
                        </div>
                    </div>
                    <!-- /// -->
                    <!-- details -->
                    <div class="col-lg-12 col-md-12">
                        <div class="project_form_textarea">
                            <textarea
                                name="details"
                                id="details"
                                v-model="formData.details"
                                placeholder="Tell us more*"
                            ></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="addFile_button justify-content-end">
                            <div class="project_form_submit">
                                <button class="btn_default" @click="store">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div v-else>
        <div class="connected_form_info">
            <div
                class="alert alert-success text-center"
                role="alert"
                id="success"
                ref="successMessage"
            >
                Thank you for the We will contact you shortly.
            </div>

            <div
                class="alert alert-danger text-center"
                role="alert"
                id="failure"
                ref="failureMessage"
            >
                Sorry! There is some problem sending your inquiry at the moment,
                Please try again.
            </div>
            <div class="project_form">
                <div class="row">
                    <!-- name -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                v-model="formData.name"
                                placeholder="Name*"
                            />
                        </div>
                    </div>

                    <!-- company -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="text"
                                name="company"
                                id="company"
                                v-model="formData.company"
                                placeholder="Company Name*"
                            />
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <input
                                type="email"
                                v-model="formData.email"
                                name="email"
                                id="email"
                                placeholder="Enter business email"
                            />
                        </div>
                    </div>

                    <!-- contact details -->
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div
                                    class="project_form_field"
                                    style=" border: 1px solid #ccc;
                                        padding: 10px;
                                        width: 129px;
                                        height: 51px;
                                    "
                                >
                                    <select
                                        name="country_code"
                                        id="country_code"
                                        required
                                        v-model="formData.country_code"
                                        @change="validateField('country_code')"
                                        ref="country_codeField"
                                    >
                                        <option value="">+ Country code</option>
                                        <!-- <option value="+91">India</option> -->
                                        <option
                                            v-for="(country, id) in phoneCodes"
                                            :value="country.phone"
                                            :key="id"
                                        >
                                            {{ country.name }} +{{
                                                country.phone
                                            }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project_form_field">
                                    <input
                                        type="tel"
                                        v-model="formData.phone"
                                        name="phone"
                                        id="phone"
                                        placeholder="Phone / Skype / Whatsapp"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- plan_category -->
                    <div class="col-lg-6 col-md-12">
                        <div
                            class="project_form_field"
                            style="
                                border: 1px solid #ccc;
                                padding: 10px;
                                width: 360px; /* adjust width as needed */
                            "
                        >
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                v-model="formData.plan_category"
                                name="plan_category"
                                id="plan_category"
                                style="width: 341px"
                            >
                                <option value="">Select an option</option>
                                <option
                                    value="Search Engine Optimization (SEO)"
                                >
                                    Search Engine Optimization (SEO)
                                </option>
                                <option value="Social Media Management (SMM)">
                                    Social Media Management (SMM)
                                </option>
                                <option value="Google Adverts And PPC">
                                    Google Adverts And PPC
                                </option>
                            </select>
                        </div>
                    </div>

                    <!-- plan -->
                    <div class="col-lg-6 col-md-12">
                        <div
                            class="project_form_field"
                            style="
                                border: 1px solid #ccc;
                                padding: 10px;
                                width: 360px;
                            "
                        >
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                v-model="formData.plan"
                                name="plan"
                                id="plan"
                                style="width: 341px"
                            >
                                <option value="">Select a option</option>
                                <option value="GOLD">GOLD</option>
                                <option value="SILVER">SILVER</option>
                                <option value="PLATINUM">PLATINUM</option>
                                <option value="CUSTOM">CUSTOM</option>
                            </select>
                        </div>
                    </div>
                    <!-- details -->
                    <div class="col-lg-12 col-md-12">
                        <div class="project_form_textarea">
                            <textarea
                                name="details"
                                id="details"
                                v-model="formData.details"
                                placeholder="Tell us more*"
                            ></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="addFile_button justify-content-end">
                            <div class="project_form_submit">
                                <button class="btn_default" @click="store">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        planTitle: {
            type: String,
            required: true,
            default: ''
        },
        planCategory: {
            type: String,
            required: true,
            default: ''
        },
    },
    data() {
        return {
            formData: {
                name: "",
                company: "",
                email: "",
                // phoneCodes: [],
                country_code: "",
                phone: "",
                plan_category: "",
                plan: "",
                details: "",
                // document: null,
            },
            phoneCodes: [],
        };
    },
    // props: ["plan"],
    mounted() {
        this.fetchPhoneCodes();
        if (!this.planTitle || !this.planCategory) {
            console.error("planTitle or planCategory is empty or undefined.");
            return;
        }else{
            console.log("planTitle:", this.planTitle);
            console.log("Category:", this.planCategory);
        }
    },
    methods: {
        store() {
            const form = new FormData();
            form.append("name", this.formData.name);
            form.append("company", this.formData.company);
            form.append("email", this.formData.email);
            form.append("country_code", this.formData.country_code);
            form.append("phone", this.formData.phone);
            if (this.planCategory === null || this.planCategory === undefined ) {
                form.append("plan_category", this.formData.plan_category);
                form.append("plan", this.formData.plan);
            } else {
                form.append("plan_category", this.planCategory);
                form.append("plan", this.planTitle);
            }
            form.append("details", this.formData.details);
            //   form.append("document", this.formData.document);

            axios
                .post("/submit-proposal-form", form)
                .then((response) => {
                    if (response.status === 200) {
                        this.$refs.successMessage.style.display = "block";
                        setTimeout(() => {
                            this.$refs.successMessage.style.display = "none";
                        }, 3000);

                        // Reset the form
                        this.formData = {
                            name: "",
                            company: "",
                            email: "",
                            country_code: "",
                            phone: "",
                            plan_category: "",
                            plan: "",
                            details: "",
                        };
                        //thankyou-page
                        window.location.href =
                            "/industries/industries-we-serve/industries/thankyou";
                    }
                })
                .catch((error) => {
                    this.showFailureMessage();
                });
        },
        showFailureMessage() {
            this.$refs.failureMessage.style.display = "block";
            setTimeout(() => {
                this.$refs.failureMessage.style.display = "none";
            }, 3000);
        },
        //
        async fetchPhoneCodes() {
            try {
                const response = await fetch("/api/v1/getPhone");
                if (response.ok) {
                    const data = await response.json();
                    this.phoneCodes = data;
                } else {
                    throw new Error(`Server responded with ${response.status}`);
                }
            } catch (error) {
                console.error("Error fetching phone codes", error.message);
            }
        },
    },
};
</script>
