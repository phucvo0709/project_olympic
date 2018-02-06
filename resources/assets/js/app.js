/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import axios from 'axios'
import swal from 'sweetalert'

import VueRouter from 'vue-router'
import {routes} from "./routes";

Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('vue-home', require('./components/Home'));
Vue.component('vue-login', require('./components/Login'))

const app = new Vue({
    el: '#app',
    router
});
