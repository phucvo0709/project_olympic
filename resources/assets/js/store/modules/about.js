const state = {
    user: [],
    profile: [],
    check: false,
    buttonAddFriend: 'Add Friend',
}

const actions = {

}

const mutations = {
    'SET_USER' (state, user){
        state.user = user
    },
    'SET_PROFILE' (state, profile){
        state.profile = profile
    },
    'SET_CHECK' (state, check){
        state.check = check
    },
    'SET_BUTTONADDFRIEND' (state, data){
        state.buttonAddFriend = data
    },
}

const getters = {
    user: state => {
        return state.user
    },
    profile: state => {
        return state.profile
    },
    buttonAddFriend: state => {
        return state.buttonAddFriend
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