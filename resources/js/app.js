import './bootstrap';

import { createApp } from 'vue';
import App from './components/App.vue'

import '../css/app.css'

import router from "./router"

let app = createApp(App).use(router).mount("#app")
