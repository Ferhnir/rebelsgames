<template>
    <div class="page-bg posts-text">
        <div class="container my-4 py-4">
            <div class="row justify-content-md-center my-4">
                <div class="col-md-12 align-self-center">
                      <b-card v-if="Object.keys(this.post).length !== 0" :title="post.attributes.subject[currentLocale]" :sub-title="subTitle">
                        <hr />
                        <b-card-text v-html="post.attributes.post_content[currentLocale]">
                        </b-card-text>
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
            post: {},
            // subTitle: null
        }
    },
    computed: {
        currentLocale() {
            i18n.locale = this.$route.params.locale;
            return this.$route.params.locale;
        },
        subTitle() {
            // return 'By ' + this.post.author.data.name + ' | ' + this.post.attributes.created_at + ' | ' + this.post.attributes.category.name;
        }
    },
    beforeMount() {
        this.$api.get('/api/posts/' + this.$route.params.postID)
            .then((response) => {
                this.post = response.data;
                console.log(this.post.author.data.name);
                // this.subTitle = 'By ' + this.post.author.data.name;
                // this.subTitle += ' | ' + this.post.attributes.created_at;
                // this.subTitle += ' | ' + this.post.attributes.category.name;
            })
            .catch((e) => {
                console.log(e)
            });
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


