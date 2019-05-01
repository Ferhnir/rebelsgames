<template>
    <div id="app" class="app-wrapper">
        <navbar />
        <main class="container-fluid pl-0 pr-0" role="main">
            <router-view />
        </main>
    </div>
</template>

<script>
// import 'bootstrap';
// import 'bootstrap/dist/css/bootstrap.min.css';

import i18n from './plugins/i18n';
import Navbar from './components/Navbar.vue';

export default {
    name: 'App',
    components: {
        Navbar
    },
    data() {
        return {
            fullPage: true,
            visible: false
        }
    },
    beforeMount() {      

        let loader = this.$loading.show();

        this.$api.get('static/translations/pages/spaceengineers.json')
            .then((msgs) => {

                _.forEach(msgs.data, (v, k) => {
                    i18n.setLocaleMessage(k, msgs.data[k] || msgs);
                });
                loader.hide();

            }).catch((error) => {

                console.log(error);
                loader.hide();

            });
    }
}
</script>