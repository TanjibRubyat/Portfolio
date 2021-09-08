import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Master from './Master';
import HomePage from './pages/Home';
import PortfolioPage from './pages/Portfolio';

Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(IconsPlugin)
Vue.use(Vuex)


const routes = [
    {
        'name': 'home-page',
        'path': '/',
        'component': HomePage
    },

    {
        'name': 'portfolio-page',
        'path': '/portfolio-page',
        'component': PortfolioPage
    },
    {
        'name': 'about-page',
        'path': '/about-page',
        'component': AboutPage
    },
    {
        'name': 'contact-page',
        'path': '/contact-page',
        'component': ContactPage
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
}).$mount('#vueApp');