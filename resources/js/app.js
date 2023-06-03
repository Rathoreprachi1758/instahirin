import './bootstrap';
import { createApp } from 'vue';

import Experts from './components/experts'

const app = createApp({})

app.component('experts-comp', Experts);
app.mount('#app');