<template>
    <div>
        <div class="container my-4 py-4">
            <div class="row justify-content-md-center my-4">
                <div class="col-md-9 align-self-center">
                    <b-card class="my-4" v-for="(post, index) in posts" :key="index">
                        <b-media>
                            <b-img slot="aside" blank blank-color="#ccc" width="64" alt="placeholder"></b-img>
                            <h5 class="mt-0">{{ post.subject[currentLocale] }}</h5>
                            <small>by {{ post.author }} | {{ post.created_at }} | {{ post.category}}</small>
                            <p>
                                {{ post.excetra[currentLocale] }}
                            </p>
                        </b-media>
                    </b-card>
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
        axios.get('http://rebelsgames.test/api/posts')
             .then((response) => {
                 console.log(response.data)
                 this.posts = response.data;
             })
             .catch((e) => {
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

