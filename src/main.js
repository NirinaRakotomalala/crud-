import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import { useCookies } from 'vue3-cookies'

import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.js'
import './assets/style/main.scss'
import './assets/style/app.scss'
import './assets/style/style.css'

createApp(App).use(useCookies).use(store).use(router).mount('#app')
