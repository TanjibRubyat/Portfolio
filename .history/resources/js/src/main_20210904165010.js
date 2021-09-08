import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Master from './Master';
import HomePage from './pages/Home';

Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(IconsPlugin)
Vue.use(Vuex)


const routes = [
    {
        'name': 'home-Page',
        'path': '/',
        'component': HomePage
    },

    {
        'name': 'about-Page',
        'path': '/about-page',
        'component': AboutPage
    },

    {
        'name': 'contact-Page',
        'path': '/contact-page',
        'component': ContactPage
    },

    {
        'name': 'portfolio-Page',
        'path': '/portfolio-page',
        'component': PortfolioPage
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