<template>
    <div id="app" class="app-wrapper">
        <localizer>
            <navbar />
            <main class="container-fluid pl-0 pr-0" role="main">
                <router-view />
            </main>
        </localizer>
    </div>
</template>

<script>
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

import Localizer from './components/Localizer.vue'
import Navbar from './components/Navbar.vue'

export default {
    name: 'App',
    components: {
        Localizer,
        Navbar,
    },
}
</script>