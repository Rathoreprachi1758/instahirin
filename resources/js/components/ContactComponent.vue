<template>
    <div class="connected_form_info">
        <div class="alert alert-success text-center" role="alert" id="success" ref="successMessage">
            Thank you for the message. We will contact you shortly.
        </div>

        <div class="alert alert-danger text-center" role="alert" id="failure" ref="failureMessage">
            Sorry! There is some problem sending your query at the moment,
            Please try again.
        </div>
        <div class="project_form">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="project_form_field">
                        <input
                            type="text"
                            v-model="hireForm.name"
                            name="name"
                            id="hire_name"
                            placeholder="Name*"
                        />
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12">
                    <div class="project_form_field">
                        <input
                            type="text"
                            v-model="hireForm.phone"
                            name="phone"
                            id="phone"
                            placeholder="Phone / Skype / Whatsapp"
                        />
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="project_form_field">
                        <input
                            type="email"
                            v-model="hireForm.email"
                            name="email"
                            id="hire_email"
                            placeholder="Enter business email"
                        />
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="project_form_textarea">
                        <textarea
                            name="message"
                            id="message"
                            v-model="hireForm.message"
                            placeholder="What can we build together....."
                        ></textarea>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="addFile_button">
                         

                        <div class="project_form_submit">
                            <input
                                type="text"
                                class="hidden d-none"
                                name="lead_type"
                                id="hire_lead_type"
                                value="Hire Now"
                            />
                            <input
                                type="text"
                                class="hidden  d-none"
                                name="honeypot"
                                id="honeypot"
                            />
                            <div class="project_form_submit">
                                <input
                                    type="submit"
                                    value="Contact Us"
                                    class="btn_default"
                                    @click="hire"
                                />
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
    data() {
        return {
            hireForm: {
                name: "",
                email: "",
                phone: "",
                message: "",
            },
        };
    },
    methods: {
        hire() {
            axios
                .post("/hire", this.hireForm)
                .then((response) => {
                    if (response.status == 200) {
                        // document.getElementById("success").style.display =
                        //     "block";
                        // document.getElementById("failure").style.display =
                        //     "none";
                        this.showSuccessMessage();
                        this.hireForm = {
                            name: "",
                            email: "",
                            phone: "",
                            message: "",
                        };
                    }
                })
                .catch((error) => {
                    this.showFailureMessage();
                    // document.getElementById("success").style.display = "none";
                    // document.getElementById("failure").style.display = "block";
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
    },
};
</script>
