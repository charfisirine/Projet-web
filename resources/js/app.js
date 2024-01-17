import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHashHistory } from "vue-router";
import { routes } from "./routes";
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap-icons/font/bootstrap-icons.css';

import App from './App.vue'
let app = createApp(App)


const router = createRouter({//createRouter un module de routage officiel pour lesapplications Vue.js.
history: createWebHashHistory(),//gérer les changements de page sans rechargement complet de la page.
routes: routes,//à chaque fois nraja3 il route de la page mil routes.js
})




app.use(router);//indique à l'application Vue d'utiliser le router que vous avez créé.
app.mount("#app")//C'est là que votre application sera affichée à l'utilisateur.

