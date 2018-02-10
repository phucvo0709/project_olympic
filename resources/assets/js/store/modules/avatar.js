const state = {
    avatar: null
}

const actions = {

    updateDisplayAvatar({commit}, e){
        commit('UPDATE_AVATAR', e)
    },
    updateAvatar(){
        axios.post('/api/updateavatar', {
            'avatar': state.avatar,
        })
            .then(resp => {
                swal(resp.data)
                    .then(() => {
                        location.reload()
                    });
            })
    }
}

const mutations = {
    'SET_AVATAR'(state, avatar){
        state.avatar = avatar
    },
    'UPDATE_AVATAR' (state, e){
        state.avatar = e
    }
}

const getters = {
    avatar: state => {
        return state.avatar
    }
}

export default {
    state,
    actions,
    mutations,
    getters
}