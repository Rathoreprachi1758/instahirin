<script setup>
//Vue.use(VueRouter)
</script>
<template>
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
                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_field">
                            <div class="protectPrivacy">
                                <span>
                                    <img
                                        src="/bizionic/images/protect_icon.png"
                                        alt="#"
                                    />
                                    Your privacy is protected
                                </span>
                            </div>
                        </div>
                    </div>

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
                    <div class="col-lg-6 col-md-12">
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

                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_select">
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                v-model="formData.hiring_type"
                                name="hiring_type"
                                id="hiring_type"
                            >
                             <!-- <option disabled selected>Select hiring type</option> -->
                                <option value="dedicated_developer">Hire Dedicated Developers</option>
                                <option value="dedicated">Hire Dedicated</option>
                                <option value="developers">Hire Developers</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="project_form_select">
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                v-model="formData.budget"
                                name="budget"
                                id="budget"
                            >
                                <option value="below_10K">Below $10K</option>
                                <option value="dedicated">Hire Dedicated</option>
                                <option value="developers">Hire Developers</option>
                            </select>
                        </div>
                    </div>

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
                        <div class="addFile_button">
                            <div class="addFile">
                                <input
                                    type="file"
                                    name="document"
                                    id="document"
                                    @change="handleFileChange"
                                />
                            </div>

                            <div class="project_form_submit">
                                <button class="btn_default" @click="store">
                                    Inquire Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
// import Vue from 'vue'
// import VueRouter from 'vue-router'

// Vue.use(VueRouter)
// const routes = [
//   { path: '/hi',component: () => import('@/components/Thankyou.vue') },
// ]

// const router = new VueRouter({
//   routes,
//   mode: 'history'
// })

// new Vue({
//   el: '#app',
//   router,
//   render: h => h(App)
// })

export default {
    data() {
        return {
            formData: {
                name: "",
                email: "",
                phone: "",
                hiring_type: "dedicated_developer",
                budget: "below_10K",
                details: "",
                document: null,
            },
        };
    },
    methods: {
        handleFileChange(event) {
            const file = event.target.files[0];
            this.formData.document = file;
        },

        store() {
            const form = new FormData();
            form.append("name", this.formData.name);
            form.append("email", this.formData.email);
            form.append("phone", this.formData.phone);
            form.append("hiring_type", this.formData.hiring_type);
            form.append("budget", this.formData.budget);
            form.append("details", this.formData.details);
            form.append("document", this.formData.document);

            axios
                .post("/submit-form", form)
                .then((response) => {
                    if (response.status == 200){
                        this.showSuccessMessage();
                        this.formData = {
                            name: "",
                            email: "",
                            phone: "",
                            hiring_type: "",
                            budget: "",
                            details: "",
                            document: null,
                        };
                    }

                })
                .catch((error) => {
                    this.showFailureMessage();
                });
        },
        showSuccessMessage() {
            axios.get('/Thankyou')
            // this.$refs.successMessage.style.display = "block";
            // setTimeout(() => {
            //     this.$refs.successMessage.style.display = "none";
            // }, 3000);
        },
        showFailureMessage() {
            this.$refs.failureMessage.style.display = "block";
            setTimeout(() => {
                this.$refs.failureMessage.style.display = "none";
            }, 3000);
        },
    },
};
// export default {
//   data() {
//     return {
//       formData: {
//         name: "",
//         email: "",
//         phone: "",
//         hiring_type: "dedicated_developer",
//         budget: "below_10K",
//         details: "",
//         document: null,
//       },
//       successMessageVisible: false,
//       failureMessageVisible: false,
//     };
//   },
//   methods: {
//     handleFileChange(event) {
//       const file = event.target.files[0];
//       this.formData.document = file;
//     },

//     async store() {
//       const form = new FormData();
//       for (const key in this.formData) {
//         form.append(key, this.formData[key]);
//       }

//       try {
//         const response = await axios.post("/submit-form", form);
//         if (response.status === 200) {
//           // Show success message
//           this.showSuccessMessage();
//           // Add the following line to make the additional GET request
//           this.getThankYouData();
//           this.clearForm();
//         }
//       } catch (error) {
//         this.showFailureMessage();
//       }
//     },

//     async getThankYouData() {
//       try {
//         const response = await axios.get('/get-a-free-consultation/Thankyou');
//         // Handle the response data if needed
//       } catch (error) {
//         // Handle errors for the additional request
//       }
//     },

//     showSuccessMessage() {
//       this.successMessageVisible = true;
//       setTimeout(() => {
//         this.successMessageVisible = false;
//         // Optionally, you can navigate to a different route
//         // this.$router.push({ name: 'Home' });
//       }, 3000);
//     },

//     showFailureMessage() {
//       this.failureMessageVisible = true;
//       setTimeout(() => {
//         this.failureMessageVisible = false;
//       }, 3000);
//     },

//     clearForm() {
//       this.formData = {
//         name: "",
//         email: "",
//         phone: "",
//         hiring_type: "",
//         budget: "",
//         details: "",
//         document: null,
//       };
//     },
//   },
// };

</script>
