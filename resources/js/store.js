import Vue from 'vue';
import Vuex from 'vuex';

import posts from './store/modules/posts.js';
import faqs from './store/modules/faqs.js';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    posts,
    faqs
  }
});