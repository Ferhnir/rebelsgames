const state = {
    faqs: {},
    commands: {}
};

const getters = {
    allFaqs: (state) => state.faqs,
    allCommands: (state) => state.commands
};

const actions = {
    async setFaqs({ commit }, response) {
        commit('setFaqs', response.data);
    },
    async setCommands({ commit }, response) {
        commit('setCommands', response.data);
    }
};

const mutations = {
    setFaqs: (state, faqs) => (state.faqs = faqs),
    setCommands: (state, commands) => (state.commands = commands)
};

export default {
    state,
    getters,
    actions,
    mutations
}