export const

getAuth = ({commit}) => {
    axios.get(`/api/getauth`)
        .then(resp =>{
            let data = resp.data[0]
            commit('SET_AUTHID', data['id'])
            commit('SET_AUTHNAME', data['name'])
            commit('SET_AUTHAVATAR', data['avatar'])
            commit('SET_AUTHSLUG', data['slug'])
        })
},

getUser = ({commit}, slug) => {
    axios.get(`/api/getprofile/${slug}`)
        .then(resp =>{
            console.log(resp.data[0])
            var userId = resp.data[0][0]['id']
            commit('SET_USERID', userId)
            commit('SET_USER', resp.data[0][0])
            commit('SET_PROFILE', resp.data[0][0]['profile'])
            commit('SET_CHECK', resp.data[1])
            commit('SET_AVATAR', resp.data[0][0]['avatar'])
            if(slug = resp.data[0][0]['slug']){
                axios.get(`/api/checkfriend/` + userId)
                    .then(resp =>{
                        var btn = $('.btnAddFriend')
                        if(resp.data[0] == "Friend" || resp.data[1] == "Friend"){
                            commit('SET_BUTTONADDFRIEND', 'Friend')
                            btn.css('background', '#0066ff')
                            btn.disabled = true;
                            btn.css('display', 'block')
                        }else{
                            btn.disabled = false;
                            axios.get(`/api/getpendingfrom/` + userId )
                                .then(resp => {
                                    if(resp.data === 1){
                                        commit('SET_BUTTONADDFRIEND', 'Accept Friend')
                                        btn.css('background', '#4CAF50')
                                        btn.disabled = false
                                        btn.css('display', 'block')
                                    }
                                })
                            axios.get(`/api/getpendingto/` + userId)
                                .then(resp => {
                                    if(resp.data === 1){
                                        commit('SET_BUTTONADDFRIEND', 'Cancel Request')
                                        btn.css('background', 'orange')
                                        btn.disabled = false
                                        btn.css('display', 'block')
                                    }
                                })
                            btn.css('display', 'block')
                        }
                    })
            }
        })
},

getPendingToList = ({commit}) => {
    axios.get('/api/getpendingtolist')
        .then(resp => {
           commit('SET_NUMBERPENDINGTO', resp.data.length)
            commit('SET_PENDINGTOLIST', resp.data)
        })
}