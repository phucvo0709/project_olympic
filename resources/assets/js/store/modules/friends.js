const state = {
    penddingFriends: [],

    from: null,
    to: null,
    total: null,
    firstPageUrl: null,
    prevPageUrl: null,
    currentPage: null,
    nextPageUrl: null,
    lastPageUrl: null,
    totalPageArr: []
}
const actions = {

    getpendingFriends ({commit}){
        axios.get('http://olympic.test/api/getpendingrequest')
            .then (resp => {
                let data = resp.data.data

                //Data friends
                let dataUsers = []
                data.forEach(function(dataUser){
                    dataUsers.push(dataUser.user)
                })
                commit('GET_PENDDING_FRIENDS', dataUsers)

                //data pagination
                let from = resp.data.from
                let to = resp.data.to
                let total = resp.data.total
                let firstPageUrl = resp.data.first_page_url
                let prevPageUrl = resp.data.prev_page_url
                let currentPage = resp.data.current_page
                let nextPageUrl = resp.data.next_page_url
                let lastPageUrl = resp.data.last_page_url

                let totalPage = Math.ceil(total/4)
                let totalPageArr = [];
                let i ;
                let min = Math.max(currentPage - 4, 1)
                let max = Math.min(currentPage + 4, totalPage)
                console.log(min, max)
                for(i = min; i <= max; i++){
                    totalPageArr.push(i)
                }

                commit('GET_FROM', from)
                commit('GET_TO', to)
                commit('GET_TOTAL', total)
                commit('GET_FIRSTPAGEURL', firstPageUrl)
                commit('GET_PREVPAGEURL', prevPageUrl)
                commit('GET_CURRENTPAGE', currentPage)
                commit('GET_NEXTPAGEURL', nextPageUrl)
                commit('GET_LASTPAGEURL', lastPageUrl)
                commit('GET_TOTALPAGEARR', totalPageArr)
            })
    },
    getActionPagination({commit}, url){
        axios.get(url)
            .then (resp => {
                let data = resp.data.data

                //Data friends
                let dataUsers = []
                data.forEach(function(dataUser){
                    dataUsers.push(dataUser.user)
                })
                commit('GET_PENDDING_FRIENDS', dataUsers)

                //data pagination
                let from = resp.data.from
                let to = resp.data.to
                let total = resp.data.total
                let prevPageUrl = resp.data.prev_page_url
                let currentPage = resp.data.current_page
                let nextPageUrl = resp.data.next_page_url

                let totalPage = Math.ceil(total/4)
                let totalPageArr = [];
                let i ;
                let min = Math.max(currentPage - 1, 1)
                let max = Math.min(currentPage + 4, totalPage)
                console.log(min, max)
                for(i = min; i <= max; i++){
                    totalPageArr.push(i)
                }

                commit('GET_FROM', from)
                commit('GET_TO', to)
                commit('GET_TOTAL', total)
                commit('GET_PREVPAGEURL', prevPageUrl)
                commit('GET_CURRENTPAGE', currentPage)
                commit('GET_NEXTPAGEURL', nextPageUrl)
                commit('GET_TOTALPAGEARR', totalPageArr)
            })
    }
}

const mutations = {
    'GET_PENDDING_FRIENDS' (state, penddingFriends){
        state.penddingFriends = penddingFriends
    },

    'GET_FROM' (state, from){
        state.from = from
    },
    'GET_TO' (state, to){
        state.to = to
    },
    'GET_TOTAL' (state, total){
        state.total = total
    },
    'GET_FIRSTPAGEURL' (state, firstPageUrl){
        state.firstPageUrl = firstPageUrl
    },
    'GET_PREVPAGEURL' (state, prevPageUrl){
        state.prevPageUrl = prevPageUrl
    },
    'GET_CURRENTPAGE' (state, currentPage){
        state.currentPage = currentPage
    },
    'GET_NEXTPAGEURL' (state, nextPageUrl){
        state.nextPageUrl = nextPageUrl
    },
    'GET_LASTPAGEURL' (state, lastPageUrl){
        state.lastPageUrl = lastPageUrl
    },
    'GET_TOTALPAGEARR' (state, totalPageArr){
        state.totalPageArr = totalPageArr
    }
}

const getters = {
    penddingFriends: state => {
        return state.penddingFriends
    },

    from: state => {
        return state.from
    },
    to: state => {
        return state.to
    },
    total: state => {
        return state.total
    },
    firstPageUrl: state => {
        return state.firstPageUrl
    },
    prevPageUrl: state => {
        return state.prevPageUrl
    },
    currentPage: state => {
        return state.currentPage
    },
    nextPageUrl: state => {
        return state.nextPageUrl
    },
    lastPageUrl: state => {
        return state.lastPageUrl
    },
    totalPageArr: state => {
        return state.totalPageArr
    }
}

export default {
    state,
    actions,
    mutations,
    getters
}
