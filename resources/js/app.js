/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";
// import App from "./App.vue";
import { createApp } from "vue";

// Import and initialize the Google Maps API here
// import { createApp } from "vue3-google-address-autocomplete";
import GoogleMapComponent from "vue3-google-address-autocomplete";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});
const app2 = createApp({});

import ExpertsComponent from "./components/ExpertsComponent.vue";
import ExpertsListComponent from "./components/ExpertsListComponent.vue";
import SubscriptionComponent from "./components/SubscriptionComponent.vue";
import Hire from "./components/HireComponent.vue";
import Enquire from "./components/EnquireComponent.vue";
import ContactUs from "./components/ContactUsComponent.vue";
import MarketingContactUs from "./components/MarketingContactUsComponent.vue";
import AboutUs from "./components/AboutUsComponent.vue";
import Contact from "./components/ContactComponent.vue";
import Jobs from "./components/JobsComponent.vue";
import ClientsComponent from "./components/ClientsComponent.vue";
import HireTalent from "./components/HireTalentComponent.vue";
import OnBoard from "./components/OnBoardComponent.vue";
// import Editable from "./components/EditableComponent.vue";
import MonthlyRate from "./components/MonthlyRateComponent.vue";
import HourRate from "./components/HourlyRateComponent.vue";
import ProjectRate from "./components/ProjectRateComponent.vue";
import TeamContactUs from "./components/TeamContactUsComponent.vue";
import InstaRequirement from "./components/InstaRequirementComponent.vue";
import FundingApplyNow from "./components/FundingApplyNowComponent.vue";

app.component("experts-component", ExpertsComponent);
app.component("experts-list-component", ExpertsListComponent);
app.component("contact-us-component", ContactUs);
app.component("marketing-contact-us-component", MarketingContactUs);
app.component("about-us-component", AboutUs);
app.component("contact-component", Contact);
app.component("client-component", ClientsComponent);
app.component("hire-component", Hire);
app.component("enquire-component", Enquire);
app2.component("subscription-component", SubscriptionComponent);
app.component("hire-talent-component", HireTalent);
app.component("jobs-component", Jobs);
app.component("on-board-component", OnBoard);
app.component("monthly-rate-component", MonthlyRate);
app.component("hourly-rate-component", HourRate);
app.component("project-rate-component", ProjectRate);
app.component("team-component", TeamContactUs);
app.component("insta-requirement-component", InstaRequirement);
app.component("funding-apply-now-component", FundingApplyNow);

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
// app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount("#app");
app2.mount("#footer-app");
// app3.mount("#app3");
