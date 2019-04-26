<template>
    <div>
        <div class="container py-4 my-4">
            <div class="row py-4">
                <div class="col-md-12">
                      <b-card no-body>
                        <b-tabs pills card>
                            <b-tab v-for="(faq, index) in allFaqs.data" :title="faq.name[currentLocale]" :active="index == 0" :key="index">
                                <b-card-text>
                                    {{ faq.resources.length }}
                                    <accordion v-if="faq.accordion == true" :accordion-Obj="faq.resources"></accordion>
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
import i18n from '../../plugins/i18n';
import accordion from '../../components/Accordion.vue';

export default {
    name: 'faqPage',
    components: {
        accordion
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
        ...mapGetters(['allFaqs']),
        currentLocale() {
            i18n.locale = this.$route.params.locale;
            return this.$route.params.locale;
        }
    }
}
</script>

