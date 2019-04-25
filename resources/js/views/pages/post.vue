<template>
    <div class="page-bg posts-text">
        <div class="container my-4 py-4">
            <div class="row justify-content-md-center my-4">
                <div class="col-md-12 align-self-center">
                    <b-card v-if="!$_.isEmpty(filteredList)" :title="filteredList[0].attributes.subject[currentLocale]" :sub-title="subTitle">
                        <hr />
                        <b-card-text v-html="filteredList[0].attributes.content[currentLocale]" />
                    </b-card>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import i18n from '../../plugins/i18n';
import { mapGetters, mapActions } from 'vuex';

export default {
    name: 'News',
    data() {
        return {
            post: {}
        }
    },
    methods: {
        ...mapActions(['setPosts'])
    },
    computed: {
        ...mapGetters(['allPosts']),
        currentLocale() {

            i18n.locale = this.$route.params.locale;
            return this.$route.params.locale;

        },
        filteredList() {

            if(!this.$_.isEmpty(this.allPosts)) {

                return (this.allPosts.data).filter(post => {

                    return post.post_id.includes(this.$route.params.postID);

                });

            }

        },
        subTitle() {
            let title = '';

            title += 'By ' + this.filteredList[0].author.data.name;
            title += ' | ' + this.filteredList[0].attributes.created_at;
            title += ' | ' + this.filteredList[0].attributes.category.name;
            
            return title;
        }
    },
    beforeMount() {

        if(this.$_.isEmpty(this.allPosts)) {

            let loader = this.$loading.show();
            
            this.$api.get('api/posts')
             .then((response) => {

                 this.setPosts(response);
                 loader.hide();

             })
             .catch((e) => {

                 loader.hide();
                 console.log(e)
                 
             });
        }
    }
}
</script>
<style scoped>
    .page-bg {
        min-height: 100vh; 
        background-size: initial;
        background-repeat: repeat;
        background-blend-mode: hard-light;
        background-color: initial!important;
        background-image: url(/images/h.jpg),radial-gradient(circle at center,#95b0c1 0%,rgba(0,0,0,0.87) 100%)!important;
    }

    .posts-text {
        color: #FFF;
    }

    .post-header {
        color: #bcbcbc;
        text-decoration: underline !important;
        -webkit-text-decoration-color: #0c71c3 !important; /* Safari */  
        text-decoration-color: #0c71c3 !important;
    }

    .sub-text {
        color: grey;
    }

    .card {
        background: none;
        border: none;
    }
</style>


