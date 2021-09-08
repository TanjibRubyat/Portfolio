import Vue from 'vue';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import Master from './Master';

Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(IconsPlugin)
Vue.use(Vuex)


const routes = [
    {
        'name':'home-page',
        'path': '/',
        'component': HomePage
    },
    {
        'name': 'category-page',
        'path': '/category/:id',
        'component': CategoryPage
    },
    {
        'name':'product-page',
        'path': '/product/:slug',
        'component': ProductPage
    },
    {
        'name':'checkout-page',
        'path': '/checkout',
        'component': CheckoutPage
    },
    {
        'name':'cart-page',
        'path': '/cart',
        'component': CartPage
    },
    {
        'name':'checkout-success',
        'path': '/checkout-success',
        'component': CheckoutSuccess
    },
    {
        'name':'checkout-failure',
        'path': '/checkout-failure',
        'component': CheckoutFailure
    },
    {
        'name':'login-page',
        'path':'/login-page',
        'component':LoginPage
    },
    {
        'name': 'register-page',
        'path':'/registr-page',
        'component':RegisterPage
    },
    {
        'name': 'myaccount-page',
        'path': '/myaccount-page',
        'component': MyaccountPage
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