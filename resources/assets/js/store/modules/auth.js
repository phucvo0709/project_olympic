const state = {
    authId: null,
    authName: null,
    authAvatar: null,
    authSlug: null
}

const mutations = {
    'SET_AUTHID'(state, authId){
        state.authId = authId
    },
    'SET_AUTHNAME'(state, authName){
        state.authName = authName
    },
    'SET_AUTHAVATAR' (state, authAvatar){
        state.authAvatar = authAvatar
    },
    'SET_AUTHSLUG'(state, authSlug){
        state.authSlug = authSlug
    }
}

const getters = {
    authId: state => {
        return state.authId
    },
    authName: state => {
        return state.authName
    },
    authAvatar: state => {
        return state.authAvatar
    },
    authSlug: state => {
        return state.authSlug
    }
}

export default {
    state,
    mutations,
    getters
}