<template>
    <div class="connected_form">
        <h5>STAY CONNECTED</h5>
        <div class="connected_form_info">
            <div
                class="alert alert-success text-center"
                role="alert"
                id="subscribe_success"
                ref="successMessage"
            >
                Thank you to subscribe. We will contact you shortly.
            </div>
            <div
                class="alert alert-danger text-center"
                role="alert"
                id="subscribe_failure"
                ref="failureMessage"
            >
                Sorry! There is some problem sending your query at the moment,
                Please try again.
            </div>

            <ul>
                <li>
                    <div class="connected_form_field">
                        <strong>First Name</strong>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            v-model="subscribe.name"
                            placeholder="First Name"
                        />
                    </div>
                </li>
                <li>
                    <div class="connected_form_field">
                        <strong>Email*</strong>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            v-model="subscribe.email"
                            placeholder="Email"
                        />
                    </div>
                </li>
            </ul>
            <p>
                By signing up, you agree to Bizionic Technologies and Marketing
                Solution’s <a href="#">Privacy Policy</a> , You can withdraw
                your consent by <a href="#">contacting</a> us.
            </p>

            <div class="btn_subcribe">
                <input
                    type="text"
                    class="hidden d-none"
                    name="lead_type"
                    id="lead_type"
                    value="Subscription"
                />
                <input
                    type="text"
                    class="hidden d-none"
                    name="honeypot"
                    id="honeypot"
                />
                <input
                    type="submit"
                    value="SUBSCRIBE"
                    class="btn_default d-inline"
                    @click="subscription"
                />
            </div>

            
        </div>
    </div>
</template>

<style>
/* #success,
#failure {
    display: none;
} */
</style>

<script>
import axios from 'axios';
export default {
    // mounted() {
    //     console.log("Subscription Component mounted.");
    // },
    data() {
        return {
            subscribe: {
                name: "",
                email: "",
            },
        };
    },
    methods: {
        subscription() {
            // Send subscribe form data to the backend
            // console.log(this.subscribe);
            axios
                .post("/subscribe", this.subscribe)
                .then((response) => {
                    // console.log(response);

                    if (response.status === 200) {
                        this.showSuccessMessage();
                        this.subscribe.name = "";
                        this.subscribe.email = "";
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
