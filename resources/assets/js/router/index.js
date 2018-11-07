
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../views/Auth/Login.vue'
import Register from '../views/Auth/Register.vue'
import NotFound from '../views/NotFound.vue'
import ExampleComponent from '../components/ExampleComponent.vue'

require('../bootstrap');

window.Vue = require('vue');
Vue.use(VueRouter);

Vue.config.productionTip = false;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: ExampleComponent },
    	{ path: '*', component: NotFound },
        { path: '/register', component: Register },
        { path: '/login', component: Login },
    ]
})

Vue.use(router);

export default router