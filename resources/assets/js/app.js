
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// VUEX
import Vuex from 'vuex'
Vue.use(Vuex);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('product-card', require('./components/ProductCard.vue'));
Vue.component('product-grid', require('./components/ProductGrid.vue'));

import store from './store';

const app = new Vue({
    el: '#app',
    store: store, // or just store
    created() {
        this.$store.dispatch('loadProducts',null);
    },
});
