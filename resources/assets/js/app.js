
window.Vue = require('vue');

import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import VueRouter from 'vue-router';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

window.axios = require('axios');


Vue.use(VueRouter);

window.$ = window.jQuery = require('jquery');

require('vue-resource');

require('element-ui');




Vue.use(ElementUI, { locale })


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./../talvbansal/media-manager/js/media-manager');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);
    next();
});


const Menu = Vue.component('site-menu', require('./components/siteMenu.vue'));
const Home = Vue.component('home', require('./components/home.vue'));


const router = new VueRouter({

    history: true,

    mode: 'history',

    routes: [
        // dynamic segments start with a colon

        { path: '/', component: Home },
        { path: '/new', component: Home },
        { path: '/few', component: Home }

        


    ]

})


//Router Mounted
const app = new Vue({
    router,


}).$mount('#app');

// const app = new Vue({
//     el: '#app'
// });

