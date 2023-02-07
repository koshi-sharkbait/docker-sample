import './bootstrap';
import { createApp } from 'vue'
import 'vuetify/lib/styles/main.sass'
import { createVuetify } from 'vuetify'
import App from './components/AppComponent.vue'
import '@mdi/font/css/materialdesignicons.css'

const vuetify = createVuetify()

const app = createApp(App)
app.use(vuetify)
app.mount("#app")