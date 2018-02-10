export const

getAuth = ({commit}) => {
    axios.get(`/api/getauth`)
        .then(resp =>{
            commit('SET_AUTH', resp.data)
        })
},

getUser = ({commit}, slug) => {
    axios.get(`/api/getprofile/${slug}`)
        .then(resp =>{
            commit('SET_USERID', resp.data[0][0]['id'])
            commit('SET_USER', resp.data[0][0])
            commit('SET_PROFILE', resp.data[1][0])
            commit('SET_CHECK', resp.data[2])
            commit('SET_AVATAR', resp.data[0][0]['avatar'])
            if(slug != resp.data[0][0]['slug']){
                axios.get(`/api/getpendingto/` + resp.data[0][0]['id'])
                    .then(resp => {
                        if(resp.data == 1){
                            commit('SET_BUTTONADDFRIEND', 'Cancel Request')
                            $('.btnAddFriend').css('background', 'orange')
                        }
                    })
            }
        })
}