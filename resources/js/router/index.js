import Vue from 'vue'
import Router from 'vue-router';

import { defaultLocale } from '../config/i18n';

import faqPage from '../views/pages/faq.vue';
import SpaceEngineersPage from '../views/pages/spaceengineers.vue';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            redirect: `/${defaultLocale}`,
        },
        {
            path: '/:locale',
            component: {
                template: '<router-view />',
            },
            children: [
                {
                    path: 'news',
                    component: {
                        template: '<div>Home</div>',
                    },
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
                }
            ],
        },
    ],
});