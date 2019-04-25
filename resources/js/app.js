import Vue from 'vue';
import App from './App.vue';

import _ from 'lodash';    
Object.defineProperty(Vue.prototype, '$_', { value: _ });

//Vuex config
import Vuex from 'vuex';
Vue.use(Vuex);
import store from './store.js';

//Bootstrap config
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap-vue/dist/bootstrap-vue.css';
Vue.use(BootstrapVue);

import router from './router';
import i18n from './plugins/i18n'; 

//Axios Api config
import instance from './config/axios.js';
Vue.prototype.$api = instance;

// Import component
import Loading from 'vue-loading-overlay';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.css';
Vue.use(Loading, {
    loader: 'bars',
    color: '#007BFF',
    backgroundColor: '#ffffff',
    opacity: 0.9,
    width: 156,
    height: 156
});

require('./bootstrap');
// window.Vue = require('vue');

Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue').default);
Vue.component('passport-clients', require('./components/passport/Clients.vue').default);
Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router,
    i18n,
    components: { App },
    template: '<App/>',
});

