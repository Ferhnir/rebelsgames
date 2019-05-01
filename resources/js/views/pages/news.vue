<template>
    <div>
        <div class="page-bg posts-text">
            <div class="container my-4 py-4">
                <div class="row justify-content-md-center my-4">
                    <div class="col-md-12 align-self-center">
                        <b-card class="my-4" v-for="(post, index) in allPosts.data" :key="index">
                            <b-media>
                                <b-link class="post-header" :to="{ name: 'post', params: { postID: post.post_id } }">
                                    <h5 class="mt-0">{{ post.attributes.subject[$route.params.locale] }}</h5>
                                </b-link>                            
                                <small class="sub-text">by {{ post.author.data.name }} | {{ post.attributes.created_at }} | {{ post.attributes.category.name[$route.params.locale] }}</small>
                                <div class="mb-3" v-html="post.attributes.excerpt[$route.params.locale]"></div>
                                <b-link :to="{ name: 'post', params: { postID: post.post_id } }">Read more</b-link>
                            </b-media>
                        </b-card>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import i18n from '../../plugins/i18n';

export default {
    name: 'News',
    data() {
        return {
            posts: {}
        }
    },
    methods: {
        ...mapActions(['setPosts'])
    },
    created() {
        
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
    },
    computed: {
        ...mapGetters(['allPosts']),
        currentLocale() {
            i18n.locale = this.$route.params.locale;
            return this.$route.params.locale;
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


