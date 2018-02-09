export const

getUser = ({commit}, slug) => {
    axios.get(`/apigetprofile/` + slug)
        .then(resp =>{
            commit('SET_USER', resp.data[0][0])
            commit('SET_PROFILE', resp.data[1][0])
            commit('SET_CHECK', resp.data[2])
            commit('SET_AVATAR', resp.data[0][0]['avatar'])
            axios.get(`/getpendingto/${resp.data[0][0]['id']}`)
                .then(resp => {
                    if(resp.data = 1){
                        commit('SET_BUTTONADDFRIEND', 'Cancel Request')
                        $('#btnAddFriend').css('background', 'orange')
                    }
                })
        })
}