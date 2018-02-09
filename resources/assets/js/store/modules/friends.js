const state = {
    penddingFriends: [],
}

const actions = {
    getpendingFriends ({commit}){
        axios.get('/getpendingrequest')
            .then(resp => {
                commit('GET_PENDDING_FRIENDS', resp.data)
            })
    }
}

const mutations = {
    'GET_PENDDING_FRIENDS' (state, penddingFriends){
        state.penddingFriends = penddingFriends
    }
}

const getters = {
    penddingFriends: state => {
        return state.penddingFriends
    }
}

export default {
    state,
    actions,
    mutations,
    getters
}