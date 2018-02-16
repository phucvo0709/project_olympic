const state = {
    numberPendingTo: null,
    pendingToList: []
}

const mutations = {
    'SET_NUMBERPENDINGTO'(state, numberPendingTo){
        state.numberPendingTo = numberPendingTo
    },
    'SET_PENDINGTOLIST'(state, pendingToList){
        state.pendingToList = pendingToList
    },
}

const getters = {
    numberPendingTo: state => {
        return state.numberPendingTo
    },
    pendingToList: state => {
        return state.pendingToList
    }

}

export default {
    state,
    mutations,
    getters
}