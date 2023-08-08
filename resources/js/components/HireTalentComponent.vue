<template>
    
<div class="project_form">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="project_form_field">
                <input type="text" value="" placeholder="Name*" name="name" id="name"/>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="project_form_field">
                <input type="text" value="" placeholder="Phone / Skype / Whatsapp" name="phone" id="phone"/>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="project_form_field">
                <input type="text" value="" placeholder="Company Name " name="company" id="company" />
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="project_form_field">
                <input type="text" value="" placeholder="Enter business email*" name="email" id="email"/>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="project_form_field">
                <input type="text" value="" placeholder="Website (if Available)" name="website" id="website" />
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="project_form_field">
                <input type="text" value="" placeholder="Address" name="address" id="address" />
            </div>
        </div>



        <div class="col-lg-12 col-md-12">
            <div class="project_form_textarea">
                <textarea placeholder=" How can we help you*" name="message" id="message"></textarea>
            </div>
        </div>


        <div class="col-lg-12 col-md-12">
            <div class="project_form_select">
                <select class="form-select" aria-label="Default select example" name="hiring_type" id="hiring_type" required>
                    <option value="" selected>Hire Periods (Full Time, Part Time, Daily, Weekly, Periods) Please Select</option>
                    <option value="Dedicated">Hire Dedicated</option>
                    <option value="Developer">Hire Developers</option>
                </select>
            </div>
        </div>



        <div class="col-lg-12 col-md-12">
            <div class="dateTime_range">
                <label>From</label>
                <div class="project_form_field">
                    <input type="date" value="" placeholder="Calendar" name="from_date" >
                </div>


                <label class="text-center">To</label>
                <div class="project_form_field mr-3">
                    <input type="date" value="" placeholder="Calendar" name="to_date">
                </div>



                <div class="project_form_field ml-3">
                    <input type="text" value="" placeholder="Time" id="timePicker" name="from_time"/>
                </div>
                <label class="text-center">To</label>
                <div class="project_form_field">
                    <input type="text" value="" placeholder="Time" name="to_time">
                </div>


                <div class="addDeleteBtn">
                    <a href="javascript:void(0)" class="p_color"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)" class="text-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>




        <div class="col-lg-12 col-md-12">
            <div class="scheduleCheckbox onFormCheck">
                <label class="checkbox-label">
                    <input type="checkbox" name="virtual_assistance_call" value="Yes">
                    <span class="checkbox-custom rectangular"></span>
                    Schedule an Virtual Assistance Call
                </label>
            </div>
        </div>




        <div class="col-lg-12 col-md-12">
            <div class="dateTime_range">
                <label style="min-width: 90px;">Availability</label>
                <div class="project_form_field">
                    <input type="date" value="" placeholder="Calendar" name="availability_date" >
                </div>





                <div class="project_form_field ml-5">
                    <input type="text" value="" placeholder="Time" id="timePicker" name="availability_time_from"/>
                </div>
                <label class="text-center">To</label>
                <div class="project_form_field">
                    <input type="text" value="" placeholder="Time" name="availability_time_to">
                </div>


                <div class="addDeleteBtn">
                    <a href="javascript:void(0)" class="p_color"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a href="javascript:void(0)" class="text-danger"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>



        <div class="col-lg-12 col-md-12">
            <div class="addFile_button onHiredetailPage">
                <div class="addFile">
                    <strong>Upload supporting documents. if have!</strong>
                    <input type="file" name="document" />
                </div>
            </div>
        </div>



        <div class="col-lg-12 col-md-12">
            <div class="scheduleCheckbox onFormCheck">
                <label class="checkbox-label">
                    <input type="checkbox">
                    <span class="checkbox-custom rectangular"></span>
                    By clicking “Sign Up” you agree to Bizionic Technologies and Marketing Solution’s <a href="#">Term of Use</a>  and <a href="#">Privacy Statement</a> .
                </label>

                <label class="checkbox-label">
                    <input type="checkbox">
                    <span class="checkbox-custom rectangular"></span>
                    Please tick this box if you are happy for us to send you future promotions, offers and communication.
                </label>
            </div>
        </div>


        <div class="col-lg-12 col-md-12">
            <div class="project_form_submit pt-4">
                <input type="submit" value="Get a No-Obligation Meeting" class="btn_default" />
            </div>
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
var pathArray = window.location.pathname.split('/');
var page = pathArray[pathArray.length - 1];
var pageText = page.replaceAll("-", " ");

$('.page-dev').html(pageText);

</script>
