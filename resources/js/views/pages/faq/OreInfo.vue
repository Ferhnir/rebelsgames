<template>
    <div>
        <div class="container py-4 my-4">
            <div class="row justify-content-md-center py-4">
                <div class="col-md-12">
                    <b-col md="6" class="my-1">
                        <b-form-group label-cols-sm="2" label="Search" class="mb-0">
                        <b-input-group>
                            <b-form-input v-model="filter" placeholder="Type to Search Ore"></b-form-input>
                            <b-input-group-append>
                                <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
                            </b-input-group-append>
                        </b-input-group>
                        </b-form-group>
                    </b-col>
                    <br />
                    <b-table v-if="allOres.data.ore" :items="allOres.data.ore" :fields="fields" :filter="filter"></b-table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    name: 'OreInfoPage',
    data() {
        return {
            filter: null,
            fields: [{
                        key: 'id',
                        label: 'ID'
                    },{
                        key: 'name',
                        formatter: value => {
                            return value[this.$route.params.locale];
                        }
                    }]
        }
    },
    beforeMount() {
            let loader = this.$loading.show();
            
            this.$api.get('api/ores')
            .then((response) => {

                this.setOres(response);
                this.createFields(response);
                loader.hide();

            })
            .catch((e) => {

                loader.hide();
                console.log(e)
                 
            });
    },
    methods: {
        ...mapActions(['setOres']),
        createFields(resource){
            this.$_.forEach(resource.data.data.celestials, (celestial, index) => {
                this.$_.forEach(celestial, (v, i) => {
                    this.fields[index] = { name: v};
                });
            });
        }
    },
    computed: {
        ...mapGetters(['allOres'])
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
