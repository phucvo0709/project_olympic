const state = {
    authId: null
}

const mutations = {
    'SET_AUTH'(state, id){
        state.authId = id
    },
}

const getters = {
    authId: state => {
        return state.authId
    }
}

export default {
    state,
    mutations,
    getters
}