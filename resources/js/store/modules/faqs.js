const state = {
    faqs: {}
};

const getters = {
    allFaqs: (state) => state.faqs
};

const actions = {
    async setFaqs({ commit }, response) {
        commit('setFaqs', response.data);
    }
};

const mutations = {
    setFaqs: (state, faqs) => (state.faqs = faqs)
};

export default {
    state,
    getters,
    actions,
    mutations
}