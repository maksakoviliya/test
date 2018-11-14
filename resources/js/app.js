
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'	

import Categories from './components/Categories'
import Subcategories from './components/Subcategories'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'index',
            component: Subcategories,
        },
        {
            path: '/categories/:slug',
            name: 'category',
            component: Subcategories,
        },
    ],
}); 

const app = new Vue({
    el: '#app',
    components: { Categories, Subcategories },
    router
}); 
