const state = {
    ores: {}
};

const getters = {
    allOres: (state) => state.ores
};

const actions = {
    async setOres({ commit }, response) {
        commit('setOres', response.data);
    }
};

const mutations = {
    setOres: (state, ores) => (state.ores = ores)
};

export default {
    state,
    getters,
    actions,
    mutations
}