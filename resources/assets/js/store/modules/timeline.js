const state = {
    posts: [],
    timeCreated: null
}

const mutations = {
    'SET_POSTS'(state, posts){
        state.posts = posts
    },
}

const actions = {
    getPosts({commit}){
        axios.get('/api/getposts')
            .then(resp =>{
                commit('SET_POSTS', resp.data)
            })
    },
    addPost({commit}, data){
        axios.post('/api/createpost', {
            content: data
        }).then(resp => {
            axios.get('/api/getposts')
                .then(resp =>{
                    commit('SET_POSTS', resp.data)
                })
        })
    },
}

const getters = {
    posts: state => {
        return state.posts
    },
}

export default {
    state,
    actions,
    mutations,
    getters
}