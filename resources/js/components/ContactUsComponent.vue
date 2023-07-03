<template>
    <div class="connected_form_info">
            <div
                class="alert alert-success text-center"
                role="alert"
                id="success"
                ref="successMessage"
            >
                Thank you for the submitting the inquiry. We will contact you shortly.
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
            // Send form data to the backend
            // console.log(this.formData);

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
