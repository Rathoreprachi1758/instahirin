<template>
    <div class="clientBizionic_section bg_e5e6e7 clientMarketing">
            <div class="auto_container">
                <div class="clientBizionic_section_detail">
                <div class="custom_tittle">
                        <h2 class="pb-1"><b>These are some of our</b> satisfied clients,</h2>
                        <h2><b>and this is what they have to say...</b></h2>
                    </div>
                    <div class="clientBizionic_info">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="clientBizionic_partners">
                                    <ul>
                                        <li v-for="(client, index) in clients" :key="client.id">
                                            <a @click="displayReviewAction(client)" :class="{ active:  (this.selectedClient && client.id === this.selectedClient.id) }" >
                                                <img :src="`/storage/${client.logo}`" alt="#" >
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="col-lg-6 col-md-6">
                                <div class="clientBizionic_reviews">
                                    <div class="reviewsInner_client">
                                        <div v-for="(client, index) in clients" :key="client.id" class="clientBizionic_reviews_info" :id="`cl_logo_${index+1}`" :style="{display:client.display}">
                                            <div class="reviewInner">
                                                <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                                <p>{{ client.description }}</p>
                                                <strong>{{ client.title }}</strong>
                                            </div> 
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
                selectedClient: null,
                clients:[]
            };
        },
        mounted() {
            this.fetchClients();
        },
        methods: {
            fetchClients() {
                axios
                    .get("/api/v1/clients")
                    .then((response) => {
                        this.clients = response.data;
                        this.displayReviewAction(this.clients[0]);
                    })
                    .catch((error) => {
                        console.error(error);
                    });
            },
            displayReviewAction(client){
                this.clients.map(client=>client.display = 'none');
                client.display = 'block';
                this.selectedClient = client;
            }
        },
    };
    </script>
    