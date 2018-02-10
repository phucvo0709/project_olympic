const state = {
    userId: null,
    user: [],
    profile: [],
    check: false,
}

const actions = {

}

const mutations = {
    'SET_USERID' (state, userId){
      state.userId = userId
    },
    'SET_USER' (state, user){
        state.user = user
    },
    'SET_PROFILE' (state, profile){
        state.profile = profile
    },
    'SET_CHECK' (state, check){
        state.check = check
    },
}

const getters = {
    userId: state=> {
        return state.userId
    },
    user: state => {
        return state.user
    },
    profile: state => {
        return state.profile
    },
    check: state=>{
        return state.check
    },

}

export default {
    state,
    actions,
    mutations,
    getters
}