<template>
<div class="clientBizionic_section bg_e5e6e7 clientMarketing">
        <div class="auto_container">
            <div class="clientBizionic_section_detail aos-init aos-animate"  data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in">
                <div class="custom_tittle">
                    <h2><b>These are some of our</b> amazing clients,</h2>
                    <h2><b>and this is what they</b> have to say...</h2>
                </div>
                <div class="clientBizionic_info ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="clientBizionic_partners_sec">

                                <div class="clientBizionic_reviews">
                                    <div class=" slider-for">
                                        <!-- Foreach Clients -->
                                        <div>
                                            <div class="clientBizionic_reviews_info">
                                                <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                                <p>{{ content }}</p>
                                                <p class="pt-2 bold">Tag Line</p>
                                                <strong>Sub title</strong>
                                                <strong>Title</strong>
                                            </div>
                                        </div>                                        
                                        <!-- enfforeach -->
                                                                              
    
                                    </div>
                                </div>


                                 <div class="clientSlider "> 
                                    <div class="clientSlider_inner  slider slider-nav">
                                       <!-- Foreach Clients -->
                                            <div><a href="javascript:void(0)"><img src="#" alt="alt" /></a></div>
                                        <!--End foreach  -->
                                         
                                    </div>
                                </div>
                                
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
