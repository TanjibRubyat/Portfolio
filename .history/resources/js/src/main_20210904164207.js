import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Master from './Master';
import Master from './pages/HomePage';

Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(IconsPlugin)
Vue.use(Vuex)


const routes = [
    {
        'name': 'home-page',
        'path': '/home-page',
        'component': HomePage
    }
];
const router = new VueRouter({
    mode: 'history',
    base: '/',
    fallback: true,
    routes
}); 

const store = new Vuex.Store({
});

new Vue({
    router,
    store: store,
    render: h=>h(Master)
}).$mount('#app');