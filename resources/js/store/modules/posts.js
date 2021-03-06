import axios from 'axios';

const state = {
    posts: {}
};

const getters = {
    allPosts: (state) => state.posts
};

const actions = {
    async setPosts({ commit }, response) {
        // const response = await axios.get('http://rebelsgames.test/api/posts');
        commit('setPosts', response.data);
    }
};

const mutations = {
    setPosts: (state, posts) => (state.posts = posts)
};

export default {
    state,
    getters,
    actions,
    mutations
}