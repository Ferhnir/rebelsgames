import Vue from 'vue'
import Router from 'vue-router';

import { defaultLocale } from '../config/i18n';

import faqPage from '../views/pages/faq.vue';
import SpaceEngineersPage from '../views/pages/spaceengineers.vue';
import News from '../views/pages/news.vue';
import i18n from '../plugins/i18n';

Vue.use(Router);

function loadPageTranslation(pageName, to, next) {
    const lang = to.params.locale;

    if(!['en','pl','ru','fr'].includes(lang)) return next('en')


    axios.get('/static/translations/pages/'+ pageName +'.json')
        .then((msgs) => {
            _.forEach(msgs.data, (v, k) => {
                i18n.setLocaleMessage(k, msgs.data[k] || msgs);
            });

            console.log(i18n.messages)
        });
}

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
                    component: News,
                },
                {
                    path: 'spaceengineers',
                    component: SpaceEngineersPage,
                    beforeEnter: (to, from, next) => {
                        const lang = to.params.locale;

                        if(!['en','pl','ru','fr'].includes(lang)) return next('en')
                        if(i18n.locale !== to.params.locale) return next()
                    
                        axios.get('/static/translations/pages/spaceengineers.json')
                            .then((msgs) => {
                                _.forEach(msgs.data, (v, k) => {
                                    i18n.setLocaleMessage(k, msgs.data[k] || msgs);
                                });
                                next();
                            });
                    }
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