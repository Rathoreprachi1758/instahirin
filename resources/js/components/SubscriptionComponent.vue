<template>
    <div class="connected_form">
        <h3>STAY CONNECTED</h3>
        <div class="connected_form_info">
            <div
                class="alert alert-success text-center"
                role="alert"
                id="success"
            >
                Thank you to subscribe. We will contact you shortly.
            </div>
            <div
                class="alert alert-danger text-center"
                role="alert"
                id="failure"
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

            <div class="btn_subcribe text-right">
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
                    value="SUBCRIBE"
                    class="btn_default d-inline"
                    @click="subscription"
                />
            </div>

            <div class="social_info">
                <a href="#" class="s_fb"
                    ><i class="fa fa-facebook-official" aria-hidden="true"></i
                ></a>
                <a href="#" class="s_inst"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
                <a href="#" class="s_tw"
                    ><i class="fa fa-twitter-square" aria-hidden="true"></i
                ></a>
                <a href="#" class="s_link"
                    ><i class="fa fa-linkedin-square" aria-hidden="true"></i
                ></a>
                <a href="#" class="s_yout"
                    ><i class="fa fa-youtube-play" aria-hidden="true"></i
                ></a>
                <a href="#" class="s_slide"
                    ><i class="fa fa-slideshare" aria-hidden="true"></i
                ></a>
            </div>
        </div>
    </div>
</template>

<script>
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
                        document.getElementById("success").style.display =
                            "block";
                        document.getElementById("failure").style.display =
                            "none";
                        this.subscribe.name = "";
                        this.subscribe.email = "";
                    }
                })
                .catch((error) => {
                    document.getElementById("success").style.display = "none";
                    document.getElementById("failure").style.display = "block";
                });
        },
    },
};
</script>
