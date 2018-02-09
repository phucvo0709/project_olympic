import Vue from 'vue'
import Vuex from 'vuex'

import about from './modules/about'
import avatar from './modules/avatar'
import friends from './modules/friends'

import * as actions from './actions'

Vue.use(Vuex);

export default new Vuex.Store({
    actions,
    modules: {
        about,
        avatar,
        friends
    }
})