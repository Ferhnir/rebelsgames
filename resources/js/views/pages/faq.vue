<template>
    <div>
        <div class="container py-4 my-4">
            <div class="row py-4">
                <div class="col-md-12">
                      <b-card no-body>
                        <b-tabs content-class="mt-3" class="p-2" pills card justified>
                            <b-tab v-for="(faq, index) in allFaqs.data" :title="faq.name[$route.params.locale]" :active="index == 0" :key="index">
                                <b-card-text>
                                    <accordion v-if="faq.accordion == true" :accordion-obj="faq.resources"></accordion>
                                    <div v-if="faq.accordion == false">
                                        <div v-if="!$_.isEmpty(faq.resources)">
                                            <div v-html="$_.head(faq.resources).answer[$route.params.locale]"></div>
                                            <component :is="$_.head(faq.resources).vuecomponent" v-if="$_.head(faq.resources).vuecomponent" />
                                        </div>
                                    </div>
                                </b-card-text>
                            </b-tab>
                        </b-tabs>
                    </b-card>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';
import accordion from '../../components/Accordion.vue';

//sub pages
import OreAndRefineryPage from './OreAndRefinery.vue';

export default {
    name: 'faqPage',
    components: {
        accordion,
        OreAndRefineryPage
    },
    data() {
        return {
            component: null,
        }
    },
    created() {        
        if(this.$_.isEmpty(this.allFaqs)) {

            let loader = this.$loading.show();
            
            this.$api.get('api/faqs')
             .then((response) => {

                 this.setFaqs(response);
                 loader.hide();

             })
             .catch((e) => {

                 loader.hide();
                 console.log(e)

             });
        }
    },
    methods: {
        ...mapActions(['setFaqs'])
    },
    computed: {
        ...mapGetters(['allFaqs'])
    }
}
</script>
<style scoped>
    .faq-bg {
        background-size: initial;
        background-repeat: repeat;
        /* background-blend-mode:  */
    }

    .card {
        border: none;
    }

    .card-header {
        border-bottom: 0px;
    }
</style>
