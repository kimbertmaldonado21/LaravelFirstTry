import './bootstrap';

import { createApp } from 'vue'

import loginForm from './components/Login/loginForm.vue'

// createApp(loginForm).mount("#app")

// createApp(loginForm).mount("#app")
// app2

let app = createApp(loginForm)
app.mount('#app')