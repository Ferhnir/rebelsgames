<template>
    <div>
        <div class="page-bg posts-text">
            <div class="container my-4 py-4">
                <div class="row justify-content-md-center my-4">
                    <div class="col-md-12 align-self-center">
                        <b-card class="my-4" v-for="(post, index) in posts.data" :key="index">
                            <b-media>
                                <b-link class="post-header" :to="{ name: 'post', params: { postID: post.id } }">
                                    <h5 class="mt-0">{{ post.attributes.subject[currentLocale] }}</h5>
                                </b-link>                            
                                <small class="sub-text">by {{ post.author.data.name }} | {{ post.attributes.created_at }} | {{ post.attributes.category.name }}</small>
                                <div class="mb-3" v-html="post.attributes.excerpt[currentLocale]"></div>
                                <b-link :to="{ name: 'post', params: { postID: post.id } }">Read more</b-link>
                            </b-media>
                        </b-card>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import i18n from '../../plugins/i18n';

export default {
    name: 'News',
    data() {
        return {
            posts: {}
        }
    },
    mounted() {

        let loader = this.$loading.show();

        this.$api.get('api/posts')
             .then((response) => {
                 console.log(response)
                 this.posts = response.data;
                 loader.hide();
             })
             .catch((e) => {
                 loader.hide();
                 console.log(e)
             });
    },
    computed: {
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


