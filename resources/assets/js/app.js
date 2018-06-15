
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


Vue.filter('money', (value) => {
    function reverse(str) {
        return str.split('').reverse().join('');
    }

    function num2str(num) {
        var str = num+"";
        return reverse(reverse(str).replace(/\d{3}/g,'$&,').replace(/\,$/,''));
    }

    const ds = (num2str(value / 100)+'.00').split('.');

    return '$' + ds[0] + '.' + (ds[1]+'00').substring(0,2);
})



// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('product-card', require('./components/ProductCard.vue'));
Vue.component('product-grid', require('./components/ProductGrid.vue'));

Vue.component('shopping-cart', require('./components/ShoppingCart.vue'));
Vue.component('shopping-cart-totals', require('./components/ShoppingCartTotals.vue'));


import store from './store';

const app = new Vue({
    el: '#app',
    store: store, // or just store
    created() {
        this.$store.dispatch('loadProducts',null);
    },
});
