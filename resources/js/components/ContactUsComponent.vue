<template>
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
                        type="text"
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
                        type="text"
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
                        <option selected>Hire Dedicated Developers</option>
                        <option value="1">Hire Dedicated</option>
                        <option value="2">Hire Developers</option>
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
                        <option selected>Below $10K</option>
                        <option value="1">Hire Dedicated</option>
                        <option value="2">Hire Developers</option>
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
</template>

<script>
export default {
    data() {
        return {
            formData: {
                name: "",
                email: "",
                phone: "",
                hiring_type: "",
                budget: "",
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
                    console.log(response.data.message);
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
};
</script>
