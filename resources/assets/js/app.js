
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


let Myheader =  require('./components/Myheader.vue');
let Myfooter =  require('./components/Myfooter.vue');

const app = new Vue({
    el: '#app',
    components: {
        Myheader,
        Myfooter
    }
});
