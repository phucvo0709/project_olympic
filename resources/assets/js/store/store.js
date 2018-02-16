import Vue from 'vue'
import Vuex from 'vuex'

import auth from './modules/auth'
import about from './modules/about'
import avatar from './modules/avatar'
import friends from './modules/friends'
import buttonAddFriend from './modules/buttonAddFriend'
import pendingRequestTo from './modules/PendingRequestTo'

import * as actions from './actions'

Vue.use(Vuex);

export default new Vuex.Store({
    actions,
    modules: {
        auth,
        about,
        avatar,
        friends,
        buttonAddFriend,
        pendingRequestTo
    }
})