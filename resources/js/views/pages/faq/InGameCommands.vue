<template>
    <div>
        <div class="container py-4 my-4">
            <div class="row justify-content-md-center py-4">
                <div class="col-md-8" v-if="!$_.isEmpty(allCommands.data)">
                    <b-table :fields="fields" :items="allCommands.data.commands"></b-table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    name: 'InGameCommands',
    data() {
        return {
            filter: null,
            fields: [{
                        key: 'command'
                    },{
                        key: 'description',
                        formatter: value => {
                            return value[this.$route.params.locale];
                        }
                    },{
                        key: 'additional_desc',
                        label: 'Additional description'
                    }]
        }
    },
    beforeMount() {
            let loader = this.$loading.show();
            
            this.$api.get('api/faq/commands')
            .then((response) => {

                this.setCommands(response);
                loader.hide();

            })
            .catch((e) => {

                loader.hide();
                console.log(e)
                 
            });
    },
    methods: {
        ...mapActions(['setCommands'])
    },
    computed: {
        ...mapGetters(['allCommands'])
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
