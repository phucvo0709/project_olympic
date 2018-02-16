const state = {
    buttonAddFriend: 'Add Friend',
}

const actions = {
    addFriendBar({commit}, userId){
        axios.get(`/api/addfriend/${userId}`)
            .then(resp => {
                swal(resp.data);
                location.reload();
            })
    },
    deleteFriendBar ({commit}, userId){
        axios.delete(`/api/cancelrequestbar/${userId}`)
            .then(resp =>{
                swal({
                    title: resp.data,
                    type: "success"
                }).then(function () {
                    location.reload();
                });
            })
    },
    addFriend ({commit}, userId) {
        if(state.buttonAddFriend === "Add Friend"){
            axios.get(`/api/addfriend/${userId}`)
                .then(resp => {
                    swal(resp.data[1]);
                    commit('SET_BUTTONADDFRIEND', resp.data[0][0]);
                    $('.btn-breez').css('background', 'gray')
                    document.getElementsByClassName("btnAddFriend").disabled = true;
                })
        }else if(state.buttonAddFriend === "Accept Friend"){
            axios.get(`/api/acceptfriend/${userId}`)
                .then(resp => {
                    swal(resp.data)
                    commit('SET_BUTTONADDFRIEND', 'Friend');
                    $('.btnAddFriend').css('background', '#0066ff')
                    document.getElementsByClassName("btnAddFriend").disabled = true;
                })
        }else if(state.buttonAddFriend === "Cancel Request"){
            axios.delete(`/api/cancelrequest/${userId}`)
                .then(resp =>{
                    swal(resp.data)
                    commit('SET_BUTTONADDFRIEND', 'Add Friend')
                    $('.btnAddFriend').css('background', '#08ddc1')
                })
        }
    }
}

const getters = {
    buttonAddFriend: state => {
        return state.buttonAddFriend
    },
}

const mutations = {
    'SET_BUTTONADDFRIEND' (state, data){
        state.buttonAddFriend = data
    },
}
export default {
    state,
    actions,
    mutations,
    getters
}