<template>
    <div>
        <div class="container py-4 my-4">
            <div class="row py-4">
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
                <hr />
                <b-tabs content-class="mt-3" fill v-if="!$_.isEmpty(allOres.data)">
                    <b-tab v-for="(celestials, csIndex) in allOres.data.celestials" :key="csIndex" :title="celestials.name[$route.params.locale]">
                        <table class="table table-bordered table-sm table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Ore</th>
                                    <th scope="col" v-for="(celestial, cIndex) in celestials.resources[0].celestial_occurr" :key="cIndex">
                                        {{ celestial.name[$route.params.locale] }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(ore, oIndex) in celestials.resources" :key="oIndex">                                    
                                    <th scope="row">
                                        {{ ore.name[$route.params.locale] }}
                                    </th>
                                    <td v-for="(celestialObj, coIndex) in ore.celestial_occurr" :key="coIndex" :class="[celestialObj.v ? 'bg-success' : 'bg-danger']">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </b-tab>
                </b-tabs>
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
            fields: {}
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
                // this.fields[i] = {v: v};
                // console.log(this.fields[i]);
                this.$_.forEach(celestial, (v, i) => {
                    this.fields[index] = { name: v};
                    console.log(this.fields);
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
