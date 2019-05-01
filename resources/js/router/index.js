import Vue from 'vue'
import Router from 'vue-router';

import { defaultLocale } from '../config/i18n';

import faqPage from '../views/pages/faq.vue';
import SpaceEngineersPage from '../views/pages/spaceengineers.vue';
import News from '../views/pages/news.vue';
import Post from '../views/pages/post.vue';
import OreAndRefineryPage from '../views/pages/OreAndRefinery.vue';
import i18n from '../plugins/i18n';

import axios from 'axios';
Vue.use(Router);

// function loadPageTranslation(pageName, to, next) {
//     const lang = to.params.locale;

//     if(!['en','pl','ru','fr'].includes(lang)) return next('en')


//     axios.get('/static/translations/pages/'+ pageName +'.json')
//         .then((msgs) => {
//             _.forEach(msgs.data, (v, k) => {
//                 i18n.setLocaleMessage(k, msgs.data[k] || msgs);
//             });

//             console.log(i18n.messages)
//         });
// }

export default new Router({
    routes: [
        {
            path: '/',
            redirect: `/${defaultLocale}/news`,
        },
        {
            path: '/en',
            redirect: `/${defaultLocale}/news`,
        },
        {
            path: '/:locale',
            component: {
                template: '<router-view />',
            },
            beforeEnter: (to, from, next) => {
                const lang = to.params.locale;
                if(!['en','pl','ru','fr'].includes(lang)) return next('en')
                next();
            },
            children: [
                {
                    name: 'posts',
                    path: 'news',
                    component: News
                },
                {
                    name: 'post',
                    path: 'news/:postID',
                    component: Post
                },
                {
                    path: 'spaceengineers',
                    component: SpaceEngineersPage,
                },
                {
                    path: 'donate',
                    component: {
                        template: '<div>ProductIndex</div>',
                    },
                },
                {
                    path: 'rebelscrew',
                    component: {
                        template: '<div>About</div>',
                    },
                },
                {
                    path: 'vote',
                    component: {
                        template: '<div>Vote</div>',
                    },
                },
                {
                    path: 'faq',
                    component: faqPage
                },
                {
                    path: 'oreandrefinery',
                    component: OreAndRefineryPage
                }
            ],
        },
        {
            path: '*',
            redirect: `/${defaultLocale}/news`,
        },
    ],
});