/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./slick');
import VModal from 'vue-js-modal'
import 'vue-js-modal/dist/styles.css'


import 'vue-loaders/dist/vue-loaders.css';
import VueLoaders from 'vue-loaders';

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
import { CoolSelectPlugin } from 'vue-cool-select'

// paste the line below only if you need "bootstrap" theme
import 'vue-cool-select/dist/themes/bootstrap.css'
// paste the line below only if you need "material-design" theme
import 'vue-cool-select/dist/themes/material-design.css'
// you can also import your theme


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('reservation-component', require('./service/ReservationComponent').default)
Vue.use(VueLoaders);
Vue.use(VModal)
Vue.use(CoolSelectPlugin)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
