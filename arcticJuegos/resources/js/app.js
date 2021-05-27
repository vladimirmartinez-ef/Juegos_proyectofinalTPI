
require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)

import Estrategia from './components/route_vue/Estrategia.vue'
import Carrera from './components/route_vue/Carreras.vue'
import Principal from './components/route_vue/Principal.vue'
import RPG from './components/route_vue/RPG.vue'


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Principal
        },
        {
            path: '/juegocarrera',
            name: 'carreras',
            component: Carrera
        },
        {
            path: '/juegoestrategia',
            name: 'estrategia',
            component: Estrategia
        },
        {
            path: '/juegorpg',
            name: 'rpg',
            component: RPG
        },
    ],
});

const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify(),

});
