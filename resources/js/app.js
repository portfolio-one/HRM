
require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
//vuetify 
import Vuetify from 'vuetify'
Vue.use(Vuetify);
Vue.config.productionTip = false


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('dashboard', require('./components/dashboard/index.vue').default);


import router from './Router/router';
const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify(),

});
